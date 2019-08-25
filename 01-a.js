document.addEventListener("DOMContentLoaded",function() {
	var x1 = document.getElementById('Nut1');
	var khoi = document.getElementsByClassName('card')
	x1.onclick = function() {
		khoi[0].classList.toggle("diphai");
	}
},false)