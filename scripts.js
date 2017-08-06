


function cree_abonnements() 
{
	
	

	console.log("hello");
	'use strict';

	var nsfwbtn=document.getElementById("nsfwbutton");
	if(nsfwbtn != null)
	{
			document.getElementById("nsfwbutton").onclick = function(){
			r =window.confirm('This gallery is Not Safe For Work. It may contain mature content.');
			if (r == true) {
			    document.getElementById('nsfw').style.display='';
			    document.getElementById("nsfwbutton").style.display='none';
			    height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
			    footer.style.top=height+"px";
			}
		};
	}
  var x = screen.availWidth-760;
  var xy = window.innerWidth-760;
  console.log("x = "+x);
  console.log("xy = "+xy);
  var body=document.getElementsByTagName("body")[0];
  var html=document.getElementsByTagName("html")[0];
  var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
  var footer =document.getElementsByTagName("footer")[0];
  	footer.style.position="absolute";
  	//console.log("height = "+height);
  		footer.style.top=height+"px";

  var btns =document.getElementById("buttons");
  if(btns != null)
  	{
  		btns.style.maxWidth=x+"px";
  		btns.style.width=xy+"px";
  	}
   /**
   * Selectors & vars
   */
	var acc = document.getElementsByClassName("accordion");  	
    var panels = document.getElementsByClassName("panel");
  	var i,j;
  	var tabImage = [];
  	/**
  	* Methods
  	*/
   for (i = 0; i < acc.length; i++) 
   {
       acc[i].onclick = function(){
       		for (j = 0; j < acc.length; j++) {
       			acc[j].firstElementChild.classList.remove("show");
       		}
           this.classList.toggle("active");
           this.firstElementChild.classList.toggle("show");
       }
       tabImage[i]=0;
   }
   
   function addImage(i,j,image)
   {
     	//console.log("j = "+j+" " +" i = "+i);

     	image.onclick=function()
     	{
	  		//console.log("clic");
	        //console.log(i+ "image.src = "+image.src);
	     		document.getElementsByClassName("canvas")[i].src = image.src; //c'est ici qu'on dessine une image
	     		tabImage[i]=j;//pour la sauvegarde de l'image
	     		k=j+1;//correspond au numero d'image
	     		//console.log("tabImage["+i+"]="+j);
	        
	        if(image.src.search("hair")!= -1)
	        {
		        	document.getElementsByClassName("hair_bas")[0].src=image.src.replace("hair"+k,"hair_empty");//enleve le bas des cheveux	        	
		        	document.getElementById("hair_flat").src=image.src.replace("hair"+k,"hair"+k+"_flat");//place la couleur
	        }
	        if(image.src.search("eyes")!= -1)
	        {
	        	document.getElementById("eyes_flat").src=image.src.replace("eyes"+k,"eyes"+k+"_flat");//place la couleur
	        }
	        if(image.src.search("hair4")!= -1)
	        {
	          document.getElementsByClassName("hair_bas")[0].src = image.src.replace("hair4","hair4_bas");
	        }
	        if(image.src.search("hair6")!= -1)
	        {
	          document.getElementsByClassName("hair_bas")[0].src = image.src.replace("hair6","hair6_bas");
	        }
	        if(image.src.search("hair7")!= -1)
	        {
	          document.getElementsByClassName("hair_bas")[0].src = image.src.replace("hair7","hair7_bas");
	        }      
    	}

      //console.log("hair"+j+"_flat");
     
    }


   	function createImage()
   	{
   		var canvas = document.getElementById("savedImage");
   		var ctx = canvas.getContext("2d");
   		var imgHair_flat = document.getElementById("hair_flat");
   		for (i = 0; i < panels.length; i++) 
   		{
       		if(i == 1)
       		{
        		ctx.drawImage(document.getElementsByClassName("hair_bas")[0],0,0);
        		ctx.drawImage(document.getElementById("background"),0,0);
        	}
        	if(i==3)
        		ctx.drawImage(document.getElementById("eyes_flat"),0,0);
        	if(i==5 && !(imgHair_flat.src.search("hair4")!= -1) &&  !(imgHair_flat.src.search("hair6")!= -1) &&  !(imgHair_flat.src.search("hair7")!= -1))
        		ctx.drawImage(document.getElementById("hair_flat"),0,0);
   			var images = panels[i].children;
   			ctx.drawImage(images[tabImage[i]],0,0);
   		}     
    	window.open(canvas.toDataURL());
      	ctx.clearRect(0,0,660,890); /*tout effacer*/
   	}
   	/**
   * Events
   */
   	var dturl=document.getElementById("toDataURL")
   	if(dturl!=null)dturl.addEventListener("click",createImage);
       	
       	
   

    for (i = 0; i < panels.length; i++) 
    {
    	var images = panels[i].children;
    	for(j=0;j<images.length;j++)
    	{
    		addImage(i,j,images[j]);
    	}
    }

    /********************************************
    COLORPICKER
    */

    //console.log("imgHair_flat = "+imgHair_flat);
    var canvas = document.createElement("canvas");
    var ctx = canvas.getContext("2d");
    var originalPixels = null;
    var currentPixels = null;

    window.getPixels =function(img)
	{
	    canvas.width = img.width;
	    canvas.height = img.height;

	    ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight, 0, 0, img.width, img.height);
	    originalPixels = ctx.getImageData(0, 0, img.width, img.height);
	    currentPixels = ctx.getImageData(0, 0, img.width, img.height);

	    img.onload = null;
	}
	window.changeHairColor =function(jscolor)
	{	
		var imgHair_flat = document.getElementById("hair_flat");
		if( !(imgHair_flat.src.search("hair4")!= -1) &&  !(imgHair_flat.src.search("hair6")!= -1) &&  !(imgHair_flat.src.search("hair7")!= -1))	
		{
			getPixels(document.getElementById("hair_flat"));
			
			
				/*console.log("imgHair_flat = "+imgHair_flat.src);
				console.log(jscolor.rgb[0]+" "+jscolor.rgb[1]+" "+jscolor.rgb[2]);
				document.getElementsByTagName("p")[0].innerHTML=jscolor;*/
				if(!originalPixels) return; // Check if image has loaded

			        for(var I = 0, L = originalPixels.data.length; I < L; I += 4)
			        {
			            if(currentPixels.data[I + 3] > 0) // If it's not a transparent pixel
			            {
			                currentPixels.data[I] =  jscolor.rgb[0];
			                currentPixels.data[I + 1] = jscolor.rgb[1];
			                currentPixels.data[I + 2] =  jscolor.rgb[2];
			            }
			        }

			    ctx.putImageData(currentPixels, 0, 0);
			    imgHair_flat.src = canvas.toDataURL("image/png");
		}

/*
	    getPixels(document.getElementsByClassName("hair_bas")[0]);
	    var imgHair_bas = document.getElementsByClassName("hair_bas")[0];
	    if(!originalPixels) return; // Check if image has loaded

	        for(var I = 0, L = originalPixels.data.length; I < L; I += 4)
	        {
	            if(currentPixels.data[I + 3] > 0) // If it's not a transparent pixel
	            {
	                    currentPixels.data[I] =  jscolor.rgb[0];
	                    currentPixels.data[I + 1] = jscolor.rgb[1];
	                    currentPixels.data[I + 2] =  jscolor.rgb[2];
	            }
	        }
	    ctx.putImageData(currentPixels, 0, 0);
	    imgHair_bas.src = canvas.toDataURL("image/png");*/
	 }
	 window.changeEyesColor =function(jscolor)
	 {
	 	getPixels(document.getElementById("eyes_flat"));
	 	var imgEyes_flat = document.getElementById("eyes_flat");

	 	/*console.log("imgHair_flat = "+imgHair_flat.src);
	 	console.log(jscolor.rgb[0]+" "+jscolor.rgb[1]+" "+jscolor.rgb[2]);
	 	document.getElementsByTagName("p")[0].innerHTML=jscolor;*/
	 	if(!originalPixels) return; // Check if image has loaded

	         for(var I = 0, L = originalPixels.data.length; I < L; I += 4)
	         {
	             if(currentPixels.data[I + 3] > 0) // If it's not a transparent pixel
	             {
	                 currentPixels.data[I] =  jscolor.rgb[0];
	                 currentPixels.data[I + 1] = jscolor.rgb[1];
	                 currentPixels.data[I + 2] =  jscolor.rgb[2];
	             }
	         }

	     ctx.putImageData(currentPixels, 0, 0);
	     imgEyes_flat.src = canvas.toDataURL("image/png");
	 }
}


window.addEventListener("load", cree_abonnements);