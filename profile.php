<?php
session_start();
require 'db_config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
$user_id = $_SESSION['user_id'];

            <div class="text-center p-6 bg-green-50 rounded-xl">
              <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check-circle text-green-600 text-2xl"></i>

            <div class="text-center p-6 bg-purple-50 rounded-xl">
              <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-clock text-purple-600 text-2xl"></i>
              </div>
              <h3 class="font-semibold text-gray-800 mb-2">Weekly Streak</h3>
              <p class="text-2xl font-bold text-purple-600"><?php echo $current_streak; ?></p>
              <p class="text-sm text-gray-500">Days active</p>
            </div>
          </div>
  </div>
</body>
</html>
