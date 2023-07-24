<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Relationship;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\RelationshipsRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\RelationshipsRepository;
//use App\Services\Mastas\RelationshipsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class RelationshipController extends Controller
{
    //protected $RelationshipsService;
    //protected $RelationshipsRepository;

    public function index()
        {
            $relationships = Relationship::latest()->paginate(10);
            //$Relationshipss = Relationships::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.relationship.index', compact('relationships'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.relationship.create');
            }
    //RelationshipRequest不調の為validate一時回避
        public function store(Request $request)
            {
                Relationship::create($request->all());
                
                return redirect()->route('relationship.index')
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
            $Relationships = Relationship::where('id', $id)->firstOrfail();
            return view('mastas.relationships.edit')->with('relationships', $Relationships);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(RelationshipRequest $request, Relationship $Relationship)
        {
         $Relationship = Relationships::find($request->id);   
         $Relationship->update([
            "display_order" => $request->display_order,
            "name" => $request->name,
         ]);
        return redirect()->route('relationship.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Relationship = Relationship::where('id', $id)->firstOrfail();
            $Relationship->delete($id);

            return redirect()->route('relationship.index')
                    ->with('flash_message', '削除しました');

        }
}