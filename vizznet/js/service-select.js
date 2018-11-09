var setupFee = 'Setup Fee:  100';
var routerPrice = 'Router: 50';
var BB_monthly_charge = 'Broadband Subscription: 20';
var BB_month_in_advance = 'Broadband Subscription 1 Month Advance: 20';



function update(value){
    if(value=='starter'){
        if($('#router').is(':checked')){
            $('#router-price').html(routerPrice).show();
        }
        $('#monthdeposit').html(BB_month_in_advance).show();
        $('#bb-subscript').html(BB_monthly_charge).show();
        $('#setup').html(setupFee).show();
    }
    if(value=='premium'){
        $('#bb-subscript').html(BB_monthly_charge).show();
        $('#router-price').html("Router: FREE").show();
        $('#setup').html("Setup Fee: FREE").show();
    }
    if(value=='router'){
        if(!$('#premium').is(':checked')){
            $('#router-price').html(routerPrice).show();
        }
    }
    if(value=='no-router'){
        if(!$('#premium').is(':checked')){
            $('#router-price').html("Router: No router").show();
        }
    }
}