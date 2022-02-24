
    var modal = document.getElementById('id01');

       // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
          if (event.target == modal) {
          modal.style.display = "none";
    }
}
	
var antal = 0;
var sbenches = document.getElementsByClassName("mobel original ram");

function koords ()
{
	alert(document.getElementsById("pappa").offsetTop);
	//alert("hej");
	//classroomdbvar += sbenches[i].id + "xy" + sbenches[i].offsetLeft + sbenches[i].offsetTop;
	//document.getElementsByClassName("pappa").offsetLeft;
	//document.getElementsByClassName("pappa").offsetTop;

}

function kopiera(ide)
{
	var myDiv = document.getElementById(ide);
	var divClone = myDiv.cloneNode(true);
	let idnamn = "mobel" + antal;
	divClone.setAttribute("id", idnamn);
	document.getElementById("klassrum").appendChild(divClone);
	$("#"+idnamn).draggable({containment: "parent"});
	antal++;
	
let el = document.getElementById(idnamn);
	el.addEventListener('contextmenu', function(ev) {
		ev.preventDefault();
		el.parentNode.removeChild(el);
		return false;
	}, false);
}

$(document).ready(function(){
        $(".original").each(function(){
			let atr=this.getAttribute("id");
            document.getElementById(atr).addEventListener("click", function(){kopiera(atr);});
        });
});


//function Dilla()
{

 $(document).ready(function(){
    $("mobel").hide();
    $("#klassrum").mouseover(function(){
        var img = $("mobel");
		img.toggle(1000);
        img.animate({opacity: '100'}, "fast");
        img.animate({height: '72px'}, "fast");		
    });
});

}

