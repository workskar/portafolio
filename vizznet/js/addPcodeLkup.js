//
//// vim: tabstop=4:softtabstop=4:shiftwidth=4:expandtab
//

function addPcodeReturn(beforediv)
{
    var pcDiv = document.createElement('div');
    pcDiv.setAttribute('id', 'addr_find');
    pcDiv.setAttribute('class', 'regline');

    var retBut = document.createElement('input');
    retBut.setAttribute('type', 'button');
    retBut.setAttribute('value','Select');
    retBut.setAttribute('id',  'returnbtn');
    retBut.setAttribute('name','returnbtn');

    var retSel = document.createElement('select');
    retSel.setAttribute('id',   'return1')
    retSel.setAttribute('name', 'return1');
    retSel.setAttribute('class', 'return1');

    var firstOpt = document.createElement("option");
    firstOpt.setAttribute('value', 1);
    firstOpt.text = 'Select your address';

    try {
        retSel.add(firstOpt, null);
    }
    catch(ex) {
        retSel.add(firstOpt);
    }

    pcDiv.appendChild(retBut);
    pcDiv.appendChild(retSel);

    grandPa = beforediv.parentNode;
    grandPa.insertBefore(pcDiv, beforediv.nextSibling);
    return retBut;
}

function callPCLookup()
{
    PostcodeAnywhere_Interactive_Find_v1_10Begin(
                        'CM29-PJ43-FE55-JF98',
                        document.getElementById('reg_pcode').value, 
                        '',
                        '',
                        'QICOM11112');
    return false;
}

function callPCResponse()
{
    PostcodeAnywhere_Interactive_RetrieveById_v1_10Begin(
                        'CM29-PJ43-FE55-JF98',
                        document.getElementById('return1').value, 
                        '',
                        'QICOM11112');
    return false;
}


function addPcodeLookup()
{
    var pcinp = document.getElementById('reg_pcode');
    pcinp.style.width = '100px';

    var lookBut = document.createElement('input');
    lookBut.setAttribute('type', 'button');
    lookBut.setAttribute('name', 'reg_lookup');
    lookBut.setAttribute('value','Find Address');
    lookBut.setAttribute('id', 'fa-button');
    lookBut.setAttribute('class', 'fa_button');
    lookBut.value = 'Find Address';

    var pa = pcinp.parentNode;
    pa.appendChild(lookBut);

    addEvent(lookBut, "click", callPCLookup);
    retBut = addPcodeReturn(pa);
    addEvent(retBut, "click", callPCResponse);
}


function localFn(pcodeResponse)
{
    document.getElementById('reg_addr1').value = pcodeResponse.Line1;

    if(pcodeResponse.Line2 && pcodeResponse.Line3)
        document.getElementById('reg_addr2').value=pcodeResponse.Line2 + ", " + pcodeResponse.Line3;
    else if(pcodeResponse.Line2)
        document.getElementById('reg_addr2').value=pcodeResponse.Line2;
    else if(pcodeResponse.Line3)
        document.getElementById('reg_addr2').value=pcodeResponse.Line3;
    document.getElementById('reg_tcity').value=pcodeResponse.PostTown;
    document.getElementById('reg_county').value=pcodeResponse.County;

	document.getElementById('return1').style.display = 'none';
	document.getElementById('returnbtn').style.display = 'none';
}


addEvent(window, "load", addPcodeLookup);

