var scrambled = ['@','.','a','n','b','i','e','v','r','g','d','8','u'];                             
var order = [7, 4, 11, 3, 10, 0, 7, 5, 8, 9, 5, 3, 2, 1, 6, 10, 12];
var email = new Array();
for(var i=0; i<order.length; i++){
	email[i] = scrambled[order[i]]; 
}
for(var i=0; i<email.length; i++){ 
	document.write(email[i]); 
}

/*HTML to render this script on a page
:<script src="js/email.js"></script><noscript>[enable javascript to see my email address]</noscript> */
