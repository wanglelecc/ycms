<?php

namespace Wanglelecc\Ycms\Controllers;

//use Encore\Admin\Auth\Database\Administrator;
//use Encore\Admin\Auth\Database\OperationLog;
//use Encore\Admin\Facades\Admin;
//use Encore\Admin\Grid;
//use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Wanglelecc\Ycms\Facades\Ycms;

class LogController extends Controller
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return 'log/index - by ycms.';
    }

    public function destroy($id)
    {

    }
}
