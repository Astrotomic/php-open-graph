<?php

use Astrotomic\OpenGraph\StructuredProperties\Image;
use Astrotomic\OpenGraph\StructuredProperties\Video;
use Astrotomic\OpenGraph\Types\Video\Episode;
use Astrotomic\OpenGraph\Types\Video\Movie;
use Astrotomic\OpenGraph\Types\Video\Other;
use Astrotomic\OpenGraph\Types\Video\TvShow;
use function Spatie\Snapshots\{assertMatchesHtmlSnapshot};

it('can generate movie tags', function () {
    $og = Movie::make('Title | Example')
        ->url('http://www.example.com/movie')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')
        ->image(
            Image::make('http://www.example.com/image2.jpg')
                ->width(1920)
                ->height(1080)
                ->mimeType('image/jpg')
                ->alt('Movie Wallpaper')
        )
        ->video('http://www.example.com/trailer.mp4')

        ->releasedAt(new DateTime('2020-06-05'))
        ->actor('http://www.example.com/actor1', 'role1')
        ->actor('http://www.example.com/actor2', 'role2')
        ->director('http://www.example.com/director')
        ->writer('http://www.example.com/writer')
        ->duration(60 * 90)
        ->tag('Crime')
        ->tag('Thriller');

    assertMatchesHtmlSnapshot((string) $og);
})->group('video', 'movie');

it('can generate tv show tags', function () {
    $og = TvShow::make('Title | Example')
        ->url('http://www.example.com/tvshow')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->releasedAt(new DateTime('2020-06-05'))
        ->actor('http://www.example.com/actor', 'role')
        ->director('http://www.example.com/director')
        ->writer('http://www.example.com/writer')
        ->tag('Crime');

    assertMatchesHtmlSnapshot((string) $og);
})->group('video', 'tv_show');

it('can generate episode tags', function () {
    $og = Episode::make('Title | Example')
        ->url('http://www.example.com/episode')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->series('http://www.example.com/tvshow')
        ->releasedAt(new DateTime('2020-06-05'))
        ->duration(60 * 25)
        ->actor('http://www.example.com/actor', 'role')
        ->director('http://www.example.com/director')
        ->writer('http://www.example.com/writer')
        ->tag('Crime');

    assertMatchesHtmlSnapshot((string) $og);
})->group('video', 'episode');

it('can generate other tags', function () {
    $og = Other::make('Title | Example')
        ->url('http://www.example.com/other')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')
        ->video(
            Video::make('http://www.example.com/video.mp4')
                ->width(1920)
                ->height(1080)
                ->mimeType('video/mp4')
                ->alt('Movie Wallpaper')
        )

        ->releasedAt(new DateTime('2020-06-05'))
        ->duration(60 * 3.5)
        ->actor('http://www.example.com/actor', 'role')
        ->director('http://www.example.com/director')
        ->writer('http://www.example.com/writer')
        ->tag('Crime');

    assertMatchesHtmlSnapshot((string) $og);
})->group('video', 'other');
