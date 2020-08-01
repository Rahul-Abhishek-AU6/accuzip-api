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
            <a href="{{ url('admin/add-product') }}" class="btn btn-success btn-sm">Add Product</a>
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
              @if(count($Data) > 0)
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Status</th>
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
                  <td>{{ $list->name }}</td>
                  <td>{{ $list->name }}</td>
                  <td>@if( $list->status == 1) Active @else Inactive @endif</td>
                  <td>
                    <a style="margin-right:20px" href="{{ route('admin.product.create','target=general&id='.$list->id) }}"><i class="fas fa-edit"></i></a> 
                    <a href="{{ route('admin.product.destroy',$list->id) }}" onclick="return confirm('Are you sure want to delete this record?');"><i class="fas fa-trash"></i></a>
                    
                  </td>
                </tr>
                @endforeach
                </tbody>
                
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

