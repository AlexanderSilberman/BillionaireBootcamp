//Global Variables
var mode="moving";
var txtbox=false;
var cur=false;
var then=0;
var week=0;

var counter=0;

var hero={
	speed:128,
	goneToWork:false,
	activity:false,
	sick:false,
	wages:15.00,
	hours:40,
	livingcosts:0,
	stress:50,
	health:50	
}
var stats={
	money:5000,
	charity:0,
	funL:0,
	funS:0,
	invest:0,
	education:0,
	sustain:300,
	tcharity:0,
	tfunL:0,
	tfunS:0,
	tinvest:0,
	teducation:0,
	tsustain:0
}


//Wraps text based on max width provided and adds it to the canvas prototype. Will fix this up to work properly later.
CanvasRenderingContext2D.prototype.wrapText = function (text, x, y, maxWidth, lineHeight) {
	if(text==null){
		return;	
	}
    var lines = text.split("\n");
    for (var i = 0; i < lines.length; i++) {
        var words = lines[i].split(' ');
        var line = '';
        for (var n = 0; n < words.length; n++) {
            var testLine = line + words[n] + ' ';
            var metrics = this.measureText(testLine);
            var testWidth = metrics.width;
            if (testWidth > maxWidth && n > 0) {
                this.fillText(line, x, y);
                line = words[n] + ' ';
                y += lineHeight;
            }
            else {
                line = testLine;
            }
        }
        this.fillText(line, x, y);
        y += lineHeight;
    }
}

//Actually loads the frames of animation and then calls the main function again
//Uses any of the requestanimationframe capabilities a browser might have and if
//none are working it resorts to setTimeout to call Main
window.requestAnimFrame = (function(){
	return  window.requestAnimationFrame       || 
			window.webkitRequestAnimationFrame || 
			window.mozRequestAnimationFrame    || 
			window.oRequestAnimationFrame      || 
			window.msRequestAnimationFrame     || 
			function(/* function */ callback, /* DOMElement */ element){
				window.setTimeout(callback, 1000 / 60);
			};
})();


//Global Function. Called by image repository when all images are loaded.
function init(){
	//Returns true if the browser supports canvas.
	console.log("about to try to do game init");
	if(game.init())
		//Initializes the game loop.
		game.start();	
}

var game= new function(){
	//Create the Canvas
	this.init=function() {
		this.canvas = document.createElement("canvas");
		if(this.canvas.getContext) {
		  this.ctx = this.canvas.getContext("2d");
		  this.canvas.width = 640;
		  this.canvas.height = 576;
		  var can=document.getElementById("canvascontainer");
		  can.appendChild(this.canvas);
		  return true;
		}
	};
	//Start the loop
	this.start=function(){
		then=Date.now();
		hero.x = this.canvas.width / 2;
		hero.y = this.canvas.height / 2;
		console.log("About to try to do main for the first time");
		main();
	}
}

// The main game loop
var main = function () {
	var now = Date.now();
	var delta = now - then;
	//Deals with keyboard commands
	update(delta / 1000);
	//Renders the images based on changes from update
	render();
	
	then = now;
	//Call a frame of animation which then calls back to animate starting the loop
	requestAnimFrame(main);
};


//Dealing with the tilemap
var mapIndexOffset = -1;
var mapRows = 8;
var mapCols = 10;

var tileMap = [
       [0,1,1,47,58,59,39,43,1,2]
   ,   [10,52,52,11,68,69,49,53,23,12]
   ,   [10,62,62,11,11,11,11,11,33,12]
   ,   [10,11,11,11,11,11,11,11,37,12]
   ,   [10,11,11,65,66,11,11,11,11,12]
   ,   [10,11,11,61,61,61,61,11,11,12]
   ,   [10,11,11,61,61,61,61,11,11,12]
   ,   [20,21,21,21,63,64,21,21,21,22]

   ];

