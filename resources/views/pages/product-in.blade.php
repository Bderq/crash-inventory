<!-- resources/views/pages/product-in.blade.php -->

@extends('layouts.default')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title ml-1 font-24">Depoya Ürün Gir</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('save-product-in') }}">
                                    <div class="form-group row justify-content-between">
                                        <div class="col-5">
                                            <label class="control-label input-group-text mr-5 " for="waybill-date-input"
                                                style="margin-right: 4.5rem !important;">Tarih</label>
                                            <input class="form-control" type="date" value=""
                                                id="waybill-date-input">
                                        </div>
                                        <div class="col-4">
                                            <label class="control-label input-group-text" for="waybill-time-input"
                                                style="margin-left: 3rem !important; justify-content: right;">Saat</label>
                                            <input class="form-control" type="time" value=""
                                                id="waybill-time-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="control-label input-group-text" for="warehouse-out-select"
                                                style="margin-right: 6.5rem !important;">Depo</label>
                                            <select name="" id="warehouse-out-select" class="form-control">
                                                <option value="">Özlüce/Bira</option>
                                                <option value="">Özlüce/Ağır Alkol</option>
                                                <option value="">Özlüce/Envanter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-lg-12">
                                            <h4 class="page-title">Ürün Ekle</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <!--Repeater-->
                                    <fieldset>
                                        <div class="repeater-custom-show-hide">
                                            <div data-repeater-list="products">
                                                @foreach ($products as $product)
                                                    <div data-repeater-item=""
                                                        data-product-name="{{ $product->product_name }}"
                                                        data-unit="{{ $product->unit }}">
                                                @endforeach
                                                <div class="form-group row  d-flex align-items-end">
                                                    <div class="col-4" style="padding-right: 0 !important;">
                                                        <input type="text" class="form-control product-input"
                                                            placeholder="Ürün Adı" name="product_name" list="products-list">
                                                        <datalist id="products-list"></datalist>
                                                        <div id="product-icon"></div>
                                                    </div>
                                                    <div class="col-3" style="padding-right: 0 !important;">
                                                        <select name="unit" class="form-control">
                                                            <!-- Unit seçenekleri buradan gelecek -->
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" placeholder="Miktar"
                                                            name="quantity">
                                                    </div>
                                                    <div class="col-1">
                                                        <span data-repeater-delete="" class="btn btn-gradient-danger btn-sm"
                                                            style="font-size: 0.85rem;">Sil</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-12">
                                                <span data-repeater-create="" class="btn btn-warning btn-md">
                                                    <span class="fa fa-plus"></span> Satır Ekle
                                                </span>
                                            </div>
                                        </div>
                            </div>
                            </fieldset>
                            <hr>
                            <!--save container-->
                            <div class="form-group row justify-content-around">
                                <input type="button" value="İptal" class="btn btn-gradient-danger">
                                <input type="submit" value="Onayla" class="btn btn-gradient-success">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        // Unit seçeneklerini güncelleyen fonksiyon
        function updateUnitOptions(products) {
            var unitSelect = $('select[name="unit"]');
            unitSelect.empty();

            // Eğer ürün varsa ve birimleri varsa seçenekleri ekle
            if (products.length > 0) {
                products.forEach(function(product) {
                    // Ürünün birimini kontrol et ve eğer varsa seçenekleri ekle
                    if (product.unit) {
                        unitSelect.append('<option value="' + product.unit + '">' + product.unit + '</option>');
                    }
                });
            } else {
                unitSelect.append('<option value="">Birim Bulunamadı</option>');
            }
        }

        // Ürün adı yazıldığında bu fonksiyon çalışacak
        $('input[name="product_name"]').on('input', function() {
            var query = $(this).val();

            // Ajax isteği gönder
            $.ajax({
                url: '{{ route('search-products') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    query: query
                },
                success: function(response) {
                    // Ajax isteği başarılı olursa, ürün isimlerini datalist'e ekle
                    var options = '';
                    response.forEach(function(product) {
                        options += '<option value="' + product.product_name + '">' + product
                            .product_name + '</option>';
                    });

                    $('datalist#products-list').html(options);

                    // Çerçeve rengini değiştirerek görselleştirme
                    var inputField = $('input[name="product_name"]');
                    if (response.length > 0) {
                        inputField.removeClass('invalid-product').addClass('valid-product');
                    } else {
                        inputField.removeClass('valid-product').addClass('invalid-product');
                    }

                    // Unit seçeneklerini güncelle
                    updateUnitOptions(response);
                }
            });
        });
    </script>
@endsection
