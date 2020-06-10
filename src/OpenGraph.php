<?php
namespace Astrotomic\OpenGraph;

use Astrotomic\OpenGraph\Types\Article;
use Astrotomic\OpenGraph\Types\Book;
use Astrotomic\OpenGraph\Types\Music\Album;
use Astrotomic\OpenGraph\Types\Music\Playlist;
use Astrotomic\OpenGraph\Types\Music\RadioStation;
use Astrotomic\OpenGraph\Types\Music\Song;
use Astrotomic\OpenGraph\Types\Profile;
use Astrotomic\OpenGraph\Types\Video\Episode;
use Astrotomic\OpenGraph\Types\Video\Movie;
use Astrotomic\OpenGraph\Types\Video\Other;
use Astrotomic\OpenGraph\Types\Video\TvShow;
use Astrotomic\OpenGraph\Types\Website;

class OpenGraph{

	public static function website(?string $title = null): Website{
		return Website::make($title);
	}

	public static function article(?string $title = null): Article{
		return Article::make($title);
	}

	public static function book(?string $title = null): Book{
		return Book::make($title);
	}

	public static function profile(?string $title = null): Profile{
		return Profile::make($title);
	}

	public static function movie(?string $title = null): Movie{
		return Movie::make($title);
	}

	public static function tvShow(?string $title = null): TvShow{
		return TvShow::make($title);
	}

	public static function episode(?string $title = null): Episode{
		return Episode::make($title);
	}

	public static function other(?string $title = null): Other{
		return Other::make($title);
	}

	public static function album(?string $title = null): Album{
		return Album::make($title);
	}

	public static function song(?string $title = null): Song{
		return Song::make($title);
	}

	public static function playlist(?string $title = null): Playlist{
		return Playlist::make($title);
	}

	public static function radioStation(?string $title = null): RadioStation{
		return RadioStation::make($title);
	}

}