<?php

namespace Astrotomic\OpenGraph;

use Astrotomic\OpenGraph\Types\Article;
use Astrotomic\OpenGraph\Types\Book;
use Astrotomic\OpenGraph\Types\Profile;
use Astrotomic\OpenGraph\Types\Website;

class OpenGraph
{
    public static function website(?string $title = null): Website
    {
        return Website::make($title);
    }

    public static function article(?string $title = null): Article
    {
        return Article::make($title);
    }

    public static function book(?string $title = null): Book
    {
        return Book::make($title);
    }

    public static function profile(?string $title = null): Profile
    {
        return Profile::make($title);
    }
}
