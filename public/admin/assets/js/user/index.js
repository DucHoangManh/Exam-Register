jQuery(document).ready(function($) {
    var user = new Bloodhound({
        remote: {
            url: 'search/user/%QUERY%',
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
        source: user.ttAdapter(),
        name: 'usertList',
        display: 'id',
        updater: {

        },
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            suggestion: function (data) {
                return '<p class="list-group-item"><a href="user/' + data.id + '">' + data.username  + '</a></p>';
            }
        }
    });
});