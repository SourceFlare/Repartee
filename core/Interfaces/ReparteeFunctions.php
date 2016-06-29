<?php
namespace Repartee\core\Interfaces;

interface ReparteeFunctions
{
    # Inboxes & Messaging
    public static function getInboxes ();
    public static function newMessage ();
    public static function getMessages ();
    public static function readMessage ();

    # Contacts
    public static function newContact ();
    public static function editContact ();
    public static function deleteContact ();

    # Groups
    public static function newGroup ();
    public static function editGroup ();
    public static function deleteGroup ();
}
