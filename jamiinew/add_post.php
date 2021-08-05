<?php
include_once('resources/init.php');

if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    
    if(empty($title)){
     $errors[] = 'You need to supply a title';
    }
    else if(strlen($title)>255){
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = 'You need to supply some text';   
    }
    if(!category_exists('id',$_POST['category'])){
    $errors[] = 'That category does not exists';   
    }
    
    if(empty($errors)){
        add_post($title,$contents,$_POST['category']);
        
        header("Location:index.php");
        die();
    }
}


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
	<title>Add Post | Jamii</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

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
       <li><a href="delete_post.php">Delete Post</a></li>
   </ul>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">
    <br/>
   	<div class="row">

   		<div id="main" class="eight columns container">
            <div class="container">
                <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="add_category.php">Add Category</a></button>
                <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="add_post.php">Add Post</a></button>
                <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="category_list.php">Delete Categories</a></button>
                <button class="btn btn-large green darken-2" type='button' value='Add Category' /><a class="white-text" href="manage_post.php">Manage Post</a></button>
            </div>
	   		<article class="entry">
					<header class="entry-header">
		<?php
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
						<h2 class="entry-title">
							<h2>Add Post</h2>
						</h2> 				 
					
						<div class="entry-meta">
							        <form action='' method='post'>
     <div>
        <label for='title'>Title</label>
         <input type='text' name='title' value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' />
     </div>
     <div class="input-field">
         <label for='contents'>Content</label>
         <textarea name='contents' cols=20 rows=10><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
      </div>
     <div>
       <label for='category'>Category</label>
       <select name='category'>
        <?php
        foreach(get_categories() as $category){
         ?>
         <option value='<?php echo $category['id'] ?>'><?php echo $category['name'] ?></option>
         <?php
        }
        ?>
       </select>
     </div>
     <p><input class="btn btn-large green darken-2" type='submit' value='Add Post' /></p>
     </form>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div> 


				</article> <!-- end entry -->

   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">


   			<div class="widget widget_categories group">
   				<h3 class="center">Categories</h3>
   				<?php
     foreach(get_categories() as $category){
     ?>
      <p class="center"><a class="green-text" href="manage_category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a>
     <?php  
     }
     ?>
				</div>


   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
   <footer class="page-footer light-green darken-4" id="contact">
       <div class="container">
           <div class="row">
               <div class="col s12">
                   <div class="center"><a href='welcome.php'><img src="static/Jamii.png" /></a></div>
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