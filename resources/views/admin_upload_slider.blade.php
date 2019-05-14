@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
         @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
            </div>
            @endif


            @if ($message = Session::get('error-message'))
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
            </div>
            @endif

      	 <div class="col-md-2">
      	 </div>
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload New Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/upload-slider') }}" method="POST" id="importMembers" name="upload_slider" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Heading</label>
                  <input type="text" name="image_heading" class="form-control" id="exampleInputEmail1" placeholder="Enter Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Sub Heading</label>
                  <input type="text" name="image_description" class="form-control" id="exampleInputPassword1" placeholder="Sub Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Slider Image</label>
                  <input type="file" name="image_url" id="exampleInputFile">
                  <input type="hidden" name="type" value="2" id="exampleInputFile">
                  <p class="help-block" style="color: red;">Image Size Should be 1800px * 510px.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>

      <div class="col-md-2">
      	 </div>
      <!-- /.row -->
    </section>

    @endsection