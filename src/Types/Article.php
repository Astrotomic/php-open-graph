<?php

namespace Astrotomic\OpenGraph\Types;

use Astrotomic\OpenGraph\Type;
use DateTime;

class Article extends Type
{
    protected const PREFIX = 'article';

    protected string $type = 'article';

    public function author(string $url)
    {
        $this->addProperty(self::PREFIX, 'author', $url);

        return $this;
    }

    public function section(string $section)
    {
        $this->setProperty(self::PREFIX, 'section', $section);

        return $this;
    }

    public function tag(string $tag)
    {
        $this->addProperty(self::PREFIX, 'tag', $tag);

        return $this;
    }

    public function publishedAt(DateTime $releasedAt)
    {
        $this->setProperty(self::PREFIX, 'published_time', $releasedAt->format(DateTime::ISO8601));

        return $this;
    }

    public function modifiedAt(DateTime $modifiedAt)
    {
        $this->setProperty(self::PREFIX, 'modified_time', $modifiedAt->format(DateTime::ISO8601));

        return $this;
    }

    public function expiresAt(DateTime $eexpiresAt)
    {
        $this->setProperty(self::PREFIX, 'expiration_time', $eexpiresAt->format(DateTime::ISO8601));

        return $this;
    }
}
