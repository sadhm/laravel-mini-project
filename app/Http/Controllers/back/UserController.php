<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate();
        return  view('back.users.users' , compact('users'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('back.users.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->password){
            $validateData = $request->validate([
                'name'=> 'required',
                'email' =>'required',
                'phone' =>'required',
                'password' =>'min:8',
                'password-confirmation' =>'min:8',
            ]);
            $password = Hash::make($request->password);
            $user->password=  $password;
        }else{
            $validateData = $request->validate([
                'title'=> 'required|unique:categories|max:100',
                'email' =>'required',
                'phone' =>'required',
            ]);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        try{
            $user->save();
            // $user->update($request->all());
        }catch (Exception $exception){
            switch ($exception->getCode()){ }
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg = "ویرایش با موفقیت انجام شد";
        return redirect(route('admin.users'))->with('success',$msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $msg = "حذف با موفقیت انجام شد";
        redirect(route('admin.users'))->with('message', $msg);
    }

    public function updatestatus(User  $user)
    {
        if ($user->status==1){
            $user->status =0;
        }else{
            $user->status=1;
        }
        $user->save();
        $msg = " عملیات با موفقیت انجام شد.";
        return redirect(route('admin.users'))->with('success', $msg);

    }
}
