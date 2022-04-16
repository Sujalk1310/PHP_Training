function display(x) {
    document.getElementById("display").value+=x;
}
function result() {
    var y = document.getElementById("display").value;
    var result = eval(y);
    document.getElementById("display").value = result;
}
function clr() {
    document.getElementById("display").value="";
}