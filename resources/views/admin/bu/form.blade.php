
    @csrf

    <div class="form-group row">


        <div class="col-md-8">
            <input id="bu_name" type="text" class="form-control @error('bu_name') is-invalid @enderror" name="bu_name" value="{{ old('bu_name') }}" required autocomplete="bu_name" autofocus>

            @error('bu_name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_name" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('اسم العقار ') }}</label>
    </div>
    <div class="form-group row">

        <div class="col-md-8">
            <input id="bu_rooms" type="text" class="form-control @error('bu_rooms') is-invalid @enderror" name="bu_rooms" value="{{ old('bu_rooms') }}" required autocomplete="bu_rooms">

            @error('bu_rooms')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_rooms" class="col-md-4 col-form-label " style="direction: ltr ">{{ __('عدد الغرف') }}</label>
    </div>
    <div class="form-group row">

        <div class="col-md-8">
            <input id="bu_rooms" rows="1" class="form-control @error('bu_price') is-invalid @enderror" name="bu_price" value="{{ old('bu_price') }}" required autocomplete="bu_price">

            @error('bu_price')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="email" class="col-md-4 col-form-label " style="direction: ltr ">{{ __('سعر العقار') }}</label>
    </div>

    <div class="form-group">
        <div class=" col-lg-4" style="float: right;">
            {{Form::label('bu_rant', 'نوع العمليه' )}}
        </div>
        <div class="col-lg-8">
            {!!Form::select('bu_rant' , ['ايجار ' => 'ايجار', 'تمليك' => 'تمليك'], $bul->bu_type ,['class'=>'form-control','style = " text-align: right;"']) !!}
        </div>
    </div>
    <div class="form-group row">


        <div class="col-md-8">
            <input id="bu_square" type="text" class="form-control @error('bu_square') is-invalid @enderror" name="bu_square" value="{{ old('bu_square') }}" required autocomplete="bu_square" autofocus>

            @error('bu_square')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_square" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('مساحه العقار  ') }}</label>
    </div>
    <div class="form-group">
        <div class=" col-lg-4" style="float: right;">
            {{Form::label('bu_type', 'نوع العقار' )}}
        </div>
        <div class="col-lg-8">
            {!!Form::select('bu_type',['شقه'=>'شقه','فيله '=>'فيله','شاليه'=>'شاليه'],$bul->bu_type,['class'=>'form-control','style = " text-align: right;"']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class=" col-lg-4" style="float: right;">
            {{Form::label('bu_status', 'حاله  العقار' )}}
        </div>
        <div class="col-lg-8">
            {!!Form::select('bu_status' , ['مفعل' => 'مفعل', 'غير مفعل' => 'غير مفعل' , ], $bul->bu_status ,['class'=>'form-control','style = " text-align: right;"']) !!}
        </div>
    </div>
    <div class="form-group row">


        <div class="col-md-8">
            <input id="bu_meta" type="text" class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta" value="{{ old('bu_meta') }}" required autocomplete="bu_meta" autofocus>

            @error('bu_meta')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_meta" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('الكلمات الدلاليه  ') }}</label>
    </div>
    <div class="form-group row">


        <div class="col-md-8">
            <input id="bu_small_dis" type="text" class="form-control @error('bu_small_dis') is-invalid @enderror" name="bu_small_dis" value="{{ old('bu_small_dis') }}" required autocomplete="bu_small_dis" autofocus>

            @error('bu_small_dis')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_small_dis" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('وصف العقار لمحركات البحث  ') }}</label>
    </div>
    <div class="form-group row">


        <div class="col-md-8">
            <input id="bu_langtude" type="text" class="form-control @error('bu_langtude') is-invalid @enderror" name="bu_langtude" value="{{ old('bu_langtude') }}" required autocomplete="bu_langtude" autofocus>

            @error('bu_langtude')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_langtude" class="col-md-4 col-form-label" style="direction: ltr ">{{ __(' خط الطول ') }}</label>
    </div>
    <div class="form-group row">


        <div class="col-md-8">
            <input id="bu_latetude" type="text" class="form-control @error('bu_latetude') is-invalid @enderror" name="bu_latetude" value="{{ old('bu_latetude') }}" required autocomplete="bu_latetude" autofocus>

            @error('bu_latetude')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_latetude" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('دائره العرض  ') }}</label>
    </div>
    <div class="form-group row">


        <div class="col-md-8">
            <textarea  id="bu_large_dis" rows="5"   class="form-control @error('bu_large_dis') is-invalid @enderror" name="bu_large_dis" value="{{ old('bu_large_dis') }}" required autocomplete="bu_large_dis" autofocus> </textarea>

            @error('bu_large_dis')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="bu_large_dis" class="col-md-4 col-form-label" style="direction: ltr ">{{ __(' وصف مطول للعقار') }}</label>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-warning" style="float: right; margin-right: 349px;margin-top: 13px;">
                {{ __('تسجيل العقار ') }}
            </button>
        </div>
    </div>
