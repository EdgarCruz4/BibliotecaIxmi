$('#buttonExit').click(function (event) {
    console.log('exit');

    var exit = "exit";
    var ruta = "exit=" + exit;
    $.ajax({
        url: 'assets/user.php',
        type: 'POST',
        data: ruta,
        success: function (data) {
            location.href = 'index.php';
        }
    });
});

// Iniciador de animación en la pantalla de bibliotecas 
AOS.init();