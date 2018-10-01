<?php

namespace ModelDemo;

abstract class Model
{
    public function __set($key, $value)
    {
        $methodName = $this->getMethodName($key, 'set');
        if (method_exists($this, $methodName)) {
            $this->$key = $this->$methodName($value);
        } else {
            $this->$key = $value;
        }
    }

    public function __get($key)
    {
        $methodName = $this->getMethodName($key, 'get');
        if (method_exists($this, $methodName)) {
            return $this->$methodName($key);
        }

        return $this->$key;
    }

    private function getMethodName($key, $type)
    {
        $allowedTypes = ['set', 'get'];
        if (in_array($type, $allowedTypes)) {
            return $type . ucFirst($key) . 'Attribute';
        }

        return '';
    }
}