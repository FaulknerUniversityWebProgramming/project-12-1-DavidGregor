<?php 
  $genres = array(
    '1' => "Abstract",
    '2' => "Baroque",
    '3' => "Gothic",
    '4' => "Renaissance"
  );
  $subjects = array(
    '1' => "Animals",
    '2' => "Landscape",
    '3' => "People"
  );

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>
    
<main>
<form action="art-process.php" method="POST" class="form"  id="mainForm">
   <fieldset class="form__panel">
      <legend class="form__heading">Edit Art Work Details</legend>
        <p class="form__row">
           <label>Title</label><br/>
           <input type="text" name="title" class="form__input form__input--large"/>
       </p>
       <p class="form__row">
           <label>Description</label><br/>
           <input type="text" name="description" class="form__input form__input--large">
       </p>            
       <p class="form__row"> 
           <label>Genre</label><br/>
           <select name="genre" class="form__input form__select">
              <option>Choose genre</option> 
             <?php
                  foreach ($genres as $genre){
                    echo "<option>".$genre."</option>";
                  }
             ?>
           </select>
       </p>
       <p class="form__row"> 
           <label>Subject</label><br/>
           <select name="subject" class="form__input form__select">
              <option>Choose subject</option>  
             <?php
                  foreach ($subjects as $subject){
                    echo "<option>".$subject."</option>";
                  }
             ?>
           </select>
       </p>
       <p class="form__row">	
           <label>Medium</label><br/>               
           <input type="text" name="medium" class="form__input form__input--medium" />
       </p>
       <p class="form__row">	
           <label>Year</label><br/>               
           <input type="text" name="year" class="form__input form__input--small" />
       </p>  
       <p class="form__row">	
           <label>Museum</label><br/>               
           <input type="text" name="museum" class="form__input form__input--medium"/>
       </p>                             

       <div class="form__box"> 
          <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">      
       </div>
   </fieldset>
</form>
</main>       
</body>
</html>
