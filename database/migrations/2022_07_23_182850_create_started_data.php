<?php

use App\Models\Greeting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStartedData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //GREETINGS
        $greeting = new Greeting;
        $greeting->name = 'Pozdrawiam';
        $greeting->save();

        $greeting = new Greeting;
        $greeting->name = 'Z poważaniem';
        $greeting->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('greetings')->truncate();
    }
}
