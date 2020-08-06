# Changelog

All notable changes to `php-open-graph` will be documented in this file

## 0.3.0 - 2020-06-14

-   use `og:xxx` instead of `og:xxx:url` if simple string is passed (`image`, `video`, `audio`) - [#5](https://github.com/Astrotomic/php-open-graph/pull/5)

## 0.2.4 - 2020-06-11

-   integrate `astrotomic/php-conditional-proxy` to call methods conditionally

## 0.2.3 - 2020-06-10

-   add `\Astrotomic\OpenGraph\ConditionalProxy` to allow calling `when()` without callback

## 0.2.2 - 2020-06-09

-   fix `\Astrotomic\OpenGraph\StructuredProperties\Audio` prefix
-   fix `\Astrotomic\OpenGraph\StructuredProperties\Video` prefix
-   add missing `\Astrotomic\OpenGraph\Types\Twitter\SummaryLargeImage::creator()`
-   accept stringable objects as image/video/audio

## 0.2.1 - 2020-06-09

-   fix "Argument 1 passed to when() must be of the type bool, null given" exception

## 0.2.0 - 2020-06-07

-   add Twitter Cards

## 0.1.0 - 2020-06-07

-   initial release
