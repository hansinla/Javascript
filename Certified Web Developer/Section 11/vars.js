var username = "Hans van Riet";
document.write(username);

var age = 56;
document.write("</br>My age is ", age);

var citizen = true;

document.write("</br>");
if (age >= 18 && citizen){
	document.write("You may vote.");
}

document.write("</br>");
document.write(1 == "1");

document.write("</br>");
document.write(1 === "1"); // test if value AND type are the same