<?php
require '../controllers/employeeProfileDetails.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanal Tea Marketplace</title>
    <link rel="stylesheet" href="../myStyle/mystyle.css">
    <script src="../JS/myReg.js"></script>
</head>
<body>
    <h1> Welcome to Artisanal Tea Marketplace </h1>
    
    <hr>

    <form action="../controllers/employeeProfileDetails.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <h2>Employee Registration</h2>
        <!-- Personal Information -->
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number</label></td>
                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{11}"></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td><input type="date" id="dob" name="dob"></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><textarea id="address" name="address" rows="3" required></textarea></td>
                </tr>
            </table>
        </fieldset>

        <!-- Employee Information -->
        <fieldset>
            <legend>Employee Information</legend>
            <table>
                <tr>
                    <td><label for="employee_id">Employee ID</label></td>
                    <td><input type="text" id="employee_id" name="employee_id"></td>
                </tr>
                <tr>
                    <td><label for="department">Department</label></td>
                    <td><input type="text" id="department" name="department"></td>
                </tr>
                <tr>
                    <td><label for="position">Position</label></td>
                    <td><input type="text" id="position" name="position" ></td>
                </tr>
                <tr>
                    <td><label for="joining_date">Joining Date</label></td>
                    <td><input type="date" id="joining_date" name="joining_date" ></td>
                </tr>
                <tr>
                    <td><label for="salary">Salary</label></td>
                    <td><input type="number" id="salary" name="salary" min="0"></td>
                </tr>
            </table>
        </fieldset>

        <!-- Emergency Contact -->
        <fieldset>
            <legend>Emergency Contact</legend>
            <table>
                <tr>
                    <td><label for="emergency_contact_name">Contact Name</label></td>
                    <td><input type="text" id="emergency_contact_name" name="emergency_contact_name" ></td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_relationship">Relationship</label></td>
                    <td><input type="text" id="emergency_contact_relationship" name="emergency_contact_relationship" ></td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_phone">Contact Phone</label></td>
                    <td><input type="tel" id="emergency_contact_phone" name="emergency_contact_phone" pattern="[0-9]{11}"></td>
                </tr>
                <tr>
                    <td><input type="file" class="file" name="images"></td>
                </tr>
            </table>
        </fieldset>

        <br>
        <input type="submit" class="register" value="Register as Employee"><br>
        <span class="sp" >Already have an account?</span>
        <a href="login.php">Sign In</a>
    </form>

</body>
</html>
