<?php
// index.php (Login page with PHP logic)
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_config.php';

                    <div class="flex justify-center space-x-4 mt-3">
                        <a href="dashboard.php" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fas fa-tachometer-alt text-lg text-gray-800"></i>
                        </a>
                        <a href="task.php" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fas fa-tasks text-lg text-gray-800"></i>
                        </a>
                        <a href="calendar.php" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fas fa-calendar-alt text-lg text-gray-800"></i>
                        </a>
                        <a href="report.php" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fas fa-chart-bar text-lg text-gray-800"></i>
                        </a>
        </div>
    </div>
</body>
</html>