@extends('admin.layouts.layout')
@section('title')
تعديل اعدادات الموقع
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
                        <li class="breadcrumb-item active "><a href="{{url('/adminpanel/sitsetting')}}"> </a> تعديل اعدادات الموقع </li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <h1 style="float: right">تعديل اعدادات الموقع
  </h1>
                </div>

                {{getsetting()}}

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">تعديل اعدادات الموقع
</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
<form action="{{url('/adminpanel/sitsetting')}} " method="post">
    {{csrf_field()}}
                        @foreach($sitSetting as $setting)

                                    <div class="form-group col-lg-10"  style="float: left ;text-align: right;">
                                        @if($setting->type == 0)
                                            {{Form::text( $setting->namesitteng , $setting->value, ['class' => 'form-control' ,'style = "text-align: right;"'])}}
                                        @else
                                            {{Form::textarea( $setting->namesitteng , $setting->value, ['class' => 'form-control ' ,'style = "text-align: right;"'])}}

                                        @endif
                                            @if ($errors->has('$setting->namesitteng'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('$setting->namesitteng') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                                    <div class="form-group col-lg-2" style="float: right;text-align: right; font-weight: bold" >
                                        {{$setting->slug}}
                                    </div>
                        @endforeach
    <div class="clearfix"></div>
                     <button name="submit" class="btn btn-primary " type="submit" style="float: right;font-weight: 500;">
                       <i class="fa fa-save" style="    padding-right: 10px;"></i>
                               حفظ اعدادات الموقع
                      </button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

