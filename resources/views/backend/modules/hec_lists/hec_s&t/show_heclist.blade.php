@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HEC List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Show All Students</li>
            </ol>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         

          <div class="card">
            <div class="card-header">
             <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_heclist/csv')}}"></a></span>Download HEC List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>HEC&nbsp;ID</th>
                  <th>Full&nbsp;Name</th>
                  <th>Father&nbsp;Name</th>
                  <th>CNIC</th>
                  <th>Date&nbsp;of&nbsp;Birth</th>
                  <th>Gender</th>
                  <th>Enrollement&nbsp;No.</th>
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($heclist as $list)  
                <tr>

                  <td>{{$list->id}}</td>
                  <td>{{$list->hec_id}}</td>
                  <td>{{$list->full_name}}</td>
                  <td>{{$list->father_name}}</td> 
                  <td>{{$list->cnic}}</td>
                  <td>{{$list->dob}}</td>
                  <td>{{$list->gender}}</td> 
                  <td>{{$list->enrollment_no}}</td>
                 
                  
                  <!-- <td><a type="submit" class="btn btn-sm btn-primary" href="#"> Edit </a></td>
                  <td><a type="submit" class="btn btn-sm btn-danger" href="#"> Delete </a></td> -->
                  <!-- <td><button class="deleteProduct btn btn-sm btn-danger" data-id="#" data-token="{{ csrf_token() }}">Delete</button></td> -->

                </tr>
@endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  @endsection