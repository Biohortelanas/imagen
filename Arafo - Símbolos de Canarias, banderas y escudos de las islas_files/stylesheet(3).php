/* Start of CMSMS style sheet 'simbc : estilos navegación' */
/* simbc : estilos navegación (menu) */


/* The wrapper determines the width of the menu elements */

#menuwrapper { 
	width: 100%; 
	}


/* Unless you know what you do, do not touch this */ 

#primary-nav { 
	list-style: none;  
	padding: 0px; 
	width:150px; 
        margin:3px 0px;
	}
#primary-nav ul {
	list-style: none; 
	margin: 0px; 
	padding: 0px; 	 
        margin-right: 0px; 
	position: absolute; 
	top: 0; 
	right: 100%; 
	display: none; 
	}
#primary-nav li { 
        margin-bottom: 3px; 
	position: relative; 
	}
#primary-nav li li{width:160px;
        margin-bottom: 0px; 
        margin-right: 10px; 
	position: relative; 
	}
#primary-nav ul li li{
        margin-right: 0px;
        }

/* Styling the basic apperance of the menu elements */

#primary-nav a { 
	color #666666; 
	display: block; 
	margin: 0px;  
	text-decoration: none; 
	}
#primary-nav li, #primary-nav li .menuparent { 
 
	}


/* Styling the basic apperance of the active page elements (shows what page in the menu is being displayed) */

#primary-nav li.menuactive { 
	color:#000
	}


/* Styling the basic apperance of the menuparents - here styled the same on hover (fixes IE bug) */


#primary-nav ul li. menuparent, #primary-nav ul li .menuparent:hover,#primary-nav li .menuparent, #primary-nav li .menuparent:hover { 
	background-image: url(xtras/simbc/arrow.gif); 
	background-position: center left; 
	background-repeat: no-repeat;
	}

/* Styling the apperance of menu items on hover */

#primary-nav li:hover, #primary-nav li.menuh, #primary-nav li.menuparenth, #primary-nav li.menuactiveh {
	}


/* The magic - set to work for up to a 3 level menu, but can be increased unlimited */

#primary-nav ul, #primary-nav li:hover ul, #primary-nav li:hover ul ul, #primary-nav li:hover ul ul ul,
#primary-nav li.menuparenth ul, #primary-nav li.menuparenth ul ul, #primary-nav li.menuparenth ul ul ul { 
	display: none; 
	}
#primary-nav li:hover ul, #primary-nav ul li:hover ul, #primary-nav ul ul li:hover ul, #primary-nav ul ul ul li:hover ul,
#primary-nav li.menuparenth ul, #primary-nav ul li.menuparenth ul, #primary-nav ul ul li.menuparenth ul, #primary-nav ul ul ul li.menuparenth ul { 
	display: block; 
	}


/* IE Hack, will cause the css to not validate */

#primary-nav li, #primary-nav li.menuparenth { _float: left; _height: 1%; }
#primary-nav li a { _height: 1%; }


/* End of 'simbc : estilos navegación' */

