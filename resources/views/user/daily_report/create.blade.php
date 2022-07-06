@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {{ Form::open(['route' => 'report.store', 'method' => 'POST']) }}
      <div class="form-group form-size-small has-error">
        {{ Form::date('reporting_time', date('Y-m-d'), ['class' => 'form-control']) }}
        <span class="help-block"></span>
      </div>
      <div class="form-group has-error">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        <span class="help-block"></span>
      </div>
      <div class="form-group has-error">
        {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content']) }}
        <span class="help-block"></span>
      </div>
      {{ Form::submit('Add', ['class' => 'btn btn-success pull-right']) }}
    {{ Form::close() }}
  </div>
</div>

@endsection
