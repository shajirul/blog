<?php

namespace System;

class Application
{
    /*
     * container
     *
     * @param array
     * */
    private $container = [];

    /*
     * Share the given key|Value through application
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     * */
    public function share($key,$value)
    {
        $this->container[$key] = $value;
    }

    /*
     * Constructor
     *
     * @param \System\File $file
     * */

    public function __construct(File $file)
    {
        $this->share('file',$file);

        echo "Welcome";
    }


}