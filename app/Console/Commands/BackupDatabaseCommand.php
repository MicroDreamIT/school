<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BackupDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This backs up the database.';

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
        //   $ mysqldump -u [uname] -p[pass] db_name > db_backup.sql

        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $database = env('DB_DATABASE');
        $filename = $database .'_'. \Carbon\Carbon::now()->toDateString().'.sql';
        //dd($filename);
        //dd('mysqldump -u '.$username.' -p '.$password.' '.$database.' > '.$filename);

        exec('mysqldump -u '. $username.' -p '.$password.' '.$database.' > '.$filename);
        $this->info('Your backup is being save to the root directory'. $filename);

    }
}
