@extends ('common.admin')
@section ('content')

<h2 class="brand-header">個別勤怠作成</h2>
<div class="main-wrap">
  <div class="user-info-box clearfix">
    <div class="left-info">
      <img src="https://avatars.slack-edge.com/2019-01-25/532734044915_486bec3294a9f7b34291_192.png"><p class="user-name">Shohei Kanatani</p>
      <i class="fa fa-envelope-o" aria-hidden="true"><p class="user-email">gizumo@test.com</p></i>
    </div>
    <div class="right-info">
      <div class="my-info">
        <p>研修開始日</p>
        <div class="study-hour-box clearfix">
          <p class="study-hour study-date"><span>2019/07/02</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="attendance-modify-box">
    <form>
      <div class="form-group date-form">
        <input class="form-control" name="" type="date">
      </div>
      <div class="form-group">
        <input class="form-control" name="" type="time">
      </div>
      <p class="to-time">to</p>
      <div class="form-group">
        <input class="form-control" name="" type="time">
      </div>
      <button class="btn btn-modify" type="submit">作成</button>
    </form>
    <form>
      <button class="btn btn-danger" type="submit">欠席</button>
    </form>
  </div>
</div>

@endsection



