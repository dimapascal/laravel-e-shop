@extends('layouts.app')

@section('title') Register @endsection

@section('content')
    <form class="form-horizontal d-flex flex-column align-items-center justify-content-center py-4 mb-3 form form--signing"
        action='{{ route('loginSubmit') }}' method="post">
        @if ($errors->any())
            <div class="form__message alert alert-dismissible alert-danger rounded p-2">
                <p class="font-weight-bold pl-1">Errors</p>
                <ul class="p-0 m-0 pl-4 pb-1 ">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <fieldset class="d-flex flex-column align-items-center form__content">
            <div class="mb-2">
                <legend class="display-4">Login</legend>
            </div>

            @csrf

            <div class="form-group w-100">
                <label for="registerEmail">
                    Email address
                </label>
                <input required class="form-control" type="text" name="email" id="registerEmail" placeholder="Enter email"
                    value="{{ old('email') }}">
            </div>


            <div class="form-group w-100">
                <label for="registerPassword">
                    Password
                </label>
                <input required class="form-control" type="password" name="password" id="registerPassword"
                    placeholder="Enter your password" />
            </div>

            <button type="submit" class="btn btn-success w-100 mt-4">Log In</button>

            <a href="{{ route('register') }}" type="button" class="btn btn-outline-info  w-50 mt-3">Register</a>

        </fieldset>
    </form>
@endsection
