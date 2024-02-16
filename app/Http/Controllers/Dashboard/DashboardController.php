<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Template;
use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Database\Eloquent\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // get members aka subscribers
        $members = Member::all();

        // templates
        $tms = Template::all();

        // get all users
        $users = User::all();
//        dd($users[0]->getRoleNames()->first());
        // user media
        $all_media = Upload::all();

        $all_media_array = [];

        foreach ($all_media as $item) {
            $all_media_array[] = [
                'id' => $item->id,
                'url' => $item->getMedia('images')->first()->getUrl(),
                'name' => $item->name,
                'created_by' => $item->created_by
            ];
        };

        // statistics



        return view('dashboard.index', [
            'members' => $members,
            'all_media' => $all_media_array,
            'all_users' => $users,
            'templates' => $tms
        ]);
    }
}
