<?php

namespace UniversalHelper;

class Helper
{

    private $_string;

    public function __construct()
    {
        $this->set_string();
    }

    function set_string()
    {
        $this->_string = new String();
    }

    function get_string()
    {
        return $this->_string;
    }

}
