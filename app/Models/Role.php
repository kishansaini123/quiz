<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public const IS_ADMIN = 1;
    public const IS_HR = 2;
    public const IS_EMPLOYEE = 3;
    public const IS_USER = 4;

    public function getNameAttribute($value)
    {
    	return ucfirst($value);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
