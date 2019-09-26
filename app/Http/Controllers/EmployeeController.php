<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $data=Employee::join('companies','employees.company_id','=','companies.id')->paginate(5);

        return view('pages.employee.index',compact('data'));
    }
    public function employe_form()
    {
       
       return view('employe_details_save',compact('company')); 
    }
    public function create()
    {
         $company=company::all();
        return view('pages.employee.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $data = $request->validate([
                 'company_id'=>'required',
                 'first_Name'=>'required',
                 'last_name'=>'required',
                 'email'=>'required',
                 'phone'=>'required|max:10|min:10'
                   ]);
 
        Employee::create($data);
        return redirect('employee');

    }

    public function show($id)
    {
     $data=Employee::join('companies','employees.company_id','=','companies.id')
       ->where('e_id',$id)->first();

      return view('pages.employee.show',compact('data'));
    }

    public function edit($id)
    {
        $company=Company::all();
       $data=Employee::join('companies','employees.company_id','=','companies.id')
       ->where('e_id',$id)->first();

       return view('pages.employee.edit',compact('data','company'));
    }

    public function update(Request $request, $id)
    {

       $data = $request->validate(['company_id'=>'required',
                 'first_Name'=>'required',
                 'last_name'=>'required',
                 'email'=>'required',
                 'phone'=>'required|min:10|max:10'

            ]);
 
        Employee::where('e_id',$id)->update($data);

        return redirect('employee');
    }

    public function destroy($id)
    {
        $user = Employee::where('e_id',$id);
        $user->delete();
        return redirect()->back()->with('success','Data deleted successfully');
    }
}
