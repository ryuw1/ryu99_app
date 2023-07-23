<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Unit;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\UnitRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\UnitRepository;
//use App\Services\Mastas\UnitService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class UnitController extends Controller
{
    //protected $UnitService;
    //protected $UnitRepository;

    public function index()
        {
            $Units = Unit::latest()->paginate(10);
            //$Units = Unit::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Unit.index', compact('Units'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Unit.create');
            }
    
        public function store(UnitRequest $request)
            {
                Unit::create($request->all());
                
                return redirect()->route('Unit.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Unit $Unit)
        {
            return view('Unit.show', compact('Units'));
        }
*/                   
        public function edit($id)
        {  // $UnitId = (int) $request->route('UnitId');
            $Unit = Unit::where('id', $id)->firstOrfail();
            return view('mastas.Unit.edit')->with('Unit', $Unit);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(UnitRequest $request, Unit $Unit)
        {
         $Unit = Unit::find($request->id);   
         $Unit->update([
            "display_order" => $request->display_order,
            "name" => $request->name,
         ]);
        return redirect()->route('Unit.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Unit = Unit::where('id', $id)->firstOrfail();
            $Unit->delete($id);

            return redirect()->route('Unit.index')
                    ->with('flash_message', '削除しました');

        }
}