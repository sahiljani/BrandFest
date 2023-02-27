<?php

namespace App\Http\Controllers\Admin;

use App\Models\User\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PosterGeneraterController extends Controller
{
    function store_ajax(Request $request){

        // Fetch Random Company details
        $company = Company::inRandomOrder()->first();

     
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $poster_image = $image->store('StockPoster', 'public');        
        }       

        $company_name = $company->name;
        $company_phone = $company->phonenumber;
        $company_email = $company->email;
        $company_address = $company->address;
        $company_logo =    $company->logo;
 
        $name_x_pos = $request->name_x_pos;
        $name_y_pos = $request->name_y_pos;
        $name_font_size = $request->name_font_size;
        $name_font_color = $request->name_font_color;
        $name_font_family = $request->name_font_family;

        $poster_company_details = serialize([$name_x_pos, $name_y_pos, $name_font_size, $name_font_color, $name_font_family]);


        $phone_x_pos = $request->phone_x_pos;
        $phone_y_pos = $request->phone_y_pos;
        $phone_font_size = $request->phone_font_size;
        $phone_font_color = $request->phone_font_color;
        $phone_font_family = $request->phone_font_family;

        $poster_phone_details = serialize([$phone_x_pos, $phone_y_pos, $phone_font_size, $phone_font_color, $phone_font_family]);

        $logo_x_pos = $request->logo_x_pos;
        $logo_y_pos = $request->logo_y_pos;
        $logo_width = $request->logo_width;        
        $poster_logo_details = serialize([$logo_x_pos, $logo_y_pos, $logo_width]);

        $email_x_pos = $request->email_x_pos;
        $email_y_pos = $request->email_y_pos;
        $email_font_size = $request->email_font_size;
        $email_font_color = $request->email_font_color;
        $email_font_family  = $request->email_font_family;

        $poster_email_details = serialize([$email_x_pos, $email_y_pos, $email_font_size, $email_font_color, $email_font_family]);
        
        
        $address_x_pos = $request->address_x_pos;
        $address_y_pos = $request->address_y_pos;
        $address_font_size = $request->address_font_size;
        $address_font_color = $request->address_font_color;
        $address_font_family = $request->address_font_family;

        $poster_address_details = serialize([$address_x_pos, $address_y_pos, $address_font_size, $address_font_color, $address_font_family]);



        $previous_image = $request->previous_image;
        if($previous_image != null){
            $file_path = public_path(). '/'.$previous_image;
            if (file_exists($file_path)) {
                unlink($file_path);
                // File was successfully deleted
               
            } else {
               
            }
        }
        
        
        $path = $this->GenerateImage($poster_image, $poster_phone_details, $poster_logo_details, $poster_email_details, $poster_company_details, $poster_address_details, $company_name, $company_phone, $company_email, $company_address, $company_logo);
  
        return $path;
        
    }
}
