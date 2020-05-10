<?php include('header.php'); ?>

<!-- banner -->
	<div class="banner-1">
	</div> 
	<!-- //banner -->
<!-- news -->
	<div class="news">
		<div class="container"> 
			<div class="w3ls-title">
				<h3 class="agileits-title">Blog</h3> 
			</div> 
			<div class="agileits_w3layouts_news_grids"> 
					<?php
	                    // Include config file
	                    require_once "config.php";
	                    
	                    // Attempt select query execution
	                    $sql = "SELECT * FROM posts";
	                    if($result = mysqli_query($link, $sql)){
	                        if(mysqli_num_rows($result) > 0){
	                                while($row = mysqli_fetch_array($result)){
	                                
	                                    echo "<div class='col-md-3 col-xs-6 agileits_w3layouts_news_grid'>";
											echo "<div class='w3_agileits_news_grid'>";
												echo "<img src='". $row['image']. "' alt=' ' class='img-responsive' />";
												echo "<div class='w3_agileits_news_grid_pos'>
														<h4>". date('d M Y',strtotime($row['created_at'])) ."</h4>
											          </div>";
		                                    echo "</div>";
		                                    echo "<h5><a href='blog-read.php?id=". $row['id'] ."'>". $row['title'] ."</a></h5>";
											echo "<p>". $row['body'] ."</p>";
											echo "</div>";
	                                }
	                            // Free result set
	                            mysqli_free_result($result);
	                        } else{
	                            echo "<p class='lead'><em>No records were found.</em></p>";
	                        }
	                    } else{
	                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	                    }
	 
	                    // Close connection
	                    mysqli_close($link);
	                ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news --> 
<?php include('footer.php'); ?>