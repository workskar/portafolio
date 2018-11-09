AdUnit.prototype = new AdTemplate();

function AdUnit() {
	
	var swipeEventFired = false;
	var userAgent = navigator.userAgent;
	//get first digit of android version
	if(userAgent.indexOf('Android') != -1) {
		this.androidVersion = userAgent.split('Android ')[1].charAt(0);
	} else {
		this.androidVersion = 0;
	}	
	
	this.getCollapsedElements = function() { return [
		{type: 'img', name: 'collapsed-background', src: 'collapsed/banner-bg.jpg'},
		{type: 'img', name: 'xbox-logo', src: 'collapsed/xbox360.jpg'},
		{type: 'img', name: 'kinect-logo', src: 'collapsed/kinectlogo.png'},
		{type: 'img', name: 'collapsed-logo', src: 'collapsed/banner-logo.jpg'},
		{name: 'collapsed-text-1', html: 'TAKE DOWN<br />THE TERROR'},
		{name: 'collapsed-sub-text-1', html: 'WATCH TRAILER<span class=\"collapsed-arrow\"></span>'},
		{name: 'collapsed-text-2', html: 'OUT 8<sup>th</sup> FEB'},
//		{name:'impression-tracker', html:'<img width=\'1\' height=\'1\' style=\'border:0\' src=\'http://bs.serving-sys.com/BurstingPipe/adServer.bs?cn=tf&c=19&mc=imp&pli=6194155&PluID=0&ord=' + this.cacheBusterToken + '&rtu=-1&mb=1&ck=1\'/>'}		
	]; };
	
	this.getLoadingElements = function() {
		return [
			{name: 'loader-background', children:[
				{name: 'loader-bar'},
			 	{name:'loader-text', text:'LOADING'}
				,{name:'loader-percentage', html:''}
			]},
			
			{type: 'img', name: 'ice-preload', src: 'expandable/frost.jpg'}
		]
	}	
	
	this.displayCollapsedAdvert = function() {
	
		//setup click tracker
        if(this.adOverlay == true) {
			this.registerClickEvent(this.collapsedRootElement, function () {
				//thirdpartytracking
				this.recordEvent('http://bs.serving-sys.com/BurstingPipe/adServer.bs?cn=tf&c=20&mc=click&pli=6194155&PluID=0&ord=' + this.cacheBusterToken + '&mb=1&ck=1');
	        }.bind(this));	 
        }			
	
		this.bannerAnim = setTimeout(function() {
			this.els['collapsed-logo'].style['opacity'] = '0';
			this.els['collapsed-text-1'].style['opacity'] = '0.99';
			this.els['collapsed-sub-text-1'].style['opacity'] = '0.99';						
		}.bind(this), 2500);
		
		this.els['collapsed-text-1'].addEventListener("webkitTransitionEnd", function() {
			if(this.els['collapsed-text-1'].style['opacity'] == '0.99') {
				this.bannerAnim2 = setTimeout( function(){
					this.els['collapsed-text-1'].style['opacity'] = '0';
					this.els['collapsed-text-2'].style['opacity'] = '0.99';
				}.bind(this),2500)		
			}
		}.bind(this));	
		
		this.els['collapsed-text-2'].addEventListener("webkitTransitionEnd", function() {
			if(this.els['collapsed-text-2'].style['opacity'] == '0.99') {
				this.bannerAnim3 = setTimeout( function(){
					this.els['collapsed-text-2'].style['opacity'] = '0';
					this.els['collapsed-sub-text-1'].style['opacity'] = '0';
					this.els['collapsed-logo'].style['opacity'] = '0.99';					
				}.bind(this),2500)		
			}
		}.bind(this));	
		
		this.els['collapsed-logo'].addEventListener("webkitTransitionEnd", function() {
			if(this.els['collapsed-logo'].style['opacity'] == '0.99') {
				this.bannerAnim4 = setTimeout( function(){
					this.els['collapsed-logo'].style['opacity'] = '0';
					this.els['collapsed-text-1'].style['opacity'] = '0.99';
					this.els['collapsed-sub-text-1'].style['opacity'] = '0.99';					
				}.bind(this),2500)		
			}
		}.bind(this));							
	};
	
	this.getExpandedElements = function() { return [
		{type: 'img', name: 'expanded-background-1', src: 'expandable/bgimage_1.jpg'},
		{type: 'img', name: 'expanded-background-2', src: 'expandable/bgimage_2.jpg'},
		{type: 'img', name: 'expanded-background-3', src: 'expandable/bgimage_3.jpg'},
		{type: 'img', name: 'expanded-background-4', src: 'expandable/bgimage_4.jpg'},		
		
		{type: 'img', name: 'expanded-main-logo', src: 'expandable/main_logo.png'},		
		
		{name: 'menu-container', children: [
			{type: 'img', name: 'menu-top', src: 'expandable/menu_top.png'},
			{name: 'trailer-button', html: 'watch trailer', cssclass: 'menu-selected'},
			{name: 'gallery-button', html: 'gallery', cssclass: 'menu-unselected'},
			{name: 'find-out-button', html: 'find out more', cssclass: 'menu-unselected'},
			{name: 'pre-order-button', html: 'pre-order now', cssclass: 'menu-unselected'},									
			{type: 'img', name: 'menu-bottom', src: 'expandable/menu_bottom.png'},			
			
			{name: 'trailer-container', children: [
				{type: 'img', name: 'trailer-image', src: 'expandable/trailerimage.jpg'},
				{name: 'video-container', 'children' : [
		       		 {name: 'video-element', type : 'video'},
		        	 {name: 'video-spinner'}
				]},						
				{name: 'trailer-back-button', html: 'BACK'}
			]},
			
			{name: 'gallery-container', children: [
				
				{name: 'gallery-swipe-container', children: [
					{name: 'gallery-strip-container', children: [
						{type: 'img', name: 'gallery-image-1', src: 'expandable/gallery-images/1.png'},
						{type: 'img', name: 'gallery-image-2', src: 'expandable/gallery-images/2.png'},
						{type: 'img', name: 'gallery-image-3', src: 'expandable/gallery-images/3.png'},										
						{type: 'img', name: 'gallery-image-4', src: 'expandable/gallery-images/4.png'},
						{type: 'img', name: 'gallery-image-5', src: 'expandable/gallery-images/5.png'},										
					]},
				]},					
				
				{name: 'gallery-swipe-area'},
				{type: 'img', name: 'gallery-left-button', src: 'expandable/left.png'},
				{type: 'img', name: 'gallery-right-button', src: 'expandable/right.png'},				
				{name: 'gallery-back-button', html: 'BACK'}
			]},			
			
			{name: 'pre-order-container', children: [
				{type: 'img', name: 'pre-order-image', src: 'expandable/boxset.png'},
				{name: 'pre-order-text', html: 'DEMO OUT NOW TAP HERE TO PRE-ORDER'},
				{name: 'pre-order-back-button', html: 'BACK'}
			]},			
			
			{name: 'title-text', html: '/main menu'},
		]},
		//{type: 'img', name: 'temp-ice-image', src: 'expandable/frost.jpg'},
		{name: 'ice-canvas-wrapper', html: '<canvas id="ice-canvas" width="320" height="480"></canvas>'},
		{name: 'ice-wipe-text', html: 'WIPE SCREEN'},
		
		//MAIN CONTENT
		{name: 'facebook-button'},
		{type: 'img', name: 'pegi-image', src: 'expandable/logo_1.jpg'},
		{type: 'img', name: 'visceral-image', src: 'expandable/logo_2.png'},
		{type: 'img', name: 'ea-image', src: 'expandable/logo_3.png'},	
		{type: 'img', name: 'kinect-image', src: 'collapsed/kinectlogo.png'},				
		{type: 'img', name: 'xbox-footer', src: 'expandable/footer_xbox.jpg'}
	]; };
	
	this.displayExpandedAdvert = function () {
		var canvas;
		var context;
		//used to see if user has drawn
		this.canvasTouchTracker = 0;
			
		//Make sure rotate image does not scroll
		this.expandedRootElement.addEventListener('touchmove', this.disableDefaultBehaviour.bind(this), false);
	    this.placeholderDiv.addEventListener('touchmove', this.disableDefaultBehaviour.bind(this), false);
	    			
		//Sizing adjustments
		setTimeout(function () {
			this.getHeightAndPosition();
	    	this.fullScreenHeight = parseInt(this.expandedRootElement.expandedHeight) + (this.isAndroid);
	    	this.fullScreenWidth = parseInt(this.expandedRootElement.expandedWidth);
	    	this.widthDiff = this.fullScreenWidth - 320;
	    	this.heightDiff = this.fullScreenHeight - 417;	 	    	
			
	    	this.expandedRootElement.style.height = this.fullScreenHeight+ 'px';
	    	this.expandedRootElement.style.width = this.fullScreenWidth+ 'px';
	    	
	    	this.els['ice-canvas-wrapper'].style.height = this.fullScreenHeight+ 'px';
	    	this.els['ice-canvas-wrapper'].style.width = this.fullScreenWidth+ 'px';
	    	
	    	this.els['expanded-main-logo'].style.left = (42 + (this.widthDiff/2)) + 'px';
	    	this.els['visceral-image'].style.left = (123 + (this.widthDiff/2)) + 'px';
	    	this.els['menu-container'].style.left = (24 + (this.widthDiff/2)) + 'px';
	    	this.els['menu-container'].style.top = (15 + ((this.fullScreenHeight - 290)/2)) + 'px'; 
	    	//this.els['menu-container'].style.top = (130 + (this.heightDiff/2)) + 'px'; 
	    	
	    	//resize background loop if needed
	    	if(this.fullScreenHeight > 440) {
	    	    var bgSizeRatio = this.fullScreenHeight/921;
	    	    
		    	for(var i=4; i>0; i--) {	    	
			    	this.els['expanded-background-' + i].style.height = this.fullScreenHeight+ 'px';
			    	this.els['expanded-background-' + i].style.width = (640 * bgSizeRatio) + 'px';	
			    	this.els['expanded-background-' + i].style.left = ((this.fullScreenWidth - (640 * bgSizeRatio))/2) + 'px';	    	
		    	}
	    	}
	    	
	    	//initialise canvas after we have screen dimensions
	    	this.initialiseCanvas();
			
		}.bind(this),100);	
	    
		this.registerClickEvent(this.els['trailer-button'], function() {
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-trailer-menu');		
						
			this.menuAnimation('trailer');
		}.bind(this));
		
		this.registerClickEvent(this.els['gallery-button'], function() {
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-gallery-menu');		
						
			this.menuAnimation('gallery');
		}.bind(this));		
		
		this.registerClickEvent(this.els['trailer-back-button'], function() {
			this.exitVideo();
			this.menuAnimation('main-menu');
		}.bind(this));	
		
		this.registerClickEvent(this.els['gallery-back-button'], function() {
			this.menuAnimation('main-menu');
		}.bind(this));	
		
		this.registerClickEvent(this.els['gallery-left-button'], function() {
			this.rightHandler();
		}.bind(this));	
		
		this.registerClickEvent(this.els['gallery-right-button'], function() {
			this.leftHandler();
		}.bind(this));							
		
		this.registerClickEvent(this.els['pre-order-button'], function() {
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-pre-order-menu');		
						
			this.menuAnimation('pre-order');
		}.bind(this));		
		
		this.registerClickEvent(this.els['pre-order-back-button'], function() {
			this.menuAnimation('main-menu');
		}.bind(this));		
		
		this.registerClickEvent(this.els['find-out-button'], function() {
			this.els['trailer-button'].className = 'menu-unselected';
			this.els['gallery-button'].className = 'menu-unselected';
			this.els['find-out-button'].className = 'menu-selected';
			this.els['pre-order-button'].className = 'menu-unselected';
			
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-find-out-button');					
			
			this.navigateToURL('http://www.deadspace.com/uk');
		}.bind(this));		
		
		this.registerClickEvent(this.els['pre-order-image'], function() {
		
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-pre-order-button');		
						
			this.navigateToURL('http://www.amazon.co.uk/Dead-Space-3-Xbox-360/dp/B0089L1XQW/ref=sr_1_1_title_0?s=videogames&ie=UTF8&qid=1357309502&sr=1-1');
		}.bind(this));							
		
		this.registerClickEvent(this.els['facebook-button'], function() {
		
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-facebook-button');		
						
			this.navigateToURL('http://www.facebook.com/deadspace');
		}.bind(this));		
		
		this.registerClickEvent(this.els['trailer-image'], function() {
		
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('click-trailer-button');				
			
			//http://4sa.s3.amazonaws.com/common-assets/videos/dead-space-3new.3gp
			
			if((parseInt(this.androidVersion) < 4 && this.isAndroid) && window.isOrmmaAvailable) {
				ormma.playVideo("http://4sa.s3.amazonaws.com/common-assets/videos/DS3-2nd-vid.3gp");
			} else {
				this.prepareVideo("http://4sa.s3.amazonaws.com/common-assets/videos/DS3-2nd-vid.3gp");					
			}		
			
			//this.navigateToURL('http://www.youtube.com/watch?v=Ab3efOVe3BI&list=PL030A62339C205A2E&index=13');
		}.bind(this));							
		
		
		
		
		//gallery swipe
		this.initSceneStrip();		
				
			
	};
	
	this.showMainExpandedAd = function () {
		
		if(swipeEventFired == false){
			if(this.adEventTracker)
				this.adEventTracker.recordAdEventAsynchImage('user-finished-ice-swipe');		
				swipeEventFired = true;
		}	
		//start background loop
		this.initialiseBackgroundLoop();
		
		if(this.isAndroid) {
			this.els['ice-canvas-wrapper'].style['display'] = 'none';
		}
		
		this.els['ice-canvas-wrapper'].style['opacity'] = '0';
		this.els['ice-wipe-text'].style['opacity'] = '0';
		
		this.els['facebook-button'].style['opacity'] = '0.99';
		this.els['xbox-footer'].style['opacity'] = '0.99';
		this.els['expanded-main-logo'].style['opacity'] = '0.99';
		this.els['menu-container'].style['opacity'] = '0.99';
		this.els['visceral-image'].style['opacity'] = '0.99';
		this.els['pegi-image'].style['opacity'] = '0.99';
		this.els['ea-image'].style['opacity'] = '0.99';
		this.els['kinect-image'].style['opacity'] = '0.99';		
		
		setTimeout(function() {
			this.els['ice-canvas-wrapper'].style['display'] = 'none';
			this.els['ice-wipe-text'].style['display'] = 'none';		
		}.bind(this), 3000)
	}
	
	this.initialiseCanvas = function() {
    	//canvas must be initiated here after we have screen dimensions
    	this.els['ice-canvas-wrapper'].innerHTML = '<canvas id="ice-canvas" width="' + this.fullScreenWidth +'" height="' + this.fullScreenHeight + '"></canvas>';
    	canvas = document.getElementById('ice-canvas');
    	context = canvas.getContext('2d');
    	var iceImage = new Image(); 
    	iceImage.src = 'http://4sa.s3.amazonaws.com/ad-units/dead-space-3/images/expandable/frost.jpg';
    	
	    //frost image is jpg, so opacity must be set here
	    this.els['ice-canvas-wrapper'].style['opacity'] = '0.7';
	    
		//load image into canvas
		iceImage.onload = function(){
			
		    //bit of a hacky workaround, but on ios the image does not load until tapped. So this one loads first and is removed when 'real' is present			
			//this.els['temp-ice-image'].style['opacity'] = '0.7';
			this.els['ice-wipe-text'].style['display'] = 'block';
			
		    context.beginPath();
		    context.drawImage(iceImage, 0, 0, this.fullScreenWidth, this.fullScreenHeight);
		    context.closePath();    
		    context.globalCompositeOperation = 'destination-out';   	
		    
		    //bit of a hacky workaround, but on ios the image does not load until tapped. So this one loads first and is removed when 'real' is present
		    //setTimeout(function() {this.els['temp-ice-image'].style['display'] = 'none';}.bind(this), 4000);

		}.bind(this)	    	
		
		
		
		canvas.addEventListener('touchstart',function(e){
			this.drawPoint(e.touches[0].pageX,e.touches[0].pageY);
		}.bind(this) ,false);
					
		canvas.addEventListener('touchmove',function(e){
			e.preventDefault();
			this.drawPoint(e.touches[0].pageX,e.touches[0].pageY);
		}.bind(this) ,false);				
	}
	
	this.menuAnimation = function(menuSelection) {
		this.menuChoice = menuSelection;
		
		this.els['menu-container'].style['height'] = '61px';
		this.els['menu-container'].style['top'] = (74 + (15 + ((this.fullScreenHeight - 290)/2))) + 'px';
		
		//hide buttons
		if(this.menuChoice === 'trailer' || this.menuChoice === 'gallery' || this.menuChoice === 'pre-order') {
			this.els['trailer-button'].style['display'] = 'none';		
			this.els['gallery-button'].style['display'] = 'none';
			this.els['find-out-button'].style['display'] = 'none';
			this.els['pre-order-button'].style['display'] = 'none';				
		} else {
			this.els['trailer-container'].style['display'] = 'none';
			this.els['gallery-container'].style['display'] = 'none';
			this.els['pre-order-container'].style['display'] = 'none';
		}
		
		this.els['menu-container'].addEventListener("webkitTransitionEnd", function() {			
			if(this.els['menu-container'].style['height'] == '61px') {
				setTimeout( function(){
					this.els['menu-container'].style['height'] = '209px';
					//this.els['menu-container'].style['top'] = (130 + (this.heightDiff/2)) + 'px';	
					this.els['menu-container'].style['top'] = (15 + ((this.fullScreenHeight - 290)/2)) + 'px';	
					
				}.bind(this),1000)											
				
				setTimeout( function(){
					if(this.menuChoice === 'trailer') {
						this.els['trailer-container'].style['display'] = 'block';
						this.els['title-text'].innerHTML = '//trailer'
						this.els['trailer-button'].className = 'menu-selected';
						this.els['gallery-button'].className = 'menu-unselected';
						this.els['find-out-button'].className = 'menu-unselected';
						this.els['pre-order-button'].className = 'menu-unselected';
																								
					} else if(this.menuChoice === 'gallery') {
						this.els['gallery-container'].style['display'] = 'block';
						this.els['title-text'].innerHTML = '//gallery'
						this.els['trailer-button'].className = 'menu-unselected';
						this.els['gallery-button'].className = 'menu-selected';
						this.els['find-out-button'].className = 'menu-unselected';
						this.els['pre-order-button'].className = 'menu-unselected';					
					} else if(this.menuChoice === 'pre-order') {
						this.els['pre-order-container'].style['display'] = 'block';
						this.els['title-text'].innerHTML = '//pre order'
						this.els['trailer-button'].className = 'menu-unselected';
						this.els['gallery-button'].className = 'menu-unselected';
						this.els['find-out-button'].className = 'menu-unselected';
						this.els['pre-order-button'].className = 'menu-selected';					
					} else {
						this.els['title-text'].innerHTML = '/main menu'					
						this.els['trailer-button'].style['display'] = 'block';		
						this.els['gallery-button'].style['display'] = 'block';
						this.els['find-out-button'].style['display'] = 'block';
						this.els['pre-order-button'].style['display'] = 'block';							
					}
				}.bind(this),2000)						
			}
		}.bind(this));	 		
	}

	
	this.initialiseBackgroundLoop = function() {
	    /******BACKGROUND LOOP*******/
	   
    	setTimeout(function () {
    		this.els['expanded-background-1'].style['opacity'] = '0';
    		this.els['expanded-background-2'].style['opacity'] = '0.99';
    	}.bind(this), 2500)
	    	
		this.els['expanded-background-2'].addEventListener("webkitTransitionEnd", function() {			
			if(this.els['expanded-background-2'].style['opacity'] == '0.99') {
				setTimeout( function(){
					this.els['expanded-background-2'].style['opacity'] = '0';
					this.els['expanded-background-3'].style['opacity'] = '0.99';
				}.bind(this),2500)											
			}
		}.bind(this));	 
		
		this.els['expanded-background-3'].addEventListener("webkitTransitionEnd", function() {			
			if(this.els['expanded-background-3'].style['opacity'] == '0.99') {
				setTimeout( function(){
					this.els['expanded-background-3'].style['opacity'] = '0';
					this.els['expanded-background-4'].style['opacity'] = '0.99';
				}.bind(this),2500)											
			}
		}.bind(this));	 	
		
		this.els['expanded-background-4'].addEventListener("webkitTransitionEnd", function() {			
			if(this.els['expanded-background-4'].style['opacity'] == '0.99') {
				setTimeout( function(){
					this.els['expanded-background-4'].style['opacity'] = '0';
					this.els['expanded-background-1'].style['opacity'] = '0.99';
				}.bind(this),2500)											
			}
		}.bind(this));	 				
		
		this.els['expanded-background-1'].addEventListener("webkitTransitionEnd", function() {			
			if(this.els['expanded-background-1'].style['opacity'] == '0.99') {
				setTimeout( function(){
					this.els['expanded-background-1'].style['opacity'] = '0';
					this.els['expanded-background-2'].style['opacity'] = '0.99';
				}.bind(this),2500)											
			}
		}.bind(this));
		
	    /****** END BACKGROUND LOOP*******/		
	}
	
	this.drawPoint = function(pointX,pointY){
	    var gradient = context.createRadialGradient(pointX, pointY, 0, pointX, pointY, 50);
	    gradient.addColorStop(0, "rgba(255,255,255,.6)"); 
	    gradient.addColorStop(1, "transparent"); 
	    context.fillStyle = gradient;
	    
	    context.beginPath();
	    //context.moveTo(pointX, pointY);
	    context.arc(pointX,pointY,15,0,Math.PI*2,true);
	    context.fill();
	    context.closePath();
	    
	    if(this.canvasTouchTracker >= 100) {
		    this.showMainExpandedAd();
	    } else {
		    this.canvasTouchTracker++;
	    }
	}	
	
	/*GALLERY STUFF*/
	this.initSceneStrip = function () {
		
		this.currentScene = 1;
		this.previousScene = this.currentScene;
		this.allowedSwipe = true;
		this.showScene();
		
		this.swipeArea = new AdSwipeArea(this.els['gallery-swipe-area']);
		this.swipeArea.addListeners(this.leftHandler.bind(this), this.rightHandler.bind(this), function () {});
		
	}
		
	this.rightHandler = function () {

		if (this.allowedSwipe == true) {			
			this.allowedSwipe = false;
			this.justLoaded = false;
			
			if (this.currentScene > 1) {
				this.currentScene = this.currentScene - 1;
			} else {
				this.currentScene = 1;
				this.allowedSwipe = true;
			}
			
			this.showScene();
			
			this.els['gallery-strip-container'].addEventListener("webkitTransitionEnd", sceneStripListener = function(){
				this.allowedSwipe = true;
			}.bind(this), false);
		}
	}
	
	this.leftHandler = function () {

		if (this.allowedSwipe == true) {
			//If valid swipe, clear auto scroll
			
			this.allowedSwipe = false;
			this.justLoaded = false;
			
			if (this.currentScene < 5) {
				this.currentScene = this.currentScene + 1;
			} else {
				this.currentScene = 5;
				this.allowedSwipe = true;
			}

			this.showScene();
			
			this.els['gallery-strip-container'].addEventListener("webkitTransitionEnd", sceneStripListener = function(){
				this.allowedSwipe = true;	
			}.bind(this), false);
		}
	}
	
	this.showScene = function () {
		
		var addValue = 0;
		
		if (this.currentScene != 1) addValue = 0; //26

		var posX = -((250 * (this.currentScene - 1)) + addValue);
		
		this.els['gallery-strip-container'].style.webkitTransform = "translate3d(" + posX +"px, 0px,0)";
		

		if(this.currentScene == 1) {
			this.els['gallery-left-button'].style['opacity'] = 0.6;
			this.els['gallery-right-button'].style['opacity'] = 1;
		} else if(this.currentScene == 5) {
			this.els['gallery-left-button'].style['opacity'] = 1;
			this.els['gallery-right-button'].style['opacity'] = 0.6;			
		} else {
			this.els['gallery-left-button'].style['opacity'] = 1;
			this.els['gallery-right-button'].style['opacity'] = 1;
		}

			
		
	}		
	/*END GALLERY STUFF*/
	
   // ====================
    // =  VIDEO HANDLERS  =
    // ====================
    this.activateVideo = function () {
    	//Hide video spinner 
        this.els['video-spinner'].style['opacity'] = '0'; 
        //if iphone try to play inline, if android check if its version 4 or above        
		if(parseInt(this.androidVersion) >= 4 || !this.isAndroid) {     
	    	this.els['video-container'].style['display'] = 'block';
	    	this.els['video-container'].style['height'] = '100%';
	    	this.els['video-container'].style['width'] = '100%';
	    	this.els['video-element'].style['display'] = 'block';
			this.els['video-element'].style.width = '275px';
			this.els['video-element'].style.height = '225px';	
			this.els['video-element'].style.top = '0px';	
			this.els['video-element'].style.left = '0px';	
		}
		
		setTimeout(function(){
        	this.els['video-element'].play();
        }.bind(this),100);
        
        if (!this.isAndroid) {
        	this.els['video-element'].removeEventListener('canplaythrough', this.activateVideo, false);
        }
        
        
    }.bind(this);
	
	this.prepareVideo = function(vidSource) {
		//Display video spinner 
        this.els['video-spinner'].style['opacity'] = '0.99';
		
		//setup video element
        var videoElement = this.els['video-element'];
        videoElement.src = vidSource;
        videoElement.setAttribute('webkit-playsinline', 'webkit-playsinline');        
        videoElement.setAttribute('controls', 'true');
        videoElement.load();
        videoElement.addEventListener('ended', this.endVideoListener, false);
        videoElement.addEventListener('pause', this.pauseVideo, false);
        
        //Flags for tenancy video links
        this.passed25Percent = false;
        this.passed50Percent = false;
        this.passed75Percent = false;
        
        //setup interval for checking current video time
        this.videoCurrentTimeInterval = setInterval(function() {
            this.checkVideoTime();
        }.bind(this), 100);
		
		//if android, can play. If iphone, event listener must be setup
        if (this.isAndroid) {
            this.activateVideo();
        } else {
            videoElement.addEventListener('canplaythrough', function() {
                this.activateVideo();
            }.bind(this), false);
        }
    };
    
    this.exitVideo = function() {
        
    	//if iphone exit full screen if in it
        if (!this.isAndroid) {
        	if (this.els['video-element'].webkitDisplayingFullscreen)
            	this.els['video-element'].webkitExitFullscreen();
        } 
         
        //if iphone try to play inline, if android check if its version 4 or above
        if(parseInt(this.androidVersion) >= 4 || !this.isAndroid) {   
        	this.els['video-container'].style['height'] = '0%';
       		this.els['video-container'].style['width'] = '0%';
       		this.els['video-element'].style['height'] = '0px'; 
        	this.els['video-element'].style['margin-top'] = '0px';
        	this.els['video-element'].style['width'] = '0px';
        	
        	//IF THESE VALUES ARE SET TO NONE, IT WILL DUMP THE VIDEO AND SECOND PLAYTHROUGH WILL NOT WORK
        	//this.els['video-element'].style['display'] = 'none'; 
        	//this.els['video-container'].style['display'] = 'none';
        	this.checkVideoTime.previousTime = 0;
        }
        
        
            
        if(this.videoCurrentTimeInterval) {
            clearInterval(this.videoCurrentTimeInterval);
        }
    };
    
    this.endVideoListener = function(e) {
        this.exitVideo();
    }.bind(this);

    this.pauseVideo = function() {
        if (this.els['video-element']) {
           //if done button is pressed for iphone, exit video. This has to be in a setTimeout for slower iPhones
           if (!this.els['video-element'].webkitDisplayingFullscreen) {
           		setTimeout(function () {
           			this.exitVideo(); 
           		}.bind(this), 435)
        		           
        	} else {
        		 //pause video obviously
           		this.els['video-element'].pause();
        	}
        }
    }.bind(this);
    
    this.checkVideoTime = function() {
        if(this.els['video-element']) {
            var currentTime = this.els['video-element'].currentTime;
            var videoDuration = this.els['video-element'].duration;
            if(this.checkVideoTime.previousTime && this.checkVideoTime.previousTime >= ( videoDuration * 0.25) && !this.passed25Percent) {
            	if(this.adEventTracker)
					this.adEventTracker.recordAdEventAsynchImage('video-25-perc');

            	this.passed25Percent = true;
            }
            if(this.checkVideoTime.previousTime && this.checkVideoTime.previousTime >= (videoDuration * 0.5)  && !this.passed50Percent) {
            	if(this.adEventTracker)
					this.adEventTracker.recordAdEventAsynchImage('video-50-perc');

            	this.passed50Percent = true;
            }
            if(this.checkVideoTime.previousTime && this.checkVideoTime.previousTime >= (videoDuration * 0.75)  && !this.passed75Percent) {
				if(this.adEventTracker)
					this.adEventTracker.recordAdEventAsynchImage('video-75-perc');
					
            	this.passed75Percent = true;
            }
            if(this.checkVideoTime.previousTime && this.checkVideoTime.previousTime >= (videoDuration * 0.99)){
            	if(this.adEventTracker) 
					this.adEventTracker.recordAdEventAsynchImage('video-100-perc');
									
                this.exitVideo();
               if(this.videoCurrentTimeInterval) {
               		this.checkVideoTime.previousTime = 0;
               		clearInterval(this.videoCurrentTimeInterval);
               	}
            }

            this.checkVideoTime.previousTime = currentTime;
        } else {
               if(this.videoCurrentTimeInterval) {
               		this.checkVideoTime.previousTime = 0;
               		clearInterval(this.videoCurrentTimeInterval);
               	}
        }
    };
    
    // ====================
    // =  END VIDEO HANDLERS  =
    // ====================	
		
	this.getVideoElements = function() { return []; };
	
	this.getLandscapePlaceHolderDivElement = function() {
				return 'non-primary-orientation';
	};

}