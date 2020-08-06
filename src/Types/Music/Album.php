<?php

namespace Astrotomic\OpenGraph\Types\Music;

use Astrotomic\OpenGraph\Type;
use DateTime;

class Album extends Type
{
    protected const PREFIX = 'music';

    /** @var string */
    protected $type = 'music.album';

    public function musician(string $url)
    {
        $this->addProperty(self::PREFIX, 'musician', $url);

        return $this;
    }

    public function song(string $url, ?int $disc = null, ?int $track = null)
    {
        $this->addProperty(self::PREFIX, 'song', $url);
        $this->when($disc > 0)->addProperty(self::PREFIX, 'song:disc', $disc);
        $this->when($track > 0)->addProperty(self::PREFIX, 'song:track', $track);

        return $this;
    }

    public function releasedAt(DateTime $releaseDate)
    {
        $this->setProperty(self::PREFIX, 'release_date', $releaseDate->format('Y-m-d'));

        return $this;
    }
}
