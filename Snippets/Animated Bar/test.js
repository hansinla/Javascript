	// #box{
	// 	background-color: #FF850A;
	// 	width: 100px;
	// 	height: 100px;
	// 	display: inline-block;
	// 	position: absolute;
	// 	left: 5px;
	// 	top: 5px;
	// }

function animate() {
	// body...
	// 
	document.getElementById("box").style.backgroundColor = #FF850A;
	document.getElementById("box").style.height = "30px";
	document.getElementById("box").style.width =  "100px";

	alert(document.getElementById("box").style.width());
}

animate();