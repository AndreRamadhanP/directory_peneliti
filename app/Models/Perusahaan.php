<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama_perusahaan
 * @property string $alamat_perusahaan
 * @property string $nama_direktur
 * @property string $created_at
 * @property string $updated_at
 */
class Perusahaan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'perusahaan';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nama_perusahaan', 'alamat_perusahaan', 'nama_direktur', 'created_at', 'updated_at'];
}
