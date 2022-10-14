<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datacontroller2 extends Controller
{
    public function insert(){
        $this->validate($request,
        [
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'country'=>'required',
            'salary'=>'required'
           



        ]
        );
      $user =  dataemp :: table('emptable')->insert([
            
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'country'=>$request->country,
            'salary'=>$request->salary,
        ]);
    $user->save();
    return redirect('')->route('/view')->with('sucess',"data sucessfully injected") ;
    }
}
