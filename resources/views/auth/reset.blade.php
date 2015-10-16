@extends('layouts.master')

@section('title', '')

@section('bodyClass', 'lalilulelo')

@section('content')
<div class="container loginCont">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-md-offset-4">
           <!-- resources/views/auth/reset.blade.php -->

            <form method="POST" action="/password/reset">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">

                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="form-group">
                    <label for="emailLogin">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="emailLogin">
                </div>

                <div class="form-group">
                    <label for="passwordLogin">Password</label>
                    <input class="form-control" type="password" name="password" id="passwordLogin">
                </div>

                <div class="form-group">
                    <label for="passwordConfirm">Confirm Password</label>
                    <input class="form-control" type="password" name="password_confirmation" id="passwordConfirm">
                </div>

                <div>
                    <button type="submit" class="btn btn-block btn-primary">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection