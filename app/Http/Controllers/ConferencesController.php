<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\conferences;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ConferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $conference = conferences::all();
        return view('conferences.show', ['conferences'=>$conference]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConferenceRequest $request)
    {
        conferences::create($request->validated());
        return back()->with('success','Conference Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $conference = conferences::all();
        return view('conferences.show', ['conferences'=>$conference]);
        //return view('conferences.show')->with('conference',$conference);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(conferences $conference)
    {
        return view('conferences.edit')->with('conference',$conference);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConferenceRequest $request, conferences $conference)
    {
        $conference->update($request->validated());
        return back()->with('success','Conference Edited Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(conferences $conference)
    {
        $conference->delete();
        return back()->with('success','Conference Deleted Succesfully');
    }
}
