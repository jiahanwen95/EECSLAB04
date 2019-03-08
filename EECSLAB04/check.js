function checking()
{
    let DMC = document.getElementById("DMC").value;
    let Anthem = document.getElementById("Anthem").value;
    let SSDT = document.getElementById("SSDT").value;
    let un = document.getElementById("username").value;
    let pw = document.getElementById("password").value;
    let sp= document.getElementById("Shipping").value;
   if(DMC<0 || Anthem<0 || SSDT<0)
    {
    alert("No negative purchase allowed!!!")
    return false;
    }

    else if(DMC==0 && Anthem==0 && SSDT==0)
    {
    alert("give me you money!!! buy something!!")
    return false;
    }
    else if(pw=="")
    {
        alert("you have to input password")
        return false;
}
else if(un=="")
    {
        alert("you have to input username")
        return false;
}


}
