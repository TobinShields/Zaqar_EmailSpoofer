# Zaqar: The Email Spoofer
A powerful PHP email spoofer with a polished UI and rich text editor. 

<img src="https://github.com/TobinShields/Zaqar_Mailer/blob/master/img/screenshots.png?raw=true" width="100%">

## How to install and use
To use Zaqar you first need to have access to a webserver that has SMTP enabled. Most web hosting companies have this enabled by default and require not setup.  Zaqar, like all PHP email spoofers, do not work without this kind of service as you need to have a mail server for the PHP mail() function to work. To get Zaqar set up you will need to move through the following steps: 

1. First, make sure you download the full Zaqar_EmailSpoofer folder and then upload it onto the root directory of your web server (unzipped). This can be done using an FTP client or the file manager provided by your hosting service. There are tons of guides on how to do this—if you need help, check your web hosting FAQs as they will likely have an entry on uploading files and folders using FTP or their file manager. 

2. Once the file is uploaded you should navigate to the application file by typing http://[YOUR_DOMAIN_NAME]/Zaqar_EmailSpoofer/index.html. From that point you should be able to use the application! There is not configuration or installation needed—it works as is.

3. Finally, you simply populate the form! Make sure that you keep in mind that the "from" address is who you are spoofing, and that the "to" address is who you actually want to receive your message. You will need to indicate that you are not using the spoofer for evil before you can submit your message. If there were no errors then you should get a success message saying that the email was sent.

Keep in mind that if you are using a cheap or low-quality hosting provider there is a chance that your spoofed message will be marked as spam. However, if you are using a free web hosting provider (like 000WebHost) there is a 100% chance that your message will be marked as spam and your message will go unnoticed. While it’s not ideal for students or those learning, the best results come from using reputable (but often more expensive) hosting providers. I am not endorsing any provider in particular, but I can confirm that this works using both Bluehost and GoDaddy hosting.  
If you run into issues or need help getting this set up please post in the “issues” section so that we can get it working for you.  


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
4. The ability to add other header types, but even to add your own custom header? I don't want to provide useless features, but if it's requested we could add them
5. The ability to add an attachment for a phishing payload would be nice
6. Is there a way to make it so spoofed emails don't show this "via" in gmail or other clients? Would that be a particular header? 
<img src="https://i.imgur.com/Q4JOS76.png">
