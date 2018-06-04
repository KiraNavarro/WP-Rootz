function comoFunciona(loop, location, style){
	setInterval(myCounter, 2000);
	var c = 1;
	function myCounter() {
		if (c >= 2) {
			var prev = c-1;
			$( style + ":nth-child(" + prev + ")" ).toggleClass( 'cf-text-block-on' );
		}
		
		if(c <= loop){
			$( style + ":nth-child(" + c + ")" ).toggleClass( 'cf-text-block-on' );
			$(style + '-cf-image').attr('src','../wp-content/themes/wp-rootz/img/'+ location + '/image'+ c +'.png');
			c++;
		} else {
			c = 1;
		}
		
	}
}

