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

function getCookie(cookie) {
  let name = cookie + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


// Iniciador de animación en la pantalla de bibliotecas 
AOS.init();