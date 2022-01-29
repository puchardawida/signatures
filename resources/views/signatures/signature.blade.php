@extends('base')

@section('title', 'Wygenerowana stopka')

@section('content')
    <input class="d-inline btn-smart bg-green fs-12 p-1 ms-3" type="button" id="download-html-code" value="Pobierz kod HTML do schowka">
    <input class="d-inline btn-smart bg-green fs-12 p-1 ms-3" type="button" id="download-signature" value="Pobierz stopkę do schowka">

    <br><br>
    <div id="signature">
        <table  style="font-family: arial, sans-serif; font-size: 10px; border-collapse: collapse; color: #2b2a29;">
            <tr>
                <td style="padding-bottom: 10px;">
                    <span style="font-size: 12px; font-weight: 400px; font-family: arial;">
                        {{$greeting->name}},
                    </span>
                </td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; padding: 0; margin:0;"></td>
            </tr>
            <tr>
                <td style="padding:0; margin:0;">
                    <table style="padding:0; margin:0;">
                        <tr>
                            <td style="padding-top: 25px; margin-top: 0px; width: 300px;">
                                <table>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    @if($request->show_photo)
                                                    <td>
                                                        <img
                                                            width="75"
                                                            height="75"
                                                            style="width: 75px; height: 75px;"
                                                            src="{{$photo}}"
                                                        >
                                                    </td>
                                                    @endif
                                                    <td @if($request->show_photo) style="padding-left: 10px;" @endif>
                                                        <table>
                                                            <tr>
                                                                <td style="font-weight: 700; font-size: 14px; text-transform: uppercase;">
                                                                    {{$request->name}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border-top: 1px solid #e10123;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight: 700; font-size: 11px; text-transform: uppercase;">
                                                                    {{$request->position}}
                                                                    <br>															
                                                                    {{$request->department}}
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px;">
                                            <table cellpadding="0" cellspacing="0">
                                                @foreach($contacts as $contact)
                                                <tr cellpadding="0" cellspacing="0" style="padding; 0; margin: 0;">
                                                    <td cellpadding="0" cellspacing="0" style="padding; 0; margin: 0;">
                                                        <img width="20" height="20" style="width: 20px; height: 20px;" src="{{$contact['icon']}}">                                                       
                                                    </td>
                                                    <td cellpadding="0" cellspacing="0" style="font-size: 11px; padding; 0; margin: 0; padding-left: 5px; font-weight: 400;">
                                                        <a href="{{$contact['url']}}" style="text-decoration: none; color: #000000;">
                                                            {{$contact['value']}}
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach												
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding-top: 0px; margin-top: 0px; vertical-align:top; width: 500px; text-align: right;">
                                <img width="500" height="215" style="width: 500px; height: 215px;" src="{{$banner_url}}">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width: 800px;">
                        <tr>
                            <td style="width: 600px; font-size: 11px;">
                                <div style="padding-top: 2px; padding-bottom: 2px;">
                                    <span style="font-weight: 600; padding-right: 4px;">GRUPA MAKURAT</span>
                                    <span style="color:#e10123; font-weight: 700;">|</span>
                                    <span style="padding-left: 4px;">{{$company->name_signature}}</span>
                                    <br>
                                </div>
                                @foreach($companies_places as $company_place)
                                    @if($company_place->company_id == $company->id)
                                        @foreach($places as $place)
                                            @if($place->id == $company_place->place_id)                            
                                                <div style="padding-top: 2px; padding-bottom: 2px;">
                                                    <span style="padding-right: 4px;">
                                                        {{$place->name}}:
                                                        {{$place->address}}
                                                    </span>
                                                    @if(strlen($place->phone) > 0)
                                                        <span style="color:#e10123; font-weight: 700;">|</span>
                                                        <span style="padding-right: 4px; padding-left: 4px;">{{$place->phone}}</span>
                                                    @endif
                                                    @if(strlen($place->email) > 0)
                                                        <span style="color:#e10123; font-weight: 700;">|</span>
                                                        <span style="padding-left: 4px;">{{$place->email}}</span>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                <div style="padding-top: 2px; padding-bottom: 2px;">
                                    <span style="padding-right: 4px;">NIP {{$company->nip}}</span>
                                    <span style="color:#e10123; font-weight: 700;">|</span>
                                    <span style="padding-right: 4px; padding-left: 4px;">REGON {{$company->regon}}</span>
                                    <span style="color:#e10123; font-weight: 700;">|</span>
                                    <span style="padding-left: 4px;">KRS {{$company->krs}}</span>
                                </div>
                            </td>
                            <td style="width: 200px; text-align: right;" width="200">
                                <a href="{{$company->google_url}}">
                                    <img width="200" height="35" tyle="width: 200px; height: 35px;" src="{{$google_image}}">
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div id="sign"></div>

@endsection

@section('scripts')
    <script src="/assets/js/signatures.js"></script>
@endsection