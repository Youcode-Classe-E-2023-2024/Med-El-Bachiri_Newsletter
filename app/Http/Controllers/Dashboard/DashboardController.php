<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Database\Eloquent\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DashboardController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // get members aka subscribers
        $members = Member::all();

        // user media
        $user_media = Upload::where('created_by', Auth::user()->id)->get();
        $user_media_array = [];

        foreach ($user_media as $item) {
            $user_media_array[] = [
                'id' => $item->id,
                'url' => $item->getMedia('images')->first()->getUrl(),
                'name' => $item->name,
                'created_by' => $item->created_by
            ];
        };

        return view('dashboard.index', ['members' => $members, 'user_media' => $user_media_array]);
    }
}
