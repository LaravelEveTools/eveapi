<?php

namespace LaravelEveTools\EveApi\Helpers;

class LoggingContainer implements \ArrayAccess
{

    protected $data = [
        'type' => null,

        // Event Values
        'ec' => null,
        'ea' => null,
        'el' => null,
        'ev' => null,

        // Exception Values
        'exd' => null,
        'exf' => null,
    ];

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return array_key_exists($offset, $this->data);
    }

    /**
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }


    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function __get($key){
        return $this[$key];
    }

    public function __set($key, $val)
    {
        $this[$key] = $val;
    }

    public function set($key, $val)
    {
        $this->__set($key, $val);
        return $this;
    }
}