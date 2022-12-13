//Cambia el type de password a text para mostrar la contraseña.
function mostrarContrasena(){
    var tipo = document.getElementById("password");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}


/*const handleDropdownClicked = (event) => {
    event.stopPropagation();
    const dropdown = document.getElementById("dropdown");
    toggleDropdown(!dropdown.classList.contains("open"));
  };
  
  const toggleDropdown = (shouldOpen) => {
    const dropdown = document.getElementById("dropdown");
    const icon = document.getElementById("icon");
  
    if (shouldOpen) {
      dropdown.classList.add("open");
    } else {
      dropdown.classList.remove("open");
    }
  
    icon.innerText = dropdown.classList.contains("open")
      ? "close"
      : "expand_more";
  };
  
  document.body.addEventListener("click", () => toggleDropdown());
  

/*jQuery(function () {
  var urlActual = window.location
  let $hrefUrl = Object.values(urlActual)[1]; 
  jQuery('a[href="'+$hrefUrl+'"]').addClass("active");
});*/

jQuery(function () {

//  jQuery('[data-toggle="tooltip"]').tooltip();
  jQuery(".categoriaLink").click(function(){
    let $elemento_a = this;
    console.log($elemento_a);
    let $href = jQuery($elemento_a).attr('href');
    Lockr.set('href',$href);
  });

  let $href = Lockr.get('href');
  //let $padre = jQuery('a[href="'+$href+'"]').parent();
  //jQuery($padre).addClass("categoriaLinkActive");
  jQuery('a[href="'+$href+'"]').addClass("categoriaLinkActive");
  jQuery('a[href="'+$href+'"]').removeClass("categoriaLink");
});