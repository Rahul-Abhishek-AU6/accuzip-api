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
            <h1 class="m-0 text-dark">All Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">All Setting</li>
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
              @if(count($Data) > 0)
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i=0;
                  @endphp
                  @foreach($Data as $list) 
                  @php
                    $i++;
                  @endphp
                <tr>
                  <td>{{ $i }}.</td>
                  <td>{{ $list->email }}</td>
                  <td>{{ $list->phone }}</td>
                  <td>{!! $list->address !!}</td>
                  <td><a style="margin-right:20px" href="{{ url('admin/edit-setting') }}/{{ $list->id }}"><i class="fas fa-edit"></i></a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                   <th>S.No.</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th width="15%">Action</th>
                </tr>
                </tfoot>
              </table>
              @endif
            </div>
            <!-- /.card-body -->
          </div>
        </div>
          
        </div>        
      </div>
    </section>   
  </div>
 @endsection 

