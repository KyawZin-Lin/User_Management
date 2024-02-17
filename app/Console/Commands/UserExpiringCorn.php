<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UserExpiringCorn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-expiring:corn';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now();

        $expiringUsers = User::all();
        if ($expiringUsers != null) {
            foreach ($expiringUsers as $user) {
                $date = Carbon::parse($user->membership_expiry);
                $diffDay = $today->diffInDays($date);
                if ($diffDay < 30 || $diffDay < 31) {
                    if ($diffDay == 0) {
                        $user->user_status = config('constant.user.status.expired');
                        $user->update();
                    }else{
                        Log::info("Expiry soon in $diffDay");
                        $user->user_status = "Expires in next $diffDay days";
                        $user->update();
                    }

                }
            }
        }

        Log::info("User Expiring Status Works");
    }
}
