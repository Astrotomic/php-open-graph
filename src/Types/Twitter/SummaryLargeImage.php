<?php

namespace Astrotomic\OpenGraph\Types\Twitter;

use Astrotomic\OpenGraph\TwitterType;

class SummaryLargeImage extends TwitterType
{
    /** @var string */
    protected $type = 'summary_large_image';

    public function creator(string $creator)
    {
        $this->setName(self::PREFIX, 'creator', $creator);

        return $this;
    }
}
