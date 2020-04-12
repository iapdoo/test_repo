@extends('layouts.app')
@section('title')
    كل العقارات
@endsection


@section('header')

    {!! Html::style('cus/buall.css') !!}
@endsection



@section('content')


    <div class="container">
        <div class="row profile">

            <div class="col-md-9">
                <div class="profile-content">
                    @include('website.bu.sharefill' , ['bu' =>$buall])
                    <div class="text-center">
                        @if(! isset($search))
                        {{$buall->appends(Request::except('page'))->render()}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <div class="profile-sidebar profile-usertitle-job" style="background-color: #f6f9fb;">
                        <h1 style="text-align: center;">بحث متقدم </h1>
                        {!! Form::open(['url'=>'search' , 'action' => 'post']) !!}
                        <ul class="nav">
                            <li>
                                 {!! Form::text("bu_price" ,null , [ 'class'=>'form-control', 'placeholder'=>'سعر العقار '  ]) !!}
                            </li>

                            <li>
                                {!! Form::text("bu_square",null , ['class'=>'form-control', 'style'=>
    'margin-top: 10px;',  'placeholder'=>'المساحه'  ]) !!}
                            </li>
                            <li>
                                {!! Form::submit("ابحث", ['class'=>'banner_btn' , 'style'=>
    'margin: 15px 95px 0px  0px;',]) !!}

                            </li>
                        </ul>
                        {!! Form::close()!!}



                    </div>
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-job">
                            <h1> خيارات العقارات</h1>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="/showallbulding" style=" font-size: 20px;">
                                    <i class="fa fa-arrow-circle-left" style="color: #428bca; font-size: 20px;"></i>
                                  كل العقارات
                                </a>
                            </li>
                            <li class="active" >
                                <a href="/forrent" style=" font-size: 20px;">
                                    <i class="fa fa-arrow-circle-left" style="color: #428bca; font-size: 20px;"></i>
                                    ايجار
                                </a>
                            </li >
                            <li  class="active">
                                <a href="/forbay" style=" font-size: 20px;">
                                    <i class="fa fa-arrow-circle-left" style="color: #428bca; font-size: 20px;"></i>
                                    تمليك
                                </a>
                            </li>
                            <li  class="active">
                                <a href="/type/شاليه" style=" font-size: 20px;">
                                    <i class="fa fa-arrow-circle-left" style="color: #428bca;font-size: 20px; "></i>
                                    شاليه
                                </a>
                            </li>
                            <li  class="active">
                                <a href="/type/شقه" style=" font-size: 20px;">
                                    <i class="fa fa-arrow-circle-left" style="color: #428bca; font-size: 20px;"></i>
                                    شقه
                                </a>
                            </li>
                            <li  class="active">
                                <a href="/type/فيله" style=" font-size: 20px;">
                                    <i class="fa fa-arrow-circle-left" style="color: #428bca; font-size: 20px;"></i>
                                    فيله
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
        </div>
    </div>
@endsection
