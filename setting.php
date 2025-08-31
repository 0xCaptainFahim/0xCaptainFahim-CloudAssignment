<?php
session_start();
require 'db_config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
  <script>
    document.getElementById('toggleSidebar').addEventListener('click', () => {
      document.getElementById('sidebar').classList.toggle('open');
    });

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