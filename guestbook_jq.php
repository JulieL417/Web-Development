
<!DOCTYPE HTML>
<meta charset="utf-8">
<html>
<head>
		<link rel="stylesheet" href="form.css">
		<script src="jquery_latest.js"></script>
		<script src="jquery_validate_js.js"></script>
		
<script>
			$(document).ready(function() {
				$("#commentForm").validate();
			});
		</script>
</head>
<body>
<form class="cmxForm" id="commentForm" method="post" action="add_guest.php">
<fieldset>
	    <legend>Sign our Guestbook!</legend>
   
        <p>
          <label for="cfirstname">First Name:</label>
                     <em><font color="#FF0000">*</font></em> 
            <input id="cfirstname" name="first" size="25" class="required" minlength="2" />
        </p>
        <p>
          <label for="clastname">Last Name:</label>
               	  <em><font color="#FF0000">*</font></em> 
       	  <input id="clastname" name="last" size="25" class="required" minlength="2" />
        </p>
        <p>
          <label for="cemail">E-Mail:</label>
           <em><font color="#FF0000">*</font></em>  
       	  <input id="cemail" name="email" size="25" class="required email" /></p>
        <p>
          <label for"ccomment">Your Comment:</label>
       	  <em><font color="#FF0000">*</font></em>
       	  <textarea id="ccomment" name="comment" cols="52" rows="7" class="required" />                        
       	  </textarea>
        </p>
        <p>
         	<input class="submit" type="submit" value="Submit" /> </p>
 </fieldset>
 <div style="font-size:x-small"><font color="#FF0000">* Indicates Required Fields</font><font color="#FF0000"></font></div>

                  <p align='center'><strong>Click Here to <a href="guestAdmin.php">Admin View</a></strong></p>
					<div class="output" id="output">
                        <strong>
                        Guest Book Entries<ol><li><a href="/~long53/webd495/WEBD434/guestbook2/guestbook_jq.php?id=27">Julie Long</a> <br> Date Entered: November 4</li>
<li><a href="/~long53/webd495/WEBD434/guestbook2/guestbook_jq.php?id=30">Lincoln Manning</a> <br> Date Entered: November 9</li>
			        </strong></div>
				</form>
</body>
</html>
