<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception\InvalidOrderException;
use \Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', [
            'users' =>  $users
        ]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns'
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('index');
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns'

        ]);
        User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        

        return redirect()->route('index');
    }
    public function updatePage($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('update_page', [
            'user' => $user
        ]);
    }
    public function delete($id,Request $request)
    {
        User::find($id)->delete();
        return redirect()->route('index');
    }
    public function createPage()
    {
        return view('create');
    }
   
}