<?php

class HtmlString
{
    private $_string;

    public function __construct($string)
    {
        $this->_string = $string;
    }

    public function setString($futureValue)
    {
        $this->_string = $futureValue;
    }

    public function getString()
    {
        return $this->_string;
    }

    public function getBoldString()
    {
        return '<b>' . $this->_string . '</b>';
    }

    public function getItalicString()
    {
        return '<i>' . $this->_string . '</i>';
    }

    public function getItalicBoldString()
    {
        return '<i>' . $this->getBoldString() . '</i>';
    }
}
