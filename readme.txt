=== Teddy ID Lite ===
Contributors: matrixplatform
Donate link: N/A
Tags: login, authentication, password, password manager, passwordless, sign in, 2FA, TFA, mfa, log in, multi-factor, two factor, sso, single sign-on, 2-factor, two-factor authentication
Requires at least: 3.0
Tested up to: 4.2.2
Stable tag: trunk
License: Public domain

Enables your users to log in to your site without manually entering the password. Instead, user just taps one button on his phone.

== Description ==

TeddyID Lite allows your users to log in without entering a password, yet more securely. 

Users will have to enter a password only once, TeddyID will suggest encrypting and saving the password. The next time the user tries to log in, the user just clicks his username (see the screenshot), we pick a random picture and send it to user's two devices: his computer and his phone (with our free app installed). The user makes sure the pictures match and taps "Yes" on his phone. We decrypt the password, fill it in, and submit the form. Login complete.

With TeddyID Lite, your users won't have to remember, nor type, the password for your site. This is a free service for WordPress based sites.

Nothing is changed in your wordpress database. Passwords are encrypted/decrypted only in browser.


== Installation ==

1. Install the plugin from the Plugins page in your /wp-admin/
1. Activate the plugin
1. That's it, test it at your login page: TeddyID will display a hint when you click inside username or password field.

== Frequently Asked Questions ==

= Do I have to pay? =

No.

= Do my users pay anything? =

No, nothing, apart from tiny network costs according to their data plan. Also see our [users' FAQ](https://www.TeddyID.com/faq.php).

= How are passwords secured? =

In simple words, each password is split into two parts, one is stored in user's browser, the other is stored in our server, and the two parts meet only in the browser. One part without the other is useless for an attacker. On our site you'll find [more detailed security analysis](https://www.teddyid.com/sites.php#1.5factor) and [description of all the cryptography behind it](https://www.teddyid.com/password_manager_technical_description.php).

= How is it better than just saving passwords in browser that every modern browser can already do? =

A second factor - mobile phone - is required for login. This is more secure in case an attacker gains access to the user's computer.

= How is it better than using a password manager like LastPass? =

First, there is no master password that can be weak or forgotten like any other password. We check possession of the mobile phone instead. Second, few people actually bother using password managers, that means they use weak passwords, reuse the same password, and often forget them. With TeddyID, you are giving them both better security and better convenience.

== Screenshots ==

1. Saving password.
1. List of accounts to log in as.
1. Confirmation picture. User needs to check that the same picture was sent to his phone and tap Yes on the phone. He'll be logged in in a few seconds.

== Changelog ==

= 1.0 =
Initial release.


== Upgrade Notice ==

= 1.0 =
N/A
