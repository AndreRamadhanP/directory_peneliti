<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
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

                if (Admin::user()->id == 1) {
                    $row->column(4, function (Column $column) {
                        $peneliti = Pengguna::where('id', '!=', 1)->get()->count();
                        $box = new InfoBox('Jumlah Peneliti', 'users', 'primary', 'admin/auth/users', $peneliti);
                        $column->append($box);
                    });
                }

                $row->column(4, function (Column $column) {
                    $jurnal = Admin::user()->isAdministrator() ? Direktori::get()->count() : Direktori::where('id_user', Admin::user()->id)->get()->count();

                    $box = new InfoBox('Jumlah Jurnal', 'book', 'info', 'admin/direktori', $jurnal);
                    $column->append($box);
                });

                $row->column(4, function (Column $column) {
                    $anggaran = Admin::user()->isAdministrator() ? Direktori::sum('anggaran') : Direktori::where('id_user', Admin::user()->id)->sum('anggaran');
                    $format = "Rp. " . number_format($anggaran, 2, ',', '.');

                    $box = new InfoBox('Jumlah Anggaran', 'dollar', 'success', 'admin/direktori', $format);
                    $column->append($box);
                });
            });
    }
}
