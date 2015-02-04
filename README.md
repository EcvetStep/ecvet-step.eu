Development notes & log
=======================

```
$ sudo systemctl start httpd
$ sudo systemctl start php-fpm
$ sudo systemctl start mysqld
```
http://localhost/ecvet-step.eu
http://localhost/ecvet-step.eu/wp-admin  (tkout / .....)

Sun, 24 Aug 2014 @salamina
--------------------------
> upload to new.ecvet-step.eu
> twitter feeds
> facebook activity

+ fixed slider not functioning!
+ contact form! (contact form 7 + flamingo)
+ duplicator plugin: fixed and checked with m!
+ li items, colored bullet!



Sat, 23 Aug 2014 @k6 with m!
----------------------------
< upload to new.ecvet-step.eu
> slider not functioning (javascript?)
> contact form
> twitter feeds
> li items have no bullet
> facebook activity


Wed, 20 Aug 2014 @dio
---------------------
+ footer badges

Tue, 19 Aug 2014 @dio
---------------------
+ infobox


Sun, 17 Aug 2014 @home
----------------------
+ going back to Catch Kathmandu - το customizr το κρατάμε για το σχολείο!
+ breadcrump με το @Breadcrumb NavXT@ plugin    
< li items have no bullet
    
Sat, 16 Aug 2014 @salamina  
--------------------------
+ trying customizr theme!
+ breadcrump (yes with customizr)
- contact form
+ kati den paei kala me to slider (javascript?) - fixed with customzr
~ check structure (see EOF)
< add compliance logos at the footer
< add info box (see the ECVET-STEP_WP6_Website-structure_v0.2.3)
< twitter feeds
< facebook activity
+ social links --> Catch Cathmandu Social and Customzr theme options
+ google analytics
+ smaller line spacing (style.css:296 - line-height )
+ slightly changed footer (see EOF) [catchkathmandu-functions.php]


Fri, 15 Aug 2014 @home
----------------------
+ configured side menu: 
  for example, visit http://localhost/ecvet-step.eu/?page_id=127 and you can see the other partners on the sidebar
+ remove comments from 1st page (sto edit page, screen options, check discussion)
> vima! (83.212.169.81) apt-get install acpi-support-base

Sun, 3 Aug 2014 @home with m!
-----------------------------
+ side menu, secondary level
+ css side menu


Wed, 30 Jul 2014 @home
----------------------
+ Launched site! http://ecvet-step.eu (database: dev/d3v)
+ έλεγχος άλλων template, κανένα δεν είναι αρκετά καλό, παραμένω στο Catch Kathmandu
+ αλλαγή των μεγεθών των εικονών:
    - Feature Post Slider Width: 1280px Height: 550px  --> 350px
    - Featured Image in Homepage and Archive Page Width: 750px Height: 499px --> 290 px
    - Small Thumbnail Width: 360px Height: 240px
+ επιλογή widgets: Catch Kathmandu Pro currently has 6 widgetized areas (Sidebars)
+ fix size of menu (smaller)
+ added featured content (3 columns, 3 featured items)
+ removed branding and donation links from theme settings
+ layout of first page almost complete


Tue, 29 Jul 2014 @salamina
--------------------------
~ πολύ λίγη δουλειά


Mon, 28 Jul 2014 @syntagma
-------------------------
+ created pages and structure according to ECVET-STEP_WP6_Website-structure_v0.2.3.docx
+ started visualising menu: http://catchthemes.com/blog/custom-menus-wordpress-themes/
+ follow the instructions from here: http://catchthemes.com/theme-instructions/catch-kathmandu/
* change featured slider from 1280x550 to 1280x350


Sat, 26 Jul 2014 @home
----------------------
+ create ECVET STEP theme, based on Catch Kathmandu v1.8.2
+ LLP Footer
* Layout first page
- vima: https://vima.grnet.gr/user/login csgouro  $123ero!
    + applied: Main server for the ecvet-step project (partially funded by LLP). Will host the project's web server (wordpress), a redmine-based backend site and some more web services and content.
    + admin contact is tasos



Sun, 13 Jul 2014 @M!
--------------------
+ git setup, origin is on http://dev.tafkey.eu/ecvet-step/ecvet-step-eu
+ setup __Catch Kathmandu__ theme
- add logos, moto and colors of the ECVET-STEP pack
    + Strengthening Training to Employment Pathways 
    + blue: 074f94
    + green: 8fac3d
    + orange: f6941e
    + sea-blue: 64a9c5
    + dark-red: d61e43
    + "official" ecvet-step colors & typography:
        ~ http://www.ecvet-team.eu/system/files/documents/963/ecvet-corporate-identity.pdf
        ~ blue1(22,125,176), blue2(0,64,129), red(7,95,43), green(151,173,22), 
          orange1(248,179,51), orange2(237,124,19), red(228,24,56) 
        ~ complimentary: blue3(142,19,126)    
        ~ ECVET name: based on Eurostile LT Bold Extended #2
        ~ Unroll typography: Helvetica Neue LT 55 Roman
