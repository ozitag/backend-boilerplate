<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdminAuthLog extends Model
{
    const UPDATED_AT = null;
    protected $table = 'administrator_auth_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'administrator_id'
    ];
}