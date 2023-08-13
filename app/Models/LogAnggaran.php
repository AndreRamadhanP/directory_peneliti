<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $id_pengajuan
 * @property float $jumlah_anggaran_teralokasi
 * @property string $tanggal_alokasi
 * @property string $created_at
 * @property string $updated_at
 */
class LogAnggaran extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_anggaran';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_pengajuan', 'jumlah_anggaran_teralokasi', 'tanggal_alokasi', 'created_at', 'updated_at'];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan', 'id');
    }
}
