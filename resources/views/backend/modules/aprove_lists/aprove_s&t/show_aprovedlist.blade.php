@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Approved List</h1>
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
              <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_aproved_list/csv')}}"></a></span>Download Approved Students List</h3>


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
                  <th>Out&nbsp;of&nbsp;GPA</th>
                  <th>Year&nbsp;of&nbsp;Study</th>
                  <th>Date&nbsp;of&nbsp;Admission</th>
                  <th>Date&nbsp;of&nbsp;Completion</th>
                  
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($boths as $both)
@if($both->CGPA == $both->cgpa)

                <tr>

                  <td>{{++$i}}</td>
                  <td>{{$both->ID}}</td>
                  <td>{{$both->hec_id}}</td>         

              <?php 

               $q=DB::table('issuedcniclists')->where('Cnic','=',$both->cnic)->first();
                if(!empty($q)){ ?>
                  <td><i class="fa fa-times-circle" style="color:red;">&nbsp;&nbsp;Already&nbsp;Issued</i></td>
               <?php }

          else{ ?>
                  <td><i class="fa fa-check-circle" style="color:green;">&nbsp;&nbsp;Aproved</i></td>
 <?php } ?>            


         
             
                  <td>{{$both->full_name}}</td>
                  <td>{{$both->father_name}}</td> 
                  <td>{{$both->cnic}}</td> 
                  <td>{{$both->enrollment_no}}</td>
                  <td>{{$both->degree_title}}</td>
                  <td>{{$both->department}}</td> 
                  <td>{{$both->campus}}</td>
                  <td>{{$both->cgpa}}</td>
                  <td>{{$both->out_of_gpa}}</td> 
                  <td>{{$both->year_of_study}}</td>
                  <td>{{$both->date_of_admission}}</td>
                  <td>{{$both->date_of_completion}}</td>

                </tr> 
 @endif                 
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