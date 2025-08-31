<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];

            const title = document.getElementById('note-title').value;
            const content = document.getElementById('note-content').value;
            
            if (!title || !content) {
                alert('Please fill in both title and content');
                return;
            }
            
            // Simulate saving (in real app, this would save to database)
            alert('Note saved securely!');
        }

        // Clear note
        function clearNote() {
            document.getElementById('note-title').value = '';
            document.getElementById('note-content').value = '';
        }

        // Generate initial password
        generatePassword();
    </script>
</body>
</html>
