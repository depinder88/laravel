<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $table    = 'blog';
    
    protected $fillable = [
          'title',
          'description',
          'updated_at',
          'created_at',
          'status',
    ];
   

 
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

/*
    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'status_id');
    }
    public function plan()
    {
        return $this->hasOne('App\Plans', 'id', 'plan_id');
    } */

    
    
    
}