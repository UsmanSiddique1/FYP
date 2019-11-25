@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Eligible List</h1>
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
              <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_eligible_list/csv')}}"></a></span>Download Eligible List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>                
                  <th>Exam&nbsp;ID</th>
                  <th>HEC&nbsp;ID</th>
                  <th>Status</th> 

                  <th>Full&nbsp;Name</th>
                  <th>Father&nbsp;Name</th>
                  <th>CNIC</th>                
                  <th>Enrollement&nbsp;No.</th>
                  <th>Degree&nbsp;Title</th>  
                  <th>Department</th>  
                  <th>Campus</th>                                  
                  <th>CGPA</th>
                  <th>Out&nbsp;Of&nbsp;GPA</th>
                  
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($boths as $both)

                <tr>

                  <td>{{++$i}}</td>
                  <td>{{$both->ID}}</td>
                  <td>{{$both->hec_id}}</td>          
             
             @if($both->CGPA == $both->cgpa)
                  <td><i class="fa fa-check-circle" style="color:green;">&nbsp;&nbsp;Eligible</i></td>
             @else
                  <td><i class="fa fa-times-circle" style="color:red;">&nbsp;&nbsp;Not&nbsp;E</i></td>
             @endif
             
                  <td>{{$both->full_name}}</td>
                  <td>{{$both->father_name}}</td> 
                  <td>{{$both->cnic}}</td> 
                  <td>{{$both->enrollment_no}}</td>
                  <td>{{$both->degree_title}}</td>
                  <td>{{$both->department}}</td> 
                  <td>{{$both->campus}}</td>
                  <td>{{$both->CGPA}}</td>
                  <td>{{$both->out_of_gpa}}</td> 
                  

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