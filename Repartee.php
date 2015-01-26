<?php
namespace Repartee;

# Repartee Imports
use Repartee\core\Interfaces\ReparteeFunctions;
use Repartee\Action\newMessage;
use Repartee\Action\getInboxes;
use Repartee\Action\getMessages;

class Repartee implements ReparteeFunctions
{
    # Inboxes & Messaging
    final public static function newMessage ($d='')
    {
        return new newMessage($d);
    }

    public static function getInboxes ($d='')
    {
        return new getInboxes($d);
    }

    public static function getMessages ($d='')
    {
        return new getMessages($d);
    }

    public static function readMessage () {}

    # Contacts

    public static function newContact () {}
    public static function editContact () {}
    public static function deleteContact () {}

    # Groups

    public static function newGroup () {}
    public static function editGroup () {}
    public static function deleteGroup () {}
}
