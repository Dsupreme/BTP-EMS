// JavaScript Document
function addrow(tableid) {
	var tablename = document.getElementById(tableid);
	var rows = tablename.rows.length;
	if (rows < 8) {  //Maximum number of rows allowed
		var newrow = tablename.insertRow(rows);
		var col = tablename.rows[0].cells.length;
		for (var i=0; i<col; i++) {
			var newcell = newrow.insertCell(i);
			newcell.innerHTML = tablename.rows[0].cells[i].innerHTML;
		}
	}
	else {
		alert(" Maximum number of rows allowed is 8");
	}
}

function delrow(tableid) {
	var tablename = document.getElementById(tableid);
	var rows = tablename.rows.length;
	if (rows<=1) {
		alert ("Cannot remove all the rows.");
	}
	else {
		tablename.deleteRow((rows-1));
	}
}
//////
/*
function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}

*/
		
	