<?php

abstract class Record
{
    protected $data;

    public function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }
}