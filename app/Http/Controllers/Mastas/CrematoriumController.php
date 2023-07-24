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
            $crematoriums = Crematorium::latest()->paginate(10);
            //$Crematoriums = Crematorium::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.crematorium.index', compact('crematoriums'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.crematorium.create');
            }
    
        public function store(CrematoriumRequest $request)
            {
                Crematorium::create($request->all());
                
                return redirect()->route('crematorium.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Crematorium $Crematorium)
        {
            return view('cematoriumshow', compact('Crematoriums'));
        }
*/                   
        public function edit($id)
        {  // $CrematoriumId = (int) $request->route('CrematoriumId');
            $crematorium = Crematorium::where('id', $id)->firstOrfail();
            return view('mastas.crematorium.edit')->with('crematorium', $crematorium);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(CrematoriumRequest $request, Crematorium $crematorium)
        {
         $crematorium = Crematorium::find($request->id);   
         $crematorium->update([
            "display_order" => $request->display_order,
            "name" => $request->name,
            "tel" => $request->tel,
            "fax" => $request->fax,
            "other" => $request->other,
         ]);
        return redirect()->route('crematorium.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $crematorium = Crematorium::where('id', $id)->firstOrfail();
            $crematorium->delete($id);

            return redirect()->route('crematorium.index')
                    ->with('flash_message', '削除しました');

        }
}