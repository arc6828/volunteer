//INPUT
var a = [
	{ _id : "", address : "1"   },
	{ _id : "", address : "2"},
	{ _id : "", address : "3"}	
];


//PROCESS
var b = [];
for(var i = 0; i<a.length; i++){
	console.log(a[i]);
	b.push(a[i].address);	
}

//OUTPUT
var z = [
	"1","2","3"
];

console.log("b :  " , b);