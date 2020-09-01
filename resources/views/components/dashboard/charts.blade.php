<x-ui.card class="mt-9">
    <div class="px-4 py-5 sm:p-6">
        <canvas id="yearlyLineChart" width="100%"></canvas>
    </div>
</x-ui.card>

@push('scripts')
<script>
    var ctx = document.getElementById('yearlyLineChart').getContext('2d');
    var yearlyLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
            datasets: [{
                data: [343, 319, 192, 71, 318, 726, 813, 532, 432, 518, 818, 523],
                label: "Revenue",
                fill: true,
                borderColor: "#38A169",
                backgroundColor: 'rgba(57, 162, 106, 0.1)',
                borderWidth: 1
            },
                {
                    data: [423, 32, 213, 131, 423, 391, 497, 286, 482, 582, 481, 392],
                    label: "Expenses",
                    fill: true,
                    borderColor: "#F56565",
                    backgroundColor: 'rgba(245, 102, 102, 0.1)',
                    borderWidth: 1
                },
                {
                    data: [243, 119, 292, 11, 318, 226, 613, 532, 412, 218, 618, 223],
                    label: "Profit",
                    fill: true,
                    borderColor: "#D69E2E",
                    backgroundColor: 'rgba(214, 158, 46, 0.1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endpush
