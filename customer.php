
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"><!--<![endif]-->

<head>
	<title>Customer Information Screen</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body onload="init()">
	<ul id="tabs">
		<li><a href="#address_info">Address Info</a></li>
    <li><a href="#additional_info">Additional Info</a></li>
    <li><a href="#payment_info">Payment Info</a></li>
		<li><a href="#sales">Sales</a></li>
    <li><a href="#quotes">Quotes</a></li>
    <li><a href="#customer_units">Customer Units</a></li>
	</ul>
	<div class="view-wrap">

<!-- begin Address Info Tab -->
	<div class="tabContent" id="address_info">
	<div class="grid-12 gutter-10">
		<div class="span-4" id='mama'>
			<fieldset>
				<legend>Billing Address</legend>
				<form>
					<ul>
						<li>
							<label>Contact*</label>
							<input type="text">
						</li>
						<li>
							<label>Address Line 1 (Street)</label>
							<input type="text">
						</li>
						<li>
							<label>Address Line 2 (Mailing)</label>
							<input type="text">
						</li>
					</ul>
					<ul class="grid-3 gutter-10">
						<li class='span-1'>
							<label>City</label>
							<input type="text">
						</li>
						<li class='span-1'>
							<label>State</label>
							<select name="state">
								<option value="AL">AL</option>
								<option value="AK">AK</option>
								<option value="AZ">AZ</option>
								<option value="AR">AR</option>
								<option value="CA">CA</option>
								<option value="CO">CO</option>
								<option value="CT">CT</option>
								<option value="DE">DE</option>
								<option value="DC">DC</option>
								<option value="FL">FL</option>
								<option value="GA">GA</option>
								<option value="HI">HI</option>
								<option value="ID">ID</option>
								<option value="IL">IL</option>
								<option value="IN">IN</option>
								<option value="IA">IA</option>
								<option value="KS">KS</option>
								<option value="KY">KY</option>
								<option value="LA">LA</option>
								<option value="ME">ME</option>
								<option value="MD">MD</option>
								<option value="MA">MA</option>
								<option value="MI">MI</option>
								<option value="MN">MN</option>
								<option value="MS">MS</option>
								<option value="MO">MO</option>
								<option value="MT">MT</option>
								<option value="NE">NE</option>
								<option value="NV">NV</option>
								<option value="NH">NH</option>
								<option value="NJ">NJ</option>
								<option value="NM">NM</option>
								<option value="NY">NY</option>
								<option value="NC">NC</option>
								<option value="ND">ND</option>
								<option value="OH">OH</option>
								<option value="OK">OK</option>
								<option value="OR">OR</option>
								<option value="PA">PA</option>
								<option value="RI">RI</option>
								<option value="SC">SC</option>
								<option value="SD">SD</option>
								<option value="TN">TN</option>
								<option value="TX">TX</option>
								<option value="UT">UT</option>
								<option value="VT">VT</option>
								<option value="VA">VA</option>
								<option value="WA">WA</option>
								<option value="WV">WV</option>
								<option value="WI">WI</option>
								<option value="WY">WY</option>
							</select>
						</li>
						<li class='span-1'>
							<label>Zipcode</label>
							<input type="text">
						</li>
					</ul>
					<ul>
						<li>
							<label>Country</label>
							<input type="text">
						</li>
						<li>
							<input type="submit">
						</li>
					</ul>
				</form>
			</fieldset>
			<form>
				<ul class="grid-2 gutter-20">
					<li class="span-1">
						<label for="tel" >Phone </label>
						<input type="tel" id="tel" name="tel" />
					</li>
					<li class="span-1">
						<label for="tel" > Fax </label>
						<input type="tel" id="tel" name="fax" />
					</li>
				</ul>
				<ul>
					<li>
						<label for="email"> Email </label>
						<input type="email" id="email" name="email" placeholder="name@example.com" />
					</li>
				</ul>
			</form>
		</div>
		<div class="span-2 parent" id="baby">
				<div class="child">
					<a class="button-lightgray">Copy</a>
				</div>
		</div>
		<div class="span-4">
			<fieldset>
				<legend>Billing Address</legend>
				<form>
					<ul>
						<li>
							<label>Contact*</label>
							<input type="text">
						</li>
						<li>
							<label>Address Line 1 (Street)</label>
							<input type="text">
						</li>
						<li>
							<label>Address Line 2 (Mailing)</label>
							<input type="text">
						</li>
					</ul>
					<ul class="grid-3 gutter-10">
						<li class='span-1'>
							<label>City</label>
							<input type="text">
						</li>
						<li class='span-1'>
							<label>State</label>
							<select name="state">
								<option value="AL">AL</option>
								<option value="AK">AK</option>
								<option value="AZ">AZ</option>
								<option value="AR">AR</option>
								<option value="CA">CA</option>
								<option value="CO">CO</option>
								<option value="CT">CT</option>
								<option value="DE">DE</option>
								<option value="DC">DC</option>
								<option value="FL">FL</option>
								<option value="GA">GA</option>
								<option value="HI">HI</option>
								<option value="ID">ID</option>
								<option value="IL">IL</option>
								<option value="IN">IN</option>
								<option value="IA">IA</option>
								<option value="KS">KS</option>
								<option value="KY">KY</option>
								<option value="LA">LA</option>
								<option value="ME">ME</option>
								<option value="MD">MD</option>
								<option value="MA">MA</option>
								<option value="MI">MI</option>
								<option value="MN">MN</option>
								<option value="MS">MS</option>
								<option value="MO">MO</option>
								<option value="MT">MT</option>
								<option value="NE">NE</option>
								<option value="NV">NV</option>
								<option value="NH">NH</option>
								<option value="NJ">NJ</option>
								<option value="NM">NM</option>
								<option value="NY">NY</option>
								<option value="NC">NC</option>
								<option value="ND">ND</option>
								<option value="OH">OH</option>
								<option value="OK">OK</option>
								<option value="OR">OR</option>
								<option value="PA">PA</option>
								<option value="RI">RI</option>
								<option value="SC">SC</option>
								<option value="SD">SD</option>
								<option value="TN">TN</option>
								<option value="TX">TX</option>
								<option value="UT">UT</option>
								<option value="VT">VT</option>
								<option value="VA">VA</option>
								<option value="WA">WA</option>
								<option value="WV">WV</option>
								<option value="WI">WI</option>
								<option value="WY">WY</option>
							</select>
						</li>
						<li class='span-1'>
							<label>Zipcode</label>
							<input type="text">
						</li>
					</ul>
					<ul>
						<li>
							<label>Country</label>
							<input type="text">
						</li>
						<li>
							<input type="submit">
						</li>
					</ul>
				</form>
			</fieldset>
			<form>
				<ul class="grid-2 gutter-20">
					<li class="span-1">
						<label for="tel" >Shipping Phone </label>
						<input type="tel" id="tel" name="tel" />
					</li>
				</ul>
			</form>
		</div>
		<div class="span-2">
		</div>
	</div>
	</div>

