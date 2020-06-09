<?php

namespace Astrotomic\OpenGraph\Types\Twitter;

use Astrotomic\OpenGraph\TwitterType;

class SummaryLargeImage extends TwitterType
{
    protected string $type = 'summary_large_image';

    public function creator(string $creator)
    {
        $this->setProperty(self::PREFIX, 'creator', $creator);

        return $this;
    }
}
