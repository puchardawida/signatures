<?php

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStartedDataCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AUTO MIRAS
        $company = new Company;
        $company->name = 'Auto Miras oddział Pępowo';
        $company->name_signature = 'Auto Miras Autoryzowany Serwis Samochodowy Sp. z o.o.';
        $company->nip = '589-193-13-16';
        $company->regon = '220545491';
        $company->krs = '0000297517';
        $company->fb = '/makuratgrupa';
        $company->fb_url = 'https://www.facebook.com/makuratgrupa/';
        $company->instagram = '/grupamakurat';
        $company->instagram_url = 'https://www.instagram.com/grupamakurat/';
        $company->google_url = 'https://g.page/r/CT4kINAz87hTEAE';
        $company->web = 'www.grupamakurat.pl';
        $company->web_url = 'https://www.grupamakurat.pl/';
        $company->banner_url = 'brands.jpg';
        $company->save();

        //AUTO MIRAS
        $company = new Company;
        $company->name = 'Auto Miras oddział Gdańsk';
        $company->name_signature = 'Auto Miras Autoryzowany Serwis Samochodowy Sp. z o.o.';
        $company->nip = '589-193-13-16';
        $company->regon = '220545491';
        $company->krs = '0000297517';
        $company->fb = '/makuratgrupa';
        $company->fb_url = 'https://www.facebook.com/makuratgrupa/';
        $company->instagram = '/grupamakurat';
        $company->instagram_url = 'https://www.instagram.com/grupamakurat/';
        $company->google_url = 'https://g.page/r/CVmK0D8Qu7flEAE';
        $company->web = 'www.grupamakurat.pl';
        $company->web_url = 'https://www.grupamakurat.pl/';
        $company->banner_url = 'brands.jpg';
        $company->save();

        //MDM AUTO
        $company = new Company;
        $company->name = 'MDM Auto oddział Pępowo';
        $company->name_signature = 'MDM Auto Sp. z o.o.';
        $company->nip = '899-273-61-44';
        $company->regon = '021852540';
        $company->krs = '0000423164';
        $company->fb = '/makuratgrupa';
        $company->fb_url = 'https://www.facebook.com/makuratgrupa/';
        $company->instagram = '/grupamakurat';
        $company->instagram_url = 'https://www.instagram.com/grupamakurat/';
        $company->google_url = 'https://g.page/r/CVtA3HSvnjlGEAE';
        $company->web = 'www.grupamakurat.pl';
        $company->web_url = 'https://www.grupamakurat.pl/';
        $company->banner_url = 'logo_mdm.jpg';
        $company->save();

        //MDM AUTO
        $company = new Company;
        $company->name = 'MDM Auto oddział Pępowo';
        $company->name_signature = 'MDM Auto Sp. z o.o.';
        $company->nip = '899-273-61-44';
        $company->regon = '021852540';
        $company->krs = '0000423164';
        $company->fb = '/makuratgrupa';
        $company->fb_url = 'https://www.facebook.com/makuratgrupa/';
        $company->instagram = '/grupamakurat';
        $company->instagram_url = 'https://www.instagram.com/grupamakurat/';
        $company->google_url = 'https://g.page/r/CY4ucTTfjC6XEAE';
        $company->web = 'www.grupamakurat.pl';
        $company->web_url = 'https://www.grupamakurat.pl/';
        $company->banner_url = 'logo_mdm.jpg';
        $company->save();

        //MAKURAT UBEZPIECZENIA
        $company = new Company;
        $company->name = 'Makurat Ubezpieczenia';
        $company->name_signature = 'Makurat Ubezpieczenia Sp. z o.o.';
        $company->nip = '589-204-87-10';
        $company->regon = '381416685';
        $company->krs = '0000750436';
        $company->fb = '/makuratgrupa';
        $company->fb_url = 'https://www.facebook.com/makuratgrupa/';
        $company->instagram = '/grupamakurat';
        $company->instagram_url = 'https://www.instagram.com/grupamakurat/';
        $company->google_url = 'https://www.facebook.com/makuratgrupa';
        $company->web = 'www.grupamakurat.pl';
        $company->web_url = 'https://www.grupamakurat.pl/';
        $company->banner_url = 'logo_ubez.jpg';
        $company->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('companies')->truncate();
    }
}
