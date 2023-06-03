// Iniciamos lectura de funciones esenciales para la vista 
$(document).ready(function () {
    startReading();
});

// Vista predeterminada para la grafica y comentarios de la vista
function startReading(){
    var today = $("#today").val();
    // Variable indica la primera lectura de la vista
    var flag = false;
    var suggestion = false;
    var user = $("#user").val();
    var ruta = "today="+today+"&flag="+flag+"&user="+user+"&suggestion="+suggestion;
    // Insert de la grafica
    $.ajax({
        url: '../assets/updateGraph.php',
        type: 'POST',
        data: ruta,
        success:function(data){
            $("#dataTest").val(data);
            readChart(flag);
        }
    })
    // Insert de los comentarios
    suggestion = true;
    var ruta = "today="+today+"&flag="+flag+"&user="+user+"&suggestion="+suggestion;
    $.ajax({
        url: '../assets/updateGraph.php',
        type: 'POST',
        data: ruta,
        success:function(data){
            $('#suggestions').append(data);
        }
    })
}

// Evento que funciona con la interacción del select
$(function(){
    $("#tyme").on('change', function(){
        var div = document.getElementById('suggestions');
        var tyme = $("#tyme").val();
        var user = $("#user").val();
        // Se selecciona de botón select
        var flag = true;
        var suggestion = false;
        var ruta = "tyme="+tyme+"&flag="+flag+"&user="+user+"&suggestion="+suggestion;
        // Actualización de graficas
        $.ajax({
        url: '../assets/updateGraph.php',
        type: 'POST',
        data: ruta,
        success:function(data){
            $("#dataTest").val(data);
            readChart(flag);
            }
        })
        // Actualización de comentarios
        suggestion = true;
        var ruta = "tyme="+tyme+"&flag="+flag+"&user="+user+"&suggestion="+suggestion;
        $.ajax({
        url: '../assets/updateGraph.php',
        type: 'POST',
        data: ruta,
        success:function(data){
            div.innerHTML = '';
            $("#suggestions").append(data);
            }
        })
    })
})

// Función que grafica los resultados de la auditoria
function readChart(flag){
    var dataTest = $("#dataTest").val();
    var title = "";
    if(flag === false){
        title = "Mes actual";
    }

    let data = dataTest.split('-');
    var excellent = parseInt(data[0]);
    var good = parseInt(data[1]);
    var regular = parseInt(data[2]);
    var nonExistent = parseInt(data[3]);

    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChartColumn)
    function drawChartColumn() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" } ],
            ["Siempre", excellent, "#3366CC"],
            ["Casi siempre", good, "#109618"],
            ["Algunas veces", regular, "#FF9900"],
            ["Inexistente", nonExistent, "color: #DC3912"]
        ])
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2])
        var options = {
            title: title,
            bar: {groupWidth: "60%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("bar"));
        chart.draw(view, options);
        document.getElementById('barImg').value=chart.getImageURI()
    }
}