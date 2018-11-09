/*global $, window */
/*jslint white: true, browser: true, undef: true, eqeqeq: true, newcap: true */

var basket = {}, basketItemsMonthly = [], basketItemsSetup = [];

var BasketItem = function (desc, price, classHandle, isPromo) {
	this.description = desc;
	this.price = price;
	this.classHandle = classHandle;
	this.isPromo = isPromo;
};

// get all the items not tied to options (e.g. bb product, line rental, activation) from the hidden inputs
basket.init = function () {
	// get monthly payment items
	$('div#basketData > #monthlyData > input[type=hidden].default').each(function () {
		var description = $(this).attr('name');
		var price = basket.priceFormat($(this).val());
		var classHandle = $(this).attr('class').split(' ')[0];
		var isPromo = $(this).attr('class').indexOf('promo') != -1;
		// add to the monthly array
		basketItemsMonthly[basketItemsMonthly.length] = new BasketItem(description, price, classHandle, isPromo);
	});

	// get one off payment items
	$('div#basketData > #setupData > input[type=hidden].default').each(function () {
		var description = $(this).attr('name');
		var price = basket.priceFormat($(this).val());
		var classHandle = $(this).attr('class').split(' ')[0];
		var isPromo = $(this).attr('class').indexOf('promo') != -1;
		// add to the setup items array
		basketItemsSetup[basketItemsSetup.length] = new BasketItem(description, price, classHandle, isPromo);
	});

	// set activation to 0.00 if home phone and 12 month selected
	if (($('#contractAnnual:checked').length > 0 || $('#contractFibre').length > 0) && ($('#homePhoneYes:checked').length > 0 || $('#wlrForced').length > 0 || $('#isBundle').length > 0)) {
		$.each(basketItemsSetup, function () {
			if (this.classHandle === 'activation') {
				this.price = '0.00';
			}
		});
	}
	
};

basket.updateSelection = function () {
	$('input[type=radio]:checked').not('#liveappointment input').each(function () {
		var itemID = $(this).attr('id');
		var dataElements = $('input[type=hidden].' + itemID);
		$.each(dataElements, function () {
			var description = $(this).attr('name');
			var price = $(this).val();
			var classHandle = $(this).attr('class');
			var isPromo = $(this).attr('class').indexOf('promo') != -1;
			if ($(this).hasClass('hardware')) {
				// check if 12 month contract is selected and set price to 0 if it is
				if ($('#contractAnnual:checked').length > 0) {
					price = '0.00';
				}
			}
			if ($(this).hasClass('setup')) {
				basketItemsSetup[basketItemsSetup.length] = new BasketItem(description, price, classHandle, isPromo);
			}
			if ($(this).hasClass('monthly')) {
				basketItemsMonthly[basketItemsMonthly.length] = new BasketItem(description, price, classHandle, isPromo);
			}
			if ($(this).hasClass('hardware')) {
				// add the postage charge if hardware is selected, needs to be down here so it appears last in the basket
				basket.addPostage();
			}
		});
	});
};

basket.addPostage = function () {
	var theDataElement = $('input[type=hidden].postage');
	var description = $(theDataElement).attr('name');
	var price = $(theDataElement).val();
	var classHandle = $(theDataElement).attr('class');
	basketItemsSetup[basketItemsSetup.length] = new BasketItem(description, price, classHandle, false);
};

// empty the arrays
basket.resetData = function () {
	basketItemsMonthly.length = 0;
	basketItemsSetup.length = 0;
};

// go through each array (monthly, setup) and build basket rows from the contents
basket.build = function () {
	$('.baskets .data').remove();
	// build the monthly items from the basketItemsMonthly array
	$.each(basketItemsMonthly, function () {
		var description = this.description;
		var price = this.price;
		var classHandle = this.classHandle;
		var isPromo = this.isPromo ?  "promoCodePrice" : "";
		var row = null;
		var rowTotal = null;

		if (classHandle.match('protectYes freeTrial monthly')) {
			row = '<dt class="' + classHandle + ' ongoingPrice data"></dt><dd class="' + classHandle + ' ' + isPromo + ' ongoingPrice data">(&pound;<span class="price">' + price + '</span> ' + description + ')</dd>';
			$('#basketMonthly > dt.totalRow').before(row);
		}
		else if (classHandle === 'ongoingPrice') {
			row = '<dt class="' + classHandle + ' ' + isPromo + ' ongoingPrice data"></dt><dd class="' + classHandle + ' ' + isPromo + '  ongoingPrice data">(&pound;' + price +' ' + description + ')</dd>';
			rowTotal = '<dt class="ongoingPrice total data">&nbsp; </dt><dd class="ongoingPrice total data">(&pound;<span class="ongoingTotal"></span> ' + description + ')</dd>';
			$('#basketMonthly > dt.totalRow').before(row);
			if(!isPromo) {
				$('#basketMonthly > dd.totalRow').after(rowTotal);	
			}
		}
		else {
			row = '<dt class="' + classHandle + ' ' + isPromo + ' description data">' + description + '</dt><dd class="' + classHandle + ' ' + isPromo + '  cost data">&pound;<span class="price">' + price + '</span></dd>';
			$('#basketMonthly > dt.totalRow').before(row);
		}
	});

	// build the setup items from the basketItemsSetup array
	$.each(basketItemsSetup, function () {
		var description = this.description;
		var price = this.price;
		var classHandle = this.classHandle;
		var isPromo = this.isPromo ?  "promoCodePrice" : "";
		var row = '<dt class="' + classHandle + ' ' + isPromo + ' description data">' + description + '</dt><dd class="' + classHandle + ' ' + isPromo + ' cost data">&pound;<span class="price">' + price + '</span></dd>';
		$('#basketSetup > dt.totalRow').before(row);
	});

	// recalculate the totals
	basket.recalc();
	
	basket.scrollPos();
	
    //fix to stop overflowing
    if($('#rightColumnOuter').height() > $('#wrapperDiv').height()) {
        $('#wrapperDiv').css('height', $('#rightColumnOuter').height()+20);
    }
    
    //trigger resize to ensure basket is fixed appropiately
    $(window).trigger('resize');

};

