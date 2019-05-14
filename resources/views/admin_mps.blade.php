
@extends('layouts.admin')
@section('content')
   <!-- Main content -->
   

    <section class="content" style="min-height: 100px !important">
      	<div class="row">
        	<div class="col-xs-10">

        	</div>
        	<div class="col-xs-2">
        		<a class="btn btn-app" href="{{url('admin/upload-members')}}">
                	<span class="badge bg-purple">0</span>
                	<i class="fa fa-users"></i> Upload Members
              	</a>
          	</div>
    	</div>
	</section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Of MPS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Party</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listing as $key => $value)
                	<tr>
	                    <td> <img src="{{url('storage/img')}}/{{$value->image}}" style="width: 80px;height: 80px;"></td>
	                    <td>{{$value->name}}</td>
	                  	<td>{{$value->member_type}}</td>
	                  	<td>{{$value->party_name}}</td>
		              	<td>
			              	<a href="{{ url('/') }}" title='View Member'>
			              		<i class='fa fa-eye'></i>
			              	</a> 
			              	<a href="{{ url('/') }}" title='Edit Member'>
			              		<i class='fa fa-edit'></i>
			              	</a>
			              	<a href="{{ url('/') }}" title='Delete Member'>
			              		<i class='fa fa-edit'></i>
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

