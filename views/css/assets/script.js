function openNav() {
    var side = document.getElementById("mySidenav");
    if (side.style.width == "250px") 
	{
		side.style.width = "0px";
		enableScrolling();
	}else
	{
		side.style.width = "250px";
		disableScrolling();
	}

}

function disableScrolling(){
    var x=window.scrollX;
    var y=window.scrollY;
    window.onscroll=function(){window.scrollTo(x, y);};
}

function enableScrolling(){
    window.onscroll=function(){};
}