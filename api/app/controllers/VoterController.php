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

            'event' => ['required'],
            'gender' => ['required'],
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
            $randomno=mt_rand(1000,9999);

              $voter_obj = new Voter();
              if(!$voter_obj->checkVoter($data['contactno'], $data['event']))
              {
              $voter_obj->event = $data['event'];
//              $voter_obj->name = $data['name'];
              $voter_obj->gender = $data['gender'];
//              $voter_obj->email = $data['email'];
              $voter_obj->contactno = $data['contactno'];
              $voter_obj->otp = $randomno;
              $voter_obj->status = 0;
       

           if($voter_obj->save())
           {
           
                   $message = " Sucessfully added..";
           
           
               return Response::json(array('error' => false, 'message' => $message, 'otp' => $randomno,'voterid'=>$voter_obj->id,'votestatus' => 0), 200);
           }
else
    {
        $message="Some thing went wrong..";

        return Response::json(array('error' => true,'message' => $message),200);
    }
              }
              
              else
              {
                 $message="contactno already exist..";
$voter=$voter_obj->getVoter($data['contactno'], $data['event']);
$votes_obj = new Votes();
$votestatus=($votes_obj->checkVote($voter['id'],$voter['event']))? 1 : 0;
        return Response::json(array('error' => true,'message' => $message,'votestatus' => $votestatus),200); 
              }
        }
    }


    public function approve()
    {
        //echo "nithin";
        $data = Input::all();


        $rules = array
        (

            'voterid' => ['required']

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
   $voter_obj = new Voter();
   $voter_obj->approveVoter($data['voterid']);
        $message="Sucessfully Approved..";

        return Response::json(array('error' => false,'message' => $message),200); 
   
        }
    }
    public function sendotp()
    {
        //echo "nithin";
        $data = Input::all();


        $rules = array
        (

            'voterid' => ['required']

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
   $voter_obj = new Voter();
   if($voter_obj->checkVoter2($data['voterid']))
   {
    $randomno=mt_rand(1000,9999);
        $arr = array('otp' => $randomno);
     $voter=$voter_obj->where('id', '=', $data['voterid'])->update($arr);
     $voter2=$voter_obj->getVoter2($data['voterid']);
$votes_obj = new Votes();
$votestatus=($votes_obj->checkVote($voter2['id'],$voter2['event']))? 1 : 0;
        $message="Sucessfully sent..";

        return Response::json(array('error' => false,'otp' => $randomno,'message' => $message,'votestatus' => $votestatus),200); 
   }
   else
   {
       $message="Not Registered Member..";

        return Response::json(array('error' => true,'message' => $message),200); 
        }
    }
    }

}
