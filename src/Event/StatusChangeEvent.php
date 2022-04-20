<?php

namespace MixPlus\Hystrix\Event;

/**
 * Class StatusChangeEvent
 * @package MixPlus\Hystrix\Event
 */
class StatusChangeEvent
{

    /**
     * @var string
     */
    public $name;

    /**
     * 状态: open, close
     * @var string
     */
    public $status;

}
