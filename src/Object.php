<?php

namespace ModelDemo;

class Object extends Model
{
    protected $id;
    protected $prefixed;

    public function setPrefixedAttribute($value)
    {
        return 'test' . $value;
    }
}