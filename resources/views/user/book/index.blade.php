@extends ('common.user')
@section ('content')

<h2 class="brand-header">書籍購入情報一覧</h2>
<div class="main-wrap">
  <div class="btn-wrapper">
    <form>
      <div class="form-group has-error">
        <input type="file" class="form-control">
        <span class="help-block"></span>
        <button type="submit" class="btn btn-icon"><i class="fa fa-file"></i></button>
      </div>
    </form>
  </div>
  <div class="content-wrapper table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="row">
          <th class="col-xs-1">購入者</th>
          <th class="col-xs-4">書籍タイトル</th>
          <th class="col-xs-2">著者</th>
          <th class="col-xs-2">出版社</th>
          <th class="col-xs-1">価格</th>
          <th class="col-xs-2">購入日</th>
        </tr>
      </thead>
      <tbody>
        <tr class="row">
          <td class="col-xs-1"><img src="" alt="" class="avatar-img"></td>
          <td class="col-xs-4"></td>
          <td class="col-xs-2"></td>
          <td class="col-xs-2"></td>
          <td class="col-xs-1"></td>
          <td class="col-xs-2"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection
