<?php

namespace Spatie\OpenGraph;

class OpenGraphMusic extends OpenGraph
{
    /** @var string */
    protected $prefix = 'music';

    /** @var string */
    protected $type = 'music.radio_station';

    public function creator(string $profile)
    {
        $this->addTag('creator', $profile);

        return $this;
    }
}
