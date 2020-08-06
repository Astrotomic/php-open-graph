<?php

namespace Astrotomic\OpenGraph\Types\Music;

use Astrotomic\OpenGraph\Type;

class RadioStation extends Type
{
    protected const PREFIX = 'music';

    /** @var string */
    protected $type = 'music.radio_station';

    public function creator(string $url)
    {
        $this->setProperty(self::PREFIX, 'creator', $url);

        return $this;
    }
}
