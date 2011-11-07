<?
$date_full = date("d M Y, H:i:s");
$date = date("d.m.y");
$ip = getenv('REMOTE_ADDR');
$ip_proxy = getenv('HTTP_X_FORWARDED_FOR');
$host = gethostbyaddr($ip);

$name=$_POST['name'];
$email=$_POST['email'];
$comments = ($_POST['comments']) ? stripslashes($_POST['comments']) : '';
$nopreview= (int)$_POST['nopreview'];

$to="contact@grml.org";
$subject="grml contact web";

function checkname($name) {
        $filter  = "/^([a-zA-ZöäüÖÄÜß0-9_\.\-\+\ ])+$/";
        return preg_match($filter,$name);
}

function checkmail($email) {
        $filter  = "/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9])+$/";
        return preg_match($filter,$email);
}

function badwords($text) {
	$spamfilter = array('viagra','sex ', 'phentermine','free time', 'you may find', 'interesting', 'good site', 'keep alive', 'webmaster', 'web-master', 'great web', 'casino', 'isurance', 'buy', 'porn', 'loan', 'pharmacy', 'closeup', 'goodlife', 'multipart', 'zion', 'jude', 'ausländer', 'content-type', 'url=', 'asphost4free.com', 'hostrator.com');

	$text = strtolower($text);
	foreach($spamfilter as $word) {
		$pos = strpos($text, $word);
		if ($pos !== false) {
			return true;
		}
	}
	return false;
}


// validation

$error = null;

if(!checkname($name)){
  $error =  "Sorry, this does not seem to be a valid name.";
}

if(empty($email)){
	$error = "Sorry, without your email address we won't be able to contact you. ;-)";
}

if (!checkmail($email)) {
	$error = "Sorry, no valid email address found.";
}

if(empty($comments)){
	$error = "Empty message - we don't like empty messages. ;-)";
}

if(badwords($comments)){
	$error = "We don't accept spam messages.";
}

if ($error) $nopreview = 1;

// send mail

if (($nopreview == 1) && !$error) {

	// mailheader

	$xtra    = "From: ($name) $email\r\n";
	$xtra   .= "Content-Type: text/plain; charset=ISO-8859-15\nContent-Transfer-Encoding: 8bit\r\n";
	$xtra   .= "X-Mailer: PHP ". phpversion();

	// mailbody

	$message="Message:\n\n$comments\n\n\nLoggin-Information:\n-------------------\nName:   $name\nE-Mail: $email\nDate:   $date_full\nIP:     $ip\nIP-Proxy:  $ip_proxy\nHost:   $host\n";

	if(mail($to,$subject,$message,$xtra)) {
		$mailsent = "Sending the message was <b>successful</b>. Thanks for your message.";
	} else {
		$error = "An error occured while sending mail. Sorry :-(";
	}
}
?>
