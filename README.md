# 0xCaptainFahim 👑 TodoApp - PHP Todo Application

A modern, responsive Todo application built with PHP, MySQL, and Tailwind CSS featuring a beautiful full HD background design with glassmorphism effects.

## ✨ Features

### 🎨 **Beautiful Design**
- **Full HD Background**: Stunning gradient background with animated floating elements
- **Glassmorphism**: Modern glass-like card designs with backdrop blur effects
- **Responsive Layout**: Works perfectly on desktop, tablet, and mobile devices
- **Smooth Animations**: Hover effects, transitions, and floating animations

### 📊 **Enhanced Task Management**
- **Priority Levels**: Low, Medium, High, and Urgent priority options
- **Status Tracking**: Pending, In Progress, Completed, and Delayed statuses
- **Due Date Management**: Visual indicators for overdue tasks
- **Progress Bars**: Visual progress tracking for in-progress tasks

### 🔍 **Advanced Features**
- **Smart Filtering**: Filter tasks by status, priority, and search
- **Real-time Search**: Instant search through task names
- **Task Toggle**: Quick status toggle with one click
- **Bulk Operations**: Edit and delete multiple tasks efficiently

### 📈 **Analytics & Reports**
- **Dashboard Overview**: Key metrics and statistics at a glance
- **Interactive Charts**: Beautiful charts using Chart.js
- **Monthly Progress**: Track completion trends over time
- **Priority Analysis**: Visual breakdown of tasks by priority
- **Productivity Metrics**: Compare daily performance

### ⚙️ **User Experience**
- **Modern UI/UX**: Intuitive interface with smooth interactions
- **Mobile Responsive**: Optimized for all screen sizes
- **Fast Performance**: Optimized database queries and caching
- **Accessibility**: Keyboard navigation and screen reader support

## 🚀 Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

### Step 1: Clone or Download
```bash
git clone <repository-url>
cd todo-app
```

### Step 2: Database Setup
1. Create a MySQL database named `todo_app`
2. Import the database structure:
   ```bash
   mysql -u root -p todo_app < setup_database.sql
   ```
3. Update database credentials in `db_config.php`:
   ```php
   $host = 'Hacker';
   $db = 'todo_app';
   $user = 'Ghost';
   $pass = 'heheboi';
   ```

### Step 3: Web Server Configuration
1. Place all files in your web server directory
2. Ensure PHP has write permissions
3. Access the application via your web browser

### Step 4: First Login
- **Demo Account**: `demo@todoapp.com` / `123456`
- Or create a new account using the signup page

## 🏗️ Project Structure

```
todo-app/
├── index.php          # Login page
├── signup.php         # User registration
├── dashboard.php      # Main dashboard with analytics
├── task.php          # Task management interface
├── report.php        # Detailed reports and analytics
├── setting.php       # User settings and preferences
├── db_config.php     # Database configuration
├── setup_database.sql # Database setup script
└── README.md         # This file
```

## 🎯 Key Features Explained

### **Glassmorphism Design**
The app uses modern glassmorphism effects with:
- Semi-transparent backgrounds
- Backdrop blur filters
- Subtle borders and shadows
- Smooth hover animations

### **Task Management System**
- **Card-based Layout**: Each task is displayed as an interactive card
- **Quick Actions**: Edit, delete, and toggle status with one click
- **Visual Indicators**: Color-coded priority and status badges
- **Overdue Alerts**: Red borders and warning messages for late tasks

### **Advanced Analytics**
- **Real-time Data**: Live updates of task statistics
- **Interactive Charts**: Hover effects and responsive charts
- **Performance Metrics**: Productivity tracking and comparisons
- **Priority Insights**: Visual breakdown of task distribution

### **Responsive Design**
- **Mobile First**: Optimized for mobile devices
- **Adaptive Layout**: Automatically adjusts to screen size
- **Touch Friendly**: Large touch targets for mobile users
- **Collapsible Sidebar**: Mobile-optimized navigation

## 🔧 Customization

### **Theme Colors**
Modify the CSS variables in each page to change the color scheme:
```css
.bg-gradient {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
```

### **Modifying Status Options**
Edit the status enum in the database and update the forms accordingly.

## 📱 Browser Support

- **Chrome**: 80+
- **Firefox**: 75+
- **Safari**: 13+
- **Edge**: 80+
- **Mobile Browsers**: iOS Safari 13+, Chrome Mobile 80+

## 🚀 Performance Features

- **Optimized Queries**: Efficient database queries with proper indexing
- **Lazy Loading**: Charts and heavy content load on demand
- **Minimal Dependencies**: Only essential external libraries
- **Caching**: Browser-level caching for static assets

## 🔒 Security Features

- **Password Hashing**: Secure password storage using PHP's password_hash()
- **SQL Injection Protection**: Prepared statements for all database queries
- **Session Management**: Secure session handling
- **Input Validation**: Server-side validation for all user inputs

## 🐛 Troubleshooting

### **Common Issues**

1. **Database Connection Error**
   - Verify database credentials in `db_config.php`
   - Ensure MySQL service is running
   - Check database exists and is accessible

2. **Charts Not Displaying**
   - Ensure Chart.js CDN is accessible
   - Check browser console for JavaScript errors
   - Verify PHP is generating valid JSON data

3. **Styling Issues**
   - Clear browser cache
   - Ensure Tailwind CSS CDN is accessible
   - Check for CSS conflicts

### **Performance Issues**
- Enable MySQL query caching
- Optimize database indexes
- Use a CDN for external libraries

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🙏 Acknowledgments

- **Tailwind CSS** for the utility-first CSS framework
- **Chart.js** for beautiful interactive charts
- **Font Awesome** for the icon library
- **PHP Community** for the robust backend framework

## 📞 Support

For support and questions:
- Create an issue in the repository
- Check the troubleshooting section
- Review the code comments for implementation details

---

**Developed by 0xCaptainFahim 👑**

*Transform your task management with this beautiful, feature-rich Todo application!*

