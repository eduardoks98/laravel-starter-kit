@extends('admin.master')
@section('title', 'Dashboard')
@section('import', 'dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    {{ __('Bem vindo!') }}
                </div>
            </div>
        </div>
    </div>
@endsection
