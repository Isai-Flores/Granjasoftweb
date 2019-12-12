<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Nafe;
use Illuminate\Http\Request;

class NavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $naves = Nafe::where('granja_id', 'LIKE', "%$keyword%")
                ->orWhere('secciones', 'LIKE', "%$keyword%")
                ->orWhere('tipo_de_nave', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $naves = Nafe::latest()->paginate($perPage);
        }

        return view('naves.index', compact('naves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('naves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'secciones' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        Nafe::create($requestData);

        return redirect('naves')->with('flash_message', 'Nafe added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $nafe = Nafe::findOrFail($id);

        return view('naves.show', compact('nafe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $nafe = Nafe::findOrFail($id);

        return view('naves.edit', compact('nafe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'secciones' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        $nafe = Nafe::findOrFail($id);
        $nafe->update($requestData);

        return redirect('naves')->with('flash_message', 'Nafe updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Nafe::destroy($id);

        return redirect('naves')->with('flash_message', 'Nafe deleted!');
    }
}
