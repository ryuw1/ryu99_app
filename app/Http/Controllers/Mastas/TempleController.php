<?php

namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\TempleModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\TempleRequest;
//use App\Http\Requests\Mastas\UpdateTempleRequest;
use App\Repositories\Mastas\TempleRepository;
//use App\Services\Mastas\TempleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TempleController extends Controller
{
    protected $templeService;
    protected $templeRepository;

    public function index(TempleRepository $templeRepository)
        {
            /*
            $temples = $templeRepository->getAll();
        return view('mastas/temple', compact('temples'));
    */
    return view('components/base');    
    }
        //create=登録画面を呼び出し、storeメソッドを呼ぶ->登録と一覧画面同居なので不要?
    public function create(TempleRequest $request)
        {
        return view('');
        }

    public function store(TempleRequest $request)
        {
        temple::create($request->all());
        return redirect()->route('temple.index')
                        ->with('success','temple created successfully.');
        }

    
    public function show(TempleService $templeService)
    {
        $temples = $templeService;

        return view('temple', compact('temples'));
    }
    public function edit(TempleService $templeModel)
    {
        //
    }

    public function update(UpdateTempleModelRequest $request, TempleService $templeModel)
    {
            $request->validate([
                'name' => 'required',
                'name_kana' => 'required',
            ]);
        
            $templeModel->update($request->all());
        
            return redirect()->route('temple.index')
                            ->with('success','temple updated successfully');
        }

    public function destroy(TempleService $templeModel)
    {
        //
    }
}