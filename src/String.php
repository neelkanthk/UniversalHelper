<?php

namespace UniversalHelper;

final class String
{

    /**
     * Converts the case of the string value
     * @param string $val
     * @param string $case
     * @return string
     * @author Neelkanth Kaushik <neelkanthkaushik2014@gmail.com>
     */
    public function convert_case($val = null, $case = 'upper')
    {
        if (!empty($val) && is_string($val) && ($case == 'upper' || $case == 'UPPER')) {
            return strtoupper($val);
        } elseif (!empty($val) && is_string($val) && ($case == 'lower' || $case == 'LOWER')) {
            return strtolower($val);
        } else {
            return $val;
        }
    }

}
