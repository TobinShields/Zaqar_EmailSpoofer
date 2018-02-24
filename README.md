# Zaqar: The Email Spoofer v1.3
A powerful PHP email spoofer with a polished UI, rich text editor, and multiple sending options.

<img src="https://github.com/TobinShields/Zaqar_Mailer/blob/master/img/screenshots.png?raw=true" width="100%">

## What's new in v1.3?
### Added
1. Users can now upload attachments! This feature has been tested and works using .png, .docx, and .pdf files. Has not been tested using possibly malicious payloads for a target--although, if it passes the email virus scan then it should be fine.
### Changed
2. Zaqar is now no longer using the default mail() function to send emails, but instead using the PHPMailer library. This appears to be the cleaner way to send messages overall, plus it was what easily allowed for attachments. Will continue to experiment with more features of this lib.   

## How to install and use
To use Zaqar you first need to have access to a webserver that has SMTP and PHP enabled. Most web hosting companies have this enabled by default and require no setup.  Zaqar, like all PHP email spoofers, will not work without this kind of service as you need to have a mail server for the PHP mail() function to work. To get Zaqar setup you will need to move through the following steps:

1. First, make sure you download the full Zaqar_EmailSpoofer folder and then upload it onto the root directory of your web server (unzipped). This can be done using an FTP client or the file manager provided by your hosting service. There are tons of guides on how to do this—if you need help, check your web hosting FAQs as they will likely have an entry on uploading files and folders using FTP or their file manager.

2. Once the file is uploaded you should navigate to the application file by typing http://[YOUR_DOMAIN_NAME]/Zaqar_EmailSpoofer/index.html into your URL bar. From that point you should be able to see the application. There is no additional configuration or installation needed.

3. To actually use the application you simply populate the form. Make sure that you keep in mind that the "from" address is who you are spoofing, and that the "to" address is who you actually want to receive your message. You will need to indicate that you are not using the spoofer for evil before you can submit your message. If there were no errors then you should get a success message saying that the email was sent. You can type the body of your message using rich text or raw text.

4. If you are getting errors when attempting to send an attachment, the php.ini file may need to be modified. Check out [this guide](https://mediatemple.net/community/products/dv/204404784/how-do-i-increase-the-php-upload-limits) to learn how to adjust the PHP upload restrictions on a webserver. 

Keep in mind that if you are using a cheap or low-quality hosting provider there is a chance that your spoofed message will be marked as spam. However, if you are using a free web hosting provider (like 000WebHost) there is a 100% chance that your message will be marked as spam and your message will go unnoticed by your target. While it’s not ideal for students or those learning purposes, the best results come from using reputable (but often more expensive) hosting providers. I am not endorsing any provider in particular, but I can confirm that this works using both Bluehost and GoDaddy hosting.  

If you run into issues or need help getting this set up please post in the “issues” section so that we can get it working for you.  

## What makes Zaqar different?
Search for “PHP Mail Spoofer” and you will get dozens of GitHub pages that host a simple PHP script and poorly designed HTML form. Frankly speaking, these applications look ugly and their options are limited. Few offer the ability to craft the spoofed message using a rich text editor—which is a critical feature in order to build believable messages. Additionally, Zaqar allows users to send using the To, Cc, and Bcc fields for greater control over how messages are sent. Users can also upload attachments to the email, which is important if a penetration tester is attempting to send a payload to a target via email. Zaqar was built to be the tool that you keep coming back to: both for its sleek and modern UI, and simple but powerful spoofing and mail features.  Using Bootstrap as the front-end framework, Simditor as the rich text editor, and PHPmailer as the mail script library, Zaqar was built to be easy to use allow you to build believable messages. This will be the only mail spoofer you will ever need. 

## What Does Zaqar Mean?
In Mesopotamian mythology, Zaqar is the messenger of the god Sin. He relays these messages to mortals through his power over their dreams and nightmares. Seemed fitting and less dull than "Email Spoofer".

## Disclaimer and Terms of Usage
By using this application you are agreeing to only send a spoofed email if either of the two situation are true:

1) You are conducting a formal and legal penetration test in which you have the explicit permission of the organization that represents the target, and such a targeted attack is outlined in your planned attack scope.

2) You are a student or learning about mail systems and want to learn more about mail security. If this is the case, you should only be spoofing accounts that you have legal access to, or have otherwise gotten permission to use. Spoofed emails sent for the sake of learning should not attempt to steal credentials or other sensitive information, even as a ‘joke’ or ‘prank.’

Using this application for any other reason falls outside of its intended use and is not endorsed, encouraged, or approved by the application’s creator or its contributors. This is especially true if this application is being used to send spam messages or commit fraud. This mailer does little to protect the identity of where it was truly sent and the message can be easily tracked back to the originator.  It only masks the identity on a surface level inside of a mail client.

## Want to contribute? We have stuff to do!
Check out [the changelog](https://github.com/TobinShields/Zaqar_EmailSpoofer/blob/master/changelog.md) for projects and 'wish list' items! This project can be made better by you.
