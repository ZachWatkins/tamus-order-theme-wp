# TAMUS Ordering Application for WordPress

Texas A&M University System

A GNU GPL 2.0 (or later) WordPress Application in two parts (a [plugin](https://github.com/zachwatkins/tamus-order-plugin-wp) and [theme](https://github.com/zachwatkins/tamus-order-theme-wp)) to facilitate internal ordering needs with a multi-role return / approve workflow using team-based settings.

## Features

1. Responsive design
3. Accessiblev

## WordPress Requirements

1. WordPress 5.4+ Single site install
2. [Advanced Custom Fields Pro Plugin](https://www.advancedcustomfields.com/pro/) (Activate first)  
   _Note: Only Administrators have access to this plugin in the dashboard._
3. [Genesis Theme Framework](https://www.studiopress.com/themes/genesis/)
5. [TAMUS Order Application Plugin](https://github.com/zachwatkins/tamus-order-plugin-wp) (Activate second)
4. [TAMUS Order Application Theme](https://github.com/zachwatkins/tamus-order-theme-wp) (Activate third)

## WordPress Plugin Recommendations

I highly recommend using the following plugins with this application and have implemented their capability checks and functions where noted.

1. [OneLogin SAML SSO Plugin](https://wordpress.org/plugins/onelogin-saml-sso/)  
   For user authentication via Azure Active Directory.
2. [Post SMTP Plugin](https://wordpress.org/plugins/post-smtp/)  
   Send emails by SMTP with a logger and one-click resend button in case of failed delivery. The capability to view the email log are added to the Logistics Administrator and the WSO Admin. The capability to view the options for this plugin is added to the WSO Admin.
3. [User Switching Plugin](https://wordpress.org/plugins/user-switching/)  
   For imitating user accounts in case that is desired functionality. The github.com repository is updated more frequently than the WordPress repository. Links to switch to a user are added on the Order approval page and User list page.
4. [Yoast Duplicate Post Plugin](https://wordpress.org/plugins/duplicate-post/)  
   Copy custom post types. Capability to duplicate posts is added to the Logistics Admin and WSO Admin.
5. [Simple History Plugin](https://wordpress.org/plugins/simple-history/)  
   For debugging and user support.

# Developer Notes

To get started, (1) download the repository, (2) open your terminal, and (3) run `$ npm start`. This will set up the repository for full use "out-of-the-box". For more command line tools see the section below titled **Command Line Tasks**.
## Frameworks and Libraries

It relies on the [Advanced Custom Fields Pro Plugin](https://www.advancedcustomfields.com/pro/) for ease of implementation and modification of data relationships for users and developers. It uses ACF hooks to trigger custom actions when ACF fields are updated.

It uses SASS for CSS preprocessing and Zurb Foundation 6 as a CSS framework.

jQuery is used as well.

## Code Standards, Guidelines, and Conventions

There are many ways to learn programming and rigid documentation requirements can seem daunting for beginners. If you are a beginner, I am excited that you are here and I hope you learn something from what you find here. While not a requirement to write functional code, the additional steps required to learn and implement best practices for documentation is worthwhile for both personal and professional projects.

"WordPress is a big project with thousands of contributors. It’s important that best practices are followed so that the codebase is consistent and readable, and changes are easy to find and read, whether the code is five days old or five years old. What follows are a series of best practices to help keep WordPress code clean and well documented for years to come." View more: <https://developer.wordpress.org/coding-standards/>

"WordPress uses a customized documentation schema that draws inspiration from PHPDoc, an evolving standard for providing documentation to PHP code, which is maintained by [phpDocumentor](http://phpdoc.org/)." View more: <https://developer.wordpress.org/coding-standards/inline-documentation-standards/php/>

I use the Composer module for [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer/) to automate code compliance with [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/). However, this repository is not yet fully compliant with those standards. A pre-commit hook file is included in this repository to enforce code commits to meet this standard but can be disabled when a situation warrants it, such as backing up unfinished work via a commit.

Git, NPM, and Visual Studio Code files in this repository help improve compatibility between Mac (terminal) and Windows (powershell) environments for improved collaboration between developers.

Line endings are converted to Linux-style LF "\n" when committed to the repository using the `.gitattributes` file. This is what WordPress requires for its Subversion version control system, and Subversion is how developers submit WordPress plugins and themes to the official WordPress.org library. This is an important feature because Windows computers add "\r\n" characters to the end of text lines when a line is broken. View more: http://git-scm.com/docs/gitattributes#_end_of_line_conversion

Links to resources:

* WordPress Coding Standards - <https://developer.wordpress.org/coding-standards/>
* PHPDoc Reference - <https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html>
* Sass Lint Reference - <https://github.com/sasstools/sass-lint> (abandoned but stable)
* PHP CodeSniffer Wiki - <https://github.com/squizlabs/PHP_CodeSniffer/wiki/Usage>
* NPM package schema - <https://docs.npmjs.com/cli/v7/configuring-npm/package-json>
* Composer package schema - <https://getcomposer.org/doc/04-schema.md>
* The Software Package Data Exchange:reg: - <https://spdx.dev/>

## Command Line Tasks

1. ```$ npm start```  
   Used to initialize the repository; should only be run after downloading the repository for the first time.

2. `$ npm run checkwp`  
   Checks the repository's WordPress files against the WordPress Coding Standards and outputs a report into your terminal.

3. `$ npm run fixwp`  
   Automatically fixes syntax and whitespace issues with the repository's files according to WordPress Coding Standards.

4. `$ grunt`  
   Compile SASS files into compressed, production-ready CSS files.

5. `$ grunt develop`  
   Compile SASS files into expanded, sourcemapped CSS files.

6. `$ grunt watch`  
   Continuously watch SASS files for changes and compile them into expanded, sourcemapped CSS files every time they are saved.

7. `$ grunt compress`  
   Create a compressed package file named `tamus-order-plugin-wp.zip` that can be uploaded to your WordPress website's plugin dashboard.

## To Do

1. Remove the ability for users to unassign all user roles from user edit screens. 
2. Replace NPM package `grunt-sass-lint` with something that isn't abandoned
3. Remove the following form fields from the `edit-user.php` administrative UI since they are not used: Visual Editor, Keyboard Shortcuts, Website, Biographical Info, Profile Picture, New Password, Password Reset.
4. Implement Active Directory user authentication, onboarding, and offboarding using either the WordPress SAML SSO plugin from OneLogin, the TAMU directory REST API [https://mqs.tamu.edu/rest/](https://mqs.tamu.edu/rest/), or both and one or more WordPress Cron tasks or manual functions.
5. Consider implementing a custom XML ruleset file for PHP CodeSniffer.
6. Restructure the plugin into a tree-like class structure.

## Known Issue with Local by Flywheel on Windows 10
[https://localwp.com/help-docs/advanced/router-mode/](https://localwp.com/help-docs/advanced/router-mode/)  On two different models of Dell Windows 10 machines (Inspiron and Latitude) a Windows service was occupying Port 80 on IP 0.0.0.0:80. This interferes with the "Local" application's router functionality which uses the same port and is not configurable. It is possible that this becomes an issue as a direct result of a change made by the NodeJS *.exe file's installation process since I did not have this issue with the application until after installing NodeJS this way. ON MY PERSONAL COMPUTER I installed NodeJS using Chocolatey CLI and did not experience these conflicts with Port 80 and "Local". NOTE: SEE YOUR SYSTEM ADMINISTRATOR FOR POLICY GUIDANCE REGARDING THE INSTALLATION OF SOFTWARE ON TAMU SYSTEM DEVICES.

## Credits

1. Both the TAMUS Ordering Application plugin and theme were programmed by Zachary Kendall Watkins <zwatkins2@tamu.edu> · <https://github.com/zachwatkins>.
2. The business process workflow and a portion of the UI specifications were designed by Pamela Luckenbill.
3. The majority of the workflow requirements for this version were preserved from the original application. However, the product, bundle, program, and department data creation and management interface is superseded by this application as it is provided by WordPress Core.
4. The visual design at the start of the project was copied from the original application, and then the icons were replaced.

## Original Application Credits

1. The original application used very different technology, was programmed by Joseph Rafferty <jrafferty@tamu.edu>, and was authored by Joseph Rafferty and Pamela Luckenbill: <https://github.tamu.edu/liberalarts-web/cla-workstation-order>.

## Final Notes

To add an executable file to git version control:  
`$ git add --chmod=+x hooks/pre-commit && git commit -m "Add pre-commit executable hook"`