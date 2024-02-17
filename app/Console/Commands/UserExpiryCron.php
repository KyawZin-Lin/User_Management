<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UserExpiryCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-expiry:corn';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now()->format('Y-m-d');

        // Find users whose membership has expired
        $expiredUsers = User::where('membership_expiry', '<=', $today)->get();
        foreach ($expiredUsers as $user) {
            // Update user status here
            $user->user_status= config('constant.user.status.expired');
            $user->update();
        }

        Log::info('User status updated');


    }
}
