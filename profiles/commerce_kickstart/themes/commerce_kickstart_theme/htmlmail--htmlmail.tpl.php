<?php

/**
 * @file
 * Sample template for HTML Mail test messages.
 */
?>
<div class="header">
	<div class="logo">
		<a href="http://www.dreamonthelake.it"><img src="http://lnx.dreamonthelake.it/profiles/commerce_kickstart/themes/commerce_kickstart_theme/logo.png" alt="Congresso Nazionale Rotaract - Dream on the Lake" title="Congresso Nazionale Rotaract - Dream on the Lake" /></a>
	</div>
</div>
<h1><a href="http://drupal.org/project/htmlmail">HTML Mail</a> test message</h1>
<div class="htmlmail-body">
<?php echo $body; ?>
</div>
<?php if ($debug): ?>
<hr />
<div class="htmlmail-debug">
  <dl><dt><p>
    To customize this test message:
  </p></dt><dd><ol><li><p><?php if (empty($theme)): ?>
    Visit <u>admin/config/system/htmlmail</u>
    and select a theme to hold your custom email template files.
  </p></dt><dd><ol><li><p><?php elseif (empty($theme_path)): ?>
    Visit <u>admin/appearance</u>
    to enable your selected <u><?php echo ucfirst($theme); ?></u> theme.
  </p></dt><dd><ol><li><p><?php endif; ?>
    Copy the
    <a href="http://drupalcode.org/project/htmlmail.git/blob_plain/refs/heads/7.x-2.x:/htmlmail--htmlmail.tpl.php"><code>htmlmail--htmlmail.tpl.php</code></a>
    file to your <u><?php echo ucfirst($theme); ?></u> theme directory
    <u><code><?php echo $theme_path; ?></code></u>.
  </p></li><li><p>
    Edit the copied file.
  </p></li></ol></dd></dl>
</div>
<?php endif;
