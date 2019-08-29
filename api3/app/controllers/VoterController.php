<?php

use Illuminate\Support\Facades\Input;

class VoterController extends BaseController {

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //echo "nithin";
        $data = Input::all();


        $rules = array
        (


            'name' => ['required'],
            'gender' => ['required'],
            'email' => ['required'],
            'contactno' => ['required'],

        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails())
        {
            $message="Some thing went wrong..";
            $validation_errors=$validator->messages()->toArray();
            return Response::json(array('error' => true,'message' => $message,'validationerror' => $validation_errors),200);
        }
        else
        {
           $flag=0;
            $file_name ="";

              $voter_obj = new Voter();
              $voter_obj->name = $data['name'];
              $voter_obj->gender = $data['gender'];
              $voter_obj->email = $data['email'];
              $voter_obj->contactno = $data['contactno'];
              $voter_obj->otp = mt_rand(100000,999999);
              $voter_obj->status = 0;
       

           if($voter_obj->save())
           {
           
                   $message = " Sucessfully added..";
           
           
               return Response::json(array('error' => false, 'message' => $message), 200);
           }
else
    {
        $message="Some thing went wrong..";

        return Response::json(array('error' => true,'message' => $message),200);
    }
        }
    }






}
