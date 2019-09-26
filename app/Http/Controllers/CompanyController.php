<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Company::paginate(5);
        return view('pages.company.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 



        $data= $request->validate([
                 'name'=>'required',
                 'logo'=>'required|max:5120',
                 'email' =>'required',
                 'website'=>'required'

        ]);

        $file = $request->file('logo');
       
        $filename =  time().'_'.$file->getClientOriginalName();
      
        $path = $file->storeAs('public/image', $filename);
            $data['logo'] = $filename ;
            Company::create($data);
            return redirect('company');
          
    }

    public function show($data)
    {  
        $data=Company::where('id',$data)->first();
        return view('pages.company.show',compact('data'));
    }

    public function edit($id)
    {
        $company=Company::where('id',$id)->first();
       

       return view('pages.company.edit',compact('company'));
    }

    
    public function update(Request $request, $id)
    {

        if($request)

        $data= $request->validate([
                 'name'=>'required',
                 'logo'=>'required|max:5120',
                 'email' =>'required',
                 'website'=>'required'

        ]);

        $file = $request->file('logo');
       
        $filename =  time().'_'.$file->getClientOriginalName();
      
        $path = $file->storeAs('public/image', $filename);
            $data['logo'] = $filename ;

            Company::where('id',$id)->update($data);
            return redirect('company');
          
    }

    
    public function destroy($id)
    {
      $user = company::where('id',$id);
        $user->delete();
        return redirect()->back()->with('success','Data deleted successfully');
    }
}
