<?php

namespace App\Admin\Controllers;

use App\Models\Anggaran;
use App\Models\Perusahaan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnggaranController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Anggaran';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $anggaran = new Anggaran();
        $grid = new Grid($anggaran);

        if (Admin::user()->isRole('perusahaan')) {
            $grid->model()->where('created_by', Admin::user()->id);
        }

        $grid->column('total_anggaran', __('Total anggaran'))->display(function ($rp) {
            return "Rp. " . number_format($rp, 2, ',', '.');
        });
        $grid->column('sisa_anggaran', __('Sisa anggaran'))->display(function ($rp) {
            return "Rp. " . number_format($rp, 2, ',', '.');
        });

        // if ($anggaran->get()->count() > 0) {
        //     $grid->disableCreateButton();
        // }

        if (Admin::user()->isAdministrator()) {
            $grid->column('user.name', __('Pembuat'));
            $grid->column('perusahaan.nama_perusahaan', __('Nama Perusahaan'));

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
        $show = new Show(Anggaran::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_by', __('Created by'));
        $show->field('total_anggaran', __('Total anggaran'));
        $show->field('sisa_anggaran', __('Sisa anggaran'));
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
        $form = new Form(new Anggaran());

        $form->hidden('created_by', __('Created by'))->default(Admin::user()->id);
        $form->currency('total_anggaran', __('Total anggaran'));
        $form->hidden('sisa_anggaran', __('Sisa anggaran'))->default(0);
        $form->hidden('id_perusahaan', __('Perusahaan'))->default(Admin::user()->id_perusahaan);

        if ($form->isCreating() || $form->isEditing()) {
            $form->saving(function (Form $form) {
                $form->sisa_anggaran = $form->total_anggaran;
            });
        }

        if (Admin::user()->isAdministrator()) {
            $form->tools(function ($tools) {
                $tools->disableDelete();
            });
        }

        return $form;
    }
}
