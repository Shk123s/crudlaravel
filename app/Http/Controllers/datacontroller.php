<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\dataemp;

class datacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = dataemp::all();
        return view('view',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function fetch()
    // {
    //     $user = dataemp::all();
    //     return response()->json([
    //         'fname'=> $user,
    //     ]);
    // }

    public function create(Request $request)
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        info("store");       
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
        $user =  dataemp::insert([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'country'=>$request->country,
            'salary'=>$request->salary,
        ]);
        return redirect()->route('home.index')->with('sucess',"data sucessfully injected") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {    $user = dataemp::find($id);
        return  view('edit',compact('user'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $user =  dataemp::find($id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->country= $request->input('country');
        $user->salary = $request->input('salary');

        $user->update();

        

        return redirect()->route('home.index')->with('sucess',"data sucessfully upadare") ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    info($id);
         $user = dataemp::find($id)->delete();
           
         return redirect()->route('home.index');
    }
}