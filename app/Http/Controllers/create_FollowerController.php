<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follower;

class FollowerController extends Controller
{
    public function follow(User $user)
    {
        auth()->user()->following()->attach($user->id);
        return redirect()->back();
    }

    public function unfollow(User $user)
    {
        auth()->user()->following()->detach($user->id);
        return redirect()->back();
    }

    public function followersList(User $user)
    {
        $followers = $user->followers;
        return view('followers.list', compact('followers'));
    }

    public function followingList(User $user)
    {
        $following = $user->following;
        return view('following.list', compact('following'));
    }
}
