<!DOCTYPE html>
<html>
   <head>
      <title>Google Sheets to Website</title>
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="styles.css"/>
   </head>
   <body id="index-body">
      <div id="content">
         <h1>Google Sheets to Website</h1>
         <h2> Build a website directly from Google Sheets</h2>
         <div>
            <h3> How to do it</h3>
            <ol>
               <li> Visit 
                  <a href="https://docs.google.com/spreadsheets/d/1aZN6GqpwFPvU5m2eK5Ymtkkrc7kz2xt9ASlSks5EbVo/edit#gid=2013547551">this spreadsheet
                  </a> link 
               </li>
               <li>
                  <a href="#">Make a copy</a> of the spreadsheet.
               </li>
               <li>
                  Edit the spreadsheet values as you want. Only edit the values in the "Values" column. 
                  These values will show on your custom website. 
               </li>
               <li>
                  <a href="#">Set the spreadsheet to public.</a>
               </li>
               <li>
                  Copy the spreadsheet link and paste in the input field below.
               </li>
            </ol>
            <h3>Try it out</h3>
            <form action="samplesite.php" method="post">
               <label for="sheet-url"> Enter link to spreadsheet: </label> <br/>
               <input type="text" id="sheet-url" name="sheet-url"
                  value="https://docs.google.com/spreadsheets/d/1CpRyArc0WITtk3Lss303jXisCGBgaG68QWNBdjoMwB4/edit#gid=434970163">
               <input type="submit" value="GO">
            </form>
         </div>
      </div>
   </body>
</html>
