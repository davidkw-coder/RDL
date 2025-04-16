<!DOCTYPE html>
<html>
<head>
    <title>Add Candidate - Rwanda Driving License System</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .submit-btn {
            background-color: #0088ff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #0066cc;
        }
        
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #0088ff;
            text-decoration: none;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add New Candidate</h1>
        <form action="add_candidate.php" method="post">
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
        <a href="index.php" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>