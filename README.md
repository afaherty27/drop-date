# drop-date

#WALKTHROUGH
A link is shown on a page (in this case, the `demo.html`).  When clicking on
the link, a small script of JavaScript is called that opens `drop-date.php` in 
a new window, sized to fit the content of the application.

In this window the user is instructed to provide the start and end date of the 
class they will be dropping.  When the boxes are clicked, they will be shown a 
datepicker from jQuery UI.  Selecting the month, year and day will populate the
data in the box.  When the user clicks the Calculate button, `drop-date-calculator.php`
is triggered, and the dates entered are processed.

The form fields are still populated with the user entered dates, and two new dates
will be displayed; these correspond with when the class will need to be dropped by
to receive the refund percentage shown.

If the user desires, they can repeat the process with another set of dates if 
necessary

##BACKGROUND
During my internship, I participated in a relaunch of the website for the college.  
While validating links, I found a 'Drop Date Calculator'.  

The calculator was a Microsoft Excel spread sheet that was nearly 5 years old, 
and had a broken link that could not be altered, unless I found the original 
creator of the spreadsheet.

I was looking for something to do in my down time that would require me to 
start exploring PHP.  I chose to focus myself on Java as the emphasis of my degree
and did not have much, if any, exposure to PHP prior to my and this seemed like 
a small project that would help me get over the awkwardness I felt when I 
reviewed PHP code. 

