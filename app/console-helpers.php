<?php

function console()
{
    static $climate = null;

    if (!$climate) {
        $climate = new League\CLImate\CLImate;
    }

    return $climate;
}