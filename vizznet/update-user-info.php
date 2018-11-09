
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset='utf-8' />
    <title>Customer Details</title>
    <jsp:include page="includes/links.jsp"/>
</head>
<?php 
$emailsave="savemail@gmail.com";
?>
<body>
<article id='main' class='personal-info'>
    <jsp:include page="includes/header.jsp"/>
    <div class='center-image'>
        <img alt='' title='' src='img/small-banner.jpg'>
    </div>
    <jsp:include page="includes/submenue.jsp"/>
    <section id='content'>
        <h1>Update your account</h1>
        <div id="wrapperDiv">
            <div class='box-checkA'>
                <form method="POST" commandName="userInfoUpdateForm" action="update-user-info.html" onsubmit="return submitCheck(this);">
                    <div class='box-section last-file'>
                        <ul class='you-details'>
                            <li class='row-li'>
                                <span class='label-jsp'>Title</span>
                                <form:select path="title" id="title" class='select-jsp'>
                                    <%--<form:option value="NONE" label="--- Select ---"/>--%>
                                    <form:option value="Mr"/>
                                    <form:option value="Mrs"/>
                                    <form:option value="Ms"/>
                                    <form:option value="Dr"/>
                                </form:select>
                            </li>
                            <li class='row-li'>
                                <form:label class='label-jsp' path="firstName">First Name</form:label>
                                <form:input class="txt-jspinput" path="firstName" id="firstName" />
                            </li>
                            <li class='row-li'>
                                <form:label class='label-jsp' path="surname">Last Name</form:label>
                                <form:input class="txt-jspinput" path="surname" id="surname"/>
                                <form:errors path="surname" cssClass="error"/>
                            </li>
                            <li class='row-li'>
                                <form:label class='label-jsp' path="">Mobile</form:label>
                                <form:input class="txt-jspinput" path="mobile" id="mobile" />
                            </li>
                            <li class='row-li'>
                                <form:label class='label-jsp' path="">Email</form:label>
                                <input class="txt-jspinput" path="email" id="email" value=''/>
                                <form:errors path="email" cssClass="error"/>
                            </li>
                            <li class='row-li'>
                                <span class='label-jsp'>Confirm Email</span>
                                <form:input type="text" class="txt-jspinput" path="confEmail" name="confEmail" id="confEmail"/>
                            </li>
                            <li class='row-li'>
                                <form:label class='label-jsp' path="">Password</form:label>
                                <form:input type='password' class="txt-jspinput" path="password" id="password" />
                                <form:errors path="password" cssClass="error"/>
                            </li>
                            <li class='row-li'>
                                <span class='label-jsp'>Confirm Password</span>
                                <form:input type="text" class="txt-jspinput" path="confPassword" name="confPassword" id="confPassword"/>
                            </li>
                            <li class='row-li'>
                                <span class='label-jsp'>Password Hint</span>
                                <form:input type="text" class="txt-jspinput" path="passwordHint" name="passwordHint" id="passwordHint"/>
                                <form:errors path="passwordHint" cssClass="error"/>
                            </li>
                            <li class='row-li'>
                                <span class='label-jsp'>Password Hint Answer</span>
                                <form:input type="text" class="txt-jspinput" path="passwordHintAnswer" name="passwordHintAnswer" id="passwordHintAnswer"/>
                                <form:errors path="passwordHintAnswer" cssClass="error"/>
                            </li>
                            <li class='row-li'>
                                <span class='label-jsp doblerow'>Notification preferences</span>
                                <ul class='li-list'>
                                    <li>
                                        <form:label class='label-jsp' path="">By email</form:label>
                                        <form:checkbox class='checkbox-jsp' path="notifyByEmail"/>
                                    </li>
                                    <li>
                                        <form:label class='label-jsp' path="">By post</form:label>
                                        <form:checkbox class='checkbox-jsp' path="notifyByPost"/>
                                    </li>
                                    <li>
                                        <form:label class='label-jsp' path="">By SMS</form:label>
                                        <form:checkbox  class='checkbox-jsp' path="notifyBySms"/>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <input class='btn-small' type="submit" name="submit" id="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id='right-col'>
        <jsp:include page="includes/in-promotions.jsp"/>
    </section>
</article><!-- page-main -->
<jsp:include page="includes/footer.jsp"/>
<script type='text/javascript'>
function submitCheck(me){
	if(document.getElementById('email').value==""){
		alert('email empty');
		document.getElementById('email').value=<?php echo "'$emailsave'"; ?>;
	}else{
		alert('modified');
	}
	return false;
}
</script>
</body>
</html>