@extends('layouts.default')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Ürün Ekle</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ isset($product) ? route('post-edit-product', ['id' => $product->product_id]) : route('saveProduct') }}">
                                    {{ csrf_field() }}
                                    <div class="row" style="margin-left: -12px">
                                        <div class="col-sm-3 mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Kategori:</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="category_id">
                                                @foreach ($categories as $cat)
                                                    @if ($cat)
                                                        <option value="{{ $cat->category_id }}">{{ $cat->category_name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                                                                                                        
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Ürün Adı:</span>
                                            </div>
                                            <input type="text" name="product_name" class="form-control"
                                                placeholder="Efes Malt" value="{{ isset($product) ? $product->product_name : ''}}">
                                            @if ($errors->has('product_name'))
                                                <span>{{ $errors->first('product_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Fiyat:</span>
                                            </div>
                                            <input type="text" id="example-input1-group1" name="price"
                                                class="form-control" placeholder="Fiyat"  value="{{ isset($product) ? $product->price : ''}}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Ana Birim:</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Şişe" name="unit" value="{{ isset($product) ? $product->unit : ''}}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Çarpan:</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="20" name="multipler" value="{{ isset($product) ? $product->multipler : ''}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Stok Birimi:</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Kasa" name="stock_unit" value="{{ isset($product) ? $product->stock_unit : ''}}">
                                        </div>
                                    </div>

                                    <div class="justify-content-between flex">
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <button type="button" class="btn btn-outline-danger col-md-3">İPTAL</button>
                                            <div class="col-lg-1"></div>
                                            <button type="submit" class="btn btn-outline-warning col-md-3">{{ isset($product) ? 'GÜNCELLE' : 'KAYDET' }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
