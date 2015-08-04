<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @translated 2015 by [ SaM GoRaN, Sia Nariman, cutiyar ]
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ADD_ATTACHMENT'			=> 'هاوپێچ بار بکە',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'گەر ئەتەوێت پەڕگەیەک یان چەند پەڕگەیەک زیاد بکەیت لە خوارەوە زانیارییەکان لێبدە.',
	'ADD_FILE'					=> 'پەڕگە زیادبکە',
	'ADD_POLL'					=> 'زیادکردنی ڕاپرسی',
	'ADD_POLL_EXPLAIN'			=> 'گەر ناتەوێت ڕاپرسی دابنێیت بۆ بابەتەکەت ئەم خانانە بە بەتاڵی جێبهێڵە.',
	'ALREADY_DELETED'			=> 'ببورە بەڵام ئێم پەیامە پێشتر سڕدراوەتەوە.',
	'ATTACH_DISK_FULL'			=> 'شوێنی پاشەکەوت بەشی بارکردنی ئەم پەڕگەیە ناکات.',
	'ATTACH_QUOTA_REACHED'		=> 'ببورە، گەیشتیت بە زۆرترین ڕێژەی ڕێپێدراوی هاوپێچکردنی پەڕگە.',
	'ATTACH_SIG'				=>'واژۆیەک هاوپێچ بکە (واژۆ دەتوانرێت بگۆڕدرێت لە پەڕەی تایبەتی بەکارهێنەر)',

	'BBCODE_A_HELP'				=> 'پەڕگەی بارکراو: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'دەقی تۆخ: [b]دەق[/b]',
	'BBCODE_C_HELP'				=> 'کۆد: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'فلاش: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'قەبارەی فۆنت: [size=x-small]دەقی بچوک[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ناکارا</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>کارا</em>',
	'BBCODE_I_HELP'				=> 'لار: [i]دەق[/i]',
	'BBCODE_L_HELP'				=> 'لیست: [list][*]دەق[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'دانەی لیست: [*]دەق',
	'BBCODE_O_HELP'				=> 'لیستی ڕێزکراو: [list=1][*]خاڵی یەکەم[/list] یان [list=a][*]خاڵی 1[/list]',
	'BBCODE_P_HELP'				=> 'وێنە: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'دەقکردن: [quote]دەق[/quote]',
	'BBCODE_S_HELP'				=> 'ڕەنگی فۆنت: [color=red]دەق[/color] یان [color=#FF0000]دەق[/color]',
	'BBCODE_U_HELP'				=> 'ژێرهێل: [u]دەق[/u]',
	'BBCODE_W_HELP'				=> 'ناونیشانی ئینتەرنێت: [url]http://url[/url] یان [url=http://url]دەقی بەستەر[/url]',
	'BBCODE_Y_HELP'				=> 'لیست: زیادکردنی لیست',
	'BUMP_ERROR'				=> 'ناتوانیت دوای ناردنی پەیامێک بەخێرایی پەیامێکی تر بنێرێت، تکایە کەمێک چاوەڕێ بکە',

	'CANNOT_DELETE_REPLIED'		=>  'دەتوانیت ئەو پەیامانە بسڕیتەوە کە وەڵامیان نەدراوەتەوە.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'ئەم بابەتە داخراوە. ناتوانیت بەشداری تێدا بکەی',
	'CANNOT_EDIT_TIME'			=> 'ناتوانیت دەسکاری ئەم نێردراوە بکەیت یان بسڕیتەوە',
	'CANNOT_POST_ANNOUNCE'		=> 'ببورە. ناتوانیت ئاگاداری بنێریت',
	'CANNOT_POST_STICKY'		=> 'ببورە. اتوانیت بابەتی جێگیر بنێریت',
	'CHANGE_TOPIC_TO'			=> 'جۆری بابەت بگۆڕە بۆ',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'پەیامەکەت یەک پیتی لەخۆ گرتووە.',	    // Plural Rule 1 - by SaM GoRaN
		2	=> 'پەیامەکەت دوو پیتی لەخۆ گرتووە.',	// Plural Rule 2 - by SaM GoRaN
		3	=> 'پەیامەکەت %1$d پیتی لەخۆ گرتووە.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'پەیامەکەت %1$d پیتی لەخۆ گرتووە.',	// Plural Rule 4 - by SaM GoRaN
		5	=> 'پەیامەکەت %1$d پیتی لەخۆ گرتووە.',	// Plural Rule 5 - by SaM GoRaN
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'واژۆکەت یەک پیتی لەخۆ گرتووە.',	// Plural Rule 1 - by SaM GoRaN
		2	=> 'واژۆکەت دوو پیتی لەخۆ گرتووە.',	// Plural Rule 2 - by SaM GoRaN
		3	=> 'واژۆکەت %1$d پیتی لەخۆ گرتووە.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'واژۆکەت %1$d پیتی لەخۆ گرتووە.',	// Plural Rule 4 - by SaM GoRaN
		5	=> 'واژۆکەت %1$d پیتی لەخۆ گرتووە.',	// Plural Rule 5 - by SaM GoRaN
	),
	'CLOSE_TAGS'				=> 'تاگەکان دابخە',
	'CURRENT_TOPIC'				=> 'بابەتی ئێستا',

	'DELETE_FILE'				=> 'سڕینەوەی پەڕگە',
	'DELETE_MESSAGE'			=> 'سڕینەوەی پەیامە',
	'DELETE_MESSAGE_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی پەیام؟',
	'DELETE_OWN_POSTS'			=> 'ببورە. تەنها دەتوانیت بابەتەکانی خۆت بسڕیتەوە',
	'DELETE_PERMANENTLY'		=> 'سڕینەوەی هەمیشەیی',
	'DELETE_POST_CONFIRM'		=> 'دڵنیایت لە سڕینەوەی ئەم بابەتە؟',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم بەشدارییە بەشێوەی <strong>هەمیشەیی</strong>؟',
	'DELETE_POST_PERMANENTLY'	=> 'بەشداری لە بنچەوە سڕایەوە بەجۆرێک کە ناتوانرێت بگەڕێندرێتەوە',
	'DELETE_POSTS_CONFIRM'		=> 'دڵنیایت لە سڕینەوەی ئەم بەشداریانە؟',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم بەشداریانە بەشێوەیەکی <strong>هەمیشەیی</strong>؟',
	'DELETE_REASON'				=> 'هۆکاری سڕینەوە',
	'DELETE_REASON_EXPLAIN'		=> 'هۆکاری سڕینەوە بەدیار دەکەوێت لەلایەن چاودێرانەوە.',
	'DELETE_POST_WARN'			=> 'تەنها بە سڕینەوە ناتوانیت بابەتەکەت بگەڕێنیتەوە',
	'DELETE_TOPIC_CONFIRM'		=> 'دڵنیایت لە سڕینەوەی ئەم بابەتە؟',
	'DELETE_TOPIC_PERMANENTLY'	=> 'ئەم بابەتە لە بنچەوە سڕایەوە بەجۆرێک کە ناتوانرێت بگەڕێندرێتەوە',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم بابەتە بەشێوەی <strong>هەمیشەیی</strong>؟',
	'DELETE_TOPICS_CONFIRM'		=> 'دڵنیایت لە سڕینەوەی ئەم بەشدارییانە؟',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'دڵنیاییت لە سڕینەوەی ئەم بابەتانە بەشێوەی<strong>هەمیشەیی</strong>؟',
	'DISABLE_BBCODE'			=> 'ناچاڵاککردنی BBCode',
	'DISABLE_MAGIC_URL'			=> 'خۆکارانە بەستەرەکان چاڵاک مەکە',
	'DISABLE_SMILIES'			=> 'ناچاڵاککردنی خەندەکان',
	'DISALLOWED_CONTENT'		=> 'بارکردن ڕەفز کراوەوە لەبەر ئەوەی پەڕگەی بارکراو وەک پەڕگەیەکی هێرشکەر ناسرا.',
	'DISALLOWED_EXTENSION'		=> 'درێژکراوی %s ڕێ پێ نەدراوە.',
	'DRAFT_LOADED'				=> 'ڕەشنووس لە ناوچەی پەیام نووسیندا کرایەوە، ئێستا دەتوانیت پەیامەکەت تەواو بکەیت.<br />ڕەشنووسەکەت دەسڕدرێتەوە لە دوای ناردنی ئەم بەشدارییە.',
	'DRAFT_LOADED_PM'			=> 'ڕەشنووس لە ناوچەی پەیام نووسیندا کرایەوە، ئێستا دەتوانیت پەیامەکەت تەواو بکەیت.<br />ڕەشنووسەکەت دەسڕدرێتەوە لە دوای ناردنی ئەم پەیامە تایبەتییە.',
	'DRAFT_SAVED'				=> 'ڕەشنووس پاشەکەوتکرا',
	'DRAFT_TITLE'				=> 'ناونیشانی ڕەشنووس',

	'EDIT_REASON'				=> 'هۆکاری دەستکاریکرد',
	'EMPTY_FILEUPLOAD'			=> 'پەڕگەی بارکراو بەتاڵە.',
	'EMPTY_MESSAGE'				=> 'پێویستە پەیامێک بنووسیت لە کاتی ناردن.',
	'EMPTY_REMOTE_DATA'			=> 'نەتوانرا پەڕگە بار بکرێت ، دوبارە هەوڵبدەوە',

	'FLASH_IS_OFF'				=> '[flash] <em>ناکارا</em>',
	'FLASH_IS_ON'				=> '[flash] <em>کارا</em>',
	'FLOOD_ERROR'				=> 'ناتوانیت وا بەخێرایی بەشداری بکەیت، تکایە چاوەڕێ بکە',
	'FONT_COLOR'				=> 'ڕەنگی فۆنت',
	'FONT_COLOR_HIDE'			=> 'شاردنەوەی ڕەنگی فۆنت',
	'FONT_HUGE'					=> 'زۆر گەورە',
	'FONT_LARGE'				=> 'گەورە',
	'FONT_NORMAL'				=> 'ناوەند',
	'FONT_SIZE'					=> 'قەبارەی فۆنت',
	'FONT_SMALL'				=> 'بچوک',
	'FONT_TINY'					=> 'زۆر بچوک',

	'GENERAL_UPLOAD_ERROR'		=> 'ناتوانرێت پەڕگە باربکرێت بۆ %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>ناکارا</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>کارا</em>',
	'INVALID_FILENAME'			=> '%s ناوێکی نەگونجاوە',

	'LOAD'						=> 'داگرتن',
	'LOAD_DRAFT'				=> 'داگرتنی ڕەشنووس',
	'LOAD_DRAFT_EXPLAIN'		=> 'لێرە ئەتوانیت ئەو ڕەشنووسە دیاری بکەیت کە ئەتەوێت بەردەوام بیت لە نووسین لەسەری. پەیامی هەنووکەییت هەڵدەوەشێتەوەم هەموو ناوەڕۆکی پەیامی هەنووکەییت دەسڕدرێتەوە. ڕەشنووسەکانت لە کۆنترۆڵ پانێڵي بەکارهێنەردا ببینەم دەستکاری بکە یان بسڕەوە.',
	'LOGIN_EXPLAIN_BUMP'		=> 'پێویستە بچیتە ژوورەوە بەر لە دەستکاریکردنی بەشداری لەم مەکۆیە',
	'LOGIN_EXPLAIN_DELETE'		=> 'پێویستە بچیتە ژوورەوە بەر لە سڕینەوەی بەشداری لەم مەکۆیە',
	'LOGIN_EXPLAIN_POST'		=> 'پێویستە بچیتە ژوورەوە بەر لە  بەشداریکردن لەم مەکۆیە',
	'LOGIN_EXPLAIN_QUOTE'		=> 'پێویستە بچیتە ژوورەوە بەر لە دەقکردنی بەشداری لەم مەکۆیە',
	'LOGIN_EXPLAIN_REPLY'		=> 'پێویستە بچیتە ژوورەوە بەر لە ناردنی وەڵام  لەم مەکۆیە',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'گەورەترین قەبارەی ڕێپێدراو بریتییە لە %1$d',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'پەڕگەکانی فلاش ناکرێت بەرزییەکانی لە %d ڕەهەند زیاتربێت.',	// Plural Rule 1 - by SaM GoRaN
		2	=> 'پەڕگەکانی فلاش ناکرێت بەرزییەکانی لە %d ڕەهەند زیاتربێت.',	// Plural Rule 2 - by SaM GoRaN
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'پەڕگەکانی فلاش ناکرێت پانی لە %d ڕەهەند زیاتربێت.',	// Plural Rule 1 - by SaM GoRaN
		2	=> 'پەڕگەکانی فلاش ناکرێت پانی لە %d ڕەهەند زیاتربێت.',	// Plural Rule 2 - by SaM GoRaN
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'وێنە ناکرێت بەرزییەکانی لە %1$d ڕەهەند زیاتربێت.',	// Plural Rule 1 - by SaM GoRaN
		2	=> 'وێنە ناکرێت بەرزییەکانی لە  %1$d ڕەهەند زیاتربێت.',	// Plural Rule 2 - by SaM GoRaN
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'وێنە ناکرێت بەرزییەکانی لە  %1$d ڕەهەند زیاتربێت.',	// Plural Rule 1 - by SaM GoRaN
		2	=> 'وێنە ناکرێت بەرزییەکانی لە  %1$d ڕەهەند زیاتربێت.',	// Plural Rule 2 - by SaM GoRaN
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'پەیامەکەت لێرە بنووس،پێویستە لە یەک پیت زیاتر نەبێت.',					// Plural Rule 1 - by SaM GoRaN
		2	=> 'پەیامەکەت لێرە بنووس، پێویستە لە دوو پیت زیاتر نەبێت.',					// Plural Rule 2 - by SaM GoRaN
		3	=> 'پەیامەکەت لێرە بنووسە، پێویستە لە <strong>%d</strong> پیت زیاتر نەبێت.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'پەیامەکەت لێرە بنووسە، پێویستە لە <strong>%d</strong> پیت زیاتر نەبێت.',	// Plural Rule 4 - by SaM GoRaN
		5	=> 'پەیامەکەت لێرە بنووسە، پێویستە لە <strong>%d</strong> پیت زیاتر نەبێت.',	// Plural Rule 5 - by SaM GoRaN
	),
	'MESSAGE_DELETED'			=> 'ئەم پەیامە بە سەرکەوتوویی سڕدرایەوە.',
	'MORE_SMILIES'				=> 'بینینی سەرجەم خەندەکان',

	'NOTIFY_REPLY'				=> 'ئاگادارم بکەوە کاتێک وەڵامێک نێردرا',
	'NOT_UPLOADED'				=> 'ناتوانیت پەڕگە بارکەیت',
	'NO_DELETE_POLL_OPTIONS'	=> 'ناتوانیت هەڵبژاردنە هەبووەکانی ڕاپرسی بسڕیتەوە.',
	'NO_PM_ICON'				=> 'بەبێ وێنۆچکە',
	'NO_POLL_TITLE'				=> 'پێویستە ناونیشانی ڕاپرسی بنووسیت.',
	'NO_POST'					=> 'پەیامی داواکراو بوونی نییە.',
	'NO_POST_MODE'				=>  'هیچ جۆرێکی پەیام دیاری نەکراوە.',

	'PARTIAL_UPLOAD'			=> 'تەنها پارچەیەک لە پەڕگەکە بارکرا',
	'PHP_SIZE_NA'				=> 'قەبارەی پەڕگەی هاوپێچکراو زۆر گەورەیە',
	'PHP_SIZE_OVERRUN'			=>  'قەبارەی پەڕگەی هاوپێچکراو زۆر گەورەیە، زۆرترین قەبارەی ڕێگەپێدراو %1$d %2$s ـە.<br />تکایە سەرنجی ئەوە بدە ئەمە لە php.ini ڕێکخراوە و ناتوانرێت بگۆڕدرێت.',
	'PLACE_INLINE'				=> 'لەناو پەڕگە',
	'POLL_DELETE'				=> 'سڕینەوەی ڕاپرسی',
	'POLL_FOR'					=> 'ماوەی ڕاپرسی',
	'POLL_FOR_EXPLAIN'			=>  '0 بنووسە یان بە بەتاڵی جێی بهێڵە تا ڕاپرسی هەرگیز کۆتایی نەیەت.',
	'POLL_MAX_OPTIONS'			=> 'هەڵبژاردنەکان بۆ هەر بەکارهێنەرێک',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'ئەمە ژمارەی ئەو هەڵبژاردنانەیە کە پێویستە هەر بەکارهێنەرێک دیاری بکات لە کاتی دەنگدان.',
	'POLL_OPTIONS'				=> 'هەڵبژاردنەکانی ڕاپرسی',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێ دابنێ. پێویستە یەک هەڵبژاردن بنووسیت.',						// Plural Rule 1 - by SaM GoRaN
		2	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێ دابنێ. پێویستە دوو هەڵبژاردن بنووسیت.',						// Plural Rule 2 - by SaM GoRaN
		3	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێ دابنێ. پێویستە تا <strong>%d</strong> هەڵبژاردن بنووسیت.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێ دابنێ. پێویستە تا <strong>%d</strong> هەڵبژاردن بنووسیت.',	// Plural Rule 4 - by SaM GoRaN
		5	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێ دابنێ. پێویستە تا <strong>%d</strong> هەڵبژاردن بنووسیت.',	// Plural Rule 5 - by SaM GoRaN
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێدا دابنێ. دەتوانیت یەک هەڵبژاردن دیاری بکەیت. گەر هەرڵبژاردنت لابردووە یان زیاد کردووە, هەموو دەنگەکانی پێشوو دەسڕدرێتەوە.',						// Plural Rule 1 - by SaM GoRaN
		2	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێدا دابنێ. دەتوانیت دوو هەڵبژاردن دیاری بکەیت. گەر هەرڵبژاردنت لابردووە یان زیاد کردووە, هەموو دەنگەکانی پێشوو دەسڕدرێتەوە.',						// Plural Rule 2 - by SaM GoRaN
		3	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێدا دابنێ. دەتوانیت تا <strong>%d</strong> هەڵبژاردن دیاری بکەیت. گەر هەرڵبژاردنت لابردووە یان زیاد کردووە, هەموو دەنگەکانی پێشوو دەسڕدرێتەوە.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێدا دابنێ. دەتوانیت تا <strong>%d</strong> هەڵبژاردن دیاری بکەیت. گەر هەرڵبژاردنت لابردووە یان زیاد کردووە, هەموو دەنگەکانی پێشوو دەسڕدرێتەوە.',	// Plural Rule 4 - by SaM GoRaN
		5	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێدا دابنێ. دەتوانیت تا <strong>%d</strong> هەڵبژاردن دیاری بکەیت. گەر هەرڵبژاردنت لابردووە یان زیاد کردووە, هەموو دەنگەکانی پێشوو دەسڕدرێتەوە.',		// Plural Rule 5 - by SaM GoRaN
	),
	'POLL_QUESTION'				=> 'پرسیاری ڕاپرسی',
	'POLL_TITLE_TOO_LONG'		=> 'ناونیشانی ڕاپرسی پێویستە کەمتر لە 100 پیت بێت',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'ناونیشانی ڕاپرسی زۆر درێژە ، پێشنیار دەکرێت هەندێک خەندە بسڕیتەوە',
	'POLL_VOTE_CHANGE'			=> 'ڕێ بە دەنگدانەوە بدە',
	'POLL_VOTE_CHANGE_EXPLAIN'	=>  'گەر چالاک کرا بەکارهێنەران دەتوانن دەنگەکەیان بگۆڕن',
	'POSTED_ATTACHMENTS'		=> 'ئاگادار دەکرێیتەوە کاتێک پەیامەکەت پەسەند کرا.',
	'POST_APPROVAL_NOTIFY'		=>'ئاگادار دەکرێیتەوە کاتێک پەیامەکەت پەسەند کرا.',
	'POST_CONFIRMATION'			=> 'ناردن',
	'POST_CONFIRM_EXPLAIN'		=> 'بۆ قەدەغەکردنی پەیامی خۆکار مەکۆ پێوسیتی بەوەیە کە کۆدێکی دڵنیایی لێبدەیت. کۆد لەو وێنەیە پیشان ئەدرێت کە پێویستە لە خوارەوە ببیبینیت. گەر ئاستی بینینی لاوازە یان ناتوانیت کۆدەکە بخوێنیتەوە تکایە پەیوەندی بە %sبەڕێوەبەری مەکۆ%sوە بکە.',
	'POST_DELETED'				=> 'پەیامەکە بە سەرکەوتوویی سڕدرایەوە.',
	'POST_EDITED'				=>'ئەم پەیامە بە سەرکەوتوویی دەستکاری کرا.',
	'POST_EDITED_MOD'			=> 'ئەم پەیامە بە سەرکەوتوویی دەستکاری کرا، بەڵام پێویستی بەوەیە کە پەسەند بکرێت لەلایەن چاودێرێک پێش ئەوەی بە ئاشکرا ببینرێت.',
	'POST_GLOBAL'				=> 'گشتی',
	'POST_ICON'					=> 'وێنۆچکەی بابەت',
	'POST_NORMAL'				=> 'ئاسایی',
	'POST_REVIEW'				=> 'پێداچوونەوەی بابەت',
	'POST_REVIEW_EDIT'			=> 'پێداچوونەوەی پەیام',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'ئەم پەیامە لە لایەن بەکارهێنەرێکی ترەوە گۆڕدراوە کاتێک دەستکاریت دەکرد. لەوانەیە بتەوێت چاوێک لە دەستکارییەکان بکەیت و دەستکارییەکانی خۆت ڕەک بخەیت.',
	'POST_REVIEW_EXPLAIN'		=> 'لانی کەم پەیامێکی نوێ نێردراوە بۆ ئەم بابەتە. لەوانەیە بتەوێت بە پەیامەکەتدا بچیتەوە لە ژێر ڕووناکی ئەمەدا.',
	'POST_STORED'				=> 'ئەم پەیامە بە سەرکەوتوویی نێردرا.',
	'POST_STORED_MOD'			=> 'ئەم پەیامە بە سەرکەوتوویی نێردرا، بەڵام پێویستی بەوەیە کە پەسەند بکرێت لەلایەن چاودێرێک پێش ئەوەی بە ئاشکرا ببینرێت.',
	'POST_TOPIC_AS'				=> 'بابەت بنێرە وەک',
	'PROGRESS_BAR'				=> 'جێی بەڕێوەچوون',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'ناتوانیت دەق لەناو یەکتر دابنێیت.',				// Plural Rule 1 - by SaM GoRaN
		2	=> 'دەتوانیت دوو دەق لەناو یەکتردا دابنێت.',		// Plural Rule 2 - by SaM GoRaN
		3	=> 'دەتوانیت %d دەق لەناو یەکتر دابنێیت.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'دەتوانیت %d دەق لەناو یەکتر دابنێیت.',		// Plural Rule 4 - by SaM GoRaN
		5	=> 'دەتوانیت %d دەق لەناو یەکتر دابنێیت.',		// Plural Rule 5 - by SaM GoRaN
	),
	'QUOTE_NO_NESTING'			=> 'ببورە ناتوانیت دەقەکان لەناو یەکتردا دابنێیت.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'پەڕگەی دیاریکراو نەتوانرا باربکرێت، تکایە دوبارە هەوڵبدەوە.',
	'SAVE'						=> 'پاشەکەوتکردن',
	'SAVE_DATE'					=> 'پاشەکەوتکرا لە',
	'SAVE_DRAFT'				=> 'ڕەشنووس پاشەکەوت بکە',
	'SAVE_DRAFT_CONFIRM'		=> 'تکایە سەرنجی ئەوە بدە کە ڕەشنووسە پاشەکەوتکراوەکان تەنها سەردێڕ و پەیامیان تیادایە، یان توخمەکانی تر لادەبرێن. ئەتەوێت ئێستا ڕەشنووسەکەت پاشەکەوت بکەیت؟',
	'SMILIES'					=> 'خەندەکان',
	'SMILIES_ARE_OFF'			=> 'خەندەکان <em>ناکارایە</em>',
	'SMILIES_ARE_ON'			=> 'خەندەکان <em>کارایە</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'کاتی ڕاگەیاندن/بابەتی جێگیر',
	'STICK_TOPIC_FOR'			=> 'جێگیرکردنی بابەت',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '0 بنووسە یان بە بەتاڵی جێی بهێڵە بۆ جێگیر/ئاگاداری کۆتایی نەهاتوو. تکایە سەرنجی ئەوە بدە ئەم ژمارەیە پەیوەستە بە ڕێکەوتی پەیامەکەوە.',
	'STYLES_TIP'				=> 'سەرنج: ڕووخسارەکان بە خێرایی جێبەجێ دەکرێن بەسەر دەقە دیاریکراوەکاندا.',

	'TOO_FEW_CHARS'				=> 'پەیامەکە زۆر کورتە',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'پێویستە بەلانی کەم پیتێک بنووسیت.',	// Plural Rule 1 - by SaM GoRaN
		2	=> 'پێویستە بەلانی کەم دوو پیت بنووسیت.',	// Plural Rule 2 - by SaM GoRaN
		3	=> 'پێویستە بەلانی کەم %1$d پیت بنووسیت.',	// Plural Rule 3 - by SaM GoRaN
		4	=> 'پێویستە بەلانی کەم %1$d پیت بنووسیت.',	// Plural Rule 4 - by SaM GoRaN
		5	=> 'پێویستە بەلانی کەم %1$d پیت بنووسیت.',	// Plural Rule 5 - by SaM GoRaN
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'پێویستە لانی کەم دوو هەڵبژاردنی ڕاپرسی دیاری بکەیت.',
	'TOO_MANY_ATTACHMENTS'		=> 'ناتوانرێت هاوپێچێکی تر زیاد بکرێت، زۆرترین %d دانەیە.',
	'TOO_MANY_CHARS'			=> 'پەیامەکەت نووسەی زۆری تیادایە.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'زۆرترین ژمارەی ڕێگەپێدراو بۆ پیتەکان بریتییە لە %1$d پیت.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'هەوڵی دیاریکردنی چەند هەڵبژاردنێکی زۆری ڕاپرسیت کرد.',
	'TOO_MANY_SMILIES'			=>  'پەیامەکەت خەندەی زۆری تیادایە. زۆرتین ژمارەی ڕێ پێدراوی خەندە %d ـە.',
	'TOO_MANY_URLS'				=> 'پەیامەکەت URL ـی زۆری تیادایە. زۆرتین ژمارەی ڕێ پێدراوی URL %d ـە.',
	'TOO_MANY_USER_OPTIONS'		=> 'ناتوانیت هەڵبژاردنی زیاتر دیاری بکەیت بۆ هەر بەکارهێنەرێک لە هەڵبژاردنەکانی هەبووەکانی ڕاپرسیی',
	'TOPIC_BUMPED'				=> 'بابەت بەسەرکەوتوویی ڕێکخرا',

	'UNAUTHORISED_BBCODE'		=> 'ناتوانیت BBCode ـی تایبەتی بەکار ببەیت: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'بۆ گێڕاندنەوەی ئەم بابەتە لە بابەتی گشتییەوە بۆ ئاسایی، پێویستە ئەو مەکۆیە دیاری بکەیت کە ئەتەوێت ئەم بابەتەی لێ پیشان بدرێت',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'پەیامەکە لەم پیتە پاڵپشتی نەکراوانەی تێدایە:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'ناونیشانەکە لەم پیتە پاڵپشتی نەکراوانەی تێدایە:<br />%s',
	'UPDATE_COMMENT'			=> 'لێدوان نوێ بکەوە',
	'URL_INVALID'				=> 'ئەو URL ـەی نووسیوتە نەگونجاوە',
	'URL_NOT_FOUND'				=> 'نەتوانرا پەڕگەی دیاریکراو بدۆزرێتەوە',
	'URL_IS_OFF'				=> '[url] <em>ناکارایە</em>',
	'URL_IS_ON'					=> '[url] <em>کارایە</em>',
	'USER_CANNOT_BUMP'			=> 'ناتوانیت لە بابەتەکانی ئەم مەکۆیە بدەیت',
	'USER_CANNOT_DELETE'		=> 'ناتوانیت پەیامەکانی ئەم مەکۆیە بسڕیتەوە',
	'USER_CANNOT_EDIT'			=> 'ناتوانیت دەستکاری پەیامەکانی ئەم مەکۆیە بکەیت',
	'USER_CANNOT_REPLY'			=> 'ناتوانیت وەڵام بدەیتەوە لەم مەکۆیە',
	'USER_CANNOT_FORUM_POST'	=> 'ناتوانیت پەیام بنووسیت لەم مەکۆیە لەبەر ئەوەی جۆری مەکۆ پاڵپشتی ئەوە ناکات',

	'VIEW_MESSAGE'				=> '%sئێرە داگرە بۆ بینینی پەیامی تایبەت%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sپەیامە تایبەتە نێردراوەکەت ببینە%s',

	'WRONG_FILESIZE'			=> 'پەڕگەکە زۆر گەورەیە ،گەورەترین قەبارەی ڕێگەپێدراو بریتییە لە %1$d %2$s.',
	'WRONG_SIZE'				=> 'دووری وێنە بەلانی کەم پێویستە %1$s ڕەهەند پانی بێت و %2$s ڕەهەند بەرزی و زیاتر لە %3$s ڕەهەند پانی و %4$s ڕەهەند بەرزی. دووری وێنەی پێشکەشکراو %5$s ڕەهەند پانی و %6$s ڕەهەند بەرزە.',
));
