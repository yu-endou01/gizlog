@extends('common.admin')
@section ('content')

<h2 class="brand-header">日報一覧</h2>
<div class="main-wrap clearfix">
  <div class="content-wrapper table-responsive">
    {{-- 日報検索機能 --}}
    <form class="form-inline">
      <div class="btn-wrapper">
        <input type="date" class="form-control form-size-small"> 
        {{-- ユーザー検索機能 --}}
        <input type="select" class="form-control selectpicker">
        <button type="submit" class="btn">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </form>
    <table class="table">
      <thead>
        <tr class="row">
          <th class="col-xs-1">タイトル</th>
          <th class="col-xs-4">ユーザー名
            <a href="#" class="dailyreport-wrapper btn sort-btn">
              <i class="fa fa-angle-up"></i>
            </a>
            <a href="#" class="dailyreport-wrapper btn sort-btn">
              <i class="fa fa-angle-down"></i>
            </a>
          </th>
          <th class="col-xs-5">作成日
            <a href="#" class="dailyreport-wrapper btn sort-btn">
              <i class="fa fa-angle-up"></i>
            </a>
            <a href="#" class="dailyreport-wrapper btn sort-btn">
              <i class="fa fa-angle-down"></i>
            </a>
          </th>
          <th class="col-xs-2">詳細</th>
        </tr>
      </thead>
      <tbody>
        <tr class="row">
          <td class="col-xs-1"></td>
          <td class="col-xs-4"></td>
          <td class="col-xs-5"></td>
          <td class="col-xs-2">
            <a href="#" class="btn btn-sucssess">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection
