@extends('Admin.Partials.datatable')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laptop </h1>
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
            <div class="card-header row justify-content-between">
              <div class="col-4"><h3 class="card-title">All Laptops</h3></div>
              <div class="col-6">
                
                 <form class="form-inline" action="{{URL::to('upload_laptop_barcode')}}" method="POST" enctype="multipart/form-data">
                 {{csrf_field()}} 
                 <label class="m-1" style=" color: #575977;">Add New laptop Code</label> 
                 <input class="m-1" type="text" name="Barcode" class="form-control" style="padding: 0%;height: 0%; width: 150px;">
                    @if ($errors->has('Barcode'))
                    <div style="color:red;">{{ $errors->first('Barcode') }}</div>
                    @endif
                 <input  class=" m-1 btn btn-sm btn-success" type="submit" value="Enter" name="submit" style="padding: 10%; padding-top: 0%; padding-bottom: 0%;">
               </form>
              </div>
              


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Barcode</th>
                  <th>Product</th>
                  <th>Delete</th>
                  
                 
                 <!--  <th>Edit</th>
                  <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($values as $value)
                <tr id="row{{$value->id}}">

                  <td>{{$value->id}}</td>
                  <td>{{$value->Barcode}}</td>
                  <td>Laptop Bag</td>
                  
                 <!--  <td><a type="submit" class="btn btn-sm btn-primary" href="#"> Edit </a></td>
                  <td><a type="submit" class="btn btn-sm btn-danger" href="#"> Delete </a></td> -->
                  <td><button class="deleteProduct btn btn-sm btn-danger" data-id="{{$value->id}}" data-token="{{ csrf_token() }}">Delete</button></td>

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
  <script type="text/javascript">
  $(".deleteProduct").click(function(){
        var id = $(this).data("id");
        var token = $(this).data("token");
        if(confirm('Are you sure want to delete')){
        $.ajax(
        {
            url: '{{URL::to('delete_user')}}'+'/'+id,
            type: 'GET',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function ()
            {
              var successmsg= '<div class="col-md-12"><h1>Record has been deleted successfully!</h1></div>';
                 $('#mouzam').html(successmsg).show();//ye line delete ho kr wahan msg show kwaye gi jahan hum es ki id ko call krain gy.. or hum nai es ki id #mouzam ko sb se oper call kiya hai.. 

                console.log("it Work");//jab hum inspect element krty hain tu ye line console mein show ho gi jis se humain ye pta chal jaye ga k cursor yahan tk aa geya hai..
                
                $('#row'+id).fadeOut(300,function(){$(this).remove()}); //ye wali line oper <tr> mein rowId le kr ja rhi hai k ajax es row id k against record del kray..
            }
        });
      }

        console.log("It failed");//ye line b same console.log("it Work"); jesi hi hai jo k es liye likhii hai k jb inspect element kr k console mein humain ye line naza aye tu humain pta chal jaye k cursor yahan tk aya tha..
   
    });</script>

  @endsection