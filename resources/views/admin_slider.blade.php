
@extends('layouts.admin')
@section('content')
   <!-- Main content -->

   <section class="content" style="min-height: 100px !important">
        <div class="row">
          <div class="col-xs-10">
            
          </div>
          <div class="col-xs-2">
            <a class="btn btn-app" href="{{url('admin/upload-slider')}}">
                  <span class="badge bg-purple">{{count($listing)}}</span>
                  <i class="fa fa-users"></i> Upload New Slider
                </a>
            </div>
      </div>
  </section>



    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
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

            <div class="box-header">
              <h3 class="box-title">List Of Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Heading</th>
                  <th>Descreption</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listing as $key => $value)
                  <tr>
                      <td> <img src="{{url('storage/images')}}/{{$value->image_url}}" style="width: 100%;height: 70%;"></td>
                      <td>{{$value->image_heading}}</td>
                      <td>{{$value->image_description}}</td>
                    <td>
                      @if($value->status=='2')
                      <a href="{{ url('admin/slider-activate') }}/{{$value->id}}" title='Activate'>
                        <i class='fa fa-eye'></i>
                      </a>
                       
                      @else
                      <a href="{{ url('admin/slider-deactivate') }}/{{$value->id}}" title='De-activate'>
                        <i class='fa fa-eye'></i>
                      </a>
                      @endif
                      <!-- <a href="{{ url('admin/slider-edit') }}/{{$value->id}}" title='Activate'>
                        <i class='fa fa-edit'></i>
                      </a> -->
                      <a href="{{ url('admin/slider-delete') }}/{{$value->id}}" title='Delete Slider'>
                        <i class='fa fa-trash'></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('pagejs')
    <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection

