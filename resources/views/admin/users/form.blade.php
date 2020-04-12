
    @csrf

    <div class="form-group row">


        <div class="col-md-8">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="name" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('الاسم ') }}</label>
    </div>

    <div class="form-group row">

        <div class="col-md-8">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="email" class="col-md-4 col-form-label " style="direction: ltr ">{{ __('عنوان البريد الالكتروني') }}</label>
    </div>

    <div class="form-group row">


        <div class="col-md-8">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <label for="password" class="col-md-4 col-form-label " style="direction: ltr ">{{ __('كلمه المرور') }}</label>
    </div>

    <div class="form-group row">


        <div class="col-md-8">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <label for="password-confirm" class="col-md-4 col-form-label " style="direction: ltr ">{{ __('تاكيد كلمه المرور') }}</label>

    </div>
    <div class="form-group col-md-8" style=" margin-bottom: 47px;">
         {{Form::label('admin', 'التحكم' , 'style = "float: right; margin-right: 10px;"')}}
         {!!Form::select('admin' , ['0' => 'user', '1' => 'admin'], $user->admin ,['class'=>'form-control','style = " text-align: right;"']) !!}
     </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-warning" style="float: right; margin-right: 349px;margin-top: 13px;">
                {{ __('تسجيل العضويه ') }}
            </button>
        </div>
    </div>
