<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Hall;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\HallRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\HallRepository;
//use App\Services\Mastas\HallService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HallController extends Controller
{
    //protected $HallService;
    //protected $HallRepository;

    public function index()
        {
            $Halls = Hall::latest()->paginate(10);
            //$Halls = Hall::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Hall.index', compact('Halls'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Hall.create');
            }
    
        public function store(HallRequest $request)
            {
                Hall::create($request->all());
                
                return redirect()->route('Hall.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Hall $Hall)
        {
            return view('Hall.show', compact('Halls'));
        }
*/                   
        public function edit($id)
        {  // $HallId = (int) $request->route('HallId');
            $Hall = Hall::where('id', $id)->firstOrfail();
            return view('mastas.Hall.edit')->with('Hall', $Hall);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(HallRequest $request, Hall $Hall)
        {
         $Hall = Hall::find($request->id);   
         $Hall->update([
            "display_order" => $request->display_order,
            "name" => $request->name,
            "postal_code" => $request->postal_code,
            "adress1" => $request->adress1,
            "adress2" => $request->adress2,
            "tel" => $request->tel,
            "fax" => $request->fax,
            "map" => $request->map,
         ]);
        return redirect()->route('Hall.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Hall = Hall::where('id', $id)->firstOrfail();
            $Hall->delete($id);

            return redirect()->route('Hall.index')
                    ->with('flash_message', '削除しました');

        }
}