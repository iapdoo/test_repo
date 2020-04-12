

    @extends('admin.layouts.layout')
@section('title')
    التحكم في العقراتا
@endsection

@section('header')
    {!! Html::Style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') !!}
    @endsection






@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb " style="float: left">

                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/bu')}}"> </a> التحكم في العقارات اء</li>
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">الرئيسيه
                                <i class="nav-icon fas fa-tachometer-alt" style="float: right;margin-top: 6px; margin-left: 4px;"></i>
                            </a></li>
                    </ol>
                </div>
                 <div class="col-sm-6">
        <h1 style="float: right">التحكم في العقارات </h1>
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
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                            <th> التحكم </th>
                             <th>الحاله</th>
                            <th> اضيف في</th>
                            <th>  النوع </th>
                            <th> السعر</th>
                            <th>اسم العقار</th>
                            <th>#</th>


                            </tr>
                            </thead>
                            <tbody>
                           @foreach($bul as $bu)
                            <tr>
                            <td>
                                 <a class="btn btn-danger" href="{{url ('/adminpanel/bu/'.$bu->id.'/delete')}}"> ازاله  </a>
                                 <a class="btn btn-primary" href="{{ url ('/adminpanel/bu/'. $bu->id .'/edit') }} "> تعديل </a>

                                </td>
                                <td>{{$bu->bu_status}}</td>
                                <td>{{$bu->created_at}}</td>
                                <td>{{$bu->bu_type}}</td>
                                <td>{{$bu->bu_price}}</td>
                                <td>{{ $bu->bu_name }}</td>
                                 <td>{{ $bu->id }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> التحكم </th>
                                <th>الحاله</th>
                                <th> اضيف في</th>
                                <th>  النوع </th>
                                <th> السعر</th>
                                <th>اسم العقار</th>
                                <th>#</th>

                            </tr>
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
    @endsection









@section('footer')
    {!! Html::script('admin/plugins/datatables/jquery.dataTables.js') !!}
    {!! Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') !!}

    <script type="text/javascript">
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        })
    </script>
@endsection


