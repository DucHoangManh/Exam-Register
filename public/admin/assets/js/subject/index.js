jQuery(document).ready(function($) {
    var subject = new Bloodhound({
        remote: {
            url: 'search/subject/%QUERY%',
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
        source: subject.ttAdapter(),
        name: 'subjectList',
        display: 'id',
        updater: {

        },
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            suggestion: function (data) {
                return '<p class="list-group-item"><a href="subject/' + data.id + '">' + data.name  + '</a></p>';
            }
        }
    });
});