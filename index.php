<!DOCTYPE html>
<html>
   <head>
      <title>Google Sheets to Website</title>
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="index.css"/>
   </head>
   <body id="index-body">
      <div id="content">
         <h1>Google Sheets to Website</h1>
         <h2> Build a website directly from Google Sheets</h2>
         <div>
            <h3> How it works</h3>
            <ol>
               <li> Visit 
                  <a href="https://docs.google.com/spreadsheets/d/1aZN6GqpwFPvU5m2eK5Ymtkkrc7kz2xt9ASlSks5EbVo/edit?usp=sharing">this spreadsheet
                  </a> link.
               </li>
               <li>
                  Make a copy of the spreadsheet by navigating to <em> File </em> > <em> Make a copy </em>.
               </li>
               <li>
                  Edit the values in the "Values" column. 
                  <br> These values will show on your custom website. 
               </li>
               <li>
                  <a href="https://www.appypie.com/faqs/how-can-i-make-my-google-drive-document-public">Set the spreadsheet to public.</a>
               </li>
               <li>
                  Copy the spreadsheet link and paste in the input field below.
               </li>
            </ol>
            <h3>Try it out</h3>
            <form action="samplesite.php" method="post">
            <label for="template">Select a website template:</label>
            <select name="template" class="select-template">
               <option value="personal-portfolio">Personal Portfolio</option>
            </select> 
               <label for="sheet-url"> Enter link to spreadsheet: </label> <br/>
               <div class="inputs">
                 <input type="text" id="sheet-url" name="sheet-url"
                  value="https://docs.google.com/spreadsheets/d/1aZN6GqpwFPvU5m2eK5Ymtkkrc7kz2xt9ASlSks5EbVo/edit?usp=sharing">
                 <input type="submit" value="Generate">
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
