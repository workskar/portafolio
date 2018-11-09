function PostcodeAnywhere_Interactive_Find_v1_10Begin(Key, SearchTerm, PreferredLanguage, Filter, UserName)
{
    var scriptTag = document.getElementById("PCA6d35cfc188f1451f9cfdf1b5d751a716");
    var headTag = document.getElementsByTagName("head").item(0);
    var strUrl = "";

    //Build the url
    strUrl = "http://services.postcodeanywhere.co.uk/PostcodeAnywhere/Interactive/Find/v1.10/json.ws?";
    strUrl += "&Key=" + encodeURI(Key);
    strUrl += "&SearchTerm=" + encodeURI(SearchTerm);
    strUrl += "&PreferredLanguage=" + encodeURI(PreferredLanguage);
    strUrl += "&Filter=" + encodeURI(Filter);
    strUrl += "&UserName=" + encodeURI(UserName);
    strUrl += "&CallbackFunction=PostcodeAnywhere_Interactive_Find_v1_10End";

    //Make the request
    if (scriptTag)
    {
        try
        {
            headTag.removeChild(scriptTag);
        }
        catch (e)
        {
            //Ignore
        }
    }
    scriptTag = document.createElement("script");
    scriptTag.src = strUrl
    scriptTag.type = "text/javascript";
    scriptTag.id = "PCA6d35cfc188f1451f9cfdf1b5d751a716";
    headTag.appendChild(scriptTag);
}

function PostcodeAnywhere_Interactive_Find_v1_10End(response)
{
    //Test for an error
    if (response.length==1 && typeof(response[0].Error) != 'undefined')
    {
        //Show the error message
        alert(response[0].Description);
    }
    else
    {
        //Check if there were any items found
        if (response.length==0)
        {
            alert("Sorry, no matching items found");
        }
        else
        {
            document.getElementById('return').style.display = '';
            document.getElementById('returnbtn').style.display = '';
            var formObj = document.forms['formD']; // your form

            document.getElementById('return').options.length = 1;
            //document.getElementById('return').text = 'Please select';

            for (var i=0;i<response.length;i++)
                document.getElementById('return').options.add(new Option(response[i].StreetAddress + ", " + response[i].Place, response[i].Id));
        }
    }
}





function PostcodeAnywhere_Interactive_RetrieveById_v1_10Begin(Key, Id, PreferredLanguage, UserName)
{
   
	var scriptTag = document.getElementById("PCAa73f9bc2b60d4e4cbd595512478a3291");
    var headTag = document.getElementsByTagName("head").item(0);
    var strUrl = "";

    //Build the url
    strUrl = "http://services.postcodeanywhere.co.uk/PostcodeAnywhere/Interactive/RetrieveById/v1.10/json.ws?";
    strUrl += "&Key=" + encodeURI(Key);
    strUrl += "&Id=" + encodeURI(Id);
    strUrl += "&PreferredLanguage=" + encodeURI(PreferredLanguage);
    strUrl += "&UserName=" + encodeURI(UserName);
    strUrl += "&CallbackFunction=PostcodeAnywhere_Interactive_RetrieveById_v1_10End";
	
    //Make the request
    if (scriptTag)
    {
        try
        {
            headTag.removeChild(scriptTag);
        }
        catch (e)
        {
            //Ignore
        }
    }
    scriptTag = document.createElement("script");
    scriptTag.src = strUrl
    scriptTag.type = "text/javascript";
    scriptTag.id = "PCAa73f9bc2b60d4e4cbd595512478a3291";
    headTag.appendChild(scriptTag);
}

function PostcodeAnywhere_Interactive_RetrieveById_v1_10End(response)
{
     
	//Test for an error
    if (response.length==1 && typeof(response[0].Error) != 'undefined')
    {
        //Show the error message
        alert(response[0].Description);
    }
    else
    {
        
		//Check if there were any items found
        if (response.length==0)
        {
            alert("Sorry, no matching items found");
        }
        else
        {
			document.getElementById('txtAddr1').value='';
            document.getElementById('txtAddr2').value='';
            document.getElementById('txtAddr3').value='';
            document.getElementById('txtAddr4').value='';
			
            //var retstring = response[0].Company + "<br>" + response[0].Line1 + "<br>" + response[0].Line2 + "<br>" + response[0].Line3 + "<br>" + response[0].PostTown + "<br>" + response[0].County + "<br>" + response[0].Postcode;
			
            if(response[0].Company)
                document.getElementById('txtAddr1').value = response[0].Company + ', ' + response[0].Line1;
            else
                document.getElementById('txtAddr1').value = response[0].Line1;
				
            if(response[0].Line2 && response[0].Line3)
                document.getElementById('txtAddr2').value=response[0].Line2 + ", " + response[0].Line3;
            else if(response[0].Line2)
                document.getElementById('txtAddr2').value=response[0].Line2;
				
            else if(response[0].Line3)
                document.getElementById('txtAddr2').value=response[0].Line3;
            document.getElementById('txtAddr3').value=response[0].PostTown;
            document.getElementById('txtAddr4').value=response[0].County;
			
            //+ "<br>" + response[0].Line2 + "<br>" + response[0].Line3 + "<br>" + response[0].PostTown + "<br>" + response[0].County + "<br>" + response[0].Postcode;
            //document.getElementById('address').innerHTML = retstring;

        }
    }


}
