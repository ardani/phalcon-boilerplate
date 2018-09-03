<?php
use App\Foundation\Application;

class MainTask extends \Phalcon\CLI\Task
{
    public function mainAction()
    {
        console()->out('Lightning v'.Application::VERSION);
    }
}
