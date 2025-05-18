@extends('admin.layouts.master')

@section('title')
    @lang('translation.Apex_Charts')
@endsection

<head>
    <meta charset="UTF-8">
    <title>Thống kê Quản lý Ebook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-section {
            display: none;
        }

        .chart-section.active {
            display: block;
        }
        
        .chart-card {
            border-radius: 0.25rem;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            overflow: hidden;
            border: 1px solid #f6f6f6;
            margin-bottom: 24px;
            transition: all 0.2s ease;
        }
        
        .chart-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 1rem 2rem rgba(18, 38, 63, 0.08);
        }
        
        .chart-header {
            background: #f8f9fa;
            padding: 1rem 1.25rem;
            color: #495057;
            font-weight: 600;
            border-bottom: 1px solid #eff2f7;
        }
        
        .chart-body {
            padding: 1.25rem;
            background-color: #ffffff;
        }
        
        .control-btn {
            border-radius: 0.25rem;
            padding: 0.47rem 0.75rem;
            font-weight: 400;
            transition: all 0.15s ease;
            box-shadow: none !important;
        }
        
        .nav-btn {
            position: relative;
            overflow: hidden;
            background-color: #556ee6;
            border-color: #556ee6;
        }
        
        .nav-btn:hover {
            background-color: #485ec4;
            border-color: #4458b8;
        }
        
        .select-period {
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
            padding: 0.47rem 1.75rem 0.47rem 0.75rem;
            background: #fff;
            box-shadow: none;
            height: calc(1.5em + 0.94rem + 2px);
            font-size: 0.8125rem;
            font-weight: 400;
        }
        
        .export-btn {
            background: #34c38f;
            border-color: #34c38f;
            border-radius: 0.25rem;
            padding: 0.47rem 0.75rem;
        }
        
        .export-btn:hover {
            background: #2ca67a;
            border-color: #2ca67a;
        }
        
        .dashboard-wrapper {
            background: #ffffff;
            padding: 1.25rem;
            border-radius: 0.25rem;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            border: 1px solid #eff2f7;
        }
        
        .chart-tabs {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .chart-container {
            height: 450px;
            position: relative;
            padding: 10px;
        }
    </style>
</head>

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Charts
        @endslot
        @slot('title')
            Analytics Dashboard
        @endslot
    @endcomponent

    <div class="dashboard-wrapper">
        <!-- Navigation Buttons -->
        <div class="chart-tabs">
            <button class="btn btn-primary nav-btn control-btn me-2" onclick="showChart('commentChart')">
                <i class="bx bx-message-square me-1"></i> Comment Analytics
            </button>
            <button class="btn btn-primary nav-btn control-btn me-2" onclick="showChart('userCommentChart')">
                <i class="bx bx-user-voice me-1"></i> User Ratings
            </button>
            <button class="btn btn-primary nav-btn control-btn me-2" onclick="showChart('documentChart')">
                <i class="bx bx-file me-1"></i> Document Analytics
            </button>
            <button class="btn btn-primary nav-btn control-btn" onclick="showChart('downloadChart')">
                <i class="bx bx-download me-1"></i> Download Statistics
            </button>
        </div>

        <!-- Comment Chart -->
        <div id="commentChart" class="chart-section active">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="mb-0">Biểu đồ thống kê bình luận</h5>
                </div>
                <div class="chart-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <select class="form-select select-period w-auto" onchange="updateChartPeriod('commentBarChart', this.value)">
                            <option value="month">Tháng</option>
                            <option value="quarter">Quý</option>
                            <option value="year">Năm</option>
                        </select>
                        <button class="btn btn-success export-btn" onclick="exportChart('commentBarChart')">
                            <i class="bx bx-export me-1"></i> Xuất Excel
                        </button>
                    </div>
                    <div class="chart-container">
                        <canvas id="commentBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Comment Chart -->
        <div id="userCommentChart" class="chart-section">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="mb-0">Phân bố đánh giá người dùng</h5>
                </div>
                <div class="chart-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <select class="form-select select-period w-auto" onchange="updateChartPeriod('userPieChart', this.value)">
                            <option value="month">Tháng</option>
                            <option value="quarter">Quý</option>
                            <option value="year">Năm</option>
                        </select>
                        <button class="btn btn-success export-btn" onclick="exportChart('userPieChart')">
                            <i class="bx bx-export me-1"></i> Xuất Excel
                        </button>
                    </div>
                    <div class="chart-container">
                        <canvas id="userPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Document Chart -->
        <div id="documentChart" class="chart-section">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="mb-0">Phân tích tài liệu</h5>
                </div>
                <div class="chart-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <select class="form-select select-period w-auto" onchange="updateChartPeriod('docBarChart', this.value)">
                            <option value="month">Tháng</option>
                            <option value="quarter">Quý</option>
                            <option value="year">Năm</option>
                        </select>
                        <div>
                            <button class="btn btn-primary control-btn me-2" id="topDocsBtn" onclick="toggleDocChart(true)">
                                <i class="bx bx-bookmark me-1"></i> Top Tài liệu
                            </button>
                            <button class="btn btn-outline-secondary control-btn" id="topUsersBtn" onclick="toggleDocChart(false)">
                                <i class="bx bx-user me-1"></i> Top Người dùng
                            </button>
                            <button class="btn btn-success export-btn ms-2" onclick="exportChart('docBarChart')">
                                <i class="bx bx-export me-1"></i> Xuất Excel
                            </button>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="docBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download Chart -->
        <div id="downloadChart" class="chart-section">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="mb-0">Thống kê lượt tải</h5>
                </div>
                <div class="chart-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <select class="form-select select-period w-auto" onchange="updateChartPeriod('downloadBarChart', this.value)">
                            <option value="month">Tháng</option>
                            <option value="quarter">Quý</option>
                            <option value="year">Năm</option>
                        </select>
                        <button class="btn btn-success export-btn" onclick="exportChart('downloadBarChart')">
                            <i class="bx bx-export me-1"></i> Xuất Excel
                        </button>
                    </div>
                    <div class="chart-container">
                        <canvas id="downloadBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Chart objects for reference
        const chartObjects = {};

        function showChart(chartId) {
            document.querySelectorAll('.chart-section').forEach(sec => sec.classList.remove('active'));
            document.getElementById(chartId).classList.add('active');

            // Resize charts when shown to fix rendering issues
            window.setTimeout(() => {
                if (chartId === 'documentChart' && chartObjects.docBarChart) {
                    chartObjects.docBarChart.resize();
                } else if (chartId === 'downloadChart' && chartObjects.downloadBarChart) {
                    chartObjects.downloadBarChart.resize();
                } else if (chartId === 'commentChart' && chartObjects.commentBarChart) {
                    chartObjects.commentBarChart.resize();
                } else if (chartId === 'userCommentChart' && chartObjects.userPieChart) {
                    chartObjects.userPieChart.resize();
                }
            }, 50);
        }

        function toggleDocChart(showTopDocs) {
            if (showTopDocs) {
                document.getElementById('topDocsBtn').classList.remove('btn-outline-primary');
                document.getElementById('topDocsBtn').classList.add('btn-primary');
                document.getElementById('topUsersBtn').classList.remove('btn-primary');
                document.getElementById('topUsersBtn').classList.add('btn-outline-secondary');

                // Update chart data for top documents
                chartObjects.docBarChart.data.labels = ['Tài liệu A', 'Tài liệu B', 'Tài liệu C', 'Tài liệu D',
                    'Tài liệu E'];
                chartObjects.docBarChart.data.datasets[0].label = 'Yêu thích';
                chartObjects.docBarChart.data.datasets[0].data = [20, 35, 15, 25, 18];
            } else {
                document.getElementById('topUsersBtn').classList.remove('btn-outline-secondary');
                document.getElementById('topUsersBtn').classList.add('btn-primary');
                document.getElementById('topDocsBtn').classList.remove('btn-primary');
                document.getElementById('topDocsBtn').classList.add('btn-outline-primary');

                // Update chart data for top users
                chartObjects.docBarChart.data.labels = ['User A', 'User B', 'User C', 'User D', 'User E'];
                chartObjects.docBarChart.data.datasets[0].label = 'Đóng góp';
                chartObjects.docBarChart.data.datasets[0].data = [45, 30, 25, 20, 15];
            }

            chartObjects.docBarChart.update();
        }

        function updateChartPeriod(chartId, period) {
            // Sample data update based on period
            const chart = chartObjects[chartId];
            if (!chart) return;

            if (chartId === 'commentBarChart') {
                if (period === 'month') {
                    chart.data.labels = ['01/05', '02/05', '03/05', '04/05', '05/05'];
                    chart.data.datasets[0].data = [12, 19, 3, 5, 2];
                } else if (period === 'quarter') {
                    chart.data.labels = ['Q1', 'Q2', 'Q3', 'Q4'];
                    chart.data.datasets[0].data = [45, 60, 35, 50];
                } else { // year
                    chart.data.labels = ['2020', '2021', '2022', '2023', '2024'];
                    chart.data.datasets[0].data = [120, 180, 210, 250, 190];
                }
            }

            // Similar updates for other charts would go here

            chart.update();
        }

        function exportChart(chartId) {
            // In a real app, this would create an Excel file
            const chart = chartObjects[chartId];
            if (chart) {
                alert(`Exporting ${chartId} data to Excel...`);
                // Here you would implement actual export functionality
            }
        }

        // Initialize charts on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Comment Bar Chart
            chartObjects.commentBarChart = new Chart(document.getElementById('commentBarChart'), {
                type: 'bar',
                data: {
                    labels: ['01/05', '02/05', '03/05', '04/05', '05/05'],
                    datasets: [{
                        label: 'Số bình luận',
                        data: [12, 19, 3, 5, 2],
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Biểu đồ thống kê bình luận'
                        }
                    }
                }
            });

            // User Pie Chart
            chartObjects.userPieChart = new Chart(document.getElementById('userPieChart'), {
                type: 'pie',
                data: {
                    labels: ['1 sao', '2 sao', '3 sao', '4 sao', '5 sao'],
                    datasets: [{
                        label: 'Đánh giá',
                        data: [2, 4, 8, 15, 30],
                        backgroundColor: ['#dc3545', '#fd7e14', '#ffc107', '#20c997', '#198754']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: 'Phân bố đánh giá người dùng'
                        }
                    }
                }
            });

            // Document Bar Chart
            chartObjects.docBarChart = new Chart(document.getElementById('docBarChart'), {
                type: 'bar',
                data: {
                    labels: ['Tài liệu A', 'Tài liệu B', 'Tài liệu C', 'Tài liệu D', 'Tài liệu E'],
                    datasets: [{
                        label: 'Yêu thích',
                        data: [20, 35, 15, 25, 18],
                        backgroundColor: 'rgba(255, 99, 132, 0.6)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Top tài liệu được yêu thích'
                        }
                    }
                }
            });

            // Download Bar Chart
            chartObjects.downloadBarChart = new Chart(document.getElementById('downloadBarChart'), {
                type: 'bar',
                data: {
                    labels: ['Lịch sử', 'CNTT', 'Kinh tế', 'Khoa học', 'Văn học'],
                    datasets: [{
                        label: 'Lượt tải',
                        data: [50, 80, 60, 45, 65],
                        backgroundColor: 'rgba(153, 102, 255, 0.6)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Lượt tải theo danh mục'
                        }
                    }
                }
            });
        });

        // Make charts responsive on window resize
        window.addEventListener('resize', function() {
            Object.values(chartObjects).forEach(chart => {
                if (chart) chart.resize();
            });
        });
    </script>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('build/js/pages/apexcharts.init.js') }}"></script>
@endsection
