<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api\Traits;

use Pobo\ShoptetSdk\Api\Util\AnnotationClass;

/**
 * Trait PropertyPopulateTrait
 */
trait PropertyPopulateTrait
{
    /** @var array */
    private static $reservedTypes = [
        'array',
        'bool',
        'boolean',
        'float',
        'DateTime',
        'int',
        'integer',
        'string',
    ];

    /**
     * @param array $values
     * @return self
     * @throws \Exception
     */
    public function populate(array $values = []): self
    {
        $reflectionClass = new \ReflectionClass($this);
        $eac = new AnnotationClass(get_class($this));

        foreach ($values as $key => $value) {
            if (!property_exists($this, $key)) {
                //TODO: log in the future
                continue;
            }

            // simple property annotation reader
            $var = $eac->getAnnotationProperty($key)->getAnnotation('var')['value'];

            // test class is response
            $isResponse = (strpos($reflectionClass->getName(), 'Response') !== false);
            if ($isResponse) {
                $isCollection = false;
                $subClass = $var;

                // detect collection Type[]
                if (substr($subClass, -2) === '[]') {
                    $isCollection = true;
                    $subClass = str_replace('[]', '', $subClass);
                }

                // detect subclass
                if (
                    !in_array($var, self::$reservedTypes, true)
                    && !(strpos($var, '\\') === 0)
                    && class_exists($subClassNamespace = $reflectionClass->getName() . '\\' . $subClass)
                ) {
                    $subClass = $subClassNamespace;
                }

                // populate
                if (method_exists($subClass, 'populate')) {
                    if ($isCollection) {
                        foreach ($value as $val) {
                            if (!is_array($val)) {
                                continue;
                            }
                            $cls = (new $subClass())->populate($val);
                            $this->$key[] = $cls;
                        }
                    } elseif (is_array($value)) {
                        $cls = (new $subClass())->populate($value);
                        $this->$key = $cls;
                    }
                    continue;
                }
            }

            if (is_array($this->$key) && !is_array($value)) {
                continue;
            }

            if (strpos($var, 'DateTime') !== false) {
                $format = 'Y-m-d';
                $this->$key = \DateTime::createFromFormat($format, $value);
                continue;
            }
            $this->$key = $value;
        }
        return $this;
    }
}
