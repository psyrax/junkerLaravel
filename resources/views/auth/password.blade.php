@extends('layouts.master')

@section('title', '')

@section('bodyClass', 'lalilulelo')

@section('content')
<div class="container loginCont">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-md-offset-4">
            <form method="POST" action="/password/email">
                {!! csrf_field() !!}

                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="form-group">
                    <label for="emailLogin">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="emailLogin">
                </div>

                <div>
                    <button type="submit" class="btn btn-block btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection