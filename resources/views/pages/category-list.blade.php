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
                            <h4 class="page-title">Kategori Listesi</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ url('category-list') }}">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Adı:</span>
                                            </div>
                                            <input type="text" name="category_name" class="form-control">
                                            @if ($errors->has('category_name'))
                                                <span>{{ $errors->first('category_name') }}</span>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-outline-warning col-md-3">KAYDET</button>

                                    </div>
                                    <!--end form-grop-->
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body order-list">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive table-hover nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="{{ route('edit-product', ['id' => $category->category_id]) }}" class="d-inline-block align-middle mb-0 product-name" data-product-id="{{ $category->category_id }}">{{ $category->category_name }}</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="{{ route('delete-category', ['id' => $category->category_id]) }}" class="delete-product-link" data-product-id="{{ $category->category_id }}">
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