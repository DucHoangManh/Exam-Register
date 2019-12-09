jQuery(document).ready(function($) {
    var teacher = new Bloodhound({
        remote: {
            url: 'search/teacher/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    var subject = new Bloodhound({
        remote: {
            url: 'search/subject/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    var student = new Bloodhound({
        remote: {
            url: 'search/student/%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#form .teacher").typeahead({
        hint: true,
        highlight: true,
        minLength: 1,
        maxItem: 10
    }, {
        source: teacher.ttAdapter(),
        name: 'teacherList',
        display: 'name',
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                $('.teacher_id').val(data.id);
                return '<p class="list-group-item">' + data.name + '</p>';
            }
        }
    });

    $("#form .subject").typeahead({
        hint: true,
        highlight: true,
        minLength: 1,
        maxItem: 10
    }, {
        source: subject.ttAdapter(),
        name: 'subjectList',
        display: 'name',
        templates: {
            empty: [
                '<div class="list-group-item">Không có kết quả phù hợp.</div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                $('.subject_id').val(data.id);
                $('.class_code').val(data.code);
                $('.class_credit').val(data.credit);
                return '<p class="list-group-item">' + data.name + ' - ' + data.code + '</p>';
            }
        }
    });

    $("#form .student").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: student.ttAdapter(),
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
                return '<p class="list-group-item">' + data.name + ' - ' + data.code + '</p>';
            }
        }
    });

    // afterSelect: function(data) {
    //         $('.student_id').val(data.id);
    //         $('.student_name').val(data.name);
    //         $('.student_code').val(data.code);
    //         gender = (data.gender == 0) ? 'Nam' : 'Nữ';
    //         $('.student_gender').val(gender);
    //         $('.student_birthday').html(data.birthday);
    //         console.log('sadas');
    //     },

    $('.add-student-btn').click(function (){
        var parent = $(this).parents('.student-add')[0];
        id = $(parent).find('.student_id').val();
        namee = $(parent).find('.student_name').val();
        code = $(parent).find('.student_code').val();
        gender = $(parent).find('.student_gender').val();
        birthday = $(parent).find('.student_birthday').html();
        addStudent(id, namee, code, gender, birthday);
        console.log();
    });

    var tableIndex = 0;
    function addStudent(id, name, code, gender, birthday) {
        var template = $('.student_clone').clone();
        var before = $('.student-add')[0];
        tableIndex++;  

        template.find('.tb-index').html(tableIndex);      
        template.find('.clone_id').val(id);
        template.find('.clone_name').html(name);
        template.find('.clone_code').html(code);
        template.find('.clone_gender').html(gender);
        template.find('.clone_birthday').html(birthday);
        
        template.show();
        template.removeClass('student_clone');
        template.insertBefore(before);
        // console.log(template[0]);
    }

});