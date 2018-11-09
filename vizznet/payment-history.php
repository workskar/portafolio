<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: check-availability.php
    // Project: Vizz Net
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
<title>Payment history</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='payment-history'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Banner' title='Banner' src='img/general-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Bills & Payments</h1>
			<h2 class='second'>Unerstanding your bill</h2>
			<div id='heading' class='celred'>
				<p>Current Bill - (11/10/2012)</p> <a id='note' onclick="getShow('contCurr','note')">Collapse</a>
			</div>
			<table id='contCurr'>
				<thead>
					<tr class='greyHead'>
						<td class='frstCell'>Bill Summary</td>
						<td class='medCell'></td>
						<td class='lastCell'></td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Statement Date</td>
						<td colspan='2'>@statements/statementDate</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Amount owing from last bill</td>
						<td colspan='2'>@statement/balance</td>
					</tr>
				</thead>
				<tbody>
					<tr class='greyHead'>
						<td class='frstCell'>Charges</td>
						<td class='medCell'>Date</td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Broadband Monthly Fee</td>
						<td>2012/10/01 to 2012/10/31</td>
						<td>&pound;24.94</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Broadband Connection</td>
						<td>2012/10/11 to 2012/10/11</td>
						<td>&pound;0</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Telephone Line Rental</td>
						<td>2012/10/01 to 2012/10/31</td>
						<td>&pound;12.95</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Telephone Line Connection</td>
						<td>2012/10/11 to 2012/10/11</td>
						<td>&pound;67.50</td>
					</tr>
					<tr class='greyBody'>
						<td></td>
						<td class='bld'>Total charges (excl VAT)</td>
						<td class='bld'>&pound;105.39</td>
					</tr>
					<tr class='greyHead'>
						<td class='frstCell'>Credits</td>
						<td class='medCell'></td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total Credits (excl VAT)</td>
						<td class='boldp'>&pound;10.00</td>
					</tr>	
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total (excl VAT)</td>
						<td class='boldp'>&pound;00.00</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>VAT @ 20%</td>
						<td class='boldp'>&pound;0.79</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total Payable</td>
						<td class='boldp'>&pound;56.25</td>
					</tr>
					
					<tr class='greyHead'>
						<td class='frstCell'>Payable</td>
						<td class='medCell'></td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total Payable</td>
						<td class='boldp'>(Sum charges)</td>
					</tr>
					<tr class='space'>
						<td colspan='3'></td>
					</tr>
					<tr class='greyHead'>
						<td class='frstCell'>Payment Summary</td>
						<td class='medCell'>Payment Date</td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Last Payment</td>
						<td>@payment/paymentDate</td>
						<td>@payment/ </td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Failed Collection</td>
						<td>@payment/paymentDate</td>
						<td>@payment/ </td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell boldp' colspan='2'>Note: Your next payment will be collected on the 15th of the following month.</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td class='DownPrint' colspan='3'><a target='_blank' href=''>Download PDF</a> 
						<a onclick='window.print();'>Print</a></td>
					</tr>
				</tbody>
			</table>
			<div class='clear'></div>
			<form>
				<ul class='bills'>
					<li class='celred'>Previous bills</li>
					<li><span class='boldp'>Last bill</span> <span class='red'>&pound;98.00</span></li>
					<li>
						<label>Previous Bills</label> 
						<select>
							<option>15-Sep-2012</option>
						</select>
					</li>
					<li>
						<input class='btn-small' type='button' value='View' onclick="getContent('lastBill','contCurr');"/>
					</li>
				</ul>
			</form>
			<table style='display:none;' id='lastBill' width='475'>
				<thead>
					<tr>
						<td colspan='2'>Previous Bill - (15/09/2012)</td>
						<td class='alignR'><a id='note1' onclick="getShow('lastBill','')">Close</a></td>
					</tr>
				</thead>
				<tbody>
					<tr class='greyHead'>
						<td class='frstCell'>Charges</td>
						<td class='medCell'>Date</td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Broadband Monthly Fee</td>
						<td>2012/10/01 to 2012/10/31</td>
						<td>&pound;24.94</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Broadband Connection</td>
						<td>2012/10/11 to 2012/10/11</td>
						<td>&pound;0</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Telephone Line Connection</td>
						<td>2012/10/11 to 2012/10/11</td>
						<td>&pound;67.50</td>
					</tr>
					<tr class='greyBody'>
						<td></td>
						<td class='bld'>Total charges (excl VAT)</td>
						<td class='bld'>&pound;105.39</td>
					</tr>
					
					<tr class='greyHead'>
						<td class='frstCell'>Credits</td>
						<td class='medCell'></td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total Credits (excl VAT)</td>
						<td class='boldp'>&pound;10.00</td>
					</tr>	
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total (excl VAT)</td>
						<td class='boldp'>&pound;00.00</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>VAT @ 20%</td>
						<td class='boldp'>&pound;0.79</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total Payable</td>
						<td class='boldp'>&pound;56.25</td>
					</tr>
					<tr class='greyHead'>
						<td class='frstCell'>Payable</td>
						<td class='medCell'></td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'></td>
						<td class='boldp'>Total Payable</td>
						<td class='boldp'>(Sum charges)</td>
					</tr>
					<tr class='space'>
						<td colspan='3'></td>
					</tr>
					<tr class='greyHead'>
						<td class='frstCell'>Payment Summary</td>
						<td class='medCell'>Payment Date</td>
						<td class='lastCell'>Amount (GBP)</td>
					</tr>
					<tr class='greyBody'>
						<td class='frstCell'>Broadband Monthly Fee -Business Premium</td>
						<td>2012/10/01 to 2012/10/31</td>
						<td>&pound;24.94</td>
					</tr>
					<tr>
						<td></td>
						<td colspan='2' class='DownPrint' colspan='3'><a target='_black' href=''>Download PDF</a> <a onclick='window.print();'>Print</a></td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id='right-col'>
			<?php   include("in-self-care.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
<script type='text/javascript'>
function getShow(id,idnote){
	if(document.getElementById(id).style.display==''){
		document.getElementById(id).style.display='none';
		document.getElementById(idnote).innerHTML='Expand';
	}else{
		document.getElementById(id).style.display='';
		document.getElementById(idnote).innerHTML='Collapse';
	}
}

function getContent(id,idclose){
	document.getElementById(idclose).style.display='none';
	$(document.getElementById(id)).hide().fadeIn('slow');
	document.getElementById(id).style.display='';
	document.getElementById('note').innerHTML='Expand';
}
</script>
</body>
</html>