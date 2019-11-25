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
              <h3 class="card-title">All Students from HEC List</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Asign Role</th>
                </thead>
                <tbody>
               @foreach($users as $user)   
                <tr id="row{{$user->id}}">

                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                   
                  <td> @foreach($user->roles as $role) 
                            
                            {{$role->name}} 
 
                        @endforeach </td>
                  
                  <td><a type="submit" class="btn btn-sm btn-primary" href="{{URL::to('edit_user')}}/{{$user->id}}"> Edit </a></td>
                  <!-- <td><a type="submit" class="btn btn-sm btn-danger" href="{{URL::to('delete_user')}}/{{$user->id}}"> Delete </a></td> -->
                   <td><button class="deleteProduct btn btn-sm btn-danger" data-id="{{ $user->id }}" data-token="{{ csrf_token() }}">Delete</button></td>

<td>

<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal-{{$user->id}}">
  Assign Role
</button>

<!-- Modal -->
<div class="modal fade" id="myModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 273px; margin-top: 170px; margin-left: 65px; height: 281px;" >
      <div class="modal-header" style="padding-right: 180px; padding-bottom: 12px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="margin-left: -235px; height: 0px; padding-bottom: 14px;"><p style="margin-top: -11px;">Asign Role<p></h4>
      </div>
      <div class="modal-body">
        <form id="role-form-{{$user->id}}" action="{{URL::to('asign_role')}}/{{$user->id}}" method="POST">
        {{csrf_field()}}

         <div class="form-group">
             <select name="role" style="width: 212px; height: 113px;" multiple>
              @foreach($rols as $rol)
              <option value="{{$rol->id}}">{{$rol->name}}</option>
              @endforeach
             </select>
         </div>
         </form>
      </div>
      <div class="modal-footer" style="height: 0px;">
        <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary" onclick="$('#role-form-{{$user->id}}').submit()">Save</button>
      </div>
    </div>
  </div>
</div>

</td>


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