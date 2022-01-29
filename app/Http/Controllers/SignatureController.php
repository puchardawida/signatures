<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyPlace;
use App\Models\Greeting;
use App\Models\Place;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SignatureController extends Controller
{
    public function showForm(Request $request){
        $companies = Company::all();        
        $greetings = Greeting::all();

        $request->greeting = 1;
        $request->company = 1; 
        
        $show_photo = false;
        if(isset($request->show_photo))$show_photo = true;

        return view('signatures.form', compact(['companies', 'greetings', 'show_photo', 'request']));
    }

    public function create(Request $request){
        $company = Company::find($request->company);
        $places = Place::all();
        $companies_places = CompanyPlace::all();
        $contacts = $this->getContacts($company, $request->phone, $request->email);
        $greeting = Greeting::find($request->greeting);

        $banner_url = $this->makeBase64Image("/assets/files/signature/".$company->banner_url);
        $google_image = $this->makeBase64Image("/assets/files/signature/google.png");
        $photo = $this->makeBase64Image("/assets/files/people/".strtolower(str_replace(' ', '_', $request->name)).".jpg");

        return view('signatures.signature', compact(['company', 'contacts', 'places', 'companies_places', 'greeting', 'photo','google_image', 'banner_url','request']));
    }

    public function makeBase64Image($path){    
        try{
            $type = pathinfo(public_path($path), PATHINFO_EXTENSION);
            $data = file_get_contents(public_path($path));
        }catch(ErrorException $e){
            $type = "jpg";
            $data = "person";
        }		
        return 'data:image/'.$type.';base64,'.base64_encode($data);        
    }
    
    public function getContacts(Company $company, $phone, $email){
        return [
            [
                'icon' => $this->makeBase64Image('/assets/files/signature/phone.png'),
                'url' => "tel:".$phone,
                'value' => $phone
            ],            
            [
                'icon' => $this->makeBase64Image("/assets/files/signature/mail.png"),
                'url' => "mailto:".$email,
                'value' => $email
            ],
            [
                'icon' => $this->makeBase64Image("/assets/files/signature/monitor.png"),
                'url' => $company->web_url,
                'value' => $company->web
            ],
            [
                'icon' => $this->makeBase64Image("/assets/files/signature/fb.png"),
                'url' => $company->fb_url,
                'value' => $company->fb
            ],
            [
                'icon' => $this->makeBase64Image("/assets/files/signature/instagram.png"),
                'url' => $company->instagram_url,
                'value' => $company->instagram
            ]
        ];
    }
}
