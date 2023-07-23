<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Staff;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\StaffRequest;
//use App\Http\Requests\Mastas\UpdatePlaceRequest;
//use App\Repositories\Mastas\StaffRepository;
//use App\Services\Mastas\StaffService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class StaffController extends Controller
{
    //protected $StaffService;
    //protected $StaffRepository;

    public function index()
        {
            $Staffs = Staff::latest()->paginate(10);
            //$Staffs = Staff::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.Staff.index', compact('Staffs'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.Staff.create');
            }
    
        public function store(StaffRequest $request)
            {
                Staff::create($request->all());
                
                return redirect()->route('Staff.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Staff $Staff)
        {
            return view('Staff.show', compact('Staffs'));
        }
*/                   
        public function edit($id)
        {  // $StaffId = (int) $request->route('StaffId');
            $Staff = Staff::where('id', $id)->firstOrfail();
            return view('mastas.Staff.edit')->with('Staff', $Staff);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(StaffRequest $request, Staff $Staff)
        {
         $Staff = Staff::find($request->id);   
         $Staff->update([
            "display_order" => $request->display_order,
            "name_kana" => $request->name_kana,
            "name" => $request->name,
            "tel" => $request->tel,
            "mobile_phone" => $request->mobile_phone,
            "imputter" => $request->inputter,
         ]);
        return redirect()->route('Staff.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Staff = Staff::where('id', $id)->firstOrfail();
            $Staff->delete($id);

            return redirect()->route('Staff.index')
                    ->with('flash_message', '削除しました');

        }
}