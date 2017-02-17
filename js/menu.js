// JavaScript Document
var total_items = 8; // total items in the homepage
//var nitems=0;	//count if item has selected


var items_name = [
    "Wedding Cake",    //0
    "Panna Cotta",    //1
    "Macarons",      //2
    "Crème Brûlée", //3
    "Eclairs",      //4
    "Sablés",       //5
    "Cupcakes",     //6
    "Cake Pop"      //7
]



function readCookie(name) {
	var nameEQ = name + "=";
	var carray = document.cookie.split(';');
	for(var i=0;i < carray.length ;i++) {
		var cchar = carray[i];
		while (cchar.charAt(0)==' ') cchar = cchar.substring(1,cchar.length);
		if (cchar.indexOf(nameEQ) == 0) return cchar.substring(nameEQ.length,cchar.length);
	}
	return null;
} 	


//var samepage = false;
function addtoQuote(obj, n){
	
        //check if the page loaded as first time
        /*
        if(!samepage){
            nitems = parseInt(readCookie('numberOfCount'));
            samepage = true;
        }
        */
        nitems = parseInt(document.getElementById('nitem').innerHTML);
        
	n = parseInt(n);
	
	var readval = readCookie('menu[' + n + ']');
	
	if(readval == 'true'){
		//alert('onoff[' + n + ']----' + readval );
		document.cookie = 'menu[' +  n + ']= false';
                obj.innerHTML  = 'Add to Quote &raquo;';
                obj.style.color = 'red'; //green  
                nitems--;
                //document.getElementById('nitem').innerHTML = nitems;
	}else{
		//alert('onoff[' + n + ']----' + readval );
		document.cookie = 'menu[' +  n + ']= true';              
                obj.innerHTML  = 'Added to Quote List';
                obj.style.color = 'blue'; //back to red                             
                nitems++;
                //document.getElementById('nitem').innerHTML = nitems;
	}
        document.getElementById('nitem').innerHTML = nitems;
	
}	
	
/**
 * This function will add the list the user selected 
 * to 'modal body'
 * @returns
 */
function sendQuoteList(){
    
    //check if the page loaded as first time
    /*
    if(!samepage){
        nitems = parseInt(readCookie('numberOfCount'));
        samepage = true;
    } 
    */
    nitems = parseInt(document.getElementById('nitem').innerHTML);
    
    var selected_items = "";
    for(var i = 0 ; i <total_items; i++){
        var readval = readCookie('menu[' + i + ']');
        if(readval == 'true'){
            selected_items += 
                    "<em><blockquote id='finderDeco_menu_modal'><img class=' img-rounded img-responsive' src='images/menu/menu";
            selected_items += i.toString();
            selected_items += 
                    ".jpg' style='width: 7em; height: 7em;'>";
            selected_items += items_name[i];
            selected_items += "<br></blockquote></em>";
        }
    }
    
    if (nitems==0){ //when the user didn't select anything
        document.getElementById('modal_body_items').innerHTML = 
                "Please select items first!";
    }else{
        document.getElementById('modal_body_items').innerHTML = selected_items;
    }
    
}