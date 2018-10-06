@extends("app")

@section("adminHome-content")
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DASHBOARD
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="/admin/dist/img/avatar.png" alt="User profile picture">
              <h3 class="profile-username text-center">{{(Auth::user()->name)}}</h3>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{(Auth::user()->email)}}</a>
                </li>
              </ul>

              <a href="{{route('instruments.create')}}" class="btn btn-primary btn-block"><b>Add New Instrument Detail</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8 col-sm-6 col-sx-12">
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
                                        <input type="text" name="type" class="form-control" id="type" placeholder="Type" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Model</label>
                                        <input type="text" name="model" class="form-control" id="model" placeholder="Model" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>Serial No</label>
                                        <input type="number" name="serial" class="form-control" id="serial" placeholder="Serial No" autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Brand</label>
                                        <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>Client Name</label>
                                        <input type="text" name="client" class="form-control" id="client" placeholder="Client Name" autofocus>
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
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection



{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
