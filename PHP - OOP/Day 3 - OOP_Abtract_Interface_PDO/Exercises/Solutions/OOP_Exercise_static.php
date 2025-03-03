<?php

/*

    Create a Log class.

    This class will be used to display a Log message like this one : '2021-04-26 14:00:03 - Code is doing fine';

    Create a static function in the class to match instructions.
    You should be able to call this method anytime, without instanciate the class.

*/

class Log
{

    public static function display()
    {
        return date('Y-m-d H:m:s') . '- Code is doing fine';
    }
}

echo Log::display();
echo Log::display();
