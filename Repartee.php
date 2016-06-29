<?php namespace Repartee;

use Repartee\core\Interfaces\ReparteeFunctions;
use Repartee\Action\NewMessage;
use Repartee\Action\GetInboxes;
use Repartee\Action\GetMessages;


class Repartee implements ReparteeFunctions
{
    /**
     * Send a new SMS Message
     * @return array
     */
    final public static function newMessage ($data='')
    {
        return new NewMessage($data);
    }
    
    /**
     * Get all inboxes for user
     * @return array
     */
    public static function getInboxes ($data='')
    {
        return new GetInboxes($data);
    }
    
    /**
     * Get all messages within a given inbox
     * @return array
     */
    public static function getMessages ($data='')
    {
        return new GetMessages($data);
    }
}
