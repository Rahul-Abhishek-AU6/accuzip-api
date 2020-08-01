@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="#" class="btn btn-link btn-sm">Store Address</a>
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
        	<table class="table table-active">
                <tbody>
                    <tr>
                        <td>Name: </td>
                        <td> {{ $data->name }} <label class="float-right"><a href="{{ route('admin.store-address.edit',$data->id) }}" class="btn btn-info btn-sm">Edit</a></label></td>
                    </tr>
                    <tr>
                        <td>Billing Name: </td>
                        <td> {{ $data->billing_name }}</td>
                    </tr>
                    <tr>
                        <td>Address line 1: </td>
                        <td> {{ $data->address_one }}</td>
                    </tr>
                    <tr>
                        <td>Address line 2: </td>
                        <td> {{ $data->address_two }}</td>
                    </tr>
                    <tr>
                        <td>Address line 3: </td>
                        <td> {{ $data->address_three }}</td>
                    </tr>
                    <tr>
                        <td>State: </td>
                        <td> {{ $data->state }}</td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td> {{ $data->city }}</td>
                    </tr>
                    <tr>
                        <td>Country: </td>
                        <td> {{ $data->country }}</td>
                    </tr>
                    <tr>
                        <td>Postal Code: </td>
                        <td> {{ $data->postal_code }}</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush