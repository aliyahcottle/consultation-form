<?php
$name = $_POST['name'];
$project_1 = $_POST['project_1'];
$project_2 = $_POST['project_2'];
$project_3 = $_POST['project_3'];
$project_4 = $_POST['project_4'];
$project_5 = $_POST['project_5'];
$project_6 = $_POST['project_6'];
$brand_1 = $_POST['brand_1'];
$brand_2 = $_POST['brand_2'];
$brand_3 = $_POST['brand_3'];
$brand_4 = $_POST['brand_4'];
$redesign_1 = $_POST['redesign_1'];
$redesign_2 = $_POST['redesign_2'];
$redesign_3 = $_POST['redesign_3'];
$redesign_4 = $_POST['redesign_4'];
$redesign_5 = $_POST['redesign_5'];
$redesign_6 = $_POST['redesign_6'];
$features_1 = $_POST['features_1'];
$features_2 = $_POST['features_2'];
$feature_3 = $_POST['feature_3'];
$feature_4 = $_POST['feature_4'];
$feature_5 = $_POST['feature_5'];
$feature_6 = $_POST['feature_6'];
$audience_1 = $_POST['audience_1'];
$audience_2 = $_POST['audience_2'];
$audience_3 = $_POST['audience_3'];
$audience_4 = $_POST['audience_4'];
$audience_5 = $_POST['audience_5'];
$ecommerce_1 = $_POST['ecommerce_1'];
$ecommerce_2 = $_POST['ecommerce_2'];
$ecommerce_3 = $_POST['ecommerce_3'];
$ecommerce_4 = $_POST['ecommerce_4'];
$ecommerce_5 = $_POST['ecommerce_5'];
$ecommerce_6 = $_POST['ecommerce_6'];
$lastwords = $_POST['lastwords']; 

$formcontent="  From: $name \n 
				What best describes your organization?: $project_1 \n 
				In short, what does your organization do?: $project_2 \n 
				Who is your organization’s target market?: $project_3 \n 
				Is this a new site or a redesign of an existing site?: $project_4 \n 
				Describe the concept, project or service this site is intended to provide or promote.: $project_5 \n 
				Who will be responsible for maintaining the site after launch for content and technical matters?: $project_6 \n 
				Using adjectives and short phrases, describe the site’s desired look and feel.: $brand_1 \n 
				Do you have a visual identity that you are happy with (including brand identity and logo) or is that something you need designed or evolved?: $brand_2 \n 
				What sites do you consider competitors? What are their strengths and weaknesses?: $brand_3 \n 
				What differentiates your product, services or ideas from your competition? $brand_4 \n 
				What is the purpose of the redesign?: $redesign_1 \n 
				Are there current specific issues with the current site you hope to correct or improve?: $redesign_2 \n 
				What is the web address of your current website?: $redesign_3 \n 
				Will you be keeping this address?: $redesign_4 \n 
				Is your current site powered by a content management system? If so, which?: $redesign_5 \n 
				What do you like and dislike about your current system?: $redesign_6 \n 
				Approximately how many pages will be on the site?: $features_1 \n 
				What features would you like to be included on the site?: $features_2 \n 
				How much of the site content is already created?: $features_3 \n 
				Are there any other technical requirements for the site that you haven’t mentioned so far?: $feature_4 \n 
				Does this project have a deadline? When are you hoping to launch?:$feature_5 \n 
				What is your budget or budget range for this project?: $feature_6 \n 
				To the best of your ability, describe the various groups that use the site. What are they hoping to accomplish?: $audience_1 \n 
				What are the general demographics of your audience (or site visitors)?: $audience_2 \n 
				For the purposes of this new site, which of these groups is the primary audience (the one you’d consider most important?): $audience_3 \n 
				What primary action do you want your primary audience to take when visiting your site?: $audience_4 \n 
				What audience needs does your existing site do a good job fulfilling? What audience needs aren’t being met by your current site? Where does it fall short?: $audience_5 \n 
				Do you already know what ecommerce solution you want to use?: $ecommerce_1 \n 
				What kinds of products will you be selling?: $ecommerce_2 \n 
				Do you currently use third party sites for sales (like Amazon, eBay, Etsy, etc.)?: $ecommerce_3 \n 
				Will your site sell memberships or access to premium content on your site?: $ecommerce_4 \n 
				What kind of reporting will you require from the site?: $ecommerce_5 \n 
				How will payments be processed? Will you use PayPal or a standard merchant account?: $ecommerce_6 \n 
				Any last words? $lastwords \n 
";
$recipient = "aliyahrcottle@gmail.com";
$subject = "Contact Form - $name";
$mailheader = "From: $name \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>

What best describes your organization?
In short, what does your organization do?
Who is your organization’s target market?
Is this a new site or a redesign of an existing site?
Describe the concept, project or service this site is intended to provide or promote.
Who will be responsible for maintaining the site after launch for content and technical matters?
Using adjectives and short phrases, describe the site’s desired look and feel.
Do you have a visual identity that you are happy with (including brand identity and logo) or is that something you need designed or evolved?</label>

What sites do you consider competitors? What are their strengths and weaknesses?
What differentiates your product, services or ideas from your competition? What is the purpose of the redesign?
Are there current specific issues with the current site you hope to correct or improve?
What is the web address of your current website?
Will you be keeping this address?
Is your current site powered by a content management system? If so, which?
What do you like and dislike about your current system?
Approximately how many pages will be on the site?
What features would you like to be included on the site?
How much of the site content is already created?
Are there any other technical requirements for the site that you haven’t mentioned so far?
Does this project have a deadline? When are you hoping to launch?
What is your budget or budget range for this project?
To the best of your ability, describe the various groups that use the site. What are they hoping to accomplish?
What are the general demographics of your audience (or site visitors)?
For the purposes of this new site, which of these groups is the primary audience (the one you’d consider most important?)
What primary action do you want your primary audience to take when visiting your site? 
What audience needs does your existing site do a good job fulfilling? What audience needs aren’t being met by your current site? Where does it fall short?
Do you already know what ecommerce solution you want to use?
What kinds of products will you be selling?
Do you currently use third party sites for sales (like Amazon, eBay, Etsy, etc.)?
Will your site sell memberships or access to premium content on your site?
What kind of reporting will you require from the site?
How will payments be processed? Will you use PayPal or a standard merchant account?
Any last words?




