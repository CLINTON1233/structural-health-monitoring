@extends('components.LayoutDashboard')

@section('title', 'Dashboard')

@section('content')
<div class="p-4 sm:p-6">
    <!-- Welcome Section -->
    <div class="mb-6 sm:mb-8">
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl sm:rounded-2xl p-4 sm:p-6 text-white shadow-lg">
            <h2 class="text-xl sm:text-2xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h2>
            <p class="text-blue-100 text-sm sm:text-base">Structural Health Monitoring System - Real-time Strain & Load Monitoring</p>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-6 mb-6 sm:mb-8">
        <!-- Active Strain Gauges -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-3 sm:p-4 lg:p-6 border border-gray-200 col-span-1">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-green-100 rounded-lg mr-2 sm:mr-3 lg:mr-4">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-600">Strain Gauges</p>
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900" id="activeStrainGauges">8</p>
                </div>
            </div>
        </div>

        <!-- Load Cells -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-3 sm:p-4 lg:p-6 border border-gray-200 col-span-1">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-blue-100 rounded-lg mr-2 sm:mr-3 lg:mr-4">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-600">Load Cells</p>
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900" id="activeLoadCells">4</p>
                </div>
            </div>
        </div>

        <!-- Structural Health -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-3 sm:p-4 lg:p-6 border border-gray-200 col-span-1">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-purple-100 rounded-lg mr-2 sm:mr-3 lg:mr-4">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-600">Health Status</p>
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold text-green-600" id="healthStatus">94%</p>
                </div>
            </div>
        </div>

        <!-- Data Points -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-3 sm:p-4 lg:p-6 border border-gray-200 col-span-1">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-orange-100 rounded-lg mr-2 sm:mr-3 lg:mr-4">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-600">Data Points</p>
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900" id="dataPoints">856K</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Real-time Monitoring Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
        <!-- Strain Gauge Monitoring -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Strain Gauge Monitoring</h3>
                <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full" id="strainStatus">Normal</span>
            </div>

            <!-- Strain Gauge Chart -->
            <div class="mb-4 bg-gray-50 rounded-lg p-2 h-32">
                <canvas id="strainMiniChart"></canvas>
            </div>

            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                        <span>Current Strain (με)</span>
                        <span id="currentStrain">125.6</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" id="strainBar" style="width: 42%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3 text-center">
                    <div class="bg-blue-50 rounded-lg p-3">
                        <p class="text-xs text-gray-600">Min Strain</p>
                        <p class="text-sm font-bold text-gray-900" id="minStrain">-45.2</p>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-3">
                        <p class="text-xs text-gray-600">Max Strain</p>
                        <p class="text-sm font-bold text-gray-900" id="maxStrain">356.8</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load Cell Monitoring -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Load Cell Monitoring</h3>
                <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full" id="loadStatus">Normal</span>
            </div>

            <!-- Load Cell Chart -->
            <div class="mb-4 bg-gray-50 rounded-lg p-2 h-32">
                <canvas id="loadMiniChart"></canvas>
            </div>

            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                        <span>Current Load (kg)</span>
                        <span id="currentLoad">245.3</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" id="loadBar" style="width: 61%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3 text-center">
                    <div class="bg-green-50 rounded-lg p-3">
                        <p class="text-xs text-gray-600">Capacity</p>
                        <p class="text-sm font-bold text-gray-900">500 kg</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-3">
                        <p class="text-xs text-gray-600">Safety Margin</p>
                        <p class="text-sm font-bold text-green-600" id="safetyMargin">51%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Data Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
        <!-- Strain Gauge Chart -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4">Strain Over Time</h3>
            <div class="bg-gray-50 rounded-lg p-3 sm:p-4 h-48 sm:h-56 lg:h-64 flex items-center justify-center">
                <div class="w-full h-full" id="strainChart">
                    <!-- Chart will be rendered here -->
                    <div class="flex flex-col items-center justify-center h-full text-gray-500">
                        <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                        </svg>
                        <p class="text-sm font-medium">Real-time Strain Data</p>
                        <p class="text-xs mt-1">Microstrain (με) vs Time</p>
                        <div class="mt-4 text-center">
                            <p class="text-lg font-bold text-blue-600" id="liveStrainValue">0 με</p>
                            <p class="text-xs text-gray-500">Live Reading</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load Cell Chart -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4">Load Over Time</h3>
            <div class="bg-gray-50 rounded-lg p-3 sm:p-4 h-48 sm:h-56 lg:h-64 flex items-center justify-center">
                <div class="w-full h-full" id="loadChart">
                    <!-- Chart will be rendered here -->
                    <div class="flex flex-col items-center justify-center h-full text-gray-500">
                        <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <p class="text-sm font-medium">Real-time Load Data</p>
                        <p class="text-xs mt-1">Weight (kg) vs Time</p>
                        <div class="mt-4 text-center">
                            <p class="text-lg font-bold text-green-600" id="liveLoadValue">0 kg</p>
                            <p class="text-xs text-gray-500">Live Reading</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sensor Information -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
        <!-- Strain Gauge Info -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4">Strain Gauge Information</h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-sm text-gray-600">Working Principle</span>
                    <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">Resistance Change</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-sm text-gray-600">Measurement Range</span>
                    <span class="text-sm font-medium">±2000 με</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-sm text-gray-600">Circuit Type</span>
                    <span class="text-sm font-medium">Wheatstone Bridge</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="text-sm text-gray-600">Output Signal</span>
                    <span class="text-sm font-medium">Voltage (mV/V)</span>
                </div>
            </div>
        </div>

        <!-- Load Cell Info -->
        <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4">Load Cell Information</h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-sm text-gray-600">Working Principle</span>
                    <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Strain Gauge Based</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-sm text-gray-600">Capacity</span>
                    <span class="text-sm font-medium">500 kg</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-sm text-gray-600">Amplifier</span>
                    <span class="text-sm font-medium">HX711</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="text-sm text-gray-600">Output</span>
                    <span class="text-sm font-medium">Digital Data</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Alerts -->
    <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 border border-gray-200">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900">System Alerts</h3>
            <span class="text-xs px-2 py-1 bg-red-100 text-red-800 rounded-full" id="alertCount">3 Alerts</span>
        </div>
        <div class="space-y-2 sm:space-y-3" id="alertsContainer">
            <div class="flex items-center justify-between p-2 sm:p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                <div class="flex items-center flex-1 min-w-0">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2 sm:mr-3 flex-shrink-0"></div>
                    <span class="font-medium text-yellow-800 text-sm sm:text-base truncate">High strain detected on Beam #3 - SG_04</span>
                </div>
                <span class="text-xs sm:text-sm text-yellow-600 ml-2 flex-shrink-0">15 min ago</span>
            </div>
            <div class="flex items-center justify-between p-2 sm:p-3 bg-red-50 border border-red-200 rounded-lg">
                <div class="flex items-center flex-1 min-w-0">
                    <div class="w-2 h-2 bg-red-500 rounded-full mr-2 sm:mr-3 flex-shrink-0"></div>
                    <span class="font-medium text-red-800 text-sm sm:text-base truncate">Load capacity 85% exceeded - LC_02</span>
                </div>
                <span class="text-xs sm:text-sm text-red-600 ml-2 flex-shrink-0">2 hours ago</span>
            </div>
            <div class="flex items-center justify-between p-2 sm:p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                <div class="flex items-center flex-1 min-w-0">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2 sm:mr-3 flex-shrink-0"></div>
                    <span class="font-medium text-yellow-800 text-sm sm:text-base truncate">Irregular strain pattern - SG_07</span>
                </div>
                <span class="text-xs sm:text-sm text-yellow-600 ml-2 flex-shrink-0">1 day ago</span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Simulate real-time data updates
    document.addEventListener('DOMContentLoaded', function() {
        // Initial values
        let strainValue = 125.6;
        let loadValue = 245.3;
        let healthStatus = 94;

        // Initialize mini charts
        const strainMiniChart = createMiniChart('strainMiniChart', '#10B981', 'Strain (με)');
        const loadMiniChart = createMiniChart('loadMiniChart', '#3B82F6', 'Load (kg)');

        // Update function
        function updateDashboard() {
            // Simulate data changes
            strainValue = 100 + Math.random() * 200;
            loadValue = 200 + Math.random() * 150;
            healthStatus = 90 + Math.random() * 10;

            // Update strain gauge data
            document.getElementById('currentStrain').textContent = strainValue.toFixed(1);
            document.getElementById('liveStrainValue').textContent = strainValue.toFixed(1) + ' με';

            // Update load cell data
            document.getElementById('currentLoad').textContent = loadValue.toFixed(1);
            document.getElementById('liveLoadValue').textContent = loadValue.toFixed(1) + ' kg';

            // Update health status
            document.getElementById('healthStatus').textContent = Math.round(healthStatus) + '%';

            // Update progress bars
            const strainPercent = (strainValue / 500) * 100;
            const loadPercent = (loadValue / 500) * 100;

            document.getElementById('strainBar').style.width = Math.min(strainPercent, 100) + '%';
            document.getElementById('loadBar').style.width = Math.min(loadPercent, 100) + '%';

            // Update safety margin
            const safetyMargin = Math.max(0, 100 - loadPercent);
            document.getElementById('safetyMargin').textContent = safetyMargin.toFixed(0) + '%';

            // Update status indicators
            document.getElementById('strainStatus').textContent = strainValue > 300 ? 'Warning' : 'Normal';
            document.getElementById('strainStatus').className = strainValue > 300 ?
                'text-xs px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full' :
                'text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full';

            document.getElementById('loadStatus').textContent = loadValue > 400 ? 'Warning' : 'Normal';
            document.getElementById('loadStatus').className = loadValue > 400 ?
                'text-xs px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full' :
                'text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full';

            // Update mini charts
            updateMiniChart(strainMiniChart, strainValue, 500);
            updateMiniChart(loadMiniChart, loadValue, 500);
        }

        // Create mini chart function
        function createMiniChart(canvasId, color, label) {
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Initialize with some data
            const initialData = Array(20).fill(0).map(() => Math.random() * 100 + 100);

            return new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Array(20).fill(''),
                    datasets: [{
                        label: label,
                        data: initialData,
                        borderColor: color,
                        backgroundColor: color + '20',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 0,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: false
                        }
                    },
                    scales: {
                        x: {
                            display: false
                        },
                        y: {
                            display: false,
                            suggestedMin: 0,
                            suggestedMax: 500
                        }
                    },
                    animation: {
                        duration: 0
                    }
                }
            });
        }

        // Update mini chart with new data
        function updateMiniChart(chart, newValue, maxValue) {
            // Add new data point and remove the first one
            chart.data.datasets[0].data.push(newValue);
            chart.data.datasets[0].data.shift();

            // Update the chart
            chart.update('none');
        }

        // Update every 3 seconds
        setInterval(updateDashboard, 3000);

        // Initial update
        updateDashboard();
    });
</script>
@endsection