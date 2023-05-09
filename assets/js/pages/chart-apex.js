'use strict';
$(document).ready(function() {
    setTimeout(function() {
      
        var config = $('#toolbar').val();
        var toolbar = String(config) === "true";
        $(function() {
          var options = {
            series: [{
              name: 'Siempre',
              data: [44, 55, 41, 67, 22, 43]
            }, {
              name: 'Casi siempre',
              data: [13, 23, 20, 88, 13, 27]
            }, {
              name: 'Algunas veces',
              data: [11, 17, 15, 15, 21, 14]
            }, {
              name: 'Inexistente',
              data: [21, 7, 25, 13, 22, 84]
            }],
            chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            toolbar: {
              show: toolbar
            },
            zoom: {
              enabled: true
            },
            locales: [{
              name: 'en', // Se establece una opción de idioma en inglés
              options: {
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'], // Lista de meses en español
                shortMonths: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'], // Lista de meses abreviados en español
                days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'], // Lista de días en español
                shortDays: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'], // Lista de días abreviados en español
                toolbar: {
                  download: 'Descargar SVG', // Opción para descargar el gráfico en formato SVG en español
                  selection: 'Selección', 
                  selectionZoom: 'Zoom de selección', 
                  zoomIn: 'Acercar', 
                  zoomOut: 'Alejar', 
                  pan: 'Mover', 
                  reset: 'Restablecer zoom', 
                }
              }
            }]
          },
          responsive: [{
            breakpoint: 480,
            options: {
              legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
              }
            }
          }],
          plotOptions: {
            bar: {
              horizontal: false,
              borderRadius: 10,
              dataLabels: {
                total: {
                  enabled: true,
                  style: {
                    fontSize: '12px',
                    fontWeight: 900
                  }
                }
              }
            },
          },
          xaxis: {
            type: 'datetime',
            categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
              '01/05/2011 GMT', '01/06/2011 GMT'
            ],
          },
          legend: {
            position: 'right',
            offsetY: 40
          },
          fill: {
            opacity: 1
          }
          };
      
          var chart = new ApexCharts(
            document.querySelector("#planeacion"), 
            options
            );
          
          chart.render();
        });
        $(function() {
          var options = {
              chart: {
                  height: 320,
                  type: 'pie',
              },
              labels: ['Siempre', 'Casi siempre', 'Algunas veces', 'Inexistente'],
              series: [44, 55, 13, 43],
              colors: ["#4680ff", "#0e9e4a", "#ffba57", "#ff5252"],
              legend: {
                  show: true,
              },
              dataLabels: {
                  enabled: true,
                  dropShadow: {
                      enabled: false,
                  }
              },
              responsive: [{
                  breakpoint: 480,
                  options: {
                      legend: {
                          position: 'bottom'
                      }
                  }
              }]
          }
          var chart = new ApexCharts(
              document.querySelector("#generalChart"),
              options
          );
          chart.render();
      });
    }, 700);
});
