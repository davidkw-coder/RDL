<!DOCTYPE html>
<html>
<head>
    <title>Add Grade - Rwanda Driving License System</title>
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
        <h1>Add Examination Result</h1>
        <form action="add_grade.php" method="post">
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
        <a href="index.php" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html> 