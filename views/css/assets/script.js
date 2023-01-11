function openNav() {
    var side = document.getElementById("mySidenav");
    if (side.style.width == "300px") 
	{
		side.style.width = "0px";
		enableScrolling();
	}else
	{
		side.style.width = "300px";
		disableScrolling();
	}

}

function disableScrolling(){
    /*var x=window.scrollX;
    var y=window.scrollY;
    window.onscroll=function(){window.scrollTo(x, y);};*/
	document.body.classList.add("stop-scrolling");
}

function enableScrolling(){
    /*window.onscroll=function(){};*/
	document.body.classList.remove("stop-scrolling");
}