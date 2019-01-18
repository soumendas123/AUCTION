<html>
<head>
<style>
/* Nested Side Bar Menu
	Project URL: http://www.dynamicdrive.com/style/csslibrary/item/nested_side_bar_menu/
*/

.nestedsidemenu {
    font: bold 16px 'Bitter', sans-serif;
		position: relative;
    width: 220px;
}


/* Top Level Menu */
.nestedsidemenu ul {
    z-index: 100;
    margin: 0;
    padding: 0;
    position: relative;
    list-style: none;
}

/* Top level list items */
.nestedsidemenu ul li {
    position: relative;
}

/* Top level menu items link style */
.nestedsidemenu ul li a, .nestedsidemenu ul li span {
    display: block;
    position: relative;
    /* background of menu items (default state) */
    background: #008c9e;
    color: white;
    padding: 14px 10px;
    color: #2d2b2b;
    text-decoration: none;
}


.nestedsidemenu ul li a:link, .nestedsidemenu ul li a:visited {
    color: white;
}

/* Top level menu items link style on hover and when active */
.nestedsidemenu ul li:hover > a {
    background: #005f6b;
}

/* Sub ULs style */
.nestedsidemenu ul li ul {
    position: absolute;
    left: -5000px;
		top: 0;
    opacity: 0;
    width: 230px;
    visibility: hidden;
    box-shadow: 2px 2px 5px gray;
    -webkit-transition: opacity .3s, visibility 0s .3s, left 0s .3s;
    transition: opacity .3s, visibility 0s .3s, left 0s .3s;
}

/* First Sub Levels UL style on hover */
.nestedsidemenu ul li:hover > ul {
    visibility: visible;
    left: 100%;
    opacity: 1;
    -webkit-transition: opacity .5s;
    transition: opacity .5s;
}

/* Sub level Menu list items (alters style from Top level List Items) */
.nestedsidemenu ul li ul li {
    display: list-item;
    float: none;
}

/* 2nd and beyond Sub Levels vertical offset after 1st level sub menu */
.nestedsidemenu ul li ul li ul {
    top: 0;
    left: 100%;
}

/* Sub Levels link style on hover and when active */
.nestedsidemenu ul ul li:hover > a {
    background: #52616a;
}

/* Sub Levels UL style on hover */
.nestedsidemenu ul ul li:hover > ul {
    left: 100%;
}

/* Sub level menu links style */
.nestedsidemenu ul li ul li a {
    font: normal 14px 'Bitter', sans-serif;
    padding: 10px;
    margin: 0;
    background: #4ea1d3;
    border-right: none;
    border-top-width: 0;
}

/* LIs with a sub UL style */
.nestedsidemenu ul li > a {
    /* add padding to accomodate arrow inside LIs */
    padding-right: 25px;
}

/* LIs with NO sub UL style */
.nestedsidemenu ul li > a:only-child {
    /* undo padding for non submenu LIs */
    padding-right: 10px;
}

/* LIs with a sub UL pseudo class */
.nestedsidemenu ul li > a:after {
    /* add arrow inside LIs */
    content: "";
    position: absolute;
    height: 0;
    width: 0;
    border: 5px solid transparent;
    border-left-color: #FFFFFF;
    top: 40%;
    right: 8px;
}

/* LIs with NO sub UL pseudo class */
.nestedsidemenu ul li > a:only-child:after {
    /* undo arrow for non submenu LIs */
    display: none;
}


/* ####### responsive layout CSS ####### */

@media (max-width: 923px) {
    /* FIRST breaking point
			Last top menu items' sub ULs should drop to the left (instead of right)
			Change 1 to a different number to exclude/include more top menu items based on menu and max-width setting above
		*/

		.nestedsidemenu ul li:nth-last-of-type(-n+1) ul li:hover > ul {
        left: -100%;
    }
}

@media (max-width: 500px) {
    /* SECOND breaking point 
			For mobile and screen browser windows
			Get Sub ULs to expand entire width of document and drop down
			Changes menu reveal type from "visibility" to "display" to overcome bug. See comments below
		*/
    .nestedsidemenu{
        width: 100%;
    }
    
    .nestedsidemenu ul li > a:after {
        /* add arrow inside LIs */
        content: "";
        position: absolute;
        height: 0;
        width: 0;
        border: 5px solid transparent;
        border-left-color: transparent;
        border-top-color: #fff;
        top: 40%;
        right: 8px;
    }

	.nestedsidemenu ul li {
        position: static;
    }

    .nestedsidemenu ul li ul {
        width: 100%;
        border-top: 2px solid rgba(0,0,0,.6);
		/* change menu reveal type from "visibility" to "display". Former seems to cause browser to jump to top of page sometimes when menu header is tapped on */
		display: none;
    }

    .nestedsidemenu ul li:hover > ul {
		display: block;
        left: 0 !important;
        top: auto;
        box-shadow: 0 0 12px gray;
    }


}
</style>
</head>
<body>
<div class="nestedsidemenu">
<ul>
<li><a href=""<?php echo base_url();?>index.php/Auction/auction_view">HOME</a></li>
<li><a href="javascript:vold(0)">SELLER</a>
  <ul>
	  <li><a href="<?php echo base_url();?>index.php/Auction/sell">REGISTRATION</a></li>

	  <li><a href="<?php echo base_url();?>index.php/Auction/SLogin">LOGIN</a></li>
	  
  </ul>
</li>
<li><a href="javascript:vold(0)">BUYER</a>
  <ul>
	  <li><a href="<?php echo base_url();?>index.php/Auction/Buy">REGISTRATION</a></li>
	  <li><a href="<?php echo base_url();?>index.php/Auction/BLogin">LOG IN</a></li>
	 
	    <ul>
		   
			</ul>
		</li>
	
  </ul>
</li>
<li><a href="#">CURRENT AUCTION</a></li>
<li><a href="javascript:vold(0)">FINISHED AUCTION</a>
  <ul>
	 
	    <ul>
		    <li><a href="#">Sub Item 3.2.1</a></li>
		    <li><a href="#">Sub Item 3.2.2</a></li>
		    <li><a href="javascript:vold(0)">Folder 3.2.3</a>
					<ul>
			    		<li><a href="#">Sub Item 3.2.3.1</a></li>
			    		<li><a href="#">Sub Item 3.2.3.2</a></li>
			    		<li><a href="#">Sub Item 3.2.3.3</a></li>
			    		<li><a href="#">Sub Item 3.2.3.4</a></li>
			    		<li><a href="#">Sub Item 3.2.3.5</a></li>
					</ul>
		    </li>
		    <li><a href="#">Sub Item 3.2.4</a></li>
	    </ul>
	  </li>
  </ul>
</li>

</ul>
<br style="clear: left" />
</div>

</body>
</html>

