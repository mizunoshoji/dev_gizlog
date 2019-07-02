@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => ['dailyreport.update', $dailyReport->id], 'method' => 'put']) !!}
      <input class="form-control" name="user_id" type="hidden" value="4">
      <div class="form-group form-size-small">
        {!! Form::input('date', 'reporting_time', $dailyReport->reporting_time, ['class' => 'form-control']) !!}
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::input('text', 'title', $dailyReport->title, ['class' => 'form-control demanded']) !!}
        @if ($errors->any())
            @foreach ($errors->get('title') as $message)
                <p class="validate-error-msg">{{ $message }}</p>
            @endforeach
        @endif
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('content', $dailyReport->content, ['class' => 'form-control demanded']) !!}
        @if ($errors->any())
            <script>
              var required = document.getElementsByClassName('demanded');
              var required = Array.from(required);
              required.forEach(function(required) {
                  console.log(required);
                  required.setAttribute('class', 'form-control required-data');
              });
            </script>
            @foreach ($errors->get('content') as $message)
                <p class="validate-error-msg">{{ $message }}</p>
            @endforeach
        @endif
      <span class="help-block"></span>
      </div>
      <button type="submit" class="btn btn-success pull-right">Update</button>
    {!! Form::close() !!}
  </div>
</div>

@endsection
