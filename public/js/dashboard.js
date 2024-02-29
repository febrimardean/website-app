/* globals Chart:false, feather:false */

(function () {
    'use strict'

    feather.replace({
        'aria-hidden': 'true'
    })

    // Graphs
    var ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ],
            datasets: [{
                data: [
                    15339,
                    21345,
                    18483,
                    24003,
                    23489,
                    24092,
                    12034
                ],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    })
})()

document.addEventListener("DOMContentLoaded", function () {
    // Tampilkan alert
    var loginSuccessAlert = document.getElementById('loginSuccessAlert');
    loginSuccessAlert.style.display = 'block';

    // Atur timeout untuk menghilangkan alert setelah 5 detik
    setTimeout(function () {
        var alert = new bootstrap.Alert(loginSuccessAlert);
        alert.close();
    }, 5000);
});
