@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Examination List</h1>
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
              <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_examlist/csv')}}"></a></span>Download Examination List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <tr>
                  <th>ID</th> 
                  <th>Full&nbsp;Name</th>
                  <th>Father&nbsp;Name</th>
                  <th>CNIC</th>                  
                  <th>Enrollement&nbsp;No.</th> 
                  <th>Degree&nbsp;Title</th>                 
                  <th>Department</th>                  
                  <th>Year&nbsp;of&nbsp;Study</th>                  
                  <th>CGPA</th>
                  <th>Out&nbsp;of&nbsp;GPA</th>
                  
                 
                  <!-- <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                  
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($exams as $exam) 

                <tr>

                  <td>{{$exam->ID}}</td>
                  
                  <td>{{$exam->FullName}}</td>
                  <td>{{$exam->FatherName}}</td> 
                  <td>{{$exam->CNIC}}</td>                   
                  <td>{{$exam->EnrollmentNo}}</td>
                  <td>{{$exam->DegreeTitle}}</td>                  
                  <td>{{$exam->Department}}</td>                   
                  <td>{{$exam->YearOfStudy}}</td>                  
                  <td>{{$exam->CGPA}}</td>
                  <td>{{$exam->OutOfGpa}}</td> 
                  
                  

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