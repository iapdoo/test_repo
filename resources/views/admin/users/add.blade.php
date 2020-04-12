@extends('admin.layouts.layout')
@section('title')
اضف عضو
@endsection

@section('header')

@endsection






@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb " style="float: left">
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">الرئيسيه</a></li>
                        <li class="breadcrumb-item "><a href="{{url('/adminpanel/users')}}"> </a> التحكم في الاعضاء</li>
                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/users/create')}}"> </a> اضافه عضو جديد  </li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <h1 style="float: right">اضف عضو  </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">اضف عضو جديد</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-ad" action="{{ url('/adminpanel/users') }}" method="post" >
                            {{ method_field('POST') }}
                            <!-- rest of the form -->
                            @include('admin.users.form')
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')



@endsection
