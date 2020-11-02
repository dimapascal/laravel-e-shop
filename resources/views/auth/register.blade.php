@extends('layouts.app')

@section('title') Register @endsection

@section('content')
    <form class="form-horizontal d-flex flex-column align-items-center justify-content-center py-4 mb-3 form form--signing"
        action='{{ route('registerSubmit') }}' method="post">
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
                <legend class="display-4">Register</legend>
            </div>

            @csrf

            <div class="form-group w-100">
                <label for="registerUsername">
                    User name
                    <span class="required">*</span>
                </label>
                <input required class="form-control" type="text" name="username" id="registerUsername"
                    placeholder="Your username" value="{{ old('username') }}">
            </div>

            <div class="w-100 d-flex jsutfy-content-spacebetween">
                <div class="form-group pr-1 w-100">
                    <label for="registerFirstName">
                        First name
                        <span class="required">*</span>
                    </label>
                    <input required class="form-control" type="text" name="firstname" id="registerFirstName"
                        placeholder="Enter yor first name" value="{{ old('firstname') }}">
                </div>
                <div class="form-group pl-1 w-100">
                    <label for="registerLastName">
                        Last name (Surname)
                        <span class="required">*</span>
                    </label>
                    <input required class="form-control" type="text" name="lastname" id="registerLastName"
                        placeholder="Enter yor last name" value="{{ old('lastname') }}">
                </div>

            </div>

            <div class="form-group w-100">
                <label for="registerEmail">
                    Email address
                    <span class="required">*</span>
                </label>
                {{-- is-invalid --}}
                <input required class="form-control " type="email" name="email" id="registerEmail" placeholder="Enter email"
                    aria-describedby="emailHelp" value="{{ old('email') }}">
                <small id="emailHelp" class="form-text text-muted">
                    Required to keep you in contact
                </small>
            </div>

            <div class="form-group w-100">
                <label for="registerAge">
                    Age
                    <span class="required">*</span>
                </label>
                <input required class="form-control" type="date" name="age" id="registerAge" placeholder="Enter your age"
                    aria-describedby="ageHelp" max="1950-31-01" value="{{ old('age') }}" />
            </div>


            <div class="form-group w-100">
                <label for="registerPassword">
                    Password
                    <span class="required">*</span>
                </label>
                <input required class="form-control" type="password" name="password" id="registerPassword"
                    placeholder="Enter your password" />
            </div>

            <div class="form-group w-100">
                <label for="registerPasswordConfirm">
                    Password confirm
                    <span class="required">*</span>
                </label>
                <input required class="form-control" type="password" name="passwordConfirm" id="registerPasswordConfirm"
                    placeholder="Confirm your password" />
            </div>

            <button type="submit" class="btn btn-success w-100 mt-4">Register</button>

            <a href="{{ route('login') }}" type="button" class="btn btn-outline-info  w-50 mt-3">Log In</a>
        </fieldset>
    </form>
@endsection
