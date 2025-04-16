<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Rwanda Driving License System</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>RDL Admin Panel</h2>
            </div>
            <div class="admin-info">
                <div class="admin-avatar">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="admin-details">
                    <h3>DAViD KW</h3>
                    <p>Administrator</p>
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#candidates"><i class="fas fa-users"></i> Candidates</a></li>
                    <li><a href="#grades"><i class="fas fa-graduation-cap"></i> Exam Results</a></li>
                    <li><a href="add_candidate_form.php"><i class="fas fa-user-plus"></i> Add Candidate</a></li>
                    <li><a href="add_grade_form.php"><i class="fas fa-plus-circle"></i> Add Grade</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>
        
        <main class="main-content">
            <header class="dashboard-header">
                <h1>Rwanda Driving License Administration</h1>
                <div class="header-actions">
                    <a href="add_candidate_form.php" style="text-decoration: none;"><button class="add-btn" id="addCandidateBtn"><i class="fas fa-plus"></i> Add Candidate</button></a>
                </div>
            </header>
            
            <section class="dashboard-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Total Candidates</h3>
                        <p>25</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background-color: rgba(40, 167, 69, 0.1);">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Passed Exams</h3>
                        <p>18</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background-color: rgba(220, 53, 69, 0.1);">
                        <i class="fas fa-times-circle" style="color: #dc3545;"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Failed Exams</h3>
                        <p>7</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background-color: rgba(255, 193, 7, 0.1);">
                        <i class="fas fa-calendar-alt" style="color: #ffc107;"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Today's Date</h3>
                        <p>16/04/2025</p>
                    </div>
                </div>
            </section>
            
            <section id="candidates" class="data-section">
                <h2>Registered Candidates</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>National ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Exam Date</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1199880012345678</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>Male</td>
                                <td>1998-05-15</td>
                                <td>2025-05-20</td>
                                <td>0781234567</td>
                                <td class="actions">
                                    <button class="edit-btn" data-id="1199880012345678">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="delete-btn" data-id="1199880012345678">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1199990087654321</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Female</td>
                                <td>1999-08-22</td>
                                <td>2025-05-25</td>
                                <td>0729876543</td>
                                <td class="actions">
                                    <button class="edit-btn" data-id="1199990087654321">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="delete-btn" data-id="1199990087654321">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            
            <section id="grades" class="data-section">
                <h2>Examination Results</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Candidate Name</th>
                                <th>National ID</th>
                                <th>License Category</th>
                                <th>Marks (/20)</th>
                                <th>Decision</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1199880012345678</td>
                                <td>B</td>
                                <td>16</td>
                                <td class="pass">Pass</td>
                                <td class="actions">
                                    <button class="edit-btn" data-id="1">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="delete-btn" data-id="1">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>1199990087654321</td>
                                <td>A</td>
                                <td>12</td>
                                <td class="fail">Fail</td>
                                <td class="actions">
                                    <button class="edit-btn" data-id="2">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="delete-btn" data-id="2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    
    <!-- Add Candidate Modal -->
    <div id="addCandidateModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New Candidate</h2>
            <form id="addCandidateForm" action="add_candidate.php" method="post">
                <div class="form-group">
                    <label for="nationalId">National ID</label>
                    <input type="text" id="nationalId" name="CandidateNationalId" required>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="FirstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="LastName" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="Gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="DOB" required>
                </div>
                <div class="form-group">
                    <label for="examDate">Exam Date</label>
                    <input type="date" id="examDate" name="ExamDate" required>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="number" id="phoneNumber" name="PhoneNumber" required>
                </div>
                <button type="submit" class="submit-btn">Add Candidate</button>
            </form>
        </div>
    </div>
    
    <!-- Add Grade Modal -->
    <div id="addGradeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add Examination Result</h2>
            <form id="addGradeForm" action="add_grade.php" method="post">
                <div class="form-group">
                    <label for="candidateId">Candidate</label>
                    <select id="candidateId" name="CandidateNationalId" required>
                        <option value="">Select Candidate</option>
                        <option value="1199880012345678">John Doe (1199880012345678)</option>
                        <option value="1199990087654321">Jane Smith (1199990087654321)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="licenseCategory">License Category</label>
                    <select id="licenseCategory" name="LicenseExamCategory" required>
                        <option value="">Select Category</option>
                        <option value="A">Category A (Motorcycle)</option>
                        <option value="B">Category B (Light Vehicles)</option>
                        <option value="C">Category C (Heavy Goods)</option>
                        <option value="D">Category D (Passenger Vehicles)</option>
                        <option value="E">Category E (Trailer)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="marks">Obtained Marks (out of 20)</label>
                    <input type="number" id="marks" name="ObtainedMarks/20" min="0" max="20" required>
                </div>
                <div class="form-group">
                    <label for="decision">Decision</label>
                    <select id="decision" name="Decision" required>
                        <option value="">Select Decision</option>
                        <option value="Pass">Pass</option>
                        <option value="Fail">Fail</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Add Result</button>
            </form>
        </div>
    </div>
    
</body>
</html>