<?php 

//echo password_hash("admin12345", PASSWORD_DEFAULT);
//die();

	require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
	require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>


	<div id="colorlib-page">
		<?php
			require($_SERVER['DOCUMENT_ROOT'] . '/partials/sidebar.php');
		?>

		<div id="colorlib-main">
		<?php 
			$page = 'home';
			if(isset($_GET['p'])) {
				switch ($_GET['p']) {
					case 'home':
						$page = 'home';
						break;
					case 'photography':
						$page = 'photography';
						break;
						case 'login':
						$page = 'login';
						break;
					default:
						$page = 'home';
						break;
				}
			}
			
			//require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/home.php');
			require($_SERVER['DOCUMENT_ROOT'] . "/partials/pages/" . $page . ".php");
		
			require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
		?>
		
    </div><!-- END COLORLIB-MAIN -->
  </div><!-- END COLORLIB-PAGE -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/scripts.php'); ?>