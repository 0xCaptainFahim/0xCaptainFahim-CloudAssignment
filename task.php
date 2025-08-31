<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
 
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', (e) => {
      const sidebar = document.getElementById('sidebar');
      const toggleButton = document.getElementById('toggleSidebar');
      if (window.innerWidth < 768 && sidebar.classList.contains('open') && !sidebar.contains(e.target) && !toggleButton.contains(e.target)) {
        sidebar.classList.remove('open');
      }
    });
  </script>
</body>
</html>