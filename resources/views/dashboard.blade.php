<x-app-layout>
    <div class="dashboard-layout">
        <!-- Stats -->
        <div class="dashboard-card">
            <h3>Quick Stats</h3>
            <div class="stat-grid">
                <div class="stat">
                    <h4>Total Sales</h4>
                    <p>₱ 128K</p>
                </div>
                <div class="stat">
                    <h4>Orders</h4>
                    <p>1,245</p>
                </div>
                <div class="stat">
                    <h4>New Users</h4>
                    <p>320</p>
                </div>
                <div class="stat">
                    <h4>Revenue</h4>
                    <p>₱ 89K</p>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="dashboard-card chart-card">
            <h3>Monthly Sales Overview</h3>
            <canvas id="salesChart"></canvas>
        </div>

        <!-- Recent Sales -->
        <div class="dashboard-card">
            <h3>Recent Sales</h3>
            <table>
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Dela Cruz</td>
                        <td>Blender Pro</td>
                        <td>₱3,200</td>
                        <td>Oct 16, 2025</td>
                    </tr>
                    <tr>
                        <td>Maria Santos</td>
                        <td>Microwave X</td>
                        <td>₱4,500</td>
                        <td>Oct 15, 2025</td>
                    </tr>
                    <tr>
                        <td>Rico Manalo</td>
                        <td>Coffee Maker</td>
                        <td>₱2,800</td>
                        <td>Oct 14, 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Notifications -->
        <div class="dashboard-card">
            
        </div>

        <div class="dashboard-card">

        </div>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                datasets: [{
                    label: 'Sales',
                    data: [40, 60, 80, 130, 60, 50, 60, 50, 50],
                    backgroundColor: '#f59e0b',
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: true }
                },
                scales: {
                    x: {
                        ticks: { color: '#d1d5db' },
                        grid: { color: '#2d2c2a' }
                    },
                    y: {
                        ticks: { color: '#d1d5db' },
                        grid: { color: '#2d2c2a' },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
