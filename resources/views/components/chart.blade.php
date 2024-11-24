<div style="width: 30%; margin: auto;">
    <canvas id="voteChart"></canvas>
</div>

@push('addScript')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chartLabels = @json($labels);
            const chartData = @json($data);

            const ctx = document.getElementById('voteChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: chartLabels, // Nama Paslon
                    datasets: [{
                        label: 'Jumlah Suara',
                        data: chartData, // Jumlah suara per paslon
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                        title: {
                            display: true,
                            text: 'Distribusi Suara Paslon'
                        }
                    }
                }
            });
        });
    </script>
@endpush
