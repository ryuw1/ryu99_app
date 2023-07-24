<?php
namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\CompanyRequest;
//use App\Repositories\Mastas\CompanyRepository;
//use App\Services\Mastas\CompanyService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CompanyController extends Controller
{
    //protected $CompanyService;
    //protected $CompanyRepository;

    public function index()
        {
            $companys = Company::latest()->paginate(10);
            //$Companys = Company::select("*")
            //->orderBy("name_kana")
            //->get();
            return view('mastas.company.index', compact('companys'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

        public function create()
            {
            return view('mastas.company.create');
            }
    
        public function store(CompanyRequest $request)
            {
                Company::create($request->all());
                
                return redirect()->route('company.index')
                ->with('flash_message', '登録が完了しました');
            }
/*
        public function show(Company $Company)
        {
            return view('Company.show', compact('Companys'));
        }
*/                   
        public function edit($id)
        {  // $CompanyId = (int) $request->route('CompanyId');
            $Company = Company::where('id', $id)->firstOrfail();
            return view('mastas.company.edit')->with('company', $Company);
        }
        //フォームリクエストのバリデーションを有効にする為引数(インジェクション)をPlaceRequestにしている
        public function update(CompanyRequest $request, Company $Company)
        {
         $Company = Company::find($request->id);   
         $Company->update([
            "name" => $request->name,
            "postal_code" => $request->postal_code,
            "adress1" => $request->adress1,
            "tel" => $request->tel,
            "fax" => $request->fax,
            "bank_name" => $request->bank_name,
            "bank_account" => $request->bank_account,
         ]);
        return redirect()->route('company.index')
                    ->with('flash_message', '変更しました');
            }
        public function destroy($id){
            $Company = Company::where('id', $id)->firstOrfail();
            $Company->delete($id);

            return redirect()->route('company.index')
                    ->with('flash_message', '削除しました');

        }
}