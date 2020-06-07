<?php

namespace Astrotomic\OpenGraph\Types\Twitter;

use Astrotomic\OpenGraph\TwitterType;
use Astrotomic\OpenGraph\Type;

class Player extends TwitterType
{
    protected string $type = 'player';

    public function player(string $url, int $width, int $height)
    {
        $this->setProperty(self::PREFIX, 'player', $url);
        $this->setProperty(self::PREFIX, 'player:width', $width);
        $this->setProperty(self::PREFIX, 'player:height', $height);

        return $this;
    }
}
