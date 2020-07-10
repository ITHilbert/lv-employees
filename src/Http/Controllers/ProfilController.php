<?php

namespace ITHilbert\Employees\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use ITHilbert\Employees\Entities\Employee;
use ITHilbert\LaravelKit\Helpers\MyDateTime;

class ProfilController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth()->user();
        $employee = Employee::where('user_id', $user->id)->first();

        return view('employees::profil.show',compact('employee'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth()->user();
        $employee = Employee::where('user_id', $user->id)->first();
        return view('employees::profil.edit',compact('employee'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        $user = Auth()->user();
        $employee = Employee::where('user_id', $user->id)->first();

        $employee->update($request->all());
        $datum = new MyDateTime($request->birthday);
        $employee->birthday = $datum->getDateISO();
        $employee->edit_user_id = $user->id;
        $employee->update();

        return redirect()->route('profil.show')
                        ->with('success','Profil erfolgreich angepasst');
    }



}
