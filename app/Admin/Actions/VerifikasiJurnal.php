<?php

namespace App\Admin\Actions;

use App\Models\Anggaran;
use App\Models\Direktori;
use App\Models\LogAnggaran;
use App\Models\Pengajuan;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class VerifikasiJurnal extends RowAction
{
    public $name = 'Verifikasi';

    public function handle(Model $model, Request $request)
    {
        $status = $request->status_pengajuan;

        $direktori = new Direktori();
        $anggaran = new Anggaran();
        $log_anggaran = new LogAnggaran();

        if ($model->status_pengajuan == 1) {
            $model->status_pengajuan = $status;

            //Jika status pengajuan jurnal diterima
            if ($model->status_pengajuan == 2) {
                $getAnggaran = $anggaran->where('id_perusahaan', $model->peneliti->id_perusahaan);
                $anggaran = $getAnggaran->first();

                $totalAnggaran = ($anggaran) ? $anggaran->sisa_anggaran : 0;
                $sisa = $totalAnggaran - $model->biaya_pengajuan;

                if ($sisa <= 500000) {
                    return $this->response()->warning('Maaf anggaran anda sudah melebihi batasan!!!')->refresh();
                } else {
                    $getAnggaran->update(['sisa_anggaran' => $sisa]); //Update nilai sisa anggaran

                    //Catat log pengurangan anggaran
                    $log_anggaran->id_pengajuan = $model->id;
                    $log_anggaran->jumlah_anggaran_teralokasi = $sisa;
                    $log_anggaran->tanggal_alokasi = now();
                    $log_anggaran->save();
                }
            }

            $model->save();

            $direktori->where('id', $model->id_direktori)->update(['status_ajuan' => $status]);

            return $this->response()->success('Konfirmasi Berhasil !!!')->refresh();
        }
    }

    public function form()
    {
        $pengajuan = Pengajuan::findOrFail($this->getKey());

        $status = $pengajuan->status_pengajuan == 2 ? "Diterima" : ($pengajuan->status_pengajuan == 3 ? "Ditolak" : "");

        if ($pengajuan->status_pengajuan == 1 || $pengajuan->status_pengajuan == 3) {
            $this->radio('status_pengajuan', __('Konfirmasi Pengajuan Jurnal'))->options([2 => "Diterima", 3 => "Ditolak"])->default($pengajuan->status_pengajuan);
        } else {
            $this->text(_("Status Pengajuan Jurnal"))->readonly()->default($status);
        }
    }

    public function display($status)
    {
        return $status == 1 ? "<span class='label label-sm label-primary'>Konfirmasi</span>" : ($status == 2 ? "<span class='label label-sm label-success'>Diterima</span>" : "<span class='label label-sm label-danger'>Ditolak</span>");
    }
}
