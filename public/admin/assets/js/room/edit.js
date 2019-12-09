jQuery(document).ready(function($) {
    var location = new Bloodhound({
        remote: {
            url: 'search/location/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#form .location").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: location.ttAdapter(),
        name: 'studentList',
        display: 'name',
        updater: {

        },
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<p class="list-group-item">' + data.name  + '</p>';
            }
        }
    });
});