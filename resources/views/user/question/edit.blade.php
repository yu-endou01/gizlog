@extends ('common.user')
@section ('content')

<h1 class="brand-header">質問編集</h1>

<div class="main-wrap">
  <div class="container">
    <form>
      <div class="form-group">
        <select name='tag_category_id' class="form-control selectpicker form-size-small">
          <option value=""></option>
            <option value= ""></option>
        </select>
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="title" name="title" type="text" value="">
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        <textarea class="form-control" placeholder="Please write down your question here..." name="content" cols="50" rows="10"></textarea>
        <span class="help-block"></span>
      </div>
      <input name="confirm" class="btn btn-success pull-right" type="submit" value="update">
    </form>
  </div>
</div>

@endsection

