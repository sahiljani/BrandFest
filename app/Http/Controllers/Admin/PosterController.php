<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Poster;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PosterController extends Controller
{
    public function add(Request $request){        
        return view('admin.addposter');
    }

    public function store(Request $request){
     
        $poster = new Poster();
        $poster->name = $request->name;
        $poster->date = $request->date;
        $poster->description = $request->description;
        $poster->logo_type = $request->logo_type;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $stored = $image->store('StockPoster', 'public');  
            $poster->image = $stored;                 
        }       
        $poster->phone_details = serialize([$request->phone_x_pos, $request->phone_y_pos, $request->phone_font_size, $request->phone_font_color,$request->phone_font_family]);

        $poster->email_details = serialize([$request->email_x_pos, $request->email_y_pos, $request->email_font_size, $request->email_font_color,$request->email_font_family]);

        $poster->address_details = serialize([$request->address_x_pos, $request->address_y_pos, $request->address_font_size, $request->address_font_color, $request->address_font_family]);

        $poster->company_details = serialize([$request->name_x_pos, $request->name_y_pos, $request->name_font_size, $request->name_font_color,$request->name_font_family]);

        $poster->logo_details = serialize([$request->logo_x_pos, $request->logo_y_pos,$request->logo_width]);

        $poster->save();       
      
        return redirect()->route('poster.add')->with('success', 'Poster added successfully.');

    }

    public function list(Request $request){
        $posters = Poster::all();
        return view('admin.posterlist', compact('posters'));
    }


    public function edit(Request $request, $id){        
        $poster = Poster::find($id)->first();          
        return view('admin.posteredit', compact('poster'));
    }

  
    public function update(Request $request, $id){       
        $poster = Poster::find($id);
        // dd($poster);
        $poster->name = $request->name;
        $poster->date = $request->date;
        $poster->description = $request->description;
        $poster->logo_type = $request->logo_type;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $stored = $image->store('StockPoster', 'public');  
            $poster->image = $stored;                 
        }       
        $poster->phone_details = serialize([$request->phone_x_pos, $request->phone_y_pos, $request->phone_font_size, $request->phone_font_color,$request->phone_font_family]);

        $poster->email_details = serialize([$request->email_x_pos, $request->email_y_pos, $request->email_font_size, $request->email_font_color,$request->email_font_family]);

        $poster->address_details = serialize([$request->address_x_pos, $request->address_y_pos, $request->address_font_size, $request->address_font_color, $request->address_font_family]);

        $poster->company_details = serialize([$request->name_x_pos, $request->name_y_pos, $request->name_font_size, $request->name_font_color,$request->name_font_family]);

        $poster->logo_details = serialize([$request->logo_x_pos, $request->logo_y_pos,$request->logo_width]);

        $poster->save();       
      
        return redirect()->route('poster.list')->with('success', 'Poster updated successfully.');

    }

    
    
    

    function delete($id){
        $poster = Poster::find($id);
        $poster->delete();
        return redirect()->route('poster.list')->with('success', 'Poster deleted successfully');
    }
}
