<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function course(){
        return $this->belongsTo(ClassCourse::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
}