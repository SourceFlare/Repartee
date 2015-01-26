<?php
namespace Repartee;

# Repartee Imports
use Repartee\core\Interfaces\ReparteeFunctions;
use Repartee\core\NewMessage;

class Repartee implements ReparteeFunctions
{
    # Inboxes & Messaging
    final public static function newMessage ($d='')
    {
        return new NewMessage($d);
    }

    public static function getInboxes () {}
    public static function getMessages () {}
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
