@extends ('common.user')
@section ('content')

<h1 class="brand-header">ユーザー編集</h1>
<div class="main-wrap">
  <div class="container">
    <form>
      <div class="form-group form-size-small has-error">
        <input class="form-control-file" type="file">
        <span class="help-block"></span>
      </div>
      <div class="form-group has-error">
        <input class="form-control" type="text" placeholder="Name">
        <span class="help-block"></span>
      </div>
      <div class="form-group has-error">
        <textarea class="form-group" placeholder="Please write down your self-introduction here..."></textarea>
        <span class="help-block"></span>
      </div>
      <input class="btn btn-success pull-right" type="submit" value="Update">
    </form>
    <span class="help-block"></span>
  </div>
</div>

@endsection