# CHANGELOG
All notable changes to this project will be documented in this file. The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

    Zaqar: The Email Spoofer v1.2
    Created by: Tobin Shields
    Other contributors: [None as of now - You could change that!]
    Github: https://github.com/TobinShields/Zaqar_EmailSpoofer
    Resources Used:
                    Bootstrap 4
                    (Front-end Framework)
                    https://getbootstrap.com/

                    Simditor
                    (Ritch Text Editor)
                    http://simditor.tower.im/

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
* We could totally use a cool logo for Zaqar. The app is sleek and simple, so something modern with a flat design would be cool. I am going to open that one up to the community for that one.
* I have played around with JS frameworks like taggle.js and Tagger.js to make a 'pool' of "to emails" but it didn't really work super well. Other ways to show a visual pool of emails would be great but I am burnt out of trying it. Anyone else want to take a shot?
* The ability to add other header types, but even to add your own custom header? I don't want to provide useless features, but if it's requested we could add them
* The ability to add an attachment for a phishing payload would be nice. I did some digging and I think we would need to move away from the simple mail() function and use the [PHPMailer script](https://github.com/PHPMailer/PHPMailer). This would mean some decent rewrites of the actual app, but could be worth it if this is an important feature.
* Is there a way to make it so spoofed emails don't show this "via" the spoofed server in gmail or other clients? Would that be a particular header fix? See the picture below as an example:
<img src="https://i.imgur.com/Q4JOS76.png">

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
