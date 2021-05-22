<?php
include('config.php');

?>
<link rel="stylesheet" href="Main.css">
<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: #37003c">
        <a href="Main.php">     <img src="logo.jpg" width="80" 
        height="80" alt="hi" title="next page"></a>
        <div class="">
            <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a href="#" class="nav-link">Nur-Sultan</a>
                    </li>
               </ul>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
           <span class="navbar-toggler-icon"></span>
        </button>
<body>
        <div class="collapse navbar-collapse w-100 justify-content-end" id="navbarMenu">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cinema
                </a>
                <div class="dropdown-menu drop" aria-labelledby="dropdownMenuLink" style="background-color: #37003c">
                    <a class="dropdown-item" style="color: #0086ff" href="Main.php">Main</a>
                    <a class="dropdown-item" style="color: #0086ff" href="films.php">Films</a>
                    <a class="dropdown-item" style="color: #0086ff" href="#">booking</a>
                </div>
            </div>
            <div>
               <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a href="#" target="_blank" class="nav-link">Contacts</a>
                    </li>
               </ul>
            </div>
        
			  <div class="nav-wrap">
					<ul class="group" id="example-one">

			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login</a><?php }?></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
     			<div class="clear"></div>
   	
<div class="block">
	<div class="wrap">
		
        <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Search Movies Here..." style="height:27px;width:300px"  required id="search111" name="search">
                                
                                <input type="submit" value="Search" style="height:28px;width:30px; padding-top:4px" id="button111">
    </div>       	

		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>

        </nav>
</div>
<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }
    </script>
}