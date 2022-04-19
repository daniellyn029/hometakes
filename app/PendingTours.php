<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\PendingTours as Authenticatable;

class PendingTours extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'email', 
        'password',
        'final_date',
        'fname',
        'lname',
        // 'type',
        'music',
        'tour',
        'video_tour',
        'at_name',
        'tt_name',
        'address',
        'city',
        'state',
        'zip',
        'gate_code',
        'notes',
        // 'field'
        'gallery',
        'utube',
        'u_notes',
        'film_date_1',
        'film_time_1'

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
    protected $table = 'vw_pending_tours';
}
