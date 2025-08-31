<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
     
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function generateAIResponse(message) {
            const responses = [
                "That's a great question about task management! Based on your current productivity score, I'd recommend breaking down complex tasks into smaller, manageable steps.",
                "I can see you have some pending tasks. Would you like me to help you prioritize them based on their due dates and importance?",
                "Great idea! For better task organization, consider using the priority system and setting realistic due dates. This will help you stay on track.",
                "I notice you've been completing tasks regularly. Keep up the good work! Remember to take short breaks between tasks to maintain focus.",
                "That's an interesting approach to task management. Have you tried using the calendar view to better visualize your schedule?",
                "Based on your recent activity, you seem to work best in the morning. Consider scheduling your most important tasks during your peak productivity hours.",
                "I can help you analyze your task patterns. Would you like me to show you which types of tasks you complete most efficiently?",
                "That's a common challenge! Try using the 'In Progress' status to track tasks you're actively working on, rather than leaving them as 'Pending'."
            ];
 
