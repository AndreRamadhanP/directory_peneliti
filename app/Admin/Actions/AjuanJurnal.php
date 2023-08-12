<?php

namespace App\Admin\Actions;

use App\Models\Direktori;
use App\Models\Pengajuan;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class AjuanJurnal extends RowAction
{
    public $name = 'Ajukan';

    public function dialog()
    {
        $jurnal = new Direktori();

        if ($jurnal->status_ajuan == 0) {
            return $this->confirm('Apakah anda yakin ingin mengajukan jurnal ini?');
        } else if ($jurnal->status_ajuan == 1) {
            return $this->confirm('Apakah anda yakin ingin membatalkan pengajuan?');
        } else if ($jurnal->status_ajuan == 2) {
            return $this->confirm('Jurnal anda sudah diterima!!!');
        } else {
            return $this->confirm('Jurnal anda ditolak dan tidak bisa diajukan lagi!!!');
        }
    }

    public function handle(Model $model)
    {
        $pengajuan = new Pengajuan();

        if ($model->status_ajuan == 0) {
            $model->status_ajuan = 1;

            $pengajuan->id_direktori = $model->id;
            $pengajuan->id_peneliti = $model->id_user;
            $pengajuan->status_pengajuan = 1;
            $pengajuan->biaya_pengajuan = $model->anggaran;
            $pengajuan->tanggal_pengajuan = now();
            $pengajuan->save();
        } else if ($model->status_ajuan == 1) {
            $model->status_ajuan = 0;

            $pengajuan->where(['id_peneliti' => $model->id_user])->delete();
        } else if ($model->status_ajuan == 2) {
            $model->status_ajuan = 2;
        } else {
            $model->status_ajuan = 3;
        }

        $model->save();

        return $this->response()->success('Jurnal ' . $model->judul_jurnal . ' Berhasil diajukan!!!')->refresh();
    }

    public function display($ajuan)
    {
        return $ajuan == 0 ? "<span class='label label-sm label-info'>Ajukan</span>" : ($ajuan == 1 ? "<span class='label label-sm label-danger'>Batalkan</span>" : ($ajuan == 2 ? "<span class='label label-sm label-success'>Diterima</span>" : "<span class='label label-sm label-danger'>Ditolak</span>"));
    }
}
