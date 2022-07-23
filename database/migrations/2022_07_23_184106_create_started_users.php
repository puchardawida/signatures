<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStartedUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = new User;
        $user->name = 'user';
        $user->email = 'user@grupamakurat.pl';
        $user->password = '$2y$10$RUsZbCVRPirkZJKtLv1yVOAGPRuVLqxbqeR.FhaBqqrLy0qtCcsnm';
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->truncate();
    }
}
