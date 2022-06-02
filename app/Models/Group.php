<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'course_id'
    ];
    public function students(){
        return $this->hasMany(Student::Class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::Class);
    }
    public function course(){
        return $this->belongsTo(Course::Class);
    }
}
