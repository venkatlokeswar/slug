
@extends('layout.index')
@section('content')

<div class='col-lg-12' style="text-align: center">
    <div class="col-lg-12">
        <h1 class="logo">SLUG</h1>
    </div>
    <div class="col-lg-12">
          <div class="col-lg-8 col-lg-push-3">
              {!!Form::open([ 'url'=> route('login'),'class' => 'login-form'  ])!!}
              <div class="row col-lg-12">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <div class="form-group col-lg-4" id="input-username">
                        {!! Form::text('email','',[ 'class' => 'form-control no-border has-error',
                                                               'placeholder' => 'Username',
                                                               'id' => 'username']) !!}
                                                               <div class="error-message" id="error-username">
                                                                   <i class="carrot"></i>
                                                                   <p id="user-error-message" class="error-font">Some dummy text</p>
                                                               </div>
                   </div>              
                    <div class="form-group col-lg-4" id="input-password">
                        {!! Form::password('password',[ 'class' => 'form-control no-border',
                                                               'placeholder' => 'Password',
                                                               'id' => 'password']) !!}
                                                               <div class="error-message" id="error-password">
                                                                   <i class="carrot"></i>
                                                                   <p id="user-error-message" class="error-font">Some dummy text</p>
                                                               </div>
                   </div>   
                  <div class="form-group col-lg-2">
                        {!! Form::submit('Login',[ 'class' => 'btn btn-primary col-lg-12',
                                                   'id' => 'login-button']) !!}
                                                   <span class="loading"><img src="images/loading.svg" alt="Kiwi standing on oval" width="25"></span>
                   </div>  
              </div>
              
              {!!Form::close()!!}
          </div>

    </div>
            <div>
                <div class="alert alert-danger col-lg-5 col-lg-push-4" id="invalid-credientials" style="margin-left:-3%;display:none">
                    <strong>Warning!</strong> <span> <!-- Error Message --></span>
               </div>
        </div>
               
</div>
@endsection
