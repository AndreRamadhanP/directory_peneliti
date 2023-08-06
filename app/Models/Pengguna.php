<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $avatar
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class Pengguna extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'admin_users';

    /**
     * @var array
     */
    protected $fillable = ['username', 'password', 'name', 'avatar', 'remember_token', 'created_at', 'updated_at'];
}
