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
