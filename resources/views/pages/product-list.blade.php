@extends('layouts.default')
@section('content')

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Ürün Listesi</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body order-list">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-6">
                                            <select name="category">
                                                @foreach ($categories as $cat)
                                                    @if ($cat)
                                                        <option value="{{ $cat->category_id }}">{{ $cat->category_name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered dt-responsive table-hover nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Ürün</th>
                                                    <th>Kategori</th>
                                                    <th>Miktar</th>
                                                    <th>Fiyat</th>
                                                    <th>Sil</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td>
                                                            <p class="d-inline-block align-middle mb-0">
                                                                {{ $product->product_name }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <!-- Kategori var mı kontrol et -->
                                                            @if ($product->category)
                                                                {{ $product->category->category_name }}
                                                            @else
                                                                Kategori Yok
                                                            @endif
                                                        </td>
                                                        <td></td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>
                                                            <a href="{{ route('delete-product', ['id' => $product->product_id]) }}"
                                                                class="delete-product-link"
                                                                data-product-id="{{ $product->product_id }}">
                                                                <i class="far fa-trash-alt text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

            </div>
            <!-- end page content -->
        </div>

    @stop
