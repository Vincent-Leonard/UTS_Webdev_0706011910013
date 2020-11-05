@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('warehouse.update', $warehouse)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="nama">Title:</label>
                        <input type="text" class="form-control" id="warehouse" name="warehouse" value="{{$warehouse->warehouse}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$warehouse->location}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Company:</label>
                        <input type="text" class="form-control" id="company" name="company" value="{{$warehouse->company}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Area(Dalam m persegi):</label>
                        <input type="text" class="form-control" id="area" name="area" value="{{$warehouse->area}}">
                    </div>
                   
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection