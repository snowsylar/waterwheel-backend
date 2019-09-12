<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send user email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = [
            [
                'name' => 'sylar',
                'email' => 'Sylar_zeng@patazon.net',
            ],
            [
                'name' => 'yii',
                'email' => 'Yii_chai@patazon.net',
            ],
            [
                'name' => 'can',
                'email' => 'Can@patazon.net',
            ],
            [
                'name' => 'alice',
                'email' => 'Alice_huang@patazon.net',
            ],
        ];

        $bar = $this->output->createProgressBar(count($users));
        $bar->start();
        foreach ($users as $user) {
            $this->performTask($user);

            $bar->advance();
        }

        $bar->finish();
        echo PHP_EOL;
    }

    protected function performTask($user)
    {

        sleep(1);
    }
}
