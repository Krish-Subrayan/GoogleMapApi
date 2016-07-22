<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="/favicon.ico" type="image/x-icon" rel="icon" />
      <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title> Bitcoin Classifieds-Bitcoin Accepting Stores Merchants-Bitcoin ATM Locations-Bitcoin Discount Offers</title>
      <meta name="keywords" content="Bitcoin Classifieds, Bitcoin Accepting Stores, Bitcoin Accepting Merchants, Bitcoin ATM Locations, Nearest Bitcoin ATM location, Bitcoin Deals, Bitcoin Discount Offers, Nearest Bitcoin Accepting Store, who accepts bitcoin, Bitcoin Directory, bitcoin accepting people" />
      <meta name="description" content="Directory listing of Bitcoin accepting merchants, Bitcoin classifieds, Bitcoin ATM locations, Bitcoin accepting stores, Bitcoin deals, Bitcoin discount offers, Bitcoin online stores, Bitcoin physical stores, Bitcoin classifieds where users can post products and services to trade in Bitcoin." />
      <meta name="generator" content="Bootply" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Open Graph data -->
      <meta property="og:title" content="Bitcoin ATM Map – Find Bitcoin ATM, Online Rates" />
      <meta property="og:type" content="article" />
      <meta property="og:description" content="Find Bitcoin ATM locations easily with our Bitcoin ATM Map. For many Bitcoin machines online rates are available." />
      <meta property="og:url" content="index.php_controller" />
      <meta property="og:image" content="assets/img/cover_image.png" />
      <!-- Twitter Card data -->
      <meta name="twitter:card" value="summary">
      <meta name="twitter:site" content="" />
      <meta name="twitter:title" content="Bitcoin ATM Map – Find Bitcoin ATM, Online Rates" />
      <meta name="twitter:description" content="Find Bitcoin ATM locations easily with our Bitcoin ATM Map. For many Bitcoin machines online rates are available." />
      <meta name="twitter:image" content="assets/img/cover_image.png" />
      <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <link href="/assets/css/styles.css?ver=4.1" rel="stylesheet">
      <link rel="stylesheet" href="/assets/css/jquery-ui.css">
      <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaPUOvueL6rh8f7fP8vrnQfTZcwh_oNww&libraries=places"></script>
   </head>
   <body>
      <span  style="z-index: 1;position: absolute;top: 0; margin: 0 auto;text-align: center;width: 93%;" id="hide_search"> <input id="pac-input" class="controls" type="text" placeholder="Search Box"><button class="controls" id="get_combined_result"> <i class="fa fa-search" aria-hidden="true"></i> </button></span>
      <div class="container" style="z-index: 1;position: absolute;top: 3%;width:auto;">
         <button id="filter_inital" class="btn-sample" style="display:none;" > Filter </button>
         <div id="filter_categories" style="display:none;" class="form-inline"> 
            <button class="stores btn-sample stores-category"> Filter Stores </button> 
            <button class="offers btn-sample offers-category"> Filter Offers </button> 
            <button class="atms btn-sample atms-category">   Filter ATMs   </button> 
            <button class="classifieds btn-sample classifieds-category"> Filter Classifieds</button> <br><br>
            <button class="btn-sample remove_filter" > Remove Filter </button>
         </div>
         <div id="filters-atm" style="display:none;" class="form-inline">
            <input type="search" id="place_atm" placeholder = "ATM NAME"  class=" form-control" style="width:39%;"> 
            <input type="text" id="zipcode" placeholder = "ZIPCODE"  class=" form-control"> 
            <select class="form-control"   id="distance">
               <option value="none">All Distance</option>
            </select>
            <br><br>
            <select class="form-control"   id="manufacturer"> </option> </select> 
            <select class="form-control"   id="coin">  </select> 
            <select class="form-control"   id="country">
               <option value=""> All Country </option>
            </select>
            <select class="form-control"   id="AllAtms"> </select>  
            <br><br>
            <div id="search_results"> </div>
            <button class="btn-sample filter_get_result_atm"> Filter </button>
            <button class="btn-sample remove_filter" > Remove Filter </button>
         </div>
         <div id="filters-stores" style="display:none;" class="form-inline" >
            <input type="search" id="place_store" placeholder = "STORE NAME"  class="form-control" style="width:39%;">
            <input type="text"   id="zipcode_store" placeholder = "ZIPCODE"  class="form-control"> 
            <select class="form-control"   id="distance-stores">
               <option value="none">All Distance</option>
            </select>
            <br><br>
            <select class="form-control"   id="category-stores"> </select> 
            <select class="form-control"   id="country-stores">
               <option value=""> All Country </option>
            </select>
            <select class="form-control"   id="coinType-stores"> </select>
            <select class="form-control"   id="all_stores-stores"> </select>
            <br><br>
            <button class="btn-sample filter_get_result_stores" style="display:none;"> Filter </button>
            <button class="btn-sample result_stores_filter"> Filter </button>
            <button class="btn-sample remove_filter"> Remove Filter </button>
         </div>
         <div id="filters-offers" style="display:none;" class="form-inline" >
            <select class="form-control"   id="category-offer"> </select> 
            <select class="form-control"   id="offer_type-offer"> </select> 
            <select class="form-control"   id="all_stores-offer"> </select> 
            <button class="btn-sample filter_result_offers" > Filter </button>
            <button class="btn-sample remove_filter" > Remove Filter     </button>
         </div>
         <div id="filters-classifieds" style="display:none;" class="form-inline">
            <input type="search" id="place_classified" placeholder = "CLASSIFIED NAME"  class="form-control" style="width:39%;"> 
            <input type="text"   id="zipcode_classified" placeholder = "ZIPCODE"  class=" form-control"> 
            <select class="form-control"   id="classified_distance">
               <option value="none">All Distance</option>
            </select>
            <br><br>
            <select class="form-control"   id="classified_coin"> </select> 
            <select class="form-control"   id="classified_category"> </select> 
            <select class="form-control"   id="classified_all"> </select> 
            <select class="form-control"   id="classified_most_recent"> </select> 
            <br><br>
            <button class="btn-sample filter_classified" > Filter </button>
            <button class="btn-sample remove_filter" > Remove Filter     </button>
         </div>
         <!--<center>
            <span id="result_div_atm"> </span>
            <span id="result_div_stores"> </span>
            <span id="result_div_offer"> </span>
            <span id="result_div_class"> </span>
            </center>-->
      </div>
      <center id="loader" style="margin-top: 20%;margin-left: 7%!important;">  <img src="/assets/img/ajax-loader.gif?ver=2.1" /> <br /></center>
      <div id="map-canvas"></div>
      <footer class="footer">
         <div class="container">
            <p class="text-muted">
            <center>
            <div class="social_media" style="cursor:pointer;position: absolute;bottom:2%;left: 1%;">
               <a href="#"><img src="/assets/img/facebook.png" id="fbShareBtn" height="30" width="30"></a>
               <a href="https://plus.google.com/share?url=http://www.coinmapia.com/" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="/assets/img/gplus.png" height="30" width="30"></a>
               <a href="https://twitter.com/intent/tweet?text=http://www.coinmapia.com/" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="/assets/img/twitter.png" height="30" width="30"></a>
               <!--<div style="position: absolute;bottom:24%;left: 24%;">
                  <div class="fb-share-button" data-href="http://www.coinmapia.com/index.php/map_controller/map" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstallioni.in%2Fmap%2Findex.php%2Fmap_controller%2Fmap&amp;src=sdkpreparse">Share</a></div>
                  </div>
                  <div>
                  	<a href="https://twitter.com/share" class="twitter-share-button" style="vertical-align: bottom!important; width: 69px; height: 20px;">Tweet</a>
                  	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                  
                  	<span style="vertical-align: bottom!important; width: 69px; height: 20px;"> 
                  	<script src="https://apis.google.com/js/platform.js" async defer></script>
                  	<g:plus action="share"></g:plus>
                  	</span>
                      </div>-->
            </div>
         </div>
      </footer>
      <!-- script references -->
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/jquery-ui.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/assets/js/markerclusterer.js"></script>
      <script type="text/javascript" src="/assets/js/custom-map.js"></script>
   </body>
</html>
