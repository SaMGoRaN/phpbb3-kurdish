<?php
/**
*
* acp_profile.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-05-30 - Chawg.org Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Successfully added custom profile field.',
	'ALPHA_ONLY'	=> 'تەنها پیت و ژمارە',
	'ALPHA_SPACERS'	=> 'پیت، ژمارە و بۆشایی',
	'ALWAYS_TODAY'	=> 'هەمیشە ڕێکەوتی هەنووکەیی',
	'BOOL_ENTRIES_EXPLAIN'	=> 'ئێستا هەڵبژاردنەکانت لێ بدە',
	'BOOL_TYPE_EXPLAIN'	=> 'Define the type, either a checkbox or radio buttons. A checkbox will only be displayed if it is checked for a given user. In that case the <strong>second</strong> language option will be used. Radio buttons will display regardless of their value.',
	'CHANGED_PROFILE_FIELD'	=> 'Successfully changed profile field.',
	'CHARS_ANY'	=> 'هەر نووسەیەک',
	'CHECKBOX'	=> 'Checkbox',
	'COLUMNS'	=> 'ستوونەکان',
	'CP_LANG_DEFAULT_VALUE'	=> 'نرخی بنەڕەتی',
	'CP_LANG_EXPLAIN'	=> 'پەسنی خانە',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'The explanation for this field presented to the user.',
	'CP_LANG_NAME'	=> 'Field name/title presented to the user',
	'CP_LANG_OPTIONS'	=> 'هەڵبژاردنەکان',
	'CREATE_NEW_FIELD'	=> 'خانەیەکی نوێ دروست بکە',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'At least one custom profile field has not yet been translated. Please enter the required information by clicking on the “Translate” link.',
	'DEFAULT_ISO_LANGUAGE'	=> 'Default language [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'The language entries for the default language are not filled for this profile field.',
	'DEFAULT_VALUE'	=> 'نرخی بنەڕەتی',
	'DELETE_PROFILE_FIELD'	=> 'Remove profile field',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Are you sure you want to delete this profile field?',
	'DISPLAY_AT_PROFILE'	=> 'Display in user control panel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'The user is able to change this profile field within the user control panel.',
	'DISPLAY_AT_REGISTER'	=> 'Display an registration screen',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'If this option is enabled, the field will be displayed on registration.',
	'DISPLAY_ON_VT'					=> 'Display on viewtopic screen',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'If this option is enabled, the field will be displayed in the mini-profile on the topic screen.',
	'DISPLAY_PROFILE_FIELD'	=> 'Publicly Display profile field',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'The profile field will be shown in all places allowed within the load settings. Setting this to “no” will hide the field from topic pages, profiles and the memberlist.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Enter your options now, every option in one line.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Please note that you are able to change your options text and also able to add new options to the end. It is not advised to add new options between existing options - this could result in wrong options assigned to your users. This can also happen if you remove options in-between. Removing options from the end result in users having assigned this item now reverting back to the default one.',
	'EMPTY_FIELD_IDENT'	=> 'Empty field identification',
	'EMPTY_USER_FIELD_NAME'	=> 'Please enter a field name/title',
	'ENTRIES'	=> 'Entries',
	'EVERYTHING_OK'	=> 'هەموو شتێک باشە',
	'FIELD_BOOL'	=> 'Boolean (Yes/No)',
	'FIELD_DATE'	=> 'ڕێکەوت',
	'FIELD_DESCRIPTION'	=> 'پەسنی خانە',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'The explanation for this field presented to the user.',
	'FIELD_DROPDOWN'	=> 'Dropdown box',
	'FIELD_IDENT'	=> 'Field identification',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'The chosen field identification already exist. Please choose another name.',
	'FIELD_IDENT_EXPLAIN'	=> 'The field identification is a name to identify the profile field within the database and the templates.',
	'FIELD_INT'	=> 'ژمارەکان',
	'FIELD_LENGTH'	=> 'Length of input box',
	'FIELD_NOT_FOUND'	=> 'Profile field not found.',
	'FIELD_STRING'	=> 'Single text field',
	'FIELD_TEXT'	=> 'Textarea',
	'FIELD_TYPE'	=> 'جۆری خانە',
	'FIELD_TYPE_EXPLAIN'	=> 'دواتر ناتوانیت جۆری خانەکە بگۆڕیت',
	'FIELD_VALIDATION'	=> 'Field validation',
	'FIRST_OPTION'	=> 'یەکەم هەڵبژاردن',
	'HIDE_PROFILE_FIELD'	=> 'Hide profile field',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Only administrators and moderators are able to see/fill out this profile field. If this option is enabled, the profile field will be only displayed in users’ profiles.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Field identification can only contain lowercase a-z and _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Field identification can only be 17 characters long',
	'ISO_LANGUAGE'	=> 'زمان [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'Language specific options [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'زۆرترین ژمارەت نووسە',
	'MAX_FIELD_NUMBER'	=> 'بەرزترین ژمارەی ڕێ پێدراو',
	'MIN_FIELD_CHARS'	=> 'کەمترین ژمارەی نووسە',
	'MIN_FIELD_NUMBER'	=> 'نزمترین ژمارەی ڕێ پێدراو',
	'NO_FIELD_ENTRIES'	=> 'No entries defined',
	'NO_FIELD_ID'	=> 'No field id specified.',
	'NO_FIELD_TYPE'	=> 'No Field type specified.',
	'NO_VALUE_OPTION'	=> 'Option equal to non entered value',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Value for a non-entry. If the field is required, the user gets an error if he choose the option selected here.',
	'NUMBERS_ONLY'	=> 'تەنها ژمارە (١-٩)',
	'PROFILE_BASIC_OPTIONS'	=> 'هەڵبژاردنە سەرەتاییەکان',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profile field successfully activated.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profile field successfully deactivated.',
	'PROFILE_LANG_OPTIONS'	=> 'Language specific options',
	'PROFILE_TYPE_OPTIONS'	=> 'Profile type specific options',
	'RADIO_BUTTONS'	=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'	=> 'Successfully removed profile field.',
	'REQUIRED_FIELD'	=> 'خانەۆ پێویست',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Force profile field to be filled out or specified by user. This will display the profile field at registration and within the user control panel.',
	'ROWS'	=> 'ئاسۆکان',
	'SAVE'	=> 'پاشەکەوتکردن',
	'SECOND_OPTION'	=> 'دووەم هەڵبژاردن',
	'STEP_1_EXPLAIN_CREATE'	=> 'Here you can enter the first basic parameters of your new profile field. This information is needed for the second step where you’ll be able to set remaining options and tweak your profile field further.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Here you can change the basic parameters of your profile field. The relevant options are re-calculated within the second step.',
	'STEP_1_TITLE_CREATE'	=> 'Add profile field',
	'STEP_1_TITLE_EDIT'	=> 'Edit profile field',
	'STEP_2_EXPLAIN_CREATE'	=> 'Here you are able to define some common options you may want to adjust.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Here you are able to change some common options.<br /><strong>Please note that changes to profile fields will not affect existing profile fields entered by your users.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Profile type specific options',
	'STEP_2_TITLE_EDIT'	=> 'Profile type specific options',
	'STEP_3_EXPLAIN_CREATE'	=> 'Since you have more than one board language installed, you have to fill out the remaining language items too. The profile field will work with the default language enabled, you are able to fill out the remaining language items later too.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Since you have more than one board language installed, you now can change or add the remaining language items too. The profile field will work with the default language enabled.',
	'STEP_3_TITLE_CREATE'	=> 'Remaining language definitions',
	'STEP_3_TITLE_EDIT'	=> 'Language definitions',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default phrase to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default text to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TRANSLATE'	=> 'وەرگێڕان',
	'USER_FIELD_NAME'	=> 'Field name/title presented to the user',
	'VISIBILITY_OPTION'	=> 'Visibility options',
));

?>
