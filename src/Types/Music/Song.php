<?php

namespace Astrotomic\OpenGraph\Types\Music;

use Astrotomic\OpenGraph\Type;

class Song extends Type
{
    protected const PREFIX = 'music';

    /** @var string */
    protected $type = 'music.song';

    public function duration(int $seconds)
    {
        $this->setProperty(self::PREFIX, 'duration', $seconds);

        return $this;
    }

    public function musician(string $url)
    {
        $this->addProperty(self::PREFIX, 'musician', $url);

        return $this;
    }

    public function album(string $url, ?int $disc = null, ?int $track = null)
    {
        $this->addProperty(self::PREFIX, 'album', $url);
        $this->when($disc > 0)->addProperty(self::PREFIX, 'album:disc', $disc);
        $this->when($track > 0)->addProperty(self::PREFIX, 'album:track', $track);

        return $this;
    }
}
