function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["email"].value;
    var z = document.forms["myForm"]["subject"].value;
    var xy = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

