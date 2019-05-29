<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // posto smo napravili tabelu koja se zove 'blog' a ne 'blogs'
    // moramo Laravelu da kazemo da korsiti nasu tabelu
    // Ovo nije preporucljivo - uvek nazivajte table kao snake_case modela u mnozini,
    // tako ce Laravel prepoznati koju tabelu da koristi
    protected $table = 'blog';

    // radi suprotno od $fillable-a
    // Ovde upisujete sva polja koja ne zelite da budu moguca da se mass assignment-uju
    // https://laravel.com/docs/5.8/eloquent#mass-assignment
    protected $guarded = ['id'];
}
