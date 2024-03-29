<?php

namespace System;

class File
{

    /*
     * Root path
     *
     * @var string
     * */
    private $root;

    /*
     * Constructor
     *
     * @param string $root
     * */
    public function __construct($root)
    {
        $this->root = $root;
    }

}