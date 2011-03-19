<?php

$ua_tests = array(

	// Internet Explorer bestiary
	'IE9 on Win7' => array(
		'ua' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '9',
			'engine' => 'ie',
			'engine_version' => '9',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'IE9 on Vista' => array(
		'ua' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '9',
			'engine' => 'ie',
			'engine_version' => '9',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'IE8 on Win7' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; MS-RTC LM 8)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '8',
			'engine' => 'ie',
			'engine_version' => '8',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'IE8 on Vista' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '8',
			'engine' => 'ie',
			'engine_version' => '8',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'IE8 on WinXP' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; yie8)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '8',
			'engine' => 'ie',
			'engine_version' => '8',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'IE7 on Win7' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '7',
			'engine' => 'ie',
			'engine_version' => '7',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'IE7 (IE Tester) on Win7' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '7',
			'engine' => 'ie',
			'engine_version' => '7',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'IE7 on Vista' => array(
		'ua' => 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; c .NET CLR 3.0.04506; .NET CLR 3.5.30707; InfoPath.1; el-GR)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '7',
			'engine' => 'ie',
			'engine_version' => '7',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'IE7 on WinXP' => array(
		'ua' => 'Mozilla/4.0 (Windows; MSIE 7.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '7',
			'engine' => 'ie',
			'engine_version' => '7',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'IE6 (IE Tester) on Win 7' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.1; WOW64; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '6',
			'engine' => 'ie',
			'engine_version' => '6',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'IE6 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '6',
			'engine' => 'ie',
			'engine_version' => '6',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Windows Phone 7' => array(
		'ua' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows Phone OS 7.0; Trident/3.1; IEMobile/7.0; <DeviceManufacturer>;<DeviceModel>)',
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '7',
			'engine' => 'ie',
			'engine_version' => '7',
			'platform' => 'windows',
			'platform_version' => '7',
			'platform_type' => 'mobile'
		)
	),

	// Safari
	'Safari 3.1 on Win7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '3.12',
			'engine' => 'webkit',
			'engine_version' => '525.19',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Safari 3.1 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; pl-PL) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '3.12',
			'engine' => 'webkit',
			'engine_version' => '525.19',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Safari 3.1 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '3.12',
			'engine' => 'webkit',
			'engine_version' => '525.19',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Safari 3.1 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '3.12',
			'engine' => 'webkit',
			'engine_version' => '525.271',
			'platform' => 'mac',
			'platform_version' => '10.56',
			'platform_type' => 'desktop'
		)
	),
	'Safari 4 on Win7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532+ (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '4.02',
			'engine' => 'webkit',
			'engine_version' => '532',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Safari 4 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; pl-PL) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '4.02',
			'engine' => 'webkit',
			'engine_version' => '530.192',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Safari 4 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '4.02',
			'engine' => 'webkit',
			'engine_version' => '530.192',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Safari 4 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_7; en-us) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '4.02',
			'engine' => 'webkit',
			'engine_version' => '530.192',
			'platform' => 'mac',
			'platform_version' => '10.57',
			'platform_type' => 'desktop'
		)
	),
	'Safari 5 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '5.0',
			'engine' => 'webkit',
			'engine_version' => '533.16',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Safari 5 on Win7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; ja-JP) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '5.0',
			'engine' => 'webkit',
			'engine_version' => '533.16',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Safari 5 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; el-gr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '5.0',
			'engine' => 'webkit',
			'engine_version' => '533.16',
			'platform' => 'mac',
			'platform_version' => '10.63',
			'platform_type' => 'desktop'
		)
	),

	// Gecko/Mozilla
	'Firefox 3.5 on Win7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.1) Gecko/20090718 Firefox/3.5.1',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.51',
			'engine' => 'gecko',
			'engine_version' => '1.911',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.5 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729)',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.5',
			'engine' => 'gecko',
			'engine_version' => '1.91',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.5 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 2.0.50727)',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.52',
			'engine' => 'gecko',
			'engine_version' => '1.912',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.5 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; sv-SE; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.53',
			'engine' => 'gecko',
			'engine_version' => '1.913',
			'platform' => 'mac',
			'platform_version' => '10.6',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.5 on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/20090714 SUSE/3.5.1-1.1 Firefox/3.5.1',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.51',
			'engine' => 'gecko',
			'engine_version' => '1.911',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.6 on Win7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; lt; rv:1.9.2) Gecko/20100115 Firefox/3.6',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.6',
			'engine' => 'gecko',
			'engine_version' => '1.92',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.6 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.2) Gecko/20100115 Firefox/3.6',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.6',
			'engine' => 'gecko',
			'engine_version' => '1.92',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.6 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.9.2) Gecko/20100115 Firefox/3.6',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.6',
			'engine' => 'gecko',
			'engine_version' => '1.92',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.6 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2) Gecko/20091218 Firefox 3.6',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.6',
			'engine' => 'gecko',
			'engine_version' => '1.92',
			'platform' => 'mac',
			'platform_version' => '10.6',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.6 on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2) Gecko/20100222 Ubuntu/10.04 (lucid) Firefox/3.6',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.6',
			'engine' => 'gecko',
			'engine_version' => '1.92',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 4.0 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows NT 6.1; rv:2.0.1) Gecko/xxxxyyzz Firefox/4.0.1',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '4.01',
			'engine' => 'gecko',
			'engine_version' => '2.01',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 4.0 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:2.0.1) Gecko/xxxxyyzz Firefox/4.0.1',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '4.01',
			'engine' => 'gecko',
			'engine_version' => '2.01',
			'platform' => 'mac',
			'platform_version' => '10.6',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 4.0 on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; Linux i686; rv:2.0.1) Gecko/xxxxyyzz Firefox/4.0.1',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '4.01',
			'engine' => 'gecko',
			'engine_version' => '2.01',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),

	// Strange Gecko/Mozilla pre-releases and spin-offs
	'Firefox 3.6.x pre on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; de-DE; rv:1.9.2.3pre) Gecko/20100326 Ubuntu/9.10 (karmic) Namoroka/3.6.3pre',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.63',
			'engine' => 'gecko',
			'engine_version' => '1.923',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Firefox 3.7a pre on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; de-DE; rv:1.9.3a3pre) Gecko/20100304 Ubuntu/9.10 (karmic) Minefield/3.7a3pre',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.7',
			'engine' => 'gecko',
			'engine_version' => '1.93',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Songbird 1.4 on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.14) Gecko/2009091418 Songbird/1.4.3 (20091223030122)',
		'test' => array(
			'browser' => 'firefox',
			'engine' => 'gecko',
			'browser_version' => '3.0',
			'engine_version' => '1.9014',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Flock 2.5.6 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 Flock/2.5.6 (.NET CLR 3.5.30729)',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.57',
			'platform' => 'windows',
			'engine' => 'gecko',
			'engine_version' => '1.917',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Camino 2.02' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en; rv:1.9.0.18) Gecko/2010021619 Camino/2.0.2 (like Firefox/3.0.18)',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.018',
			'engine' => 'gecko',
			'engine_version' => '1.9018',
			'platform' => 'mac',
			'platform_version' => '10.6',
			'platform_type' => 'desktop'
		)
	),
	'Camino 1.67' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; it; rv:1.8.1.21) Gecko/20090327 Camino/1.6.7 (MultiLang) (like Firefox/2.0.0.21pre)',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '2.0021',
			'engine' => 'gecko',
			'engine_version' => '1.8121',
			'platform' => 'mac',
			'platform_version' => '10',
			'platform_type' => 'desktop'
		)
	),
	'SeaMonkey 2.02' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.7) Gecko/20100104 SeaMonkey/2.0.2',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.5',
			'engine' => 'gecko',
			'engine_version' => '1.917',
			'platform' => 'windows',
			'platform_version' => '5.2',
			'platform_type' => 'desktop'
		)
	),
	'SeaMonkey 1.5' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.9a1) Gecko/20060812 SeaMonkey/1.5a',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '3.0',
			'engine' => 'gecko',
			'engine_version' => '1.9',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'SeaMonkey 1.1' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1) Gecko/20061101 SeaMonkey/1.1b',
		'test' => array(
			'browser' => 'firefox',
			'browser_version' => '2.0',
			'engine' => 'gecko',
			'engine_version' => '1.81',
			'platform' => 'windows',
			'platform_version' => '4.1',
			'platform_type' => 'desktop'
		)
	),


	// Opera
	'Opera < 10 on Win7' => array(
		'ua' => 'Opera/9.64 (Windows NT 6.1; U; MRA 5.5 (build 02842); ru) Presto/2.1.1',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '9.64',
			'engine' => 'opera',
			'engine_version' => '9.64',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Opera < 10 on Vista' => array(
		'ua' => 'Opera/9.25 (Windows NT 6.0; U; en)',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '9.25',
			'engine' => 'opera',
			'engine_version' => '9.25',
			'platform' => 'windows',
			'platform_version' => '6',
			'platform_type' => 'desktop'
		)
	),
	'Opera < 10 on WinXP' => array(
		'ua' => 'Opera/9.62 (Windows NT 5.1; U; en) Presto/2.1.1',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '9.62',
			'engine' => 'opera',
			'engine_version' => '9.62',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Opera < 10 on OS X' => array(
		'ua' => 'Opera/9.20 (Macintosh; Intel Mac OS X; U; en)',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '9.2',
			'engine' => 'opera',
			'engine_version' => '9.2',
			'platform' => 'mac',
			'platform_version' => '10',
			'platform_type' => 'desktop'
		)
	),
	'Opera < 10 on Linux' => array(
		'ua' => 'Opera/9.60 (X11; Linux i686; U; en) Presto/2.1.1',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '9.6',
			'engine' => 'opera',
			'engine_version' => '9.6',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Opera >= 10 on Win7' => array(
		'ua' => 'Opera/9.80 (Windows NT 6.1; U; en) Presto/2.5.22 Version/10.51',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '10.51',
			'engine' => 'opera',
			'engine_version' => '10.51',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Opera >= 10 on Vista' => array(
		'ua' => 'Opera/9.80 (Windows NT 6.0; U; en) Presto/2.5.22 Version/10.50',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '10.5',
			'engine' => 'opera',
			'engine_version' => '10.5',
			'platform' => 'windows',
			'platform_version' => '6',
			'platform_type' => 'desktop'
		)
	),
	'Opera >= 10 on WinXP' => array(
		'ua' => 'Opera/9.80 (Windows NT 5.1; U; en) Presto/2.5.22 Version/10.50',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '10.5',
			'engine' => 'opera',
			'engine_version' => '10.5',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Opera >= 10 on OS X' => array(
		'ua' => 'Opera/9.80 (Macintosh; Intel Mac OS X; U; en) Presto/2.2.15 Version/10.00',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '10',
			'engine' => 'opera',
			'engine_version' => '10',
			'platform' => 'mac',
			'platform_version' => '10',
			'platform_type' => 'desktop'
		)
	),
	'Opera >= 10 on Linux' => array(
		'ua' => 'Opera/9.80 (X11; Linux x86_64; U; de) Presto/2.2.15 Version/10.10',
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '10.10',
			'engine' => 'opera',
			'engine_version' => '10.10',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),


	// Chrome
	'Chrome 4 on Win 7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.1.249.1025 Safari/532.5',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '4.12491025',
			'engine' => 'webkit',
			'engine_version' => '532.5',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 4 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Chrome/4.0.224.2 Safari/532.3',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '4.02242',
			'engine' => 'webkit',
			'engine_version' => '532.3',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 4 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.288.1 Safari/532.8',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '4.02881',
			'engine' => 'webkit',
			'engine_version' => '532.8',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 4 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.302.2 Safari/532.8',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '4.03022',
			'engine' => 'webkit',
			'engine_version' => '532.8',
			'platform' => 'mac',
			'platform_version' => '10.58',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 4 on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Slackware Linux x86_64; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.0.249.30 Safari/532.5',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '4.02493',
			'engine' => 'webkit',
			'engine_version' => '532.5',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 5 on Win 7' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.354.0 Safari/533.3',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '5.0354',
			'engine' => 'webkit',
			'engine_version' => '533.3',
			'platform' => 'windows',
			'platform_version' => '6.1',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 5 on Vista' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.5 Safari/533.2',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '5.03425',
			'engine' => 'webkit',
			'engine_version' => '533.2',
			'platform' => 'windows',
			'platform_version' => '6.0',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 5 on WinXP' => array(
		'ua' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.355.0 Safari/533.3',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '5.0355',
			'engine' => 'webkit',
			'engine_version' => '533.3',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 5 on OS X' => array(
		'ua' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.343.0 Safari/533.2',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '5.0343',
			'engine' => 'webkit',
			'engine_version' => '533.2',
			'platform' => 'mac',
			'platform_version' => '10.62',
			'platform_type' => 'desktop'
		)
	),
	'Chrome 5 on Linux' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Chrome/5.0.307.11 Safari/532.9',
		'test' => array(
			'browser' => 'chrome',
			'browser_version' => '5.030711',
			'engine' => 'webkit',
			'engine_version' => '532.9',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),


	// Stuff noone uses
	'Midori 0.2 (Gecko)' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux i686; pt-br; rv:1.8.1) Gecko/20061010 Firefox/2.0 Midori/0.2.0',
		'test' => array(
			'browser' => 'midori',
			'browser_version' => '0.2',
			'engine' => 'gecko',
			'engine_version' => '1.81',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Midori 0.2 (Webkit)' => array(
		'ua' => 'Mozilla/5.0 (iPhone; U; Linux i686; pt-br) AppleWebKit/532+ (KHTML, like Gecko) Version/3.0 Mobile/1A538b Safari/419.3 Midori/0.2.0',
		'test' => array(
			'browser' => 'midori',
			'browser_version' => '0.2',
			'engine' => 'webkit',
			'engine_version' => '532',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Midori 0.1.7' => array(
		'ua' => array(
			'Mozilla/5.0 (X11; U; Linux; fr-fr) AppleWebKit/532+ (KHTML, like Gecko) Safari/419.3 Midori/0.1.7',
			'Midori/0.1.7 (X11; Linux; U; en-us) WebKit/532+'
		),
		'test' => array(
			'browser' => 'midori',
			'browser_version' => '0.17',
			'platform' => 'linux',
			'engine' => 'webkit',
			'engine_version' => '532',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'iCab >= 4' => array(
		'ua' => 'iCab/4.5 (Macintosh; U; Mac OS X Leopard 10.5.7)',
		'test' => array(
			'browser' => 'icab',
			'browser_version' => '4.5',
			'engine' => 'icab',
			'engine_version' => '4.5',
			'platform' => 'mac',
			'platform_version' => '10.57',
			'platform_type' => 'desktop'
		)
	),
	'iCab < 4' => array(
		'ua' => 'Mozilla/5.0 (compatible; iCab 3.0.5; Macintosh; U; PPC Mac OS)',
		'test' => array(
			'browser' => 'icab',
			'browser_version' => '3.05',
			'engine' => 'icab',
			'engine_version' => '3.05',
			'platform' => 'mac',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Epiphany >= 2.28' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; nl-nl) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ Epiphany/2.29.91',
		'test' => array(
			'browser' => 'epiphany',
			'browser_version' => '2.2991',
			'engine' => 'webkit',
			'engine_version' => '531.2',
			'platform' => 'Linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Epiphany <= 2.22' => array(
		'ua' => 'Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.8) Gecko/20080528 Fedora/2.24.3-4.fc10 Epiphany/2.22 Firefox/3.0',
		'test' => array(
			'browser' => 'epiphany',
			'browser_version' => '2.22',
			'engine' => 'gecko',
			'engine_version' => '1.908',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Konqueror 4.4' => array(
		'ua' => 'Mozilla/5.0 (compatible; Konqueror/4.4; Linux) KHTML/4.4.1 (like Gecko) Fedora/4.4.1-1.fc12',
		'test' => array(
			'browser' => 'konqueror',
			'browser_version' => '4.4',
			'engine' => 'khtml',
			'engine_version' => '4.41',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Konqueror 4.1 (BSD)' => array(
		'ua' => array(
			'Mozilla/5.0 (compatible; Konqueror/4.1; DragonFly) KHTML/4.1.4 (like Gecko)',
			'Mozilla/5.0 (compatible; Konqueror/4.1; OpenBSD) KHTML/4.1.4 (like Gecko)'
		),
		'test' => array(
			'browser' => 'konqueror',
			'browser_version' => '4.1',
			'engine' => 'khtml',
			'engine_version' => '4.14',
			'platform' => 'unix',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),
	'Konqueror 4.0' => array(
		'ua' => 'Mozilla/5.0 (compatible; Konqueror/4.0; Linux; x86_64) KHTML/4.0.2 (like Gecko)',
		'test' => array(
			'browser' => 'konqueror',
			'browser_version' => '4.0',
			'engine' => 'khtml',
			'engine_version' => '4.02',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'desktop'
		)
	),

	// Tablets and phones
	'iPad' => array(
		'ua' => 'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '4.04',
			'engine' => 'webkit',
			'engine_version' => '531.211',
			'platform' => 'mac',
			'platform_version' => '10',
			'platform_type' => 'desktop'
		)
	),
	'iPhone OS 3.0' => array(
		'ua' => 'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1A543a Safari/419.3',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '3',
			'engine' => 'webkit',
			'engine_version' => '420',
			'platform' => 'mac',
			'platform_version' => '10',
			'platform_type' => 'mobile'
		)
	),
	'iPhone OS 3.1.2' => array(
		'ua' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
		'test' => array(
			'browser' => 'safari',
			'browser_version' => '4',
			'engine' => 'webkit',
			'engine_version' => '528.18',
			'platform' => 'mac',
			'platform_version' => '10',
			'platform_type' => 'mobile'
		)
	),
	'Opera Mini' => array(
		'ua' => 'Opera/9.50 (J2ME/MIDP; Opera Mini/4.0.10031/298; U; en)',
		'test' => array(
			'browser' => 'opera mini',
			'browser_version' => '4.010031',
			'engine' => 'opera',
			'engine_version' => '4.010031',
			'platform' => false,
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'Blackberry 9XXX' => array(
		'ua' => 'BlackBerry9700/5.0.0.351 Profile/MIDP-2.1 Configuration/CLDC-1.1 VendorID/123',
		'test' => array(
			'browser' => 'blackberry',
			'browser_version' => false,
			'platform' => 'blackberry',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'Blackberry 88XX' => array(
		'ua' => 'BlackBerry8330/4.3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/105',
		'test' => array(
			'browser' => 'blackberry',
			'browser_version' => false,
			'platform' => 'blackberry',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'Blackberry 87XX' => array(
		'ua' => 'BlackBerry8703e/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/105',
		'test' => array(
			'browser' => 'blackberry',
			'browser_version' => false,
			'platform' => 'blackberry',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'Blackberry 81XX' => array(
		'ua' => 'BlackBerry8130/4.5.0.89 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/106',
		'test' => array(
			'browser' => 'blackberry',
			'browser_version' => false,
			'platform' => 'blackberry',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'Android 2.1' => array(
		'ua' => 'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
		'test' => array(
			'browser' => 'android',
			'browser_version' => '4.0',
			'engine' => 'webkit',
			'engine_version' => '530.17',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'NetFront @ PalmOS' => array(
		'ua' => 'Mozilla/4.0 (PDA; PalmOS/sony/model crdb/Revision:1.1.36(de)) NetFront/3.0',
		'test' => array(
			'browser' => 'netfront',
			'browser_version' => '3.0',
			'engine' => 'unknown',
			'engine_version' => 'unknown',
			'platform' => 'palm',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	),
	'NetFront @ Win CE' => array(
		'ua' => 'Mozilla/4.0 (PDA; Windows CE/0.9.3) NetFront/3.0',
		'test' => array(
			'browser' => 'netfront',
			'browser_version' => '3.0',
			'engine' => 'unknown',
			'engine_version' => 'unknown',
			'platform' => 'windows',
			'platform_version' => '0',
			'platform_type' => 'mobile'
		)
	),
	'HP' => array(
		'ua' => array(
			'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; HP iPAQ h6300)',
			'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)'
		),
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '4.01',
			'engine' => 'ie',
			'engine_version' => '4.01',
			'platform' => 'windows',
			'platform_version' => '0',
			'platform_type' => 'mobile'
		)
	),
	'HTC + IE' => array(
		'ua' => array(
			'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) USCCHTC6875',
			'Modzilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6850; Window Mobile 6.1 Professional',
			'HTC-P4600/1.2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.17.0',
			'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) '
		),
		'test' => array(
			'browser' => 'ie',
			'browser_version' => '6',
			'engine' => 'ie',
			'engine_version' => '6',
			'platform' => 'windows',
			'platform_version' => '0',
			'platform_type' => 'mobile'
		)
	),
	'HTC Touch PRO/PRO2 + Opera' => array(
		'ua' => array(
			'HTC-ST7377/1.59.502.3 (67150) Opera/9.50 (Windows NT 5.1; U; en) UP.Link/6.3.1.17.0',
			'htc_touch_pro2_t7373 opera/9.50 (windows nt 5.1; u; de)'
		),
		'test' => array(
			'browser' => 'opera',
			'browser_version' => '9.5',
			'engine' => 'opera',
			'engine_version' => '9.5',
			'platform' => 'windows',
			'platform_version' => '5.1',
			'platform_type' => 'mobile'
		)
	),
	'Kindle' => array(
		'ua' => 'Mozilla/4.0 (compatible; Linux 2.6.22) NetFront/3.4 Kindle/2.0 (screen 600x800)',
		'test' => array(
			'browser' => 'kindle',
			'browser_version' => '2.0',
			'platform' => 'linux',
			'platform_version' => 'unknown',
			'platform_type' => 'mobile'
		)
	)


);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Browser test</title>
	</head>
	<body>
		<h1>Test results</h1>
		<p>
			<a href="http://www.useragentstring.com/pages/useragentstring.php">Add more tests!</a>
		</p>
		<table border="1">
			<tr>
				<th rowspan="2">Subject</th>
				<th colspan="7">Results</th>
				<th rowspan="2">UA-String</th>
			</tr>
			<tr>
				<th>Browser</th>
				<th>Version</th>
				<th>Engine</th>
				<th>Version</th>
				<th>OS</th>
				<th>Version</th>
				<th>Type</th>
			</tr>

<?php

include('browser.php');

$properties = array('browser', 'browser_version', 'engine', 'engine_version','platform', 'platform_version', 'platform_type');

foreach($ua_tests as $title => $test){
	if(!isset($test['ua'])){
		$test['ua'] = '';
	}
	$uas = (is_array($test['ua'])) ? $test['ua'] : array($test['ua']);
	echo '<tr>';
	echo '<th rowspan="'.count($uas).'" id="'.preg_replace('/[^(\x20-\x7F)\x0A]*/','', $title).'"><a href="#'.preg_replace('/[^(\x20-\x7F)\x0A]*/','', $title).'">'.$title.'</a></th>';
	foreach($uas as $ua){
		if($ua != $uas[0]){
			echo '<tr>';
		}
		$browser = new Browser($ua);
		$browser->parse();
		foreach($properties as $property){
			if(!isset($test['test'][$property]) || $test['test'][$property] == ''){
				if(empty($browser->$property)){
					$message = 'Not tested, <b style="color:#FF0000">not found</b>';
				}
				else{
					$message = 'Not tested, found <b>'.$browser->$property.'</b>';
				}
				echo '<td style="background:#EEEEEE">'.$message.'</td>';
			}
			elseif(strtolower($test['test'][$property]) == strtolower($browser->$property)){
				echo '<td style="background:#00FF00">Pass ('.$browser->$property.')</td>';
			}
			else{
				echo '<td style="background:#FF0000">Fail (Expected <b>'.$test['test'][$property].'</b>, found <b>'.$browser->$property.'</b>)</td>';
			}
		}
		echo '<td>'.$ua.'</td>';
		echo '</tr>';
	}
}

?>

		</table>
	</body>
</html>
