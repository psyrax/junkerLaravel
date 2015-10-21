@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-xs-12">
		<h1>Create item</h1>
		<form method="POST" action="/item">
                {!! csrf_field() !!}
               <pre>['name', 'region', 'platform', 'category', 'type', 'catalog_number', 'isbn', 'sku', 'role', 'directed', 'kojima_team', 'release_date', 'year'];</pre>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="collectionSelect">Belongs to:</label>
                            <select class="form-control" id="collectionSelect" name="collection_id">
                                @foreach ( $collections as $collection )
                                <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="itemName">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" id="itemName">
                        </div>
                        <div class="form-group">
                            <label for="regionSelect">Region</label>
                            <select class="form-control" id="regionSelect" name="region">
                                <option value="Japan">Japan</option>
                                <option value="Europe">Europe</option>
                                <option value="America">America</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categorySelect">Category</label>
                            <select class="form-control" id="categorySelect" name="category">
                                <option value="Game">Game</option>
                                <option value="OST">OST</option>
                                <option value="Book">Book</option>
                                <option value="Merch">Merch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="platform">Platform</label>
                            <input class="form-control" type="text" name="platform" value="{{ old('platform') }}" id="platform">
                        </div>
                        <div class="form-group">
                            <label for="typeSelect">Type</label>
                            <select class="form-control" id="typeSelect" name="type">
                                <option value="Original">Original</option>
                                <option value="Remake">Remake</option>
                                <option value="Port">Port</option>
                                <option value="Extras">Extras</option>
                            </select>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="directed"> Directed by Hideo
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="kojima_team"> Created by the Kojima Productions
                            </label>
                        </div>
                         <div class="form-group">
                            <label for="kojimaRole">Role</label>
                            <input class="form-control" type="text" name="role" value="{{ old('role') }}" id="kojimaRole">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="releaseDate">Release Date</label>
                            <input class="form-control" type="text" name="release_date" value="{{ old('release_date') }}" id="releaseDate" placeholder="yyyy/mm/dd">
                        </div>
                        <div class="form-group">
                            <label for="yearInput">Year</label>
                            <input class="form-control" type="text" name="year" value="{{ old('year') }}" id="yearInput">
                        </div>
                        <div class="form-group">
                            <label for="skuInput">SKU</label>
                            <input class="form-control" type="text" name="sku" value="{{ old('sku') }}" id="skuInput">
                        </div>
                        <div class="form-group">
                            <label for="catalog_number">Catalog Number</label>
                            <input class="form-control" type="text" name="catalog_number" value="{{ old('catalog_number') }}" id="catalog_number">
                        </div>
                        <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input class="form-control" type="text" name="isbn" value="{{ old('isbn') }}" id="isbn">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-block btn-success">Create item</button>
                        </div>
                    </div>
                </div>
            </form>
	</div>
</div>
@endsection