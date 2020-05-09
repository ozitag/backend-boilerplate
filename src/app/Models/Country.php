<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $table = 'countries';

    protected $fillable = ['name', 'file_id'];

    public function file()
    {
        return $this->belongsTo('App\Models\File');
    }
}
