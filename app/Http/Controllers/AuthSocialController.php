<?php

namespace App\Http\Controllers;

use App\Model\Club;
use App\Model\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $event = Event::where('user_id', Auth::user()->id)->get();
        $user_info_cmpt = $event->last();
        $coumpt = $event->count();
        $clubs = Club::orderBy('club', 'asc')->get();
        return view('user.index', compact('user_info_cmpt', 'coumpt', 'clubs'));
    }
    public function newMemberFifa(Request $request)
    {
//        $this->validate($request, [
//            'profession' => 'required|min:2',
//            'numero' => 'required|min:9|max:20',
//            'quartier' => 'required|min:2',
//            'equipe' => 'required|integer|min:1|max:48'
//        ], [
//            'required' => 'Le champ :attribute est obligatoire.'
//        ]);
        $club = Club::where('id',$request['equipe'])->get()->first();
        Event::updateOrCreate([
            'user_id' => Auth::user()->id,
            'profession' => $request['profession'],
            'numero' => $request['numero'],
            'age' => $request['age'],
            'quartier' => $request['quartier'],
            'equipe' => $club ? $club->club : 'pas de club'
        ]);

        return redirect('/home/event/member/fifa19#competition')->with('success', 'Informations modifié');

    }
}
