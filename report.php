<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

          ],
          borderColor: [
            'rgba(239, 68, 68, 1)',
            'rgba(245, 158, 11, 1)',
            'rgba(34, 197, 94, 1)',
            'rgba(168, 85, 247, 1)'
          ],
          borderWidth: 3
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

    // Export Functionality
    function exportData(format) {
      const taskData = {
        total_tasks: <?php echo $total_tasks;?>,
        delayed: <?php echo $delayed; ?>,
        avg_completion_time: <?php echo $avg_completion_time; ?>,
        best_streak: <?php echo $best_streak; ?>,
        monthly_completed: <?php echo $monthly_completed; ?>,
        overdue_count: <?php echo $overdue_tasks ? $overdue_tasks->num_rows : 0; ?>
      };

      if (format === 'csv') {
      notification.innerHTML = `
        <div class="flex items-center">
          <i class="fas fa-${type === 'success' ? 'check' : type === 'error' ? 'times' : 'info'} mr-2"></i>
          ${message}
        </div>
      `;
      document.body.appendChild(notification);
      
      setTimeout(() => {
        notification.remove();
      }, 3000);
    }
  </script>
</body>
</html>