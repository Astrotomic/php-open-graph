<?php

namespace Spatie\OpenGraph;

abstract class OpenGraphObject
{
    /** @var string */
    protected $prefix = 'og';

    /** @var \Spatie\OpenGraph\PropertyTag[] */
    protected $tags = [];

    /** @var \Spatie\OpenGraph\OpenGraphObject[] */
    protected $objects = [];

    public function getMetaTags(): string
    {
        $html = '';
        foreach ($this->getTags() as $tag) {
            $html .= $tag->renderHtml().PHP_EOL;
        }

        return $html;
    }

    public function getTagsArray(): array
    {
        $tagsArray = [];
        foreach ($this->getTags() as $tag) {
            $tagsArray[$tag->getProperty()] = $tag->getContent();
        }

        return $tagsArray;
    }

    /**
     * Get an array of PropertyTag objects for all properties in the current OpenGraphObject
     * and it's attached OpenGraphObjects.
     *
     * @return \Spatie\OpenGraph\PropertyTag[]
     */
    protected function getTags(): array
    {
        $this->prepareTags();

        $objectTags = [];

        foreach($this->objects as $object) {
            $objectTags = array_merge($objectTags, $object->getTags());
        }

        return array_merge($this->tags, $objectTags);
    }

    protected function addObject(?OpenGraphObject $object)
    {
        if (! $object) {
            return;
        }

        $this->objects[] = $object;
    }

    protected function setProperty(string $property, ?string $content = null, ?string $prefix = null)
    {
        if (! $content) {
            return;
        }

        if ($tag = $this->getProperty($property, $prefix)) {
            $tag->content = $content;

            return;
        }

        $this->addProperty($property, $content, $prefix);
    }

    protected function addProperty(string $property, ?string $content = null, ?string $prefix = null)
    {
        $this->tags[] = PropertyTag::create($prefix ?? $this->prefix, $property, $content);
    }


    protected function getProperty(string $property, ?string $prefix)
    {
        foreach ($this->tags as $tag) {
            if ($tag->property === $property && $tag->prefix === $prefix ?? $this->prefix) {
                return $tag;
            }
        }

        return null;
    }

    protected function prepareTags() {
        //
    }
}
