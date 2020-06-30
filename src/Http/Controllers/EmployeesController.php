<?php

namespace ITHilbert\Employees\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Yajra\DataTables\Facades\DataTables;
use App\User;
use ITHilbert\Employees\Entities\Employee;
use ITHilbert\LaravelKit\Helpers\HButton;
use ITHilbert\LaravelKit\Helpers\MyDateTime;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Employee::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function($row){
                            return $row->getName();
                    })
                    ->addColumn('mailto', function($row){
                        return $row->getMailto();
                    })
                    ->addColumn('action', function($row){
                        $ausgabe = '<div style="white-space: nowrap;">';
                        $ausgabe .= HButton::show(route('employees.show', $row->id), '');
                        $ausgabe .= HButton::edit(route('employees.edit',$row->id), '');
                        $ausgabe .= HButton::delete($row->id, '');
                        $ausgabe .= '</div>';

                        return $ausgabe;
                    })
                    ->rawColumns(['action', 'mailto'])
                    ->make(true);
        }

        return view('employees::employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees::employees.show',compact('employee'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees::employees.edit',compact('employee'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        $user = Auth()->user();
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        $datum = new MyDateTime($request->birthday);
        $employee->birthday = $datum->getDateISO();
        $employee->edit_user_id = $user->id;
        $employee->update();

        return redirect()->route('employees.index')
                        ->with('success','Mitarbeiter erfolgreich angepasst');
    }

}
