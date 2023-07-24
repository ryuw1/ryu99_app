<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\GroupByProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\GroupByProductRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\GroupByProductRepository;
//use App\Services\Mastas\GroupByProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GroupByProductController extends Controller
{
    //protected $GroupByProductService;
    //protected $GroupByProductRepository;

    public function index()
        {
            $groupByProducts = GroupByProduct::latest()->paginate(10);
            //$GroupByProducts = GroupByProduct::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.groupByProduct.index', compact('groupByProducts'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.groupByProduct.create');
            }
    
        public function store(GroupByProductRequest $request)
            {
                GroupByProduct::create($request->all());
                
                return redirect()->route('groupByProduct.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(GroupByProduct $GroupByProduct)
        {
            return view('GroupByProduct.show', compact('GroupByProducts'));
        }
*/                   
        public function edit($id)
        {  // $GroupByProductId = (int) $request->route('GroupByProductId');
            $groupByProduct = GroupByProduct::where('id', $id)->firstOrfail();
            return view('mastas.groupByProduct.edit')->with('groupByProduct', $groupByProduct);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(GroupByProductRequest $request, GroupByProduct $GroupByProduct)
        {
         $GroupByProduct = GroupByProduct::find($request->id);   
         $GroupByProduct->update([
            "group_by_product_code" => $request->group_by_product_code,
            "name" => $request->name,
         ]);
        return redirect()->route('groupByProduct.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $GroupByProduct = GroupByProduct::where('id', $id)->firstOrfail();
            $GroupByProduct->delete($id);

            return redirect()->route('groupByProduct.index')
                    ->with('flash_message', '削除しました');

        }
}