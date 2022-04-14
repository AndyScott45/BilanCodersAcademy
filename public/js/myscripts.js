var form = document.getElementById("myID"); // targets the logout element and stores its value in a variable named form

document.getElementById("myID").addEventListener("click", function () {
  form.submit(); // adds a click event listener to the form variable so that the user is redirected to the welcome page upon clicking on the logout element
});
 
