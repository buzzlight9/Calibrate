@extends("app")
@section('headSection')
<link rel="stylesheet" href="{{asset('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section("adminHome-content")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>CALIBRATIONS DUE</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <a href="{{route('instruments.create')}}" class="btn btn-primary col-md-offset-5">New Instrument Details</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i>
            </button>
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
                    <th>Due Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($instruments as $instrument)
                  <tr>
                    <td class="lightGrey">{{$loop->index + 1}} </td>
                    <td class="lightBlue">{{$instrument->type}}</td>
                    <td class="lightGrey">{{$instrument->brand}}</td>
                    <td class="lightBlue">{{$instrument->model}}</td>
                    <td class="lightGrey">{{$instrument->serial}}</td>
                    <td class="lightBlue">{{$instrument->client}}</td>
                    <td class="lightGrey">{{$instrument->constant}}</td>
                    <td class="lightBlue">{{$instrument->calibrated}}</td>
                    <td class="lightGrey">{{$instrument->receipt}}</td>
                    <td>
                      <?php
                        $date = $instrument->due;
                        $dueDate = strtotime('-2 week' , strtotime($date));
                        $dueDate = date("Y-m-d" , $dueDate);
                      ?>
                      @if($dueDate == date("Y-m-d") || $dueDate < date("Y-m-d"))
                        <span style='color:red' class='glyphicon glyphicon-remove'> DUE</span>
                      @else
                        <span style='color:green' class='glyphicon glyphicon-ok'> OK</span>
                      @endif
                    </td>
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
                    <th>Due Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('footerSection')
<script src="{{asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function()
  {
    $('#example1').DataTable()
    $('#example2').DataTable
    ({
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