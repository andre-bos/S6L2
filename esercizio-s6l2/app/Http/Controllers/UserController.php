<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $users = [
        ['id' => 1, 'nome' => 'Andrea', 'cognome' => 'Boschetto', 'username' => 'andre95', 'email' => 'ex@ex.com', 'password' => 'misPass9500'],
        ['id' => 2, 'nome' => 'Giuseppe', 'cognome' => 'Verdi', 'username' => 'verdi900', 'email' => 'verdi@verdi.com', 'password' => 'parolonaVerdi']
    ];

    public $msg = 'Questo è un messaggio passato dal controller';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // return view('users', ['users' => $this->users]); OPPURE
        // return view('users')->withTitle('User List')->withUsers($this->users);

        // Vista con l'uso del template blade

        return view('users2', ['title' => 'User List', 'users' => $this->users, 'msg' => $this->msg]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //

        return '<h1>Show</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
