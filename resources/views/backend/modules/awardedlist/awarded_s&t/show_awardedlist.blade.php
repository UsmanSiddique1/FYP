@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Award List</h1>
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
              <h3 class="card-title"><span class="mr-2"><a class="fa fa-download" href="{{URL::to('download_awarded_list/csv')}}"></a></span>Download Award List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <tr>
                  <th>Status</th>
                  <th>HEC&nbsp;ID</th>

                  <th>Full&nbsp;Name</th>
                  <th>CNIC</th>
                  <th>Enrollement&nbsp;No.</th>
                  <th>Degree&nbsp;Title</th>
                  <th>Department</th>
                  <th>Assign&nbsp;Scholarship</th>
                </tr>
                  
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($boths as $both)
@if($both->CGPA == $both->cgpa)

 <!-- <td><i class="fa fa-check-circle" style="color:green;">&nbsp;&nbsp;Aproved</i></td> -->
           <?php 

               $q=DB::table('issuedcniclists')->where('Cnic','=',$both->cnic)->first();
                if(!empty($q)){                 
                  
                  continue;
              
                } else {

              $q="Aproved";
              
          }?>

            <tr>
                  <td><i class="fa fa-check-circle" style="color:green;">&nbsp;&nbsp;Aproved</i></td>
                  <td>{{$both->hec_id}}</td>
                  <td>{{$both->full_name}}</td>
                  <td>{{$both->cnic}}</td> 
                  <td>{{$both->enrollment_no}}</td>
                  <td>{{$both->degree_title}}</td>
                  <td>{{$both->department}}</td> 
                  <td><a type="submit" class="btn btn-sm btn-info" href="{{URL::to('assign')}}/{{$both->hec_id}}"> Assign Scholarship</a></td>

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