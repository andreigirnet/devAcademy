<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'specialization',
        'group_id',
        'age'
    ];
    public function group(){
        return $this->belongsTo(Group::class);
    }
}
