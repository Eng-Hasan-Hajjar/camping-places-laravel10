@extends(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin') ? 'admin.layouts.layout' : 'admin.layouts.layoutvisitor')

@section('title')
التحكم
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')


                <div class="container hcontainer">
                    <div class="card hcard helement hcard-body">

                        <div class="card-header  "><p  class="float-right">جميع الأماكن</p></div>
                        <div class="card-header">
                            @if(Auth::user()->can('isVisitor') )
                                 <a href="{{ route('dashboard') }}" class=" btn btn-success float-left">لوحة التحكم  </a>
                            @endif
                            <a href="{{ route('campground.create') }}" class=" btn btn-success float-right">إنشاء جديد</a>
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

                                        <th>campGround_image</th>


                                        <th>control</th>
                                        @if(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin'))

                                          <th>del</th>
                                        @endif
                                    </tr>
                                </thead>



                                <tbody>


                                    @foreach ($campGrounds as $row)
                                        <tr>

                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->country }}</td>
                                            <td>{{ $row->city }}</td>
                                            <td>{{ $row->region }}</td>
                                            <!--    $array=['wood','desire','island','mountain'];           -->




                                            <td><img src="{{ URL::to('/') }}/images/{{ $row->campGround_image }}"
                                                    class="img-thumbnail" width="75" />
                                            </td>
                                            <td>
                                                <a href="{{ route('campground.show', $row->id) }}"
                                                    class="btn btn-primary">Show</a>
                                                @if(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin'))

                                                        <a href="{{ route('campground.edit', $row->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                @endif

                                            </td>

                                            @if(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin'))
                                                <td>
                                                    <form method="post" class="delete_form"
                                                        action="{{ route('campground.destroy', $row->id) }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE" />
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            @endif
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


@endsection

@section('footer')
    <!-- DataTables -->
    {{ Html::script('admin/plugins/datatables/jquery.dataTables.min.js') }}
    {{ Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}
    {{ Html::script('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}
    {{ Html::script('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}
@endsection
