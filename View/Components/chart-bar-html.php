<script src="/assets/demo/chart.min.js"></script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Bar Chart Example
    var ctx = document.getElementById("graficoChaves");
    var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N"],
        datasets: [{
        label: "Chaves Alugadas",
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [<?= $chavesBlocos['A']?>, 
            <?= $chavesBlocos['B']?>, 
            <?= $chavesBlocos['C']?>, 
            <?= $chavesBlocos['D']?>, 
            <?= $chavesBlocos['E']?>, 
            <?= $chavesBlocos['F']?>, 
            <?= $chavesBlocos['G']?>, 
            <?= $chavesBlocos['H']?>, 
            <?= $chavesBlocos['I']?>, 
            <?= $chavesBlocos['J']?>, 
            <?= $chavesBlocos['K']?>,
            <?= $chavesBlocos['L']?>,
            <?= $chavesBlocos['M']?>,
            <?= $chavesBlocos['N']?>],
        }],
    },
    options: {
        scales: {
        xAxes: [{
            time: {
            unit: 'bloco'
            },
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 20
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: <?= max($chavesBlocos) + 1 ?>,
            maxTicksLimit: 5
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });
</script>