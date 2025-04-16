<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Dashboard - Rwanda Driving License System</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>RDL Candidate Portal</h2>
            </div>
            <div class="admin-info">
                <div class="admin-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="admin-details">
                    <h3>John Doe</h3>
                    <p>Candidate</p>
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#license"><i class="fas fa-id-card"></i> License Status</a></li>
                    <li><a href="#profile"><i class="fas fa-user"></i> My Profile</a></li>
                    <li><a href="#results"><i class="fas fa-graduation-cap"></i> Exam Results</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>
        
        <main class="main-content">
            <header class="dashboard-header">
                <h1>Rwanda Driving License Portal</h1>
                <div class="header-actions">
                    <span class="date-display"><i class="fas fa-calendar-alt"></i> 16 April 2025</span>
                </div>
            </header>
            
            <section class="dashboard-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="stat-details">
                        <h3>National ID</h3>
                        <p>1199880012345</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background-color: rgba(40, 167, 69, 0.1);">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Passed Exams</h3>
                        <p>1</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background-color: rgba(220, 53, 69, 0.1);">
                        <i class="fas fa-times-circle" style="color: #dc3545;"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Failed Exams</h3>
                        <p>0</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background-color: rgba(255, 193, 7, 0.1);">
                        <i class="fas fa-calendar-alt" style="color: #ffc107;"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Exam Date</h3>
                        <p>2025-05-20</p>
                    </div>
                </div>
            </section>
            
            <section id="license" class="data-section">
                <h2>License Status</h2>
                
                <div class="license-card">
                    <div class="license-header">
                        <div class="license-title">
                            <h3>Rwanda Driving License</h3>
                            <p>Republic of Rwanda</p>
                        </div>
                        <div class="license-logo">
                            <i class="fas fa-car"></i>
                        </div>
                    </div>
                    
                    <div class="license-details">
                        <div class="license-detail">
                            <label>Full Name</label>
                            <p>John Doe</p>
                        </div>
                        <div class="license-detail">
                            <label>National ID</label>
                            <p>1199880012345678</p>
                        </div>
                        <div class="license-detail">
                            <label>Date of Birth</label>
                            <p>1998-05-15</p>
                        </div>
                        <div class="license-detail">
                            <label>Gender</label>
                            <p>Male</p>
                        </div>
                        <div class="license-detail">
                            <label>License Categories</label>
                            <p>B</p>
                        </div>
                        <div class="license-detail">
                            <label>Issue Date</label>
                            <p>2025-04-16</p>
                        </div>
                    </div>
                    
                    <div class="license-footer">
                        <div class="license-status">
                            <div class="status-indicator status-active"></div>
                            <span>Active</span>
                        </div>
                        <div class="license-expiry">
                            Valid until: 2030-04-16
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="profile" class="data-section">
                <h2>My Profile</h2>
                <div class="profile-info">
                    <div class="info-group">
                        <label>National ID:</label>
                        <p>1199880012345678</p>
                    </div>
                    <div class="info-group">
                        <label>First Name:</label>
                        <p>John</p>
                    </div>
                    <div class="info-group">
                        <label>Last Name:</label>
                        <p>Doe</p>
                    </div>
                    <div class="info-group">
                        <label>Gender:</label>
                        <p>Male</p>
                    </div>
                    <div class="info-group">
                        <label>Date of Birth:</label>
                        <p>1998-05-15</p>
                    </div>
                    <div class="info-group">
                        <label>Exam Date:</label>
                        <p>2025-05-20</p>
                    </div>
                    <div class="info-group">
                        <label>Phone Number:</label>
                        <p>0781234567</p>
                    </div>
                </div>
            </section>
            
            <section id="results" class="data-section">
                <h2>Exam Results</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>License Category</th>
                                <th>Marks (/20)</th>
                                <th>Decision</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>B</td>
                                <td>16</td>
                                <td class="pass">Pass</td>
                                <td>
                                    <span class="pass">Approved</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    
 
</body>
</html>