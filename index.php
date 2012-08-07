<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="mxit" content="clearscreen" />
        <title></title>
    </head>
    <body>
        <h1>MXit Botproxy Test</h1>
		<br />
		<b>Main Menu:</b><br />
        <ul>
            <li><a href="images_index.html">1)</a> Images</li>
            <li><a href="form_index.html">2)</a> Input forms (file uploads)</li>
            <li><a href="table_index.html">3)</a> Tables</li>
            <li><a href="user_info.php">4)</a> User info</li>
            <li><a href="text_index.html">5)</a> Text</li>
            <li><a href="clear_screen.html">6)</a> Clear screen</li>
			<li><a href="link_index.html">7)</a> Links and Downloads and "Break-outs"</li>
			<li><a href="graphics-markup/">9)</a> Graphics Markup</li>
			<li><a href="./mxit_mobi_library/">10)</a> MXit Mobi Library test</li>
          <li><a href="http://billing.internal.mxit.com/Transaction/PaymentRequest?VendorId=1&TransactionReference=<?php echo uniqid(); ?>&CallbackUrl=http://<?php echo $_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF'])?>/paymentconfirmed.php%3Fref%3DRandom123&ProductId=mypid&ProductName=Coolest+thing+you+can+buy&ProductDescription=Really+the+best%2C+ever.&MoolaAmount=20&CurrencyAmount=-">11)</a> Billing (charge me 20 Moola)</li>
        </ul>
		<br />
      If you aren't viewing this in MXit, you can add it as a MXit contact: <b>botproxy_test</b>
		<!--  <img src="./images/devzone-home.png"> -->
    </body>
</html>