//Creates the images and houses them and starts everything once all are loaded.
var imageRepository = new function() {
	this.tilesheet=new Image();
	this.hero=new Image();
	this.textbox=new Image();
	this.cellphone=new Image();
	this.cursor=new Image();
	
	//Check that all images have been loaded
	var numImages = 4;
	var numLoaded = 0;
	function imageLoaded() {
		numLoaded++;
		if(numLoaded===numImages){
			console.log("About to do init");
			window.init();
		}
	}
	//As each image is loaded it calls the image loaded function to check
	this.tilesheet.onload=function(){
		imageLoaded();
	}
	this.hero.onload=function(){
		imageLoaded();
	}
	this.textbox.onload=function(){
		imageLoaded();
	}
	this.cellphone.onload=function(){
		imageLoaded();
	}
	this.cursor.onload=function(){
		imageLoaded();	
	}
	//Set the images sources
	this.tilesheet.src = "images/House.gif";
	this.hero.src = "images/hero.png";
	this.textbox.src = "images/Textbox.png";
	this.cellphone.src = "images/phone.png";
	this.cursor.src = "images/Cursor.png";
}


//Function to draw the background and everything else.
function drawScreen() {
   for (var rowCtr=0;rowCtr<mapRows;rowCtr++) {
      for (var colCtr=0;colCtr<mapCols;colCtr++){

         var tileId = tileMap[rowCtr][colCtr];
         var sourceX = Math.floor(tileId % 10) *16+(1*(tileId%10));
         var sourceY = Math.floor(tileId/10)*16+(1*(Math.floor(tileId/10)));
         game.ctx.drawImage(imageRepository.tilesheet, sourceX,
         sourceY,16,16,colCtr*64,rowCtr*64,64,64);
		
      }

   }
   game.ctx.drawImage(imageRepository.cellphone, 216, 256, 32,32); 
 }


var render =function () {
	//Need to later do dirty rectangles so I only need to call this once
	//if(guess){
		
		//Draws the background and the cellphone.
		drawScreen();
		//guess=false;
		
		//Stats section
		game.ctx.fillStyle="white";
		game.ctx.fillRect(0,500,500,500);
		game.ctx.drawImage(imageRepository.hero, hero.x, hero.y, 64, 64);
		game.ctx.fillStyle="rgb(0,0,0)";
		game.ctx.font = "24px Helvetica";
		game.ctx.textAlign = "left";
		game.ctx.textBaseline = "top";
		game.ctx.fillText("Cash=" + stats.money, 128,520,5000);
		game.ctx.fillText("Stress=" + hero.stress, 128,550,5000);
		game.ctx.fillText("Week "+week, 20, 520, 5000);
		if(txtbox==true){
		  textDisplay.update();
		  game.ctx.drawImage(imageRepository.textbox, 128,128, 384, 240);
		  game.ctx.fillStyle = "rgb(250, 250, 250)";
		  game.ctx.font = "24px Helvetica";
		  game.ctx.textAlign = "left";
		  game.ctx.textBaseline = "top";
		  game.ctx.wrapText(textDisplay.line0, 170, 128+32,300,30); 
		  game.ctx.wrapText(textDisplay.line1, 170, 190, 300,30);
		  game.ctx.wrapText(textDisplay.line2, 170, 220, 300,30);
		  game.ctx.wrapText(textDisplay.line3, 170, 250, 300,30);
		  game.ctx.wrapText(textDisplay.line4, 170, 280, 300,30);
		 if(cur==true){
			 game.ctx.drawImage(imageRepository.cursor, cursor.x, cursor.y);
		 }
	}

}

