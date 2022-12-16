<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\stok;
use Illuminate\Http\Request;

class stokController extends Controller
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
            $stok = stok::where('id_gudang', 'LIKE', "%$keyword%")
                ->orWhere('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('stok', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $stok = stok::latest()->paginate($perPage);
        }

        return view('admin.stok.index', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.stok.create');
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
        
        $requestData = $request->all();
        
        stok::create($requestData);

        return redirect('admin/stok')->with('flash_message', 'stok added!');
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
        $stok = stok::findOrFail($id);

        return view('admin.stok.show', compact('stok'));
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
        $stok = stok::findOrFail($id);

        return view('admin.stok.edit', compact('stok'));
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
        
        $requestData = $request->all();
        
        $stok = stok::findOrFail($id);
        $stok->update($requestData);

        return redirect('admin/stok')->with('flash_message', 'stok updated!');
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
        stok::destroy($id);

        return redirect('admin/stok')->with('flash_message', 'stok deleted!');
    }
}
