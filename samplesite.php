<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sample Portfolio Website</title>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--title-icon--------->
<link rel="shortcut icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<!--using FontAwesome---------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" crossorigin="anonymous"></script>


</head>
<body>
    <div id="dom-target" style="display: none;">
        <?php
            $output = $_POST["sheet-url"]; 
            echo htmlspecialchars($output); 
        ?>
    </div>

    <!--Add buttons to initiate auth sequence and sign out-->
   <button id="authorize_button" style="display: none;">Authorize</button>
    <button id="signout_button" style="display: none;">Sign Out</button>

        <pre id="view" style="white-space: pre-wrap;"></pre>
    <pre  id="content" style="white-space: pre-wrap;"></pre>
    <pre style="background: white;" id="json" style="white-space: pre-wrap;"></pre>
        <pre id="json1" style="background: white;" style="white-space: pre-wrap;"></pre>

    <!--
    <button id="run-button" style="">Generate site</button>
     <div id="render-content">
      <div id="iframe" style="border: 1px solid #eee">
           <div id="header">
             <h2 id="header-main-title"> Blah Blah </h2>
             <h5 id="header-secondary-title"> yada yada </h5>
             <a id="header-button-text" href=""> Blah Blah </a>
             <div>
               <img id="header-image" src="" alt="Cool image" width="500px" height="500px"/>
             </div>
           </div>
        <style>
        #header {
           background-color: red;
           font-style: sans-serif;
         }  
        </style>
      </div>
     </div> -->


   <section id="main">
      <!--navigation-------------------------------->
      <nav id="nav">
         <a href="#" id="logo">LOGO</a>
         <!--menu--------->
         <div class="toggle"></div>
         <ul class="menu">
            <li class="active"><a href="#main" id="main-link">Home</a></li>
            <li><a href="#about" id="about-link">About</a></li>
            <li><a href="#services" id="services-link">Services</a></li>
            <li><a href="#portfolio" id="portfolio-link">Portfolio</a></li>
            <li><a href="#contact-form" id="contact-form-link">Contact</a></li>
         </ul>
      </nav>
      
      <div class="intro">
      <div class="name">
         <p>Hello</p>
         <h1 id="your-name">Your name here</h1>
         <p class="details" id="details">
             Details about you goes in here
         </p>
         <a href="#" class="cv-btn" id="intro-btn">Download Cv</a>
      <!--social---------------->
         <div class="social">
         <a href="#" id="facebook-link"><i class="fab fa-facebook"></i> Facebook</a>	
         <a href="#" id="twitter-link"><i class="fab fa-twitter"></i> Twitter</a>
         <a href="#" id="instagram-link"><i class="fab fa-instagram"></i> Instagram</a>
         <a href="#" id="youtube-link"><i class="fab fa-youtube"></i>Youtube</a>	
      </div>
      </div>
      <img src="#" id="img1" alt="Img"/>	
        </div>
      <!--down arrow-------------->
      <div class="black-line" ></div> 

   </section>

   <!--about----------------------->
   <section id="about">
      <div class="about-text">
         <h1 id="about-h1">About Me</h1>
         <h2 id="about-h2">Job title</h2>
         <p id="about-p">More details about you</p>
         <a href="#" id="about-button">View More Details</a>
      </div>
      <div class="about-model">
         <img src="#" id="your-pic" alt="Picture"/>	
      </div>
   </section>

   <!--+skills-------------------->
   <section id="services">
      <div class="s-heading">
         <h1 id="section3-heading">Skills</h1>
         <p id="section3-more">Here are some of my skills</p>
      </div>
      <div class="b-container">
         <div class="s-box">
            <div class="s-b-img">
               <div class="s-type" id="skill1-heading">Front-End</div>
               <img src="images/s1.png" id="skill1-img" alt="">
            </div>
            <div class="s-b-text">
               <p id="skill1-text">More text</p>	
            </div>
         </div>
         <div class="s-box">
            <div class="s-b-img">
               <div class="s-type" id="skill2-heading">Front-End</div>
               <img src="images/s1.png" id="skill2-img" alt="">
            </div>
            <div class="s-b-text">
               <p id="skill2-text">More text</p>	
            </div>
         </div>
         <div class="s-box">
            <div class="s-b-img">
               <div class="s-type" id="skill3-heading">Front-End</div>
               <img src="images/s1.png" id="skill3-img" alt="">
            </div>
            <div class="s-b-text">
               <p id="skill3-text">More text</p>	
            </div>
         </div>
      </div>
   </section>

   <!--portfolio------------------->
   <section id="portfolio">
      <h1 class="p-headind" id="section4-heading">Portfolio</h1>
      <p id="section4-more"> Some projects </p>
      <div class="p-container">
         <div class="p-box">
            <div class="overlay-text">
               <h1 id="project1-heading">Writting</h1>
               <p id="project1-text">Client Project</p>
            </div>
            <img src="images/w1.jpg" id="project1-img">
         </div>
         <div class="p-box">
            <div class="overlay-text">
               <h1 id="project2-heading">Ideas</h1>
               <p id="project2-text">Client Project</p>
            </div>
            <img src="images/w2.jpg" id="project2-img" alt="">
         </div>
         <div class="p-box">
            <div class="overlay-text">
               <h1 id="project3-heading">Music</h1>
               <p id="project3-text">Client Project</p>
            </div>
            <img src="images/w3.jpg" id="project3-img" alt="">
         </div>
      </div>
   </section>

   <!--Contact-->
   <section id="contact-btn">
      <h1 class="c-b-heading" id="contact-heading">If You Have Any Project In Your Mind ?</h1>
      <h2 id="contact-text">Contact me at: </h2>
      <h3 id="contact-medium">Contact Me</h3>
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
  //document.write("Spreadsheet: " + matches[1]);
 // document.write("Sheet: " + matches[3]);
   }
   else {
      alert("You didn't enter a valid Google Sheet link")
   }


      // Client ID and API key from the Developer Console
      var CLIENT_ID = '';
      var API_KEY = '';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://sheets.googleapis.com/$discovery/rest?version=v4"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = "https://www.googleapis.com/auth/spreadsheets.readonly";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');

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
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          getContent();

        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }
      function getContent(){
          getValues('Navigation'); 
          getValues('Intro');
          getValues('About');
          getValues('Social');
          getValues('Skills');
          getValues('Portfolio');
          getValues('Contact');
          getStyles('Design');
      }
       // auto refresh website every 3 seconds
       // setTimeout(() => getContent(), 3000)


      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }

      /**
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       */

      function getValues(sheetName) {
        gapi.client.sheets.spreadsheets.values.get({
         // spreadsheetId: '1CpRyArc0WITtk3Lss303jXisCGBgaG68QWNBdjoMwB4',
         spreadsheetId: sheetId,
          range: sheetName,
        }).then(function(response) {
          var range = response.result;
          var text = document.getElementById('json');
          //text.textContent = JSON.stringify(range, null, "\t");
          
          if (range.values.length > 0) {
            for (i = 2; i < range.values.length; i++) {
              let row = range.values[i];
              let rowID = row[0];
              let rowName = row[1];
              let rowContent = row[2];
              let element = document.getElementById(rowID);
              if (rowName.includes('link')){
                if (element.hasAttribute("src")){
                   element.src = rowContent;  
                  }
                else if (element.hasAttribute("href")){
                  element.href = rowContent;
                }
              }
              	else {
              	  element.textContent = rowContent;              	
		}

              }
            }
          
         
        }, function(response) {
          appendPre('Error: ' + response.result.error.message);
        });
        // auto refresh website every 3 seconds
       // setTimeout(() => getStyles(), 3000)
        
      }
      
      
     function getStyles(sheetName) {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: sheetId,
          range: sheetName,
        }).then(function(response) {
          let range = response.result;
          let text = document.getElementById('json1');
          //text.textContent = JSON.stringify(range, null, "\t");
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
          
         /* 
          if (range.values.length > 0) {
            for (i = 2; i < range.values.length; i++) {
              let row = range.values[i];
              let rowID = row[0];
              let rowName = row[1];
              let rowContent = row[2];
              let element = document.getElementById(rowID);
              if (rowName.includes('link')){
                if (element.hasAttribute("src")){
                   element.src = rowContent;  
                  }
                else if (element.hasAttribute("href")){
                  element.href = rowContent;
                }
              }
              	else {
              	  element.textContent = rowContent;              	
		}

              }
            }
           else {
            appendPre('No data found.');
          }*/
          
         
        }, function(response) {
          appendPre('Error: ' + response.result.error.message);
        });
        
      }
    
</script>


<script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>

</body>
</html> 
