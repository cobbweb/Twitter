<?php

namespace Twitter\Api;

use \Twitter\Api;

/**
 * Direct Message Methods
 *
 * @package Twitter
 * @subpackage Api
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class DirectMessages extends Api
{
    public function getMostRecent()
    {
        return $this->get('direct_messages');
    }

    public function getSent()
    {
        return $this->get('direct_messages/sent');
    }

    public function sendMessage($to, $message)
    {
        return $this->post('direct_messages/new', array(
            'user' => $to,
            'text' => $message
        ));
    }

    public function deleteMessage($id)
    {
        return $this->delete(sprintf('direct_messages/destroy/%s', $id));
    }
}