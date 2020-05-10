<?php include('header.php'); ?>

		<style type="text/css">
			section.blog-post-area {
			    margin-top: 50px;
			    margin-bottom: 50px;
			}

			section.blog-post-area .big-image {
			    float: left;
			    width: 50%;
			    padding-right: 35px;
			}

			section.blog-post-area .big-text {
			    float: right;
			    width: 50%;
			    padding-right: 20px;
			}

			section.blog-post-area img {
			    width: 100%;
			}

			section.blog-post-area .big-text h3 {
			    margin: 10px 0 0;
			}

			section.blog-post-area .big-text h3 a {
			    font-family: Geometria;
			    font-weight: 700;
			    font-size: 40px;
			    color: #061e37;
			    text-decoration: none;
			}

			section.blog-post-area .big-text p {
			    color: #061e37;
			    font-family: Geometria;
			    font-size: 15px;
			    font-weight: 400;
			    line-height: 24px;
			    padding-top: 18px;
			    text-align: justify;
			    text-decoration: none;
			}

			section.blog-post-area .big-text h4 {
			    margin-top: 25px;
			    padding-top: 30px;
			    position: relative;
			}

			section.blog-post-area .big-text h4::before {
			    background: #e6e6e6 none repeat scroll 0 0;
			    content: "";
			    height: 1px;
			    position: absolute;
			    top: 0;
			    width: 100%;
			}

			section.blog-post-area .single-post {
			    padding-right: 20px;
			    margin: 100px 0px 0px;
			}

			section.blog-post-area h4 span {
			    font-family: Geometria;
			    font-weight: 400;
			    font-size: 15px;
			    color: #061e37;
			    text-decoration: none;
			}

			section.blog-post-area .big-text h4 span.author {
			    float: right
			}

			section.blog-post-area h4 span.author-name {
			    font-weight: 500;
			}

			.blog-post-area .single-post h3 a {
			    font-family: Geometria;
			    font-size: 28px;
			    font-weight: 700;
			    text-decoration: none;
			    color: #061e37;
			}

			.blog-post-area .single-post p {
			    color: #061e37;
			    font-family: Geometria;
			    font-size: 15px;
			    font-weight: 400;
			    line-height: 27px;
			    padding-top: 14px;
			    position: relative;
			    text-align: justify;
			}

			.blog-post-area .single-post h4 {
			    margin-bottom: 12px;
			    padding-top: 10px;
			    position: relative;
			}

			.blog-post-area .single-post h4::before {
			    background: #e6e6e6 none repeat scroll 0 0;
			    content: "";
			    height: 1px;
			    position: absolute;
			    top: 0;
			    width: 100%;
			}

			.blog-post-area .single-post p::before {
			    background: #e6e6e6 none repeat scroll 0 0;
			    content: "";
			    height: 1px;
			    position: absolute;
			    top: 0;
			    width: 100%;
			}

			.blog-post-area .single-post h3 {
			    margin: 25px 0 15px;
			}

		</style>

<!-- banner -->
	<div class="banner-1">
	</div> 
<!-- //banner -->
		<section class="blog-post-area">
            <div class="container">
            	<div class="w3ls-title" style="padding-bottom: 40px;">
					<h3 class="agileits-title">Blog</h3> 
				</div> 
                <div class="row">
                    <div class="blog-post-area-style">
                            <div class="col-md-12">
                                <div class="single-post-big">
                                	<?php
					                    // Include config file
					                    require_once "config.php";
					                    
					                    $id = $_GET['id'];
					                    // Attempt select query execution
					                    $sql = "SELECT * FROM `posts` WHERE `id` =".$id;
					                    if($result = mysqli_query($link, $sql)){
					                        if(mysqli_num_rows($result) > 0){
					                                while($row = mysqli_fetch_array($result)){
                                   						echo "<div class='big-image'>";
						                                    echo "<img src='". $row['image']. "' alt=''>";
														echo "</div>";
                                						echo "<div class='big-text'>";
			                                    			echo"<h3><a href='#'>". $row['title'] ."</a></h3>";
			                                    			echo"<p>". $row['body'] ."</p>";
			                                    			$sql1 = "SELECT username from users where id =".$id;
			                                    			$result1 = mysqli_query($link, $sql1);
			                                    			$row1 = mysqli_fetch_array($result1);
			                                    			echo "<h4><span class='date'>". date('d M Y',strtotime($row['created_at'])) ."</span><span class='author'>Posted By: <b class='author-name'>".ucfirst($row1['username'])."</b></span>
                                        					</h4>";
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

                                </div>
                            </div>
                    </div>
                </div>
            </div>
           
        </section>

<?php include('footer.php'); ?>