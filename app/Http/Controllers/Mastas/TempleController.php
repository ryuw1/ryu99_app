<?php

namespace App\Http\Controllers\Mastas;

use App\Models\Mastas\TempleModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mastas\StoreTempleRequest;
use App\Http\Requests\Mastas\UpdateTempleRequest;
use App\Repositories\Mastas\TempleRepository;
//use App\Services\Mastas\TempleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TempleController extends Controller
{
    protected $templeService;

    public function index(TempleRepository $templeRepository)
        {
            $temples = $templeRepository->getAll();
        return view('mastas/temple', compact('temples'));
        }
        //create=登録画面を呼び出し、storeメソッドを呼ぶ
    public function create(StoreTempleRequest $request)
        {
        //create(array $data)
        }

    public function store(StoreTempleModelRequest $request)
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