<!-- begin Additional Info tab -->
	<div class="tabContent" id="additional_info">
	<div class="grid-10 gutter-20">
		<div class="span-4">
			<form>
				<div class="grid-2 gutter-20">
					<div class="span-1">
						<input type="checkbox" id="test_checkbox_1" name="test_checkbox_1" />
						<label for="test_checkbox_1">Active</label>
						<br />
						<input type="checkbox" id="test_checkbox_2" name="test_checkbox_2" />
						<label for="test_checkbox_2">PO Required</label>
						<br />
					</div>
					<div class="span-1">
						<label for="date"> Date Entered</label>
						<input type="date" id="date" name="date" />
					</div>
				</div>

				<div class = "grid-3 gutter-10">
					<div class = "span-1">
						<label for="select_dd"> Type</label>
						<br />
						<select id="select_dd" name="select_dd">
							<option value="1">Agriculture</option>
							<option value="2">Another choice could be here</option>
							<option value="3">Yet another item to be chosen</option>
						</select>
					</div>
					<div class = "span-1">
						<label for="select_dd"> Default Salesperson</label>
						<br />
						<select id="select_dd" name="select_dd">
							<option value="4">Support</option>
							<option value="5">Another choice could be here</option>
							<option value="6">Yet another item to be chosen</option>
						</select>
					</div>
					<div class="span-1">
						<label for="password"> Driver License Number</label>
						<br />
						<input type="password" />
					</div>
				</div>

				<div class = "grid-3 gutter-20">
					<div class = "span-2">
						<label for="url">Web Page:</label>
						<br />
						<input type="url" id="url" name="url" value="http://" />
					</div>
					<div class = "span-1">
						<label for="url"></label>
						<br />
						<input type="button" value="Open Page" />
					</div>
				</div>

				<p>
					<label for="textarea">
						Notes
					</label>
					<br />
					<textarea id="textarea" name="textarea" rows="10" placeholder="This is an example of HTML5 placeholder text."></textarea>
				</p>
			</div>
		</form>

		<div class="span-6">
			<input type="button" value="Add Option" /><input type="button" value="Edit Option" /><input type="button" value="Delete Option" />
			<div class="scroll">
			<table class="flakes-table">
				<colgroup>
					<col span="1" style="width:20px" />
					<col span="1" style="width:40%" />
				</colgroup>
				<thead>
					<tr>
						<td class="company">Option</td>
						<td class="contact">Value</td>
						<td class="city">Show In</td>
						<td class="name">Type</td>
					</tr>
				</thead>
				<tbody class="list">
					<tr>
						<td class="company"><a href="#">Dolor Fusce</a></td>
						<td class="contact">654-1816</td>
						<td class="city">Eritrea</td>
						<td class="name">Daquan Parks</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Eu Sem Pellentesque</a></td>
						<td class="contact">937-5793</td>
						<td class="city">Macao</td>
						<td class="name">Mechelle Kirkland</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Maecenas</a></td>
						<td class="contact">682-9676</td>
						<td class="city">Bahamas</td>
						<td class="name">Warren Morales</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Augue Porttitor</a></td>
						<td class="contact">389-1087</td>
						<td class="city">Luxembourg</td>
						<td class="name">Steven Madden</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Dapibus</a></td>
						<td class="contact">893-7857</td>
						<td class="city">Fiji</td>
						<td class="name">Sierra Morton</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Eleifend</a></td>
						<td class="contact">1-783-967-8521</td>
						<td class="city">Martinique</td>
						<td class="name">Maia Ayers</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Tincidunt</a></td>
						<td class="contact">486-7965</td>
						<td class="city">Malawi</td>
						<td class="name">Ruth Lee</td>
					</tr>
					<tr>
						<td class="company"><a href="#">Et</a></td>
						<td class="contact">462-2201</td>
						<td class="city">Malawi</td>
						<td class="name">Noel Langley</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	</div>

