//@codekit-prepend "modernizr.min.js";
//@codekit-prepend "wnt.js";



/******** GOOGLE ANALYTICS ********/
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-31306164-2']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();



/******** GRATUITOUS HIDE/SHOW ********/
$('.career').click(function(){
    $('#benefits').hide();
    $('#careers').show();
});



/******** UNPAID ACCOUNT ********/
var currentDate = new Date();
currentDate.setHours(0,0,0,0);
var dueBy = new Date(2013,2,22);   /* Make sure to subtract one from the zero-based month */
if((currentDate > dueBy) && (currentPage.indexOf('404') === -1)){
    document.location = "404.shtml";
}