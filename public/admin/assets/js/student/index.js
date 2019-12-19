jQuery(document).ready(function($) {
    var student = new Bloodhound({
        remote: {
            url: 'search/student/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: student.ttAdapter(),
        name: 'studentList',
        display: 'id',
        updater: {

        },
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            suggestion: function (data) {
                return '<p class="list-group-item"><a href="student/' + data.id + '">' + data.name  + '</a></p>';
            }
        }
    });
});