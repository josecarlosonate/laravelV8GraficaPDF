
// capturando elementos del DOM 
let caja = document.getElementById('myChart').getContext('2d');
let btnPDF = document.getElementById('btnPDF');


// instancio y muestro los datos de la grafica 
let myChart = new Chart(caja,{
    type: 'bar',
    data: {
        labels: ['2012', '2013', '2014', '2015', '2016', '2018'],        
        datasets: [{                  
        label: 'Numero de unidades',
        data: [120, 60, 50, 180, 120, 100],    
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],            
        borderWidth: 1,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
        display: true,
        fontSize: 22,
        text: 'Grafico de ventas por Año'
        }
    }
});

// tomo los datos de la grafica
const datosGrafica = `{
    type: 'bar',
    data: {
        labels: ['2012', '2013', '2014', '2015', '2016', '2018'],        
        datasets: [{                  
        label: 'Numero de unidades',
        data: [120, 60, 50, 180, 120, 100],      
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],          
        borderWidth: 1,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
        display: true,
        fontSize: 22,
        text: 'Grafico de ventas por Año'
        }
    }
}
`;

// agregar evento click al boton y llamado de funcion exportarPDF
btnPDF.addEventListener('click', exportarPDF);


// funcion para exportar en pdf 
function exportarPDF(){

    // codifico datos traidos de la grafica para pasar por la url
    let datosGraficaEncode = encodeURIComponent(datosGrafica);

    // abrir nueva ventana para mostrar PDF 
    window.open('https://quickchart.io/chart?format=pdf&c='+datosGraficaEncode);
}