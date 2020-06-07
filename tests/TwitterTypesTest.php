<?php

use Astrotomic\OpenGraph\Types\Twitter\Player;
use Astrotomic\OpenGraph\Types\Twitter\Summary;
use Astrotomic\OpenGraph\Types\Twitter\SummaryLargeImage;

it('can generate summary tags', function () {
    $og = Summary::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->image('http://www.example.com/image1.jpg', 'Image alternate text');

    assertMatchesHtmlSnapshot((string) $og);
})->group('twitter');

it('can generate summary with large image tags', function () {
    $og = SummaryLargeImage::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->image('http://www.example.com/image1.jpg', 'Image alternate text');

    assertMatchesHtmlSnapshot((string) $og);
})->group('twitter');

it('can generate player tags', function () {
    $og = Player::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->image('http://www.example.com/image1.jpg', 'Image alternate text')
        ->player('http://www.example.com/player.iframe', 1920, 1080);

    assertMatchesHtmlSnapshot((string) $og);
})->group('twitter');
