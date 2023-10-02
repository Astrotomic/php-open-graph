<?php

namespace Astrotomic\OpenGraph\Types\Twitter;

use Astrotomic\OpenGraph\TwitterType;

class Player extends TwitterType
{
    /** @var string */
    protected $type = 'player';

    public function player(string $url, int $width, int $height)
    {
        $this->setName(self::PREFIX, 'player', $url);
        $this->setName(self::PREFIX, 'player:width', $width);
        $this->setName(self::PREFIX, 'player:height', $height);

        return $this;
    }
}
