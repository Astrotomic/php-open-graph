# PHP Open-Graph

[![Latest Version](http://img.shields.io/packagist/v/astrotomic/php-open-graph.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/astrotomic/php-open-graph)
[![MIT License](https://img.shields.io/github/license/Astrotomic/php-open-graph.svg?label=License&color=blue&style=for-the-badge)](https://github.com/Astrotomic/php-open-graph/blob/master/LICENSE)
[![Offset Earth](https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-green?style=for-the-badge)](https://plant.treeware.earth/Astrotomic/php-open-graph)

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/Astrotomic/php-open-graph/run-tests?style=flat-square&logoColor=white&logo=github&label=Tests)](https://github.com/Astrotomic/php-open-graph/actions?query=workflow%3Arun-tests)
[![StyleCI](https://styleci.io/repos/82821437/shield)](https://styleci.io/repos/82821437)
[![Total Downloads](https://img.shields.io/packagist/dt/astrotomic/php-open-graph.svg?label=Downloads&style=flat-square)](https://packagist.org/packages/astrotomic/php-open-graph)

This package provides a fluent PHP OOP builder for [Open Graph protocol](https://ogp.me).

## Installation

You can install the package via composer:

```bash
composer require astrotomic/php-open-graph
```

## Usage

```php
use Astrotomic\OpenGraph\OpenGraph;
use Astrotomic\OpenGraph\StructuredProperties\Image;

echo OpenGraph::website('Example')
    ->url('https://example.com')
    ->image('https://example.com/image1.jpg')
    ->image(Image::make('https://example.com/image2.jpg')->width(600));
```

```html
<meta property="og:type" content="website">
<meta property="og:title" content="Example">
<meta property="og:url" content="https://example.com">
<meta property="og:image:url" content="https://example.com/image1.jpg">
<meta property="og:image:url" content="https://example.com/image2.jpg">
<meta property="og:image:width" content="600">
```

### Types

#### Global

* `\Astrotomic\OpenGraph\Types\Website`
* `\Astrotomic\OpenGraph\Types\Article`
* `\Astrotomic\OpenGraph\Types\Profile`
* `\Astrotomic\OpenGraph\Types\Book`

#### Music

* `\Astrotomic\OpenGraph\Types\Music\Album`
* `\Astrotomic\OpenGraph\Types\Music\Playlist`
* `\Astrotomic\OpenGraph\Types\Music\Song`
* `\Astrotomic\OpenGraph\Types\Music\RadioStation`

#### Video

* `\Astrotomic\OpenGraph\Types\Video\Movie`
* `\Astrotomic\OpenGraph\Types\Video\TvShow`
* `\Astrotomic\OpenGraph\Types\Video\Episode`
* `\Astrotomic\OpenGraph\Types\Video\Other`

### Structured Properties

* `\Astrotomic\OpenGraph\StructuredProperties\Image`
* `\Astrotomic\OpenGraph\StructuredProperties\Video`
* `\Astrotomic\OpenGraph\StructuredProperties\Audio`

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dev@astrotomic.info instead of using the issue tracker.

## Credits

- [Tom Witkowski](https://github.com/Gummibeer)
- [Alex Vanderbist](https://github.com/AlexVanderbist)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware

You're free to use this package, but if it makes it to your production environment I would highly appreciate you buying the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to [plant trees](https://www.bbc.co.uk/news/science-environment-48870920). If you contribute to my forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees at [offset.earth/treeware](https://plant.treeware.earth/Astrotomic/php-open-graph)

Read more about Treeware at https://treeware.earth

