<?php include "includes/admin_header.php" ?>

<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/admin_navigation.php" ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Welcome to CMS:
						<span class="text-success">
							<?php
								echo $_SESSION['username'];
							?>
						</span>
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-file"></i> Blank Page
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->

			<!-- /.row -->

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-file-text fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<?php
										$query = "SELECT * FROM cms.posts";
										$select_all_posts = mysqli_query($dbConnection, $query);
										$post_count = mysqli_num_rows($select_all_posts);
									?>
									<div class='huge'><?php echo $post_count; ?></div>
									<div>Posts</div>
								</div>
							</div>
						</div>
						<a href="posts.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-comments fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class='huge'>
										<?php
											$query = "SELECT * FROM cms.comments";
											$select_all_comments = mysqli_query($dbConnection, $query);
											$comment_count = mysqli_num_rows($select_all_comments);
											echo $comment_count;
										?>
									</div>
									<div>Comments</div>
								</div>
							</div>
						</div>
						<a href="comments.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-user fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class='huge'>
										<?php
											$query = "SELECT * FROM cms.users";
											$select_all_users = mysqli_query($dbConnection, $query);
											$users_count = mysqli_num_rows($select_all_users);
											echo $users_count;
										?>
									</div>
									<div> Users</div>
								</div>
							</div>
						</div>
						<a href="users.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-list fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class='huge'>
										<?php
											$query = "SELECT * FROM cms.categories";
											$select_all_categories = mysqli_query($dbConnection, $query);
											$categories_count = mysqli_num_rows($select_all_categories);
											echo $categories_count;
										?>
									</div>
									<div>Categories</div>
								</div>
							</div>
						</div>
						<a href="categories.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<script type="text/javascript">
						google.charts.load('current', {'packages':['bar']});
						google.charts.setOnLoadCallback(drawChart);

						function drawChart() {
						var data = google.visualization.arrayToDataTable([
							['Data', 'Count'],
							<?php
								$elementText = ['Active posts', 'Comments', 'Categories', 'Users'];
								$elementCount = [ $post_count, $comment_count, $categories_count, $users_count];

								for ($i = 0; $i < 4; $i++) {
									echo "['{$elementText[$i]}'" . "," . "{$elementCount[$i]}],";
								}
							?>
							// ['Posts', 1000],
						]);

						var options = {
							chart: {
							title: '',
							subtitle: '',
							}
						};

						var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

						chart.draw(data, google.charts.Bar.convertOptions(options));
						}
					</script>
					<div id="columnchart_material" style="width: auto; height: 500px;">
				</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
	<?php include "includes/admin_footer.php" ?>
