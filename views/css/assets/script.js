function openNav() {
    var side = document.getElementById("mySidenav");
    if (side.style.width == "250px") 
	{
		side.style.width = "0px";
	}else
	{
		side.style.width = "250px";
	}
}