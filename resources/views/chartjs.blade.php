
<html>

<head>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <canvas id="myChart"></canvas>
    </div>
</div>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My First dataset',
                        {{-- backgroundColor: 'rgb(255, 99, 132)', --}}
                        borderColor: 'rgb(255, 99, 132)',
                        data: [20, 10, 5, 2, 20, 30, 45],
                        backgroundColor:[
                            '#000',
                            '#22222A',
                            '#efefef',
                            'red',
                            'green',
                            'yellow',
                            'pink',
                            'blue'
                        ]
                    }]
                },
                    options: {}
            });
//             var ctx = document.getElementById('myChart').getContext('2d');
// var chart = new Chart(ctx, {
//     // The type of chart we want to create
//     type: 'line',

//     // The data for our dataset
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//         datasets: [{
//             label: 'My First dataset',
//             backgroundColor: 'rgb(255, 99, 132)',
//             borderColor: 'rgb(255, 99, 132)',
//             data: [0, 10, 5, 2, 20, 30, 45]
//         }]
//     },

//     // Configuration options go here
//     options: {}
// });
        </script>
</body>
</html>



