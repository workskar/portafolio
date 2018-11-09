<?php
// vim: tabstop=4:softtabstop=4:shiftwidth=4:expandtab
//-------------------------------------------------------------------------------------
////
////  Workfile: dyvalidate.php   Revision:   1.0
////
////  Author:   John Hull  
////
////  Project: Dalya Mobile Website
////
////  Dayla Landing Page
////
////  HTML 5
////
////  Log:
////     r1.0 19/05/2011 John Hull
////        Initial Release
////
////-------------------------------------------------------------------------------------
?>
<script type="text/javascript">
<!--

function addEvent(obj, evnt, fn)
{
    var onevnt = "on" + evnt;

    if(!obj.addEventListener)
    {
        obj.attachEvent(onevnt, fn);
    }
    else
    {
        obj.addEventListener(evnt, fn, false);
    }
}


function hasClass(elem, cls)
{
  if(elem && elem.className)
    return elem.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
  return null;
}


function hasClassClass(elem, cls)
{
  if(elem && elem.className)
    return elem.className.match(new RegExp('(\\s|^)'+cls+'(\\w\*)(\\s|$)'));
  return null;
}

 
function addClass(elem, cls)
{
  if(!this.hasClass(elem, cls))
    elem.className += " "+cls;
}

 
function removeClass(elem, cls)
{
  if(hasClass(elem , cls)) {
    var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
    elem.className=elem.className.replace(reg,' ');
  }
}


function showReqIfZ(me)
{
  var retval = 0;

  if(hasClass(me, "nonz")){
    var inplen = me.value.length;
    if(!inplen){
      addClass(me, 'val_error');
      retval = 1;
    }
    else
    {
      removeClass(me, 'val_error');
    }
  }
//  console.log("showReqIfZ");
  return retval;
}


function showValEmail(me)
{
    var retval = 1;
    var fval = "";

    addClass(me, 'val_error');
    if(me.value.length)
    {
        fval += me.value;

        if(/^[\w.]+\@[\w]+\.[\w.]+$/.test(fval) == true)
        {
            removeClass(me, 'val_error');
            retval = 0;
        }
    }
    return retval;
}


function showValTel(me)
{
  var retval = 0;
  var fval = "";

  if(hasClass(me, "telno"))
  {
    if(me.value.length)
    {
      fval += me.value;

      if(/^\+?[\d ]{5,20}$/.test(fval) == false)
      {
        addClass(me, 'val_error');
        retval = 1;
      }
      else
      {
        removeClass(me, 'val_error');
      }
    }
  } 
  return retval;
}

function showFieldMatch(me)
{
    var retval = 0;
    var mFld = hasClassClass(me, "fMatch");

    if(mFld)
    {
        var matcher = document.getElementById(mFld[2]).value;
        if(matcher != me.value)
        {
            addClass(me, 'val_error');
            retval = 1;
      }
      else
      {
        removeClass(me, 'val_error');
      }
    }
    return retval;
}


function showMinLen(me)
{
  var mincls = hasClassClass(me, "min")
  var retval = 0;

  if(mincls){
    var inplen = me.value.length;
    var minstr = /min(\d*)/.exec(mincls)
    minsiz = 0 + minstr[1]?minstr[1]:0;
    if(minsiz){
      if(inplen < minsiz){
        addClass(me, 'val_error');
        retval = 1;
      }
      else
      {
        removeClass(me, 'val_error');
      }
    }
  }
  return retval;
}

function showNotSet(me)
{
    var retval = 0;
    var pa = me.parentNode;

    if(!me.checked){
        addClass(pa, 'val_error');
        retval = 1;
    }
    else
    {
        removeClass(pa, 'val_error');
    }
    return retval;
}
// -->
</script>
<?php
print '
<script language="javascript" type="text/javascript">

function submitCheck(me)
{


  var fid = me;
  var finputs = fid.getElementsByTagName(\'input\');
  var tas = fid.getElementsByTagName(\'textarea\');
  var fnret = 0; 
  for(var x=0; x < finputs.length; x++)
  {
    var fip = finputs[x];

    if(hasClass(fip, "nonz"))
      fnret |= showReqIfZ(fip);
    if(hasClass(fip, "vemail"))
        fnret |= showValEmail(fip);
    if(hasClass(fip, "mustset"))
      fnret |= showNotSet(fip);
    if(hasClassClass(fip, "min"))
      fnret |= showMinLen(fip);
    if(hasClassClass(fip, "fMatch"))
      fnret |= showFieldMatch(fip);
  }

  for(var y=0; y < tas.length; y++)
  {
      var ta = tas[y];
      if(hasClassClass(ta, "min"))
          fnret |= showMinLen(ta);
  }



  if(fnret)
  {
    alert("Please correct the highlighted fields");
    return false;
  }';

print '
  return true;

}


</script>';
 ?>