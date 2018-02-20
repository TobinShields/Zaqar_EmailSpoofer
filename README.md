# Zaqar: The Email Spoofer
A powerful PHP email spoofer with a polished UI and rich text editor. 

<img src="https://github.com/TobinShields/Zaqar_Mailer/blob/master/img/zaqar_screenshot_1.PNG?raw=true" width="45%">       <img src="https://github.com/TobinShields/Zaqar_Mailer/blob/master/img/zaqar_screenshot_2.PNG?raw=true" width="50%">
<img src="https://github.com/TobinShields/Zaqar_Mailer/blob/master/img/zaqar_screenshot_3.PNG?raw=true" width="45%">

## How to use
Zaqar is easy to use! However, the only catch is that you must have access to a web server configured for SMTP for it to work—the spoofer will not actually do anything if you just download the files and attempt to run them locally. The easy way to get access to a legal STMP configured sever is to pay for a webhosting service (through sites like GoDaddy.com or BlueHost.com). Then you will need to download the Zaqar files and place them on your webserver via FTP. Free hosting sites like 000WebHost.com really don't work as almost any email coming from those mail servers are marked as spam. If you want decent results, you are going to have to pay some money.  

If you need help going though the process of setting up a hosting service and uploading files via FTP, this may not be the tool for you. 

## What makes Zaqar different?
Search for “PHP Mail Spoofer” and you will get dozens of GitHub pages that host a simple PHP script and poorly designed HTML form. Frankly speaking, these applications look ugly and their options are limited. Few offer the ability to craft the spoofed message using a rich text editor—which is a critical feature in order to build believable messages. Zaqar was built to be the tool that you keep coming back to: both for its sleek and modern UI, and simple but powerful spoofing features.  Using Bootstrap as the front-end framework, and Simditor as the rich text editor, Zaqar was built to be easy to use allow you to build believable messages to multiple people at the same time. This will be the only mail spoofer you will ever need. 

## What Does Zaqar Mean?
In Mesopotamian mythology, Zaqar is the messenger of the god Sin. He relays these messages to mortals through his power over their dreams and nightmares. Seemed fitting and less dull than "Email Spoofer". 

## Disclaimer and Terms of Usage
By using this application you are agreeing to only send a spoofed email if either of the two situation are true:

1) You are conducting a formal and legal penetration test in which you have the explicit permission of the organization that represents the target, and such a targeted attack is outlined in your planned attack scope.

2) You are a student or learning about mail systems and want to learn more about mail security. If this is the case, you should only be spoofing accounts that you have legal access to, or have otherwise gotten permission to use. Spoofed emails sent for the sake of learning should not attempt to steal credentials or other sensitive information, even as a ‘joke’ or ‘prank.’

Using this application for any other reason falls outside of its intended use and is not endorsed, encouraged, or approved by the application’s creator or its contributors. This is especially true if this application is being used to send spam messages or commit fraud. This mailer does little to protect the identity of where it was truly sent and the message can be easily tracked back to the originator.  It only masks the identity on a surface level inside of a mail client.

## Want to contribute? We have stuff to do!
1. We could totally use a cool logo for Zaqar. The app is sleek and simple, so something modern with a flat design would be cool. I am going to open that one up to the community for that one.
2. I have played around with JS frameworks like taggle.js and Tagger.js to make a 'pool' of "to emails" but it didn't really work super well. Other ways to show a visual pool of emails would be  great but I am burnt out of trying it. Anyone else want to take a shot?
3. The ability to choose Cc and Bcc might also be nice--it would be simple, just not sure how to adjust the UI to allow for it
