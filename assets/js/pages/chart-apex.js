'use strict';
$(document).ready(function() {
    setTimeout(function() {
        $(function() {
            var options = {
                series: [{
                name: 'Siempre',
                data: [44, 55, 41, 67, 22, 43, 48, 45, 12, 45, 12, 16, 10]
              }, {
                name: 'Casi siempre',
                data: [13, 23, 20, 88, 13, 27, 44, 55, 41, 67, 22, 43, 48]
              }, {
                name: 'Algunas veces',
                data: [11, 17, 15, 15, 21, 14, 4, 55, 41, 67, 22, 43, 48]
              }, {
                name: 'Inexistente',
                data: [21, 7, 25, 13, 22, 84, 55, 41, 67, 22, 43, 48, 45]
              }],
                chart: {
                type: 'bar',
                height: 350,
                stacked: true,
                toolbar: {
                  show: true
                },
                zoom: {
                  enabled: true
                }
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
                        fontSize: '13px',
                        fontWeight: 900
                      }
                    }
                  }
                },
              },
              xaxis: {
                type: 'text',
                categories: [
                    'Inciso 1','Inciso 2','Inciso 3','Inciso 4',
                    'Inciso 5','Inciso 6','Inciso 7','Inciso 8',	
                    ' Inciso 9','Inciso 10','Inciso 11','Inciso 12',	
                    'Inciso 13','Inciso 14'
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
                document.querySelector("#chart1"), 
                options
                );
              chart.render();
        });
    }, 700);
});
