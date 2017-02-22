<?php

namespace Spatie\OpenGraph;

use ReflectionClass;

class OpenGraphTypes
{
    const WEBSITE = 'website';
    const MUSIC_SONG = 'music.song';
    const MUSIC_ALBUM = 'music.album';
    const MUSIC_RADIO_STATION = 'music.radio_station';
    const VIDEO_MOVIE = 'video.movie';
    const VIDEO_EPISODE = 'video.episode';
    const VIDEO_TV_SHOW = 'video.tv_show';
    const VIDEO_OTHER = 'video.other';
    const ARTICLE = 'article';
    const BOOK = 'book';
    const PROFILE = 'profile';

    public static function getAll(): array
    {
        return (new ReflectionClass(__CLASS__))->getConstants();
    }

    public static function getTypeFromCamelCase(string $string): string
    {
        return strtolower(implode('.', preg_split('/(?=[A-Z])/', $string)));
    }
}
