function displayOtherInfo(){
    var checkbox = document.getElementById('otherInfo');

    if (checkbox.checked == true) {
        document.getElementById('otherInformation').style.display = "block";

    }
    else
        document.getElementById('otherInformation').style.display = "none";
}