<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'nickname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function courses() {
        return $this->belongsToMany(Course::class);
    }
}
