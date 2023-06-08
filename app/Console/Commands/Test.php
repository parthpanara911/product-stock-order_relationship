<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'user added';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data['name'] = 'parth';
        $data['email'] = 'parth@gmail.com';
        $data['password'] = 'parth@000';
        $data['created_at'] = now()->format('Y-m-d H:i:s');
        $data['updated_at'] = now()->format('Y-m-d H:i:s');
        \DB::table('customer')->insert($data);

        $this->info('Success');
    }
}
