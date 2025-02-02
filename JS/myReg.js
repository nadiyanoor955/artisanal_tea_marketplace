
function validateForm() {
   
    var name = document.getElementById("name").value;
    if (name == "") {
        alert("Please enter your name.");
        return false;
    }

    var email = document.getElementById("email").value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    var password = document.getElementById("password").value;
    if (password == "") {
        alert("Please enter your password.");
        return false;
    }

    var phone = document.getElementById("phone").value;
    var phonePattern = /^[0-9]{11}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 11-digit phone number.");
        return false;
    }

    var dob = document.getElementById("dob").value;
    if (dob == "") {
        alert("Please select your date of birth.");
        return false;
    }

    var address = document.getElementById("address").value;
    if (address == "") {
        alert("Please enter your address.");
        return false;
    }

    // Employee Information Validation
    var employee_id = document.getElementById("employee_id").value;
    if (employee_id == "") {
        alert("Please enter your employee ID.");
        return false;
    }

    var department = document.getElementById("department").value;
    if (department == "") {
        alert("Please enter your department.");
        return false;
    }

    var position = document.getElementById("position").value;
    if (position == "") {
        alert("Please enter your position.");
        return false;
    }

    var joining_date = document.getElementById("joining_date").value;
    if (joining_date == "") {
        alert("Please select your joining date.");
        return false;
    }

    var salary = document.getElementById("salary").value;
    if (salary == "" || salary < 0) {
        alert("Please enter a valid salary.");
        return false;
    }

    // Emergency Contact Validation
    var emergency_contact_name = document.getElementById("emergency_contact_name").value;
    if (emergency_contact_name == "") {
        alert("Please enter the emergency contact name.");
        return false;
    }

    var emergency_contact_relationship = document.getElementById("emergency_contact_relationship").value;
    if (emergency_contact_relationship == "") {
        alert("Please enter the emergency contact relationship.");
        return false;
    }

    var emergency_contact_phone = document.getElementById("emergency_contact_phone").value;
    var emergency_contact_phonePattern = /^[0-9]{11}$/;
    if (!emergency_contact_phonePattern.test(emergency_contact_phone)) {
        alert("Please enter a valid 11-digit emergency contact phone number.");
        return false;
    }

    return true; // If all validations pass, submit the form
}