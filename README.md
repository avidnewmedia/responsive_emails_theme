# Responsive Emails Theme

**Please open all issues with this template at [Responsive Emails Theme](https://github.com/doostinharrell/responsive_emails_theme/issues) repo.**

This project is a Drupal Theme that allows themers to easily build responsive email themes based on [Foundation for Emails](http://foundation.zurb.com/emails), a framework for creating responsive HTML devices that work in any email client. It has a Gulp-powered build system with these features:

- Handlebars HTML templates with [Panini](http://github.com/zurb/panini)
- Simplified HTML email syntax with [Inky](http://github.com/zurb/inky)
- Sass compilation
- Image compression
- Built-in BrowserSync server
- Full email inlining process


## Dependencies

- [blueoi/blueoi_mail](https://github.com/andyg5000/blueoi)
- [emogrifier](https://drupal.org/project/emogrifier)
- [mimemail](https://www.drupal.org/project/mimemail)
- [smtp](https://www.drupal.org/project/smtp)
- [mailsystem](https://www.drupal.org/project/mailsystem)


## Configuration / Usage

- Enable blueoi_mail, mimemail, smtp, mailsystem modules and dependencies

- Enable responsive_emails_theme theme

- Create new "Email HTML" text format used for outgoing emails admin/config/content/formats
    - Ensure roles is set only to administrator
    - Enable these filters: "Convert line breaks into HTML", "Convert URLs into links", "Convert Media tags to markup" (If installed), "Correct faulty and chopped off HTML", and "Emogrifier".
    - Note: make sure that "Emogrifier" is last in the filter processing order.

- Configure Mime Mail module admin/config/system/mimemail
    - Ensure that "Link images only" is checked (note: disabling this will cause issues with emails sent via rules and or webform modules.
    - Ensure that "E-mail format" is set to your newly created "Email HTML" text format

- Configure SMTP module to use preferred SMTP provider /admin/config/system/smtp
    - Ensure that "Allow to send e-mails formatted as Html" is checked

- Configure Mail System module admin/config/system/mailsystem
  - Set MimeMailSystem_SmtpMailSystem class as Site-wide default MailSystemInterface
  - Set Theme to render the emails to "Responsive Emails Theme"
  
- Configure Responsive Emails Theme admin/appearance/settings/responsive_emails_theme

- Review your email template with sample data at blueoi/themed-email


## Customization

To customize this template, your computer needs [Node.js](https://nodejs.org/en/) 0.12 or greater, bower, and gulp installed.

### Configure BrowserSync

- Configure BrowserSync to use the proper proxy url depending on your development configuration.  Setting the proxy url will allow you to run gulp and modify sass while reviewing your changes via browser in real-time.
  - Modify the proxy line in gulpfile.babel.js
  - Note: be sure to add a comma after the server line for proper syntax

```javascript
// Start a server with LiveReload to preview the site in browser
function server(done) {
  browser.init({
    proxy: 'http://local.dev/blueoi/themed-email' // set this to your development url
  });
  done();
}
```

### Install Node and Bower prerequisites

```bash
cd sites/default/themes/responsive_emails_theme
npm install
bower install
```

### Run default gulp task to start developing

```bash
gulp
```

### Templates

Templates are compiled from the src/templates directory into the templates directory via the gulp build process with the help of [Panini](http://github.com/zurb/panini).  To learn more see the [Panini](http://github.com/zurb/panini) project or [Foundation for Emails](http://foundation.zurb.com/emails).
