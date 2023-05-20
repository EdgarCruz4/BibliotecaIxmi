const API_URL = window.location.origin.concat('/bibliotecaixmi').concat('/backend/api.php');

// ------------step-wizard-------------
$(document).ready(function () {
    $(function () {
    $('[data-toggle="tooltip"]').tooltip();
    });
    
    // $('.nav-tabs > li a[title]').tooltip('show');
    
    // Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });
    
    $('li.section-2').hide();

    $("#form-encuesta .next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        // active.next().removeClass('disabled');
        $('.nav-tabs li.active').removeClass('active');
        let el = active.next();
        if (el.hasClass('section-2'))
        {
            $('li.section-1').hide();
            $('li.section-2').show();
        }
        el.removeClass('disabled');
        el.addClass('active');
        nextTab(active, '#form-encuesta');
    });
    $("#form-encuesta .prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        $('.nav-tabs li.active').removeClass('active');
        let el = active.prev();
        if (el.hasClass('section-1'))
        {
            $('li.section-2').hide();
            $('li.section-1').show();
        }
        el.addClass('disabled');
        el.addClass('active');
        prevTab(active, '#form-encuesta');
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

document.querySelector('#form-encuesta').addEventListener('submit', (e) => e.preventDefault() );

document.querySelector('#form-encuesta').onsubmit = function(e) {
    if (!e.target.checkValidity()) {
        $('#encuesta-finalizada').on('show.bs.modal', function (e) {
        var modal = $(this);
        modal.find('.modal-body h6').text('Aún no has completado la encuesta.');
        }).modal('show');
        e.target.classList.add('was-validated');
        return false;
    }
    
    formData.append('id_biblioteca', e.target.getAttribute("data-id-biblioteca"));
    formData.append('function', 'answers');
    
    document.querySelectorAll('#form-encuesta input[type="radio"]').forEach(radio => {
        if (radio.checked) {
            answers.push({'fk_pregunta': radio.getAttribute('data-id'), 'respuesta': radio.getAttribute('data-answer')});
        }
    });
    if (answers.length > 0 && saveAnswers()) {
        $('#encuesta-finalizada').on('hidden.bs.modal', function (e) {
            window.location.href = '../auditoria.php';
        }).modal('show');
    }
    else
    {
        $('#encuesta-finalizada').on('show.bs.modal', function (e) {
            var modal = $(this)
        }).modal('show');
    }
            modal.find('.modal-body h6').html('Ocurrió un error.\nPorfavor intenta más tarde.');
};

async function saveAnswers()
{
    formData.append('respuestas', JSON.stringify(answers));
    await fetch(API_URL, {
        method: 'POST',
        body: formData
    }
    ).then(response => response.json()
    ).then(data => {
        if (data?.status == 'ok') return true;
        else return false;
    }
    ).catch(error => {
        return false;
    });
}