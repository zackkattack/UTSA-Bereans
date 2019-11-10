function validate(){
    var button = document.getElementById("submit");
    var user_validateion = validate_username();
    var date_check = _checkDate();

    button.disabled = !date_check;
}
function validate_username(){
    // Username must be A-Z and a-z without numbers
    var username = document.getElementById('username').value;
    var err_len = document.getElementById('errLen');
    var err_content = document.getElementById('errChar');
    var regex = username.match(/^[A-Za-z]+$/i);
    var results = true;
    err_len.innerText = '';
    err_content.innerText = '';

    if(username.length < 4){
        err_len.innerText = "Error: User names must be at least 4 chatacters long" ;
        results = false;
    }

    if (regex){ results = true; }
    else { 
        err_content.innerText = "Error: User names must only contain charaters between A-Z and a-z";
        results =  false; 
    }

    return results
}

function _getSelectedButton(){
    var months = document.getElementsByName('month');
    var selected = "";
    for(var i =0; i<months.length; i++){
	    if(months[i].checked){ selected=months[i].id; }	
    }    
    return selected;
}

function _checkDay(){
    var year = document.getElementById('year').data; 
    var day = document.getElementById('day').value;
    var msgDay = document.getElementById("errDay");
    var month = _getSelectedButton();

    var limit;

    if(month==='month-1' || month==='month-3' || month==='month-5' || 
       month==='month-7' || month==='month-8' || month==='month-10' || 
       month==='month-12'){
	limit = 31;
    }else if(month==='month-4' || month==='month-6' || month==='month-9' || 
       month==='month-11'){
	limit =  30;
    }else if (month==='month-2'){ 
        if(year%4 == 0){ limit = 29; }
        else { limit = 28; }
    }else {
    	limit = -1;
    }
    
    if(day < 0 || day > limit){
        msgDay.innerText = "Error: Invalid Day";
	    return false;
    }

    msgDay.innerText = "";
    return true;
}

function _checkDate() {
    var year = document.getElementById("year").value;
    var date = _checkDay();
    var msgYear = document.getElementById("errYear");

    if (year == "" ) {
        msgYear.innerText = "Year is required and must be between 1900 and 2100";
        return false;
    }

    if(isNaN(year) || year <= 1900 || year >= 2100) {
        msgYear.innerText = "Year must be between 1900 and 2100, not'" + year + "'";
        return false;
    }
    
    msgYear.innerText = "";
    return true && date;
}
