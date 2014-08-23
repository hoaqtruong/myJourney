/* this is a external JavaScript file
Name:  Hoa Truong
Last Update date: 5/3/2010*/

/* calcSquare function calculates square number of a number
given from an alert message */
function calcSquare() {
	num = parseInt(prompt("Please enter a number", 0));
	alert("square of your number is " + num*num) ;
	
}
/* getNum function prompts until a valid number is given */
function getNum() {
	var num = "null";
	while (isNaN(num))
	num = parseInt(prompt("Please enter a number", 0));
	if (num) alert("Entered number is " + num);
	
}

/*writeList function writes an order list from a string provided.
Items are seperated by a "|", "/", ":", or " " otherwise. */
function writeList() {
	var input = "";
	var output ="";
	var list = new Array();
	var seperator;
	while (!input) {
		input = prompt("Enter a list of item", "");
		
		

	
		if (input) {
			
			
			if (input.indexOf(",") != -1) {seperator = ",";}
			else if (input.indexOf("|") != -1) {seperator = "|";}
			else if (input.indexOf("/") != -1) {seperator = "/";}
			else if (input.indexOf(":") != -1) {seperator = ":";}
			else {seperator = " "};

			list = input.split(seperator);
			var i = 0;
			output = "<ol>";
			for (i=0;i<list.length;i++){
				output += "<li>" + trim(list[i]) + "</li>";
			}			
			output += "</ol>";
			document.write(output);


		}
		
	}	
}
/*trim function will truncate a space at the begining or the end of a string */
	function trim (myString) {
		return myString.replace(/^s+/g,'').replace(/s+$/g,'');
	}


/*setColor function set background color */
	function setColor(color) {
		document.body.style.backgroundColor = color;

	}

/*getColor function get a color and use setColor to set the page bgcolor */
function getColor(msg)  {
	var color;
	color = prompt(msg, "white");
	if (color == "aqua" || color == "black" || color == "blue" || color == "fuchsia" || color == "gray" || color == "green" || color == "lime" || color == "maroon" || color == "navy" || color == "olive" || color == "purple" || color == "red" || color == "silver" || color == "teal" || color == "white"|| color == "yellow") {
		setColor(color);
	} else {
		alert("Invalid color!");
		setColor("white");
	}
}
