<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $table = 'admin_user';

    public function roles(){
        return $this->belongsToMany('App\Models\Role', AdminUserRole::getModel()->getTable(), 'admin_user_id', 'role_id');
    }
}