basket.correctMinus = function () {
	
	$('div.baskets dl dd').each( function () {
	   str = $(this).text();
	   if (str.indexOf('-') != -1 && (str.indexOf(String.fromCharCode(163)) != -1 || str.indexOf('£') != -1) ) {
		  $(this).text(str.replace('-', '').replace(String.fromCharCode(163), '- '+String.fromCharCode(163)));
	   }
	})

}

basket.recalc = function () {

	var basketSetupTotal = 0.00;
	var basketMonthlyTotal = 0.00;
	var basketMonthlyOngoing = 0.00;
	var promoAmount = 0.00;
	var ongoingPrice = null;
	var leadPrice = null;
    
    $(basketItemsMonthly).each( function (index) {
        if(this.classHandle == 'ongoingPrice' && !this.isPromo){
            ongoingPrice += parseFloat(this.price);
        } else if(this.classHandle != 'ongoingPrice' && this.isPromo){
            promoAmount = parseFloat(this.price);
            basketMonthlyTotal += parseFloat(this.price);
        } else if(this.classHandle == 'broadband') {
            leadPrice += parseFloat(this.price);
            basketMonthlyTotal += parseFloat(this.price);            
        } else if(this.classHandle != 'ongoingPrice') {
            basketMonthlyTotal += parseFloat(this.price);
        }
    });
    
    $(basketItemsSetup).each( function (index) {
        basketSetupTotal += parseFloat(this.price);
    });

	if ($('input[type=hidden].ongoingPrice').length > 0) {
	   
		basketMonthlyOngoing = ((basketMonthlyTotal + ongoingPrice) - leadPrice) - promoAmount;
		
		if($('#boltOnComponentId947Yes') && $('#boltOnComponentId947Yes').is(':checked')){
			basketMonthlyOngoing += parseFloat($('input[type=hidden].boltOnComponentId947Yes.protectYes').val());
		}
		
		$('#basketMonthly dd.ongoingPrice span.ongoingTotal').text(basketMonthlyOngoing.toFixed(2));
	}
	
	$('#monthlyTotal').text(basketMonthlyTotal.toFixed(2));
	$('#setupTotal').text(basketSetupTotal.toFixed(2));
	
	basket.correctMinus();     
	
};

// handle the selection of call features inc. calculating bundle price
basket.callFeature = function () {
	if ($('#featuresBox').length > 0) {
		var callFeatureTotal = 0.00;
		var bundleValue = basket.priceFormat(basket.calcBundle());
		var nonBundleValue = basket.priceFormat(basket.calcNonBundle());
		var theDataElement = $('input[type=hidden].callFeatures');
		var description = $(theDataElement).attr('name');
		var classHandle = $(theDataElement).attr('class');
		var isPromo = $(theDataElement).attr('class').indexOf('promo') != -1;
		if($('div.featuresBox input[type=checkbox]:checked').length > 0) {
			var howMany = ' ('+$('div.featuresBox input[type=checkbox]:checked').length+')';
		} else {
			var howMany = '';
		};
		callFeatureTotal = basket.priceFormat(parseFloat(bundleValue) + parseFloat(nonBundleValue));
		var newTotal = new BasketItem(description + howMany, callFeatureTotal, classHandle, isPromo);
		var newTotalSetup = new BasketItem(description + howMany + ' <span>(first month)</span>' , callFeatureTotal, classHandle, isPromo);
		basketItemsMonthly[basketItemsMonthly.length] = newTotal;
		basketItemsSetup[basketItemsSetup.length] = newTotalSetup;
		if( $('#selectedCallFeaturesTotal').length > 0) $('#selectedCallFeaturesTotal').val(newTotal.price);
	}
};

