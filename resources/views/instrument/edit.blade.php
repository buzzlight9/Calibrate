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
{{--@include("messages.error")--}}
        <!-- Main content -->
        <section class="content">
                <div class="box">
                    <div class="box-header">
                        <form role="form" action="{{ route('instruments.update',$instrument->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="box-body">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Instrument Type</label>
                                                <input type="text" name="type" class="form-control" id="type" placeholder="Type" value="{{$instrument->type}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Model</label>
                                                <input type="text" name="model" class="form-control" id="model" placeholder="Model" value="{{$instrument->model}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Serial No</label>
                                                <input type="number" name="serial" class="form-control" id="serial" placeholder="Serial No" value="{{$instrument->serial}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Receipt No</label>
                                                <input type="number" name="receipt" class="form-control" id="receipt" placeholder="Receipt No" value="{{$instrument->receipt}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                    <label>Calibration Due Date</label>
                                                    <input type="date" name="due" class="form-control" id="due" placeholder="" value="{{$instrument->due}}" autofocus required>
                                                </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Brand</label>
                                                <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand" value="{{$instrument->brand}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Client Name</label>
                                                <input type="text" name="client" class="form-control" id="client" placeholder="Client Name" value="{{$instrument->client}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Additive Constant</label>
                                                <input type="text" name="constant" class="form-control" id="constant" placeholder="Additive Constant" value="{{$instrument->constant}}" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Calibrated</label>
                                                <input type="date" name="calibrated" class="form-control" id="calibrated" placeholder="" value="{{$instrument->calibrated}}" autofocus required>
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