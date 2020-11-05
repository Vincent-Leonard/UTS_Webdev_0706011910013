@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Insert Data</h1>
        </div>
        <div class="row">
            <div class="col">
            <form action="{{route('item.store')}}" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="gudang">Item:</label>
                        <input type="text" class="form-control" id="item" name="item">
                    </div>
                    <div class="form-group">
                        <label for="location">Jumlah:</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                    </div>
                    <div class="form-group">
                        <label for="warehouse">Gudang:</label>
                        <select name = "stored_in" class = "custom-select">
                            @foreach ($warehouses as $warehouse)
                                <option value="{{$warehouse->id}}">{{$warehouse->warehouse.'('. $warehouse->location .')'}}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection