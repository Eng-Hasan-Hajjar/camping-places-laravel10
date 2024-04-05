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
                  <th>type</th>
                  <th>season</th>
                  <th>campGround_image</th>
                  </tr>
                 </thead>



                 <tbody >


        @foreach($data as $row)
  <tr>

   <td>{{ $row->es_name }}</td>
   <td>{{ $row->es_price }}</td>
   <td>@if($row->es_type== 0) "flat"
     @elseif ($row->es_type== 1) "villa"
    @else  "normal"
  @endif</td>
  <td>@if($row->es_rent== 0) "for buy"
     @elseif ($row->es_rent== 1) "for rent"
    @elseif ($row->es_rent== 2)  "for mort"
  @endif</td>
   <td> @if($row->es_status!=1) "active"
        @else "non active"
        @endif
   </td>
     <td><img src="{{ URL::to('/') }}/images/{{ $row->es_image }}" class="img-thumbnail" width="75" />
     </td>
              <td>
               <a href="{{route('es.show',$row->id)}}" class="btn btn-primary">Show</a>
               <a href="{{route('es.edit',$row->id)}}" class="btn btn-warning">Edit</a>
              </td>

              <td>

                   <form method="post" class="delete_form" action="
                                           {{action('EsController@destroy',$row->id)}}">
                        {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
              </td>

  </tr>
 @endforeach


                 </tbody>


              </table>
              {!! $data->links() !!}
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


































































































































