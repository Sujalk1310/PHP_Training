function validate() {
    var x = document.getElementById("User").value;
    var y = document.getElementById("Pass").value;
    if (x == "Web" && y == "Technology") {
        alert("You are an authorized user")
    }
    else {
        alert("You are not an authorized user")
    }
}