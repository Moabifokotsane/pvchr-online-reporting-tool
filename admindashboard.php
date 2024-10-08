<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f9;
        }

        .content {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url("pvchricon.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Dashboard Header */
        #admin h2 {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            margin: 0;
        }

        /* Navigation */
        .admin-nav {
            background-color: #333;
            padding: 10px;
        }

        .admin-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .admin-nav li {
            margin-right: 20px;
        }

        .admin-nav a {
            text-decoration: none;
            color: white;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .admin-nav a:hover {
            background-color: #555;
        }

        /* Admin Content */
        .admin-content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            flex-grow: 1;
            overflow-y: auto;
        }

        .admin-section {
            margin-bottom: 30px;
        }

        .admin-section h3 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #333;
            font-size: 20px;
            color: #333;
        }

        .admin-section table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .admin-section table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .btn {
            background-color: #333;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="content" id="admin">
        <h2>Admin Dashboard</h2>
        <nav class="admin-nav">
            <ul>
                <li><a href="#user-management">User Management</a></li>
                <li><a href="#report-management">Report Management</a></li>
                <li><a href="#analytics">Analytics</a></li>
                <li><a href="#communications">User Communications</a></li>
                <li><a href="#security">Security</a></li>
                <li><a href="#backup">Backup</a></li>
            </ul>
        </nav>
        <div class="admin-content">
            <!-- User Management Section -->
            <div id="user-management" class="admin-section">
                <h3>User Management</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
                <button class="btn" onclick="location.href='add_user.php'">Add New User</button>
            </div>

            <!-- Report Management Section -->
            <div id="report-management" class="admin-section">
                <h3>Report Management</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Anonymity</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>

            <!-- Analytics Section -->
            <div id="analytics" class="admin-section">
                <h3>Analytics</h3>
                <p>Generate insights and visualize data trends.</p>
                <!-- Example Charts -->
                <canvas id="reportTrends" width="400" height="200"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('reportTrends').getContext('2d');
                    const reportTrends = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May'],
                            datasets: [{
                                label: 'Reports',
                                data: [5, 10, 15, 7, 20],
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>

            <!-- User Communications Section -->
            <div id="communications" class="admin-section">
                <h3>User Communications</h3>
                <p>Send notifications and communicate with users.</p>
                <form method="post" action="send_notification.php">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Notification</button>
                </form>
            </div>

            <!-- Security Section -->
            <div id="security" class="admin-section">
                <h3>Security</h3>
                <p>Manage security settings and view activity logs.</p>
                <button class="btn" onclick="location.href='view_logs.php'">View Logs</button>
                <button class="btn" onclick="location.href='security_settings.php'">Security Settings</button>
            </div>

            <!-- Backup Section -->
            <div id="backup" class="admin-section">
                <h3>Backup</h3>
                <p>Manage database backups and recovery options.</p>
                <button class="btn" onclick="location.href='backup.php'">Create Backup</button>
                <button class="btn" onclick="location.href='restore.php'">Restore Backup</button>
            </div>
        </div>
    </div>
</body>
</html>
