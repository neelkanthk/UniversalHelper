<?php

namespace UniversalHelper;

use UniversalHelper\String;
use UniversalHelper\Date;

class Helper
{

    public $string;
    public $date;

    public function __construct()
    {
        $this->date = new Date();
        $this->string = new String();
    }

}
