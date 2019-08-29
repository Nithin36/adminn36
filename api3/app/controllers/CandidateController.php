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
        $candidates = DB::table('app_candidate')
            ->orderBy('id', 'desc')
            ->paginate(10)->toJson();

        return $candidates;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
   







}
