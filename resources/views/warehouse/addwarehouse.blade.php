@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Insert Data</h1>
        </div>
        <div class="row">
            <div class="col">
            <form action="{{route('warehouse.store')}}" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="gudang">Warehouse:</label>
                        <input type="text" class="form-control" id="warehouse" name="warehouse">
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Company:</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Area(Dalam m persegi):</label>
                        <input type="text" class="form-control" id="area" name="area">
                    </div>
                
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection