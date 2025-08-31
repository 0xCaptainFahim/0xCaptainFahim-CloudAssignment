<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;

    function closeModal() {
      document.getElementById('taskModal').classList.add('hidden');
      document.getElementById('taskForm').reset();
      editRow = null;
    }

    function editTask(button) {
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              color: 'rgba(0, 0, 0, 0.1)'
            }
          },
          x: {
            grid: {
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }
        }
      }
    });
  </script>
</body>
</html>