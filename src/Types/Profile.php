<?php

namespace Astrotomic\OpenGraph\Types;

use Astrotomic\OpenGraph\Type;

class Profile extends Type
{
    protected const PREFIX = 'profile';

    /**
     * @var string
     */
    protected $type = 'profile';

    public function firstName(string $firstName)
    {
        $this->setProperty(self::PREFIX, 'first_name', $firstName);

        return $this;
    }

    public function lastName(string $lastName)
    {
        $this->setProperty(self::PREFIX, 'last_name', $lastName);

        return $this;
    }

    public function username(string $username)
    {
        $this->setProperty(self::PREFIX, 'username', $username);

        return $this;
    }

    public function gender(string $gender)
    {
        $this->setProperty(self::PREFIX, 'gender', $gender);

        return $this;
    }
}
