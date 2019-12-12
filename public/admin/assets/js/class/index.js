jQuery(document).ready(function($) {
    var classSubject = new Bloodhound({
        remote: {
            url: 'search/class/%QUERY%',
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
        source: classSubject.ttAdapter(),
        name: 'classSubjectList',
        display: 'id',
        updater: {

        },
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            suggestion: function (data) {
                return '<p class="list-group-item"><a href="class/' + data.id + '">' + data.code  + '</a></p>';
            }
        }
    });
});