<?php
$name = ($_POST['name']) ? $_POST['name'] : 'Your name';
$email = ($_POST['email']) ? $_POST['email'] : 'Your E-Mail-Address';
$comments = ($_POST['comments']) ? stripslashes($_POST['comments']) : '';
?>
<br>
<form action="" method="post">
<div style="background:#f0f0f0;padding:3px;font-size:70%">
<div style="background:#e0e0e0;padding:2px;font-weight:bold">Your message:</div>
<label for="name">Your name:</label><br />
<input size="25" type="text" name="name" id="name" value="<?="$name"?>" onfocus="if(this.value=='Your name'){this.value='';} this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'" /><br />

<label for="email">Your mailaddress:</label><br />
<input size="25" type="text" name = "email" id="email" value="<?="$email"?>" onfocus="if(this.value=='Your E-Mail-Address'){this.value='';} this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'" /><br />

<br /><label for="comments">Your message:</label><br />
<textarea name="comments" id="comments" style="width:95%" rows="15" onfocus="this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'"><?php echo htmlspecialchars($comments); ?></textarea><br /><br />

<input name="nopreview" type="hidden" value="1">
<input name="nopreview" id="nopreview" type="checkbox" value="0" checked="checked" /><label for="nopreview">show preview</label><br />

<p>
<input name="submit" type="submit" value="Submit message" />
</p>
</div>
</form>