<!-- begin Payment Info tab -->
	<div class="tabContent" id="payment_info">
	<div class="grid-6 gutter-20">
		<div class="span-2">
			<div class="grid-2 gutter-20">
				<div class="span-1">
					<fieldset>
					<legend>Payment Status</legend>
					<form>
						<label for="password"> Last 30 Days </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="password"> 31 to 60 Days </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="password"> 61 to 90 days </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="password"> 91 to 120 days </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="password"> Over 120 Days </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="password"> Total Due </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
					</form>
					</fieldset>
				</div>

				<div class="span-1">
					<form>
						<input type="checkbox" id="test_checkbox_1" name="test_checkbox_1" />
						<label for="test_checkbox_1">Cash Only</label><br />
						<label for="select_dd"> Tax Item </label>
						<br />
						<select id="select_dd" name="select_dd">
							<option value="1">Sales Tax</option>
							<option value="2">Another choice could be here</option>
							<option value="3">Yet another item to be chosen</option>
						</select>
						<label for="password"> Tax Number </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="date"> Tax Expiration Date </label>
						<br />
						<input type="date" id="date" name="date" />
						<label for="password"> Total Due </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
						<label for="select_dd"> Default Price </label>
						<br />
						<select id="select_dd" name="select_dd">
							<option value="1">List Price</option>
							<option value="2">Another choice could be here</option>
							<option value="3">Yet another item to be chosen</option>
						</select>
						<label for="password"> Percent of Price </label> <br />
						<input type="password" id="password" name="password" placeholder="$0.00" />
					</form>

				</div>
			</div>
		</div>

		<div class="span-2">
			<fieldset>
			<legend>Payment Methods</legend>
				<div class="scroll">
				<table class="flakes-table">
					<colgroup>
						<col span="1" style="width:20px" />
						<col span="1" style="width:40%" />
					</colgroup>
					<thead>
						<tr>
							<td>Payment Method</td>
							<td>Allowed</td>
							<td>Default</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Wire</td>
						  <td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
						<tr>
							<td>Cash</td>
						  <td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
						<tr>
							<td>Card</td>
						  <td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
						<tr>
							<td>Check</td>
							<td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
						<tr>
							<td>COD</td>
						  <td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
						<tr>
							<td>Charge</td>
							<td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
					</tbody>
				</table>
				</div>
				<a class="button-lightgray">Allow All</a>
			</fielset>
		</div>
		<div class="span-2">
		</div>
		</div>
		</div>


