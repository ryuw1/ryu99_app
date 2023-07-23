<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Hospital;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\HospitalRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\HospitalRepository;
//use App\Services\Mastas\HospitalService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HospitalController extends Controller
{
    //protected $HospitalService;
    //protected $HospitalRepository;

    public function index()
        {
            $Hospitals = Hospital::latest()->paginate(10);
            //$Hospitals = Hospital::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Hospital.index', compact('Hospitals'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Hospital.create');
            }
    
        public function store(HospitalRequest $request)
            {
                Hospital::create($request->all());
                
                return redirect()->route('Hospital.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Hospital $Hospital)
        {
            return view('Hospital.show', compact('Hospitals'));
        }
*/                   
        public function edit($id)
        {  // $HospitalId = (int) $request->route('HospitalId');
            $Hospital = Hospital::where('id', $id)->firstOrfail();
            return view('mastas.Hospital.edit')->with('Hospital', $Hospital);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(HospitalRequest $request, Hospital $Hospital)
        {
         $Hospital = Hospital::find($request->id);   
         $Hospital->update([
            "display_order" => $request->display_order,
            "area_name" => $request->area_name,
            "name_kana" => $request->name_kana,
            "name" => $request->name,
            "postal_code" => $request->postal_code,
            "adress1" => $request->adress1,
            "adress2" => $request->adress2,
            "tel" => $request->tel,
            "fax" => $request->fax,
         ]);
        return redirect()->route('Hospital.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Hospital = Hospital::where('id', $id)->firstOrfail();
            $Hospital->delete($id);

            return redirect()->route('Hospital.index')
                    ->with('flash_message', '削除しました');

        }
}