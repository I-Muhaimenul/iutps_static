<!DOCTYPE>

<html>
<head>
  <title>IUTPS Home</title>

	<link rel="icon" href="images/black.png">
  <link rel="stylesheet" type="text/css" href="css/i_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <meta name="author" content="Muhaimenul Islam">
  <link rel="stylesheet" href="css/style.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript">
		$(document).ready(function () {
                $("#see").click(function (e) {
                    e.preventDefault();
                    $("#tog").toggle();
                });

                $("#see1").click(function (e) {
                    e.preventDefault();
                    $("#tog1").toggle();
                });
            });
	</script>

</head>

<body>


	<div id="main">
    <div id="header">
	<!--<div style="float:left;position:absolute;width:960px;">
	<input type="image" src="images/Admin.png" alt="IUTPS FB" width="65" height="60" title="IUTPS Facebook Page" style="float:left;position:absolute;right:0;" onClick="https://www.facebook.com/IUTPS/">
	</div>-->
	  <div id="banner" style="display: inline">
	    <div id="welcome">
		<br>
		<img width="100" height="90" src="images/black-02.png" alt="iutps logo" style="float: left"/>
		  <h1>IUT Photographic Society</h1>
		  <h2>Home to those who enjoys and practices photography</h2>
	    </div><!--close welcome-->
	    </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
	<nav class="menu">
      <ul class="clearfix">
        <li  class="current-item"><a href="index.php">Home</a></li>
        <!--<li><a href="mem_login.php">Your Profile</a></li>-->
		 <li><a href="blog.php">Latest Update</a></li>
		<li><a href="#">Information<span class="arrow">&#9660;</span></a>
			<ul class="sub-menu">
              <li><a href="information/history.php">History</a></li>
              <li><a href="information/services.php">Break The Circle</a></li>
			  <li><a href="information/member_list.php">Members</a></li>
			  <li><a href="information/faq.php">FAQ</a></li>
			  <li><a href="information/join.php">Join Us</a></li>
            </ul>
		</li>
        <li><a href="gallary.php">Gallery</a></li>
       <li><a href="submit.php">Submit Photo</a></li>
		<!--<li><a href="mem_welcome.php">Profile</a></li>-->
		<li><a href="contact.php">Contact Us</a></li>
		
      </ul>
	  </nav>
    </div><!--close menubar-->	
	
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest News</h2>
            <h3>IUTPS</h3>
            <p>IUTPS has launched their Website. For more news and updates go to Latest Update section.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Regular Events</h2>
            <h3>Break The Circle</h3>
            <p>The International Exhibition Organised by IUTPS. One of the most successful and prestigious exhibitions in Bangladesh. Go to Information -> <a href="information/services">Break The Circle</a> for details.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>Photo Of the Week</h3>
            <p>This is an award given every week, among the new Intake members to inspire them.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>IUTPS Intra Exhibition</h3>
            <p>Current students along with the Alumnus submit there photos & Exhibited in our on campus "Exhibition Corner" </p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

		<div class="sidebar">
			<div class="sidebar_item">
			<div>
				<div><h2>Calendar</h2></div>
				<div class="jquery-calendar"></div>
			</div>
			</div><!--close sidebar_item--> 
		</div><!--close sidebar--> 		
       </div><!--close sidebar_container-->	
	   
	<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/002.jpg" alt="&quot;Islamic University of Technology Campus&quot;" /></li>
		  
		  <li><img width="680" height="250" src="images/003.jpg" alt="&quot;Break The Circle&quot;" /></li>
		  <li><img width="680" height="250" src="images/004.jpg" alt="&quot;IUTPS team (Academic year 2015-2016)&quot;" /></li>
		  <li><img width="680" height="250" src="images/005.jpg" alt="&quot;Photo of the Week Contest&quot;" /></li>
		  <li><img width="680" height="250" src="images/006.jpg" alt="&quot;Honorable VC sir enjoying Break The Circle Season VI&quot;" /></li>
		  <li><img width="680" height="250" src="images/007.jpg" alt="&quot;Beauty of IUT at Night&quot;" /></li>
		  <li><img width="680" height="250" src="images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          
        </ul>
      </div> 
	   <!-------Developed By Muhaimenul Islam. facebook.com/muhaimenul--------->
	<!--<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div>   -->  
	   
	<div id="content">
        <div class="content_item">
		  <br/><br/><h1>Welcome To IUTPS</h1> 
	      <br/><br/><p>A platform for IUTians to exercise their creativity, IUTPS was formed in 2010 through the hands of some enthusiastic photographers.Since then it has grown from a handful of members to 104 active members and 45 ex-members who also participates with us in activities such as workshops, photo walks, photo addas etc.
</p>	  
		 <br/> <p>The moment of glory for IUTPS came in 2011 when IUTPS organized an international inter-university photography exhibition. With participants from 11 international and 30 national universities the event was a success. 

Since, its birth IUTPS has come a long way. Despite being a young organisation IUTPS promises to have a large impact in the photography scene of the nation.
 </p>
		  <br/><br/><br/><br/><br/><br/>
		  <div class="content_container">
		    <p>IUTPS has launched their official Website on freshers'17 event where they welcomed the first year students into the world of photography and to encourage them to carry on the legacy set by IUTPS. Honorable VC sir wiil be inaugurating this official website <span id="tog" style="display:none;">of IUTPS. Information and activities of the society can be get from this site.  </span></p>
		  	<div class="button_small">
		      <a href="#" id="see">Read more</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
          <div class="content_container">
		    <p>IUTPS arranges lots of events throughout the year. These events help to inspire photographers from all over the country. "Break The Circle" the International Exhibition Organised by IUTPS. This is one of the most successful and prestigious exhibitions organised in <span id="tog1" style="display:none;">Bangladesh. To get detais information and perticipate in the upcoming Event, <a href="information/services">Click Here</a>.
</span></p>          
		  	<div class="button_small">
		      <a href="#" id="see1">Read more</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->			  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
	<!-------Developed By Muhaimenul Islam. facebook.com/muhaimenul--------->
	
	<div id="content_bottom" >
	  <div class="content_bottom_container_box">
		<h4>Latest Blog Post</h4>
	    <p style="text-shadow: 0px 0px;">This section is under construction.Articles about phography and IUTPS.</p>
		<div class="readmore">
		  <a href="#" style="text-decoration: none;">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
       <h4>Latest News</h4>
	    <p style="text-shadow: 0px 0px;">Get Latest news and Updates from IUTPS facebook page.</p>
	    <div class="readmore">
		  <a a href="blog.php">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
		<h4>News Latter</h4>
	    <p style="text-shadow: 0px 0px;">This section is under construction. News Latter will be published here.</p>
	    <div class="readmore">
		  <a href="#" style="text-decoration: none;">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_bottom_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_bottom-->   
    </div><!--close main-->
	
	<div id="footer" style="color:#bab293; text-shadow: 0px 0px;">
	  © 2017 IUT Photographic Society - IUTPS | Copyright | Developed by : <a href="http://facebook.com/muhaimenul" style="color:#bcb69e;" title="Muhaimenul Islam &#xA Dept. of CSE &#xA IUT-OIC">Muhaimenul Islam</a>
    </div><!--close footer--> 
	
</body>
</html>