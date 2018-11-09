function showValEmail(me)
{
    var retval = 1;
    var fval = "";
    if(document.getElementById('reg_email').value.length)
    {
        fval += document.getElementById('reg_email').value
        if(/^[\w.]+\@[\w]+\.[\w.]+$/.test(fval) == true)
        {
            retval = 0;
			return true;
        }
    }
    //return retval;
	alert("please introduce a valid email");
	return false;
}