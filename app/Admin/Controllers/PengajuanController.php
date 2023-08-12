<?php

namespace App\Admin\Controllers;

use App\Models\Pengajuan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PengajuanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Pengajuan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pengajuan());

        $grid->column('id_direktori', __('Direktori'));
        $grid->column('id_peneliti', __('Peneliti'));
        $grid->column('status_pengajuan', __('Status pengajuan'));
        $grid->column('biaya_pengajuan', __('Biaya pengajuan'));
        $grid->column('tanggal_pengajuan', __('Tanggal pengajuan'))->display(function ($tgl) {
            return \Carbon\Carbon::parse($tgl)->translatedFormat('l, d F Y');
        });

        if (Admin::user()->isAdministrator()) {
            $grid->disableCreateButton();

            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $actions->disableDelete();
            });
        }

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Pengajuan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('id_direktori', __('Id direktori'));
        $show->field('id_peneliti', __('Id peneliti'));
        $show->field('status_pengajuan', __('Status pengajuan'));
        $show->field('biaya_pengajuan', __('Biaya pengajuan'));
        $show->field('tanggal_pengajuan', __('Tanggal pengajuan'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        if (Admin::user()->isAdministrator()) {
            $show->panel()->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableDelete();
            });
        }

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pengajuan());

        $form->number('id_direktori', __('Id direktori'));
        $form->number('id_peneliti', __('Id peneliti'));
        $form->number('status_pengajuan', __('Status pengajuan'));
        $form->decimal('biaya_pengajuan', __('Biaya pengajuan'));
        $form->date('tanggal_pengajuan', __('Tanggal pengajuan'))->default(date('Y-m-d'));

        if (Admin::user()->isAdministrator()) {
            $form->tools(function ($tools) {
                $tools->disableDelete();
            });
        }

        return $form;
    }
}
