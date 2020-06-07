<?php

use Astrotomic\OpenGraph\Type;
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
        ->image('http://www.example.com/image1.jpg')
    ;

    assertMatchesHtmlSnapshot((string)$og);
});

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
        ->tag('PHP')
    ;

    assertMatchesHtmlSnapshot((string)$og);
});

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
        ->tag('PHP')
    ;

    assertMatchesHtmlSnapshot((string)$og);
});

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
        ->gender('female')
    ;

    assertMatchesHtmlSnapshot((string)$og);
});
