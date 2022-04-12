<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
   
    public function create(Request $request)
    {
        /*   $request->validate([
            'number' => 'required|size:8'
        ]);*/


        Phone::create([
            'phone' => $request->phone,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('phonePage',$request->user_id);
        }   
    public function createPage($user_id)
        {
            return view('createPhone', [
                'user_id' => $user_id
            ]);
        
        }


    public function phonePage($id)
    {

        $user = User::with('phones')->find($id);

        return view('phone', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns'

        ]);
        Phone::where('id', $request->id)->update([
            'phone' => $request->phone,
            'user_id' => $request->user_id
        ]);
        

        return redirect()->route('index',$request->user_id);
    }
    public function updatePage($phone_id)
    {
        $phone = Phone::findOrFail($phone_id);
        
        return view('update_num', [
            'phone'=> $phone
            
            
        ]);
    }
    public function delete(Request $request)
    {
        $phone = Phone::where('id',$request->id)->delete([
            'phone' => $request->phone,
            'user_id' => $request->user_id
        ]);
        
        return redirect()->route('phonePage',$request->id);
    }   
}
