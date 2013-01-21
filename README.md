# Google Developers Live_API

An API for Google Developers Live. You can get categories, list of shows and video information.

## About

* category.php	: You can get list of categories.
* browse.php	: You can get list of shows in selected category.
* shows.php		: You can get video information.

## Usage

### Step 1.
Get list of categories from category.php

ex) [http://mob.korea.ac.kr/enginie/gdlive/api/category.php](http://mob.korea.ac.kr/enginie/gdlive/api/category.php)

```xml
<root>
	<data>
		<number>0</number>
		<title>All Categories</title>
		<code>all</code>
	</data>
	<data>
		<number>1</number>
		<title>Ads</title>
		<code>ads</code>
	</data>
	...
	<data>
		<number>12</number>
		<title>YouTube</title>
		<code>youtube</code>
	</data>
</root>
```