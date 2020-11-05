@extends('layouts.app')
@section('content')

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <h1 class="col">List Item</h1>
            </div>
            <div class="row">
                <div class="col-md-2 offset-md-10">
                    <a href="{{route('item.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Gudang</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td><a href="{{route('item.edit', $item)}}" class="text-white">{{$item->item}}</td>
                                <td>{{$item->jumlah}}</td>
                                <td>{{$item->stored->warehouse}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <form action="{{route('item.destroy', $item)}}" method="post">
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