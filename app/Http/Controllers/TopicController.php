<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.content.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theme = new Topic;
        $theme->theme_id = $request->theme_id;
        $theme->type_course = $request->type_course;
        $theme->topic = $request->topic;
        $theme->created_at = now();
        $theme->updated_at = now();
        $theme->save();

        // Set session flash untuk create_success
        session()->flash('create_success', 'Data berhasil dibuat.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.content.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.content.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $theme = Topic::find($id);
        $theme->theme_id = $request->theme_id;
        $theme->type_course = $request->type_course;
        $theme->topic = $request->topic;
        $theme->updated_at = now();
        $theme->save();

        // Set session flash untuk edit_success
        session()->flash('edit_success', 'Data berhasil diperbarui.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $theme = Topic::find($id);
        $theme->delete();

        // Set session flash untuk delete_success
        session()->flash('delete_success', 'Data berhasil dihapus.');

        return redirect()->back();
    }
}