<!-- begin Sales tab -->
		<div class="tabContent" id="sales">
		<div class="grid-1">
			<div class="span-1">
				<div class="grid-4 gutter-20">
					<div class="span-1">
						<label for="select_dd"> Date Range </label>
							<select id="select_dd" name="select_dd">
								<option value="1">Always</option>
								<option value="2">Another choice could be here</option>
								<option value="3">Yet another item to be chosen</option>
							</select>
					</div>
					<div class="span-2">
						<label for="date"> From </label>
						<input type="date" id="date" name="date" />
						<label for="date"> To </label>
						<input type="date" id="date" name="date" />
					</div>
					<div class="span-1">
						<input type="checkbox" id="test_checkbox_1" name="test_checkbox_1" />
						<label for="test_checkbox_1">Show Voided Invoices/Payments</label>
					</div>
				</div>
				<div class="span-1">
					<div class="scroll">
					<table class="flakes-table">
							<!-- <colgroup>
								<col span="1" style="width:20px" />
								<col span="1" style="width:40%" />
							</colgroup> -->
							<thead>
								<tr>
									<td>Inv/Pay #</td>
									<td>Date</td>
									<td>Subtotal</td>
									<td>Tax</td>
									<td>Total</td>
									<td>Paid</td>
									<td>Method</td>
									<td>Balance</td>
									<td>Contact Name</td>
									<td>Salesman</td>
									<td>Type</td>
									<td>Applied Credit</td>
									<td>Quote #</td>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>170</td>
								  <td>11/26/2014</td>
								  <td>1.00</td>
								  <td>0.00</td>
								  <td>0.00</td>
									<td>0.00</td>
									<td></td>
									<td>0.00</td>
									<td>Name McName</td>
									<td>Name McName</td>
									<td>Invoice</td>
									<td>0.00</td>
									<td></td>
								</tr>
								<tr>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
						<br />
					</div>

				<div class="span-1">
					Line Items
					<div class="scroll">
					<table class="flakes-table">
							<!-- <colgroup>
								<col span="1" style="width:20px" />
								<col span="1" style="width:40%" />
							</colgroup> -->
							<thead>
								<tr>
									<td>Tag #</td>
									<td>Tracking #</td>
									<td>Qty</td>
									<td>Item</td>
									<td>Description</td>
									<td>Core</td>
									<td>Price</td>
									<td>Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>5</td>
									<td>55</td>
									<td>5</td>
									<td>Thing</td>
									<td>Thing Thing</td>
									<td>?</td>
									<td>5.50</td>
									<td>10.50</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						</div>
						<a class="button-lightgray smaller">Reprint</a>
						<a class="button-lightgray smaller">Void</a>
				</div>
			</div>
		</div>
		</div>


