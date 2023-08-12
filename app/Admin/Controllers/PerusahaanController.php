<?php

namespace App\Admin\Controllers;

use App\Models\Perusahaan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PerusahaanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Perusahaan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Perusahaan());

        $grid->column('nama_perusahaan', __('Nama perusahaan'));
        $grid->column('alamat_perusahaan', __('Alamat perusahaan'));
        $grid->column('nama_direktur', __('Nama direktur'));

        if (Admin::user()->isRole('perusahaan') || Admin::user()->isRole('peneliti')) {
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
        $show = new Show(Perusahaan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_perusahaan', __('Nama perusahaan'));
        $show->field('alamat_perusahaan', __('Alamat perusahaan'));
        $show->field('nama_direktur', __('Nama direktur'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        if (Admin::user()->isRole('perusahaan') || Admin::user()->isRole('peneliti')) {
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
        $form = new Form(new Perusahaan());

        $form->text('nama_perusahaan', __('Nama perusahaan'));
        $form->textarea('alamat_perusahaan', __('Alamat perusahaan'));
        $form->text('nama_direktur', __('Nama direktur'));

        if (Admin::user()->isRole('perusahaan') || Admin::user()->isRole('peneliti')) {
            $form->tools(function ($tools) {
                $tools->disableDelete();
            });
        }

        return $form;
    }
}
