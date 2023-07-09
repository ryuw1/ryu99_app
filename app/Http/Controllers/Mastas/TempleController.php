<?php

namespace App\Http\Controllers\Mastas;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTempleModelRequest;
use App\Http\Requests\UpdateTempleModelRequest;
use App\Services\Mastas\TempleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Pagenation\Paginator;

class TempleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $templeService;
    public function index(TempleService $templeService)
    {
        
        $temples = $templeService->getAll();
        return view('temple', compact('temples'));
        /*
        $temples = $temple::latest()->paginate(5);
        
        return view('temple.index',compact('temples'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }

    public function create()
    {
        //
    }

    public function store(StoreTempleModelRequest $request)
    {
        temple::create($request->all());
        return redirect()->route('temple.index')
                        ->with('success','temple created successfully.');
    }
*/
    }
    public function show(TempleService $templeModel)
    {
        $templeService = TempleService::paginate(10);
        return view('temple', compact('templeService'));
    }
/*
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
*/
}
//}