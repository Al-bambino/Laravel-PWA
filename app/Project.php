<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['naziv', 'broj_bodova'];

    // ne zelim da mi Laravel setuje updated_at i created_at
    public $timestamps = false;
}
