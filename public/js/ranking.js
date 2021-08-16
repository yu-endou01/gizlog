$(function() {

  var currentUrl = location.origin + location.pathname;

  $('#ranking_area').val(currentUrl);

  $('#ranking_area').change(function () {
    location.href = $('option:selected').val();
  });
});
