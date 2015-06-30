<html>
   <head>
      <title>jarandhaugen.no</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <p class="navbar-text"><strong>jarandhaugen.no</strong></p>
            <p class="navbar-text navbar-right">Currently not signed in&nbsp;&nbsp;&nbsp;</p>
         </div>
      </nav>
      <div class="container">
         <div class="jumbotron">
            <div class="container">
               <h1>Jarand Haugen</h1>
               <h3>Web designer and programmer <small>HTML, CSS, PhP, JavaScript, Java</small></h3>
            </div>
         </div>
         <p>
            Hey!
            <br>
            Thanks for visiting my page, it's not complete in any way, but feel free to take a look around. 
            I have a few plans for what I want to add, but it may take some time!
            <br>
            If you have any suggestions, feel free to send me an email: <a href="mailto:contact@jarandhaugen.no">contact@jarandhaugen.no</a>
         <p>
            <img src="signature.png"></img>
         <table class="table table-bordered table-striped">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Projects</th>
                  <th>
                     <font title="Hover over a status for more info.">
                     Status&nbsp;
                     <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                     </font>
                  </th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th>1</th>
                  <td>IT I & II (Basic programming, photoshop and web design)</td>
                  <td class="success">
                     <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                     Complete
                  </td>
               </tr>
               <tr>
                  <th>2</th>
                  <td>IT Bachelor</td>
                  <td class="warning">
                     <font title="1 of 3 years done.">
                     <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                     In progress
                     </font>
                  </td>
               </tr>
               <tr>
                  <th>3</th>
                  <td>The Dark Forest (Text-based adventure game)</td>
                  <td class="danger">
                     <font title="This project was too much work, compared to the time we got.">
                     <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                     Abandoned
                     </font>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
	  <br><br><br><br><br><br>
	  <nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<br>
			<?php
				echo "This page is built using Bootstrap.".'<a href="http://getbootstrap.com">GetBootstrap</a>';
			?>
		</div>
	  </nav>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   </body>
</html>