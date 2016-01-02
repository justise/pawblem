<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Pawblem Solved Dog Walkers, Pet Sitters, Redmond, Bellevue, Kirkland - Request A Date</title>
	<?PHP include('includes/meta.php'); ?>
    <link href="css/smoothness/jquery-ui-1.7.2.custom.css" rel="stylesheet"/>
    <style>
    .red { font-weight: bold; color: maroon; }
    </style>
</head>
<body>
    <div id="container">
        <?PHP include('includes/header.php'); ?>
        <div id="content">
			<!--
            <div class="content-image">
                <img src="images/tallLeft/cat1.jpg" />
            </div>
			-->
            <div class="content-text">
				<div class="section">
					<div class="small-col text-align">
						<img src="images/tallLeft/cat1.jpg" class="tile"/>
						<h3>Contact Info:</h3>
						<p>
							<a href="mailto:info@pawblemsolved.com">info@pawblemsolved.com</a><br/>
							425-445-7247
						</p>
					</div>
					<div class="big-col">
						<h2>Contact for the Solution to Your Pawblem</h2>
						
						<!--
						<div>
							<br/>
								<p class="red">
									I recently had a baby, and I am currently adjusting to being a new Mama.
								</p>
								<p>
									<span class="red">For CURRENT Clients:</span> Please include both myself, as well as your primary pet sitter 
									or dog walker, on all requests and/or cancellations. This will allow us to respond to you in a timely manner.
								</p>
								<p>
									<span class="red">For NEW Clients:</span> Unfortunately, at this time, we are only taking new kitty clients. 
									We are all booked-up for mid-day dog walks. I apologize for any inconvenience, but please do check back in the future! 
								</p>
								<p>
									Thanks so much!  
								</p>
								<p>
									~ Danielle & the Pawblem Solved Team
								</p>
						</div>
						
						<div>
							<br/>
							<strong>
								<p>
									Pawblem Solved will be out of the office from Wednesday, October 28th to 
									Monday, November 10th, 2014.
								</p>
								<p>
									We will reply to all inquiries after Monday, November 10th, 2014.
								</p>
								<p>
									If you are a current client needing upcoming pet care, we will do our best to respond in a timely manner. 
								</p>
								<p>
									Thanks again! 
								</p>
								<p>
									We look forward to meeting some new furry friends!
								</p>
								<p>
									~ The Pawblem Solved Team
								</p>
							</strong>
						</div>
						-->
						<div id="emailconfirmation">
							<h3>Thank you so much for your email!</h3>
							<p>
							  We will get back to you shortly on the next steps for caring for your pet(s)!                    
							</p>
						</div>
						<form action="emailform.php" method="POST">
								
								<label>Name</label>
								<input type="text" class="text required" name="client_name"/>
								
								<label>Email</label>
								<input type="text" class="text" name="client_email"/>
								
								<label>Date Start</label>
								<input type="text" class="date" name="startdate"/>
								
								<label>Date End</label>
								<input type="text" class="date" name="enddate"/>
								
								<label>Number of Dogs</label>
								<div class="input-message">We are currently booked for mid-day dog walks, but please do check back in the future!</div>
								<!-- <select name="dogcount">
								  <option value="0">0</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4+">4+</option>
								</select> -->
								
								<label>Number of Cats</label>
								<select name="catcount">
								  <option value="0">0</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4+">4+</option>
								</select>
						
								<label>Address</label>
								<textarea class="shorttext" name="address"></textarea>
								
								<label>Phone</label>
								<input type="text" class="text" name="phonenumber"/>
								
								<label>How did you hear about us?</label>
								<input name="whorefer" name="whorefer" class="text" />
								
								<label>Comments</label>
								<textarea name="comments"></textarea>
								
								<input type="submit" class="button" value="Send"/>
							
						</form>



					</div>
				</div>
            </div>
        </div>
        <?PHP include('includes/footer.php'); ?>
    </div>
    <?PHP include('includes/scripts.php'); ?>
    <script src="script/jquery-ui-1.7.2.custom.min.js"></script>
    <script src="script/requestdate.js"></script>

</body>
</html>
