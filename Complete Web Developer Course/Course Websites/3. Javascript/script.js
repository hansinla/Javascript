		var colorArray = ["red", "green", "yellow", "blue", "black"];
		var clickedTime;
		var createdTime;
		var reactionTime;
		document.getElementById("box").hidden = true;
		
		function makeBox() {
			var time = Math.random()*5001;
			var colorIndex = Math.floor(Math.random(0)*5);
			var x;
			setTimeout(function() {
				document.getElementById("box").hidden = false;
				document.getElementById("box").style.backgroundColor = colorArray[colorIndex];
				if (Math.random() > 0.5) {
					document.getElementById("box").style.borderRadius = "50%";
				} else {
					document.getElementById("box").style.borderRadius = "0%";
				}
				document.getElementById("box").style.left = Math.random(0)*500 + "px";
				document.getElementById("box").style.top = Math.random(0)*300 + "px";
				createdTime = Date.now();
			}, time); 
			
		}
		
		document.getElementById("box").onclick = function(){
				clickedTime =  Date.now();
				reactionTime = (clickedTime - createdTime)/1000;
				document.getElementById("time").innerHTML = reactionTime;
				this.hidden = true;
				makeBox();
			}
			
		makeBox();			
