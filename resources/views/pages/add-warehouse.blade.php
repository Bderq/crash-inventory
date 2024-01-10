@extends('layouts.default')
@section('content')

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Depo Ekle</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ url('add-warehouse') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Depo Adı:</span>
                                            </div>
                                            <input type="text" name="warehouse_name" class="form-control">
                                            @if ($errors->has('warehouse_name'))
                                                <span>{{ $errors->first('warehouse_name') }}</span>
                                            @endif
                                        </div>
                                        <select class="form-control">
                                            @foreach ($locations as $location)
                                            <option  name="location_id" value="{{ $location->id }}">{{ $location->location_name }}</option>
                                        @endforeach
                                        </select>
                                    </div>

                                    <div class="justify-content-between flex">
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <button type="button" class="btn btn-outline-danger col-md-3">İPTAL</button>
                                            <div class="col-lg-1"></div>
                                            <button type="submit" class="btn btn-outline-warning col-md-3">KAYDET</button>
                                        </div>
                                    </div>

                                    <!--end form-grop-->
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                </div>
            </div>
        </div>
        <!-- end page content -->
    </div>
    </div>

@stop
