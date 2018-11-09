this.AdMarvelAdEventTracker = function(c) {
    var a = "http://ads.admarvel.com/fam/et.php?partner_id=" + c.partnerId + "&site_id=" + c.siteId + "&banner_id=" + c.bannerId;
    if (c.targetParams && c.targetParams != '{targetparams}') {
        a += "&target_params=" + escape(c.targetParams)
    }
    if (c.cacheBuster) {
        a += "&cb=" + c.cacheBuster
    }
    function b(d) {
        var e = new XMLHttpRequest();
        e.open("GET", d, false);
        e.send(null)
    }
    
    this.checkIsBadvalue = function(){
    	badValues = {'partnerId':'{partnerid}','siteId':'{zoneid}','bannerId':'{bannerid}','cacheBuster':'{timestamp}'};
    	
    	for(val in badValues){
    		
    		if(!c[val] || c[val] == '' || c[val] == badValues[val]){
    			return true;
    			break;
    		}
		}
		return false;
    }
     
    this.recordAdEvent = function(d) {
    	
    	if(this.checkIsBadvalue()) return
		var e = a + "&evt_name=" + d;
		b(e)
		
	};
	this.recordAdEventWithValue = function(d, f) {
		if(this.checkIsBadvalue()) return
    		
		if (c.partnerId && c.partnerId != '{partnerid}') {
		    var e = a + "&evt_name=" + d + "&evt_value=" + f;
		    b(e)
		}
	}
    this.recordAdEventAsynchImage = function (d) {
    	
		if(this.checkIsBadvalue()) return;
        var url = a + "&evt_name=" + d;
    	var imgElement = document.createElement('img');
    	imgElement.onerror = function() { };
    	try {
    		imgElement.src = url;
    	} catch(error) {}     
    };
    this.recordAdEventWithValueAsynchImage = function (d, f) {
    	
        if(this.checkIsBadvalue()) return
        var e = a + "&evt_name=" + d + "&evt_value=" + f;
    	var imgElement = document.createElement('img');
    	imgElement.onerror = function() { };
    	try {
    		imgElement.src = url;
    	} catch(error) {}
    	        
    }    	
}   

Function.prototype.bind = function(scope) {
    var _function = this;

    return function() {
        return _function.apply(scope, arguments);
    }
};

function AdSwipeArea(swipeableElement) {
    this.startXPosition = 0;
    this.startYPosition = 0;
    this.adjustedXPosition = 0;
    this.adjustedYPosition = 0;
    this.swipeableElement = swipeableElement;
    this.leftSwipeListeners = new Array();
    this.rightSwipeListeners = new Array();
    this.tapListeners = new Array();
    this.upSwipeListeners = new Array();
    this.downSwipeListeners = new Array();
    this.tapListeners = new Array();
    this.orientation = 'horizontal';

    this.addListeners = function (leftSwipeListener, rightSwipeListener, tapListener) {
        this.leftSwipeListeners.push(leftSwipeListener);
        this.rightSwipeListeners.push(rightSwipeListener);
        this.tapListeners.push(tapListener);
    };

    this.addUpDownListeners = function (upSwipeListener, downSwipeListener, tapListener) {
        this.orientation = 'vertical';
        this.upSwipeListeners.push(upSwipeListener);
        this.downSwipeListeners.push(downSwipeListener);
        this.tapListeners.push(tapListener);
    };

    this.touchStart = function (event) {
        this.disableDefaultBehaviour(event);

        if (this.isSingleFingerSwipe(event)) {
            this.recordStartCoordinates(event);
        } else {
            this.touchCancel(event);
        }
    };

    this.touchMove = function(event) {
        this.disableDefaultBehaviour(event);

        if (this.isSingleFingerSwipe(event)) {
            this.recordCurrentCoordinates(event);
        } else {
            this.touchCancel(event);
        }
    };

    this.swipeHandler = function() {
        if (this.orientation == 'horizontal') {
            if (this.isLeftSwipe()) {
                for (var listener in this.leftSwipeListeners) {
                    this.leftSwipeListeners[listener]();
                }
            }
            if (this.isRightSwipe()) {
                for (var listener in this.rightSwipeListeners) {
                    this.rightSwipeListeners[listener]();
                }
            }
        }else {
            if (this.isUpSwipe()) {
                for (var listener in this.upSwipeListeners) {
                    this.upSwipeListeners[listener]();
                }
            }
            if (this.isDownSwipe()) {
                for (var listener in this.downSwipeListeners) {
                    this.downSwipeListeners[listener]();
                }
            }
        }
    };

    this.touchEnd = function (event) {
        this.disableDefaultBehaviour(event);
        if (this.hasExceededMinimumSwipeLength()) {
            this.swipeHandler();
        } else {
            for (var listener in this.tapListeners) {
                this.tapListeners[listener]();
            }
        }
        this.touchCancel(event);
    };

    this.touchCancel = function(event) {
        this.startXPosition = 0;
        this.startYPosition = 0;
        this.adjustedXPosition = 0;
        this.adjustedYPosition = 0;
    };

    this.disableDefaultBehaviour = function(event) {
        event.preventDefault();
    };

    this.isSingleFingerSwipe = function(event) {
        return event.touches.length == 1;
    };

    this.recordStartCoordinates = function (event) {
        this.startXPosition = event.targetTouches[0].pageX;
        this.startYPosition = event.targetTouches[0].pageY;
    };

    this.recordCurrentCoordinates = function (event) {
        this.adjustedXPosition = event.targetTouches[0].pageX - this.startXPosition;
        this.adjustedYPosition = event.targetTouches[0].pageY - this.startYPosition;
    };

    this.isLeftSwipe = function() {
        return (this.adjustedXPosition) < 0;
    };

    this.isRightSwipe = function() {
        return (this.adjustedXPosition) > 0;
    };

    this.isDownSwipe = function() {
        return (this.adjustedYPosition) > 0;
    };

    this.isUpSwipe = function() {
        return (this.adjustedYPosition) < 0;
    };

    this.hasExceededMinimumSwipeLength = function() {
        if (this.adjustedXPosition == 0 || this.adjustedYPosition == 0) {
            return false;
        }

        var swipeLength = Math.round(Math.sqrt(Math.pow(this.adjustedXPosition, 2) + Math.pow(this.adjustedYPosition, 2)));
        return (swipeLength >= 50);
    };

    if (window.addEventListener) {
        this.swipeableElement.addEventListener('touchstart', this.touchStart.bind(this), false);
        this.swipeableElement.addEventListener('touchmove', this.touchMove.bind(this), false);
        this.swipeableElement.addEventListener('touchend', this.touchEnd.bind(this), false);
        this.swipeableElement.addEventListener('touchcancel', this.touchCancel.bind(this), false);
    }
    else if (window.attachEvent) {
        this.swipeableElement.attachEvent('ontouchstart', this.touchStart.bind(this));
        this.swipeableElement.attachEvent('ontouchmove', this.touchMove.bind(this));
        this.swipeableElement.attachEvent('ontouchend', this.touchEnd.bind(this));
        this.swipeableElement.attachEvent('ontouchcancel', this.touchCancel.bind(this));
    }

}

