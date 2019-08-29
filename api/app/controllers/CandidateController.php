<?php

use Illuminate\Support\Facades\Input;

class CandidateController extends BaseController {

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
          $data = Input::get();


       $rules = array
       (
           'event' => ['required']
          
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
      // $data = Input::get();
        $candidates = DB::table('app_candidate')
             ->where('event', '=', $data['event'])
            ->orderBy('id', 'desc')
            ->paginate(10)->toJson();

        return $candidates;
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
   







}
