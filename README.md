# Google Developers Live_API

An API for Google Developers Live. You can get categories, list of shows and video information.

## About

* category.php : It contains list of Google Developers Live categories.
* browse.php : Returns a list of shows that match the API request parameters.
* shows.php	 : There are some information about selected YouTube Video.

## Usage

### Step 1.
Get list of categories from `category.php`.

##### HTTP request
ex) `GET http://mob.korea.ac.kr/enginie/gdlive/api/category.php`

##### Parameters
There is no parameters.

##### Response
* \<title\> : The title of category. _(string)_
* \<code\> : The code of category, which is use for `browse.php`. _(string)_

```xml
<?xml version='1.0' encoding='UTF-8'?>
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

### Step 2.
Get list of shows in selected category from `brwose.php`.

##### HTTP request
ex) `GET http://mob.korea.ac.kr/enginie/gdlive/api/browse.php`

##### Parameters
* code : The **code** parameter which is from response of ‘category.php’, specifies a Google Developers Live category. _(string)_
* token : The **token** parameter identifies a specific page in the result set that should be returned. In an API response, the **nextPageToken** properties identify other pages that could be retrieved. _(string)_

##### Response
* \<title\> : The title of video. _(string)_
* \<link\> : The sub-URL of show’s web page. _(string)_
* \<image\> : The URL of preview image. (string)
* \<date\> : The date when show was updated. _(string)_
* \<nextPageToken\> : The token that can be used as the value of the **token** parameter to retrieve the next page in the result set. _(string)_

```xml
<?xml version='1.0' encoding='UTF-8'?>
<root>
	<data>
		<number>0</number>
		<title>GDL Presents: Santa Tracker Android</title>
		<link>/live/shows/37941846/</link>
		<image>http://i.ytimg.com/vi/rrrNH7iDV6A/mqdefault.jpg</image>
		<date>Jan. 18, 2013, 2:30 p.m.</date>
	</data>
	<data>
		<number>1</number>
		<title>GDL Presents: Santa Tracker Chrome</title>
		<link>/live/shows/34197954/</link>
		<image>http://i.ytimg.com/vi/V2c8TKDVS8Y/mqdefault.jpg</image>
		<date>Jan. 18, 2013, 2:00 p.m.</date>
	</data>
	...
	<data>
		<number>11</number>
		<title>Android Design in Action: Iterative Improvements</title>
		<link>/live/shows/33890230/</link>
		<image>http://i.ytimg.com/vi/8dzMHKDkV6U/mqdefault.jpg</image>
		<date>Jan. 15, 2013, 10:30 a.m.</date>
	</data>
	<nextPageToken>
		E-ABAOsB8gEJZGF0ZV90aW1l-gEJCIDcvfrW6rQC7AGCAiVqE3N-Z29vZ2xlLWRldmVsb3BlcnNyDgsSBUV2ZW50GLa_lBAMFA==
	</nextPageToken>
</root>
```

### Step 3.
Get video information from `shows.php`.

##### HTTP request
ex) `GET http://mob.korea.ac.kr/enginie/gdlive/api/shows.php`

##### Parameters
* link : The **link** parameter which is from response of ‘browse.php’, specifies a selected Google Developers Live video’s web page. _(string)_

##### Response
* \<id\> : The id specifies the YouTube video ID. _(string)_
* \<youtube\> : The URL of YouTube video. _(string)_
* \<embed\> : An embed player for YouTube video. _(string)_
* \<about\> : The Description about YouTube video. _(string)_

```xml
<?xml version='1.0' encoding='UTF-8'?>
<root>
	<data>
		<number>0</number>
		<id>rrrNH7iDV6A</id>
		<youtube>http://www.youtube.com/watch?v=rrrNH7iDV6A</youtube>
		<embed>http://www.youtube.com/embed/rrrNH7iDV6A</embed>
		<about>
			About: Santa went mobile this year! Join the Android team for a behind-the-scenes look at the making-of the Santa Tracker mobile app.
		</about>
	</data>
</root>
```