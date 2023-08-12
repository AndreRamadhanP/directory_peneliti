<?php

namespace App\Admin\Controllers;

use App\Models\Pengguna;
use App\Models\Perusahaan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Hash;

class UserController extends AdminController
{
    /**
     * {@inheritdoc}
     */
    protected function title()
    {
        // return trans('admin.administrator');
        return "Daftar Peneliti";
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        // $userModel = config('admin.database.users_model');

        // $grid = new Grid(new $userModel());
        $grid = new Grid(new Pengguna());

        $grid->model()->where('id', '!=', 1);

        $grid->column('username', trans('admin.username'))->display(function () {
            return "<b>" . $this->name . "</b> <br/> <p>(" . $this->username . ")</p>";
        });
        $grid->column('perusahaan.nama_perusahaan', __('Nama Perusahaan'));
        $grid->column('peneliti.jenis_kelamin', __('Jenis Kelamin'));
        $grid->column('peneliti.alamat', __('Alamat'));
        $grid->column('roles', __('Hak Akses'))->pluck('name')->label();
        $grid->column('created_at', trans('admin.created_at'))->display(function ($dibuat) {
            $tgl = \Carbon\Carbon::parse($dibuat)->translatedFormat('l, d F Y');
            $jam = \Carbon\Carbon::parse($dibuat)->translatedFormat('H:m:s');

            return $tgl . "<br/>" . $jam;
        });
        $grid->column('updated_at', trans('admin.updated_at'))->display(function ($diubah) {
            $tgl = \Carbon\Carbon::parse($diubah)->translatedFormat('l, d F Y');
            $jam = \Carbon\Carbon::parse($diubah)->translatedFormat('H:m:s');

            return $tgl . "<br/>" . $jam;
        });

        $grid->actions(function (Grid\Displayers\Actions $actions) {
            if ($actions->getKey() == 1) {
                $actions->disableDelete();
            }
        });

        $grid->tools(function (Grid\Tools $tools) {
            $tools->batch(function (Grid\Tools\BatchActions $actions) {
                $actions->disableDelete();
            });
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        // $userModel = config('admin.database.users_model');

        // $show = new Show($userModel::findOrFail($id));
        $show = new Show(Pengguna::findOrFail($id));

        $show->field('username', trans('admin.username'));
        $show->field('name', trans('admin.name'));
        $show->field('perusahaan.nama_perusahaan', __('Perusahaan'));
        $show->field('perusahaan.nama_direktur', __('Nama Direktur'));
        $show->field('peneliti.jenis_kelamin', __('Jenis Kelamin'));
        $show->field('peneliti.alamat', __('Alamat'));
        $show->field('roles', trans('admin.roles'))->as(function ($roles) {
            return $roles->pluck('name');
        })->label();
        $show->field('permissions', trans('admin.permissions'))->as(function ($permission) {
            return $permission->pluck('name');
        })->label();
        $show->field('created_at', trans('admin.created_at'));
        $show->field('updated_at', trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        // $userModel = config('admin.database.users_model');
        $permissionModel = config('admin.database.permissions_model');
        $roleModel = config('admin.database.roles_model');

        // $form = new Form(new $userModel());
        $form = new Form(new Pengguna());

        $userTable = config('admin.database.users_table');
        $connection = config('admin.database.connection');

        $form->display('id', 'ID');
        $form->text('username', trans('admin.username'))
            ->creationRules(['required', "unique:{$connection}.{$userTable}"])
            ->updateRules(['required', "unique:{$connection}.{$userTable},username,{{id}}"]);

        $form->text('name', trans('admin.name'))->rules('required');
        $form->select('id_perusahaan', __('Pilih Perusahaan'))->options(Perusahaan::pluck('nama_perusahaan', 'id'));
        $form->select('peneliti.jenis_kelamin', __('Jenis Kelamin'))->options(['Pria' => 'Pria', 'Wanita' => 'Wanita']);
        $form->textarea('peneliti.alamat', __('Alamat'));
        $form->image('avatar', trans('admin.avatar'));
        $form->password('password', trans('admin.password'))->rules('required|confirmed');
        $form->password('password_confirmation', trans('admin.password_confirmation'))->rules('required')
            ->default(function ($form) {
                return $form->model()->password;
            });

        $form->ignore(['password_confirmation']);

        $form->multipleSelect('roles', trans('admin.roles'))->options($roleModel::all()->pluck('name', 'id'));
        $form->multipleSelect('permissions', trans('admin.permissions'))->options($permissionModel::all()->pluck('name', 'id'));

        $form->display('created_at', trans('admin.created_at'));
        $form->display('updated_at', trans('admin.updated_at'));

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            }
        });

        return $form;
    }
}
