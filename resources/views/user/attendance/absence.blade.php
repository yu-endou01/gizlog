@extends ('common.user')
@section ('content')

<h2 class="brand-header">欠席登録</h2>
<div class="main-wrap">
  <div class="container">
    <form>
      <div class="form-group">
        <textarea class="form-control" placeholder="欠席理由を入力してください。" name="" cols="50" rows="10"></textarea>
      </div>
      <input name="confirm" class="btn btn-success pull-right" type="submit" value="登録">
    </form>
  </div>
</div>

@endsection

