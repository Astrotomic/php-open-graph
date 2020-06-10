<?php

namespace Astrotomic\OpenGraph;

/** @mixin BaseObject */
class ConditionalProxy
{
    protected BaseObject $object;
    protected bool $condition;

    public function __construct(BaseObject $object, bool $condition)
    {
        $this->object = $object;
        $this->condition = $condition;
    }

    public function __call(string $name, array $arguments)
    {
        if ($this->condition) {
            call_user_func_array([$this->object, $name], $arguments);
        }

        return $this->object;
    }
}
