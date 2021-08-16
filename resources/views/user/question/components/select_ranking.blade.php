<div>
  <select name="select_rank_type" id="ranking_area" class="form-control">
    <option value="{{ route('question.ranking.user_questions') }}">質問数が多いユーザー</option>
    <option value="{{ route('question.ranking.user_comments') }}">コメント数が多いユーザー</option>
    <option value="{{ route('question.ranking.category_questions') }}">質問数が多いタグ</option>
  </select>
</div>
