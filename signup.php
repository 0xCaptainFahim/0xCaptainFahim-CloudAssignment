<?php
// signup.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $username = trim($_POST['username'] ?? '');
                        </a>
                        <a href="report.php" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fas fa-chart-bar text-lg text-gray-800"></i>
                        </a>
                    </div>
    </div>
</body>
</html>