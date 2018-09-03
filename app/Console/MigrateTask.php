<?php

class MigrateTask extends \Phalcon\CLI\Task
{
    protected $migrations = [
//        'users',
    ];

    public function mainAction()
    {
        if (!config('debug')) {
            $input = console()->confirm(
                "Application May In Production!\n".
                'Do you really wish to run this command?'
            );

            if (!$input->confirmed()) {
                return;
            }
        }

        foreach ($this->migrations as $migration) {
            /** @noinspection PhpIncludeInspection */
            require ROOT."/database/migrations/$migration.php";

            console()->out('Migrated: '.$migration);
        }
    }
}
