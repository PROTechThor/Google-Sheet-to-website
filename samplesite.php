<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sample Portfolio Website</title>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--title-icon--------->
<link rel="shortcut icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="samplesite.css"/>
<!--using FontAwesome---------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" crossorigin="anonymous"></script>


</head>
<body>
    <div>

    </div>
    <div id="dom-target" style="display: none;">
        <?php
            $output = $_POST["sheet-url"]; 
            echo htmlspecialchars($output); 
        ?>
    </div>

        <!-- <pre id="view" style="white-space: pre-wrap;"></pre>
    <pre  id="content" style="white-space: pre-wrap;"></pre>
    <pre style="background: white;" id="json" style="white-space: pre-wrap;"></pre>
        <pre id="json1" style="background: white;" style="white-space: pre-wrap;"></pre> -->


   <section id="main">
     <!--overlay-->
     <div id="overlay">
    </div>
      <!--navigation-->
      <nav id="nav">
         <a href="#" id="logo">LOGO</a>
         <!--menu-->
         <div class="toggle"></div>
         <ul class="menu">
            <li class="active"><a href="#main" id="main-link">Home</a></li>
            <li><a href="#about" id="about-link">About</a></li>
            <li><a href="#projects" id="projects-link">projects</a></li>
            <li><a href="#contact" id="contact-form-link">Contact</a></li>
         </ul>
      </nav>
      
      <div class="intro">
      <div class="name">
         <p>Hello</p>
         <h1 id="your-name">Your name here</h1>
         <p class="details" id="details">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
         sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud
           exercitation ullamco laboris nisi ut aliquip 
           ex ea commodo consequat. Duis aute irure dolor 
           in reprehenderit in voluptate velit esse cillum 
           dolore eu fugiat nulla pariatur. Excepteur sint 
           occaecat cupidatat non proident, sunt in culpa 
           qui officia deserunt mollit anim id est laborum.
         </p>
         <a href="#" class="cv-btn" id="intro-btn">Download Cv</a>
      <!--social-->
         <div class="social">
         <a href="#" id="facebook-link">Facebook</a>	
         <a href="#" id="twitter-link">Twitter</a>
         <a href="#" id="instagram-link"> Instagram</a>
         <a href="#" id="youtube-link">Youtube</a>	
      </div>
      </div>
      <img src="https://lh3.googleusercontent.com/proxy/G_I4_nWvoNdZjMrjCrmwrtUWpSx0fDz9yAy1bJIAHsSAJR5MaFt5vNKX28fyeabmykiTSX1FSOanuwsvRlyeWUJR_4GMdlE" 
      id="img1" alt=""/>	
        </div>
      <!--down arrow-->
      <div class="black-line" ></div> 

   </section>

   <!--about-->
   <section id="about">
      <div class="about-text">
         <h1 id="about-h1">About Me</h1>
         <h2 id="about-h2">Job title</h2>
         <p id="about-p">Lorem ipsum dolor sit amet, c
           onsectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. 
           Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate 
            velit esse cillum dolore eu fugiat nulla pariatur. </p>
         <a href="#" id="about-button">View More Details</a>
      </div>
      <div class="about-model">
         <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" id="your-pic" alt=""/>	
      </div>
   </section>

   <!--projects-->
   <section id="projects">
      <div class="p-heading">
         <h1 id="projects-heading">Projects</h1>
         <h3 id="projects-more">Here are some things I have built</h3>
      </div>
      <div class="p-container">
         <div class="p-box">
            <div class="p-b-img">
               <div class="p-type" id="project1-heading">Project Name</div>
               <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" id="project1-img" alt="">
            </div>
            <div class="p-b-text">
               <p id="project1-text">Lorem ipsum dolor sit amet, 
                 consectetur adipiscing elit, sed do eiusmod tempor 
                 incididunt ut labore et dolore magna aliqua. 
                 Ut enim ad minim veniam, quis nostrud exercitation 
                 ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>	
                 <a id="project1-link" href=""> View Project</a>
            </div>
         </div>
         <div class="p-box">
            <div class="p-b-img">
               <div class="p-type" id="project2-heading">Project Name</div>
               <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" id="project2-img" alt="">
            </div>
            <div class="p-b-text">
               <p id="project2-text">Lorem ipsum dolor sit amet, consectetur 
                 adipiscing elit, sed do eiusmod tempor incididunt ut 
                 labore et dolore magna aliqua. Ut enim ad minim veniam, 
                 quis nostrud exercitation ullamco laboris nisi ut aliquip 
                 ex ea commodo consequat. </p>	
                 <a id="project2-link" href=""> View Project</a>
            </div>
         </div>
         <div class="p-box">
            <div class="p-b-img">
               <div class="p-type" id="project3-heading">Project Name</div>
               <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" id="project3-img" alt="">
            </div>
            <div class="p-b-text">
               <p id="project3-text">Lorem ipsum dolor sit amet, consectetur 
                 adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis
                   nostrud exercitation ullamco laboris nisi ut aliquip ex 
                   ea commodo consequat. </p>	
                <a id="project3-link" href=""> View Project</a>
            </div>
         </div>
      </div>
   </section>



   <!--Contact-->
   <section id="contact">
      <h1 class="c-b-heading" id="contact-heading">Contact Me</h1>
      <p id="contact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat.</p>
      <h3 id="contact-medium">yourname@example.com</h3>
   </section>

   <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
	<script type="text/javascript">
	
		  /*Responsive Navigation*/
	  $(document).ready(function(){
	 $('.toggle').click(function(){
		 $('.toggle').toggleClass('active')
		 
		 $('nav ul').toggleClass('active-menu')
		
		 
	 })
 });
	
	</script>
