<?php
	echo "this is header<br>";
?>

	<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">Click Me to get Date</button>
	<br>
	<p id="demo" ></p><br>
	<button type="button" onclick="myFunction()">Click Me </button>
	<p id="demo1" ></p><br>
	<p id="demo2" ></p><br>
	
	
<?php
?>
<script>
	//console.log("Hai");		// Hai
	//document.write(5+6);		// 11
	//window.alert(5+6);
	
	function myFunction() 
	{
	  document.getElementById("demo1").innerHTML = "Hello Ramya!";
	  document.getElementById("demo2").innerHTML = "How are you?";
	}
	
	//let no = 10; 
	//let no = 20; 
	//console.log(no);
	
	var arr = [1,2,3];
	//console.log(arr[2]);		// 3
	
	var obj = {name:"Ramya", FName:"ADMR", No:9059759692, Add:"Hyd"};
	//console.log(obj.FName);	//ADMR
	
	var st = "Ramya";
	//console.log(st.length);	//5
	
	var str = "Please locate where 'locate' occurs where!";
	//console.log(str.indexOf("where"));			//  14
	//console.log(str.lastIndexOf("where"));		//	36
	//console.log(str.lastIndexOf("ram"));			//	-1
	//console.log(str.indexOf("locate",15));		//	21
	//console.log(str.lastIndexOf("locate",15));	//	7
	//console.log(str.search("where"));				//	14
	
	var str = "Apple, Banana, Kiwi";
	//console.log(str.slice(7, 13));		//	Banana
	//console.log(str.slice(7));			// 	Banana, Kiwi
	//console.log(str.substring(7,13));		//	Banana
	//console.log(str.substr(7,2));			//	Ba
	
	var rep = "Please locate where 'locate' occurs where!";
	//console.log(rep.replace("locate","Ramya"));			//	Please Ramya where 'locate' occurs where!
	//console.log(rep.replace(/locate/g,"Ramya"));			//	Please Ramya where 'Ramya' occurs where!
	
	var cases = "Ramya is lazyfellow";
	//console.log(cases.toUpperCase(cases));				//	RAMYA IS LAZYFELLOW
	//console.log(cases.toLowerCase(cases));				//	ramya is lazyfellow
		
	var con1 = "Ramya";
	var con2 = "Harish";
	//console.log(con1.concat(con2));						//	RamyaHarish
	
	var trm = "            Hello Ramya              ";		
	//console.log(trm.trim());								//	Hello Ramya
	
	/* 
	
	Extracting String Characters:There are 3 methods for extracting string characters:

    charAt(position)
    charCodeAt(position)
    Property access [ ]
	
	*/
	var str = "HELLO WORLD";
	//console.log(str.charAt(8));			//	R
	//console.log(str.charCodeAt(8));		//	82
	//console.log(str[0]);					//	H
	
	/* Converting a String to an Array : A string can be converted to an array with the split() method: */
	var str = "a,b,c,d,e,f";
	var arr = str.split(",");
	//console.log(arr[3]);					//	d
	
	/* Sorting an array */
	
	var fruits = ["Banana", "Orange", "Apple", "Mango"];
	//console.log(fruits.sort()); 			//	Apple, Banana, Mango, Orange
	console.log(fruits.reverse());			// 	Mango,	Apple,	Orange,	Banana
	
	
	
	
	
	
	
	
	
	
	
	
</script>
<?php
	echo "<br>this is footer";
?>



