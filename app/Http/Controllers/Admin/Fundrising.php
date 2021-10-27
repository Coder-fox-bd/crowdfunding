<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fundrising as Fund;

class Fundrising extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fundrising.index', [
            'fundrisings' => Fund::pluck('title', 'id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fundrising.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fundrising = Fund::findOrFail($id);
        return view('admin.fundrising.edit',[
            'fundrising' => $fundrising,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fundrising = Fund::findOrFail($id);

        $fundrising->update($request->all());

        if ($request->hasFile('photo')) {
            $fundrising->clearMediaCollection('images');
            $fundrising->addMediaFromRequest('photo')->toMediaCollection('images');
        }

        return redirect()->route('admin.fundrising.index')->with('success', 'Settings updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fundrising = Fund::findOrFail($id);
        $fundrising->delete();
        return back();
    }
}
