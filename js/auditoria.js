const API_URL = window.location.origin.concat('/bibliotecaixmi').concat('/backend/api.php');
// ------------step-wizard-------------
$(document).ready(function () {
    // $('.nav-tabs > li a[title]').tooltip('show');
    
    // Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(" #form-1 .next-step").click(function (e) {

        var active = $('#section-1 .wizard .nav-tabs li.active');
        // active.next().removeClass('disabled');
        $('#section-1 .nav-tabs li.active').removeClass('active');
        let el = active.next();
        el.removeClass('disabled');
        el.addClass('active');
        nextTab(active, '#form-1');
    });
    $("#form-1 .prev-step").click(function (e) {

        var active = $('#section-1 .wizard .nav-tabs li.active');
        $('#section-1 .nav-tabs li.active').removeClass('active');
        let el = active.prev();
        el.addClass('disabled');
        el.addClass('active');
        prevTab(active, '#form-1');
    });
    
    // Section 2
    $("#form-2 .next-step").click(function (e) {

        let active = $('#section-2 .wizard .nav-tabs li.active');
        $('#section-2 .nav-tabs li.active').removeClass('active');
        let el = active.next();
        el.removeClass('disabled');
        el.addClass('active');
        nextTab(active, '#form-2');
    });
    $("#form-2 .prev-step").click(function (e) {

        let active = $('#section-2 .wizard .nav-tabs li.active');
        $('#section-2 .nav-tabs li.active').removeClass('active');
        let el = active.prev();
        el.addClass('disabled');
        el.addClass('active');
        prevTab(active, '#form-2');
    });
});

function nextTab(elem, id = '') {
    let href = $(elem).next().find('a[data-toggle="tab"]');
    $(id.concat(' .form-title')).html(`${href.attr('data-title')}`);
    
    href.attr('href', href.attr('aria-controls'));
    href.click();
    href.removeAttr('href');
}

function prevTab(elem, id = '') {
    let href = $(elem).prev().find('a[data-toggle="tab"]');
    $(id.concat(' .form-title')).html(`${href.attr('data-title')}`);
    href.attr('href', href.attr('aria-controls'));
    href.click();
    href.removeAttr('href');
}

var formData = new FormData();
var answers = new Array();
var isDone = false;

document.querySelector('#form-1').addEventListener('submit', (e) => {
    e.preventDefault();
    
    if (isDone) return;
    
    formData.append('id_biblioteca', e.target.getAttribute("data-id-biblioteca"));
    formData.append('function', 'answers');
    
    document.querySelectorAll('#form-1 input[type="radio"]').forEach(radio => {
        if (radio.checked) {
            answers.push({'fk_pregunta': radio.getAttribute('data-id'), 'respuesta': radio.getAttribute('data-answer')});
        }
    });
    document.querySelector('#section-1').style.display = 'none';
    document.querySelector('#section-2').style.display = 'block';
});

document.querySelector('#form-2').addEventListener('submit', (e) => {
    e.preventDefault();
    
    if (isDone) { saveAnswers(); return; }
    
    document.querySelectorAll('#form-2 input[type="radio"]').forEach(radio => {
        if (radio.checked) {
            answers.push({'fk_pregunta': radio.getAttribute('data-id'), 'respuesta': radio.getAttribute('data-answer')});
        }
    });
    isDone = true;
    saveAnswers();
});

function saveAnswers()
{
    formData.append('respuestas', JSON.stringify(answers));
    fetch(API_URL, {
        method: 'POST',
        body: formData
    }
    ).then(response => response.text()
    ).then(data => {
        console.log(data);
    }
    ).catch(error => {
        console.error(error);
    });
}