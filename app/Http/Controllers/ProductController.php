<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductList()
    {
        $products = Product::all();
        $categories = Category::all(); // Kategorileri veritabanından çek

        // Ürünlerin ilişkili kategori bilgisini yükle
        foreach ($products as $product) {
            $product->category = $product->category()->first();
        }

        return view('pages.product-list', compact('products', 'categories'));
    }



    public function deleteProduct($id)
    {
        // Silme işlemi burada gerçekleştirilecek
        // Örneğin:
        $product = Product::where('product_id', $id)->first();

        if ($product) {
            $product->delete();
            // Silme işlemi başarılı olduysa bir yönlendirme veya başka bir işlem yapabilirsiniz.
            return redirect()->route('showProductList')->with('success', 'Ürün başarıyla silindi.');
        } else {
            // Ürün bulunamadıysa bir hata mesajı gösterebilirsiniz.
            return redirect()->route('showProductList')->with('error', 'Ürün bulunamadı.');
        }
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('pages.add-product', compact('product'));
    }


    public function postEditProduct(Request $request, $id)
    {
        $validateData = $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|integer',
            'unit' => 'required|string',
            'multipler' => 'required|integer',
            'stock_unit' => 'required|string',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('add-product')->with('error', 'Ürün bulunamadı.');
        }

        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->stock_unit = $request->stock_unit;
        $product->multipler = $request->multipler;

        $product->save();

        return redirect()->route('showProductList')->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function showCategoryList()
    {
        $categories = Category::all();
        return view('pages.category-list', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        // Formdan gelen bilgileri kullanarak yeni bir ürün oluştur
        $category = new Category();
        $category->category_name = $request->input('category_name');

        // Veritabanına kaydet
        $category->save();
    }

    public function deleteCategory($id)
    {
        // Silme işlemi burada gerçekleştirilecek
        // Örneğin:
        $category = Category::where('category_id', $id)->first();

        if ($category) {
            $category->delete();
            // Silme işlemi başarılı olduysa bir yönlendirme veya başka bir işlem yapabilirsiniz.
            return redirect()->route('category-list')->with('success', 'Ürün başarıyla silindi.');
        } else {
            // Ürün bulunamadıysa bir hata mesajı gösterebilirsiniz.
            return redirect()->route('category-list')->with('error', 'Ürün bulunamadı.');
        }
    }


    public function saveProduct(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'unit' => 'required|max:255',
            'category_id' => 'required',

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

    public function showCategories()
    {
        $products = Product::all();
        $categories = Category::all(); // Kategorileri veritabanından çek

        return view('pages.add-product', compact('products', 'categories'));
    }




    public function saveProductIn(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'selected_unit' => 'required|max:255',
            'quantity' => 'required|numeric',
        ]);

        // Veritabanında aynı isimde ürün var mı kontrol et
        $existingProduct = Product::where('product_name', $request->input('product_name'))->first();

        if (!$existingProduct) {
            // Ürün yoksa hata mesajı gönder
            return redirect()->back()->with('error', 'Ürün bulunamadı. Lütfen geçerli bir ürün adı girin.');
        }

        // Formdan gelen bilgileri kullanarak yeni bir ürün oluştur
        $inventory = new Inventory();
        $inventory->product_id = $existingProduct->product_id;
        $inventory->selected_unit = $request->input('selected_unit');
        $inventory->quantity = $request->input('quantity');

        // Veritabanına kaydet
        $inventory->save();

        $products = Product::all(); // Kategorileri veritabanından çek
        // Kategorileri view'e gönder
        return redirect()->route('product-in')->with('success', 'Ürün başarıyla kaydedildi.');
    }


    public function productIn(Request $request)
    {
        $products = Product::all(); // Ürünleri veritabanından çek
        return view('pages.product-in', compact('products'))->with('success', 'Ürün başarıyla kaydedildi.');
    }
    

    public function searchProducts(Request $request)
    {
        $query = $request->input('query');

        // Veritabanında benzer ürün adlarını ara
        $products = Product::where('product_name', 'like', "%$query%")
            ->select('product_name') // Sadece product_name sütununu seç
            ->distinct() // Tekrarlayanları filtrele
            ->get();

        return response()->json($products);
    }




    public function getProductUnits(Request $request)
    {
        // getProductUnits işlemleri burada yapılır
    }
}
