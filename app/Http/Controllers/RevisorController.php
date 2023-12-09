<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $announcement_to_check = Announce::where('is_accepted', null)->first();
        $announces = Announce::all();
        return view('revisor.index', compact('announcement_to_check','announces'));
    }

    public function acceptAnnouncement(Announce $announce){

        $announce->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato');

    }

    public function rejectAnnouncement(Announce $announce){

        $announce->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti! Richiesta inoltrata con successo!');
    }

    public function makeRevisor (User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message','Utente registrato come revisore');
    }
}
