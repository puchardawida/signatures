@extends('base')

@section('title', 'Zaloguj się')
    
@section('content')
    <form method="POST" action="{{ route('login') }}" class="py-5">
        @csrf
        <!-- Email Address -->
        <h2 class="font-weight-600 f-18">Logowanie</h2>
        <div class="mt-4">
            <label for="email">Email</label>
            <input id="email" class="block mt-1 form-control" type="email" name="email" value="" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" class="block mt-1 form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end mt-4">  
            <button type="submit" class="ml-3 rounded btn btn-primary">
                Zaloguj się
            </button>
        </div>
    </form>
@endsection