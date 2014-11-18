<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'	=> 'خۆکار-پاککردنی تەمەنی پەیام',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'ژمارەی ڕۆژەکان لە دوا پەیام لەدوای کام بابەت سڕاوەتەوە.',
	'AUTO_PRUNE_FREQ'	=> 'خۆکار-پاککردنی فیرکوێنسی',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'کات لە ڕۆژەکان لەنێوان ژوانی پاککردنەوەکان',
	'AUTO_PRUNE_VIEWED'	=> 'خۆکار-پاککردنی تەمەنی پەیامی بینراو',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'ژمارەی ڕۆژەکان لەو کاتەوەی بابەت بینراوە لەدوای ئەوەی کام بابەت سڕاوەتەوە.',
	'CONTINUE'						=> 'بەردەوام بە',
	'COPY_PERMISSIONS'	=> 'ڕوونووسکردنی دەسەڵاتەکان لە',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'بۆ ئاسانکردنی دامەزراندنی دەسەڵاتەکە بۆ مەکۆ نوێیەکەت ،دەتوانی دەسەڵاتەکانی مەکۆیەکی چالاک لەبەربگریتەوە.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'هەرکە دروستکرا ،مەکۆکە هەمان دەسەڵاتی دەبێت وەکو ئەوەی لێرە هەڵیدەبژێری. ئەگەر هیچ مەکۆیەک هەڵنەبژێردرا مەکۆ دروستکراوە نوێیەکە بینراو نابێت تاوەکو دەسەڵاتەکان دانەنرێن.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'ئەگەر لەبەرگرتنەوەی دەسەڵاتەکان هەڵبژێری ،مەکۆکە هەمان دەسەڵاتی دەبێت وەکو ئەوەی لێرە هەڵیدەبژێری. ئەمە هەر دەسەڵاتێک لەسەر دەنووسێ کە تۆ پێشتر داتناوە بۆ ئەم مەکۆیە لەگەڵ دەسەڵاتەکانی ئەو مەکۆیەی لێرە هەڵیدەبژێری. ئەگەر هیچ مەکۆیەک هەڵنەبژێرا دەسەڵاتی ئێستاکە دەمێنێتەوە.',
	'COPY_TO_ACL'					=> 'لەجیاتی ئەوە ،تۆ دەشتوانی %sدەسەڵاتی نوێ دابمەزرێنی%s بۆ ئەو مەکۆیە.',
	'CREATE_FORUM'	=> 'مەکۆیەکی نوێ دروست بکە',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'ناوەڕۆک بسڕەوە یان بیگوازەوە بۆ مەکۆیەکی تر',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'ژێرمەکۆ بسرەوە یان بیگوازەوە بۆ مەکۆیەکی تر',
	'DEFAULT_STYLE'	=> 'ڕووخساری بنەڕەتی',
	'DELETE_ALL_POSTS'	=> 'پەیامەکان بسڕەوە',
	'DELETE_SUBFORUMS'	=> 'ژێرمەکۆ و پەیامەکان بسڕەوە',
	'DISPLAY_ACTIVE_TOPICS'	=> 'ڕێ دان بە بابەتە چالاکەکان',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'گەر بەڵێ هەڵبژێردرا بابەتە چالاکەکانی ژێرمەکۆ دیاریکراوەکان لەم هاوپۆلەد دەردەکەون',
	'EDIT_FORUM'	=> 'دەستکاریکردنی مەکۆ',
	'ENABLE_INDEXING'	=> 'index ـکردنی گەڕان چالاک بکە',
	'ENABLE_INDEXING_EXPLAIN'	=> 'ئەگەر بەڵێ دانرا. پەیامەکان دەکرێن بۆ ئەو مەکۆیە پێڕست دەکرێن بۆ گەڕان.',
	'ENABLE_POST_REVIEW'	=> 'پیاچوونەوەی بابەتەکان چالاک بکە',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'ئەگەر بەڵێ دانرا بەکارهێنەران دەتوانن پەیامەکانیان پێشبینین بکەن ئەگەر پەیامە نوێیەکان کران بۆ بابەتەکە کاتێ بەکارهێنەران دەیاننووسن. ئەمە پێویستە ناچالاک بکرێت بۆ مەکۆ دەمەتەقێیەکان.',
	'ENABLE_QUICK_REPLY'			=> 'پەیامی خێرا چالاک بکە',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'چالاککردنی وەڵامی خێرا لەو مەکۆیە. ئەم ڕێکخستنە وا دەنەنراوە ئەگەر وەڵامە خێراکە فراوانی مەکۆی ناچالاک بکات. پەیامە خێراکە تەنها نیشان دەدرێت بۆ بەکارهێنەران کە دەسەڵاتیان هەیە بۆ نووسین لەو مەکۆیە.',
	'ENABLE_RECENT'	=> 'بابەتە چالاکەکان پیشان بدە',
	'ENABLE_RECENT_EXPLAIN'	=> 'ئەگەر بەڵێ دانرا بابەتەکان دەکرێن بۆ ئەو مەکۆیە نیشان دەدرێن لە لیستی بابەتە چالاکەکان.',
	'ENABLE_TOPIC_ICONS'	=> 'ئایکۆنی بابەت چالاک بکە',
	'FORUM_ADMIN'	=> 'بەڕێوەبەرایەتی مەکۆ',
	'FORUM_ADMIN_EXPLAIN'	=> 'لە phpBB3 هەمووشتێک لەسەر بنچینەی مەکۆ کراوە. هاوپۆلێک تەنها جۆرێکی تایبەتی مەکۆیە. هەر مەکۆیەک دەتوانێ ژمارەیەکی بێ سنوور ژێرمەکۆی هەبێت وە تۆ دەتوانی دیاریبکەی لە کامیان پەیام بنێردرێ یان نا. لێرە دەتوانی مەکۆ تاکەکان زیادبکەی، دەستکاری بکەی ،بسڕیەوە ،داخەیت، بکەیتەوە بە سانایی و بە بوونی کۆمەڵێک کرداری هەمەجۆر. ئەگەر پەیام و بابەتەکانت دەرچوون لە دۆخی گۆڕینەوە دەتوانی دووبارە مەکۆیەک ئاڵوگۆڕ بکەیەوە. <strong>.پێویستە دەسەڵاتە گونجاوەکان دابنێی یان لەبەر بگریتەوە بۆ مەکۆیەکی تازە دروستکراو تاکو نیشان بدرێن.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'خۆکار-وشککردن چالاکبکە',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'وشکەکان مەکۆی بابەتەکان ،تەمەن/فیرکوێنسی دابنێ لە پێرمابستەری خوارەوە.',
	'FORUM_CREATED'	=> 'مەکۆ بەسەرکەوتوویی دروستکرا.',
	'FORUM_DATA_NEGATIVE'	=> 'وشککردنی خەمڵاندنەکان ناتوانرێ کردار بکرێن.',
	'FORUM_DESC_TOO_LONG'	=> 'باسکردنی مەکۆکە زۆر درێژە ،دەبێ کەمتر بێت لە 4000 تیپ.',
	'FORUM_DELETE'	=> 'مەکۆ بسڕەوە',
	'FORUM_DELETE_EXPLAIN'	=> 'مەکۆکەی خوارەوە ڕێگات دەدات بۆ سڕینەوەی مەکۆیەک. ئەگەر مەکۆکە دەتوانرێ بنووسرێ تۆش دەتوانی بڕیار بدەی لەکوێ دەتەوێ هەموو بابەتەکان (یان مەکۆکان) پاڵ بنێت کە لەخۆی گرتووە.',
	'FORUM_DELETED'	=> 'مەکۆ بە سەرکەوتوویی سڕدرایەوە.',
	'FORUM_DESC'	=> 'پەسن',
	'FORUM_DESC_EXPLAIN'	=> 'هەر کۆدکردنێکی HTML نووسراو لێرە نیشاندەدرێت وەکو خۆی.',
	'FORUM_EDIT_EXPLAIN'	=> 'مەکۆکەی خوارەوە ڕێگات دەدات ئەو مەکۆیە ئارەزوومەندانە بکەیت .تکایە سەرنجی ئەوە بدە کە چاودێریکردن و کۆنترۆڵەکانی ژمارەی پەیام دانراون لەڕێگای دەسەڵاتەکانی مەکۆ بۆ هەر بەکارهێنەرێک یان بۆ هەر گرووپێکی بەکارهێنەر.',
	'FORUM_IMAGE'	=> 'وێنەی مەکۆ',
	'FORUM_IMAGE_EXPLAIN'	=> 'شوێن ،پەیوەندی هەیە بۆ شوێنگە/پێڕستی سەرەتای phpBB ،زیادکراوی وێنەیەک بۆ یارمەتیدان لەگەڵ ئەو مەکۆیە.',
    'FORUM_IMAGE_NO_EXIST'            => 'وێنەی دیاریکراوی مەکۆ بوونی نییە',
	'FORUM_LINK_EXPLAIN'	=> 'URL ــی تەواو (لەخۆگرتنی کۆنووسەکان ،وەکو: <samp>http://</samp>) بۆ مەودای شوێنەکە کە کرتەکردنی ئەو مەکۆیە بەکارهێنەرەکە دەبات، نموونە <samp>http://www.chawg.org/</samp>.',
	'FORUM_LINK_TRACK'	=> 'دوای گەڕاندنەوکانی بەستەر بکەوە',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'تۆمارکردنی ژمارەی کاتەکانی بەستەری مەکۆیەک کە کرتەکراوە.',
	'FORUM_NAME'	=> 'ناوی مەکۆ',
	'FORUM_NAME_EMPTY'	=> 'پێویستە ناوێک بنووسیت بۆ ئەم مەکۆیە',
	'FORUM_PARENT'	=> 'باوانی مەکۆ',
	'FORUM_PASSWORD'	=> 'تێپەڕەوشەی مەکۆ',
	'FORUM_PASSWORD_CONFIRM'	=> 'دڵنیابوون لە تێپەڕەوشەی مەکۆ',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'تەنها پێویستە دابنرێت ئەگەر تێپەڕەوشەی مەکۆیەک نووسرا.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'پێناسە کردنی تێپەڕەوشەیەک بۆ ئەو مەکۆیە ،سیستەمی دەسەڵات بەکارببە لە پەسەندکردنەکان.',
	'FORUM_PASSWORD_UNSET'	=> 'لابردنی تێپەڕەوشەی مەکۆ',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'ئێرە بپشکنە ئەگەر دەتەوێ تێپەڕەوشەی مەکۆکەت بسڕیتەوە.',
	'FORUM_PASSWORD_OLD'				=> 'تێپەڕەوشەی مەکۆکە ڕێگایەکی هاشکردنی کۆن بەکاردەبات و پێویستە بگۆڕدرێت.',
	'FORUM_PASSWORD_MISMATCH'	=> 'ئەو تێپەڕەوشانەی نووسیتە ناگونجێن و وەکویەک نین.',
	'FORUM_PRUNE_SETTINGS'	=> 'ڕێکخستنەکانی وشکی مەکۆ',

	'FORUM_RESYNCED'	=> 'مەکۆی “%s” بەسەرکەوتوویی لەگەڵهێناریەوە.',
	'FORUM_RULES_EXPLAIN'	=> 'یاساکانی مەکۆ لە هەر پەڕەیەکی ناو مەکۆکە نیشاندران.',
	'FORUM_RULES_LINK'	=> 'بەستەر بۆ یاساکانی مەکۆ',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'تۆ دەتوانی URL ــی پەڕە/پەیامەکە بنووسیت کە یاساکانی مەکۆی ئێرەی لەخۆگرتووە. ئەو ڕێکخستنە لەسەر ئەو دەقی یاسای مەکۆیە دەڕوات کە تۆ دیاریت کردووە.',
	'FORUM_RULES_PREVIEW'	=> 'پێشبینینی یاساکانی مەکۆ',
	'FORUM_RULES_TOO_LONG'	=> 'یاساکانی مەکۆکە دەبێت کەمتربن لە 4000 تیپ.',
	'FORUM_SETTINGS'	=> 'ڕێکخستنەکانی مەکۆ',
	'FORUM_STATUS'	=> 'دۆخی مەکۆ',
	'FORUM_STYLE'	=> 'ڕووخساری مەکۆ',
	'FORUM_TOPICS_PAGE'	=> 'بابەتەکان بۆ هەر پەڕەیەک',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'ئەگەر ئەو نرخە هیچ-سفر بێت لەسەر بابەتە بنەڕەتەکان دەڕوات بۆ هەر ڕێکخستنی پەڕەیەک.',
	'FORUM_TYPE'	=> 'جۆری مەکۆ',
	'FORUM_UPDATED'	=> 'زانیاری مەکۆ بەسەرکەوتوویی نوێکرایەوە.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'دەتەوێ مەکۆ نووسراوەکە بگۆڕیت بەهەبوونی ژێرمەکۆکان بۆ بەستەرێک. تکایە هەمو ژێرمەکۆکان بگوازەوە بۆ دەرەوەی ئەو مەکۆیە پێش ئەوەی بەردەوام بیت. چونکە دوای گۆڕینی بۆ بەستەرێک هیچی تر تۆ ناتوانیت ژێرمەکۆکان نابینیت کە لە ئێستادا پەیوەندیدارن بەم مەکۆیەوە.',
	'GENERAL_FORUM_SETTINGS'	=> 'ڕێکخستنە گشتییەکانی مەکۆ',
	'LINK'	=> 'بەستەر',
	'LIST_INDEX'	=> 'لیستی ژێرمەکۆکان لە خێزانە-مەکۆی ئەفسانە.',
	'LIST_INDEX_EXPLAIN'	=> 'ئەو مەکۆیە نیشانبدە لەسەر پێڕست و هەرجێگایەکی تر وەکو بەستەرێک لەناو ئەفسانەی خێزانە-مەکۆ ئەگەر هەڵبژاردنی لیستی ژێرمەکۆکانی خێزانە-مەکۆ چالاککراوە.',
	'LIST_SUBFORUMS'	=> 'ژێرمەکۆکان لە ژێر مەکۆدا لیست بکە',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'ژێرمەکۆکانی ئەو مەکۆیە نیشانبدە لەسەر پێڕست و هەرجێگایەکی تر وەکو بەستەرێک لەناو ئەفسانەکە ئەگەر هەڵبژاردنی "لیستی ژێرمەکۆکان لە خێزانە-مەکۆی ئەفسانە" چالاککرابوو.',
	'LOCKED'	=> 'داخراوە',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'ئەو مەکۆیەی هەڵتبژاردووە بۆ گواستنەوەی پەیامەکان نەنووسراوە. تکایە مەکۆیەکی نووسراو هەڵبژێرە.',
	'MOVE_POSTS_TO'	=> 'پەیامەکان بگوازەوە بۆ',
	'MOVE_SUBFORUMS_TO'	=> 'ژێرمەکۆکان بگوازەوە بۆ',
	'NO_DESTINATION_FORUM'	=> 'هیچ مەکۆیەکت دیاری نەکردووە بۆ گواستنەوەی ناوەڕۆکەکان بۆی.',
	'NO_FORUM_ACTION'	=> 'هیچ کردارێک پێناسە نەکراوە بۆ ئەوەی چی ڕوودەدات لەگەڵ ناوەڕۆکی مەکۆکە.',
	'NO_PARENT'	=> 'بێ باوان',
	'NO_PERMISSIONS'	=> 'دەسەڵاتەکان ڕوونووس مەکە',
	'NO_PERMISSION_FORUM_ADD'	=> 'دەسەڵاتی پێویستت نییە بۆ زیادکردنی مەکۆ.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'دەسەڵاتی پێویستت نییە بۆ سڕینەوەی مەکۆ.',
	'PARENT_IS_LINK_FORUM'	=> 'ئەو خێزانەی تۆ دیاریتکردووە بەستەری مەکۆیەکە. بەستەری مەکۆکان ناتوانرێن مەکۆکانی تر هەڵبگرن ،تکایە هاوپۆلێک دیاریبکە یان مەکۆ وەکو خێزانە مەکۆکە.',
	'PARENT_NOT_EXIST'	=> 'باوان بوونی نییە.',
	'PRUNE_ANNOUNCEMENTS'	=> 'ئاگادارییەکان وشکبکە',
	'PRUNE_STICKY'	=> 'جێگیرەکان وشکبکە',
	'PRUNE_OLD_POLLS'	=> 'ڕاپرسییە کۆنەکان وشکبکە',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'بابەتەکان دەسڕێتەوە لەگەڵ ئەو ڕاپرسییانەی دەنگیان تێدا نەدراوە بۆ پەیامی ڕۆژە کۆنەکان.',
	'REDIRECT_ACL'	=> 'ئێستا تۆ دەتوانی %sدەسەڵاتەکان دابنێی%s بۆ ئەو مەکۆیە.',
	'SYNC_IN_PROGRESS'	=> 'لەگەڵهێنانەوەی مەکۆ',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'لەگەڵهێنانەوەی ڕیزکاری بابەت %1$d/%2$d.',
	'TYPE_CAT'	=> 'هاوپۆل',
	'TYPE_FORUM'	=> 'مەکۆ',
	'TYPE_LINK'	=> 'بەستەر',
	'UNLOCKED'	=> 'دانەخراو',
));
