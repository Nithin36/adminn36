<?php

use Illuminate\Support\Facades\Input;

class ImageController extends BaseController {

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
  

    public function show()
    {
        $data = Input::all();

        $rules = array
        (

            'id' => ['required','numeric'],

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

            $data = Input::all();
            $image_obj = new Image();

            $image= $image_obj ->where('id', '=', $data['id'])->first();
            $message=" Result Here..";
            return Response::json(array('error' => false,'message' => $message,'image'=>$image->toArray()),200);


        }



    }


}
