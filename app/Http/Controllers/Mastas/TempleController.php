<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Temple;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\TempleRequest;
//use App\Repositories\Mastas\TempleRepository;
//use App\Services\Mastas\TempleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TempleController extends Controller
{
    //protected $TempleService;
    //protected $TempleRepository;

    public function index()
        {
            $temples = Temple::latest()->paginate(10);
            //$Temples = Temple::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.temple.index', compact('temples'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.temple.create');
            }
    
        public function store(TempleRequest $request)
            {
                Temple::create($request->all());
                
                return redirect()->route('temple.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Temple $Temple)
        {
            return view('temple.show', compact('Temples'));
        }
*/                   
        public function edit($id)
        {  // $TempleId = (int) $request->route('TempleId');
            $Temple = Temple::where('id', $id)->firstOrfail();
            return view('mastas.temple.edit')->with('temple', $Temple);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をマスタ名+Requestにしている
        public function update(TempleRequest $request, Temple $Temple)
        {
         $Temple = Temple::find($request->id);   
         $Temple->update([
            "display_order" => $request->display_order,
            "name_kana" => $request->name_kana,
            "name" => $request->name,
            "religion_group" => $request->religion_group,
            "tel" => $request->tel,
            "fax" => $request->fax,
            "other" => $request->other,
         ]);
        return redirect()->route('temple.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Temple = Temple::where('id', $id)->firstOrfail();
            $Temple->delete($id);

            return redirect()->route('temple.index')
                    ->with('flash_message', '削除しました');

        }
}