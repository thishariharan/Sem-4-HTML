function ck(){
    let a = document.forms["mfs"]["nm"].value;    let e = document.forms["mfs"]["em"].value;    let f = document.forms["mfs"]["ps"].value;    let b = document.forms["mfs"]["ad"].value;    let c = document.forms["mfs"]["cd"].value;    let d = document.forms["mfs"]["ph"].value;
    if(a == "")    {      document.getElementById("w1").innerHTML = "Enter a proper Name";
        return false;    }
    if(b == "")    {   document.getElementById("w2").innerHTML = "Enter Proper Address";
        return false;    }
    if(c == "")    {                document.getElementById("w3").innerHTML = "Enter a proper valid Zip Code";
        return false;    }
    if(d == "")    {                document.getElementById("w7").innerHTML = "Enter Proper Mobile Number";
        return false;    }
    if(e == "")    {                document.getElementById("w8").innerHTML = "Enter a proper valid E-Mail";
        return false;    }
    if(f == "")    {     document.getElementById("w9").innerHTML = "Enter Proper Password";
        return false;    }	}
