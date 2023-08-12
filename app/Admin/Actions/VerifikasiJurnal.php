<?php

namespace App\Admin\Actions;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class VerifikasiJurnal extends RowAction
{
    public $name = 'Verifikasi';

    public function handle(Model $model, Request $request)
    {
        $status = $request->status_pengajuan;

        $model->status_pengajuan = $status;
        $model->save();

        return $this->response()->success('Konfirmasi Berhasil !!!')->refresh();
    }

    public function form()
    {
        $this->radio('status_pengajuan', __('Konfirmasi Pengajuan Jurnal'))->options([2 => "Diterima", 3 => "Ditolak"]);
    }

    public function display($status)
    {
        return $status == 1 ? "<span class='label label-sm label-success'>Konfirmasi</span>" : ($status == 2 ? "<span class='label label-sm label-success'>Diterima</span>" : "<span class='label label-sm label-danger'>Ditolak</span>");
    }
}
