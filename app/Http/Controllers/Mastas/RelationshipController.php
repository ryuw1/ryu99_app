<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Relationships;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\RelationshipsRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\RelationshipsRepository;
//use App\Services\Mastas\RelationshipsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class RelationshipsController extends Controller
{
    //protected $RelationshipsService;
    //protected $RelationshipsRepository;

    public function index()
        {
            $Relationshipss = Relationships::latest()->paginate(10);
            //$Relationshipss = Relationships::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Relationships.index', compact('Relationshipss'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Relationships.create');
            }
    
        public function store(RelationshipsRequest $request)
            {
                Relationships::create($request->all());
                
                return redirect()->route('Relationships.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Relationships $Relationships)
        {
            return view('Relationships.show', compact('Relationshipss'));
        }
*/                   
        public function edit($id)
        {  // $RelationshipsId = (int) $request->route('RelationshipsId');
            $Relationships = Relationships::where('id', $id)->firstOrfail();
            return view('mastas.Relationships.edit')->with('Relationships', $Relationships);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(RelationshipsRequest $request, Relationships $Relationships)
        {
         $Relationships = Relationships::find($request->id);   
         $Relationships->update([
            "display_order" => $request->display_order,
            "name" => $request->name,
         ]);
        return redirect()->route('Relationships.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Relationships = Relationships::where('id', $id)->firstOrfail();
            $Relationships->delete($id);

            return redirect()->route('Relationships.index')
                    ->with('flash_message', '削除しました');

        }
}