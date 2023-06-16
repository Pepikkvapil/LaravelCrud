<?php

namespace App\Http\Controllers;
use App\Models\Obal;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ObalController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
    {
        $this->checkLoggedIn($request);
        $obaly = Obal::all();
        return view('obaly.index')
            ->with('obaly', $obaly)
            ->with('user', $request->user());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): view
    {
        $this->checkLoggedIn($request);
        return view('obaly.create')
            ->with('user', $request->user());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->checkLoggedIn($request);
        $input = $request->all();
        Obal::create($input);
        return redirect('obaly')->with('flash_message', 'Obal přidán!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id): View
    {
        $this->checkLoggedIn($request);
        $obal = Obal::find($id);
        return view('obaly.show')->with('obaly', $obal)
            ->with('user', $request->user());
    }

    public function edit(Request $request, string $id): View
    {
        $this->checkLoggedIn($request);
        $obal = Obal::find($id);
        return view('obaly.edit')->with('obaly', $obal)
            ->with('user', $request->user());
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $this->checkLoggedIn($request);
        $obal = Obal::find($id);
        $input = $request->all();
        $obal->update($input);
        return redirect('obaly')->with('flash_message', 'Obal upraven!');
    }


    public function destroy(Request $request, string $id): RedirectResponse
    {
        $this->checkLoggedIn($request);
        Obal::destroy($id);
        return redirect('obaly')->with('flash_message', 'Obal smazán!');
    }

    private function checkLoggedIn(Request $request): void
    {
        if($request->user() === null){
            // Redirect to login
        }
    }
}
