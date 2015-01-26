<?php
namespace Repartee\core\Interfaces;

interface ReparteeFunctions
{
    # Inboxes & Messaging
    public static function GetInboxes ();
    public static function NewMessage ();
    public static function GetMessages ();
    public static function ReadMessage ();

    # Contacts
    public static function NewContact ();
    public static function EditContact ();
    public static function DeleteContact ();

    # Groups
    public static function NewGroup ();
    public static function EditGroup ();
    public static function DeleteGroup ();
}
