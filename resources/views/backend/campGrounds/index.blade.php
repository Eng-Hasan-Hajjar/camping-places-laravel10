@extends('admin.layouts.layout')

@section('title')
   control of camping places
@endsection

@section('header')

<!-- DataTables -->
 {{Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}
 {{Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}

@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="jumbotron text-center">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>control of camping places</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}"> Home </a></li>


              <li class="breadcrumb-item active"><a href="{{url('/adminpanel/campGround')}}"> control of camping places </a></li>
              <li class="breadcrumb-item active"><a href="{{url('/adminpanel/campGround/create')}}"> Add new camping place </a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-24">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All camping places</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-hover">
                <thead>

                  <tr>

                  <th>name</th>
                  <th>description</th>
                  <th>country</th>
                  <th>city</th>
                  <th>region</th>
                  <th>cm_type</th>
                  <th>cm_season</th>
                  <th>campGround_image</th>
                  </tr>
                 </thead>



                 <tbody >


        @foreach($campGrounds as $row)
  <tr>

   <td>{{ $campGrounds->name }}</td>
   <td>{{ $campGrounds->description }}</td>
   <td>{{ $campGrounds->country }}</td>
   <td>{{ $campGrounds->city }}</td>
   <td>{{ $campGrounds->region }}</td>
   <!--    //  جبل-0 - بحر-1 -   -2 - غابة            -->

   <td>{{ $campGrounds->cm_type }}</td>

   <td>@if($campGrounds->cm_type== 0) "جبل"
     @elseif ($campGrounds->cm_type== 1) "بحر"
    @else  "غابة"
  @endif</td>
     <!--   spring 0 - summer  1 - fall 2 - winter 3         -->
  <td>@if($campGrounds->cm_season== 0) "spring"
     @elseif ($campGrounds->cm_season== 1) "summer"
    @elseif ($campGrounds->cm_season== 2)  "fall"
    @else  "winter"
  @endif</td>

     <td><img src="{{ URL::to('/') }}/images/{{ $campGrounds->campGround_image }}" class="img-thumbnail" width="75" />
     </td>
              <td>
               <a href="{{route('campGrounds.show',$campGrounds->id)}}" class="btn btn-primary">Show</a>
               <a href="{{route('campGrounds.edit',$campGrounds->id)}}" class="btn btn-warning">Edit</a>
              </td>

              <td>

                   <form method="post" class="delete_form" action="
                                           {{action('CampGroundController@destroy',$campGrounds->id)}}">
                        {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
              </td>

  </tr>
 @endforeach


                 </tbody>


              </table>
              {!! $campGrounds->links() !!}
            </div>
            <!-- /.card-body -->
          </div>





        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection




@section('footer')

<!-- DataTables -->
{{Html::script('admin/plugins/datatables/jquery.dataTables.min.js')}}
{{Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}
{{Html::script('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}
{{Html::script('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}


@endsection


































































































































