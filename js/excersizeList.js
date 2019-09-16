
getUsersExcersizes(function(eArr){
	
	var excersizes = JSON.parse(eArr);

	for(var i = 0; i < excersizes.length; i++){
		addToTable(excersizes[i]);
	}

});


function addToTable(excersizeArr){

	var table = document.getElementById("excersizelist");
	//console.log(excersizeArr);
	var eType = excersizeArr['excersize_type'];
	var eReps = excersizeArr['excersize_reps'];
	var eSets = excersizeArr['excersize_sets'];
	var eWeight = excersizeArr['excersize_weight'];
	var eDate = excersizeArr['excersize_date'];

	var row = table.insertRow(0);

	var cell = row.insertCell(0);

	cell.innerHTML = eType + " " + eReps + " " + eSets + " " + eWeight + " " + eDate;
}

function getUsersExcersizes(callback){

	var req = ""

	$.ajax({

		type: 'GET',

  		url: '../php/excersize/getExcersize.php',

  		data: {getAllExcersizes: req},

	  	success: callback,

	 	error: function(data) {
	    	alert("error fetching Users Excersizes")
	    	
	  	}

	});

}