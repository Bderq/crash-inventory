<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseListController extends Controller
{
    public function showWarehouseList()
    {
        $warehouses = Warehouse::all();
        return view('pages.warehouse-list', compact('warehouses'));
    }


    public function saveWarehouse(Request $request)
    {
        $validated = $request->validate([
            'warehouse_name' => 'required|max:255',
            'location_id' => 'required|exists:locations,id', // locations tablosunda geçerli bir id olup olmadığını kontrol et

        ]);

        // Formdan gelen bilgileri kullanarak yeni bir ürün oluştur
        $warehouse = new Warehouse();
        $warehouse->warehouse_name = $request->input('warehouse_name');
        $warehouse->location_id = $request->input('location_id');




        // Veritabanına kaydet
        $warehouse->save();
    }

    public function deleteWarehouse($id)
    {
        // Silme işlemi burada gerçekleştirilecek
        // Örneğin:
        $warehouse = Warehouse::where('warehouse_id', $id)->first();
        
        if ($warehouse) {
            $warehouse->delete();
            // Silme işlemi başarılı olduysa bir yönlendirme veya başka bir işlem yapabilirsiniz.
            return redirect()->route('showWarehouseList')->with('success', 'Ürün başarıyla silindi.');
        } else {
            // Ürün bulunamadıysa bir hata mesajı gösterebilirsiniz.
            return redirect()->route('showWarehouseList')->with('error', 'Ürün bulunamadı.');
        }
    }
    

    
}
