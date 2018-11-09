<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: help.php
    // Project: VizzNet
    //
    // Notes:
    //
    // Log:
	include("header.php");
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>VizzNet</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='help'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='FAQ banner' title='FAQ banner' src='img/faq-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Broadband</h1>
			<h2>Frequently Asked Questions</h2>
			<div class='box-checkA'>
				<ul>
					<li class='li-row' onclick="changeClass(this,'bddata0', 'faqsdata', 'faqsdatashow','xplus');">
					<span id='xplus' class='xplus'>+</span><a class='faqs-title'>Do I need a BT landline to get your broadband?</a>
					</li>
					<div id='bddata0' class='faqsdata'>
						<p>VizzNet broadband works over any normal BT landline, so it doesn't matter if you pay your line rental to BT or to another company. If you currently have either a Virgin Media landline installed or a fibre optic service, we will need to install a new landline which will incur an additional cost.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata1', 'faqsdata', 'faqsdatashow','xplus1');">
					<span id='xplus1' class='xplus'>+</span> <a class='faqs-title'>Can I get VizzNet broadband in my area?</a>
					</li>
					<div id='bddata1'class='faqsdata'>
						<p>VizzNet broadband is available for most customers in the UK. To check you are not one of the few we cannot reach, enter either your postcode on our online <a href='#'>postcode checker</a>, or if you have a BT-compatible landline enter your landline number on our <a href='#'>landline checker</a>.</p>
					</div>
					
					<li class='li-row' onclick="changeClass(this,'bddata2', 'faqsdata', 'faqsdatashow','xplus2');">
						<span id='xplus2' class='xplus'>+</span><a class='faqs-title'>How do I order my Broadband?</a>
					</li>
					<div id='bddata2' class='faqsdata'>
						<p>Ordering VizzNet broadband services is simple; you can either <a href='#'>place your order</a> online or call our customer services department on <span class='red'>020 7177 8000</span>.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata3', 'faqsdata', 'faqsdatashow','xplus3');">
						<span id='xplus3' class='xplus'>+</span><a class='faqs-title'>Do I still keep my existing BT number?</a>
					</li>
					<div id='bddata3' class='faqsdata'>
						<p>Yes, you can switch to VizzNet broadband whilst still retaining your current landline number.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata4', 'faqsdata', 'faqsdatashow','xplus4');">
						<span id='xplus4' class='xplus'>+</span> <a class='faqs-title'>I'm already with another provider, how do I switch to VizzNet?</a>
					</li>
					<div id='bddata4' class='faqsdata'>
						<p>If you'd like to switch to VizzNet from another provider it's simple and what's more it's free! Simply call your current provider and ask for you Migration Authority Code (MAC). You'll also need to tell them that you would not like your connection to be ceased until the migration is complete to benefit from our free transfer service. Finally order your VizzNet package either online or over the phone (providing your MAC) and we'll take care of the rest.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata5', 'faqsdata', 'faqsdatashow','xplus5');">
						<span id='xplus5' class='xplus'>+</span> <a class='faqs-title'>What is the minimum contract length?</a>
					</li>
					<div id='bddata5' class='faqsdata'>
						<p>All our packages can be purchased with either a one or eighteen month long contract. So if you need a short term solution or if you'd like to trial our service before committing to a longer contract, it's no problem.</p>
					</div>
					
					<li class='li-row' onclick="changeClass(this,'bddata6', 'faqsdata', 'faqsdatashow','xplus6');">
						<span id='xplus6' class='xplus'>+</span> <a class='faqs-title'>How long does a new order take?</a>
					</li>
					<div id='bddata6' class='faqsdata'>
						<p>Once you've placed your order for home broadband it will typically take only 8 days to activate your service. You will be sent a confirmation email or text once we are able to provide the exact date that your service will commence.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata7', 'faqsdata', 'faqsdatashow','xplus7');">
						<span id='xplus7' class='xplus'>+</span> <a class='faqs-title'>How do I set up my Broadband?</a>
					</li>
					<div id='bddata7' class='faqsdata'>
						<p>Once your VizzNet broadband router has arrived, you only have to follow the simple instructions provided with it and you're ready to surf the web!</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata8', 'faqsdata', 'faqsdatashow','xplus8');">
						<span id='xplus8' class='xplus'>+</span> <a class='faqs-title'>What connection speed can I get?</a>
					</li>
					<div id='bddata8' class='faqsdata'>
						<p>VizzNet will always aim to give you the fastest broadband your plan allows, however the ultimate speed of your connection depends on how close you live to the nearest telephone exchange and the quality of your current phone line.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata9', 'faqsdata', 'faqsdatashow','xplus9');">
						<span id='xplus9' class='xplus'>+</span> <a class='faqs-title'>What is a broadband usage allowance?</a>
					</li>
					<div id='bddata9' class='faqsdata'>
						<p>There is no usage allowance for our unlimited broadband package. Our 10G and 40G VizzNet broadband packages come with an inclusive amount of data you can download per month, similar in concept to your mobile phone contract. By browsing the internet, downloading files, viewing images online, attaching files to email or streaming video, you are constantly downloading data via your internet connection. The more heavily you use the internet, the more data you will need to download.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata10', 'faqsdata', 'faqsdatashow','xplus10');">
						<span id='xplus10' class='xplus'>+</span> <a class='faqs-title'>What happens if I go over my usage?</a>
					</li>
					<div id='bddata10' class='faqsdata'>
						<p>If you exceed your inclusive data allowance you will be charged an additional &pound;1 for every 1G of data by which you exceed your stated allowance. Alternatively you can upgrade to our great value unlimited broadband plan so you never need to worry about exceeding your usage again.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata11', 'faqsdata', 'faqsdatashow','xplus11');">
						<span id='xplus11' class='xplus'>+</span> <a class='faqs-title'>Can I keep track of my usage throughout the month?</a>
					</li>
					<div id='bddata11' class='faqsdata'>
						<p>You can check your usage in your VizzNet account; simply log in to "My Account" and check your actual usage against your package allowance in real time.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata12', 'faqsdata', 'faqsdatashow','xplus12');">
						<span id='xplus12' class='xplus'>+</span> <a class='faqs-title'>Can I re-grade to a different package once I've entered a contract?</a>
					</li>
					<div id='bddata12' class='faqsdata'>
						<p>Absolutely, should you decide you need a higher or lower usage allowance at any time during your contract we can re-grade you to a more suitable package. Note that after re-grading you will have to wait 30 days before re-grading for a second time.</p>
					</div>
					<li class='li-row' onclick="changeClass(this,'bddata13', 'faqsdata', 'faqsdatashow','xplus13');">
						<span id='xplus13' class='xplus'>+</span> <a class='faqs-title'>What support service do we offer?</a>
					</li>
					<div id='bddata13' class='faqsdata'>
						<p>All our customers have access to our support team from 8am until 8pm on weekdays and from 9am until 5pm on Saturdays on <span class='red'>020 7177 8000</span>. At other times it's simple to raise a support request online and we'll resolve the issue as soon as we're able.</p>
					</div>
				</ul>
			</div>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
	<script type="text/javascript">

function changeClass(here, id, newClass1, newClass2,plus)
{
   
	var identity=document.getElementById(id);
    if(hasClass(identity, newClass1)){
        identity.className=newClass2;
		document.getElementById(plus).innerHTML='-';
        //here.firstChild.innerHTML='-';
		
    }
    else{
        identity.className=newClass1;
        //here.firstChild.innerHTML='+';
		document.getElementById(plus).innerHTML='+';
    }
}
function hasClass(elem, cls)
{
  if(elem && elem.className)
    return elem.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
  return null;
}

</script> 
</body>
</html>