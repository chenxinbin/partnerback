@extends('adminlte')

@section('title', '管理首页')
@section('login_username', '当前用户名')


@push('css')
    <link rel="stylesheet" href="{{ asset("vendor/adminlte/bower_components/select2/dist/css/select2.min.css")}}">
@endpush
@push('scripts')
    <script src="{{ asset("vendor/adminlte/bower_components/select2/dist/js/select2.full.min.js")}}"></script>
@endpush

@push('pagescript')
$(function () {
    $('.select2').select2()
  });
@endpush

@section('content')
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-plus-sign"></i> 添加文章
        <small>Optional description</small>
        
      <div class="btn-group" style="float:right;display:block;">
          <a class="btn btn-default btn-sm"><i class="glyphicon glyphicon-th-list"></i> 返回列表</a>
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
                <div class="form-group">
                  <label>标题</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              <div class="form-group">
                <label>选项</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              <div class="form-group">
                <label>多选</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> 返回列表</a>
          <button type="button" class="btn btn-success pull-right"><i class="glyphicon glyphicon-file"></i> 发布新的
          </button>
        </div>
      </div>

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