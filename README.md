# Responsive Emails Theme

**Please open all issues with this template at [Responsive Emails Theme](https://github.com/doostinharrell/responsive_emails_theme/issues) repo.**

This project is a Drupal Theme that allows themers to easily build responsive email themes based on [Foundation for Emails](http://foundation.zurb.com/emails), a framework for creating responsive HTML devices that work in any email client. It has a Gulp-powered build system with these features:

- Handlebars HTML templates with [Panini](http://github.com/zurb/panini)
- Simplified HTML email syntax with [Inky](http://github.com/zurb/inky)
- Sass compilation
- Image compression
- Built-in BrowserSync server (requires the use of [blueoi/blueoi_mail](https://github.com/andyg5000/blueoi))
- Full email inlining process (requires [blueoi/blueoi_mail](https://github.com/andyg5000/blueoi) and [emogrifier](https://drupal.org/project/emogrifier))

## Customization

To customize this template, your computer needs [Node.js](https://nodejs.org/en/) 0.12 or greater, bower, and gulp.

### Using the CLI

Install the theme dependencies with these commands:

```bash
npm install
bower install
gulp
```

### Templates

Templates are compiled from the src/templates directory into the templates directory via [Panini](http://github.com/zurb/panini).  To learn more see the [Panini](http://github.com/zurb/panini) project or [Foundation for Emails](http://foundation.zurb.com/emails).
