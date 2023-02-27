<?php

namespace App\Http\Controllers\User;

use App\Models\User\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    
    public function add(Request $request){   
        return view('user.addcompany');
    }

    public function store(Request $request){
        
        $company = new Company;
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->phonenumber = $request->input('phonenumber');
        $company->address = $request->input('address'); 
        if ($request->hasFile('logo')) {
            $company->logo = $request->file('logo')->store('clients/logo', 'public');
        }
        if ($request->hasFile('dark_logo')) {
            $company->dark_logo = $request->file('dark_logo')->store('clients/logo', 'public');
        }
        if ($request->hasFile('light_logo')) {
            $company->light_logo = $request->file('light_logo')->store('clients/logo', 'public');  
        } 
        $company->user_id = Auth::user()->id;        
        $company->save();       
        return redirect()->route('company.add')->with('success', 'Company added successfully');
    }
    
    
    
    public function list(Request $request){ 
        $companies = Company::where('user_id', Auth::user()->id)->get(); 
        return view('user.listcompany', compact('companies'));
    }
    
    function delete($id){
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('company.list')->with('success', 'Company deleted successfully');
    }    
    
    public function list_usercompany(Request $request, $id){ 
        $companies = Company::where('user_id', $id)->get();
        return view('user.listcompany', compact('companies'));         
     }


}
