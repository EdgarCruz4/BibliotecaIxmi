$('#buttonExit').click(function(event){
    var exit = "exit";
    var ruta = "exit="+exit;
    console.log('hola');
    $.ajax({
        url: 'assets/user.php',
        type: 'POST',
        data: ruta,
        success:function(data){
            document.cookie = "currentLibraryId=; path=/;";
            location.href = 'index.php';
        }
    })
})
function currentLibraryId(libraryId){
    document.cookie = "currentLibraryId="+libraryId+"; path=/";
    location.href = 'admin/sugerencias.php';
}
// Iniciador de animación en la pantalla de bibliotecas 
AOS.init();