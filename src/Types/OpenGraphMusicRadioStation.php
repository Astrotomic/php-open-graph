<?php

namespace Spatie\OpenGraph\Types;


class OpenGraphMusic extends OpenGraphBaseType
{
    /** @var string */
    protected $prefix = 'music';

    /** @var string */
    protected $type = 'music.radio_station';

    public function creator(string $profile)
    {
        $this->setProperty('creator', $profile);

        return $this;
    }
}
