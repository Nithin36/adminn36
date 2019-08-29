<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Votes extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait,RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table ='app_votes';
    protected $fillable = ['id','candidate', 'voter','event'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   	public  function checkVote($voter,$event){
     $vote=$this->where('voter', '=', $voter)->where('event', '=', $event)->first();
    return  empty($vote)?  FALSE :  TRUE;
    }
    
       

    
}
