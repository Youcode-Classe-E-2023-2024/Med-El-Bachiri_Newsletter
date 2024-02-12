<?php

namespace App\Http\Controllers;

use App\Events\MemberSubscribed;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
//        public function unsub_view()
//        {
//            return view('member.unsub_form');
//        }
    public function subscribe(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => 'required|unique:members,email|ends_with:gmail.com|email'
        ]);

        event(new MemberSubscribed($request->input('email')));
        return back()->with('success', 'You have been subscribed successfully.');
    }

    public function unsubscribe(Request $request): \Illuminate\Http\RedirectResponse
    {

        $member = Member::where('email', $request->input('email'));

        $member->update([
            'subscribed' => 'no'
        ]);
        return back()->with('success', 'Unsubscribed successfully.');
    }

}
