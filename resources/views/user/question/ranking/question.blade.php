@extends ('common.user')
@section ('content')

<h2 class="brand-header">ランキング&nbsp;「質問数が多いユーザー」</h2>
<div class="main-wrap">
  <div class="content-wrapper table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="rows">
          <th class="col-xs-1">Rank</th>
          <td class="col-xs-1"></td>
          <th class="col-xs-2">User</th>
          <th class="col-xs-4">Question Count</th>
        </tr>
      </thead>
      <tbody>
          <tr class="rows">
            <td class="col-xs-1"></td>
            <td class="col-xs-1"><img src="" class="avatar-img"></td>
            <td class="col-xs-2"></td>
            <td class="col-xs-4"></td>
          </tr>
      </tbody>
    </table>
    <div aria-label="Page navigation example" class="text-center">
    </div>
  </div>
</div>

@endsection
