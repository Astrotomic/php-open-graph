<?php

namespace Astrotomic\OpenGraph\Types;

use Astrotomic\OpenGraph\Type;
use DateTime;

class Book extends Type
{
    protected const PREFIX = 'book';

    protected string $type = 'book';

    public function author(string $url)
    {
        $this->addProperty(self::PREFIX, 'author', $url);

        return $this;
    }

    public function isbn(string $isbn)
    {
        $this->setProperty(self::PREFIX, 'isbn', $isbn);

        return $this;
    }

    public function releasedAt(DateTime $releaseDate)
    {
        $this->setProperty(self::PREFIX, 'release_date', $releaseDate->format('Y-m-d'));

        return $this;
    }

    public function tag(string $tag)
    {
        $this->addProperty(self::PREFIX, 'tag', $tag);

        return $this;
    }
}
