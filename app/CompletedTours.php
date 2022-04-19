<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\CompletedTours as Authenticatable;

class CompletedTours extends Model
{
    //
    use Notifiable;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', 
        'fname', 
        'lname',
        'final_date',
        'music',
        'mls_notify',
        'mls_id',
        'mls_images',
        'uploadagent',
        'gallery',
        'amenities_id',
        'at_name',
        'tt_name',
        'town_id',
        'address',
        'city',
        'state',
        'zip',
        'utube',
        'script',
        'realtorcom',
        'mls_link',
        'notes',
        'u_notes'

         
        
        
        
        
        
        // 'email', 'password'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'vw_completed_tours';
}