<!-- begin Quotes tab -->
		<div class="tabContent" id="quotes">
		<div class="grid-1">
			<div class="span-1">
				<div class="grid-4 gutter-20">
					<div class="span-1">
						<label for="select_dd"> Date Range </label>
							<select id="select_dd" name="select_dd">
								<option value="1">This Month</option>
								<option value="2">Another choice could be here</option>
								<option value="3">Yet another item to be chosen</option>
							</select>
					</div>
					<div class="span-2">
						<label for="date"> From </label>
						<input type="date" id="date" name="date" />
						<label for="date"> To </label>
						<input type="date" id="date" name="date" />
					</div>
					<div class="span-1">
						<input type="checkbox" id="test_checkbox_1" name="test_checkbox_1" />
						<label for="test_checkbox_1">Show Closed Quotes</label>
					</div>
				</div>
				<div class="span-1">
					<div class="scroll">
					<table class="flakes-table">
							<!-- <colgroup>
								<col span="1" style="width:20px" />
								<col span="1" style="width:40%" />
							</colgroup> -->
							<thead>
								<tr>
									<td>Quote #</td>
									<td>Date</td>
									<td>Subtotal</td>
									<td>Tax</td>
									<td>Shipping</td>
									<td>Total</td>
									<td>Closed</td>
									<td>Expires</td>
									<td>Contact Name</td>
									<td>Salesman</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>5.50</td>
									<td>12/28/2014</td>
									<td>5.50</td>
									<td>0.00</td>
									<td>0.00</td>
									<td>10.00</td>
									<td></td>
									<td>12/12/2012</td>
									<td>Name McName</td>
									<td>Name McName</td>
								</tr>
								<tr>
									<td>5.50</td>
									<td>12/28/2014</td>
									<td>5.50</td>
									<td>0.00</td>
									<td>0.00</td>
									<td>10.00</td>
									<td></td>
									<td>12/12/2012</td>
									<td>Name McName</td>
									<td>Name McName</td>
								</tr>
								<tr>
									<td>5.50</td>
									<td>12/28/2014</td>
									<td>5.50</td>
									<td>0.00</td>
									<td>0.00</td>
									<td>10.00</td>
									<td></td>
									<td>12/12/2012</td>
									<td>Name McName</td>
									<td>Name McName</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						</div>
				</div>
				<div class="span-1">
					Line Items
					<div class="scroll">
					<table class="flakes-table">
							<!-- <colgroup>
								<col span="1" style="width:20px" />
								<col span="1" style="width:40%" />
							</colgroup> -->
							<thead>
								<tr>
									<td>Tag #</td>
									<td>Tracking #</td>
									<td>Qty</td>
									<td>Item</td>
									<td>Description</td>
									<td>Core</td>
									<td>Price</td>
									<td>Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>5</td>
									<td>55</td>
									<td>5</td>
									<td>Thing</td>
									<td>Thing Thing</td>
									<td>?</td>
									<td>5.50</td>
									<td>10.50</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						</div>
						<a class="button-lightgray smaller">Reprint</a>
						<a class="button-lightgray smaller">Send To Invoice</a>
						<a class="button-lightgray smaller">Close Quote</a>
				</div>
			</div>
		</div>
		</div>



<!-- begin Customer Units tab -->
		<div class="tabContent" id="customer_units">
		<div class="grid-1">
			<div class="span-1">
				Customer Units
				<div class="scroll">
				<table class="flakes-table">
						<thead>
							<tr>
								<td>Make</td>
								<td>Model</td>
								<td>Color</td>
								<td>Year</td>
								<td>Description</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select>
									<option>Audi</option>
									<option>Not Audi</option>
									</select>
								</td>
								<td>modely</td>
								<td>colory</td>
								<td>1111</td>
								<td>Thing Thing</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
					</div>
				<br />
				Service
				<div class="scroll">
				<table class="flakes-table">
						<thead>
							<tr>
								<td>Date</td>
								<td>Description</td>
								<td>Quote #</td>
								<td>Invoice #</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>11/12/2012</td>
								<td>words words</td>
								<td>22</td>
								<td>22</td>
							</tr>
							<tr>
								<td>11/12/2012</td>
								<td>words words</td>
								<td>22</td>
								<td>22</td>
							</tr>
							<tr>
								<td>11/12/2012</td>
								<td>words words</td>
								<td>22</td>
								<td>22</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
					</div>
			</div>
		</div>
		</div>

	</div>
		<link rel="stylesheet" type="text/css" href="bower_components/gridforms/gridforms/gridforms.css">
		<script src="bower_components/jquery/dist/jquery.js"></script>
		<script src="bower_components/snapjs/snap.js"></script>
		<script src="bower_components/responsive-elements/responsive-elements.js"></script>
		<script src="bower_components/gridforms/gridforms/gridforms.js"></script>
		<script src="js/base.js"></script>
</body>
</html>
