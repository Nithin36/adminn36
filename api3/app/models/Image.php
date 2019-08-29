<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Image extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait,RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table ='app_image';
    protected $fillable = ['id','image'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
