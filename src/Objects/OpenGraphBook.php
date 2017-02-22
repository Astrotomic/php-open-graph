<?php

namespace Spatie\OpenGraph\Objects;

class OpenGraphBook
{
    /** @var array */
    protected $authors;

    /** @var string */
    protected $isbn;

    /** @var string */
    protected $releaseDate;

    /** @var array */
    protected $tags;

    public function __construct(string $isbn, string $releaseDate)
    {
        $this->isbn = $isbn;
        $this->$releaseDate = $releaseDate;
    }

    public static function create(string $isbn, string $releaseDate)
    {
        return new static(...func_get_args());
    }
}
