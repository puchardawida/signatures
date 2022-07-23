<?php

use App\Models\Place;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStartedDataPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //am
        $place = new Place;
        $place->name = 'Oddział Pępowo';
        $place->address = 'Gdańska 62, 83-330 Pępowo';
        $place->phone = '58 685 95 70';
        $place->email = 'cnp@automiras.pl';
        $place->save();

        //AM
        $place = new Place;
        $place->name = 'Oddział Gdańsk';
        $place->address = 'Zawodników 2, 80-729 Gdańsk';
        $place->phone = '58 573 58 80';
        $place->email = 'gdansk@automiras.pl';
        $place->save();

        //MDM
        $place = new Place;
        $place->name = 'Oddział Pępowo';
        $place->address = 'Gdańska 62, 83-330 Pępowo';
        $place->phone = '58 685 95 70';
        $place->email = '';
        $place->save();

        //MDM
        $place = new Place;
        $place->name = 'Oddział Gdańsk';
        $place->address = 'Zawodników 2, 80-729 Gdańsk';
        $place->phone = '58 573 58 80';
        $place->email = '';
        $place->save();

        //MU
        $place = new Place;
        $place->name = 'Oddział Żukowo';
        $place->address = 'Jabłoniowa 7/4, 83-330 Żukowo';
        $place->phone = '+48 721 019 901';
        $place->email = 'natalia.keslinka@makuratubezpieczenia.pl';
        $place->save();

        //MU
        $place = new Place;
        $place->name = 'Oddział Żukowo';
        $place->address = 'Prusa, 83-330 Żukowo';
        $place->phone = '+48 781 201 405';
        $place->email = 'helena.kobiela@makuratubezpieczenia.pl';
        $place->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('places')->truncate();
    }
}
