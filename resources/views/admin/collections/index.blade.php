@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-xs-12">
		<h1>Collections <a href="{{ url('/collection/create') }}" class="btn btn-success btn-xs navLinkOverride">Create new collection</a></h1>
		<ul>
			@foreach( $collections as $collection )
			<li>{{ $collection->name }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endsection