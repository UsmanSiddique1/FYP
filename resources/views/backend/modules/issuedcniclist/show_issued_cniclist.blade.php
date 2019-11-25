@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Issued CNIC List</h1>
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
              <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_issued_cnic/csv')}}"></a></span>Download Already Issued List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>ID</th>
                  <th>CNIC</th>
                  <th>Status</th>

                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($issuedlist as $list)  
                <tr>

                  <td>{{$list->id}}</td>
                  <td>{{$list->Cnic}}</td>
                  <td><i class="fa fa-check-circle" style="color:green;">&nbsp;&nbsp;Issued </i></td>
                 
                  
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