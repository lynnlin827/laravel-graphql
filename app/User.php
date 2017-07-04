<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected $guarded = [];
}
