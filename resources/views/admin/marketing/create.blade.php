@extends('admin.default')

@section('page-header')
  <br>  Marketing <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['MarketingController@store'],
        'files' => true
      ])
    !!}

    @include('admin.marketing.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    
  {!! Form::close() !!}
  

@stop

