<?php

namespace App\Http\Controllers\User;


use App\Models\User\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    // edit details of company table using id
    // public function edit($id){
    //     $company = Company::find($id);
    //     return view('user.editcompany', compact('company'));
    // }

    public function edit_company(Request $request, $id){
        
        $company = Company::find($id);
            
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phonenumber' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dark_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'light_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $company->name = $validatedData['name'];
        $company->email = $validatedData['email'];
        $company->phonenumber = $validatedData['phonenumber'];
        $company->address = $validatedData['address'];
    
        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete($company->logo);
            $logo = $request->file('logo');
            $company->logo = $logo->store('clients/logo', 'public');           
        }
    
        if ($request->hasFile('dark_logo')) {
            Storage::disk('public')->delete($company->dark_logo);
            $dark_logo = $request->file('dark_logo');
            $company->dark_logo = $dark_logo->store('clients/logo', 'public');            
        }
    
        if ($request->hasFile('light_logo')) {
            Storage::disk('public')->delete($company->light_logo);
            $light_logo = $request->file('light_logo');
            $company->light_logo = $light_logo->store('clients/logo', 'public');          
        }
    
        $company->save();
            
        return redirect()->route('company.list')->with('success', 'Company updated successfully');
    }
    

    // public function edit_company(Request $request, $id){
        
    //     $company = Company::find($id);
        
    //     if($request->name){
    //         $company->name = $request->name;
    //     }
    //     if($request->email){
    //         $company->email = $request->email;
    //     }
    //     if($request->phonenumber){
    //         $company->phonenumber = $request->phonenumber;
    //     }
    //     if($request->address){
    //         $company->address = $request->address;
    //     }              
    //     if ($request->hasFile('logo')) {
    //         Storage::disk('public')->delete($company->logo);
    //         $logo = $request->file('logo');
    //         $company->logo = $logo->store('clients/logo', 'public');           
    //     }
    //     if ($request->hasFile('dark_logo')) {
    //         Storage::disk('public')->delete($company->dark_logo);
    //         $dark_logo = $request->file('dark_logo');
    //         $company->dark_logo = $dark_logo->store('clients/logo', 'public');            
    //     }
    //     if ($request->hasFile('light_logo')) {
    //         Storage::disk('public')->delete($company->light_logo);
    //         $light_logo = $request->file('light_logo');
    //         $company->light_logo = $light_logo->store('clients/logo', 'public');          
    //     }        
    //     $company->save();        
    //     return redirect()->route('company.list')->with('success', 'Company updated successfully');
    // }
    
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
