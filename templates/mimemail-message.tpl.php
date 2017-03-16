<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <?php if ($css): ?>
    	<style type="text/css">
    		<!-- <?php print $css ?> -->
    	</style>
    <?php else : ?>
    	<link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url'] . drupal_get_path('theme', 'responsive_emails_theme'); ?>
    /mail.css">
    <?php endif; ?>
    
    <!-- <style> -->
  </head>
  <body>
    <span class="preheader"></span>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center data-parsed="">
            <table align="center" class="wrapper header float-center"><tr><td class="wrapper-inner">
            	<table align="center" class="container"><tbody><tr><td>
            		<table class="row collapse"><tbody><tr>
            			<th class="small-12 large-4 columns first"><table><tr><th>
            				<?php if (theme_get_setting('toggle_logo', 'responsive_emails_theme')) : ?>
            					<a href="<?php print $GLOBALS['base_url']; ?>">
            						<?php if (theme_get_setting('use_default_theme_logo', 'responsive_emails_theme')) : ?>
            							<img class="text-center" src="<?php print theme_get_setting('logo', variable_get('theme_default')); ?>">
            						<?php else : ?>
            							<img class="text-center" src="<?php print theme_get_setting('logo', 'responsive_emails_theme'); ?>">
            						<?php endif; ?>
            					</a>
            				<?php endif; ?>
            				
            			</th></tr></table></th>
            			<th class="small-12 large-8 columns last"><table><tr><th>
            				<p class="text-right"><?php if (theme_get_setting('toggle_slogan', 'responsive_emails_theme')) : ?>
            	<span class="text-center">
            		<?php print variable_get('site_slogan', NULL); ?>
            	</span>
            <?php endif; ?>
            
            </p>
            			</th></tr></table></th>
            		</tr></tbody></table>
            	</td></tr></tbody></table>
            </td></tr></table>
            
            <table align="center" class="container float-center"><tbody><tr><td>
            
            	<table class="spacer"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table> 
            
            	<table class="row"><tbody><tr>
            		<th class="small-12 large-12 columns first last"><table><tr><th>
            			<?php if (!empty($body)) : ?>
            				<?php print $body ?>
            			<?php else : ?>
            				<!--<h1>Sample h1</h1>-->
            				<h2>Sample h2</h2>
            				<h3>Sample h3</h3>
            				<p>Thank you for using my Foundation for Emails based Drupal theme <a href="https://github.com/doostinharrell/responsive_emails_theme">"Responsive Emails Theme"</a>.</p>
            				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget dui facilisis ligula dictum pellentesque. Quisque dolor lacus, eleifend eleifend tincidunt nec, consectetur non eros. Ut porta viverra orci, nec tempus sapien consectetur vitae. Proin dignissim ex eu tortor fringilla, ut faucibus nulla maximus. Donec facilisis dignissim mi, et dictum nulla semper placerat. Nunc ullamcorper ex ut accumsan pharetra. Proin et mauris dolor.</p>
            				<ul>
            					<li>Item 1</li>
            					<li>Item 2</li>
            					<li>Item 3</li>
            				</ul>
            				<hr>
            				<p>Aliquam sed eros eget tellus laoreet auctor. Sed nec molestie elit, id pellentesque ligula. Pellentesque commodo elementum convallis. Etiam vehicula sodales massa, tincidunt mattis ante. In iaculis, velit vitae porta gravida, felis nulla pellentesque velit, a lacinia leo nisl id ligula. Morbi porttitor nisi et justo auctor varius. Nullam mollis ante vestibulum mauris aliquet, ac rhoncus nulla molestie.</p>
            				<p>Note: This email theme is based on Foundation for Emails so feel free to use the html syntax as documented at <a href="http://foundation.zurb.com/emails/docs/">http://foundation.zurb.com/emails/docs/</a></p>
            				
            			<?php endif; ?>
            			
            		</th>
<th class="expander"></th></tr></table></th>
            	</tr></tbody></table>
            	<table class="wrapper secondary" align="center"><tr><td class="wrapper-inner">
            
            		<table class="spacer"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table> 
            
            		<table class="row"><tbody><tr>
            			<th class="small-12 large-12 columns first last"><table><tr><th>
            				<span class="text-center"><?php if (theme_get_setting('footer', 'responsive_emails_theme')) : ?>
            	<?php print theme_get_setting('footer', 'responsive_emails_theme'); ?>
            <?php endif; ?>
            
            </span>
            			</th>
<th class="expander"></th></tr></table></th>
            		</tr></tbody></table>
            	</td></tr></table>
            </td></tr></tbody></table>
            
          </center>
        </td>
      </tr>
    </table>
    <!-- prevent Gmail on iOS font size manipulation -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
  </body>
</html>
