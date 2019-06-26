@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'dailyreport.store', 'method' => 'post']) !!}
      <div class="form-group form-size-small">
        {!! Form::input('date', 'reporting_time', null, ['class' => 'form-control']) !!}
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::input('text','title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
        @if ($errors->any())
            @foreach ($errors->get('title') as $message)
                <p>{{ $message }}</p>
            @endforeach
        @endif
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Contents']) !!}
        @if ($errors->any())
            @foreach ($errors->get('content') as $message)
                <p>{{ $message }}</p>
            @endforeach
        @endif

        <span class="help-block"></span>
      </div>
      {!! Form::submit('add', ['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection
