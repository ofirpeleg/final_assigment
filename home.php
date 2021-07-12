<? 
include 'db.php';

session_start();

?>



<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

		<link rel="preconnect" href="https://fonts.gstatic.com"> <!--font before style sheet-->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link
        rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"
        />
        
         <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
      
         <!-- Bootstrap CSS File -->
         <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       
         <!-- Libraries CSS Files -->
         <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
         <link href="lib/animate/animate.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/style1.css">
	

        
		<title>Home Page</title>

	</head>
	

	<body id="homePage1">

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#"><img src="img/logo.png" alt="logoo" title="logo" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Choose task mode</a></li>
          <li><a href="#">Previous trainings</a></li>
          <li><a href="#">Insights</a></li>
          <?php if($_GET['type'] == 'commander') 
          echo '<li class="menu-has-children"><a href="connect-list.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">My team</a>
            <ul>
              <li class="menu-active"><a href="form.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">Add a team member</a></li>
              <li class="menu-has-children"><a href="edit.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">Edit personal details</a>
                <ul>
                  <li><a href="#">Rename</a></li>
                  <li><a href="#">Delete</a></li>
                  <li><a href="#">Change</a></li>
                </ul>
              </li>
              <li><a href="#">Pending requests</a></li>
            </ul>' ?>
          </li>
          <li><a href="#">Setting</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb"></ol>
        </nav>

          <div id="wrapper">

            <div class="dropdown">
                <button class="dropbtn">Recent Updates</button>
                <div class="dropdown-content">
                  <p>Guy joined the team</p>
                  <p>Daniel started training</p>
                </div>
              </div>
    
            
            <main id="homePagemain">  
    
                <a href="#">
                       <section>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                    fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                    </svg>
        
                    <span>Choose task Mode</span>
    
                    </section>
                 </a>	 
                 
                <a href="#">
                    <section>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" 
                    fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                    <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                    </svg>
                                   
                    <span>Insights</span>
                            
                    </section>
                </a>   
                
                <?php if ($_GET['type'] == 'commander') {

                echo '<a href="connect-list.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">
                    <section>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                    fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
        
                    <span>My team</span>
    
                    </section> 
                </a> 
                                        
                
                <a href="form.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">
                    <section>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                    fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
    
                    <span>Add a team member</span>
        
                    </section>
                </a>';}               
              else {
                   
                echo'<a href="#">
                    <section>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                    fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
    
                    <span>Start Training</span>
        
                    </section>
                </a>'; }

              ?>  
                <a href="mainObj.php?Id=<?php echo $_GET['Id']; ?>&Name=<?php echo $_GET['Name']?>&type=<?php echo $_GET['type']?>" id="Myprofile">
                   <section>
    
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg>
    
                    <span>My Profile<span>
              
                    </section>
                </a>
    
                <a href="edit.php?Id=<?php echo $_GET['Id']; ?>&Name=<?php echo $_GET['Name']?>&type=<?php echo $_GET['type']?>" id="detailsSection">
                    <section>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
    
                    <span>Edit personal details</span>
        
                    </section>
                </a> 
            </main>   
            
            
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script src="scripts.js"></script>
            
	</body>
    </div>

    <footer>
        <nav id="footer-nav">
            <ul id="footer-ul">
                <li><a href="#">
                    <section>
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                        class="bi bi-house-door-fill" viewBox="0 0 16 16" id="homeBtn">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                        </svg>
        
                    </section>
                </a></li>   

              <?php if($_GET['type'] == 'commander') {  
                echo'<li><a href="connect-list.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">
                    <section>
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                        class="bi bi-person-lines-fill" viewBox="0 0 16 16" id="myTeamBtn">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg>
        
                    </section>
                </a></li>  
    
                <li><a href="form.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">
                    <section>
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                        class="bi bi-plus-circle" viewBox="0 0 16 16" id="addBtn">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
        
                    </section>
                </a></li>';}   

                else {

                  echo'<li><a href="mainObj.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">
                  <section>
  
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                  class="bi bi-person-circle" viewBox="0 0 16 16" id="myTeamBtn">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
      
                  </section>
              </a></li>  
  
              <li><a href="edit.php?Id='. $_GET['Id'] .'&Name=' . $_GET['Name'] .'&type=' . $_GET['type'] .'">
                  <section>
  
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" id="addBtn">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
      
                  </section>
              </a></li>';}   

                ?>
                
                <li><a href="#">
                    <section>
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                        class="bi bi-list-task" viewBox="0 0 16 16" id="chooseTaskBtn">
                        <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                        <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                        <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                        </svg>
        
                    </section>
                </a></li>  
            </ul>
        </nav>    
    </footer>



    <!-- #footer desk -->
    <div id="footer">
        <div class="footer-top">
          <div class="container">
    
          </div>
        </div>
    <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Flotilla 13</strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    <!-- #footer -->


</html>

