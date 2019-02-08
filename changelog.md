# CHANGELOG
All notable changes to this project will be documented in this file. The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

    Zaqar: The Email Spoofer v1.3
    Created by: Tobin Shields
    Other contributors: [None as of now]
    Github: https://github.com/TobinShields/Zaqar_EmailSpoofer
    Resources Used:
                    Bootstrap 4
                    (Front-end Framework)
                    https://getbootstrap.com/

                    Simditor
                    (Ritch Text Editor)
                    http://simditor.tower.im/

                    PHPMailer
                    (The classic email sending library for PHP)
                    https://github.com/PHPMailer/PHPMailer

                    Subtle Patterns
                    (Background image)
                    https://www.toptal.com/designers/subtlepatterns/

## Types of changes
    [Added] for new features.
    [Changed] for changes in existing functionality.
    [Deprecated] for soon-to-be removed features.
    [Removed] for now removed features.
    [Fixed] for any bug fixes.
    [Security] in case of vulnerabilities.

## [Unreleased] - Upcoming Changes, Current Projects, and 'wish list' items
* It would be great to have the ability to allow the user to import a bulk list of emails for them to add (from a .txt or .csv file)
* Right now the logo for Zaqar is a generic email icon--however, it would be great to have a custom logo. Ideally in the same 'flat' style and using the same blue color to match the rest of the app. However, the colors can be updated to fit logo if needed.
* PHPMailer has the cool ability to connect out to a remote SMTP server, meaning that the app can be run on a local apache server and then connect to a live SMTP server elsewhere--this is an appealing feature for penetration testers as it would not place the spoofing app on the actual server. There also may be additional implications like the ability to point to an internal mail server hosted by the penetration tester and then, using a VPN, mask the real IP of the mail server for protection. Not sure how this would work though and may require a separate version of Zaqar built for that purpose. This may need to get added in future releases and could result in a much better app. 
* Simditor was chosen because I didn't know too much about rich text options that were easy to use. It honestly isn't bad, but I began to check out what some other applications were using and I noticed that a lot of them were using the [TinyMCE Editor](https://www.tinymce.com/). This is supposed to me more lightweight and offer better features. Might be worth it to make the transition. 
* I have played around with JS frameworks like taggle.js and Tagger.js to make a 'pool' of "to emails" but it didn't really work super well. Other ways to show a visual pool of emails would be great but I am burnt out of trying it. Anyone else want to take a shot? Not really needed, but could be a nice UI feature.
* The ability to add other header types, but even to add your own custom header? I don't want to provide useless features, but if there is a good use for penetration testing then we should allow for it.

## [1.3] - 2018-02-24
### Added
1. Users can now upload attachments! This feature has been tested and works using .png, .docx, and .pdf files. Has not been tested using possibly malicious payloads for a target--although, if it passes the email virus scan then it should be fine.
### Changed
2. Zaqar is now no longer using the default mail() function to send emails, but instead using the PHPMailer library. This appears to be the cleaner way to send messages overall, plus it was what allowed for attachments. Will continue to experiment with more features of this lib.   

## [1.2] - 2018-02-22
### Added
1. "More Sending Options" dropdown that now includes the ability to send cc and bcc messages
2. Github sticky with version zaqar number
### Changed
3. Made the from field, from email, to email, and subject line 'required' by the form so users do not miss one by mistake
4. Included jQuery and BS local files, and then also Included the CDN links in comments if they want a smaller app.
5. Added a max length to the subject of 50 car--studies show that anything more than that can be marked as spam
6. Moved all images to the img folder
7. Made a 'zaqar.css' stylesheet as some of the same styles appear on both pages. Removed all internal styles.
### Fixes
8. Updated the way that errors are thrown and displayed. Now messages will not send and an error is displayed if the mail function returns false, and the rich vs raw text error was updated to tell the user if they either had two values or two empty values

## [1.1] - 2018-02-19
### Added
1. Made this Changelog
2. Added a "terms of usage" to discourage illegal usage of the app
3. Experimented and realized that multiple senders can be entered at one using a comma separator. This was confirmed and a line of "pro tip" text was added to let the user know.
### Fixed
4. Simple UI fixes throughout. Take a look at the Github changes for more information on those.  

## [1.0] - 2018-02-19
### Added
1. Original upload
2. Github page built
