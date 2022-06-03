@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- logito KureGrill seguido de un mensaje de Bienvenida  -->
                    <img _ngcontent-serverapp-c92="" src="../img/favicon.ico" alt="Start Bootstrap Logo">
                    {{ __('Bienvenido ') }} {{auth()->user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
