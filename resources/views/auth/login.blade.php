@extends('layouts.master')

@section('title', '')

@section('bodyClass', 'lalilulelo')

@section('content')
<div class="container loginCont">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-md-offset-4">
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="emailLogin">Email</label>
                    <input type="email"  class="form-control" name="email" value="{{ old('email') }}" id="emailLogin">
                </div>

                <div>
                    <label for="passwordLogin">Password</label>
                    <input type="password"   class="form-control" name="password" id="passwordLogin">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection