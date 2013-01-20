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
	...
	<nextPageToken>
E-ABAOsB8gEJZGF0ZV90aW1l-gEJCIDAiL6h0LIC7AGCAiVqE3N-Z29vZ2xlLWRldmVsb3BlcnNyDgsSBUV2ZW50GNeq0QMMFA==
	</nextPageToken>
</root>
```

* show.php : 동영상 페이지의 정보 반환. (작업중)
