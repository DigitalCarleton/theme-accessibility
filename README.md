# theme-accessibility
Abstraction of the Making the History of 1989 theme.

Making an Accessible theme – updated on 04/26/2018

Accessibility is the practice of making a web site usable by people with disabilities. This documentation on making an 
accessible theme in Omeka will provide step-step guides for changing the codes(HTML/CSS/JavaScript/PHP) in the default 
Berlin theme to make it more accessible. 
Skill level: - 
HTML/CSS – intermediate level
JavaScript – intermediate level
PHP – intermediate level

Check out the free online resources to learn more about HTML, CSS and JavaScript.
http://htmldog.com  

You will need to be able to access the files in the Omeka folder. 
Download the Omeka folder using this link.   
https://github.com/omeka/Omeka   
Connect to your local server. 
Save the downloaded local Omeka folder in htdocs folder in your local server. We will refer this folder as Omeka folder 
in the following references. 

 
Go to htdocs, then open Omeka folder in it. 

1.	Changing the css in style.css file. 
In Omeka folder, Go to themes -> Berlin -> css -> style.css 

i.	Change the color of the text to black. 
Steps: - 
•	In style.css, look for all the colors in the header h’s
•	Change all the color value to black by either
	Changing the value to the keyword “black”
        Or 
	Changing the value to the “#000000” 
Note: - In certain text editors like Brackets, you should be able to see the color when you hover the cursor on top of 
the value.
ii.	Change the font to Verdana form the sans-serif family.  
Note: - The “ticks” and “tails” of serif fonts take up a larger amount of space on a screen. Hence, in general, sans serif 
fonts display better on computers and mobile devices and are more readable.  
•	In style.css, look for all the fonts 
•	Change the font family to sans-serif from serif if present
•	Change the font to Oswald if it is Helvetica or Times New Roman
2. Replacing the search container from header to the nav section
i. Open header.php 
ii. Look for the id "search container" and place the whole div section beneath the nv id section. 
 


