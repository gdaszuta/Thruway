<?php


namespace Thruway\Authentication;

use Thruway\Message\ActionMessageInterface;
use Thruway\Session;

/**
 * Interface AuthorizationManagerInterface
 * @package Thruway\Authentication
 */
interface AuthorizationManagerInterface
{
    /**
     * Check to see if an action is authorized on a specific uri given the
     * context of the session attempting the action
     *
     * actionMsg should be an instance of: register, call, subscribe, or publish messages
     *
     * @param Session $session
     * @param ActionMessageInterface $actionMsg
     * @return boolean
     */
    public function isAuthorizedTo(Session $session, ActionMessageInterface $actionMsg);
}