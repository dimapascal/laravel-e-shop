@extends('layouts.app')

@section('title') Welcome @endsection

@section('content')
    <div class="text-center w-100 h-100 p-5 mt-5 d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/success.svg') }}" alt="Succes" width="180" height="180">
        <h2 class="mt-3">{{ $message ?? 'Success' }}</h2>
    </div>
@endsection
