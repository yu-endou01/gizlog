@extends ('common.admin')
@section ('content')

<h1 class="brand-header">日報詳細</h1>
<div class="main-wrap">
  <div class="panel panel-success">
    <div class="panel-heading">
      [user name]の日報
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <tbody>
          <tr>
            <th class="table-column">タイトル</th>
            <td class="td-text"></td>
          </tr>
          <tr>
            <th class="table-column">内容</th>
            <td class='td-text'></td>
          </tr>
          <tr>
            <th class="table-column">作成日</th>
            <td class='td-text'></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
