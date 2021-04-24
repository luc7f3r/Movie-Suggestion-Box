function validateform()
{
  var na=document.f1.name.value;
  if(na=null)
  {
    alert("ENTER NAME");
  }
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if (reg.test(document.f1.email.value) == false)
  {
    alert('Invalid Email Address');
    return (false);
  }
  var cont=document.f1.contact.value;
  if(cont.length>10||cont.length<10||isNaN(cont))
  {
    alert("ENTER VALID NUMBER");
    return (false);
  }
  var pas=document.f1.psw.value;
  if(pas.length<4)
  {
    alert("ENTER STRONG PASSWORD");
    return (false);
  }
  var pasr=document.getElementById("repeat");
  var pasr1=document.getElementById("password");
  if(pasr.value != pasr1.value)
  {
    alert("PASSWORD DIDN'T MATCHED");
    return (false);
  }
  var ag=document.getElementById("age");
  if(!(ag.value>15 && ag.value<101)){
  alert("You are Underage");
  return (false);
  }
}
