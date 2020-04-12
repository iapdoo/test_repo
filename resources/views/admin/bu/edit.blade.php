@extends('admin.layouts.layout')
 @section('title')
 تعديل العقار
 {{$bul->bu_name}}
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
                         <li class="breadcrumb-item "><a href="{{url('/adminpanel/bu')}}"> </a> التحكم في العقار</li>
                         <li class="breadcrumb-item active"><a href="{{url('/adminpanel/bu/'.$bul->id.'edit')}}"> </a> تعديل العقار
 {{$bul->bu_name}}  </li>
                     </ol>
                 </div>
                 <div class="col-sm-6">
                     <h1 style="float: right">
                                        تعديل العقار
                                         {{$bul->bu_name}}
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
                         تعديل العقار
                         {{$bul->bu_name}}
                         </h3>
                     </div>
                     <div class="panel-body">
 <!--
        {!! Form::model($bul, ['method' => 'PATCH','action'=>['BuController@update','id'=>$bul->id]]) !!}
 -->
     {!! Form::open(['method' => 'PATCH','action'=>['BuController@update','id'=>$bul->id]]) !!}
                         @csrf
     <div class="form-group">
         {{Form::label('bu_name', 'اسم العقار ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_name', $bul->bu_name,['class' => 'form-control','placeholder'=>'اسم العقار' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('bu_rooms', 'عدد الغرف ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_rooms', $bul->bu_rooms,['class' => 'form-control','placeholder'=>'عدد الغرف' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('bu_price', 'السعر ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_price', $bul->bu_price,['class' => 'form-control','placeholder'=>'السعر' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group" style=" margin-bottom: 47px;">
         {{Form::label('bu_rant', 'نوع العمليه' , 'style = "float: right; margin-right: 10px;"')}}
         {!!Form::select('bu_rant' ,  ['ايجار ' => 'ايجار', 'تمليك' => 'تمليك'], $bul->bu_rant ,['class'=>'form-control','style = " text-align: right;"']) !!}
     </div>
     <div class="form-group">
         {{Form::label('bu_square', ' المساحه ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_square', $bul->bu_square,['class' => 'form-control','placeholder'=>'المساحه ' ,'style = "text-align: right;"'])}}
     </div>

     <div class="form-group" style=" margin-bottom: 47px;">
         {{Form::label('bu_type', 'نوع العقار ' , 'style = "float: right; margin-right: 10px;"')}}
         {!!Form::select('bu_type' , ['شقه'=>'شقه','فيله '=>'فيله','شاليه'=>'شاليه'], $bul->bu_type ,['class'=>'form-control','style = " text-align: right;"']) !!}
     </div>
     <div class="form-group" style=" margin-bottom: 47px;">
         {{Form::label('bu_status', 'نوع العقار ' , 'style = "float: right; margin-right: 10px;"')}}
         {!!Form::select('bu_status' ,  ['مفعل' => 'مفعل', 'غير مفعل' => 'غير مفعل' , ], $bul->bu_status ,['class'=>'form-control','style = " text-align: right;"']) !!}
     </div>
     <div class="form-group">
         {{Form::label('bu_meta', 'الكلمات الدلاليه ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_meta', $bul->bu_meta,['class' => 'form-control','placeholder'=>'bu_meta' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('bu_small_dis', 'وصف العقار لمحركات البحث ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_small_dis', $bul->bu_small_dis,['class' => 'form-control','placeholder'=>'bu_small_dis' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('bu_langtude', 'خط الطول' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_langtude', $bul->bu_langtude,['class' => 'form-control','placeholder'=>'bu_langtude' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('bu_latetude', 'دائره العرض' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::text('bu_latetude', $bul->bu_latetude,['class' => 'form-control','placeholder'=>'bu_small_dis' ,'style = "text-align: right;"'])}}
     </div>
     <div class="form-group">
         {{Form::label('bu_large_dis', ' وصف مطول للعقار ' ,'style = "float: right; margin-right: 10px;"')}}
         {{Form::textarea('bu_large_dis', $bul->bu_large_dis,['class' => 'form-control','placeholder'=>'bu_large_dis' ,'style = "text-align: right;"'])}}
     </div>

     {{Form::submit('حفظ العقار ',['class'=>'btn btn-primary' ,'style = "float: right; margin-right: 10px;"'])}}
 {!! Form::close() !!}



                     </div>
                 </div>
             </div>
         </div>
 </div>


 @endsection




 @section('footer')



 @endsection
