<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'phone',
        'payment_status',
        'completed',
        'group_id',
        'age'
    ];
    public function group(){
        return $this->belongsTo(Group::class);
    }
}
