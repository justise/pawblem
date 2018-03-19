<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <title>Request Pet Sitting Services - Pawblem Solved: Dog Walkers and Pet Sitters</title>
	<?PHP include('includes/meta.php'); ?>
    <meta name="Description" content="Request a Dog Walking or Pet Sitting services from Pawblem Solved the Premier Pet Sitting and Dog Walking Service in the Redmond, Kirkland and Bellevue areas.">
    <meta property="og:title" content="Request Pet Sitting Services - Pawblem Solved"/>
    <meta name="twitter:title" content="Request Pet Sitting Services - Pawblem Solved"/>
    <meta property="og:description" content="Request a Dog Walking or Pet Sitting services from Pawblem Solved the Premier Pet Sitting and Dog Walking Service in the Redmond, Kirkland and Bellevue areas."/>
    <meta name="twitter:description" content="Request a Dog Walking or Pet Sitting services from Pawblem Solved the Premier Pet Sitting and Dog Walking Service in the Redmond, Kirkland and Bellevue areas."/>
    <meta property="og:url" content="http://www.pawblemsolved.com/request.php"/>

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
                <div class="banner" id="banner-request">
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
                    <br/><br/>
				</div>
                         
                    <!-- 
                <div class="busy-message">
                  
                <center>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <p class="red">
                        Thank you so much for your interest in Pawblem Solved!
                    </p>
                    <p class="red">
                        At this time, we are not able to accept new clients, but please do check back in the future.
                    </p>
                    <p class="red">
                        For current clients, you can email your inquiries to: 
                    </p>
                    <p>
                        <a href="mailto:info@pawblemsolved.com">info@pawblemsolved.com</a>
                    </p>
                    <p>
                       Thank you - The Pawblem Solved Team
                    </p>
                    <br/>
                    <br/>
                </center>
                    Beginning mid-February, we will be accepting new mid-day walks, while mom & dad are at work, and kitty clients in the Bellevue, Redmond & Kirkland areas.
                    <br/><br/>

                    If you are a current client, or would like to book our services beginning mid-February or beyond, please contact us at <a href="mailto:info@pawblemsolved.com">info@pawblemsolved.com</a>.
                    <br/><br/>

                    We look forward to meeting some new furry friends!
                    <br/><br/>

                    ~ The Pawblem Solved Team
                  
                </div>   
                <div id="vacationresponse">
					<br/>
					<strong>
						<p>
							Pawblem Solved will be out of the office from Wednesday, July 26th to 
							Wednesday, August 9th, 2017.
						</p>
						<p>
							We will reply to all inquiries after Wednesday, August 9th, 2017.
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
                <form action="emailform.php" method="POST">
                                    <div class="statement">
                    <h1>
                        Pawblem Solved offers mid-day dog walks while you're at work and kitty visits in Bellevue, Redmond and Kirkland.
                    </h1>
                </div>
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
						       
						       <select name="dogcount">
							        <option value="0">0</option>
							        <option value="1">1</option>
							        <option value="2">2</option>
							        <option value="3">3</option>
							        <option value="4+">4+</option>
						        </select>

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
                                <div class="input-message">We are currently booked for mid-day dog walks, but please do check back in the future!</div>
						        -->                            
                         
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
               

		                <div id="vacationresponse">
							<br/>
							<strong>
								<p>
									Pawblem Solved will be out of the office from Thursday, October 13th to 
									Tuesday, October 18th, 2016.
								</p>
								<p>
									We will reply to all inquiries after Tuesday, October 18th, 2016.
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
