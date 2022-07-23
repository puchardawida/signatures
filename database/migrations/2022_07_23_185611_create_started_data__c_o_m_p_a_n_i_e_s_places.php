<?php

use App\Models\CompanyPlace;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStartedDataCOMPANIESPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 1;
        $companyPlace->place_id = 1;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 1;
        $companyPlace->place_id = 2;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 2;
        $companyPlace->place_id = 1;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 2;
        $companyPlace->place_id = 2;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 3;
        $companyPlace->place_id = 3;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 3;
        $companyPlace->place_id = 4;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 4;
        $companyPlace->place_id = 3;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 4;
        $companyPlace->place_id = 4;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 5;
        $companyPlace->place_id = 5;
        $companyPlace->save();

        $companyPlace = new CompanyPlace;
        $companyPlace->company_id = 5;
        $companyPlace->place_id = 6;
        $companyPlace->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('companies_places')->truncate();
    }
}
