<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['nombre','permisos'];

    public function users()
    {
    	return $this->belongsToMany(\App\User::class, 'roles_users');
    }

    
}
