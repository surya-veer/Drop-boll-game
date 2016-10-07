<html>
<head>
  <title>Drop Ball Game</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#help").hover(function(){
        $("#discription").slideToggle("slow");
    });
});
</script>
  <title>demo</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}	
		.container{
			height: 100%;
			width: 100%;
		}
		.container .uppper-wall{
			background-color: #95A5A6;
			width: 100%;
			height: 575px;
		}

		.container .down-wall{
			background-color: #2C3E50;
			width: 100%;
			height: 95px;
		
		}

		.container .down-wall .ball1{
			z-index: 999; 
			position: absolute; 
			left: 0px; top: 480px;
			
		}
		.container .down-wall .ball2{
			z-index: 999; 
			position: absolute; 
			right: 350px; top: 480px;
			
		}

		.container .down-wall .ball1:hover{
			cursor: move;
		}
		.container .down-wall .balance-1{
			height: 30px;
			width: 200px;
			background-color: red;
			position: absolute;
			bottom:18px;
			left:300px;
			top: 575px
		}

		.container .down-wall .balance-2{
			height: 30px;
			width: 200px;
			background-color: green;
			position: absolute; 
			right: 300px; top: 575px
			}
		.arrow{
			position: absolute;
			left: 1000px;
			top: 30px;
		}
		#help{
			padding: 5px;
			width: 300px;
    		text-align: center;
    		
    		background-color: #ffcc00;
    		border: solid 1px #c3c3c3;
		}
		#discription {
    		padding: 5px;
			width: 300px;
    		text-align: center;		
    		background-color: #ffcc00;
    		border: solid 1px #c3c3c3;
    		display: none;
		}
		
		
	</style>
	
</head>
	<body>
		<div class="arrow">
		<h style="color:red;">Try to reach upto this height</h>
			</br>
		<img src="http://simpleicon.com/wp-content/uploads/arrow-31.svg" id="arro1w" width="150px">
		</div>

		<div class="container"><!-- <img src="wall.jpg" width='100%' height='80%'> -->
			<div class="uppper-wall">
				<div id="Helper">
			<div id="help">Help?</div>
			<div id="discription">Drag blue ball and drop from sufficent height in range of red plank so that second ball can hit the target.</div>
		</div>
			</div>
			<div class="down-wall">
				<div class="ball1">
					<img id="ball1" src="http://img03.deviantart.net/b561/i/2014/209/2/0/koons_ball_png_by_weedihd-d7r6n5u.png" width="100px" height="100px">	
				</div>
				<div class="ball2">
					<img id="ball2" src="http://gallery.yopriceville.com/var/albums/Free-Clipart-Pictures/Sport-PNG/Baseball_Ball_PNG_Clipart_Picture.png?m=1435294977" width="100px" height="100px">	
				</div>
				<div class="balance-1">

				</div>

				<div class="balance-2">

				</div>
			</div>
		</div>
	</body>

<script type="text/javascript">
	document.getElementById('ball1').onmousedown = function() {
  	this.style.position = 'absolute';
  	var self = this;
  	//	fixPageXY();
  	document.onmousemove = function(e) {
    e = e || event;
    fixPageXY(e);
    self.style.left = e.pageX-50+'px'; 
    self.style.top = e.pageY-525+'px'; 
  }
  this.onmouseup = function(e,self) {
    document.onmousemove = null;
  	move1(e,self);
  }
}


document.getElementById('ball1').ondragstart = function() { return false }

function move1(e,self) {

  var top = e.pageY;
  var x_range=e.pageX;
  //alert(x_range);
   var time=0;
  var elm =document.getElementById('ball1');
  elm.style.position = 'absolute';
  function frame() {
    top=top+5*(time*time/1000000);;  // update parameters  
    elm.style.top= top-535 + 'px' // show frame
    if (top>=530 )  // check finish condition
       {
       	clearInterval(id)
       	if(x_range<500&&x_range>320)
       	move2(time);
       	else
       	Alert_worng();
       }
  time=time+10;
  }
  var id = setInterval(frame, 10) // draw every 10ms
  
}

function move2(time) {
	var time1=time;
  var elm1=document.getElementById("ball2");
  elm1.style.position='relative';
  var top=elm1.style.top;
  function frame1() {
    top=top-5*(time1*time1/1000000);;  // update parameters 
    elm1.style.top= top + 'px' // show frame
    if (time1<=0 )  // check finish condition
       {
       	clearInterval(id1)
       	if(top<-440)
       	Alert_reload();
       	else
       	Alert_worng();
       }
  time1=time1-10;
  }
  var id1 = setInterval(frame1, 10) // draw every 10ms
}

function Alert_reload()
{
	if(confirm("You won :) Do you want to repaly !")==true)
		window.location.href = window.location.href;
	else
	window.location.href = window.location.href;
}
function Alert_worng()
{
	if(confirm("Wrong try :( Do you want to replay!!")==true)
		window.location.href = window.location.href;
	else
		window.location.href = window.location.href;
}



function fixPageXY(e) {
  if (e.pageX == null && e.clientX != null ) { 
    var html = document.documentElement
    var body = document.body

    e.pageX = e.clientX + (html.scrollLeft || body && body.scrollLeft || 0)
    e.pageX -= html.clientLeft || 0
    
    e.pageY = e.clientY + (html.scrollTop || body && body.scrollTop || 0)
    e.pageY -= html.clientTop || 0
  }
}

	</script>
	
</html>