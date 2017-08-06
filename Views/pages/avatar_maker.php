<script src="jscolor.js"></script>
<div id=page class="flexContainer flexWrap">
	<div id=character width=660 height=890>
		
		<img class="canvas" width="660" height="890" src="Images/bg1.png">
		<img id=background  width="660" height="890" src="Images/base1.png">
		<img class="hair_bas" width="660" height="890" src="Images/hair_empty.png">
		<img class="canvas" width="660" height="890" src="Images/clothing1.png">
		<img class="canvas" width="660" height="890" src="Images/makeUp1.png">
		<img id="eyes_flat" width="660" height="890" src="Images/eyes1_flat.png">
		<img class="canvas" width="660" height="890" src="Images/eyes1.png">
		<img class="canvas" width="660" height="890" src="Images/eyebrow1.png">
		<img id="hair_flat" width="660" height="890" src="Images/hair1_flat.png">
		<img class="canvas" width="660" height="890" src="Images/hair1.png">
		<img class="canvas" width="660" height="890" src="Images/mouth1.png">
		<img class="canvas" width="660" height="890" src="Images/nose1.png">
		<img class="canvas" width="660" height="890" src="Images/deco1.png">
		<canvas class="canvas" id="savedImage" width="660" height="890"></canvas>
		<div id="space"></div>
	</div>    
	
	<div id=buttons class="flexContainer flexWrap">

	  <div id="controllers" class="accordion">
	    <button id="toDataURL">Save Image</button>
	    <button id="colorPicker" class="jscolor {valueElement:null,value:'66ccff',onFineChange:'changeHairColor(this)',width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}">Change hair color</button>
	    <button id="coloreyespicker"  class="jscolor {valueElement:null,value:'66ccff',onFineChange:'changeEyesColor(this)',width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}">Change eyes color</button>
	    <img style="display:none;" id=imagedata>
	 
	  </div>
	  <button class="accordion">Background
	  <div class="panel">
	    <img src="Images/bg1.png" alt="background1" width="50" height="50">
	    <img src="Images/bg2.png" alt="background2" width="50" height="50">
	    <img src="Images/bg3.png" alt="background3" width="50" height="50">
	    <img src="Images/bg4.png" alt="background4" width="50" height="50">
	    <img src="Images/bg5.png" alt="background5" width="50" height="50">
	    <img src="Images/bg6.png" alt="background6" width="50" height="50">
	    <img src="Images/bg7.png" alt="background7" width="50" height="50">
	    <img src="Images/bg8.png" alt="background8" width="50" height="50">
	    <img src="Images/bg9.png" alt="background9" width="50" height="50">
	  </div></button>
	  <button class="accordion">Clothes
	  <div class="panel">
	    <img src="Images/clothing1.png" alt="clothing1" width="50" height="50">
	    <img src="Images/clothing2.png" alt="clothing2" width="50" height="50">
	    <img src="Images/clothing3.png" alt="clothing3" width="50" height="50">
	  </div></button>
	  <button class="accordion">Make up
	  <div class="panel">
	    <img src="Images/makeUp1.png" alt="MakeUp1" width="50" height="50">
	    <img src="Images/makeUp2.png" alt="MakeUp2" width="50" height="50">
	    <img src="Images/makeUp3.png" alt="MakeUp3" width="50" height="50">
	  </div></button>
	   <button class="accordion">Eyes
	  <div class="panel">
	    <img src="Images/eyes1.png" alt="eyes1" width="50" height="50">
	    <img src="Images/eyes2.png" alt="eyes2" width="50" height="50">
	    <img src="Images/eyes3.png" alt="eyes3" width="50" height="50">
	    <img src="Images/eyes4.png" alt="eyes4" width="50" height="50">
	    <img src="Images/eyes5.png" alt="eyes5" width="50" height="50">
	    <img src="Images/eyes6.png" alt="eyes6" width="50" height="50">
	    <img src="Images/eyes7.png" alt="eyes7" width="50" height="50">
	    <img src="Images/eyes8.png" alt="eyes8" width="50" height="50">
	    <img src="Images/eyes9.png" alt="eyes9" width="50" height="50">
	    <img src="Images/eyes10.png" alt="eyes10" width="50" height="50">
	    <img src="Images/eyes11.png" alt="eyes11" width="50" height="50">
	    <img src="Images/eyes12.png" alt="eyes12" width="50" height="50">
	  </div></button>
	  <button class="accordion">Eyebrows
	  <div class="panel">
	    <img src="Images/eyebrow1.png" alt="eyebrow1" width="50" height="50">
	    <img src="Images/eyebrow2.png" alt="eyebrow2" width="50" height="50">
	    <img src="Images/eyebrow3.png" alt="eyebrow3" width="50" height="50">
	    <img src="Images/eyebrow4.png" alt="eyebrow4" width="50" height="50">
	    <img src="Images/eyebrow5.png" alt="eyebrow5" width="50" height="50">
	    <img src="Images/eyebrow6.png" alt="eyebrow6" width="50" height="50">
	  </div></button>
	   <button class="accordion">Hair
	  <div class="panel">
	    <img src="Images/hair1.png" alt="hair1" width="50" height="50">
	    <img src="Images/hair2.png" alt="hair2" width="50" height="50">
	    <img src="Images/hair3.png" alt="hair3" width="50" height="50">
	    <img src="Images/hair4.png" alt="hair4" width="50" height="50">
	    <img src="Images/hair5.png" alt="hair5" width="50" height="50">
	    <img src="Images/hair6.png" alt="hair6" width="50" height="50">
	    <img src="Images/hair7.png" alt="hair7" width="50" height="50">
	    <img src="Images/hair8.png" alt="hair8" width="50" height="50">
	    <img src="Images/hair9.png" alt="hair9" width="50" height="50">
	    <img src="Images/hair10.png" alt="Hair10" width="50" height="50">
	    <img src="Images/hair11.png" alt="Hair11" width="50" height="50">
	  </div></button>
	   
	  <button class="accordion">Mouth
	  <div class="panel">
	    <img src="Images/mouth1.png" alt="mouth1" width="50" height="50">
	    <img src="Images/mouth2.png" alt="mouth2" width="50" height="50">
	    <img src="Images/mouth3.png" alt="mouth3" width="50" height="50">
	    <img src="Images/mouth4.png" alt="mouth4" width="50" height="50">
	    <img src="Images/mouth5.png" alt="mouth5" width="50" height="50">
	    <img src="Images/mouth6.png" alt="mouth6" width="50" height="50">
	    <img src="Images/mouth7.png" alt="mouth7" width="50" height="50">
	    <img src="Images/mouth8.png" alt="mouth8" width="50" height="50">
	    <img src="Images/mouth9.png" alt="mouth8" width="50" height="50">
	  </div></button>
	  <button class="accordion">Nose
	  <div class="panel">
	    <img src="Images/nose1.png" alt="nose1" width="50" height="50">
	    <img src="Images/nose2.png" alt="nose1" width="50" height="50">
	    <img src="Images/nose3.png" alt="nose1" width="50" height="50">
	  </div></button>
	  
	  <button class="accordion">Decorations
	  <div class="panel">
	    <img src="Images/deco1.png" alt="Decorations1" width="50" height="50">
	    <img src="Images/deco2.png" alt="Decorations2" width="50" height="50">
	    <img src="Images/deco3.png" alt="Decorations3" width="50" height="50">
	    <img src="Images/deco4.png" alt="Decorations4" width="50" height="50">
	  </div></button>
	</div>



</div>
<p style="color:white;text-align: center;font-size: 120%;">ONLY WORKS IN CHROME. Some hair styles have a unique color. To save your character, click on "Save Image" then right click -> Save Image As.</p>
<p style="color:white;text-align: center;font-size: 120%;">If you have ideas about features that could be added, let me know</p>
