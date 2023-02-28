<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Poster;
use App\Models\User\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Generatedposter;

class PosterGeneraterController extends Controller{
   
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
        
        
        $path = $this->poster_generate($poster_image, $poster_phone_details, $poster_logo_details, $poster_email_details, $poster_company_details, $poster_address_details, $company_name, $company_phone, $company_email, $company_address, $company_logo);
  
        return $path;
        
    }

    public function poster_generate($poster_image, $poster_phone_details, $poster_logo_details, $poster_email_details, $poster_company_details, $poster_address_details, $company_name, $company_phone, $company_email, $company_address, $company_logo){
       
        $poster_phone_details = unserialize($poster_phone_details);
        $poster_email_details = unserialize($poster_email_details);
        $poster_company_details = unserialize($poster_company_details);
        $poster_address_details = unserialize($poster_address_details);
        $poster_logo_details = unserialize($poster_logo_details);
        
        
       
        $phone_number = $company_phone;
        $email = $company_email;
        $company_name = $company_name;
        $company_address = $company_address;
        $company_logo = $company_logo;
        

        $name_x_pos = $poster_company_details[0];
        $name_y_pos = $poster_company_details[1];
        $name_font_size = $poster_company_details[2];
        $name_font_color = $poster_company_details[3];
        $name_font_family = $poster_company_details[4];
        
        $logo_x_pos = $poster_logo_details[0];
        $logo_y_pos = $poster_logo_details[1];
        $logo_width = $poster_logo_details[2];
        
        $phone_x_pos = $poster_phone_details[0];
        $phone_y_pos = $poster_phone_details[1];
        $phone_font_size = $poster_phone_details[2];
        $phone_font_color = $poster_phone_details[3];
        $phone_font_family = $poster_phone_details[4];

        $email_x_pos = $poster_email_details[0];
        $email_y_pos = $poster_email_details[1];
        $email_font_size = $poster_email_details[2];
        $email_font_color = $poster_email_details[3];
        $email_font_family = $poster_email_details[4];

        $address_x_pos = $poster_address_details[0];
        $address_y_pos = $poster_address_details[1];
        $address_font_size = $poster_address_details[2];
        $address_font_color = $poster_address_details[3];
        $address_font_family = $poster_address_details[4]; 
        
        $filePath = $poster_image;
     
        $contents = Storage::disk('public')->get($filePath);  
  
       
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $img = imagecreatefromstring(($contents));
            // Set number color and font
            list($r, $g, $b) = sscanf($phone_font_color, "#%02x%02x%02x");
            $textColor = imagecolorallocate($img, $r, $g, $b);
            $font = "./fonts/$phone_font_family";
            
            
            // Calculate number position based on x and y range
            $imgWidth = imagesx($img);
            $imgHeight = imagesy($img);
            $textWidth = imagettfbbox($phone_font_size, 0, $font, $phone_number)[2] - imagettfbbox($phone_font_size, 0, $font, $phone_number)[0];
            $textHeight = imagettfbbox($phone_font_size, 0, $font, $phone_number)[1] - imagettfbbox($phone_font_size, 0, $font, $phone_number)[7];
            $xPos = ($imgWidth - $textWidth) * $phone_x_pos / 100;
            $yPos = ($imgHeight - $textHeight) * $phone_y_pos / 100;

            // Overlay number on image
            imagettftext($img, $phone_font_size, 0,  (int)$xPos, (int)$yPos, $textColor, $font, $phone_number);


            // Set email color and font
            list($r, $g, $b) = sscanf($email_font_color, "#%02x%02x%02x");
            $textColor = imagecolorallocate($img, $r, $g, $b);
            $font = "./fonts/$email_font_family";
            
            // Calculate email position based on x and y range

            $textWidth = imagettfbbox($email_font_size, 0, $font, $email)[2] - imagettfbbox($email_font_size, 0, $font, $email)[0];
            $textHeight = imagettfbbox($email_font_size, 0, $font, $email)[1] - imagettfbbox($email_font_size, 0, $font, $email)[7];
            $xPos = ($imgWidth - $textWidth) * $email_x_pos / 100;
            $yPos = ($imgHeight - $textHeight) * $email_y_pos / 100;
            
            // Overlay email on image
            imagettftext($img, $email_font_size, 0,  (int)$xPos, (int)$yPos, $textColor, $font, $email);


            // Set name color and font
            list($r, $g, $b) = sscanf($name_font_color, "#%02x%02x%02x");
            $textColor = imagecolorallocate($img, $r, $g, $b);
            $font = "./fonts/$name_font_family";
           

            // Calculate name position based on x and y range
            $textWidth = imagettfbbox($name_font_size, 0, $font, $company_name)[2] - imagettfbbox($name_font_size, 0, $font, $company_name)[0];
            $textHeight = imagettfbbox($name_font_size, 0, $font, $company_name)[1] - imagettfbbox($name_font_size, 0, $font, $company_name)[7];
            $xPos = ($imgWidth - $textWidth) * $name_x_pos / 100;
            $yPos = ($imgHeight - $textHeight) * $name_y_pos / 100;

            // Overlay name on image
            imagettftext($img, $name_font_size, 0,  (int)$xPos, (int)$yPos, $textColor, $font, $company_name);
        

            // Set address color and font
            list($r, $g, $b) = sscanf($address_font_color, "#%02x%02x%02x");
            $textColor = imagecolorallocate($img, $r, $g, $b);
            $font = "./fonts/$address_font_family";

            // Calculate address position based on x and y range
            $textWidth = imagettfbbox($address_font_size, 0, $font, $company_address)[2] - imagettfbbox($address_font_size, 0, $font, $company_address)[0];
            $textHeight = imagettfbbox($address_font_size, 0, $font, $company_address)[1] - imagettfbbox($address_font_size, 0, $font, $company_address)[7];
            $xPos = ($imgWidth - $textWidth) * $address_x_pos / 100;
            $yPos = ($imgHeight - $textHeight) * $address_y_pos / 100;

            // Overlay address on image
            imagettftext($img, $address_font_size, 0,  (int)$xPos, (int)$yPos, $textColor, $font, $company_address);          

           

            $company_logo = Storage::disk('public')->path($company_logo);

            $logo = imagecreatefrompng($company_logo);

            // Set the percentage by which to resize the logo image
            $percent = (int) $logo_width; // 50% of the original size

            // Get the original dimensions of the logo image
            $width = imagesx($logo);
            $height = imagesy($logo);

            // Calculate the new dimensions of the logo image based on the percentage
            $newWidth = round($width * ($percent / 100));
            $newHeight = round($height * ($percent / 100));

            // Create a new image with the new dimensions
            $logo = imagescale($logo, $newWidth, $newHeight);

            // Set the margins for the logo and get the height/width of the logo image
            $marge_right = 10;
            $marge_bottom = 10;
            $logo_width = imagesx($logo);
            $logo_height = imagesy($logo);

            $img_width = imagesx($img);
            $img_height = imagesy($img);

            // $centerX = round($img_width/2 - $logo_width/2);
            // $centerY = round($img_height/2 - $logo_height/2);

            $xPos = ($imgWidth - $logo_width) * (INT)$logo_x_pos / 100;
            $yPos = ($imgHeight - $logo_height) * (INT)$logo_y_pos / 100;


            // Make the logo background transparent
            $bg = imagecolorallocatealpha($logo, 0, 0, 0, 127);
            imagecolortransparent($logo, $bg);
            imagealphablending($logo, false);
            imagesavealpha($logo, true);

        
            imagecopy($img, $logo, $xPos, $yPos, 0, 0, $logo_width, $logo_height);

                    
                    $filename = uniqid() . '.jpg';
                    imagejpeg($img, $filename);

                    return $filename;
            
    }
        public function generate(){

            // Fetch tomorrow's posters from the database
            $tomorrow = now()->addDay()->toDateString();
            
            $posters = Poster::whereDate('date', $tomorrow)
            ->where('generated4all', false)
            ->get();
            // if poster is not found then dd not found
            if($posters->isEmpty()){
                dd('not found');
            }
        
        foreach ($posters as $poster) {
            $poster->generated4all = true;
        

        
            // get all companies from the database where name is not null
            $companies = Company::whereNotNull($poster->type)->get();

            $image_name = $poster->name;
            foreach($companies as $company){


            // $logo = $company->logo;
            $company_logo = $company->logo;
         
            $imgpath =   $this->poster_generate($poster->image, $poster->phone_details, $poster->logo_details, $poster->email_details, $poster->company_details, $poster->address_details, $company->name, $company->phonenumber, $company->email, $company->address, $company_logo);


            
                // get extension from $imgpath and append to $newpath  
            
            $publicPath = "public/clients/$company->name/" ."$poster->name ___".basename($imgpath);

            $fileContents = file_get_contents($imgpath);
        
            
            $finalpath = Storage::put($publicPath, $fileContents); 
            $file_path = public_path(). '/'.$imgpath;
                if (file_exists($file_path)) {
                    unlink($file_path);
                    // File was successfully deleted               
                }
            //insert finalpath comid & idi. generated_poster table
            $generated_poster = new Generatedposter();
            $generated_poster->poster_path = $publicPath;
            $generated_poster->company_id = $company->id;
            $generated_poster->poster_id = $poster->id;        
            $generated_poster->save();      
            }
            // update generated4all to true for current poster
            $poster->save();
            dd( $poster);
            
            }
            
        //    return view('admin.poster.generate');
    }
}
