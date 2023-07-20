<?php

namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Temple;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\TempleRequest;
//use App\Http\Requests\Mastas\UpdateTempleRequest;
//use App\Repositories\Mastas\TempleRepository;
//use App\Services\Mastas\TempleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TempleController extends Controller
{
    //protected $templeService;
    //protected $templeRepository;

    public function index()
        {
            $temples = Temple::latest()->paginate(10);
            //$temples = Temple::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.index', compact('temples'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.create');
            }
    
        public function store(Request $request)
            {
                $request->validate([
                    'display_order' => 'required|max:3',
                    'name_kana' => 'required|max:20',
                    'name' => 'required|max:20',
                    'tel' => 'required|max:12',
                    'fax' => 'required|max:12',
                    'other' => 'nullable',
                ]);
                Temple::create($request->all());
                return redirect()->route('temple.index')
                        ->with('success','新たな寺院マスタが登録されました');
            }
/*
        public function show(Temple $temple)
        {
            return view('temple.show', compact('temples'));
        }
*/                   
        public function edit($id)
        {  // $templeId = (int) $request->route('templeId');
            $temple = Temple::where('id', $id)->firstOrfail();
            return view('mastas.edit')->with('temple', $temple);
        }

        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をTempleRequestにしている
        public function update(TempleRequest $request, Temple $temple)
        {
         $temple = Temple::find($request->id);   
         $temple->update([
            "display_order" => $request->display_order,
            "name_kana" => $request->name_kana,
            "name" => $request->name,
            "religion_group" => $request->religion_group,
            "tel" => $request->tel,
            "fax" => $request->fax,
            "other" => $request->other,
         ]);
        return redirect()->route('temple.index')
                                ->with('success','updatedしました');
            }
        public function destroy($id){
            $temple = Temple::where('id', $id)->firstOrfail();
            $temple->delete($id);

            return redirect()->route('temple.index');
                            //->with('success','削除しました');

        }
}