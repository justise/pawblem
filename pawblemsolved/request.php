<!DOCTYPE html>
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
			
            <div class="banner-wrapper">
                <div class="banner" style="background-image: url(images/banners/dog3.jpg);">
                    <img src="images/banners/dog3.jpg" style="top: -888px"/>
                </div>
                <div class="banner-text">
                    <h1>Request Service</h1>
                </div>
            </div>

            <div class="content-text">
                
                        <div id="emailconfirmation" class="statement">
							<h1>
                                <strong>Thank you so much for your email!</strong><br/>
							    We will get back to you shortly on the next steps for caring for your pet(s)!                    
							</h1>
						</div>
 
                <br/><br/>
                <form action="emailform.php" method="POST">

                    <div class="yui3-g-r">
                        <div class="yui3-u-1-2">
                            <div class="grid-wrapper">
                        	    <label>Human Name</label>
							    <input type="text" class="text required" name="client_name"/>
								
							    <label>Email</label>
							    <input type="text" class="text" name="client_email"/>
								
							    <label>Phone</label>
							    <input type="text" class="text" name="phone"/>
								
                                <div class="yui3-g-r">
                                    <div class="yui3-u-1-2">
                                        <label>Date Start</label>
							            <input type="text" class="date" name="startdate"/>
                                    </div>
                                    <div class="yui3-u-1-2">
                                        <label>Date End</label>
							            <input type="text" class="date" name="enddate"/>
                                    </div>     
                                </div>

                                <label>Number of Dogs</label>
						        <div class="input-message">We are currently booked for mid-day dog walks, but please do check back in the future!</div>
						        <!-- <select name="dogcount">
							        <option value="0">0</option>
							        <option value="1">1</option>
							        <option value="2">2</option>
							        <option value="3">3</option>
							        <option value="4+">4+</option>
						        </select> -->
								
						        <label>Number of Cats or Other</label>
						        <select name="catcount">
							        <option value="0">0</option>
							        <option value="1">1</option>
							        <option value="2">2</option>
							        <option value="3">3</option>
							        <option value="4+">4+</option>
						        </select>
                            </div>
                        </div>  
                        <div class="yui3-u-1-2">
                            <div class="grid-wrapper">
						        <label>Address</label>
						        <textarea class="shorttext" name="address"></textarea>
								
						        <label>How did you hear about us?</label>
						        <input name="whorefer" name="whorefer" class="text" />
								
						        <label>Comments</label>
						        <textarea name="comments"></textarea>
                            </div>
                        </div>     
                    </div>
                    <br/>
                    <center>
				        <input type="submit" class="button" value="Send"/>  
                    </center>
				</form>

						
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
						
				</div>
        </div>
        <?PHP include('includes/footer.php'); ?>
    </div>
    <?PHP include('includes/scripts.php'); ?>
    <script src="script/jquery-ui-1.7.2.custom.min.js"></script>
    <script src="script/requestdate.js"></script>

</body>
</html>
