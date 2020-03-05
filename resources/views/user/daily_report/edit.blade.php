@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    <form>
      <div class="form-group form-size-small has-error">
        <input type="date" class="form-control">
        <span class="help-block"></span>
      </div>
      <div class="form-group has-error">
        <input type="text" class="form-control" placeholder="Title">
        <span class="help-block"></span>
      </div>
      <div class="form-group has-error">
        <textarea class="form-control" placeholder="Content"></textarea>
        <span class="help-block"></span>
      </div>
      <button type="submit" class="btn btn-success pull-right">Update</button>
    </form>
  </div>
</div>

@endsection
