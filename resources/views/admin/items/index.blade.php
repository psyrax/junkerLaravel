@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-xs-12">
		<h1>Items <a href="{{ url('/item/create') }}" class="btn btn-success btn-xs navLinkOverride">Create new item</a></h1>
		<ul>
			@foreach( $items as $item )
			<li>{{ $item->name }} <a href="{{ url('/item/' . $item->id .'/edit' ) }}">Edit</a> | <a href="{{ url('/home/item/' . $item->id .'/manage' ) }}">Manage images</a> | <a href="#">Delete</a></li>
			@endforeach
		</ul>
	</div>
</div>
@endsection