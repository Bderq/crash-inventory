@extends('layouts.default')
@section('content')

<div>
        <table class="table">
                <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ürün Adı</th>
                                <th scope="col">Fiyat</th>
                        </tr>
                </thead>
                <tbody>
                        @foreach ($products as $key =>$product)
                                <tr>
                                        <th scope="row">{{$product->$key+1}}</th>
                                        <th scope="row">{{$product->name}}</th>
                                        <th scope="row">{{$product->productCost}}</th>
                                </tr>
                            
                        @endforeach
                </tbody>
        </table>
</div>

@stop
