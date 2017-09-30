@extends('adminlte')

@section('title', '管理首页')
@section('login_username', '当前用户名')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-plus-sign"></i> 查看详情
        <small>Optional description</small>
        
      <div class="btn-group" style="float:right;display:block;">
          <a class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-th-list"></i> 返回列表</a>
          <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> 添加</a>
          <a  class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> 删除</a>
          <a  class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i> 修改</a>
      </div>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

<div class="row">

        <div class="col-xs-12">     
          <div class="box box-success">
            <!-- /.box-header -->
            <div class="box-body">

          <div class="row">
            <div class="col-md-12">
                <div class="mailbox-controls with-border">
                  <label>标题</label>
                  <div style="display:block">
                  Copyright © 2016 Company. All rights reserved.
                  </div>
                </div>
                <div class="mailbox-controls with-border">
                  <label>标题</label>
                  <div style="display:block">
                  Copyright © 2016 Company. All rights reserved.
                  </div>
                </div>
                <div class="mailbox-controls with-border">
                  <label>标题</label>
                  <div style="display:block">
                  Copyright © 2016 Company. All rights reserved.
                  </div>
                </div>
                <div class="mailbox-controls with-border">
                  <label>标题</label>
                  <div style="display:block">
                  Copyright © 2016 Company. All rights reserved.
                  </div>
                </div>
              </div>
              
          </div>
          <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
@endsection