@extends('layouts.master')

@section('title', 'Image')

@section('bodyClass', $bodyClass)

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-xs-12 col-md-8">
    			<?php /*<img src="{{ $image->path }}" />*/ ?>
    			<h1>Metal Gear Pilot Disk <small>Alternate Version</small></h1>
    			<img class="img-responsive" src="{{asset('img/placeholders/mgs_pilot_disk.jpg')}}" />
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<div class="panel panel-primary panelRelated">
    				<div class="panel-heading">
	    				<h3 class="panel-title">Related images:</h3>
	    			</div>
	    			<div class="panel-body">
		    			<ul>
		    				<li><a href="#">Cover</a></li>
							<li><a href="#">Back</a></li>
							<li><a href="#">Manual English</a></li>
							<li><a href="#">Manual japanese</a></li>
							<li><a href="#">Disc</a></li>
							<li><a href="#">Cover from another version by Chris Barker</a></li>
							<li><a href="#">Version Info</a></li>
		    			</ul>
		    		</div>
    			</div>
    		</div>
    	</div>
    </div>
@endsection