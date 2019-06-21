@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'dailyreport.store', 'method' => 'post']) !!}
      {!! Form::hidden('user_id', null, ['class' => "form-control"]) !!}
      <div class="form-group form-size-small">
        {!! Form::input('date', 'reporting_time', null, ['class' => 'form-control']) !!}
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::input('text','title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'Contents']) !!}
        <span class="help-block"></span>
      </div>
      {!! Form::submit('add', ['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection
