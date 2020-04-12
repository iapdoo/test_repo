@extends('admin.layouts.layout')
@section('title')
اضف عقار جديد
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
                        <li class="breadcrumb-item "><a href="{{url('/adminpanel/bu')}}"> </a> التحكم في العقارات</li>
                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/bu/create')}}"> </a> اضف عقار جديد  </li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <h1 style="float: right">اضف عقار جديد  </h1>
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
                        <form class="form-ad" action="{{ url('/adminpanel/bu') }}" method="post" >
                            {{ method_field('POST') }}
                            <!-- rest of the form -->
                            @include('admin.bu.form')
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')



@endsection