var textDisplay=new function(){
	this.line0=null;
	this.line1=null;
	this.line2=null;
	this.line3=null;
	this.line4=null;
	this.messageQueue=[];	
	//If I have messages go past five lines I'll have to deal with this
	this.t=0.0;
	
	this.update=function(){
		if(this.messageQueue.length > 0){
			if(this.line0==null){this.line0=this.messageQueue.shift();return;}
			else if (this.line1==null){this.line1=this.messageQueue.shift();return;}
			else if (this.line2==null){this.line2=this.messageQueue.shift();return;}
			else if (this.line3==null){this.line3=this.messageQueue.shift();return;}
			else if (this.line4==null){this.line4=this.messageQueue.shift();return;}
			else{
				this.line0=this.line1;
				this.line1=this.line2;
				this.line2=this.line3;
				this.line3=this.line4;
				this.line4=this.messageQueue.shift();	
			}
		}
	}
	this.say=function(msg){
		this.messageQueue.push(msg);
		
	}
	this.clear=function(){
		this.line0=null;
		this.line1=null;
		this.line2=null;
		this.line3=null;
		this.line4=null;	
	}
}

var cursor=new function(){
	this.pos=0;
	this.x=150;
	this.y=200;
	
	this.up=function(){
		if(this.pos>0){
			this.y-=30;
			this.pos--;
		}
	}
	this.down=function(){
		if(this.pos<3){
			this.y+=30;
			this.pos++;
		}
	}
	this.rst=function(){
		this.pos=0;
		this.x=150;
		this.y=200;	
	}
	
}


// Handle keyboard controls
var keysDown = {};

addEventListener("keydown", function (e) {
//console.log(e.keyCode);
e.preventDefault();
keysDown[e.keyCode] = true;
}, false);

addEventListener("keyup", function (e) {
delete keysDown[e.keyCode];
}, false);

