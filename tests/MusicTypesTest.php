<?php

use Astrotomic\OpenGraph\Types\Music\Album;
use Astrotomic\OpenGraph\Types\Music\Playlist;
use Astrotomic\OpenGraph\Types\Music\RadioStation;
use Astrotomic\OpenGraph\Types\Music\Song;

use function Spatie\Snapshots\{assertMatchesHtmlSnapshot};

it('can generate song tags', function () {
    $og = Song::make('Title | Example')
        ->url('http://www.example.com/song')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')
        ->audio('http://www.example.com/song.mp3')

        ->duration(60 * 1.5)
        ->musician('http://www.example.com/musician')
        ->album('http://www.example.com/album', 1, 4);

    assertMatchesHtmlSnapshot((string) $og);
})->group('music', 'song');

it('can generate album tags', function () {
    $og = Album::make('Title | Example')
        ->url('http://www.example.com/album')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->musician('http://www.example.com/musician')
        ->song('http://www.example.com/song1', 1, 1)
        ->song('http://www.example.com/song2', 1, 2)
        ->song('http://www.example.com/song3', 1, 3)
        ->song('http://www.example.com/song4', 1, 4)
        ->releasedAt(new DateTime('2020-06-05'));

    assertMatchesHtmlSnapshot((string) $og);
})->group('music', 'album');

it('can generate playlist tags', function () {
    $og = Playlist::make('Title | Example')
        ->url('http://www.example.com/playlist')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->creator('http://www.example.com/creator')
        ->song('http://www.example.com/song1', 1, 1)
        ->song('http://www.example.com/song2', 1, 2)
        ->song('http://www.example.com/song3', 1, 3)
        ->song('http://www.example.com/song4', 1, 4);

    assertMatchesHtmlSnapshot((string) $og);
})->group('music', 'playlist');

it('can generate radiostation tags', function () {
    $og = RadioStation::make('Title | Example')
        ->url('http://www.example.com/radiostation')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->creator('http://www.example.com/creator');

    assertMatchesHtmlSnapshot((string) $og);
})->group('music', 'radio_station');
