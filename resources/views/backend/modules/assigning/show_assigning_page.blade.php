@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assigining List</h1>
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
              <h3 class="card-title">All Students from Assigning List</h3>




            </div>
            <!-- /.card-header -->
            <div class="card-body">

              @foreach($assigns as $assign)
<form class="form-signin" action="{{URL::to('submit_assigning_page')}}/{{$assign->hec_id}}" method="POST" id="register-form">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row"> <!-- inner row -->
        <div class="col-xl-2">
        <label for="inputText"><h6>HEC ID</h6></label>
        <div class="form-control">{{ $assign->hec_id }}</div>  
      </div>


        <div class="col-xl-2">
        <label for="inputText"><h6>Full Name</h6></label>
        <div class="form-control">{{ $assign->full_name }}</div> 
        <br> 
      </div>

        <div class="col-xl-2">
        <label for="inputText"><h6>CNIC</h6></label>
        <div class="form-control">{{ $assign->cnic }}</div>  
      </div>

         <div class="col-xl-2">
        <label for="inputText"><h6>Enrollement No.</h6></label>
        <div class="form-control">{{ $assign->enrollment_no }}</div>  
      </div>

      <div class="col-xl-2">
        <label for="inputText"><h6>Degree Title</h6></label>
        <div class="form-control">{{ $assign->degree_title }}</div>  
      </div>
          
      <div class="col-xl-2">
        <label for="inputText"><h6>Department</h6></label>
        <div class="form-control">{{ $assign->department }}</div>  
      </div>

      <div class="col-xl-2">
        <label for="inputEmail"><h6>Scan Laptop Barcode</h6></label>
        <input type="text" name="laptop_barcode" class="form-control"  value="{{old('laptop_barcode')}}">
        @if ($errors->has('laptop_barcode'))
          <div style="color:red;">{{ $errors->first('laptop_barcode') }}</div>
        @endif
        <br>
        </div>

        <div class="col-xl-2">
        <label for="inputEmail"><h6>Scan Bag Barcode</h6></label>
        <input type="text" name="bag_barcode" class="form-control"  value="{{old('bag_barcode')}}">
         @if ($errors->has('bag_barcode'))
          <div style="color:red;">{{ $errors->first('bag_barcode') }}</div>
          @endif
        <br>
        </div>

        <div class="col-xl-2">
        <label for="inputEmail"><h6>Scan Evo Barcode</h6></label>
        <input type="text" name="evo_barcode" class="form-control" value="{{old('evo_barcode')}}">
         @if ($errors->has('evo_barcode'))
           <div style="color:red;">{{ $errors->first('evo_barcode') }}</div>
          @endif
        <br>
        </div>



      </div> <!-- inner row -->

        <button class="btn btn-lg btn-info btn-block" type="submit" class="fieldgroup" style="width: 34%; margin-left: 33%;">Assign Scholarship</button>
    

      </form>
@endforeach
              
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