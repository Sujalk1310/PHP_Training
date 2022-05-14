var a = parseInt(prompt("Enter 1st No : "));
var b = parseInt(prompt("Enter 2nd No : "));
var c = parseInt(prompt("Enter 3rd No : "));
if (a > b && a > c) {
    document.write(a," is Largest");
    }
else {
    if (b > c) {
        document.write(b," is Largest");
        }
    else {
        document.write(c," is Largest");
        }
    }