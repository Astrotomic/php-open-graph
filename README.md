**THIS DEMO IS CURRENTLY IN DEVELOPMENT, DO NOT USE.**

# Easily generate Open Graph tags

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/open-graph.svg?style=flat-square)](https://packagist.org/packages/spatie/open-graph)
[![Build Status](https://img.shields.io/travis/spatie/open-graph/master.svg?style=flat-square)](https://travis-ci.org/spatie/open-graph)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/open-graph.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/open-graph)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/open-graph.svg?style=flat-square)](https://packagist.org/packages/spatie/open-graph)


The [Open Graph protocol](http://ogp.me/) protocol provides a way to add rich social graphs to any webpage. It's used on websites like Facebook, Twitter, Google+ and LinkedIn. 

This package provides a fluent builder for these Open Graph objects as specified in the [official RDF schema](http://ogp.me/ns/ogp.me.ttl).


## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

The best postcards will get published on the open source page on our website.

## Installation

You can install the package via composer:

``` bash
composer require spatie/open-graph
```

## Getting started

### 1. Set HTML `prefix` attribute

Every Open Graph webpage needs to specify the following `prefix` attribute on the `<html>` tag:

```html
<html prefix="og: http://ogp.me/ns#">
```

### 2. Choose your Open Graph object type

As specified in the [RDF schema](http://ogp.me/ns/ogp.me.ttl) every Open Graph object needs an `og:type` property. We've made it easy for you by providing classes for every Open Graph object you may want to generate.

| og:type               | spatie/open-graph class      |
|-----------------------|------------------------------|
| `website`             | `OpenGraphWebsite`           |
| `article`             | `OpenGraphArticle`           |
| `book`                | `OpenGraphBook`              |
| `profile`             | `OpenGraphProfile`           |
| `music.song`          | `OpenGraphMusicSong`         |
| `music.album`         | `OpenGraphMusicAlbum`        |
| `music.playlist`      | `OpenGraphMusicPlaylist`     |
| `music.radio_station` | `OpenGraphMusicRadioStation` |
| `video.movie`         | `OpenGraphVideoMovie`        |
| `video.episode`       | `OpenGraphVideoEpisode`      |
| `video.tv_show`       | `OpenGraphVideoTvShow`       |
| `video.other`         | `OpenGraphVideoOther`        |

### 3. Generate Open Graph tags

Every OpenGraph class in this package has a `create` method that accepts a few required properties and a `getMetatags` method that returns a string of `<meta>` tags.

For example your webpage might feature a book. We can generate the Open Graph tags as follows:

```php
$openGraphTags = OpenGraphBook::create('My Awesome Website', 'http://www.example.com', 'http://www.example.com/image.jpg')
    ->getMetaTags();
```

## Open Graph types

### `OpenGraphWebsite`

### `OpenGraphArticle`

### `OpenGraphBook`

### `OpenGraphProfile`

### `OpenGraphMusicSong`

### `OpenGraphMusicAlbum`

### `OpenGraphMusicPlaylist`

### `OpenGraphMusicRadioStation`

### `OpenGraphVideoMovie`

### `OpenGraphVideoEpisode`

### `OpenGraphVideoTvShow`

### `OpenGraphVideoOther`

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Alex Vanderbist](https://github.com/AlexVanderbist)
- [All Contributors](../../contributors)

## About Spatie

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
