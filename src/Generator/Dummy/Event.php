<?php

namespace romanzipp\CalendarGenerator\Generator\Dummy;

use romanzipp\CalendarGenerator\Generator\Abstracts\AbstractEvent;

class Event extends AbstractEvent
{
    public function getLogLine(): string
    {
        return 'Dummy ' . $this->start->format('Y-m-d');
    }
}
