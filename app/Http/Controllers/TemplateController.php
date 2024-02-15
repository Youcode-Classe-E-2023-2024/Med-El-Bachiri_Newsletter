<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Template;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // templates
        $tms = Template::all();

        // media
        $all_media = Upload::all();
        $all_media_array = [];
        foreach ($all_media as $item) {
            $all_media_array[] = [
                'id' => $item->id,
                'name' => $item->name,
                'url' => $item->getMedia('images')->first()->getUrl()
            ];
        }
        return view('dashboard.send_template', ['all_media' => $all_media_array, 'templates' => $tms]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        dd($request->input('content'));
        $request->validate([
            'title' => 'required|max:150',
            'content' => 'required'
        ]);

        Template::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'creator_name' => Auth::user()->name,
        ]);

        return back()->with('success', 'Template stored successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function show_all()
    {
        Template::all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
