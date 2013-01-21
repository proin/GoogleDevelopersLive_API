# Google Developers Live_API

An API for Google Developers Live. You can get categories, list of shows and video information.

## About

* category.php	: You can get list of categories.
* browse.php	: You can get list of shows in selected category.
* shows.php		: You can get video information.

## Usage

### Step 1.
Get list of categories from category.php

##### HTTP request
ex) `GET http://mob.korea.ac.kr/enginie/gdlive/api/category.php`

##### Parameters
There is no parameters.

##### Response
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
* \<title\>	 : Category Title
* \<code\> : Category Code


### Step 2.
Get list of shows in selected category from browse.php

[http://mob.korea.ac.kr/enginie/gdlive/api/browse.php?code=android&token=](http://mob.korea.ac.kr/enginie/gdlive/api/browse.php)

* code  : Send code parameter which is you want from category.php
* token : 

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