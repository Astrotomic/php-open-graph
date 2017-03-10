<?php

namespace Spatie\OpenGraph\Types;


class OpenGraphBook extends OpenGraphBaseType
{
    /** @var string */
    protected $prefix = 'book';

    /** @var string */
    protected $type = 'book';

    /** @return static */
    public function isbn(string $isbn)
    {
        $this->setProperty('isbn', $isbn);

        return $this;
    }

    /** @return static */
    public function author(string $author)
    {
        $this->setProperty('author', $author);

        return $this;
    }

    /** @return static */
    public function releaseDate(string $release_date)
    {
        $this->setProperty('release_date', $release_date);

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return static
     */
    public function addTag(string $tag)
    {
        $this->addProperty('tag', $tag);

        return $this;
    }
}