// Update game objects
var update = function (modifier) {
	
	//When not in menus
	if(mode=="moving"){
		x=Math.ceil((hero.x)/64);
		y=Math.ceil((hero.y)/64);
		coord=x+y*mapCols;
		if (38 in keysDown) { // Player holding up
			blah=hero.y-(hero.speed*modifier);
			if(check("up", blah)){
				hero.y -= hero.speed * modifier;
			}
		}
		if (40 in keysDown) { // Player holding down
			blah=hero.y+(hero.speed*modifier);
			if(check("down",blah)){
				hero.y += hero.speed * modifier;
			}
			
			if(Math.ceil(hero.y/64)!=y && tileMap[y+1][x]!=61 && tileMap[y+1][x]!=11){
				hero.y=(y)*64;
			}  
		}
		if (37 in keysDown) { // Player holding left
			//console.log(coord);
			blah=hero.x-(hero.speed*modifier);
			
			if(check("left", blah)){
				hero.x -= hero.speed * modifier;
				}
		}
		if (39 in keysDown) { // Player holding right
			blah=hero.x+(hero.speed*modifier);
		
			if(check("right", blah)){
				hero.x += hero.speed * modifier;
		  }
		}
	  
	  
		if(32 in keysDown && hero.y==384 && x==5){ //Player pushes/holds space in front of the door
			txtbox=true;
			delete keysDown[32];
			mode="working"
			if(!hero.goneToWork){
				var total=stats.sustain+stats.charity+stats.invest+stats.funL+stats.funS+stats.invest;
				stats.money+=hero.wages*hero.hours-total;
				hero.stress+=5;
				hero.health-=2;
				console.log(total);
				textDisplay.say("You earned $"+(hero.wages*hero.hours));
				textDisplay.say("LIVING IS EXPENSIVE");
				textDisplay.say("Life costs you $"+total);
				textDisplay.say("Profit of $"+(hero.wages*hero.hours-total));
				events();
			}
			else{
				textDisplay.say("You already went to work!");
			}
	  }
	  //Space clicked near the phone
	  if(32 in keysDown && ((hero.y==320 && x==4 && y==5) 
	   || (hero.y==320 && x==3 && y==5)
	   || (hero.x==128 && x==2 && y==4)
	   || (hero.x==128 && x==2 && y==5)
	   || (hero.y==192 && x==3 && y==3)
	   || (hero.y==192 && x==4 && y==3) )){
		   txtbox=true;
		   delete keysDown[32];
		   mode="cellphone";
		   if(!hero.activity){
			  cur=true;
			  textDisplay.say("Who will you call?");
			  textDisplay.say("Call GoodWill (-$30/M)");
			  textDisplay.say("Friends (-$100)");
			  textDisplay.say("Call Stock Broker (-500)");
			  textDisplay.say("Upgrade House (-5000)");
		   }
		   else{
			   textDisplay.say("You should go to sleep!");
		   }
		  
	  } 
	  
	  //Use Computer
	  if(32 in keysDown && x==5 && y==2 && hero.y==128){
		  txtbox=true;
		  delete keysDown[32];
		  mode="computer";
		  if(!hero.activity){
			cur=true;
			textDisplay.say("What website?");
			textDisplay.say("Online classes (-$1500)");
			textDisplay.say("Add to bank funds (-200)");
			textDisplay.say("Play video games ($15/M");
			textDisplay.say("Resarch Stocks (-1000)");
		  }
		  else{
			  textDisplay.say("You should go to sleep!");
		  }
		  
	  }
	  
	  if(32 in keysDown && ((hero.x==448 && x==7 && y==3) 
	   || (hero.x==448 && x==7 && y==2) )){
		   
		  txtbox=true;
		  delete keysDown[32];
		  mode="sleep";
		  textDisplay.say("You go to sleep to prepare for work tomorrow.");
		  
	  }
	  
	  
	  //Find out locations, not needed for gameplay. Debugging only.
	  /*
	  else if(32 in keysDown){
		console.log(x);
		console.log(y);
		console.log(hero.x);
		console.log(hero.y);	
	  }
	  */
	  
	}
	
//OTHER MODES
	
	//Complete working
	if(mode=="working"){
		if(32 in keysDown){
			textDisplay.clear();
			mode="moving";
			txtbox=false;
			delete keysDown[32];
			hero.goneToWork=true;
		}
	}
	//Use the phone
	if(mode=="cellphone" || mode=="computer" || mode=="fridge" || mode=="bookshelf"){
		if(27 in keysDown){
			textDisplay.clear();
			cursor.rst();
			mode="moving";
			txtbox=false;
			cur=false;
			delete keysDown[32];
			
		}
		//Click down in the menu
		if(40 in keysDown){
			cursor.down();
			delete keysDown[40];	
		}
		//Click up in the menu
		if(38 in keysDown){
			cursor.up();
			delete keysDown[38];	
		}
		//Click Space
		if(32 in keysDown){
			  if(!hero.activity){
				hero.activity=true;
				cur=false;
				textDisplay.clear();
				result=true;
				if(cursor.pos==0){
					if(mode=="cellphone"){
					  textDisplay.say("You pledge 30 dollars a week to goodwill. They thank you profusely for your generous donation");
					  stats.charity+=30;
					}
					if(mode=="computer"){
						textDisplay.say("You sign up for some web programming classes. $1500 out the bank.");
						stats.teducation+=1500;
						stats.money-=1500;
					}
				}
			  
				else if(cursor.pos==1){
					if(mode=="cellphone"){
					  textDisplay.say("You go to the movies and then shopping with friends. Spend $100.");
					  stats.tfunS+=100;
					  stats.money-=100;
					  hero.stress-=10;  
					}
					if(mode=="computer"){
						textDisplay.say("You put $200 into your saving's account");
						stats.money-=200;
						stats.tinvest+=200;
					}
				}
				else if(cursor.pos==2){
					if(mode=="cellphone"){
					  textDisplay.say("You talk to your stock broker and invest $500 into a bundle of stocks.");
					  stats.tinvest+=500;
					  stats.money-=500; 
					}
					if(mode=="computer"){
						textDisplay.say("You sign up for a $15 video game subscription. You feel less frustrated.");
						stats.funS+=15;
						hero.stress-=5;
					}
				}
				else if(cursor.pos==3){
					if(mode=="cellphone"){
					  textDisplay.say("You upgrade your house's appliances for $5000. Everything works nice now.");
					  stats.tfunL+=5000;
					  stats.money-=5000;
					}
					if(mode=="computer"){
						textDisplay.say("You update your stocks. Hopefully it will pay off!");
						stats.money-=1000;
						stats.tinvest+=1000;
						
					}
				}
			}
		}
	}
	//Deals with going to sleep. Adds your pledged amounts to the total you have spent.
	if(mode=="sleep"){
		if(32 in keysDown){
			textDisplay.clear();
			mode="moving";
			txtbox=false;
			delete keysDown[32];
			hero.goneToWork=false;
			hero.activity=false;
			stats.tcharity+=stats.charity;
			stats.teducation=stats.education;
			stats.tfunL=stats.funL;
			stats.tfunS=stats.funS
			stats.tinvest=stats.invest;
			stats.tsustain=stats.sustain;
			week++;
			
			if(week>=10){
				txtbox=true;
				textDisplay.say("Game Over.");
				textDisplay.say("You made $"+(stats.money-5000));
				textDisplay.say("You invested $"+stats.tcharity+stats.tinvest+stats.tfunL+stats.tfunS+stats.tinvest+" into your life.\nPressA to restart");
				mode="gameover";
			}
		}
	}
};

