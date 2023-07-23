<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Crematorium;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\CrematoriumRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\CrematoriumRepository;
//use App\Services\Mastas\CrematoriumService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CrematoriumController extends Controller
{
    //protected $CrematoriumService;
    //protected $CrematoriumRepository;

    public function index()
        {
            $Crematoriums = Crematorium::latest()->paginate(10);
            //$Crematoriums = Crematorium::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Crematorium.index', compact('Crematoriums'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Crematorium.create');
            }
    
        public function store(CrematoriumRequest $request)
            {
                Crematorium::create($request->all());
                
                return redirect()->route('Crematorium.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Crematorium $Crematorium)
        {
            return view('Crematorium.show', compact('Crematoriums'));
        }
*/                   
        public function edit($id)
        {  // $CrematoriumId = (int) $request->route('CrematoriumId');
            $Crematorium = Crematorium::where('id', $id)->firstOrfail();
            return view('mastas.Crematorium.edit')->with('Crematorium', $Crematorium);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(CrematoriumRequest $request, Crematorium $Crematorium)
        {
         $Crematorium = Crematorium::find($request->id);   
         $Crematorium->update([
            "display_order" => $request->display_order,
            "name" => $request->name,
            "tel" => $request->tel,
            "fax" => $request->fax,
            "other" => $request->other,
         ]);
        return redirect()->route('Crematorium.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Crematorium = Crematorium::where('id', $id)->firstOrfail();
            $Crematorium->delete($id);

            return redirect()->route('Crematorium.index')
                    ->with('flash_message', '削除しました');

        }
}