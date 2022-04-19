<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\PendingUsers as Authenticatable; 
//PendingUsers -model name

class PendingUsers extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'date',
        'fname',
        'lname',
        'username',
        'email',
        'phone',
        'website',
        'company',
        'address',
        'city',
        'state',
        'zip',
        'notes',
        'headshot',
        'logo',
        'meet_agent',
        'itunes'
        

    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Declaring the relationship
     * 
     */
    protected $table = 'vw_pending_users';
}
