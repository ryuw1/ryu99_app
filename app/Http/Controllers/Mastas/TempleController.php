<?php

namespace App\Http\Controllers\Mastas;
use App\Models\Mastas\TempleModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTempleModelRequest;
use App\Http\Requests\UpdateTempleModelRequest;
use App\Repositories\Mastas\TempleRepository;
//use App\Services\Mastas\TempleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TempleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $templeService;

    public function index(TempleRepository $templeRepository)
    {
        
        $temples = $templeRepository->getAll();
        return view('temple', compact('temples'));
    }
        /*以下の文はTempleRepositoryに書いた
        $temples = $temple::latest()->paginate(5);
        
        return view('temple.index',compact('temples'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }

    public function create(TempleRepository $templeRepository))
    {
        create(array $data)
    }
*/
    public function store(StoreTempleModelRequest $request)
    {
        temple::create($request->all());
        return redirect()->route('temple.index')
                        ->with('success','temple created successfully.');
    }

    }
    public function show(TempleModel $templeModel)
    {
        $temples = $templeModel;

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
*/
}