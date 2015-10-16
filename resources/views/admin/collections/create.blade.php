@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-xs-12">
		<h1>Create collection</h1>
		<form method="POST" action="/collection">
                {!! csrf_field() !!}
               
                <div class="form-group">
                    <label for="collectionName">Collection Name</label>
                    <input class="form-control" type="text" name="collection_name" value="{{ old('collection_name') }}" id="collectionName">
                </div>

                <div>
                    <button type="submit" class="btn btn-block btn-success">Create collection</button>
                </div>
            </form>
	</div>
</div>
@endsection