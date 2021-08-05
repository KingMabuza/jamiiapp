<?php
include_once('resources/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null);


session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Manage Post | Jamii</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- CSS
    ================================================== -->


   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

	<script type="text/javascript">
function confirm_delete()
{
return confirm("Are you sure you want to delete this record?");
}
</script>

</head>

<body>

   <!-- Header
   ================================================== -->
   <div class="navbar-fixed">
       <nav class="white z-depth-0">
           <div class="nav-wrapper">
               <div class="container">
                   <a href="welcome.php" class="brand-logo"><img src="static/Jamii.png" height="60" /></a>
                   <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                   <ul class="right hide-on-med-and-down">
                       <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown2">About<i class="material-icons right">arrow_drop_down</i></a></li>
                       <li><a href="blog.php" class="black-text">Blog</a></li>
                       <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown4">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
                       <li><a href="events.php" class="black-text">Events</a></li>
                       <li><a href="contact.php" class="black-text">Contact us</a></li>
                       <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown5">Actions<i class="material-icons right">arrow_drop_down</i></a></li>
                       <li><a href="logout.php" class="black-text">Logout</a></li>

                   </ul>
               </div>
           </div>
       </nav>
   </div>

   <ul id="dropdown1" class="dropdown-content">
       <li><a href="about.php" class="black-text">About</a></li>
       <li><a href="team.php" class="black-text">The Team</a></li>
       <li class="divider"></li>
       <li><a href="contact.php" class="black-text">Contact Us</a></li>
   </ul>

   <ul id="dropdown2" class="dropdown-content">
       <li><a href="about.php" class="black-text">About</a></li>
       <li><a href="team.php" class="black-text">The Team</a></li>
       <li class="divider"></li>
       <li><a href="contact.php" class="black-text">Contact Us</a></li>
   </ul>

   <ul id="dropdown3" class="dropdown-content">

       <li><a href="agreements.php" class="black-text">Agreements</a></li>
       <li class="divider"></li>
       <li><a href="opportunities.php" class="black-text">Opportunities</a></li>
   </ul>

   <ul id="dropdown4" class="dropdown-content">

       <li><a href="agreements.php" class="black-text">Agreements</a></li>
       <li class="divider"></li>
       <li><a href="opportunities.php" class="black-text">Opportunities</a></li>
   </ul>

   <ul id="dropdown5" class="dropdown-content">
       <li><a href="add_category.php" class="black-text">Add Category</a></li>
       <li><a href="add_post.php" class="black-text">Add Post</a></li>
       <li><a href="delete_category.php" class="black-text">Delete Category</a></li>
       <li><a href="delete_post.php" class="black-text">Delete Post</a></li>
   </ul>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">
        <br/>
   	<div class="row">

   		<div id="main" class="eight columns center">
            <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="add_category.php">Add Category</a></button>
            <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="add_post.php">Add Post</a></button>
            <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="category_list.php">Delete Categories</a></button>
            <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="manage_post.php">Manage Post</a></button>
	   		<article class="entry">
		<?php
     foreach($posts as $post){
      ?>
					<header class="entry-header">

						<h2 class="entry-title">
							<h4><a class="green-text" href='blog.php?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></a></h4>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li> <?php echo date('d-m-y',strtotime($post['date_posted'])); ?></li>

								<li><a href="#" title="" rel="category tag"><a href='manage_category.php?id=<?php echo $post['category_id']; ?>' ><?php echo "<font color='green'>".$post['name']."</font>"; ?></a></li>
								<li><a class="btn btn-small red darken-3" href='delete_post.php?id=<?php echo $post['post_id']; ?>' onclick='return confirm_delete()'>Delete This Post</a></li>&nbsp;<br/>
								<li><a class="btn btn-small green darken-2" href='edit_post.php?id=<?php echo $post['post_id']; ?>' >Edit This Post</a></li>
							</ul>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><?php echo nl2br($post['contents']); ?></p>
					</div> 
									 <?php   
     }
     ?>

				</article> <!-- end entry -->

   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">


   			<div class="widget widget_categories group">
   				<h4 class="center">Categories</h4>
   				<?php
     foreach(get_categories() as $category){
     ?>
      <h6 class="center"><a class="green-text" href="manage_category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a>
     <?php  
     }
     ?>
				</div>




           <!-- <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">insert here</a></li>
                  <li><a href="#">insert here</a></li>
                  <li><a href="#">insert here</a></li>                     
               </ul>
                  
            </div> -->
   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->

   

   <!-- Footer
   ================================================== -->


          <footer class="page-footer light-green darken-4" id="contact">
              <div class="container">
                  <div class="row">
                      <div class="col s12">
                          <div class="center"><a href='index.php'><img src="static/Jamii.png" /></a></div>
                          <ul>
                              <li><a href="http://afcfta.au.int/en" class="white-text">AfCFTA Secretariat</a></li>
                              <li><a href="http://tralac.org" class="white-text">Trade Law Center</a></li>
                              <li><a href="http://pacci.org" class="white-text">Pan African Chamber of Commerce & Industry</a></li>
                              <li><a href="http://svai.africa" class="white-text">Shared Value Africa Initiative</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="footer-copyright">
                  <div class="container center"> &copy; 2021 Jamii All Rights Reserved</div>
              </div>
          </footer>


   <!-- Java Script
   ================================================== -->
   <script src="materialize/materialize/js/bin/materialize.js"></script>
   <script src="init.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>