<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function statusconfirm()
    {
        $jouers = User::where([
            ['deleted_at', null],
//            ['confirm_competit', true],
            ['user_social_auth', true],
            ['id', '>', 8]
        ])->get();
        return view('user.status', compact('jouers'));
    }
}
