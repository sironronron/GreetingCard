<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('api');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show list of users
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users() 
    {
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)
            ->get(['id', 'name', 'username', 'email']);

        return response()
            ->json([
                'users' => $users
            ]);
    }
}
