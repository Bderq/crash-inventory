@extends('layouts.default')
@section('content')
    
<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Stok Durumu</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body order-list">
                            <div class="header-title mt-0 mb-3">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Depo</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Özlüce/Bira</option>
                                            <option>Özlüce/Ağır Alkol</option>
                                            <option>Özlüce/Envanter</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-top-0">Ürün</th>
                                            <th class="border-top-0">Birim</th>
                                            <th class="border-top-0">Miktar</th>
                                            <th class="border-top-0">Tutar</th>
                                            <th class="border-top-0">Durum</th>
                                        </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Havana Club 7
                                            </td>
                                            <td>Şişe</td>
                                            <td>200</td>
                                            <td> $750</td>
                                            <td>
                                                <span class="badge badge-md badge-boxed  badge-soft-success">Yeterli</span>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td>
                                                Efes Malt
                                            </td>
                                            <td>Kasa</td>
                                            <td>200</td>
                                            <td> $750</td>
                                            <td>
                                                <span class="badge badge-md badge-boxed  badge-soft-warning">Kritik!</span>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td>
                                                Efes Malt
                                            </td>
                                            <td>Kasa</td>
                                            <td>200</td>
                                            <td> $750</td>
                                            <td>
                                                <span class="badge badge-md badge-boxed  badge-soft-danger">Yok!</span>
                                            </td>
                                        </tr><!--end tr-->
                                    </tbody>
                                </table> <!--end table-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>
        </div>
    </div>
</div>

@stop