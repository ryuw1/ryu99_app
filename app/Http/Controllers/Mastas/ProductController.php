<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\ProductRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\ProductRepository;
//use App\Services\Mastas\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{
    //protected $ProductService;
    //protected $ProductRepository;

    public function index()
        {
            $Products = Product::latest()->paginate(10);
            //$Products = Product::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Product.index', compact('Products'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Product.create');
            }
    
        public function store(ProductRequest $request)
            {
                Product::create($request->all());
                
                return redirect()->route('Product.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Product $Product)
        {
            return view('Product.show', compact('Products'));
        }
*/                   
        public function edit($id)
        {  // $ProductId = (int) $request->route('ProductId');
            $Product = Product::where('id', $id)->firstOrfail();
            return view('mastas.Product.edit')->with('Product', $Product);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(ProductRequest $request, Product $Product)
        {
         $Product = Product::find($request->id);   
         $Product->update([
            "display_order" => $request->display_order,
            "grop_by_product_code" => $request->group_by_product_code,
            "name" => $request->name,
            "unit_price" => $request->unit_price,
            "tax_rate" => $request->tax_rate,
            "quantity" => $request->quantity,
            "unit_price_including" => $request->unit_price_including,
            "unit" => $request->unit,
            "other" => $request->other,
         ]);
        return redirect()->route('Product.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Product = Product::where('id', $id)->firstOrfail();
            $Product->delete($id);

            return redirect()->route('Product.index')
                    ->with('flash_message', '削除しました');

        }
}