<?php

namespace App\Http\Controllers;


use App\Models\Product; // Eğer model adınız Product ise burayı düzeltin
use App\Models\Category;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function saveProduct(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'unit' => 'required|max:255',
        ]);
     
        // Formdan gelen bilgileri kullanarak yeni bir ürün oluştur
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->unit = $request->input('unit');
        $product->multipler = $request->input('multipler');
        $product->stock_unit = $request->input('stock_unit');
    
        // Veritabanına kaydet
        $product->save();
        
        $categories = Category::all(); // Kategorileri veritabanından çek
        // Kategorileri view'e gönder
        return view('pages.add-product', compact('categories'))->with('success', 'Ürün başarıyla kaydedildi.');
    }    

    public function showCategories(Request $request)
    {
        $categories = Category::all(); // Kategorileri veritabanından çek
        return view('pages.add-product', compact('categories'));
    }
     

}
