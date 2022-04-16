function validate() {
    var x = document.forms["bankForm"]["password"].value;
    var y = document.forms["bankForm"]["cpassword"].value;
    if (x != y) {
        alert ("!! Password and Confirm Password doesn't match !!");
        return false;
    }
    var a = document.forms["bankForm"]["age"].value;
    if (a < 18) {
        alert ("!! Under Age Candidate !!");
        return false;
    }
    else {
        return true;
    }
}