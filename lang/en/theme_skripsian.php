<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
                                                                                                                                    
// A description shown in the admin theme selector.                                                                                 
$string['choosereadme'] = 'Theme Skripsian is a child theme of Boost. It is created to help teacher in the older age group to better use Moodle.';                
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'Skripsian';
// Name of the settings pages.
$string['configtitle'] = 'Skripsian settings';


$string['currentinparentheses'] = '(current)';
$string['region-side-pre'] = 'Right';
$string['prev_section'] = 'Previous section';
$string['next_section'] = 'Next section';
$string['themedevelopedby'] = 'Copyright &#169; Ahmad Fathi Ibrahimov 2023';
$string['access'] = 'Access';
$string['prev_activity'] = 'Previous activity';
$string['next_activity'] = 'Next activity';
$string['donthaveanaccount'] = 'Don\'t have an account?';
$string['signinwith'] = 'Sign in with';
$string['welcomemessage'] = 'Welcome';

// General settings tab.
$string['generalsettings'] = 'General';
$string['logo'] = 'Logo';
$string['logodesc'] = 'The logo is displayed in the header.';
$string['favicon'] = 'Custom favicon';
$string['favicondesc'] = 'Upload your own favicon.  It should be an .ico file.';
$string['preset'] = 'Theme preset';
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
$string['presetfiles'] = 'Additional theme preset files';
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href="https://docs.moodle.org/dev/Boost_Presets">Boost presets</a> for information on creating and sharing your own preset files.';
$string['loginbgimg'] = 'Login page background';
$string['loginbgimg_desc'] = 'Upload your custom background image for the login page.';
$string['brandcolor'] = 'Brand colour';
$string['brandcolor_desc'] = 'The accent colour.';
$string['secondarymenucolor'] = 'Secondary menu color';
$string['secondarymenucolor_desc'] = 'Secondary menu background color';
$string['navbarbg'] = 'Navbar color';
$string['navbarbg_desc'] = 'The left navbar color';
$string['navbarbghover'] = 'Navbar hover color';
$string['navbarbghover_desc'] = 'The left navbar hover color';
$string['fontsite'] = 'Site font';
$string['fontsite_desc'] = 'Default font site. You can try out the fonts on <a href="https://fonts.google.com">Google Fonts site</a>.';
$string['enablecourseindex'] = 'Enable course index';
$string['enablecourseindex_desc'] = 'You can show/hide course index navigation';

// Advanced settings tab.
$string['advancedsettings'] = 'Advanced';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
$string['googleanalytics'] = 'Google Analytics V4 Code';
$string['googleanalyticsdesc'] = 'Please enter your Google Analytics V4 code to enable analytics on your website. The code format shold be like [G-XXXXXXXXXX]';

// Frontpage settings tab.
$string['frontpagesettings'] = 'Frontpage';

$string['disableteacherspic'] = 'Disable teachers picture';
$string['disableteacherspicdesc'] = 'This setting hides the teachers\' pictures from the course cards.';

$string['sliderfrontpageloggedin'] = 'Show slideshow in frontpage after login?';
$string['sliderfrontpageloggedindesc'] = 'If enabled, the slideshow will be showed in the frontpage page replacing the header image.';
$string['slidercount'] = 'Slider count';
$string['slidercountdesc'] = 'Select how many slides you want to add <strong>then click SAVE</strong> to load the input fields.';
$string['sliderimage'] = 'Slider picture';
$string['sliderimagedesc'] = 'Add an image for your slide. Recommended size is 1500px x 540px or higher.';
$string['slidertitle'] = 'Slide title';
$string['slidertitledesc'] = 'Add the slide\'s title.';
$string['slidercaption'] = 'Slider caption';
$string['slidercaptiondesc'] = 'Add a caption for your slide';

$string['numbersusers'] = 'Active users accessing our amazing resources';
$string['numberscourses'] = 'Courses made for your that you can trust!';

