<?php
// This file is part of Ranking block for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme skripsian block settings file
 *
 * @package    theme_skripsian
 * @copyright  2023 Ahmad Fathi Ibrahimov
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingskripsian', get_string('configtitle', 'theme_skripsian'));

    /*
    * ----------------------
    * General settings tab
    * ----------------------
    */
    $page = new admin_settingpage('theme_skripsian_general', get_string('generalsettings', 'theme_skripsian'));

    // Logo file setting.
    $name = 'theme_skripsian/logo';
    $title = get_string('logo', 'theme_skripsian');
    $description = get_string('logodesc', 'theme_skripsian');
    $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo', 0, $opts);
    $page->add($setting);

    // Favicon setting.
    $name = 'theme_skripsian/favicon';
    $title = get_string('favicon', 'theme_skripsian');
    $description = get_string('favicondesc', 'theme_skripsian');
    $opts = array('accepted_types' => array('.ico'), 'maxfiles' => 1);
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon', 0, $opts);
    $page->add($setting);

    // Preset.
    $name = 'theme_skripsian/preset';
    $title = get_string('preset', 'theme_skripsian');
    $description = get_string('preset_desc', 'theme_skripsian');
    $default = 'default.scss';

    $context = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'theme_skripsian', 'preset', 0, 'itemid, filepath, filename', false);

    $choices = [];
    foreach ($files as $file) {
        $choices[$file->get_filename()] = $file->get_filename();
    }
    // These are the built in presets.
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_skripsian/presetfiles';
    $title = get_string('presetfiles', 'theme_skripsian');
    $description = get_string('presetfiles_desc', 'theme_skripsian');

    $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
        array('maxfiles' => 10, 'accepted_types' => array('.scss')));
    $page->add($setting);

    // Login page background image.
    $name = 'theme_skripsian/loginbgimg';
    $title = get_string('loginbgimg', 'theme_skripsian');
    $description = get_string('loginbgimg_desc', 'theme_skripsian');
    $opts = array('accepted_types' => array('.png', '.jpg', '.svg'));
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbgimg', 0, $opts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brand-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_skripsian/brandcolor';
    $title = get_string('brandcolor', 'theme_skripsian');
    $description = get_string('brandcolor_desc', 'theme_skripsian');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0f47ad');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $navbar-header-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_skripsian/secondarymenucolor';
    $title = get_string('secondarymenucolor', 'theme_skripsian');
    $description = get_string('secondarymenucolor_desc', 'theme_skripsian');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0f47ad');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $fontsarr = [
        'Roboto' => 'Roboto',
        'Poppins' => 'Poppins',
        'Montserrat' => 'Montserrat',
        'Open Sans' => 'Open Sans',
        'Lato' => 'Lato',
        'Raleway' => 'Raleway',
        'Inter' => 'Inter',
        'Nunito' => 'Nunito',
        'Encode Sans' => 'Encode Sans',
        'Work Sans' => 'Work Sans',
        'Oxygen' => 'Oxygen',
        'Manrope' => 'Manrope',
        'Sora' => 'Sora',
        'Epilogue' => 'Epilogue'
    ];

    $name = 'theme_skripsian/fontsite';
    $title = get_string('fontsite', 'theme_skripsian');
    $description = get_string('fontsite_desc', 'theme_skripsian');
    $setting = new admin_setting_configselect($name, $title, $description, 'Roboto', $fontsarr);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_skripsian/enablecourseindex';
    $title = get_string('enablecourseindex', 'theme_skripsian');
    $description = get_string('enablecourseindex_desc', 'theme_skripsian');
    $default = 1;
    $choices = array(0 => get_string('no'), 1 => get_string('yes'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    // Must add the page after definiting all the settings!
    $settings->add($page);

    /*
    * ----------------------
    * Advanced settings tab
    * ----------------------
    */
    $page = new admin_settingpage('theme_skripsian_advanced', get_string('advancedsettings', 'theme_skripsian'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_skripsian/scsspre',
        get_string('rawscsspre', 'theme_skripsian'), get_string('rawscsspre_desc', 'theme_skripsian'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_skripsian/scss', get_string('rawscss', 'theme_skripsian'),
        get_string('rawscss_desc', 'theme_skripsian'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Google analytics block.
    $name = 'theme_skripsian/googleanalytics';
    $title = get_string('googleanalytics', 'theme_skripsian');
    $description = get_string('googleanalyticsdesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    /*
    * -----------------------
    * Frontpage settings tab
    * -----------------------
    */
    $page = new admin_settingpage('theme_skripsian_frontpage', get_string('frontpagesettings', 'theme_skripsian'));

    // Disable teachers from cards.
    $name = 'theme_skripsian/disableteacherspic';
    $title = get_string('disableteacherspic', 'theme_skripsian');
    $description = get_string('disableteacherspicdesc', 'theme_skripsian');
    $default = 1;
    $choices = array(0 => get_string('no'), 1 => get_string('yes'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    // Slideshow.
    $name = 'theme_skripsian/slidercount';
    $title = get_string('slidercount', 'theme_skripsian');
    $description = get_string('slidercountdesc', 'theme_skripsian');
    $default = 0;
    $options = array();
    for ($i = 0; $i < 13; $i++) {
        $options[$i] = $i;
    }
    $setting = new admin_setting_configselect($name, $title, $description, $default, $options);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // If we don't have an slide yet, default to the preset.
    $slidercount = get_config('theme_skripsian', 'slidercount');

    if (!$slidercount) {
        $slidercount = $default;
    }

    if ($slidercount) {
        for ($sliderindex = 1; $sliderindex <= $slidercount; $sliderindex++) {
            $fileid = 'sliderimage' . $sliderindex;
            $name = 'theme_skripsian/sliderimage' . $sliderindex;
            $title = get_string('sliderimage', 'theme_skripsian');
            $description = get_string('sliderimagedesc', 'theme_skripsian');
            $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
            $setting = new admin_setting_configstoredfile($name, $title, $description, $fileid, 0, $opts);
            $page->add($setting);

            $name = 'theme_skripsian/slidertitle' . $sliderindex;
            $title = get_string('slidertitle', 'theme_skripsian');
            $description = get_string('slidertitledesc', 'theme_skripsian');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_TEXT);
            $page->add($setting);

            $name = 'theme_skripsian/slidercap' . $sliderindex;
            $title = get_string('slidercaption', 'theme_skripsian');
            $description = get_string('slidercaptiondesc', 'theme_skripsian');
            $default = '';
            $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
            $page->add($setting);
        }
    }

    $setting = new admin_setting_heading('slidercountseparator', '', '<hr>');
    $page->add($setting);

    // Enable FAQ.
    $name = 'theme_skripsian/faqcount';
    $title = get_string('faqcount', 'theme_skripsian');
    $description = get_string('faqcountdesc', 'theme_skripsian');
    $default = 0;
    $options = array();
    for ($i = 0; $i < 11; $i++) {
        $options[$i] = $i;
    }
    $setting = new admin_setting_configselect($name, $title, $description, $default, $options);
    $page->add($setting);

    $faqcount = get_config('theme_skripsian', 'faqcount');

    if ($faqcount > 0) {
        for ($i = 1; $i <= $faqcount; $i++) {
            $name = "theme_skripsian/faqquestion{$i}";
            $title = get_string('faqquestion', 'theme_skripsian', $i . '');
            $setting = new admin_setting_configtext($name, $title, '', '');
            $page->add($setting);

            $name = "theme_skripsian/faqanswer{$i}";
            $title = get_string('faqanswer', 'theme_skripsian', $i . '');
            $setting = new admin_setting_confightmleditor($name, $title, '', '');
            $page->add($setting);
        }

        $setting = new admin_setting_heading('faqseparator', '', '<hr>');
        $page->add($setting);
    }

    $settings->add($page);

    /*
    * --------------------
    * Footer settings tab
    * --------------------
    */
    $page = new admin_settingpage('theme_skripsian_footer', get_string('footersettings', 'theme_skripsian'));

    // Site Summary.
    $name = 'theme_skripsian/sitesummary';
    $title = get_string('sitesummary', 'theme_skripsian');
    $description = get_string('sitesummarydesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Website.
    $name = 'theme_skripsian/website';
    $title = get_string('website', 'theme_skripsian');
    $description = get_string('websitedesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Mobile.
    $name = 'theme_skripsian/mobile';
    $title = get_string('mobile', 'theme_skripsian');
    $description = get_string('mobiledesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Mail.
    $name = 'theme_skripsian/mail';
    $title = get_string('mail', 'theme_skripsian');
    $description = get_string('maildesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Facebook url setting.
    $name = 'theme_skripsian/facebook';
    $title = get_string('facebook', 'theme_skripsian');
    $description = get_string('facebookdesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Twitter url setting.
    $name = 'theme_skripsian/twitter';
    $title = get_string('twitter', 'theme_skripsian');
    $description = get_string('twitterdesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Linkdin url setting.
    $name = 'theme_skripsian/linkedin';
    $title = get_string('linkedin', 'theme_skripsian');
    $description = get_string('linkedindesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Youtube url setting.
    $name = 'theme_skripsian/youtube';
    $title = get_string('youtube', 'theme_skripsian');
    $description = get_string('youtubedesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Instagram url setting.
    $name = 'theme_skripsian/instagram';
    $title = get_string('instagram', 'theme_skripsian');
    $description = get_string('instagramdesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Whatsapp url setting.
    $name = 'theme_skripsian/whatsapp';
    $title = get_string('whatsapp', 'theme_skripsian');
    $description = get_string('whatsappdesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Telegram url setting.
    $name = 'theme_skripsian/telegram';
    $title = get_string('telegram', 'theme_skripsian');
    $description = get_string('telegramdesc', 'theme_skripsian');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    $settings->add($page);
}
