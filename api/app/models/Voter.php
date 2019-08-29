<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Voter extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait,RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table ='app_voter';
    protected $fillable = ['id','event', 'gender','contactno','otp','status'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
    
    	public  function checkVoter($contactno,$event){
     $voter=$this->where('contactno', '=', $contactno)->where('event', '=', $event)->first();
    return  empty($voter)?  FALSE :  TRUE;
    }
    
      	public  function checkVoter2($id){
     $voter=$this->where('id', '=', $id)->first();
    return  empty($voter)?  FALSE :  TRUE;
    }
       	public  function getVoter2($id){
     $voter=$this->where('id', '=', $id)->first();
    return $voter;
    }
     	public  function getVoter($contactno,$event){
     $voter=$this->where('contactno', '=', $contactno)->where('event', '=', $event)->first();
    return $voter;
    }
       
    	public  function approveVoter($voterid){
             $arr = array('status' => 1);
     $voter=$this->where('id', '=', $voterid)->update($arr);
    return  TRUE;
    }
    
}
