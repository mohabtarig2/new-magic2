<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\mailNotify;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function sendEmailToUser(Request $request) {

   
        
          $ruels = $this->getRules( $request);
          $messages = $this->getMessage($request);

          $details = [
            'name' => $request->name,
            'phone' =>  $request->phone,
            'services' =>  $request->services,
            'email' =>  $request->email,
            'message' =>  $request->message,
        ];
       


          $valditor = Validator::make( $request->all(),$ruels,$messages);
          if($valditor->fails()){
              $errors =  response()->json(['errors' => $valditor->errors()],422);
              return $errors;
          }else{
            Mail::to('mohab.tarig91@gmail.com')->send(new mailNotify($details));
    

            return response()->json(['success'=>'Your E-mail has been sent successfully.']);
        }


        
    
        // $to_email = "umesh.rana0269@gmail.com";



     


    }

    protected function getRules(){
        return $ruels = [
            // 'message' => 'required',\
            'name' => 'required',
            'services' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
           
            ];
    }

    protected function getMessage(){

        return  $messages =[
            // 'message.required'=> __('message.message_required'),
            'name.required'=> __('message.name_required'),
            'services.required'=> __('message.services_required'),
            'phone.required'=> __('message.required_required'),
            'email.required'=> __('message.email_required'),
            'email.email'=> __('message.email_required'),
            
           


        ];


}
}
