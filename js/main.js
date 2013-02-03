/******** GOOGLE ANALYTICS ********/
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-31306164-2']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

/******** LOCK WINDOW ********/
function BlockMove(event) {
    /* Prevents elasticity for window as a whole unit when viewed on mobile */
    if(wnt.mobile == true){
        event.preventDefault();
    }
}

/******** HIGHLIGHT CURRENT MENU ITEM ********/
var currentPage = document.location.href;
for(i=0; i < $('menu').children('li').length; i++){
    var currentMenuItem = $('menu').children('li').eq(i);
    // Is it a top-level menu item?...
    if(currentMenuItem.children('a').attr('href') == currentPage){
        currentMenuItem.addClass('active');
    // ...or a second-level menu item?
    } else {
        for(j=0; j < currentMenuItem.find('li').length; j++){
            if(currentMenuItem.find('li').eq(j).find('a').attr('href') == currentPage){
                currentMenuItem.addClass('active');
                currentMenuItem.find('li').eq(j).addClass('active');
            }
        }
    }
}

$('.state').hover(
    function(){
        console.log($(this).attr('data-id'));
    },
    function(){
        console.log('WHERE?!');
    }
);