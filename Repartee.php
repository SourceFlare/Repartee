<?php namespace Repartee;

# Repartee Imports
use Repartee\core\Interfaces\ReparteeFunctions;
use Repartee\Action\newMessage;
use Repartee\Action\getInboxes;
use Repartee\Action\getMessages;

class Repartee implements ReparteeFunctions
{
    final public static function newMessage ($data='')
    {
        return new NewMessage($data);
    }

    public static function getInboxes ($data='')
    {
        return new GetInboxes($data);
    }

    public static function getMessages ($data='')
    {
        return new GetMessages($data);
    }
}