// calculate the bundle price of selected bundleable call features
basket.calcBundle = function () {
	var callFeatureValues = {};
	var bundleQuantity = null;
	var bundleValue = null;
	var howMany = $('div.featuresBox input[type=checkbox].bundleable:checked').length;
	var classHandle = null;
	$('.bundle').each(function () {
		bundleQuantity = $(this).attr('name');
		bundleValue = $(this).val();
		callFeatureValues[bundleQuantity] = bundleValue;
	});
	bundleValue = 0.00;
	if (howMany > 1) {
		bundleValue = callFeatureValues[howMany];
	}
	else {
		classHandle = $('div.featuresBox input[type=checkbox].bundleable:checked').attr('id');
		bundleValue = parseFloat($('input[type=hidden].' + classHandle).val());
	}
	return bundleValue;
};

// calculate the total of non bundleable call features
basket.calcNonBundle = function () {
	var nonBundleValue = 0.00;
	$('div.featuresBox input[type=checkbox]:not(.bundleable):checked').each(function () {
		var classHandle = $(this).attr('id');
		nonBundleValue += parseFloat($('input[type=hidden].' + classHandle).val());
	});
	return nonBundleValue;
};

// only show the basket for javascript users
basket.show = function () {
	$('.baskets').removeClass('hide');
};

basket.scrollPos = function () {
	// uses a 300px offset so's it stays in position until the top of the viewport hits it, does nothing for IE6
	
	if (!($.browser.msie && $.browser.version <= "6.0") && (($(window).height()-$('#sitemap').height()-30) > $('#rightColumnOuter').height())) {
		var tempScrollTop = $(window).scrollTop();
		if (tempScrollTop > 500) {
			// .scrolling just changes position to fixed
			$('#rightColumnOuter').addClass('scrolling');
		}
		else {
			$('#rightColumnOuter').stop('true');
			$('#rightColumnOuter').removeClass('scrolling');
		}
	}
};

basket.priceFormat = function (theNumber) {
	theNumber = parseFloat(theNumber);
	if (isNaN(theNumber)) {
		theNumber = 0.00;
	}
	theNumber = theNumber.toFixed(2);
	return theNumber;
};

// highlight stuff thats pre added to basket
basket.forcedProducts = function () {
	$('input[type=hidden].forced').each(function () {
		var classHandle = $(this).attr('class').split(' ')[0];
		basket.flash(classHandle);
	});
};

// eeeeeeeeeeeugh
basket.flash = function (theElements) {
	// make the clicked thing flash
	$('dt.' + theElements + ',dd.' + theElements).addClass('changed')
	.animate({opacity: "0.5"}, 750)
	.animate({opacity: "1"}, 500)
	.animate({opacity: "0.5"}, 750)
	.animate({opacity: "1"}, 500)
	.animate({opacity: "1"}, 5000,
	function () {
		$('dt.' + theElements + ', dd.' + theElements).removeClass('changed');
	});
};

// switch price labels over
basket.handleHardwarePriceChange = function () {
	$('span.hardwarePrice').toggleClass('hide');
	$('span.hardwareAltPrice').toggleClass('hide');
};

// Basket functionality for Presignup
$(document).ready(function () {
	// hide non js information box
	$('#nonJSbasketInfo').addClass('hide');
	// move the basket when the page scrolls
	$(window).scroll(function () {
		basket.scrollPos();
	}).resize( function () {
		if(($(window).height() < $('#rightColumnOuter').height()) && $('#rightColumnOuter').hasClass('scrolling')) $('#rightColumnOuter').removeClass('scrolling');
		basket.scrollPos();
	});
	// only run this stuff if the basket element exists
	if ($('div.baskets').length > 0) {
		basket.init();
		basket.updateSelection();
		basket.callFeature();
		basket.build();
		basket.forcedProducts();
		basket.show();
		
		basket.correctMinus();
		
		//fix to stop overflowing
        if($('#rightColumnOuter').height() > $('#wrapperDiv').height()+10) {
            $('#wrapperDiv').css('height', $('#rightColumnOuter').height());
        } else {
            $('#wrapperDiv').css('height', '');
        }

		$(window).trigger('resize');
		
		// stupid IE doesn't know what to do when change happens
		if ($.browser.msie) {
			$('input[type=radio]').not('#liveappointment input').click(function () {
				this.blur();
				this.focus();
			});
		}
		// switch price labels over when contract option changes
		$('input[type=radio][name=contract]').change(function () {
			basket.handleHardwarePriceChange();
		});
		// when a selected option is changed
		$('input[type=radio]').not('#liveappointment input').change(function () {
		    $(window).trigger('resize');
			var theInput = $(this).attr('id');
			basket.resetData();
			basket.init();
			basket.updateSelection();
			basket.callFeature();
			basket.build();
			basket.flash(theInput);
		});
		// handle selection of call features
		$('div.featuresBox input[type=checkbox]').click(function () {
			basket.resetData();
			basket.init();
			basket.updateSelection();
			basket.callFeature();
			basket.build();
		});
		
	}
});