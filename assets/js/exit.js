$('#buttonExit').click(function(event){
    var exit = "exit";
    var ruta = "exit="+exit;
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
    location.href = 'sugerencias.php';
}
AOS.init();