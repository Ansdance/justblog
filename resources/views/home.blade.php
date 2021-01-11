@extends('layouts.appD')

@section('contentD')
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

                    {{ __('You are logged in!') }} {{  Auth::user()->name  }}
{{-- @if (Auth:check())     //or @auth
        Hi, {{ Auth::user()->name }}
     @else
        Laravel
     @endif                 //or endauth --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