$string['faq'] = 'FAQ';
$string['faqcount'] = 'FAQ questions';
$string['faqcountdesc'] = 'Select how many questions you want to add <strong>then click SAVE</strong> to load the input fields.<br>If you don\'t want a FAQ, just select 0.';
$string['faqquestion'] = 'FAQ question {$a}';
$string['faqanswer'] = 'FAQ answer {$a}';

// Footer settings tab.
$string['footersettings'] = 'Footer';
$string['sitesummary'] = 'Site Summary';
$string['sitesummarydesc'] = 'Enter the summary of this LMS';
$string['website'] = 'Website URL';
$string['websitedesc'] = 'Main company Website';
$string['mobile'] = 'Mobile';
$string['mobiledesc'] = 'Enter Mobile No. Ex: +5598912341234';
$string['mail'] = 'E-Mail';
$string['maildesc'] = 'Company support e-mail';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook. (i.e http://www.facebook.com/myinstitution)';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your twitter. (i.e http://www.twitter.com/myinstitution)';
$string['linkedin'] = 'Linkedin URL';
$string['linkedindesc'] = 'Enter the URL of your Linkedin. (i.e http://www.linkedin.com/myinstitution)';
$string['youtube'] = 'Youtube URL';
$string['youtubedesc'] = 'Enter the URL of your Youtube. (i.e https://www.youtube.com/user/myinstitution)';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram. (i.e https://www.instagram.com/myinstitution)';
$string['whatsapp'] = 'Whatsapp number';
$string['whatsappdesc'] = 'Enter your whatsapp number for contact.';
$string['telegram'] = 'Telegram';
$string['telegramdesc'] = 'Enter your Telegram contact or group link.';
$string['contactus'] = 'Contact us';
$string['followus'] = 'Follow us';

$string['mobiletooltip'] = 'Mobile';
$string['mailtooltip'] = 'E-Mail';
$string['facebooktooltip'] = 'Facebook';
$string['twittertooltip'] = 'Twitter';
$string['linkedintooltip'] = 'Linkedin';
$string['youtubetooltip'] = 'Youtube';
$string['instagramtooltip'] = 'Instagram';
$string['whatsapptooltip'] = 'Whatsapp';
$string['telegramtooltip'] = 'Telegram';

// Mypublic page.
$string['aboutme'] = 'About me';
$string['personalinformation'] = 'Personal information';
$string['addcontact'] = 'Add contact';
$string['removecontact'] = 'Remove contact';

// Theme settings.
$string['themesettings:accessibility'] = 'Accessibility';
$string['themesettings:fonttype'] = 'Font type';
$string['themesettings:defaultfont'] = 'Default font';
$string['themesettings:dyslexicfont'] = 'Dyslexic font';
$string['themesettings:enableaccessibilitytoolbar'] = 'Enable accessibility toolbar';
$string['themesettingg:successfullysaved'] = 'Accessibility settings successfully saved';

// Accessibility features.
$string['accessibility:fontsize'] = 'Font size';
$string['accessibility:decreasefont'] = 'Decrease font size';
$string['accessibility:resetfont'] = 'Reset font size';
$string['accessibility:increasefont'] = 'Increase font size';

// Data privacy.
$string['privacy:metadata:preference:accessibilitystyles_fontsizeclass'] = 'The user\'s preference for font size.';
$string['privacy:metadata:preference:themeskripsiansettings_fonttype'] = 'The user\'s preference for font type.';
$string['privacy:metadata:preference:themeskripsiansettings_enableaccessibilitytoolbar'] = 'The user\'s preference for enable the accessibility toolbar.';

$string['privacy:accessibilitystyles_fontsizeclass'] = 'The current preference for the font size is: {$a}.';
$string['privacy:themeskripsiansettings_fonttype'] = 'The current preference for the font type is: {$a}.';
$string['privacy:themeskripsiansettings_enableaccessibilitytoolbar'] = 'The current preference for enable accessibility toolbar is to show it.';
