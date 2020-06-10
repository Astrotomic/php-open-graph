<?php

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

it('can generate website tags with conditional callbacks', function () {
    $og = Website::make('Title | Example')
        ->url('http://www.example.com')
        ->description('Description')
        ->locale('en_US')
        ->when(false, fn (Website $og) => $og->alternateLocale('de_DE'))
        ->when(true, fn (Website $og) => $og->alternateLocale('en_GB'))
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
