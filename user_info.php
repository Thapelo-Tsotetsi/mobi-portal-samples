<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MXit User Info</title>
    </head>
    <body>
        <?php
            require_once('mxit_mobi_library/mxit_core.php');

            $MXitData = getUserDetails();
			print ('<b>MXit Extended Headers</b><br /><br />');
            print ('<b>MXit Contact Details:</b> <br /><br />');
            print ('<b>Login ID:</b> ' . $MXitData->login . '<br />');
            print ('<b>Device-User-Agent:</b> ' . $MXitData->useragent . '<br />');
            print ('<b>Contact:</b> ' . $MXitData->contact . '<br />');
            print ('<b>Nickname:</b> ' . $MXitData->nick . '<br />');
			print ('<b>MXit ID:</b> ' . $MXitData->mxitid . '<br />');
			print ('<b>Location:</b> ' . $MXitData->locations . '<br />');
			print ('<b>Screen size:</b> ' . $MXitData->pixels . '<br />');
			print ('<br /><br /><b>MXit Extended Headers for Internal Sites:</b><br /><br />');
			print ('<b>Profile:</b> ' . @$MXitData->profile . '<br />');
			print ('<b>Endpoint:</b> ' . @$MXitData->endpoint . '<br />');
			print ('<b>Proxy:</b> ' . @$MXitData->proxy . '<br />');
			print ('<b>Store:</b> ' . @$MXitData->store . '<br />');
			print ('<b>Spool:</b> ' . @$MXitData->spool . '<br />');
			print ('<b>Profile SVR:</b> ' . @$MXitData->profilesvr . '<br />');
        ?>
		<br /><br />
		<a href="index.html">Home</a>
    </body>
</html>
