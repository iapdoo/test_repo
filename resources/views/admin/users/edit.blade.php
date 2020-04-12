@extends('admin.layouts.layout')
 @section('title')
 تعديل العضو 
 {{$user->name}}
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
                         <li class="breadcrumb-item active"><a href="{{url('/adminpanel/users/'.$user->id.'edit')}}"> </a> تعديل العضو 
 {{$user->name}}  </li>
                     </ol>
                 </div>
                 <div class="col-sm-6">
                     <h1 style="float: right">
                                        تعديل العضو 
                                         {{$user->name}}
                     </h1>
                 </div>
 
             </div>
         </div><!-- /.container-fluid -->
     </section>
 <div class="container">
         <div class="row">
             <div class="col-md-12 col-md-offset-2" style=" margin-bottom: 26px;">
                 <div class="panel panel-default">
                 <div class="card-header">
                         <h3 class="card-title" style="float: right;">
                         تعديل العضو 
                         {{$user->name}}
                         </h3>
                     </div>
                     <div class="panel-body">
 <!--
        {!! Form::model($user, ['method' => 'PATCH','action'=>['UsersController@update','id'=>$user->id]]) !!}
 -->
     {!! Form::open(['method' => 'PATCH','action'=>['UsersController@update','id'=>$user->id]]) !!}
                         @csrf
     <div class="form-group">
         {{Form::label('name', 'الاسم ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('name', $user->name,['class' => 'form-control','placeholder'=>'Name' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('email', 'البريد الالكتروني' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('email', $user->email ,['class' => 'form-control','placeholder'=>'Email' ,'style = "text-align: right;"'])}}
     </div>
  <!--    
     <div class="form-group">
             {{Form::label('admin', 'التحكم')}}
             {!!Form::select('admin' , ['0' => 'user', '1' => 'admin'], null ,['class'=>'form-control']) !!}
     </div>
   -->  
     <div class="form-group" style=" margin-bottom: 47px;">
         {{Form::label('admin', 'التحكم' , 'style = "float: right; margin-right: 10px;"')}}
         {!!Form::select('admin' , ['0' => 'user', '1' => 'admin'], $user->admin ,['class'=>'form-control','style = " text-align: right;"']) !!}
     </div>
 
 
 
          
     {{Form::submit('حفظ التعديل ',['class'=>'btn btn-primary' ,'style = "float: right; margin-right: 10px;"'])}}
 {!! Form::close() !!}
 




<br></br>

<div class="clearfix"></div>

<form class="form-horizontal" method="POST"   action="{{url('/adminpanel/users/'.$user->id.'/changepassword/')}}"
    style="
    border-top: 2px solid #c6ced6;
    padding-top: 20px; ">
     <div class="card-header">

                         <h3 class="card-title" style="float: right; margin-right: 10px;">
تغيير كلمه المرور الخاصه بالعضو
                         {{$user->name}}
                         </h3>
                     </div>
                        {{ csrf_field() }}
                        <input type="hidden" value="{$user->id}" name="user_id">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="float: right; text-align: end;">كلمه المرور </label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" style ='text-align: right;' required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style ='float: right; text-align: right; margin-right: 10px;'>
                                    تغيير كلمه المرور
                                </button>
                            </div>

                    </form>


















                     </div>
                 </div>
             </div>
         </div>
 </div>
 
 
 @endsection
 
 
 
 
 @section('footer')
 
 
 
 @endsection