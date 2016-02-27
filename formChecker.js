function checkForm()
{
  var user = document.getElementById("user").value;
  var password = document.getElementById("password").value;
  var shipping = document.getElementById("shipping").value;
  var q1 = parseInt(document.getElementById("quantity1").value);
  var q2 = parseInt(document.getElementById("quantity2").value);
  var q3 = parseInt(document.getElementById("quantity3").value);

  var userCheck = /\b\w+@\w+\.com\b/;
  var valid = true;

  if(!userCheck.test(user))
  {
    alert("Username is invalid!\nUsername must be of the form name@domain.com");
    return false;
  }
  if(password == null || password == "")
  {
    alert("Password is invalid!");
    return false;
  }

  if(shipping != "sevenDay" && shipping != "threeDay" && shipping != "overnight")
  {
    alert("You have not selected a shipping method!");
    return false;
  }

  if(isNaN(q1) || isNaN(q2) || isNaN(q3))
  {
    alert("You have entered an invalid quantity!\nQuantities must be positive integers.\n(Quantities cannot be left blank)");
    return false;
  }
  else
  {
    if(q1 < 0 || q2 < 0 || q3 < 0)
    {
      alert("You have entered an invalid quantity!\nQuantities must be positive integers.");
      return false;
    }
  }

  return true;
}
