$(document).ready(function() {
  $(".add-test").click(function() {
    console.log($(this).data());
    var classId = $(this).data("class");
    var url = "api/class/get-test/";
    var testRow = $(".test-row").first();
    $(".test-table").empty();
    $(testRow).appendTo(".test-table");
    $(testRow).hide();
    $.ajax({
      type: "get",
      url: url + classId,
      success: function(data) {
        // console.log(data);
        $.each(JSON.parse(data), function(index, item) {
          var test = $(".test-row")
            .first()
            .clone();
          $(test).show();
          id = test.find(".test-index")[0];
          thu = test.find(".test-thu")[0];
          date = test.find(".test-date")[0];
          time = test.find(".test-time")[0];
          shift = test.find(".test-shift")[0];
          room = test.find(".test-room")[0];
          radio = test.find(".shift-check");
          $(id).html(item["thu"]);
          $(thu).html(item["Thu"]);
          $(date).html(item["date"]);
          $(time).html(item["time"]);
          $(shift).html(item["shift"]);
          $(room).html(item["room"]);
          $(radio).attr({ value: item["shift"] });
          $(test).appendTo(".test-table");
        });
      }
    });
  });
  $(".submit-registration").click(function() {
    console.log($(".shift-check:checked").val());
    // $.ajax({
    //   method: "POST",
    //   url:"",
    //   data: {student:$(this).data("student"), class: $(this).data("class"), shift: $(".shift-check:checked").val()}

    // });
  });
});
