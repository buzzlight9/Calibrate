@extends("app")
@section("headSection")
  <link rel="stylesheet" href="{{asset('/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
@section("adminHome-content")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>New Instrument <small>Add details in the form below</small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">
          <form role="form" action="{{ route('instruments.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="box box-info">
                <div class="box-header">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="title">Instrument Type</label>
                      <input type="text" name="type" class="form-control" id="type" placeholder="Type" autofocus required>
                    </div>
                    <div class="form-group">
                      <label for="title">Model</label>
                      <input type="text" name="model" class="form-control" id="model" placeholder="Model" autofocus required>
                    </div>
                    <div class="form-group">
                      <label>Serial No</label>
                      <input type="number" name="serial" class="form-control" id="serial" placeholder="Serial No" autofocus required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="title">Brand</label>
                      <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand" autofocus required>
                    </div>
                    <div class="form-group">
                      <label>Client Name</label>
                      <input type="text" name="client" class="form-control" id="client" placeholder="Client Name" autofocus required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="box">
                <div class="box-header">
                  <div class="box-footer box-body">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('instruments.index')}}" class="btn btn-warning">Go Back</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div><!-- /.box-header -->
      </div>
    </section>
  </div>
@endsection
@section('footerSection')
<script src="{{asset('/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('/admin/ckeditor/ckeditor.js')}}"></script>
<script>
    $(document).ready(function()
    {
        $('.select2').select2();
    });
</script>
@endsection