<?php

namespace Spatie\OpenGraph;

class OpenGraphBook extends OpenGraph
{
    /** @var string */
    protected $prefix = 'book';

    /** @var string */
    protected $type = 'book';

    /** @return static */
    public function isbn(string $isbn)
    {
        $this->addTag('isbn', $isbn);

        return $this;
    }

    /** @return static */
    public function author(string $author)
    {
        $this->addTag('author', $author);

        return $this;
    }

    /** @return static */
    public function releaseDate(string $release_date)
    {
        $this->addTag('release_date', $release_date);

        return $this;
    }

    /** @return static */
    public function tag(string $tag)
    {
        $this->addTag('tag', $tag);

        return $this;
    }
}
