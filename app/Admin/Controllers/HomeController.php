<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use App\Models\Direktori;
use App\Models\Pengguna;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->row(function (Row $row) {

                if (Admin::user()->isAdministrator()) {
                    $row->column(4, function (Column $column) {
                        $peneliti = Pengguna::where('id', '!=', 1)->get()->count();
                        $box = new InfoBox('Jumlah Peneliti', 'users', 'primary', 'admin/auth/users', $peneliti);
                        $column->append($box);
                    });
                }

                $row->column(4, function (Column $column) {
                    $jurnalPerusahaan = Direktori::whereHas('pengguna', function ($perusahaan) {
                        $perusahaan->where('id_perusahaan', Admin::user()->id_perusahaan);
                    })->get()->count();
                    $jurnal = Admin::user()->isAdministrator() ? Direktori::get()->count() : (Admin::user()->isRole('perusahaan') ? $jurnalPerusahaan : Direktori::where('id_user', Admin::user()->id)->get()->count());

                    $box = new InfoBox('Jumlah Jurnal', 'book', 'info', 'admin/direktori', $jurnal);
                    $column->append($box);
                });

                $row->column(4, function (Column $column) {
                    $anggaranJurnal = Direktori::whereHas('pengguna', function ($perusahaan) {
                        $perusahaan->where('id_perusahaan', Admin::user()->id_perusahaan);
                    })->sum('anggaran');

                    $anggaran = Admin::user()->isAdministrator() ? Direktori::sum('anggaran') : (Admin::user()->isRole('perusahaan') ? $anggaranJurnal : Direktori::where('id_user', Admin::user()->id)->sum('anggaran'));
                    $format = "Rp. " . number_format($anggaran, 2, ',', '.');

                    $box = new InfoBox('Jumlah Anggaran Jurnal', 'dollar', 'success', 'admin/direktori', $format);
                    $column->append($box);
                });

                if (Admin::user()->isRole('perusahaan')) {
                    $row->column(4, function (Column $column) {
                        $total = (Anggaran::where('created_by', Admin::user()->id)->first()) ? Anggaran::where('created_by', Admin::user()->id)->first()->total_anggaran : 0;
                        $total = "Rp. " . number_format($total, 2, ',', '.');

                        $box = new InfoBox('Jumlah Total Anggaran Perusahaan', 'money', 'primary', 'admin/anggaran', $total);

                        $column->append($box);
                    });

                    $row->column(4, function (Column $column) {
                        $sisa = (Anggaran::where('created_by', Admin::user()->id)->first()) ? Anggaran::where('created_by', Admin::user()->id)->first()->sisa_anggaran : 0;
                        $sisa = "Rp. " . number_format($sisa, 2, ',', '.');

                        $box = new InfoBox('Jumlah Sisa Anggaran Perusahaan', 'money', 'danger', 'admin/anggaran', $sisa);

                        $column->append($box);
                    });
                }
            });
    }
}
