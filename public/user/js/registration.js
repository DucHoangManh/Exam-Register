$(document).ready(function() {
  $('.add-test').click(function() {
      var classId = $(this).data('class');
      var registerId = $(this).data('register');
      var url     = "api/class/get-test/";
      var testRow = $(".test-row").first();
      $(".test-table").empty();
      $(testRow).appendTo(".test-table");
      $(testRow).hide();

      $('#register-modal').find('input[name*="register_id"]').first().val(registerId);


      $.ajax({
          type : 'get',
          url  : url + classId,
          success:function(data){
              $.each(JSON.parse(data), function(index, item) {
                  var test = $(".test-row")
          .first()
          .clone();
                  $(test).show();
                  id = test.find('.test-index').html(index + 1);
                  thu = test.find('.test-thu').html(item['thu']);
                  date = test.find('.test-date').html(item['date']);
                  time = test.find('.test-time').html(item['time']);
                  shift = test.find('.test-shift').html(item['shift']);
                  room = test.find('.test-room').html(item['room']);
                  loc = test.find('.test-location').html(item['location']);
                  status = test.find('.test-status').html(item['status']);
                  test_id = test.find('input[name*="test_id"]').val(item['test_id']);
                  $(test).appendTo('.test-table');
              });
          }
        });
  });
});