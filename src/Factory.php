<?php

namespace Fluent\Laravel;

use Fluent\Message;
use Fluent\Event;

class Factory
{
    protected $_options = array();

    public function __construct(array $options = array())
    {
        $this->_options = array_merge(
            \Fluent::$defaults, $options
        );
    }
    
    /**
     * @return \Fluent\Message
     */
    public function message()
    {
        return new Message($this->_options);
    }

    /**
     * @return \Fluent\Event
     */
    public function event()
    {
        return new Event($this->_options);
    }
}