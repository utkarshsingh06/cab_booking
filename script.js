function myfunction(){
    var x= document.forms["form1"]["name"].value.length;
    if(x<=3)
    {
        alert("name must be greater than 3 characters");
        return false;
    }
    
}