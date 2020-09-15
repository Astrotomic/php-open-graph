<?php

use Astrotomic\OpenGraph\StructuredProperties\Audio;
use Astrotomic\OpenGraph\StructuredProperties\Image;
use Astrotomic\OpenGraph\Types\Article;
use Astrotomic\OpenGraph\Types\Book;
use Astrotomic\OpenGraph\Types\Profile;
use Astrotomic\OpenGraph\Types\Website;

it('can generate website tags', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg');

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'website');

it('can generate website tags with stringable image', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image(new class() {
            public function __toString()
            {
                return 'http://www.example.com/image1.jpg';
            }
        });

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'website');

it('can generate website tags with structured image', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image(Image::make('http://www.example.com/image1.jpg')->mimeType('image/jpeg'));

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'website');

it('can generate website tags with structured image without url suffix', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image(Image::make('http://www.example.com/image1.jpg', false)->mimeType('image/jpeg'));

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'website');

it('can generate website tags with conditional callbacks', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->when(false, function (Website $og) {
            $og->alternateLocale('de_DE');
        })
        ->when(true, function (Website $og) {
            $og->alternateLocale('en_GB');
        })
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg');

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'website');

it('can generate website tags with conditional proxies', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->when(false)->alternateLocale('de_DE')
        ->when(true)->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg');

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'website');

it('can generate article tags', function () {
    $og = Article::make('Article | Example')
        ->url('http://www.example.com/article')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')
        ->audio(
            Audio::make('http://www.example.com/audio.mp3')
                ->mimeType('audio/mp3')
        )

        ->publishedAt(new DateTime('2020-06-05 20:00:00'))
        ->modifiedAt(new DateTime('2020-06-07 20:00:00'))
        ->author('http://www.example.com/author')
        ->section('Technology')
        ->tag('PHP');

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'article');

it('can generate book tags', function () {
    $og = Book::make('Book | Example')
        ->url('http://www.example.com/book')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->releasedAt(new DateTime('2020-06-05'))
        ->isbn('978-3-86680-192-9')
        ->author('http://www.example.com/author')
        ->tag('PHP');

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'book');

it('can generate profile tags', function () {
    $og = Profile::make('Profile | Example')
        ->url('http://www.example.com/profile')
        ->description('Description')
        ->locale('en_US')
        ->alternateLocale('en_GB')
        ->siteName('Example')
        ->image('http://www.example.com/image1.jpg')

        ->firstName('Jane')
        ->lastName('Doe')
        ->username('janedoe')
        ->gender('female');

    assertMatchesHtmlSnapshot((string) $og);
})->group('global', 'profile');
