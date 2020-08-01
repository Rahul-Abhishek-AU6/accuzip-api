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
            <h1 class="m-0 text-dark">Add Category</h1>
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
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Add Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="{{ route('save-category') }}" method="post">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputStatus">Select Category</label>
                <select class="form-control custom-select" name="parent_id">
                  <option selected="" disabled="">Please Select</option>                  
                  <option value="0">Root</option>
                  @if(!empty($cat))
                    @foreach($cat as $list)
                      <option value="{{ $list->id }}">{{ $list->name }}</option>
                      @php
                        $child_cat = App\ProductCategory::where('status',1)->where('parent_id',$list->id)->get();
                      @endphp
                        @foreach($child_cat as $child)
                         <option value="{{ $child->id }}">--{{ $child->name }}</option>
                        @endforeach
                    @endforeach
                  @endif
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Category Name</label>
                <input type="text" id="inputName" class="form-control" name="name" required="">
              </div>
              {{-- <div class="form-group">
                <label for="inputDescription">Project Description</label>
                 <textarea id="compose-textarea" class="form-control" style="height: 300px"></textarea>               
              </div> --}}
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select" name="status">
                  <option selected="" disabled="">Please Select</option>                  
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">SEO</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Meta Title</label>
                <input type="text" name="meta_title" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Meta Key</label>
                <input type="text" name="meta_key" id="inputEstimatedDuration" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Meta Descrption</label>
                <textarea name="meta_descrption" id="inputSpentBudget" class="form-control"></textarea>
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

