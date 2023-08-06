<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_user
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property string $created_at
 * @property string $updated_at
 */
class Peneliti extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'peneliti';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'alamat', 'jenis_kelamin', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }
}
