@extends ('common.admin')
@section ('content')

<h2 class="brand-header">個別勤怠編集</h2>
<div class="main-wrap">
  <div class="user-info-box clearfix">
    <div class="left-info">
      <img src="https://avatars.slack-edge.com/2019-01-25/532734044915_486bec3294a9f7b34291_192.png"><p class="user-name">Shohei Kanatani</p>
      <i class="fa fa-envelope-o" aria-hidden="true"><p class="user-email">gizumo@test.com</p></i>
    </div>
    <div class="right-info">
      <div class="my-info day-info">
        <p>編集日</p>
        <div class="study-hour-box clearfix">
          <div class="userinfo-box"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i></div>
          <p class="study-hour study-date"><span>07/03</span></p>
        </div>
      </div>
      <div class="my-info">
        <p>研修開始日</p>
        <div class="study-hour-box clearfix">
          <p class="study-hour study-date"><span>2019/07/02</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="request-box">
    <div class="request-title">
      <img src="https://avatars.slack-edge.com/2019-01-25/532734044915_486bec3294a9f7b34291_192.png" class="avatar-img">
      <p>修正申請内容</p>
    </div>
    <div class="request-content">
      申し訳ありません。出社の打刻を忘れてしまいました。
      9:55に出社いたしましたので修正お願いします。
    </div>
  </div>
  <div class="attendance-modify-box">
    <form>
      <div class="form-group">
        <input class="form-control" name="" type="time" value="10:56">
        <span class="help-block"></span>
      </div>
      <p class="to-time">to</p>
      <div class="form-group">
        <input class="form-control" name="end_time" type="time" value="19:26">
        <span class="help-block"></span>
      </div>
      <button type="submit" class="btn btn-modify">修正</button>
    </form>
    <form>
      <button type="submit" class="btn btn-danger">欠席</button>
    </form>
  </div>
</div>

@endsection

