<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EmployeeListConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:list {limit=5} {--admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List Employee of the system';

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
        $limit = $this->argument('limit');
        $admin = $this->option('admin');

        if ($admin) {
            $password =$this->secret('please enter your password');
            if ($password == '12345') {
                $employee = \App\Employee::limit($limit)->get();
                $headers = ['#', 'Name', 'Birth Day', 'Tel.'];
            } else {
                $this->info('Your password invalid');
                exit;
            }
            
        } else {
            $employee = \App\Employee::select('name')->limit($limit)->get();
            $headers = ['Name'];
         }

        $this->table($headers, $employee);        

    }
}
