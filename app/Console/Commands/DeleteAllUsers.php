<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class DeleteAllUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:delete-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Xelenic Users Delete all';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Deleting all users');
        DB::table('admin_users')->truncate();
        $this->info('Deleting all roles for user assigned');
        DB::table('admin_role_users')->truncate();
        $this->info('Deleting all permissions for user assigned');
        DB::table('admin_user_permissions')->truncate();

    }
}
