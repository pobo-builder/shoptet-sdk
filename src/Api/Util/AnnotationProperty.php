<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api\Util;

/**
 * Class AnnotationProperty
 */
class AnnotationProperty extends \ReflectionProperty
{
    /** @var array */
    protected $annotations;

    /**
     * AnnotationProperty constructor.
     *
     * @param string $class
     * @param string $name
     * @throws \ReflectionException
     * @throws \JsonException
     */
    public function __construct(string $class, string $name)
    {
        parent::__construct($class, $name);

        preg_match_all(
            "/@([\w]+)[\s]*([\w]+(\[\])?|(\((.*?)\)(?:\s|$))?)/",
            $this->getDocComment(),
            $matches
        );

        $annotations = [];
        $i = 0;
        foreach ($matches[0] as $annotation) {
            $annotations[] = [
                'annotation' => trim($annotation),
                'name' => trim($matches[1][$i]),
                'value' => $this->getAnnotationValue($matches[2][$i])
            ];
            $i++;
        }

        $this->annotations = $annotations;
    }

    /**
     * @param string|null $value
     * @return mixed|string|null
     */
    private function getAnnotationValue(?string $value = null): ?string
    {
        $returnValue = null;
        if (!($value === null)) {
            $value = trim($value, ")( \t\n\r\0\x0B");
            if ($this->isJson($value)) {
                $returnValue = json_decode($value);
            } else {
                $returnValue = trim($value);
            }
        }

        return $returnValue;
    }

    /**
     * @param string $args
     * @return bool
     */
    private function isJson(string $args): bool
    {
        json_decode($args);
        return (json_last_error() === JSON_ERROR_NONE);
    }

    /**
     * @param string $annotation
     * @return bool
     */
    public function hasAnnotation(string $annotation): bool
    {
        foreach ($this->annotations as $a) {
            if (strtolower($a['name']) === strtolower($annotation)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @param String $annotation
     * @return bool|mixed
     */
    public function getAnnotation(string $annotation)
    {
        foreach ($this->annotations as $a) {
            if (strtolower($a['name']) === strtolower($annotation)) {
                return $a;
            }
        }

        return false;
    }


}