</body>

<script>
    var div = document.getElementById("dom-target");
    var sheetUrl = div.textContent;
    let matches = /\/([\w-_]{15,})\/(.*?gid=(\d+))?/.exec(sheetUrl);
   let sheetId = ""; 
   if (matches) {
   sheetId = matches[1];
   }
   else {
      //alert("You didn't enter a valid Google Sheet link")
   }


      // Client ID and API key from the Developer Console
      var CLIENT_ID = '';
      var API_KEY = '';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://sheets.googleapis.com/$discovery/rest?version=v4"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = "https://www.googleapis.com/auth/spreadsheets.readonly";

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          getContent();
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }

    /* Get data from various sheets */
      function getContent(){
          getValues('Navigation'); 
          getValues('Intro');
          getValues('About');
          getValues('Social');
          getValues('Projects');
          getValues('Contact');
          getStyles('Design');
      }
       

      /**
       * Get and display the values from spreadsheet:
       */

      function getValues(sheetName) {
        gapi.client.sheets.spreadsheets.values.get({
         spreadsheetId: sheetId,
          range: sheetName,
        }).then(function(response) {
          var range = response.result;
          // var text = document.getElementById('json');
          //text.textContent = JSON.stringify(range, null, "\t");
          
          if (range.values.length > 0) {
            for (i = 2; i < range.values.length; i++) {
              let row = range.values[i];
              let rowID = row[0];
              let rowName = row[1];
              let rowContent = row[2];
              let element = document.getElementById(rowID);

              // Apply links 
              if (rowName.includes('link')){
                if (rowContent == ""){
                  element.remove();
                  }
                else if (element.hasAttribute("href")){
                  element.href = rowContent;
                }
                else if (element.hasAttribute("src")){
                   element.src = rowContent;  
                  }
              }
              // delete elements with empty fields
              else if (rowContent == "" || rowContent.length === 0){
                  element.remove();
              }
              // Set row value to element
              	else {
              	  element.textContent = rowContent;              	
		}

              }
            }
          
         
        }, function(response) {
          //appendPre('Error: ' + response.result.error.message);
        });
        // auto refresh website every 3 seconds
       // setTimeout(() => getStyles(), 3000)
        
      }
      
      /* Get styles from design sheets */
     function getStyles(sheetName) {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: sheetId,
          range: sheetName,
        }).then(function(response) {
          let range = response.result;

          var styles = "";
          
          if (range.values.length > 0) {
            for (i = 2; i < range.values.length; i++) {
              let row = range.values[i];
              var rowID = row[0];
              let rowProperty = row[1];
              let rowName = row[2];
              let rowValue = row[3];
              let element = document.getElementById(rowID);        
              styles += `#${rowID} { ${rowProperty} : ${rowValue}; } `;
              let viewtext = document.getElementById('view');
              viewtext.textContent = styles;
              
            }
          }
          var customSheet = document.createElement('style');
          customSheet.innerHTML = styles;
          document.body.appendChild(customSheet);
           
        }, function(response) {
          //let overlay = document.getElementById('overlay');
         // overlay.style.display = "block";
        });
        
      }
    
</script>


<script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>

</body>
</html> 
