<?php

namespace App\Http\Controllers;

use App\Model\Classement;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginpage() {
        $jouers = User::where([
            ['deleted_at', null],
            ['confirm_competit', true],
            ['user_social_auth', true]
        ])->get();
        $jouersptou = Classement::where([
            ['ptour', true],
        ])->get();
        $jouersqfinal = Classement::where([
            ['qfinal', true],
        ])->get();
        $jouersdfinal = Classement::where([
            ['qfinal', true],
        ])->get();
        $jouersfinal = Classement::where([
            ['final', true],
        ])->get();
        return view('auth.loginevent', compact('jouersfinal','jouersdfinal','jouers', 'jouersptou', 'jouersqfinal'));
    }
}
