@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('item.update', $item)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="nama">Item:</label>
                        <input type="text" class="form-control" id="item" name="item" value="{{$item->item}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Jumlah:</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{$item->jumlah}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Company:</label>
                        <input type="text" class="form-control" id="company_item" name="company_item" value="{{$item->company_item}}">
                    </div>
                    <div class="form-group">
                        <label for="user">Gudang:</label>
                        <select name = "stored_in" class = "custom-select">
                            @foreach($warehouses as $warehouse)
                            <?php
                                $selected = "";
                                if($item->stored_in == $warehouse->id){
                                    $selected = "selected";
                                }
                            ?>
                                <option value="{{$warehouse->id}}" {{ $selected }}>{{$warehouse->warehouse.'('. $warehouse->location .')'}}</option>
                            @endforeach
                    </div>
                   
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection