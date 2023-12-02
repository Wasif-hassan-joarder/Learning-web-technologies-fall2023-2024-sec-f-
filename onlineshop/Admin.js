<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Management System</title>
</head>
<body>

    <h2>Employee Management</h2>

    <form id="registerForm">
        <h3>Register Employee</h3>
        <label for="employeeName">Employee Name:</label>
        <input type="text" id="employeeName" required>

        <label for="employeeId">Employee ID:</label>
        <input type="text" id="employeeId" required>

        <button type="button" onclick="registerEmployee()">Register</button>
    </form>

    <hr>

    <form id="searchForm">
        <h3>Search Employee</h3>
        <label for="searchEmployeeId">Employee ID:</label>
        <input type="text" id="searchEmployeeId" required>

        <button type="button" onclick="searchEmployee()">Search</button>
    </form>

    <div id="searchResult"></div>

    <script>
        function registerEmployee() {
            var employeeName = document.getElementById('employeeName').value;
            var employeeId = document.getElementById('employeeId').value;

        
            if (!employeeName || !employeeId) {
                alert('Please fill in all fields');
                return;
            }


            alert('Employee registered successfully');
        }

        function searchEmployee() {
            var searchEmployeeId = document.getElementById('searchEmployeeId').value;

            
            if (!searchEmployeeId) {
                alert('Please enter Employee ID');
                return;
            }

            var searchResultDiv = document.getElementById('searchResult');
            searchResultDiv.innerHTML = '<p>Employee found: Employee ID ' + searchEmployeeId + '</p>';
        }
    </script>

</body>
</html>