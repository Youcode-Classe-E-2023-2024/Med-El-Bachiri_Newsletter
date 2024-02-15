<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;

class UploadController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'file' => 'required'
        ]);
        $upload = Upload::create([
            'name' => $request->input('name'),
            'created_by' => auth()->user()->id,
        ]);
        $upload->addMedia($request->file('file'))->toMediaCollection('images');

        return back()->with('success', 'Media uploaded successfully');

    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        Media::where('model_id', $id)->delete();
        Upload::find($id)->delete();
        return back()->with('success', 'Media deleted successfully');
    }
}
