@extends('layouts.default')
@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">{{ trans('pages.login.header') }}</h3>
        </div>
        <div class="panel-body">
          {{ Form::open([ 'route' => 'session.store' ] ) }}
            <fieldset>
              <div class="form-group">
                  {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('pages.login.form.email'))) }}
              </div>
            
              <div class="form-group">
                  {{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('pages.login.form.password'))) }}
              </div>
              {{ Form::submit(trans('pages.login.form.login'), array('class' => 'btn btn-lg btn-success btn-block' )) }}
            </fieldset>
          {{ Form::close() }}          
        </div>
      </div>
    </div>
  </div>  
@stop⏎ 