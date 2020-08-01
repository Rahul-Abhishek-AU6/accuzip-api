@extends('admin.layout.common')
@section('content') 
@include('admin.layout.sidebar') 

<link rel="stylesheet" href="{{ url('/') }}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ url('/') }}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Setting</h1>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>              
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Add Setting</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <form action="{{ route('update-setting') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{ $Data->id }}">
            <div class="card-body"> 
             <div class="form-group">
                <label for="inputName">Logo</label>
                <input type="file" id="inputName" class="form-control" value="{{ $Data->logo }}" name="image" ><br>
                @php
                  $image = App\Setting::first();
                @endphp
                @if($image)
                <img src="{{ url('/') }}/images/{{ $image->logo }}" width="150px">
                @endif
              </div>             
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="text" id="inputName" class="form-control" value="{{ $Data->email }}" name="email" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Phone</label>
                <input type="text" id="inputName" class="form-control" value="{{ $Data->phone }}" name="phone" required="">
              </div>

              <div class="form-group">
                <label for="inputDescription">Address</label>
                 <textarea id="compose-textarea" name="address" class="form-control" style="height: 300px">{{ $Data->address }}</textarea>               
              </div>

              <div class="form-group">
                <label for="inputName">Facebook</label>
                <input type="text" id="inputName" class="form-control" value="{{ $Data->facebook_link }}" name="facebook_link" >
              </div>
              <div class="form-group">
                <label for="inputName">Instagram</label>
                <input type="text" id="inputName" class="form-control" value="{{ $Data->insta_link }}" name="insta_link" >
              </div>
              <div class="form-group">
                <label for="inputName">Youtube</label>
                <input type="text" id="inputName" class="form-control" value="{{ $Data->youtube_link }}" name="youtube_link" >
              </div>
              <div class="form-group">
                <label for="inputName">Linkedin</label>
                <input type="text" id="inputName" class="form-control" value="{{ $Data->linkedin_link }}" name="linkedin_link" >
              </div>

             
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input class="btn btn-secondary" type="submit" name="submit" value="Submit">
         
        </div>
      </div>
    </form>
    </section>  
  </div>
 @endsection 

