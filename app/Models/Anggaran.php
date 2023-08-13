<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $created_by
 * @property float $total_anggaran
 * @property float $sisa_anggaran
 * @property string $created_at
 * @property string $updated_at
 */
class Anggaran extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'anggaran';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'id_perusahaan', 'total_anggaran', 'sisa_anggaran', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(Pengguna::class, 'created_by', 'id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id');
    }
}
