import './bootstrap';
import './main.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import $ from "jquery";


function book_field(field, w, t, weekday, time_from, time_to, user_id){
    $("#w").val(w);
    $("#t").val(t);
    $("#time_from").val(time_from);
    $("#time_to").val(time_to);
    $("#date").val(weekday);
    $("#field").val(field);

    console.log($('#new_record').serialize());
    $.ajax({
        type: 'POST',
        url: '/booking',
        data: $('#new_record').serialize(),
        success: function (data) {
            console.log(data);
            $('#div'+w+t+field).parent().css('background','#ec5964');
            $('#div'+w+t+field).html(
                '<span id="{{ $w.$t }}2">Занято</span>'
            );
        },
        error: function (data) {
            alert(data);
            return false;
        }
    });

    return false;
}
window.book_field = book_field;

