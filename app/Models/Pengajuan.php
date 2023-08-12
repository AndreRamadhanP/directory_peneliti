<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $id_direktori
 * @property int $id_peneliti
 * @property int $status_pengajuan
 * @property float $biaya_pengajuan
 * @property string $tanggal_pengajuan
 * @property string $created_at
 * @property string $updated_at
 */
class Pengajuan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengajuan';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_direktori', 'id_peneliti', 'status_pengajuan', 'biaya_pengajuan', 'tanggal_pengajuan', 'created_at', 'updated_at'];

    public function peneliti()
    {
        return $this->belongsTo(Pengguna::class, 'id_peneliti', 'id');
    }

    public function direktori()
    {
        return $this->belongsTo(Direktori::class, 'id_direktori', 'id');
    }
}
