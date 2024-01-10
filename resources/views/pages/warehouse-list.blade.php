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
                            <h4 class="page-title">Depo Listesi</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body order-list">

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Depo</label>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option>Özlüce/Bira</option>
                                            <option>Özlüce/Ağır Alkol</option>
                                            <option>Özlüce/Envanter</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive table-hover nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Depo</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($warehouses as $warehouse)
                                            <tr>
                                                <td>
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">{{ $warehouse->warehouse_name }}</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="{{ route('delete-warehouse', ['id' => $warehouse->warehouse_id]) }}" class="delete-product-link" data-product-id="{{ $warehouse->warehouse_id }}">
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