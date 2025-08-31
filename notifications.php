<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
ains('open') && !sidebar.contains(e.target) && !toggleButton.contains(e.target)) {
        sidebar.classList.remove('open');
      }
    });

    // Weekly Activity Chart
    const weeklyCtx = document.getElementById('weeklyActivityChart').getContext('2d');
    new Chart(weeklyCtx, {
      type: 'line',
      data: {
          pointRadius: 6,
          pointHoverRadius: 8
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { 
            display: true,
            labels: {
              font: { size: 14, weight: 'bold' }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: { color: 'rgba(0, 0, 0, 0.1)' }
          },
          x: {
            grid: { color: 'rgba(0, 0, 0, 0.1)' }
          }
        }
      }
    });

    // Notification Distribution Chart
    const notificationCtx = document.getElementById('notificationChart').getContext('2d');
    new Chart(notificationCtx, {
      type: 'doughnut',
      data: {
        labels: ['Overdue', 'Upcoming Deadlines', 'Completed'],

        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { 
            display: true,
            position: 'bottom',
            labels: {
              font: { size: 12, weight: 'bold' },
              padding: 20
            }
          }
        }
      }
    });
  </script>
</body>
</html>
