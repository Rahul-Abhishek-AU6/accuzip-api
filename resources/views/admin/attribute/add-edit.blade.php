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
            <h2>Add Attribute</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">All Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              @if(isset($data))
              {!! Form::open(['route'=>['admin.attribute.update',$data->id]]) !!}
              @else
                {!! Form::open(['route' => 'admin.attribute.store']) !!}
              @endif
              
              
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      {!! Form::label('name', 'Name') !!}
                      {!! Form::text('name', $data->name??'', ['class' => 'form-control','placeholder'=>'Name']) !!}
                      <small class="text-danger">{{ $errors->first('name') }}</small>
                  </div>

                  <div class="form-group{{ $errors->has('attribute_type') ? ' has-error' : '' }}">
                      {!! Form::label('attribute_type', 'Input label') !!}
                      {!! Form::select('attribute_type', ['select'=>'select','text'=>'text'], $data->type??'select', ['id' => 'attribute_type', 'class' => 'form-control', 'placeholder' => '---Select One---']) !!}
                      <small class="text-danger">{{ $errors->first('attribute_type') }}</small>
                  </div>
              
                  <div class="btn-group pull-right">
                      @if(isset($data))
                        {!! Form::submit("Update Attribute", ['class' => 'btn btn-info']) !!}
                      @else
                        {!! Form::submit("Add Attribute", ['class' => 'btn btn-success']) !!}
                      @endif
                  </div>
              
              {!! Form::close() !!}
            </div>
            <!-- /.card-body -->
          </div>
        </div>
          
        </div>        
      </div>
    </section>   
  </div>
 @endsection 

