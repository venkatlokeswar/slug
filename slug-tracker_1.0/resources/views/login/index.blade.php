@extends('layout.index')
@section('content')
<div class='col-lg-12'>
    <div class="col-lg-12">
        <h1 class="logo">SLUG</h1>
    </div>
    <div class="col-lg-12">
          <div class="col-lg-6 col-lg-push-3">
              {!!Form::open([ 'url'=> route('login'),'class' => 'login-form'  ])!!}
              <div class="row col-lg-12">
                    <div class="form-group col-lg-5" id="input-username">
                        {!! Form::text('username','',[ 'class' => 'form-control no-border has-error',
                                                               'placeholder' => 'Username',
                                                               'id' => 'username']) !!}
                                                               <div class="error-message" id="error-username">
                                                                   <i class="carrot"></i>
                                                                   <p id="user-error-message" class="error-font">Some dummy text</p>
                                                               </div>
                   </div>              
                    <div class="form-group col-lg-5" id="input-password">
                        {!! Form::password('password',[ 'class' => 'form-control no-border',
                                                               'placeholder' => 'Password',
                                                               'id' => 'password']) !!}
                                                               <div class="error-message" id="error-password">
                                                                   <i class="carrot"></i>
                                                                   <p id="user-error-message" class="error-font">Some dummy text</p>
                                                               </div>
                   </div>   
                  <div class="form-group col-lg-2">
                        {!! Form::button('Login',[ 'class' => 'btn btn-primary',
                                                   'id' => 'login-button']) !!}
                   </div>  
              </div>

              {!!Form::close()!!}
          </div>
    </div>
</div>
@endsection