  <?php switch ($_GET['page']) {
			case 'home':
			echo "<ul>
                    <li><a href='index.php?page=home' class='current'>Home</a></li>
	                <li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=artists'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join'>Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt'>ARRT!</a></li>
					<li><a href='index.php?page=links'>Links</a></li>
					
				</ul>";
			break;
			case 'about':
			echo "<ul>
                    <li><a href='index.php?page=home' >Home</a></li>
	                <li><a href='index.php?page=about' class='current'>About</a></li>
					<li><a href='index.php?page=artists'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join'>Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt'>ARRT!</a></li>
					<li><a href='index.php?page=links'>Links</a></li>
					
				</ul>";
			break;
			case 'artists':
			echo "<ul>
                    <li><a href='index.php?page=home' >Home</a></li>
	                <li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=artists' class='current'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join'>Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt'>ARRT!</a></li>
					<li><a href='index.php?page=links'>Links</a></li>
					
				</ul>";
			break;
			
			case 'links':
			echo "<ul>
                    <li><a href='index.php?page=home' >Home</a></li>
	                <li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=artists'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join'>Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt'>ARRT!</a></li>
					<li><a href='index.php?page=links' class='current'>Links</a></li>
					
				</ul>";
			break;
			case 'join':
			echo "<ul>
                    <li><a href='index.php?page=home' >Home</a></li>
	                <li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=artists'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join' class='current'>Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt'>ARRT!</a></li>
					<li><a href='index.php?page=links'>Links</a></li>
					
				</ul>";
			break;
			case 'arrt':
			echo "<ul>
                    <li><a href='index.php?page=home' >Home</a></li>
	                <li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=artists'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join' >Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt' class='current'>ARRT!</a></li>
					<li><a href='index.php?page=links'>Links</a></li>
					
				</ul>";
			break;
		
			default:
			echo "<ul>
                    <li><a href='index.php?page=home' class='current'>Home</a></li>
	                <li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=artists'>Artists</a></li>
					<li><a href='blog/' target='_blank'>Blog/Newsletter</a></li>
					<li><a href='index.php?page=join'>Join</a></li>
					<li ><a href='http://www.mainemasters.com/' target='_blank'>Maine Masters</a></li>
					<li><a href='index.php?page=arrt'>ARRT!</a></li>
					<li><a href='index.php?page=links'>Links</a></li>
					
				</ul>";
			break;
			}
			?>

