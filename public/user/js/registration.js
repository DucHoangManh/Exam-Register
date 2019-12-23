$(document).ready(function() {
    $('.add-test').click(function() {
        var classId = $(this).data('class');
        var url     = "api/class/get-test/";

        $.ajax({
            type : 'get',
            url  : url + classId,
            success:function(data){
                console.log(data);
                $.each(JSON.parse(data), function(index, item) {
                    var test = $('.test-row').clone();
                    $(test).show();
                    id = test.find('.test-index')[0];
                    thu = test.find('.test-thu')[0];
                    date = test.find('.test-date')[0];
                    time = test.find('.test-time')[0];
                    shift = test.find('.test-shift')[0];
                    room = test.find('.test-room')[0];
                    $(id).html(item['thu']);
                    $(thu).html(item['Thu']);
                    $(date).html(item['date']);
                    $(time).html(item['time']);
                    $(shift).html(item['shift']);
                    $(room).html(item['room']);
                    $(test).appendTo('.test-table');
                });
            }
          });
    });
});