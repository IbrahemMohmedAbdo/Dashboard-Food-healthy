<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use Illuminate\Http\Request;
use app\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users=User::all();

        $users = User::paginate(2);
        return view('dashboard.user.dashboard',compact('users'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.user.Create');
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
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;


        User::create($requestData);
        return redirect()->route('users.index')->with('msg','Your data saved ');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //


        return view('dashboard.user.profile',compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(User $user)
    {
        //


        return view('dashboard.user.edit',compact('user'));
    }
/*
    public function edit($id)
    {
        //

    $user=User::find($id);
        return view('dashboard.edit',compact('user'));
    }
    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        //

        $requestData = $request->all();

        $fileName = time().$request->file('image')->getClientOriginalName();

        $path = $request->file('image')->storeAs('images', $fileName, 'public');

      $requestData["image"] = '/storage/'.$path;

       $user->update($requestData);
       return redirect()->route('users.index')->with('msg','Your data Updated Successfully ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //

       $user->delete();

        return redirect()->route('users.index')->with('msg','Your data deleted Successfully ');
    }
}
