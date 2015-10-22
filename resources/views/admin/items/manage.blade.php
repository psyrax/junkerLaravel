@extends('layouts.admin')

@section('content')
<script type="text/javascript">
    window.itemId = {{ $item->id }};
    window.token =  "{{csrf_token()}}";
</script>
<div class="row" ng-app="junkerImage">
	<div class="col-xs-12">
		<h1>Manage item</h1>
        <div class="row">
            @foreach ( $item->images as $image )
            <div class="col-md-4">
                <h3>{{ $image->title }}</h3>
                <p>{{ $image->description }}</p>
                <img class="img-responsive" src="{{ $image->path }}" style="width:300px;"/>
            </div>
            @endforeach
        </div>
        <hr />
        <h1>Add images</h1>
        <div ng-controller="imageSearchController">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="imageSearch">Search Images</label>
                        <input class="form-control" type="text"  ng-model="searchText" id="imageSearch">
                    </div>
                </div>
                <div class="col-md-8">
                    <div ng-show="searchText" ng-repeat="image in images | filter:{prevId:searchText}">
                        <div class="row">
                            <div class="col-md-6" style="word-break:break-all">
                                @{{image.path}}
                                <br />
                                <input type="button" class="btn btn-primary btn-xs" ng-click="loadImage(image.prevId, image.path)" value="preview"/>
                                <div id="imagep@{{image.prevId}}"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="imageTitle@{{image.prevId}}">Title</label>
                                    <input class="form-control" type="text"  ng-model="image.title" id="imageTitle@{{image.prevId}}">
                                </div>
                                <div class="form-group">
                                    <label for="imageDesc@{{image.prevId}}">Description</label>
                                    <textarea class="form-control" type="text"  ng-model="image.description" id="imageDesc@{{image.prevId}}"></textarea>
                                </div>
                                <input type="button" class="btn btn-block btn-success" value="Add" ng-click="saveImage(image)"/>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>

	</div>
</div>
@endsection