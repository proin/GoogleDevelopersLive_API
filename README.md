GoogleDevelopersLive_API
=================

An API for Parsing Google Developers Website

* category.php : Google Developers Live의 동영상 카테고리 반환. (작업중)


* browse.php : 각 카테고리별 동영상 목록 반환.
	1. Parameter
		- category : category.php 에서 반환한, 각 카테고리별 고유 값
		- token		 : parameter.php 에서 반환한, 다음 페이지의 고유 값 (미입력시 첫페이지)
		- 사용 예 : [http://mob.korea.ac.kr/enginie/gdlive/browse.php?category=ads&token=](http://mob.korea.ac.kr/enginie/gdlive/browse.php?category=ads&token=)
	
	2. XML
```
<root>
<data>
<number>0</number>
<title>Getting started with AdMob on Android</title>
<link>https://developers.google.com/live/shows/15536011/</link>
<image>http://i.ytimg.com/vi/GSZTZDsHG_o/mqdefault.jpg</image>
<date>Dec. 18, 2012, 11:00 a.m.</date>
</data>
<data>
<number>1</number>
<title>DoubleClick for Publishers API Hangout with maanto</title>
<link>https://developers.google.com/live/shows/11895829/</link>
<image>http://i.ytimg.com/vi/wrufDj735yE/mqdefault.jpg</image>
<date>Dec. 13, 2012, 9:00 a.m.</date>
</data>
<data>
<number>2</number>
<title>Getting Started with the AdSense Management API</title>
<link>https://developers.google.com/live/shows/11009204/</link>
<image>http://i.ytimg.com/vi/AF2NEtfscI8/mqdefault.jpg</image>
<date>Dec. 12, 2012, 5:00 p.m.</date>
</data>
<data>
<number>3</number>
<title>
DoubleClick For Publishers API Hangout with Yieldex
</title>
<link>https://developers.google.com/live/shows/11515610/</link>
<image>http://i.ytimg.com/vi/p2n_zL57MAk/mqdefault.jpg</image>
<date>Dec. 12, 2012, 11:45 a.m.</date>
</data>
<data>
<number>4</number>
<title>
GDL Italia - AdWords Scripts: Nuove soluzioni per automazione con AdWords
</title>
<link>https://developers.google.com/live/shows/11319243/</link>
<image>http://i.ytimg.com/vi/bTzo6XbOdCQ/mqdefault.jpg</image>
<date>Nov. 30, 2012, 10:30 a.m.</date>
</data>
<data>
<number>5</number>
<title>Getting Started with the AdSense Host API</title>
<link>https://developers.google.com/live/shows/10753510/</link>
<image>http://i.ytimg.com/vi/x71eomcpcdw/mqdefault.jpg</image>
<date>Nov. 28, 2012, 5:00 p.m.</date>
</data>
<data>
<number>6</number>
<title>
GDL Presents: Creative Sandbox | DoubleClick Rich Media
</title>
<link>https://developers.google.com/live/shows/10384089/</link>
<image>http://i.ytimg.com/vi/K0EKrqPY5sE/mqdefault.jpg</image>
<date>Nov. 14, 2012, 2:30 p.m.</date>
</data>
<data>
<number>7</number>
<title>GDL Presents: Women Techmakers with JESS3</title>
<link>https://developers.google.com/live/shows/10437033/</link>
<image>http://i.ytimg.com/vi/HTg8QRaiJe8/mqdefault.jpg</image>
<date>Nov. 5, 2012, 2:30 p.m.</date>
</data>
<data>
<number>8</number>
<title>Content API for Shopping Office Hours</title>
<link>https://developers.google.com/live/shows/10265124/</link>
<image>http://i.ytimg.com/vi/jD_OG0JMLYU/mqdefault.jpg</image>
<date>Nov. 5, 2012, 7:00 p.m.</date>
</data>
<data>
<number>9</number>
<title>AdWords API GDL - AWQL</title>
<link>https://developers.google.com/live/shows/9810002/</link>
<image>http://i.ytimg.com/vi/uSL3-7q9-Hs/mqdefault.jpg</image>
<date>Oct. 24, 2012, 2:00 p.m.</date>
</data>
<data>
<number>10</number>
<title>
[JP æ¥æ¬èª] AdWords API GDL v201209ã®æ°æ©è½ç´¹ä»ã¨ãç§»è¡ã¬ã¤ã
</title>
<link>https://developers.google.com/live/shows/9136031/</link>
<image>http://i.ytimg.com/vi/Oolhsh_Euvs/mqdefault.jpg</image>
<date>Oct. 23, 2012, 5:00 p.m.</date>
</data>
<data>
<number>11</number>
<title>
[JP æ¥æ¬èª] AdWords API GDL - AdWords ã¹ã¯ãªãã ã®ãç´¹ä»
</title>
<link>https://developers.google.com/live/shows/7624023/</link>
<image>http://i.ytimg.com/vi/xkAJUawSR6E/mqdefault.jpg</image>
<date>Sept. 25, 2012, 5:00 p.m.</date>
</data>
<nextPageToken>
E-ABAOsB8gEJZGF0ZV90aW1l-gEJCIDAiL6h0LIC7AGCAiVqE3N-Z29vZ2xlLWRldmVsb3BlcnNyDgsSBUV2ZW50GNeq0QMMFA==
</nextPageToken>
</root>
```

* show.php : 동영상 페이지의 정보 반환. (작업중)
