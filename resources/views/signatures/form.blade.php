@extends('base')

@section('title', 'Wygeneruj stopkę')

@section('content')
<form method="post" action="/signature-create">
	@csrf
	<div class="row p-3">
		<div class="col-12 ml-3">
			<div class="d-inline fs-18 font-weight-700">
				Generator podpisu/stopki firmowej
			</div>
			<input class="d-inline btn-smart bg-blue mb-2 fs-12 p-1 ms-3" type="submit" name="generate" value="Generuj stopkę">
		</div>
	</div>
	<div class="row p-3">
		<div class="col-xl-3 col-md-4 col-12">
			<label class="form-label fs-12">Imię i nazwisko</label>
			<input class="form-control p-1 fs-12" type="text" name="name" value="{{$request->name ?? ''}}" placeholder="Imię i nazwisko">

			<div class="form-check mt-1">
				<input type="checkbox" class="form-check-input" id="show_photo" name="show_photo" @if($show_photo) checked @endif>
				<label for="show_photo" class="form-check-label fs-11 p-1">Pokaż zdjęcie</label>
			</div>
		</div>
		<div class="col-xl-3 col-md-4 col-12">
			<label class="form-label fs-12">Stanowisko</label>
            <input class="form-control p-1 fs-12 mb-2" type="text" name="position" value="{{$request->position ?? ''}}" placeholder="Stanowisko">

			<label class="form-label fs-12">Dział w firmie</label>
			<input class="form-control p-1 fs-12" type="text" name="department" value="{{$request->department ?? ''}}" placeholder="Dział firmy">
		</div>
		<div class="col-xl-3 col-md-4 col-12">
			<label class="form-label fs-12">E-mail firmowy</label>			
			<input class="form-control p-1 fs-12 mb-2" type="email" name="email" value="{{$request->email ?? ''}}" placeholder="Email@automiras.pl">

			<label class="form-label fs-12">Telefon firmowy</label>		
			<input class="form-control p-1 fs-12" type="tel" name="phone" value="{{$request->phone ?? ''}}" placeholder="+48 555 444 333">
		</div>
		<div class="col-xl-3 col-md-4 col-12">
			<label class="form-label fs-12">Firma</label>
			<select class="form-select fs-12 p-1 mb-2" name="company">
				@foreach($companies as $company)
					<option value="{{$company->id}}" @if($request->company == $company->id) selected @endif>{{$company->name}}</option>
				@endforeach	
			</select>
			<label class="form-label fs-12">Zwrot grzecznościowy</label>
			<select name="greeting"  class="form-select fs-12 p-1 mb-2">
				@foreach($greetings as $greeting)
				<option value="{{$greeting->id}}" @if($request->greeting == $greeting->id) selected @endif>{{$greeting->name}}</option>
				@endforeach
			</select>
		</div>
	</div>
</form>
@endsection