- add some content to start with



Resources
---------
* http://www.pinterest.com/pin/466615211364128815/  Fence Steps
    - http://scandanavianblonde.tumblr.com/post/45036593005
* http://commons.wikimedia.org/wiki/File:Barley_field-2007-02-22%28large%29.jpg
    + Author    Victor Szalvay
    + Creative Commons Attribution-Share Alike 2.0 Generic license.        


Main components
===============


Structure
---------
> (from project_website_guidelines_en.pdf)

* Homepage
* Project Overview
* Consortium
* Management Structure
* Scientific Methodology and Work Packages
* Case Studies
* Deliverables and Publications
* Events
* Media centre
* Glossary


**Consortium:** Include a list of partners with their country of origin, logo, principle scientific contact person and website address. Please update if new parties join the consortium. *A map* showing the geographical distribution of the participating institutions should also be included.


1. Homepage
2. Project overview
    a. Vision
    b. Aim and objectives
    c. Audience and expected impact
    d. Scientific methodology
    e. Work-packages
3. Consortium
    a. Overview (with a map)
    b. One page per partner
4. Case Studies
    a. Overview
    b. One page per different stakeholders
5. Blog / News
6. Events
7. Questions and Answers (Discussion)
8. Media Center
    a. Project flyers
    b. Deliverables
    c. Newsletter (?)
    d. Presentations
    e. Publications
9. Links



Secondary Menu
--------------
1. Search box
2. RSS/Atom Feed
3. Sitemap
4. Contact (link to a contact form that will allow visitors to provide feedback or request further information).
5. Glossary
6. Disclaimer
7. Headquarters (intranet)

Footer
------
> (from project_website_guidelines_en.pdf)

"This project is supported by the European Commission under the Environment (including climate change) Theme of the 7 th Framework Programme for Research and Technological Development".

Compliance Logos
a. W3C XHTML 1.0
b. W3C CSS
c. WCAG 2.0
d. CC-BY



Post formats
------------

http://codex.wordpress.org/Post_Formats

* aside - Typically styled without a title. Similar to a Facebook note update.
* gallery - A gallery of images. Post will likely contain a gallery shortcode and will have image attachments.
* link - A link to another site. Themes may wish to use the first <a href=””> tag in the post content as the external link for that post. An alternative approach could be if the post consists only of a URL, then that will be the URL and the title (post_title) will be the name attached to the anchor for it.
* image - A single image. The first <img /> tag in the post could be considered the image. Alternatively, if the post consists only of a URL, that will be the image URL and the title of the post (post_title) will be the title attribute for the image.
* quote - A quotation. Probably will contain a blockquote holding the quote content. Alternatively, the quote may be just the content, with the source/author being the title.
* status - A short status update, similar to a Twitter status update.
* video - A single video or video playlist. The first <video /> tag or object/embed in the post content could be considered the video. Alternatively, if the post consists only of a URL, that will be the video URL. May also contain the video as an attachment to the post, if video support is enabled on the blog (like via a plugin).
* audio - An audio file or playlist. Could be used for Podcasting.
* chat - A chat transcript, like so: 


Analytics
---------

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47075667-2', 'auto');
  ga('send', 'pageview');

</script>



Project No. 539816-LLP-1-2013-1-GR-LEONARDO-LMP

DEVELOPMENT OF INNOVATION, LEONARDO DA VINCI 
LIFELONG LEARNING PROGRAMME
ECVET STEP (Project Number 539816-LLP-1-2013-1-GR-LEONARDO-LMP)
Project Number: 539816-LLP-1-2013-1-GR-LEONARDO-LMP
* __Period:__ 01/01/2014 - 31/12/2015



### LOGOs

* html5
* css
* accessibility
* cc by

<a href="http://www.w3.org/html/logo/">
<img src="html5-badge-h-css3-device-multimedia-performance-semantics.png" width="261" height="64" alt="HTML5 Powered with CSS3 / Styling, Device Access, Multimedia, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Device Access, Multimedia, Performance &amp; Integration, and Semantics">
</a>


<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10-blue.png" alt="Valid XHTML 1.0 Transitional" height="31" width="88"></a>
 &nbsp;&nbsp;<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valido!">
</a>


 <img src="img/footer-cc.png" alt="Creative Commons" height="32" width="88">
 <p>Except where otherwise noted, content on this site is licensed under a Creative Commons<br><a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons Attribution 3.0 License">Attribution 3.0 License</a></p>


<a href="http://www.w3.org/WAI/WCAG1AA-Conformance"
      title="Explanation of Level Double-A Conformance">
  <img height="32" width="88" 
          src="http://www.w3.org/WAI/wcag1AA"
          alt="Level Double-A conformance icon, 
          W3C-WAI Web Content Accessibility Guidelines 1.0"></a>



### INFOBOX

http://www.feem-project.net/epiwater/
