// JavaScript Document
document.addEventListener('DOMContentLoaded',function(event){
	// array with texts to type in typewriter
	var dataText = [ "Gabriel John Utterson and his cousin Richard Enfield reach the door of a large neglected house on their weekly walk...", 
				  "...Enfield tells Utterson that months ago he saw a sinister-looking man named Edward Hyde trample a young girl after accidentally bumping into her...", 
				  "...Enfield forced Hyde to pay £100 to avoid a scandal. Hyde brought them to this door and provided a cheque signed by a reputable gentleman."
				   ];
	
	// typewriter speed 
	// set delay time between each character typing time 
	var CharDelay = 80;
	
	// pause time between each completed word (delay before next word starts) 
	var WordPause = 1000;
	
	// set initial word in dataText array 
	var WordOffset = 0;
	
	// set sequence restart interval N [ms] 
	var RestartInterval = 10000;
	
	// type one text in the typwriter 
	// keeps calling itself until the text is finished 
	function typeWriter(text, i, fnCallback) {
		// chekc if text isn't finished yet 
		if (i < (text.length)) {
			// add next character to paragraph 
			document.querySelector("#desctwo").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
			
			// wait for a while and call this function again for next character
			setTimeout(function() {
				typeWriter(text, i + 1, fnCallback);
			}, CharDelay);
		}
		// text finished, call callback if there is a callback function
		else if (typeof fnCallback === 'function') {
			// call callback after timeout
			setTimeout(fnCallback, WordPause);
		}
	}
	// start a typewriter animation for a text in the dataText array
	function StartTextAnimation(i) {
		if (typeof dataText[i] === 'undefined'){
			setTimeout(function() {
				StartTextAnimation(WordOffset);
			}, RestartInterval);
		}
		// check if dataText[i] exists
		if (i < dataText[i].length) {
			// text exists! start typewriter animation
			typeWriter(dataText[i], 0, function(){
				// after callback (and whole text has been animated), start next text
				StartTextAnimation(i + 1);
			});
		}
	}
	// start the text animation
	StartTextAnimation(0);
});
