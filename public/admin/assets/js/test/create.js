jQuery(document).ready(function($) {
    var room = new Bloodhound({
        remote: {
            url: 'search/room/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#form .room").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: room.ttAdapter(),
        name: 'roomList',
        display: 'id',
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

    var shift = new Bloodhound({
        remote: {
            url: 'search/shift/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#form .shift").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: shift.ttAdapter(),
        name: 'shiftList',
        display: 'id',
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
                return '<p class="list-group-item">' + data.code  + '</p>';
            }
        }
    });
    var classSubject = new Bloodhound({
        remote: {
            url: 'search/class/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#form .class_code").typeahead({
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
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<p class="list-group-item">' + data.code  + '</p>';
            }
        }
    });
});