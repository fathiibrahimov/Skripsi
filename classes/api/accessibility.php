<?php
// This file is part of Moodle - http://moodle.org/
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
 * Accessibility API endpoints
 *
 * @package    theme_skripsian
 * @copyright  2023 Ahmad Fathi Ibrahimov
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_skripsian\api;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;

class accessibility extends external_api {
    /**
     * Font size endpoint parameters definition
     *
     * @return external_function_parameters
     */
    public static function fontsize_parameters() {
        return new external_function_parameters([
            'action' => new external_value(PARAM_RAW, 'The action value'),
        ]);
    }

    /**
     * Font size endpoint implementation
     *
     * @param array $action
     *
     * @return array
     *
     * @throws \coding_exception
     * @throws \invalid_parameter_exception
     */
    public static function fontsize($action) {
        $params = self::validate_parameters(self::fontsize_parameters(), ['action' => $action]);

        $currentfontsizeclass = get_user_preferences('accessibilitystyles_fontsizeclass', '');
        $newfontsizeclass = null;

        $currentfontsize = [];
        if ($currentfontsizeclass) {
            $currentfontsize = explode('-', $currentfontsizeclass);
        }

        if ($params['action'] == 'increase') {
            $newfontsizeclass = self::fontsize_increase($currentfontsizeclass, $currentfontsize[1], $currentfontsize[2]);
        }

        if ($params['action'] == 'decrease') {
            $newfontsizeclass = self::fontsize_decrease($currentfontsizeclass, $currentfontsize[1], $currentfontsize[2]);
        }

        if ($params['action'] == 'reset') {
            $newfontsizeclass = null;
        }

        if (isloggedin() && !isguestuser()) {
            set_user_preference('accessibilitystyles_fontsizeclass', $newfontsizeclass);
        }

        return ['newfontsizeclass' => $newfontsizeclass];
    }

    /**
     * Returns the new incremented font size class
     *
     * @param string $currentfontsizeclass
     * @param null $action
     * @param null $value
     *
     * @return string|null
     */
    public static function fontsize_increase($currentfontsizeclass = '', $action = null, $value = null) {
        $newfontsizeclass = null;

        if ($currentfontsizeclass == '') {
            $newfontsizeclass = 'fontsize-inc-1';
        }

        if (isset($action) && $action == 'inc' && $value < 6) {
            $newfontsizeclass = 'fontsize-inc-' . ($value + 1);
        }

        if (isset($action) && $action == 'dec' && $value > 1) {
            $newfontsizeclass = 'fontsize-dec-' . ($value - 1);
        }

        if (isset($action) && $action == 'dec' && $value == 1) {
            $newfontsizeclass = null;
        }

        return $newfontsizeclass;
    }

    /**
     * Returns the new decremented font size class
     *
     * @param string $currentfontsizeclass
     * @param null $action
     * @param null $value
     *
     * @return string|null
     */
    public static function fontsize_decrease($currentfontsizeclass = '', $action = null, $value = null) {
        $newfontsizeclass = null;

        if ($currentfontsizeclass == '') {
            $newfontsizeclass = 'fontsize-dec-1';
        }

        if (isset($action) && $action == 'dec' && $value < 6) {
            $newfontsizeclass = 'fontsize-dec-' . ($value + 1);
        }

        if (isset($action) && $action == 'inc' && $value > 1) {
            $newfontsizeclass = 'fontsize-inc-' . ($value - 1);
        }

        if (isset($action) && $action == 'inc' && $value == 1) {
            $newfontsizeclass = null;
        }

        return $newfontsizeclass;
    }

    /**
     * Font size endpoint return definition
     *
     * @return external_single_structure
     */
    public static function fontsize_returns() {
        return new external_single_structure([
            'newfontsizeclass' => new external_value(PARAM_RAW, 'The new fontsize class')
        ]);
    }

    /**
     * Save theme settings endpoint parameters definition
     *
     * @return external_function_parameters
     */
    public static function savethemesettings_parameters() {
        return new external_function_parameters([
            'formdata' => new external_value(PARAM_RAW, 'The theme settings form data'),
        ]);
    }

    /**
     * Save theme settings endpoint implementation
     *
     * @param string $formdata
     *
     * @return array
     *
     * @throws \coding_exception
     * @throws \invalid_parameter_exception
     */
    public static function savethemesettings($formdata) {
        $params = self::validate_parameters(self::savethemesettings_parameters(), ['formdata' => $formdata]);

        $data = [];
        parse_str($params['formdata'], $data);

        if ($data['fonttype'] && in_array($data['fonttype'], ['default', 'odafont'])) {
            $fonttype = null;

            if ($data['fonttype'] == 'odafont') {
                $fonttype = 'odafont';
            }

            set_user_preference('themeskripsiansettings_fonttype', $fonttype);
        }

        $enableaccessibilitytoolbar = null;
        if ($data['enableaccessibilitytoolbar']) {
            $enableaccessibilitytoolbar = true;
        }

        set_user_preference('themeskripsiansettings_enableaccessibilitytoolbar', $enableaccessibilitytoolbar);

        \core\notification::success(get_string('themesettingg:successfullysaved', 'theme_skripsian'));

        return ['success' => true];
    }

    /**
     * Save theme settings endpoint return definition
     *
     * @return external_single_structure
     */
    public static function savethemesettings_returns() {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Operation response')
        ]);
    }

    /**
     * Get theme settings endpoint parameters definition
     *
     * @return external_function_parameters
     */
    public static function getthemesettings_parameters() {
        return new external_function_parameters([]);
    }

    /**
     * Get theme settings endpoint implementation
     *
     * @return array
     *
     * @throws \coding_exception
     */
    public static function getthemesettings() {
        return [
            'fonttype' => get_user_preferences('themeskripsiansettings_fonttype', 'default'),
            'enableaccessibilitytoolbar' => get_user_preferences('themeskripsiansettings_enableaccessibilitytoolbar', false)
        ];
    }

    /**
     * Get theme settings endpoint return definition
     *
     * @return external_single_structure
     */
    public static function getthemesettings_returns() {
        return new external_single_structure([
            'fonttype' => new external_value(PARAM_TEXT, 'the user selected font'),
            'enableaccessibilitytoolbar' => new external_value(PARAM_BOOL, 'the user selected toolbar option')
        ]);
    }
}
