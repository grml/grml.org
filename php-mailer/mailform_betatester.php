<?php
$name = ($_POST['name']) ? $_POST['name'] : 'Your name';
$email = ($_POST['email']) ? $_POST['email'] : 'Your E-Mail-Address';
$hardware = ($_POST['hardware']) ? stripslashes($_POST['hardware']) : '';
$software = ($_POST['software']) ? stripslashes($_POST['software']) : '';
$language = ($_POST['language']) ? $_POST['language'] : '';
?>
<br>
<form action="" method="post">
<div style="background:#f0f0f0;padding:3px;font-size:70%">
<div style="background:#e0e0e0;padding:2px;font-weight:bold">Your message:</div>
<label for="name">Your name:</label><br />
<input size="25" type="text" name="name" id="name" value="<?="$name"?>" onfocus="if(this.value=='Your name'){this.value='';} this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'" /><br />

<label for="email">Your mailaddress:</label><br />
<input size="25" type="text" name = "email" id="email" value="<?="$email"?>" onfocus="if(this.value=='Your E-Mail-Address'){this.value='';} this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'" /><br />

<label for="language">Which languages do you speak? (english, german,...)</label><br />
<input size="50" type="text" name = "language" value="<?="$language"?>" onfocus="if(this.value=='Your languages'){this.value='';} this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FFCC00'"><br />

<br /><label for="hardware">Which hardware do/could you use for testing grml? (architecture, processor, external devices,...)</label><br />
<textarea name="hardware" id="hardware" style="width:95%" rows="15" onfocus="this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'"><?php echo htmlspecialchars($hardware); ?></textarea><br /><br />

<br /><label for="software">Any special software you can/would like to test on grml?</label><br />
<textarea name="software" id="software" style="width:95%" rows="15" onfocus="this.style.backgroundColor='#DDD'" onblur="this.style.backgroundColor='#FEDB64'"><?php echo htmlspecialchars($software); ?></textarea><br /><br />

<input name="nopreview" type="hidden" value="1">
<input name="nopreview" id="nopreview" type="checkbox" value="0" checked="checked" /><label for="nopreview">show preview</label><br />

<p>
<input name="submit" type="submit" value="Submit message" />
</p>
</div>
</form>
