<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request;
        
        if(request('picture')){
        // $pic = $request->file('picture')->getClientOriginalExtension();
        // dd( $pic);

        $pic = $request->file('picture');
        $picname= $request->file('picture')->getClientOriginalName();
        

       //$date=timestamps();

        
        $time=date("Y_m_d_").time();
        settype($time, "string");
        $updatedPic= $time.$picname;

        settype($updatedPic, "string");
        $file = $request->file('picture');

        
            // $img = $request->post_image;
            //dd(request('picture'));
        $path = $pic->storeAs('public/images/', $updatedPic);
        
        //dd($updatedPic);

        //$request->move()->file('public/images',$updatedPic);

        User::create(['name'=>$request->name, 'picture'=>$updatedPic, 'salary'=>$request->salary,'email'=>$request->email, 'role'=>$request->role, 'password'=>$request->password]);
        //$user->User::update(['picture'=>$updatedPic]);
        dd($updatedPic);


        return redirect('/home');
        }
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
    {
        //
        $user= User::findOrFail($id);
        return view('admin.edit', compact('user'));
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
        //
        // $this->validate($request->picture, [
        //     'picture'=>['required', 'max:100', 'regex:/(\d)+.(?:jpe?g|png|gif)/'],
            
        // ]);

      


        $user = User::findOrFail($id);
        $pic = $request->picture;

       // $date=timestamps();
        
        $time=date("Y_m_d_").time();
        settype($time, "string");
        $updatedPic= $time.$pic;

        settype($updatedPic, "string");
        
        
        


        $user->update(['name'=>$request->name, 'picture'=>$updatedPic, 'salary'=>$request->salary,'email'=>$request->email, 'role'=>$request->role]);
        //$user->update(['picture'=>$updatedPic]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::whereId($id)->delete();
        return redirect('/home');
    }
}
