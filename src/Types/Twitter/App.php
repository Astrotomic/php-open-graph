<?php

namespace Astrotomic\OpenGraph\Types\Twitter;

use Astrotomic\OpenGraph\TwitterType;

class App extends TwitterType
{
    /** @var string */
    protected $type = 'app';

    public function iPhoneApp(string $name, string $iPhoneAppId, string $iPhoneAppUrl = null)
    {
        $this->setProperty(self::PREFIX, 'app:name:iphone', $name);
        $this->setProperty(self::PREFIX, 'app:id:iphone', $iPhoneAppId);
        if (! empty($iPhoneAppUrl)) {
            $this->setProperty(self::PREFIX, 'app:url:iphone', $iPhoneAppUrl);
        }

        return $this;
    }

    public function iPadApp(string $name, string $iPadAppId, string $iPadAppUrl = null)
    {
        $this->setProperty(self::PREFIX, 'app:name:ipad', $name);
        $this->setProperty(self::PREFIX, 'app:id:ipad', $iPadAppId);
        if (! empty($iPadAppUrl)) {
            $this->setProperty(self::PREFIX, 'app:url:ipad', $iPadAppUrl);
        }

        return $this;
    }

    public function googlePlayApp(string $name, string $googlePlayAppId, string $googlePlayAppUrl = null)
    {
        $this->setProperty(self::PREFIX, 'app:name:googleplay', $name);
        $this->setProperty(self::PREFIX, 'app:id:googleplay', $googlePlayAppId);
        if (! empty($googlePlayAppUrl)) {
            $this->setProperty(self::PREFIX, 'app:url:googleplay', $googlePlayAppUrl);
        }

        return $this;
    }

    public function country(string $county = null)
    {
        if (! empty($county)) {
            $county = strtoupper($county);
            $this->setProperty(self::PREFIX, 'app:country', $county);
        }

        return $this;
    }
}
