<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillasble = [
        'name'
    ];
    public function rolePermission()
    {
        return $this->hasMany(RolePermission::class);
    }
}
