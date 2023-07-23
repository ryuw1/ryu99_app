<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\ObituaryText;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\ObituaryTextRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\ObituaryTextRepository;
//use App\Services\Mastas\ObituaryTextService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ObituaryTextController extends Controller
{
    //protected $ObituaryTextService;
    //protected $ObituaryTextRepository;

    public function index()
        {
            $ObituaryTexts = ObituaryText::latest()->paginate(10);
            //$ObituaryTexts = ObituaryText::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.ObituaryText.index', compact('ObituaryTexts'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.ObituaryText.create');
            }
    
        public function store(ObituaryTextRequest $request)
            {
                ObituaryText::create($request->all());
                
                return redirect()->route('ObituaryText.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(ObituaryText $ObituaryText)
        {
            return view('ObituaryText.show', compact('ObituaryTexts'));
        }
*/                   
        public function edit($id)
        {  // $ObituaryTextId = (int) $request->route('ObituaryTextId');
            $ObituaryText = ObituaryText::where('id', $id)->firstOrfail();
            return view('mastas.ObituaryText.edit')->with('ObituaryText', $ObituaryText);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(ObituaryTextRequest $request, ObituaryText $ObituaryText)
        {
         $ObituaryText = ObituaryText::find($request->id);   
         $ObituaryText->update([
            "obituary_main" => $request->obituary_main,
         ]);
        return redirect()->route('ObituaryText.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $ObituaryText = ObituaryText::where('id', $id)->firstOrfail();
            $ObituaryText->delete($id);

            return redirect()->route('ObituaryText.index')
                    ->with('flash_message', '削除しました');

        }
}