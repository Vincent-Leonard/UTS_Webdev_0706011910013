@extends('layouts.app')
@section('content')

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <h1 class="col">List Gudang</h1>
            </div>
            <div class="row">
                <div class="col-md-2 offset-md-10">
                    <a href="{{route('warehouse.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Gudang</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Luas</th>
                            <th scope="col">Sedang Menyimpan</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($warehouses as $warehouse)
                            <tr>
                                <td><a href="{{route('warehouse.edit', $warehouse)}}">{{$warehouse->warehouse}}</td>
                                <td>{{$warehouse->location}}</td>
                                <td>{{$warehouse->company}}</td>
                                <td>{{$warehouse->area}}</td>
                                <td>
                                    @foreach ($warehouse->items as $item)
                                        <li>{{$item->item}}</li>
                                    @endforeach
                                </td>
                                <td>{{$warehouse->updated_at}}</td>
                                <td>{{$warehouse->created_at}}</td>
                                <td>
                                    <form action="{{route('warehouse.destroy', $warehouse)}}" method="post"
                                    onsubmit="return confirm('Deleting this data will delete all other data related');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
@endsection