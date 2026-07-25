<?php

abstract class Logger
{
    protected $filename;
    
    public function __construct($filename)
    {
        $this->filename = $filename;
        file_put_contents($this->filename, ""); // Clear the log file
    }

    abstract function write($message);
}