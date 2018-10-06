@extends("app")
@section('headSection')
<link rel="stylesheet" href="{{asset('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section("adminHome-content")
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INSTRUMENTS DETAILS
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
        <a href="{{route('instruments.create')}}" class="btn btn-primary col-md-offset-5">New Instrument Details</a>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Instrument Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Type</th>
                  <th>Brand</th>
                  <th>Model</th>
                  <th>Serial No</th>
                  <th>Client</th>
                  <th>Additive Constant</th>
                  <th>Date Calibrated</th>
                  <th>Receipt No</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($instruments as $instrument)
                <tr>
                  <td>{{$loop->index + 1}} </td>
                  <td>{{$instrument->type}}</td>
                  <td>{{$instrument->brand}}</td>
                  <td>{{$instrument->model}}</td>
                  <td>{{$instrument->serial}}</td>
                  <td>{{$instrument->client}}</td>
                  <td>{{$instrument->constant}}</td>
                  <td>{{$instrument->calibrated}}</td>
                  <td>{{$instrument->receipt}}</td>
                  <td><a href="{{route('instruments.edit',$instrument->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                  <form id="delete-form-{{$instrument->id}}" action="{{route('instruments.destroy',$instrument->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <a href=""  onclick="
                  if(confirm('Are you sure, You Want to delete this?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $instrument->id }}').submit();
                      }
                      else{
                        event.preventDefault();
                      }" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-trash"  ></span>
                    
                  </a>
                  
                </tr>
               
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>Type</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Serial No</th>
                    <th>Client</th>
                    <th>Additive Constant</th>
                    <th>Date Calibrated</th>
                    <th>Receipt No</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
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
  });
</script>
@endsection