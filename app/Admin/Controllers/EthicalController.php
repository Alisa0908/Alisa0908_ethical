<?php

namespace App\Admin\Controllers;

use App\Models\Ethical;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EthicalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ethical';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ethical());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('company', __('Company'));
        $grid->column('price', __('Price'));
        $grid->column('image_url', __('Image url'));
        $grid->column('goods_url', __('Goods url'));
        $grid->column('category_id', __('Category id'));
        $grid->column('materials', __('Materials'));
        $grid->column('logistics', __('Logistics'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Ethical::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('company', __('Company'));
        $show->field('price', __('Price'));
        $show->field('image_url', __('Image url'));
        $show->field('goods_url', __('Goods url'));
        $show->field('category_id', __('Category id'));
        $show->field('materials', __('Materials'));
        $show->field('logistics', __('Logistics'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Ethical());

        $form->text('name', __('Name'));
        $form->text('company', __('Company'));
        $form->number('price', __('Price'));
        $form->textarea('image_url', __('Image url'));
        $form->textarea('goods_url', __('Goods url'));
        $form->number('category_id', __('Category id'));
        $form->textarea('materials', __('Materials'));
        $form->textarea('logistics', __('Logistics'));

        return $form;
    }
}
