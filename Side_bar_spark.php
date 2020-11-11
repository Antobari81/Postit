<?php	
		
		/* publish Post-it message for non admin users */
		/* add this to functions.php */
	function side_bar_spark() {
					global $current_user;
			get_currentuserinfo();
			 //print_r($current_user);
		if($current_user->roles[0] !== 'administrator'){
			echo '
			<!-- CSS to print if user is not admin -->
		<style>
			div.side-spark {
					padding-top: 15px;
					padding-bottom: 15px;
					padding-right: 7px;
					padding-left: 8px;
					position: fixed;
					top: 220px;  
					left: 2%;
					width: 190px;
					border: 2px solid grey;
					z-index: 100;
					background: #FFFFD5;
					box-shadow: 6px 6px 7px #888888;
					border-radius: 15px;
					//transform: translate(50%, 50%);
				}
			.side-text-spark {
					font-size: 1.2em;
					font-weight: 400;
				}
			.side-text-spark a {
					color: green;
				}
			.close {
					color: grey;
					text-align: right;
					font-size: 1.2em;
					padding-top: 8px;
					padding-right: 10px;
					padding-bottom: 2px;
				}
			.close:hover {
					cursor: pointer;
		</style>

		<script>
			/* close post-it on click */
			function myFunction() {
				  var x = document.getElementById("post-it");
				  if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
			}
		</script>';
		}
		else {
			echo '
			<!-- CSS to print is user is admin -->
		<style>
			div.side-spark {
				display: none;
			}
		</style>';
		}
	}
		add_action('admin_head', 'side_bar_spark');
				
			
?>
