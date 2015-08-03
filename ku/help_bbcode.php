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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0	=> '--',
		1	=> 'ناساندن',
	),
	array(
		0	=> 'BBCode چییە؟',
		1	=> 'ئامرازکردنێکی تایبەتی (هتمل)ە ،دەتوانی بەکاریببەیت لە پەیامەکان لەناو مەکۆ ،کە دیاریدەکرێت لەلایەن بەڕێوەبەرەوە .لەگەڵ ئەوەش دەتوانی ناچالاکی بکەیت لە هەر شوێنێک .وە کۆنترۆڵی مەزنی هەیە لەسەر چی و چۆن شتێک دەرکەوێت &gt; لەگەڵ &lt; پەیامێک کە لەسەر بنچینەی مەکۆ دەنێردرێت ،تاگەکان پەرژیندەکرێن لە چوارگۆشەی کۆلۆکە [ یان ] لەباتی .زیاتری لێ پێشبینی بکەیت لە ئاسانیی بەکارهێنانی BBCode دەکەوێتە سەر ئەو قالبەی تۆ بەکاریدەبەیت ',
	),
	array(
		0	=> '--',
		1	=> 'شێوازی دەق',
	),
	array(
		0	=> 'چۆن دەقی تۆخ ،هێڵبەژێرداهێنان لەگەڵ لار دروستبکەیت',
		1	=> 'BBCode تاگەکان لەخۆ دەگرێت کە ڕێگات دەدات بە خێرایی شێوازی بنچینەیی دەق بگۆڕیت 
نموونە، بۆ کردنی پارچەیەک لە دەقی تۆخ  ،بیخەرە نێو <strong>[b][/b]</strong><ul><li> :بەم چەند ڕێگایە تەواودەبێت
 <br /><br /><strong>[b]</strong>سڵاو<strong>[/b]</strong><br /><br />
 دەبێت بە <strong>سڵاو</strong></li><li> 
بۆ هێڵبەژێرداهێنان <strong>[u][/u]</strong> بەکاربهێنە ،نموونە 
<br /><br /><strong>[u]</strong>بەیانیت باش<strong>[/u]</strong><br /><br /> 
دەبێتە <span style="text-decoration: underline">بەیانیت باش</span></li><li>
بۆ لارکردنی دەق <strong>[i][/i]</strong> بەکاربهێنە ،نموونە
<br /><br />ئەوە <strong>[i]</strong>مەزنە!<strong>[/i]</strong><br /><br />
 دەبێت بە: ئەمە <i>مەزنە!</i></li></ul>',
	),
	array(
		0	=> 'چۆن ڕەنگ یان قەبارەی فۆنت بگۆڕم؟',

		
		1	=> 'بۆ گۆڕینی ڕەنگ یان قەبارەی دەقەکەت ،ئەم تاگانە بەکاردەبرێن ،لەیادت بێت کە چۆنیەتی دەرکەوتنی شێوازی دەرەکی دەکەوێتە سەر ئەو وێبگەڕەی ئەندامان بەکاریدەبەن لەگەڵ سیستەمەکە :<ul><li> گۆڕینی ڕەنگی دەقەکە تەواودەبێت بە پێچانی بۆناو <strong>[color=][/color]</strong> دەتوانی ڕەنگێک دیاریبکەیت بەهۆی ناوەکەی (بۆ نموونە : red, blue ,yellow ...هتد) یان بەهۆی جیاکەرەوەی هێمایی ،نموونە FFFFFF# یان 000000# ...هتد .بۆ نموونە ئەگەر بمانەوێت دەقێکی سور دروستبکەین دەتوانین ئەمە بەکاربهێنین <br /><br /><strong>[color=red]</strong>سڵاو!<strong>[/color]</strong><br /><br />یان<br /><br /><strong>[color=#FF0000]</strong>سڵاو!<strong>[/color]</strong><br /><br />
		 هەردووکیان ئەمە بەرهەمدێنن <span style="color:red">سڵاو!</span></li><li>
		 گۆڕینی قەبارەی دەق لە ڕێگایەکی چوونیەکەوەیە بە بەکارهێنانی <strong>[size=][/size]</strong> ئەو تاگە بەکارهێنانی دەکەوێتەوە سەر ئەو قالبەی کە بەکارهێنەر دەستنیشانی دەکات بەڵام جۆری ئامۆژگاریکراو لە شێوەی پلەی سەدیدا خۆی دەنوێنێت بە دەستپێکردن لە 20 کە قەبارەیەکی زۆر بچووکە بۆناو 200 کە قەبارەیەکی زۆر گەورەیە .بۆ نموونە 
		 <br /><br /><strong>[size=30]</strong>بچووک<strong>[/size]</strong><br /><br />
		 کە بەگشتی دەبێتە
		 <span style="font-size:30%;">بچووک</span><br /><br />
		 لەکاتێکدا
		 <br /><br /><strong>[size=200]</strong>گەورە<strong>[/size]</strong><br /><br />
		 دەبێت بە 
		 <span 
		style="font-size:200%;">گەورە</span></li></ul>'
		
	),
	array(
		0	=> 'دەتوانم تاگەکانی فۆرماتکردن کۆبکەمەوە؟',
		1	=> 'بەڵێ بە دڵنیاییەوە ،بۆ نموونە دەتەوێ سەرنجی کەسێک ڕابکێشی لەوانەیە بنووسی <br /><br /><strong>[size=200][color=red][b]</strong>سەیرم بکە!<strong>[/b][/color][/size]</strong><br /><br /> 
		کە ئەمە بەرهەمدێت
		<span style="color:red;font-size:200%;"><strong>سەیرم بکە!</strong></span><br /><br /> 
		ئێمە وا ئامۆژگاری ناکەین کە کۆدێکی زۆر بەکارببرێت .لەبیرت بێت ئەمە دەکەوێتەوە سەر تۆ ، نووسەر ،کە تاگەکان بە دروستی دابخەیت ،بۆ نموونە ئەمە هەڵەیە
		<br /><br /><strong>[b][u]</strong>ئەمە هەڵەیە<strong>[/b][/u]</strong>
		',
	),
	array(
		0	=> '--',
		1	=> ' ئاماژەکان و دەقی فراوان-چاککراو',
	),
	array(
		0	=> 'دەقی ئاماژە لە وەڵامەکان',
		1	=> 'دوو ڕێگا هەیە بۆ ئاماژەپێدانی دەق ،بە ئاماژەدان یان بەبێ ئاماژەدان.<ul><li>کاتێک تۆ کرداری ئاماژەپێدان بەکاردەهێنیت لە وەڵامدانەوە بۆ پەیامێک دەبێ تێبینی ئەوە بکەیت کە دەقی پەیامەکە زیادکراوە بۆ پەنجەرەی پەیام لەسەرو تیرەیەک لەناو <strong>[quote=&quot;&quot;][/quote]</strong> .ئەو شێوازە ڕێگاتدەدات بۆ ئاماژەپێدان بە کەسێک یان هەر شتێک کە مەبەستت بێت دایبنێی ،بۆ نموونە بۆ ئاماژەپێدان بە پارچەیەک لە دەقێکی شاسوار کە بەم جۆرە دەکرێت: <br /><br /><strong>[quote=&quot;شاسوار&quot;]</strong>ئەو دەقەی شاسوار نووسیویەتی دێتە ئێرە<strong>[/quote]</strong><br /><br />
		ئەنجامی بەرهەمهاتوو بە شێوەیەکی خۆکاری &quot;شاسوار نووسی:&quot; زیاددەکات لەپێش دەقی ڕاستیی ،لەیادت بێت <strong>پێویستە</strong> تۆ نیشانەکانی پرسیار بخەیتە دەوری ئەو ناوەی &quot;&quot; کە ئاماژەی پێدەدەیت .ئەمە ئارەزوومەندانە نییە. </li><li> شێوازی دووەم ڕێگات دەدات کە کوێرانە ئاماژە بە شتێک بدەیت .بۆ بەکارهێنانی دەقەکە دەخرێتە نێو تاگی <strong>[quote][/quote]</strong> کاتێک پەیامەکە نیشاندەدەیت بە سادەیی ئاماژەپێدانێکت نیشاندەدات بەبێ هێماکارییەکانی ئاماژەدان.',
		
		
	),
	array(
		0	=> 'کۆدی بەرهەمهێنان یان داتای فراوانی چاککراو',
		1	=> 'ئەگەر دەتەوێت پارچەیەک لە کۆد یان لە ڕاستیدا هەر شتێک کە فراوانی چاککراو داوادەکات بەرهەمبهێنی ،بۆ نموونە گەڕۆکی جۆری فۆنت کە دەبێت دەقەکە بخرێتە نێو تاگی <strong>[code][/code]</strong> ، نموونە <br /><br /><strong>[code]</strong>echo &quot;Eme hendê kode&quot;;<strong>[/code]</strong><br /><br /> هەموو جۆرە فۆرماتەکانی بەکاردەبرێت لەنێو تاگی <strong>[code][/code]</strong> کە دەپارێزرێت بەهۆیەوە کاتێک دواتر سەیری دەکەیت ،ڕستەکاری PHP دەتوانرێت چالاکبکرێ بە بەکارهێنانی <strong>[code=php][/code]</strong> وە هەرواش ئامۆژگاریکراوە لەکاتی ناردنی کۆدی PHP هەروەک جۆرایەتیت ڕاستیش دەبەخشێت.',
		
	),
	array(
		0	=> '--',
		1	=> 'دروستکردنی لیستەکان',
	),
	array(
		0	=> 'دروستکردنی لیستێکی ناڕیزبەندی',
		1	=> 'BBCode پاڵپشتی دەکات لە دوو جۆر لیست ،ڕیزبەندی لەگەڵ ناڕیزبەندی ،گەوهەرانە هەمان پاداشتی HTMLە ،لیستێکی ناڕیزبەندی هەر شتێک لە لیستەکەت بە شێوەی زنجیرەیی یەک لەدوای یەک بەرهەمدەهێنێت وا ناسینیان بە هۆی خڕۆکە هێمایەکەوە ،بۆ دروستکردنی لیستێکی ناڕیزبەندی دەتوانی <strong>[list][/list]</strong> بەکارببەیت ،وە هەر شتێک لە لیستەکە دیاریبکەیت بە بەکارهێنانی <strong>[*]</strong> ،بۆ نموونە بۆ لیستکردنی ڕەنگە خوازیارەکانت دەتوانیت <br /><br /><strong>[list]</strong><br /><strong>[*]</strong>سور<br /><strong>[*]</strong>سپی<br /><strong>[*]</strong>زەرد<br /><strong>[/list]</strong><br /><br /> بەکاربەریت کە ئەم لیستە بەرهەمدێنێت : <ul><li>سور</li><li>سپی</li><li>زەرد</li></ul>',
				
	),
	array(
		0	=> 'دروستکردنی لیستێکی داواکراو',
		1	=> 'جۆری دووەم لە لیست ،لیستێکی ڕیزبەندی، دەست بەسەرداگرتنێکت پێدەدات لەسەر هەر شتێ کە بەرهەمدێت ،بۆ دروستکردنی لیستێکی ڕیزبەندی <strong>[list=1][/list]</strong> بەکارببە ،بۆ دروستکردنی لیستێکی ژمارەیی یان لەجیاتیی <strong>[list=a][/list]</strong> بۆ لیستی ئەلفوبایی وەکو لەگەڵ لیستە ڕیزبەندییەکە، شتەکان دیاریدەکرێن بە بەکارهێنانی <strong>[*]</strong> ،بۆ نموونە: <br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>زمانەکانی وێبداڕشتن فێرببە<br /><strong>[*]</strong>ئەزموونی تواناکانت بکە<br /><strong>[*]</strong>کاری داهێنەرانە پێشکەشبکە<br /><strong>[/list]</strong><br /><br /> کە ئەوە بەرهەمدێت: <ol style="list-style-type: decimal;"><li>زمانەکانی وێبداڕشتن فێرببە</li><li>ئەزموونی تواناکانت بکە</li><li>کاری داهێنەرانە پێشکەشبکە</li></ol> هەرواش بۆ لیستێکی ئەلفوبایی پێویستە ئەمە بەکارببرێت: <br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>بوونی وەڵامی یەکەم<br /><strong>[*]</strong>بوونی وەڵامی دووەم<br /><strong>[*]</strong>بوونی وەڵامی سێیەم<br /><strong>[/list]</strong><br /><br /> کە ئەمە دەدات : <ol style="list-style-type: lower-alpha"><li>بوونی وەڵامی یەکەم</li><li>بوونی وەڵامی دووەم</li><li>بوونی وەڵامی سێیەم</li></ol>',
		
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'دروستکردنی بەستەر',
	),
	array(
		0	=> 'بەستەرکردن بۆ وێبگەیەکی تر',
		1	=> 'phpBB BBCode پاڵپشتی ژمارەیەک لە ڕێگا دەکات بۆ دروستکردنی بەستەرەکان.<ul><li> ڕێگای یەکەم بەکارهێنانی ئەو تاگەیە <strong>[url=][/url]</strong> ،هەرچییەک بنووسی لە دوای هێمای = دەبێتە دیارخەر و گوزارشتێک لە ناوەڕۆکی بەستەرەکە ،نموونە بەستەرکردن بۆ ویکی چاوگ ،بەم جۆرە دەکرێت: <br /><br /><strong>[url=http://www.chawg.org/wiki/]</strong>ویکی چاوگ<strong>[/url]</strong><br /><br /> کە ئەمە بەرهەمدێت : <a href="http://www.chawg.org/wiki/">ویکی چاوگ</a> .تێبینی ئەوە بکە کە بەستەرەکە لە هەمان پەنجەرە دەبێتەوە یان پەنجەرەیەکی نوێ ،بەپێی پەسەندکردنەکانی وێبگەڕی بەکارهێنەر. </li><li> ئەگەر دەتەوێت خودی بەستەرەکە خۆی دەربکەوێت دەتوانی بە سانایی بەم جۆرە ئەنجامی بدەیت: <a href="http://www.chawg.org/wiki/">http://www.chawg.org/wiki/</a></li><li> وە هەروەها phpBB تایبەتمەندییەکی تری هەیە کە ناودەبرێت بە <i>بەستەرە جادوەکان</i> ئەوە هەر نووسە بەستەرێکی دروست خۆکارانە دەگۆڕێت بۆ بەستەر بەبێ پێویستکردن بە تاگەکان یاخود تەنانەت پێشڕەوی http:// ،بۆ نموونە نووسینی www.chawg.org لەناو پەیامەکەت خۆکارانە دەگۆڕێت بۆ <a href="http://www.chawg.org">www.chawg.org</a> کە پەیامەکەت نیشاندا یان ناردت. </li><li> هەمان شت بۆ پۆستی ئەلیکترۆنیش جێبەجێ دەبێت ،دەتوانی پۆستێکی ئەلیکترۆنی دیاریبکەیت لە پەیامدا بۆ نموونە <br /><br /><strong>[email]</strong>info@chawg.org<strong>[/email]</strong><br /><br /> ئەمە بەرهەمدێنێت : <a href="mailto:info@chawg.org">info@chawg.org</a> یان دەتوانی تەنها بنووسی info@chawg.org لەناو پەیامەکەتدا خۆکارانە دەگۆڕێت کە نیشانتدا یان ناردت.</li></ul> هەروەک دەتوانی گشت تاگەکانی تری BBCode بەستەریان تێ بئاڵێنی ،وەکو <strong>[img][/img]</strong> ، نموونە: <br /><br /><strong>[url=http://www.chawg.org/][img]</strong>http://chawg.org/w/images/8/81/Chawg_wallpaper.jpg<strong>[/url][/img]</strong><br 
		/><br />دڵنیابە لە داخستن و دروستی تاگەکان بۆ ئەوەی لە پەیامەکەتدا بە تەواوی دەربکەوێت ،ئەگەرنا لەوانەیە ببێتە هۆی سڕینەوەی پەیامەکەت.',
		
	),
	array(
		0	=> '--',
		1	=> 'نیشاندانی وێنە لە پەیامەکان',
	),
	array(
		0	=> 'زیادکردنی وێنە بۆ پەیامێک',
		1	=> 'هەروەها تاگێک هەیە بۆ دانانی وێنە لە پەیامەکانتدا ،دوو تێبینی زۆر گرنگ لەیادت بێت کە ئەم تاگە بەکاردەبەیت ،ئەوانیش: زۆربەی بەکارهێنەران ئامادەیی ئەوەیان نییە کە وێنەیەکی یەکجار زۆر لە پەیامەکاندا نیشانبدەن ،وە دووەم ئەو وێنەیەی تۆ نیشانی دەدەیت دەبێت پێشووتر لەسەر ئینتەرنێت بوونی هەبێت بۆ نموونە ناتوانرێت تەنها لەسەر کۆمپیوتەرەکەت بێت ،تەنها ئەگەر تۆ ڕاژەکاری وێب بەکاردەبەیت. بۆ نیشاندانی وێنەیەک پێویستە تۆ بەستەری هێماکراو بۆ وێنەکە بخەیتە نێو تاگی <strong>[img][/img]</strong> ،بۆ نموونە: <br /><br /><strong>[img]</strong>http://chawg.org/w/images/8/81/Chawg_wallpaper.jpg<strong>[/img]</strong><br /><br /> هەروەک تێبینی کراوە لە  بەشی بەستەرکردن لەسەرەوە ،دەتوانی وێنەیەک تێکهەڵکێشی بەستەر بکەیت بە خستنە نێو تاگی <strong>[url][/url]</strong> ئەگەر ئارەزووت کرد ،نموونە: <br /><br /><strong>[url=http://www.chawg.org][img]</strong>http://chawg.org/w/images/8/81/Chawg_wallpaper.jpg<strong>[/img][/url]</strong><br /><br /> کە ئەمە بەرهەمدێت: <br /><br /><a href="http://www.chawg.org"><img src="http://chawg.org/w/images/8/81/Chawg_wallpaper.jpg" alt="" /></a>',
	),
	array(
		0	=> 'زیادکردنی لکێندراوەکان بۆ پەیام',
		1	=> 'هاوپێچەکان دەتوانرێت لەهەر بەشێکی پەیامەکاندا بەکارببرێت بە بەکارهێنانی <strong>[attachment=][/attachment]</strong> ،ئەگەر هاوپێچەکان چالاککران لەلایەن بەڕێوەبەرەوە و ئەگەر تۆ دەسەڵاتی گونجاو بدەیت بۆ دروستکردنی هاوپێچەکان ،لەناو پەردەی پەیامکردن خشتەیەکی بەردراوە لە خوار پەیام نووسین (دوگمەیەک) بۆ دانانی هاوپێچەکان لە ناوهێڵدا.',
		
	),
	array(
		0	=> '--',
		1	=> 'گرنگییەکانی تر',
	),
	array(
		0	=> 'ئەتوانم تاگەکانی خۆم زیاد بکەم؟',
		1	=> 'ئەگەر تۆ بەڕێوەبەریت لەو سەکۆیە وە دەسەڵاتی ئامادەت هەیە ،دەتوانی ئارەزوومەندانە تاگ و کۆدی زیاتر و قووڵتری BBCode زیادبکەیت و بەکاربەریت.',
	),
);
