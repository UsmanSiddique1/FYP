@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assigned List</h1>
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
              <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_assigned_list/csv')}}"></a></span>Download Assignned List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>ID</th>
                  <th>Laptops&nbsp;Barcode</th>
                  <th>Bags&nbsp;Barcode</th>
                  <th>Evos&nbsp;Barcode</th>
                  <th>User&nbsp;ID</th>
                  <th>HEC&nbsp;ID</th>
                  <th>Full&nbsp;Name</th>
                  <th>CNIC</th>
                  <th>Enrollment&nbsp;NO.</th>
                  <th>Degree&nbsp;Title</th>
                  <th>Department</th>
                  
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($values as $value)

                <tr>

                  <td>{{$value->id}}</td>
                  <td>{{$value->Barcode}}</td>
                  <td>{{$value->BarCode}}</td>
                  <td>{{$value->barcode}}</td>
                  <td>{{$value->USER_ID}}</td>
                  <td>{{$value->HEC_ID}}</td>
                  <td>{{$value->FULL_NAME}}</td>
                  <td>{{$value->CNIC_}}</td>
                  <td>{{$value->ENROLLMENT_NO}}</td>
                  <td>{{$value->DEGREE_TITLE}}</td>
                  <td>{{$value->DEPARTMENT}}</td>
                  
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