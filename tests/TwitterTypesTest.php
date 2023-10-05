<?php

use Astrotomic\OpenGraph\Types\Twitter\App;
use Astrotomic\OpenGraph\Types\Twitter\Player;
use Astrotomic\OpenGraph\Types\Twitter\Summary;
use Astrotomic\OpenGraph\Types\Twitter\SummaryLargeImage;

use function Spatie\Snapshots\{assertMatchesHtmlSnapshot};

it('can generate summary tags', function () {
    $og = Summary::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->image('http://www.example.com/image1.jpg', 'Image alternate text');

    assertMatchesHtmlSnapshot((string) $og);
})->group('twitter', 'summary');

it('can generate summary with large image tags', function () {
    $og = SummaryLargeImage::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->creator('@devgummibeer')
        ->image('http://www.example.com/image1.jpg', 'Image alternate text');

    assertMatchesHtmlSnapshot((string) $og);
})->group('twitter', 'summary_large_image');

it('can generate player tags', function () {
    $og = Player::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->image('http://www.example.com/image1.jpg', 'Image alternate text')
        ->player('http://www.example.com/player.iframe', 1920, 1080);

    assertMatchesHtmlSnapshot((string) $og);
})->group('twitter', 'player');

it('can generate iPhone app tags ', function () {
    //Without URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPhoneApp('AppName', 'A1B2C3D4E5');
    assertMatchesHtmlSnapshot((string)$og);

    //With Correct URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPhoneApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com');
    assertMatchesHtmlSnapshot((string)$og);

    //With Wrong URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPhoneApp('AppName', 'A1B2C3D4E5', 'https:/app.domainname.com');
    assertMatchesHtmlSnapshot((string)$og);

    //With Correct Country
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPhoneApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com')
        ->country('HR');
    assertMatchesHtmlSnapshot((string)$og);

    //With Wrong Country
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPhoneApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com')
        ->country('CRO');
    assertMatchesHtmlSnapshot((string)$og);
})->group('twitter', 'app');

it('can generate iPad app tags ', function () {
    //Without URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPadApp('AppName', 'A1B2C3D4E5');
    assertMatchesHtmlSnapshot((string)$og);

    //With Correct URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPadApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com');
    assertMatchesHtmlSnapshot((string)$og);

    //With Wrong URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPadApp('AppName', 'A1B2C3D4E5', 'https:/app.domainname.com');
    assertMatchesHtmlSnapshot((string)$og);

    //With Correct Country
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPadApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com')
        ->country('HR');
    assertMatchesHtmlSnapshot((string)$og);

    //With Wrong Country
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPadApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com')
        ->country('CRO');
    assertMatchesHtmlSnapshot((string)$og);
})->group('twitter', 'app');

it('can generate Google Play app tags ', function () {
    //Without URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->googlePlayApp('AppName', 'id123456789');
    assertMatchesHtmlSnapshot((string)$og);

    //With Correct URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->googlePlayApp('AppName', 'id123456789', 'https://app.domainname.com');
    assertMatchesHtmlSnapshot((string)$og);

    //With Wrong URL
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->googlePlayApp('AppName', 'id123456789', 'https:/app.domainname.com');
    assertMatchesHtmlSnapshot((string)$og);

    //With Correct Country
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->googlePlayApp('AppName', 'id123456789', 'https://app.domainname.com')
        ->country('HR');
    assertMatchesHtmlSnapshot((string)$og);

    //With Wrong Country
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->googlePlayApp('AppName', 'id123456789', 'https://app.domainname.com')
        ->country('CRO');
    assertMatchesHtmlSnapshot((string)$og);
})->group('twitter', 'app');

it('can generate combined app tags ', function () {
    $og = App::make('Title | Example')
        ->description('Description')
        ->site('@astrotomic_oss')
        ->iPadApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com')
        ->iPhoneApp('AppName', 'A1B2C3D4E5', 'https://app.domainname.com')
        ->googlePlayApp('AppName', 'id123456789', 'https://app.domainname.com')
        ->country('HR');
    assertMatchesHtmlSnapshot((string)$og);
})->group('twitter', 'app');
