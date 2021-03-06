<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public $timestamps = false;

    protected $fillable = ['patient_id', 'doctor_id'];
}
