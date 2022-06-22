var editPosition=document.getElementsByClassName("d-flex");





/* targets the frontend button and adds a green background hover effect to it as well as the following properties to the other elements */
var addBackgroundFrontEndHover=document.getElementById("item1");
addBackgroundFrontEndHover.addEventListener('show.bs.dropdown', function () {
addBackgroundBackEndHover.style.backgroundColor = 'inherit'; 
addBackgroundDatabaseHover.style.backgroundColor = 'inherit';
changeTechNewsBackgroundColor.style.backgroundColor='inherit'; 
addBackgroundServersHover.style.backgroundColor = 'inherit';
addLoginHoverEffect.style.backgroundColor = 'inherit';
addBackgroundFrontEndHover.style.backgroundColor = 'green'; 
  });


  /* targets the backend button and adds a green background hover effect to it as well as the following properties to the other elements */
var addBackgroundBackEndHover = document.getElementById('item2')
addBackgroundBackEndHover.addEventListener('show.bs.dropdown', function () {
addBackgroundFrontEndHover.style.backgroundColor = 'inherit';
addBackgroundDatabaseHover.style.backgroundColor = 'inherit'; 
changeTechNewsBackgroundColor.style.backgroundColor='inherit'; 
addBackgroundServersHover.style.backgroundColor = 'inherit';
addLoginHoverEffect.style.backgroundColor = 'inherit';
addBackgroundBackEndHover.style.backgroundColor = 'green';
  });

/* targets the database button and adds a green background hover effect to it as well as the following properties to the other elements */ 
var addBackgroundDatabaseHover=document.getElementById('item3')
addBackgroundDatabaseHover.addEventListener('show.bs.dropdown', function () {
addBackgroundFrontEndHover.style.backgroundColor = 'inherit';
addBackgroundBackEndHover.style.backgroundColor = 'inherit'; 
changeTechNewsBackgroundColor.style.backgroundColor='inherit'; 
addBackgroundServersHover.style.backgroundColor = 'inherit';
addLoginHoverEffect.style.backgroundColor = 'inherit';
addBackgroundDatabaseHover.style.backgroundColor = 'green'; 
});

/* targets the tech-news button and adds a green background hover effect to it as well as the following properties to the other elements */
var changeTechNewsBackgroundColor=document.getElementById('item4');
changeTechNewsBackgroundColor.addEventListener('show.bs.dropdown', function(){
addBackgroundFrontEndHover.style.backgroundColor = 'inherit';
addBackgroundBackEndHover.style.backgroundColor = 'inherit';
addBackgroundDatabaseHover.style.backgroundColor = 'inherit'; 
addBackgroundServersHover.style.backgroundColor = 'inherit';
addLoginHoverEffect.style.backgroundColor = 'inherit';
changeTechNewsBackgroundColor.style.backgroundColor='green'; 
});

/* targets the server button and adds a green background hover effect to it as well as the following properties to the other elements */
var addBackgroundServersHover=document.getElementById('item5');
addBackgroundServersHover.addEventListener('show.bs.dropdown', function () {
addBackgroundFrontEndHover.style.backgroundColor = 'inherit';
addBackgroundBackEndHover.style.backgroundColor = 'inherit';
addBackgroundDatabaseHover.style.backgroundColor = 'inherit';
changeTechNewsBackgroundColor.style.backgroundColor='inherit'; 
addLoginHoverEffect.style.backgroundColor = 'inherit';
addBackgroundServersHover.style.backgroundColor = 'green';
});


/* targets the login button and adds a green hover effect to it upon click */
var addLoginHoverEffect=document.getElementById("item6");
addLoginHoverEffect.addEventListener("click", function(){
addBackgroundFrontEndHover.style.backgroundColor = 'inherit';
addBackgroundBackEndHover.style.backgroundColor = 'inherit';
addBackgroundDatabaseHover.style.backgroundColor = 'inherit';
changeTechNewsBackgroundColor.style.backgroundColor='inherit'; 
addBackgroundServersHover.style.backgroundColor = 'inherit';
this.style.backgroundColor = 'green';
}); 

var countries = ["Javascript","Phyton", "How can I", "Asp.net","Ruby on rails","PHP","Bootstrap","React","Jquery","HTML","CSS","Typescript","Vue.js","Angular.js","Object oriented programming", "Java","MYSQL","LARAVEL"];

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  
  document.addEventListener("click", function (e) { /*execute a function when someone clicks in the document:*/
      closeAllLists(e.target);
  });
  } 

  /*Passes the countries array as the second parameter of the autocomplete function:*/
  autocomplete(document.getElementById("myInput"), countries);


