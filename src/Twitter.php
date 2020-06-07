<?php

namespace Astrotomic\OpenGraph;

use Astrotomic\OpenGraph\Types\Article;
use Astrotomic\OpenGraph\Types\Book;
use Astrotomic\OpenGraph\Types\Music\Album;
use Astrotomic\OpenGraph\Types\Music\Playlist;
use Astrotomic\OpenGraph\Types\Music\RadioStation;
use Astrotomic\OpenGraph\Types\Music\Song;
use Astrotomic\OpenGraph\Types\Profile;
use Astrotomic\OpenGraph\Types\Twitter\Player;
use Astrotomic\OpenGraph\Types\Twitter\Summary;
use Astrotomic\OpenGraph\Types\Twitter\SummaryLargeImage;
use Astrotomic\OpenGraph\Types\Video\Episode;
use Astrotomic\OpenGraph\Types\Video\Movie;
use Astrotomic\OpenGraph\Types\Video\Other;
use Astrotomic\OpenGraph\Types\Video\TvShow;
use Astrotomic\OpenGraph\Types\Website;

class Twitter
{
    public static function summary(?string $title = null): Summary
    {
        return Summary::make($title);
    }

    public static function summaryLargeImage(?string $title = null): SummaryLargeImage
    {
        return SummaryLargeImage::make($title);
    }

    public static function player(?string $title = null): Player
    {
        return Player::make($title);
    }
}
