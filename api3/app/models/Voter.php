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
    protected $fillable = ['id','name', 'gender','email','contactno','otp','status'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
