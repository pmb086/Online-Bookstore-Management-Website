<ul>
			<li id="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';
							}
						?>
			</li>

			
			<li>
				<h2>Categories</h2>
				<ul>
					
					
					<!--
					<li><a href="#">Books</a></li>
					<li><a href="#">Movies</a></li>
					<li><a href="#">Periodicals</a></li>
					-->
								<?php
										
			
										$query="select * from category ";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="booklist.php?subcatid='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
				</ul>
			</li>
			
		</ul>