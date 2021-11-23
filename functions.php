<?php

// Top level menu items
const HOME = 0;
const ABOUT = 1;
const CONTACT = 2;
const SHOP = 3;

// Link common stylesheets
function importStylesheets(){

	echo'
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	';
		// Fonts from GoogleFonts
	echo'	
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Monoton&family=Poppins&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
	';
		// Icons from FontAwesome
	echo'	
		<script src="https://kit.fontawesome.com/74be4af6ba.js" crossorigin="anonymous"></script>
	';
}

// Write common meta tags
function writeMetaData(){
	echo'
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    	<meta name="author" content="Jake Weir">
	';
}

// Write first half of header markup
function headerStart(){
	echo"
		<header class='header-container'>
    		<div class='header-inner'>
				<div class='logo-container'>
        			<a href='index.php' class='logo'>
            			MusicOnline
        			</a>
				</div>
        		<nav> 
	";				// begin navbar
}

// Write second half of header markup and call displayIcons
function headerEnd(){
		echo"	</nav>";
			echo"	<ul class='icons'>";
				echo displayIcons();
			echo"	</ul>";
			echo"	<ul>";
				echo"	<li class='menu-items-item'>";
					echo"	<a href='javascript:void(0);' class='nav-toggle' onclick='toggleNav()'>";
						echo"	<i class='fa fa-bars'></i>";
					echo"	</a>";
				echo"	</li>";
		echo"	</div>";
	echo"	</header>";
}



//  Display navigation and give current page "active" class
function displayNav($section){

	// top level menu items stored as an array
	$menuItems = array('<a href="index.php" id="Home">Home</a>',
					   '<a href="about.php" id="About">About</a>',
					   '<a href="contact.php" id="Contact">Contact</a>',
					   '<a href="shop.php" id="Shop">Shop</a>');
	
	// write the opening structure of the menu
	echo '<ul class="menu-items">';
				
	// write the individual menu items
	$menuCount = count($menuItems);
	for ($i = 0; $i < $menuCount; $i++) {
		echo '<li class="menu-items-item';
		// Give the current page the class 'active'
		if ($section == $i) {
			echo ' active';
		}
		echo '">' . $menuItems[$i];
	}

	// write the closing structure of the menu
	echo '</ul>';
}

// Display Icon Menu
function displayIcons(){

	echo"
            <li class='menu-items-item'>
                <a href='javascript:void(0);' onclick='search()'>
                    <i class='fas fa-search'></i>
                </a>
            </li>
            <li class='menu-items-item'>
                <a href='login.php'>
                <i class='fas fa-user-circle'></i>
                </a>
            </li>
            <li class='menu-items-item'>
                <a href='basket.php'>
                <i class='fas fa-shopping-basket'></i>
                </a>
            </li>
		";
}

?>