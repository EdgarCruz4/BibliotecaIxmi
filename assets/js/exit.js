$('#buttonExit').click(function(event){
    var exit = "exit";
    var ruta = "exit="+exit;
    $.ajax({
        url: 'assets/user.php',
        type: 'POST',
        data: ruta,
        success:function(data){
            location.href = 'index.php';
        }
    })
})