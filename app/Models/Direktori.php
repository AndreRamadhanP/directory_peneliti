<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_user
 * @property string $nama
 * @property string $judul_jurnal
 * @property int $tahun_terbit
 * @property string $file
 * @property float $anggaran
 * @property string $created_at
 * @property string $updated_at
 */
class Direktori extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'direktori';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'nama', 'judul_jurnal', 'tahun_terbit', 'file', 'anggaran', 'created_at', 'updated_at'];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }
}