var events = function(){
	var ran=Math.floor((Math.random()*10)+1);
	if((stats.tcharity/stats.tsustain)>=0.1){
		if(ran>=9){
				textDisplay.say("Charity is tax deductible! You gain $"+stats.tcharity*0.5+" back.");
		}
	}
}


var check = function(direction, loc){
	if(direction=="left"){
		if((tileMap[y][x-1]!=11 && tileMap[y][x-1]!=61) || (tileMap[y-1][x-1]!=11 && tileMap[y-1][x-1]!=61 && hero.y%64!=0)){
			if(hero.x%64==0){
				hero.x=(x)*64;
				return false;	
			}
			newx=Math.floor(loc/64);
			if(newx==(x-1)){
				hero.x=(x)*64;
				return false;
			}
		}
	}
	if(direction=="right"){
		if((tileMap[y][x+1]!=11 && tileMap[y][x+1]!=61)  || (tileMap[y-1][x+1]!=11 && tileMap[y-1][x+1]!=61 && hero.y%64!=0)  ){
			if(hero.x%64==0){
				return false;	
			}
			newx=Math.floor(loc/64);
			if(newx==(x)){
				hero.x=(x)*64;
				return false;
			}
			if(hero.x>(x)*64){
				hero.x=(x)*64;
				return false;
			}
			
		}
	}
	if(direction=="up"){
		if((tileMap[y-1][x]!=11 && tileMap[y-1][x]!=61) || (tileMap[y-1][x-1]!=11 && tileMap[y-1][x-1]!=61  && hero.x%64!=0)  ){
			if(hero.y%64==0){
				return false;	
			}
			
			newy=Math.floor(loc/64);
			if(newy==(y-1)){
				hero.y=(y)*64;
				return false;
			}
			
			
			if(hero.y<=(y+1)*64){
				hero.y=(y)*64;
				return false;
			}
			
		}
	}
	if(direction=="down"){
		if((tileMap[y+1][x]!=11 && tileMap[y+1][x]!=61) ||  (tileMap[y+1][x-1]!=11 && tileMap[y+1][x-1]!=61  && hero.x%64!=0)  ){
			if(hero.y%64==0){
				return false;	
			}
			
			newy=Math.ceil(loc/64);
			if(newy==(y+1)){
				console.log(newy);
				hero.y=(y)*64;
				return false;
			}
			
			
			/*
			if(hero.y<=(y+1)*64){
				//console.log("I am now putting myself at "+x*64);
				hero.y=(y-1)*64;
				return false;
			}
			*/
		}
	}
	
	
	return true;
}