AdCarousel.prototype = new AdTemplate();

function AdCarousel(carouselElement) {
    this.carouselElement = carouselElement;
    this.adSwipeArea = new AdSwipeArea(carouselElement);
    this.selectedItemIndex = 0;
    this.adCarouselItems = new Array();

    this.addCarouselItem = function(item) {
        var itemId = carouselElement.id + '-toggle-item-' + this.adCarouselItems.length;
        this.createDivWithId(itemId);
        this.adCarouselItems.push(item);
        this.carouselElement.appendChild(item);
    };

    this.addListeners = function (leftSwipeListener, rightSwipeListener, tapListener) {
        this.adSwipeArea.addListeners(leftSwipeListener, rightSwipeListener, tapListener);
    };

    this.createDivWithId(carouselElement.id + '-toggle-container');
}

function AdTemplate() {

    function AdState() {
        this.expandedState = "EXPANDED";
        this.collapsedState = "COLLAPSED";
        this.currentState = this.collapsedState;

        this.setExpandedState = function () {
            this.currentState = this.expandedState;
        }

        this.setCollapsedState = function () {
            this.currentState = this.collapsedState;
        }

        this.isExpandedState = function () {
            return this.currentState == this.expandedState;
        }

    }

    this.adState = new AdState();

    this.els = [];


    this.disableDefaultBehaviour = function(event) {
        event.preventDefault();
    };

    this.createElementOfTypeWithId = function(type, id) {
        if (type == 'adswipearea') {
            var element = this.createDivWithId(id);
            element.adSwipeArea = new AdSwipeArea(element);
            element.id = id;
            return element;
        }
        else if (type == 'carousel') {
            var element = this.createDivWithId(id);
            element.id = id;
            element.adCarousel = new AdCarousel(element);
            return element;
        }
        else {
            var element = document.createElement(type);
            element.id = id;
            return element;
        }
    };

    this.create = function (id) {
        return this.createElementOfTypeWithId('div', id);
    };

    this.createDivWithId = function (id) {
        return this.createElementOfTypeWithId('div', id);
    };

    this.createVideoWithId = function (id) {
        return this.createElementOfTypeWithId('video', id);
    };

    this.createImageWithId = function (id, src) {
        var element = this.createElementOfTypeWithId('img', id);
        if(src.indexOf('http://') != -1){
            element.src=src
        }else{
            element.src = this.buildImagesPath() + src;
        }
        return element;
    };

    this.createCanvasWithId = function (id, csArgs) {
        var element = this.createElementOfTypeWithId('canvas', id);
        element.width = csArgs.width;
        element.height = csArgs.height;
        element.style.width = csArgs.styleWidth + 'px';
        element.style.height = csArgs.styleHeight + 'px';
        return element;
    };

    this.createLoaderMaskWithId = function(id, maskArgs){
        var element = this.createElementOfTypeWithId('div', id);
        element.xStart	= (maskArgs.xStart)?maskArgs.xStart:0;
        element.xEnd		= (maskArgs.xEnd)?maskArgs.xEnd:0;
        element.yStart	= (maskArgs.yStart)?maskArgs.yStart:0;
        element.yEnd		= (maskArgs.yEnd)?maskArgs.yEnd:0;
        element.loadPrefix		= (maskArgs.loadPrefix)?maskArgs.loadPrefix:'';
        return element;
    }


    this.createScript = function (src) {
        var element = document.createElement('script');
        element.type = 'text/javascript';
        element.src = src;

        return element;
    };

    this.createStylesheet = function (href) {
        var element = document.createElement('link');
        element.type = 'text/css';
        element.rel = 'stylesheet';
        element.href = href;
        return element;
    };


    this.hasClass = function(element, value) {
        return element.className.match(new RegExp('(\\s|^)' + value + '(\\s|$)'));
    };

    this.addClass = function(element, value) {
        if (!element.className) {
            element.className = value;
        } else {
            newClassName = element.className;
            newClassName += " ";
            newClassName += value;
            element.className = newClassName;
        }
    };

    this.removeClass = function(element, value) {
        if (this.hasClass(element, value)) {
            var reg = new RegExp('(\\s|^)' + value + '(\\s|$)');
            element.className = element.className.replace(reg, ' ');
        }
    };

    this.replaceClass = function(element, value) {
        element.className = value;
    };

    /* turns a class on or off */
    this.toggleClass = function(element, value) {
        if( this.hasClass( element, value ) ) {
            this.removeClass( element, value );
        } else {
            this.addClass( element, value );
        }
    };

    /* Attaches a webkitTransitionEnd listener which calls the callback 'action', after a short delay to let the CSS engine clean itself up
     * Ensures the action is bound to the adUnit properly
     * Returns the element (debatably useful as you almost always need to do a setTimeout(f(){y()}.bind(this), 50) after this funciton returns)
     */
    this.setPostTransitionAction = function ( el, action ) {
        var listener;
        action = action.bind(this);

        el.addEventListener (
            'webkitTransitionEnd'
            ,listener = function () {
                el.removeEventListener( 'webkitTransitionEnd', listener );
                action();
            }, false);

        return el;
    };

    //this is handy if we want to alter any object during an interval or loop but only want to perform the action (i.e call a method) once.
    this.performOnce = function(elem, objectBooleanProperty, method, args){
        if(elem && !elem[objectBooleanProperty]){

            elem[objectBooleanProperty] = true;

            this[method].apply(this, args);

        }
    }



    this.matchStrings = function(match1Item, match2Item, returnValue, defaultReturn) {
        (match1Item == match2Item) ? returnValue = returnValue : returnValue = defaultReturn;
        return returnValue;
    };

    this.insertCopy = function(element, value) {
        element.appendChild(document.createTextNode(value));
    };

    this.insertHtml = function(element, value) {
        element.innerHTML = value;
    };

    /* copies new properties in extend-er into extend-ee.  Replaced      this.updateObjectProperties  	 */
    this.extend = function(ee, er){
        for (prop in er) {
            if( er.hasOwnProperty(prop) ) {
                ee[prop] = er[prop];
            }
        }
        return ee;
    };

    this.updateElementStyleProperties = function(element, properties){
        for(p in properties){
            element.style[p] = properties[p];
        }
    }

    /* cachebusting using javascript */
    this.checkCacheBuster = function(cacheBusterPassed){

        if(!cacheBusterPassed || cacheBusterPassed == 'generateJsCacheBuster' || cacheBusterPassed == '%%CACHEBUSTER%%' || cacheBusterPassed == '{timestamp}' ){
            return this.generateCacheBusterToken();
        }else{
            return cacheBusterPassed;
        }
    }

    /* generate cache buster.  Used on new server click to web, or on a server without preprocessing.
     */
    this.generateCacheBusterToken = function(){

        var ts           = Math.round((new Date()).getTime() / 1000);
        randomnumber = Math.floor(Math.random()*ts);
        return ts;
    }

    /* canvas  Methods  */
    // canvas medthods have been removed as they are no longer used.  Check America Reunion or Mazda 2 to use these methods.




    /* Easing and Tweening Methods*/


    this.easeNone = function (t, b, c, d) {
        return c*t/d + b;
    };

    this.easeIn = function (t, b, c, d) {
        return c*(t/=d)*t + b;
    };

    this.easeOut = function (t, b, c, d) {
        return -c *(t/=d)*(t-2) + b;
    };

    this.bounceIn = function (t, b, c, d) {
        return c - this.bounceOut(d-t, 0, c, d) + b;
    };

    this.bounceOut = function (t, b, c, d) {
        if ((t/=d) < (1/2.75)) {
            return c*(7.5625*t*t) + b;
        } else if (t < (2/2.75)) {
            return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
        } else if (t < (2.5/2.75)) {
            return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
        }
    };

    this.elasticOut = function (t, b, c, d, a, p) {
        if (t == 0) {
            return b;
        }
        if ( (t /= d) == 1 ) {
            return b+c;
        }
        if (!p) {
            p=d*.3;
        }

        if (!a || a < Math.abs(c)) {
            a = c;
            var s = p / 4;
        }
        else {
            var s = p/(2*Math.PI) * Math.asin (c/a);
        }

        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    };

    this.constructAdMarvelTenancy = function(type, bannerId){

        var typeString = (type == 'asynch')?'view_offline':'ck_offline';

        return  adMarvelString = 'http://ads.admarvel.com/fam/' + typeString + '.php?p=__pid=3939de5680fdd652__sid=37449__bid=' + bannerId;
    };

    this.convertToRadians = function(degree) {
        return degree*(Math.PI/180);
    };

    this.randomInteger = function (range){
        return Math.floor(Math.random()*(range+1))
    }
    /* END Easing and Tweening Functions*/

    this.registerClickEvent = function (element, functionToExecute) {
        if (window.addEventListener) {
            element.addEventListener('click', functionToExecute, false);
        }
        else if (window.attachEvent) {
            element.attachEvent('onclick', functionToExecute);
        }
    };

    this.deRegisterClickEvent = function (element, functionToExecute) {
        if (window.addEventListener) {
            element.removeEventListener('click', functionToExecute, false);
        }
        else if (window.attachEvent) {
            element.detachEvent('onclick', functionToExecute)
        }
    };

    //simple method to take the user to url as specified in the ad-unit file
    this.navigateToURL = function(urlGoTo) {
        if(window.isOrmmaAvailable) {
            ormma.open(urlGoTo);
        } else if(window.isMraidAvailable) {
            mraid.open(urlGoTo);
        } else {
            document.location.href = urlGoTo;
        }
    };

    this.findAdContainer = function () {
        var divs = document.getElementsByTagName('div');
        var adContainerId;
        for (var i = 0; i < divs.length; i++) {
            adContainerId = divs[i].getAttribute('ad-container-id');
            if (adContainerId != null && adContainerId == this.adId) {
                return divs[i];
            }
        }
    };

    this.recordEvent = function(url) {
        var imgElement = document.createElement('img');
        imgElement.onerror = function() { };
        try {
            imgElement.src = url;
        } catch(e) {}
    };

    this.buildEnvironmentPath = function() {
        var envPath;
        var liveOrNot = (this.noLongerLive)?'no-longer-live/':'';
        if (this.adEnvironment == 'local') {
            envPath = '../../../';
        }else if(this.adEnvironment == 'production'){

            envPath = 'http://4sa.s3.amazonaws.com/ad-units/' + liveOrNot;
        }
        return envPath;
    };

    this.buildResourcePath = function() {
        return this.buildEnvironmentPath() + this.adId + '/';
    };

    this.buildScriptPath = function() {
        return this.buildResourcePath() + 'scripts/' + this.adFormat + '/';
    };

    this.buildStylesPath = function() {

        return this.buildResourcePath() + 'styles/' + this.adFormat + '/';
    };

    this.buildImagesPath = function() {
        return this.buildResourcePath() + 'images/';
    };

    this.buildOverlayPath = function() {
        return this.buildResourcePath() + 'overlay/' + this.adFormat + '/';
    };
    this.buildDynamicFilesPathPath = function() {

        return this.buildResourcePath() + 'dynfile/';
    };

    this.calculatePanelYPosition = function(defaultPosition, collapsedAdHeight, expandedAdHeight) {
        var screenSize = ormma.getScreenSize();
        if ((expandedAdHeight + defaultPosition.y) <= screenSize.height) {
            return defaultPosition.y;
        }
        else if ((expandedAdHeight + defaultPosition.y) > screenSize.height && ((defaultPosition.y + collapsedAdHeight) - expandedAdHeight) >= 0) {
            return (defaultPosition.y + collapsedAdHeight) - expandedAdHeight;
        }

        return 0;
    };

    this.calculatePanelDimensions = function (collapsedAdHeight) {
        var defaultPosition = ormma.getDefaultPosition();
        var screenSize = ormma.getMaxSize();
        var panelYPosition = this.calculatePanelYPosition(defaultPosition, collapsedAdHeight, screenSize.height);

        var screenSizeX;
        var screenSizeY;

        screenSizeX = screenSize.width;
        screenSizeY = screenSize.height;


        return {'x' : defaultPosition.x, 'y' : panelYPosition, 'width' : screenSizeX, 'height' : screenSizeY};
    };

    this.registerElement = function(parentElement, element) {

        parentElement.appendChild(element);

        this.els[element.id] = element;

        if (parentElement.adCarousel) {
            parentElement.adCarousel.addCarouselItem(element);
        }
        if (this.getStyle(element, 'background-image')) {
            var resolvedImagePath = this.resolveImagePath(this.getStyle(element, 'background-image'));
            if(resolvedImagePath) element.style['background-image'] = resolvedImagePath;
        }

    };

    //this method loops through all the elements defined in ad-unit and creates them
    this.registerElements = function(parentElement, elements) {
        for (var i in elements) {
            var element = null;
            if (elements[i].name) {
                if (!elements[i].type) {
                    element = this.createDivWithId(elements[i].name);
                }
                else if (elements[i].type == 'img') {
                    element = this.createImageWithId(elements[i].name, elements[i].src);
                }
                else if (elements[i].type == 'video') {
                    element = this.createVideoWithId(elements[i].name);

                }
                else if (elements[i].type == 'canvas') {
                    element = this.createCanvasWithId(elements[i].name, {'width' : elements[i].width, 'height' : elements[i].height})

                }
                else if (elements[i].type == 'loadermask') {
                    element = this.createLoaderMaskWithId(elements[i].name, {'xStart' : elements[i].xStart, 'xEnd' : elements[i].xEnd, 'yStart' : elements[i].yStart, 'yEnd' : elements[i].yEnd, 'loadPrefix' : elements[i].loadPrefix});

                }
                else {
                    element = this.createElementOfTypeWithId(elements[i].type, elements[i].name);
                }
                //if a class has been defined for the element, apply it.
                if (elements[i].cssclass) {
                    this.addClass(element, elements[i].cssclass);

                }
                else{
                    //else, apply default class
                    this.addClass(element, elements[i].name  + '-initial');
                }
                if (elements[i].text) {
                    this.insertCopy(element, elements[i].text);
                }
                if (elements[i].html) {
                    this.insertHtml(element, elements[i].html);
                }
                if (elements[i].children) {
                    this.registerElements(element, elements[i].children);
                }
            }
            else {
                element = this.createDivWithId(elements[i]);
                //apply default class
                this.addClass(element, elements[i]  + '-initial');
            }
            this.registerElement(parentElement, element);
        }
    };

    this.resolveImagePath = function(imagePath) {
        return imagePath.replace('../../images/', this.buildImagesPath());
    };

    this.getStyle = function (element, styleProp) {
        var propertyValue;
        if (element.currentStyle) {
            propertyValue = element.currentStyle[styleProp];
        }
        else if (window.getComputedStyle) {
            propertyValue = document.defaultView.getComputedStyle(element, null).getPropertyValue(styleProp);
        }
        return propertyValue;
    };

    this.callORMMAExpandIfNecessary = function() {
        if (window.isOrmmaAvailable) {
            ormma.addEventListener('stateChange', function () {
                ormma.removeEventListener('stateChange');
            });

            var dimensions = this.calculatePanelDimensions(this.collapsedAdHeight);
            if('expanded' != ormma.getState()){
                ormma.expand(dimensions, null);
            }

        }
    };

    this.callORMMACloseIfNecessary = function() {
        if (window.isOrmmaAvailable) {
            ormma.addEventListener('stateChange', function () {
                ormma.removeEventListener('stateChange');
            });

            ormma.close();
        }
    };

    this.ormmaCreateEvent = function (title, description, location, allDay, startDate, endDate, reminderDate) {
        if (!window.isOrmmaAvailable) {
            alert('Unable to create a calendar event because ORMMA is not available');
            return;
        }

        ormma.createEventWithFullDetails(startDate, title, description, location, allDay, endDate, reminderDate);
    }

    this.removeElementsFromExpandedAdContainer = function() {
        while (this.expandedRootElement.childNodes[0]) {
            this.expandedRootElement.removeChild(this.expandedRootElement.childNodes[0]);
        }
    };

    this.removeElementsFromCollapsedAdContainer = function() {
        while (this.collapsedRootElement.childNodes[0]) {
            this.collapsedRootElement.removeChild(this.collapsedRootElement.childNodes[0]);
        }
    };

    //adjust the position of the ad elements based on tag input.  Certain publishers require adjustment.	
    this.handlePublisherAdjust = function(adState, elem){

        if(!this[adState]) return;

        if(this[adState].top)
            elem.style.top = this[adState].top + 'px';
        if(this[adState].left)
            elem.style.left = this[adState].left + 'px';
        if(this[adState].right)
            elem.style.right = this[adState].right + 'px';
        if(this[adState].bottom)
            elem.style.bottom = this[adState].bottom + 'px';

        return;
    }

    this.loadingCollapsedAssetsComplete = function () {
        this.collapsedRootElement.style['display'] = 'block';
        this.displayCollapsedAdvert();
    }

    this.loadingLoadingAssetsComplete = function () {
        //called when the loading images in the bespoke loader have loaded.

    }

    this.loadingPageComplete = function () {
        if(!this.adUnitWillHandleLoadingPageClose) {
            this.loadingPage.style['display'] = 'none';
        }
        if(this.notifyLoadingPageFinished) {
            this.notifyLoadingPageFinished();
        }
        this.showExpandedInternal();
    };

    this.showLoadingPageCalledFromAdUnit = function() {
        if(this.loadingPage.style.display != 'block') {
            this.loadingPage.style['display'] = 'block';
        }
        this.expandedRootElement.style['display'] = 'none';
    };

    this.hideLoadingPageCalledFromAdUnit = function() {
        this.loadingPage.style['display'] = 'none';
        this.expandedRootElement.style['display'] = 'block';
    };

    this.showExpandedInternal = function () {
        setTimeout(function() {
            this.handlePublisherAdjust('publisherAdjustExpanded', this.expandedRootElement);

            this.displayExpandedAdvert();
            this.updatePlaceholderStyle();

        }.bind(this), 250);
    };

    this.getHeightAndPosition = function(){

        this.expandedRootElement.expandedWidth = window.innerWidth;
        this.expandedRootElement.expandedHeight = window.innerHeight;
        this.expandedRootElement.expandedMaxDimension = Math.max(window.innerHeight, window.innerWidth);


        if( window.isOrmmaAvailable ){
            var screenSize='';

            screenSize =ormma.getMaxSize();

            //changed frm ormma.getScreenSize();

            var pixelDensity = window.devicePixelRatio;
            if(this.returnsRetinaDimensions) {
                this.expandedRootElement.expandedWidth = (screenSize.width/pixelDensity);
                this.expandedRootElement.expandedHeight = (screenSize.height/pixelDensity);
                this.expandedRootElement.expandedMaxDimension = Math.max((screenSize.height/pixelDensity), (screenSize.width/pixelDensity));
            } else {
                this.expandedRootElement.expandedWidth = screenSize.width;
                this.expandedRootElement.expandedHeight = screenSize.height;
                this.expandedRootElement.expandedMaxDimension = Math.max(screenSize.height, screenSize.width);
            }

        }


        if(this.publisherAdjustExpanded){
            if(this.publisherAdjustExpanded.height) this.expandedRootElement.expandedHeight = parseInt(this.expandedRootElement.expandedHeight) + this.publisherAdjustExpanded.height;
            if(this.publisherAdjustExpanded.width) this.expandedRootElement.expandedWidth = parseInt(this.expandedRootElement.expandedWidth) + this.publisherAdjustExpanded.width;
        }

        if(window.isMraidAvailable && this.preferMRAIDOverORMMA ){
            if(window.isMraidAvailable && this.mraidTopOffset){
                this.expandedRootElement.expandedHeight -= this.mraidTopOffset;
                this.expandedRootElement.style['margin-top'] = this.mraidTopOffset + 'px';
            }
        }


    };

    this.displayExpandedAdvertTemplate = function () {
        this.adState.setExpandedState();
        window.scrollTo(0, this.isAndroid);

        if(this.canvasCollapsedInterval) clearInterval(this.canvasCollapsedInterval);
        this.removeElementsFromCollapsedAdContainer();

        this.collapsedRootElement.style['display'] = 'none';

        if(window.isOrmmaAvailable && !this.ORMMAStateChangeBound) {
            ormma.addEventListener('stateChange', function() {
                var currentState = ormma.getState();
                if(currentState === 'default') {
                    this.expandedRootElement.style['display'] = 'none';
                    this.expandedRootElement.style['opacity'] = '0';
                    this.expandedRootElement.style['height'] = '0px';
                    this.collapsedRootElement.style['display'] = 'block';
                }
            }.bind(this));
            this.ORMMAStateChangeBound = true;
        };

        this.registerElements(this.expandedRootElement, this.getExpandedElements());
        this.callORMMAExpandIfNecessary();
        //show the "return to portrait/landscape message" if wrong orientation
        this.updatePlaceholderStyle();

        if (this.autoProgressBar) {
            if (this.preloadExpandableImagesComplete) {
                this.loadingPageComplete();
            } else {
                this.showLoadingPage();
            }
        }
        else {
            this.showExpandedInternal();
        }

        if (this.mainThreadFinished) {
            this.mainThreadFinished();
        }
    };

    this.displayCollapsedAdvertTemplate = function() {
        this.adState.setCollapsedState();
        this.callORMMACloseIfNecessary();

        if (this.getCollapsedElements) {
            this.registerElements(this.collapsedRootElement, this.getCollapsedElements());
            this.loadCollapsedImages();
        }

        this.expandedRootElement.style['display'] = 'none';
        this.handlePublisherAdjust('publisherAdjustCollapsed', this.collapsedRootElement);
        this.removeElementsFromExpandedAdContainer();

        if (!this.getCollapsedElements) {

            this.collapsedRootElement.style['display'] = 'block';
            this.displayCollapsedAdvert();
        }
    };


    //get the name of the placeholder div, could be landscape or portrait.  This function is only called once before the ad unit is expanded.
    this.getPlaceholderDivNameFunction = function() {
        var divElementNameFunction = null;

        if (this.adOrientation == 'portrait') {
            divElementNameFunction = this.getLandscapePlaceHolderDivElement;
        }

        if (this.adOrientation == 'landscape') {
            divElementNameFunction = this.getPortraitPlaceHolderDivElement;
        }
        return divElementNameFunction;
    };

    this.displayExpandedAdvertFromOverlayInTemplate = function() {
        if(this.clickUrl!='{clickurl}') this.recordEvent(this.clickUrl);
        this.displayExpandedAdvertTemplate();
        this.expandedRootElement.expandedWidth = window.innerWidth;
        this.expandedRootElement.expandedHeight = window.innerHeight;
        this.expandedRootElement.expandedMaxDimension = Math.max(window.innerHeight, window.innerWidth);
        this.expandedRootElement.appendChild(this.closeButton);
    };
    this.expandHandler = function(){
        if(window.isMraidAvailable && window.isOrmmaAvailable) {
            if(this.preferMRAIDOverORMMA == true) {
                window.isOrmmaAvailable = false;
            } else {
                window.isMraidAvailable = false;
            }
        }
        if(window.isMraidAvailable) {
            mraid.expand();
        } else {
            this.displayExpandedAdvertFromOverlayInTemplate();
        }
    }
    this.initialiseTemplateAfterCssLoaded = function () {
        if (this.autoProgressBar) {

            this.loadingPage = this.createDivWithId('loading-page-4sa');

            if(this.getLoadingElements){
                //custom loader
                this.registerElements(this.loadingPage, this.getLoadingElements());
            }else{
                //default loader
                var progressBar = this.createDivWithId('progress-bar');
                var progressBarBorder = this.createDivWithId('progress-bar-border');
                progressBarBorder.appendChild(progressBar);
                this.loadingPage.appendChild(progressBarBorder);
            }
            this.adContainer.appendChild(this.loadingPage);

            if(this.getLoadingElements){
                this.loadLoadingImages();
            }
        }

        //we may need to generate a new cacheBusterToken for click to web on Amazon S3.
        if(this.cacheBusterToken) this.cacheBusterToken = this.checkCacheBuster(this.cacheBusterToken);

        if (this.adOverlay) {
            this.adContainer.appendChild(this.collapsedRootElement);

            this.closeButton = this.createDivWithId('close-button');

            this.registerClickEvent(this.collapsedRootElement, function(){ this.expandHandler();}.bind(this));

            this.registerClickEvent(this.closeButton, function() {
                if(window.isMraidAvailable) {
                    mraid.close();
                } else {
                    this.displayCollapsedAdvertTemplate();
                }
            }.bind(this));

            this.displayCollapsedAdvertTemplate();
        }
        else {

            this.expandedRootElement.expandedWidth = window.innerWidth;
            this.expandedRootElement.expandedHeight = window.innerHeight;
            this.expandedRootElement.expandedMaxDimension = Math.max(window.innerHeight, window.innerWidth);
            setTimeout(this.displayExpandedAdvertTemplate.bind(this), 200);
        }

        this.setupOrientationPlaceholder();
    };

    this.showRootExpandedElement = function () {
        this.placeholderDiv.style['display'] = 'none';

        if (this.loadingPage && !this.preloadExpandableImagesComplete) {
            this.loadingPage.style['display'] = 'block';
            this.expandedRootElement.style['opacity'] = '0';
            this.expandedRootElement.style['display'] = 'none';

        }else{

            this.expandedRootElement.style['display'] = 'block';
            window.scrollTo(0, this.isAndroid);
            setTimeout ( function(){
                this.getHeightAndPosition();
                this.expandedRootElement.style['opacity'] = '1';

                this.expandedRootElement.style['height'] = (this.expandedRootElement.expandedHeight + this.isAndroid) + 'px';

            }.bind(this),100);
        }

    };

    this.showPlaceholder = function () {
        window.scrollTo(0, this.isAndroid);

        setTimeout( function () {
            this.getHeightAndPosition();
            this.placeholderDiv.style.width = this.expandedRootElement.expandedMaxDimension + 'px';

            if (this.loadingPage) {
                this.loadingPage.style['display'] = 'none';
            }
            this.placeholderDiv.style['display'] = 'block';
        }.bind(this), 100);


    };

    this.updatePlaceholderStyle = function() {
        if (!this.adState.isExpandedState()) {
            return;

        }

        if (this.placeholderDiv) {
            if (this.adOrientation == 'portrait') {
                if (window.orientation == undefined || window.orientation == 0) {
                    this.showRootExpandedElement();
                }
                else {
                    this.showPlaceholder();
                }
            }
            else {
                if (window.orientation == 0) {
                    this.showPlaceholder();
                }
                else {
                    this.showRootExpandedElement();
                }
            }
        }
    };

    this.setupOrientationPlaceholder = function() {
        var placeholderDivNameFunction = this.getPlaceholderDivNameFunction();
        if (placeholderDivNameFunction != undefined) {
            this.placeholderDiv = this.createDivWithId(placeholderDivNameFunction());

            this.handlePublisherAdjust('publisherAdjustExpanded', this.placeholderDiv);

            this.adContainer.appendChild(this.placeholderDiv);
            var supportsOrientationChange = "onorientationchange" in window,
                orientationEvent = supportsOrientationChange ? "orientationchange" : "resize";

            window.addEventListener(orientationEvent, this.updatePlaceholderStyle.bind(this), false);
        }
    };

    this.checkCssLoaded = function() {
        var collapsedWidth = this.getStyle(this.collapsedRootElement, 'width');


        if (collapsedWidth == 'auto' || collapsedWidth == undefined) return

        clearInterval(this.cssLoadedInterval);

        this.initialiseTemplateAfterCssLoaded();
    };

    this.initialiseTemplate = function() {

        this.adStylesheet = this.createStylesheet(this.buildStylesPath() + 'ad-unit' + (this.isRetina?'@2x':'') + '.css');
        this.adContainer = this.findAdContainer();
        if (this.containerIsAbsolute) {
            this.adContainer.style['position'] = 'absolute';
        } else {
            this.adContainer.style['position'] = 'relative';
        }

        this.adContainer.style['width'] = this.collapsedAdWidth + 'px';
        this.adContainer.style['height'] = this.collapsedAdHeight + 'px';
        this.adContainer.style['textAlign'] = 'left';
        this.adContainer.style['margin'] = '0px';
        this.adContainer.style['padding'] = '0px';
        this.adContainer.appendChild(this.adStylesheet);

        this.collapsedRootElement = this.createDivWithId(this.adId + '-collapsed-container');
        this.adContainer.appendChild(this.collapsedRootElement);
        this.collapsedRootElement.style['display'] = 'none';
        this.expandedRootElement = this.createDivWithId(this.adId + '-expanded-container');
        this.expandedRootElement.style['display'] = 'none';
        this.adContainer.appendChild(this.expandedRootElement);

        if(this.notifyAdAboutToShow) {
            this.notifyAdAboutToShow();
        }

        this.cssLoadedInterval = setInterval(this.checkCssLoaded.bind(this), 50);

        this.checkMRAIDIfAvailable();
        this.checkORMMAIfAvailable();
        this.ORMMAStateChangeBound = false;
    };


    //Loading screens
    this.loadingPageTimerForExpandableAssets = null;
    this.preloadExpandableImagesComplete = false;

    this.loadingPageTimerForCollapsedAssets = null;
    this.preloadCollapsedImagesComplete = false;

    this.preloadLoadingImagesComplete = false;
    this.loadingPageTimerForLoadingAssets = null;

    this.expandableImagesToLoadCount = 0;
    this.loadedExpandableImagesCount = 0;

    this.collapsedImagesToLoadCount = 0;
    this.loadedCollapsedImagesCount = 0;

    this.loadingImagesToLoadCount = 0;
    this.loadedLoadingImagesCount = 0;


    this.preloadExpandableImage = function (imageUrl) {
        this.expandableImagesToLoadCount++;
        var image1 = new Image();
        image1.addEventListener('load', function() {
            this.loadedExpandableImagesCount++;
            var loadedPercent = (100 * this.loadedExpandableImagesCount) / this.expandableImagesToLoadCount;

            loadedPercent = Math.round(loadedPercent);

            if(document.getElementById('loader-percentage') && document.getElementById('loader-mask')){
                //custom loader


                var moveMask = document.getElementById('loader-mask');
                var step = parseInt(this.loadedExpandableImagesCount);
                var totalSteps = parseInt(this.expandableImagesToLoadCount);

                var xStart = parseInt(moveMask.xStart);
                var xEnd = parseInt(moveMask.xEnd);
                var xDelta = parseInt(xEnd - xStart);

                var yStart = parseInt(moveMask.yStart);
                var yEnd = parseInt(moveMask.yEnd);
                var yDelta = parseInt(yEnd - yStart);

                document.getElementById('loader-percentage').innerHTML = moveMask.loadPrefix + loadedPercent + "%";

                var tween = 'easeNone';
                var xTransformVal = Math.round(this[tween](step, xStart, xDelta, totalSteps));
                var yTransformVal = Math.round(this[tween](step, yStart, yDelta, totalSteps));


                if(this.loadedExpandableImagesCount==this.expandableImagesToLoadCount){
                    xTransformVal=xEnd;
                    yTransformVal=yEnd;
                }

                moveMask.style.webkitMaskPosition = xTransformVal + ' ' + yTransformVal;
            }else if(document.getElementById('loader-percentage') && !document.getElementById('loader-mask')){
                document.getElementById('loader-percentage').innerHTML = loadedPercent + "%";
                document.getElementById('loader-bar').style.width = (212 * (loadedPercent/100)) + "px";
            }else{
                var progressBar = document.getElementById('progress-bar');
                progressBar.style.width = loadedPercent + '%' ;
            }



        }.bind(this), false);
        image1.src = imageUrl;
    };

    this.preloadCollapsedImage = function (imageUrl) {
        this.collapsedImagesToLoadCount++;
        var image1 = new Image();
        image1.addEventListener('load', function() {
            this.loadedCollapsedImagesCount++;
        }.bind(this), false);
        image1.src = imageUrl;
    };

    this.preloadLoadingImage = function (imageUrl) {
        this.loadingImagesToLoadCount++;
        var image1 = new Image();
        image1.addEventListener('load', function() {
            this.loadedLoadingImagesCount++;
        }.bind(this), false);
        image1.src = imageUrl;
    };

    this.isExpandableImagesPreloadComplete = function() {
        return (this.loadedExpandableImagesCount == this.expandableImagesToLoadCount);
    };

    this.isCollapsedImagesPreloadComplete = function() {

        return (this.loadedCollapsedImagesCount == this.collapsedImagesToLoadCount);
    };

    this.isLoadingImagesPreloadComplete = function() {
        return (this.loadedLoadingImagesCount == this.loadingImagesToLoadCount);
    };

    this.buildExpandableImageAssetsToPreload = function() {
        var elements = this.getExpandedElements();
        var imageAssetsToPreload = new Array();
        this.addAssetsForElements(imageAssetsToPreload, elements);

        return imageAssetsToPreload;
    };

    this.buildCollapsedImageAssetsToPreload = function() {
        var elements = this.getCollapsedElements();
        var imageAssetsToPreload = new Array();
        this.addAssetsForElements(imageAssetsToPreload, elements);
        return imageAssetsToPreload;
    };

    this.buildLoadingImageAssetsToPreload = function() {
        var elements = this.getLoadingElements();
        var imageAssetsToPreload = new Array();
        this.addAssetsForElements(imageAssetsToPreload, elements);
        return imageAssetsToPreload;
    };

    this.addAssetsForElements = function(imageAssetsToPreload, elements) {
        for (var i in elements) {
            var elementName;
            if (elements[i].name) {
                elementName = elements[i].name;
            }
            else {
                elementName = elements[i];
            }
            var element = document.getElementById(elementName);
            var imagePath = this.getStyle(element, 'background-image');
            if (imagePath) {
                var urlPath = imagePath.replace('url(', '').replace(')', '');

                if (urlPath != 'none' && urlPath.indexOf('-webkit-')==-1) {
                    imageAssetsToPreload.push(urlPath);
                }
            }
            if(elements[i].type == 'img') {
                imageAssetsToPreload.push(element.src);
            }
            if (elements[i].children) {
                this.addAssetsForElements(imageAssetsToPreload, elements[i].children);
            }
        }
    };

    this.preloadExpandableImages = function() {
        var imageAssetsToPreload = this.buildExpandableImageAssetsToPreload();

        for (var i = 0; i < imageAssetsToPreload.length; i++) {
            this.preloadExpandableImage(imageAssetsToPreload[i]);
        }
    };

    this.preloadCollapsedImages = function() {
        var imageAssetsToPreload = this.buildCollapsedImageAssetsToPreload();

        for (var i = 0; i < imageAssetsToPreload.length; i++) {
            this.preloadCollapsedImage(imageAssetsToPreload[i]);
        }
    };

    this.preloadLoadingImages = function() {
        var imageAssetsToPreload = this.buildLoadingImageAssetsToPreload();

        for (var i = 0; i < imageAssetsToPreload.length; i++) {
            this.preloadLoadingImage(imageAssetsToPreload[i]);
        }
    };



    this.showLoadingPage = function() {
        this.loadingPage = document.getElementById('loading-page-4sa');
        this.handlePublisherAdjust('publisherAdjustExpanded', this.loadingPage);
        this.loadingPage.style['display'] = 'block';
        if(this.notifyLoadingPageShowing) {
            this.notifyLoadingPageShowing();
        }
        if(this.delayPreloadInMillisWhenLoadingPageIsShown) {
            setTimeout(function() {
                this.loadingPageTimerForExpandableAssets = setInterval(this.checkExpandableImagesReady.bind(this), 500);
                this.preloadExpandableImages();
            }.bind(this), this.delayPreloadInMillisWhenLoadingPageIsShown);
        } else {
            this.loadingPageTimerForExpandableAssets = setInterval(this.checkExpandableImagesReady.bind(this), 500);
            this.preloadExpandableImages();
        }
    };

    this.loadCollapsedImages = function() {
        this.loadingPageTimerForCollapsedAssets = setInterval(this.checkCollapsedImagesReady.bind(this), 500);
        this.preloadCollapsedImages();
    };

    this.loadLoadingImages = function() {
        this.loadingPageTimerForLoadingAssets = setInterval(this.checkLoadingImagesReady.bind(this), 250);
        this.preloadLoadingImages();
    };

    this.checkExpandableImagesReady = function () {
        if (this.isExpandableImagesPreloadComplete()) {
            this.preloadExpandableImagesComplete = true;
            clearInterval(this.loadingPageTimerForExpandableAssets);

            this.loadingPageTimerForExpandableAssets = null;
            setTimeout(function() {
                this.loadingPageComplete();
            }.bind(this), 1000);
        }
    }

    this.checkCollapsedImagesReady = function () {
        if (this.isCollapsedImagesPreloadComplete()) {
            this.preloadCollapsedImagesComplete = true;
            clearInterval(this.loadingPageTimerForCollapsedAssets);

            this.loadingPageTimerForCollapsedAssets = null;
            setTimeout(function() {
                this.loadingCollapsedAssetsComplete();
            }.bind(this), 1000);
        }
    }

    this.checkLoadingImagesReady = function () {

        if (this.isLoadingImagesPreloadComplete()) {

            this.preloadLoadingImagesComplete = true;
            clearInterval(this.loadingPageTimerForLoadingAssets);

            this.loadingPageTimerForLoadingAssets = null;
            setTimeout(function() {

                this.loadingLoadingAssetsComplete();

            }.bind(this), 500);
        }
    };

    this.setUpMraidHandlers = function() {
        this.registerMraidHandlers();
        // mraid.setExpandProperties({
        //     useCustomClose : true
        //});
    }

    this.registerMraidHandlers = function () {
        mraid.addEventListener("stateChange", function(state) {
            if(state == "expanded" && !this.adState.isExpandedState()  ) {
                this.displayExpandedAdvertFromOverlayInTemplate();
                this.closeButton.style.display = 'none';
            } else if(state == "default" || state == "hidden") {
                this.displayCollapsedAdvertTemplate();
            }
        }.bind(this));
    }

    this.initialiseMRAID = function() {
        /*
         * Checking for the state of the mraid client library and subscribing to the ready event if necessary
         * When the client library is ready call the showAd method to render the ad
         */

        if (mraid.getState() != 'ready' && mraid.getState() != 'default' ) {
            mraid.addEventListener('ready', this.setUpMraidHandlers);
        } else {
            this.setUpMraidHandlers();
        }

        window.isMraidInitialised = true;

    }


    this.checkMRAIDIfAvailable = function() {
        window.isMraidAvailable = false;
        window.isMraidInitialised = false;

        var htmlDoc = document.getElementsByTagName('head').item(0),
            mraidScript = document.createElement('script');
        mraidScript.setAttribute('type', 'text/javascript');
        mraidScript.setAttribute('src', 'mraid.js');

        htmlDoc.appendChild(mraidScript);
        mraidScript.onload =  this.mraidLoaded.bind(this); //callback for mraid.js loading
        mraidScript.onerror = this.errorLoadingMraid.bind(this); //callback for mraid.js loading error
    };

    this.mraidLoaded = function (){
        if (typeof mraid === 'object') {
            setTimeout(function(){
                this.initialiseMRAID();
                window.isMraidAvailable = true;
            }.bind(this),200);
        }
    }


    this.errorLoadingMraid = function(){
    }

    this.checkORMMAIfAvailable = function() {
        window.isOrmmaAvailable = false;
        window.ORMMAReady = function(event) {
            window.isOrmmaAvailable = true;
        };
    };

    this.registerLoadEventForElement = function (element, functionToExecute) {
        if (element.addEventListener) {
            element.addEventListener('load', functionToExecute, false);
        }
        else {
            element.attachEvent('onload', functionToExecute);
        }
    }

}