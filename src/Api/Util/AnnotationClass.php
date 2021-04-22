<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api\Util;

/**
 * Class AnnotationClass
 */
class AnnotationClass extends \ReflectionClass
{
    /** @var array */
    protected $annotationProperties;

    /**
     * @param $name
     * @return AnnotationProperty
     * @throws \ReflectionException
     * @throws \JsonException
     * @throws \JsonException
     */
    public function getAnnotationProperty($name): AnnotationProperty
    {
        if (empty($this->getName())) {
            throw new \RuntimeException("ReflectionClassName is empty!");
        }

        return new AnnotationProperty($this->getName(), $name);
    }

    /**
     * @param $name
     * @return array
     * @throws \ReflectionException
     */
    public function getPropertyWithAnnotation($name): array
    {
        if (!isset($this->annotationProperties)) {
            $this->initAnnotationProperties();
        }

        $properties = [];
        foreach ($this->annotationProperties as $property) {
            if ($property->hasAnnotation($name)) {
                $properties[] = $property;
            }
        }

        return $properties;
    }

    /**
     * @param int|null $filter
     * @throws \ReflectionException
     */
    private function initAnnotationProperties(?int $filter = null): void
    {
        $this->annotationProperties = $this->getAnnotationProperties($filter);
    }

    /**
     * @param int|null $filter
     * @return array
     * @throws \ReflectionException
     * @throws \JsonException
     * @throws \JsonException
     */
    public function getAnnotationProperties(?int $filter = null): array
    {
        $properties = ($filter === null ? $this->getProperties() : $this->getProperties($filter));
        $property = [];
        foreach ($properties as $p) {
            $property[] = new AnnotationProperty($this->getName(), $p->getName());
        }

        return $property;
    }
}
