<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Mail\userMail;
use Illuminate\Support\Facades\Mail;
class sendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Mail To All Users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $usersMail = User::select('name','email')->where('active','Yes')->get();
       $emails=[];
       foreach($usersMail as $user){
       Mail::to($user->email)->send(new userMail($user));
       }
    }
}
