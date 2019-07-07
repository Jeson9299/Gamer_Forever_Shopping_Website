var e=document.getElementById("i1");
var colors=["ss1.jpeg","ss2.jpeg","ss3.jpg","ss4.jpg"];
var nextColor=0;
setInterval("e.src=colors[nextColor++%colors.length];",1000);

function overlay_on1(){
    document.getElementById("overlay1").style.display = "block";
}

function formvalidation(){
	var fname = document.getElementById("fname").value;
    var letters = /^[A-Za-z]+$/;
    if (fname.match(letters) ) {
        document.getElementById("dispfname").innerHTML = "Valid Username";
    } else {
        alert("Invalid Name");
    }

    var fname = document.getElementById("lname").value;
    var letters = /^[A-Za-z]+$/;
    if (fname.match(letters) ) {
        document.getElementById("dispfname").innerHTML = "Valid Username";
    } else {
        alert("Invalid Name");
    }

    var email = document.getElementById("email").value;
    var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.match(mail)) {
        document.getElementById("dispemail").innerHTML="Valid Email";
    }
    else{
        alert("Invalid Email");
    }

    var contact_no = document.getElementById("contact_no").value;
    var letters = /^[0-9]+$/;
    if (contact_no.match(letters) ) {
        document.getElementById("dispcontact_no").innerHTML = "Valid Contact Number";
    } else {
        alert("Invalid Contact number");
    }

    var address = document.getElementById("address").value;
    var letters = /^[0-9A-Za-z]+$/;
    if (address.match(letters) ) {
        document.getElementById("dispaddr").innerHTML = "Valid Address";
    } else {
        alert("Invalid Address");
    }

    var zip = document.getElementById("zip").value;
    var letters = /^[0-9]+$/;
    if (zip.match(letters) ) {
        document.getElementById("dispzip").innerHTML = "Valid ZIP";
    } else {
        alert("Invalid ZIP");
    }

    var state=document.getElementById("state");
    stateselect(state);
    function stateselect(){
        if (state.value=="default") {
            alert("Please select a state");
        }
    }

    var password1 = document.getElementById("password1").value;
    if (password1.length >=7 && password1.length<=12 ) {
        document.getElementById("disppass").innerHTML = "Valid Password";
    } else {
        alert("Invalid Password");
    }

    var password2= document.getElementById("password2").value;
    if(password2 == password1)
    {
    	document.getElementById("disppass2").innerHTML="Password Matched";
    }
    else{
    	alert("Password does not match");
    }

}
function overlay_on2(){
    document.getElementById("overlay2").style.display = "block";
}
function overlay_off() {
    document.getElementById("overlay").style.display = "none";
}

var cart_count=0;
cart_count=getElementById("cart_count").attr("data-value");
function add_to_cart(){
	cart_count=cart_count+1;
	document.getElementById("cart_count").innerHTML=cart_count;
}

function add_product1(){
var cart_total=document.getElementById("cart_total").value;
var ps4_1=document.getElementById("ps4_1").value;
	cart_total=parseInt(cart_total)+parseInt(ps4_1);
	document.getElementById("cart_total").value=cart_total;
}

function add_product2(){
var cart_total=document.getElementById("cart_total").value;	
var ps4_2=document.getElementById("ps4_2").value;
	cart_total=parseInt(cart_total)+parseInt(ps4_2);
	document.getElementById("cart_total").value=cart_total;
}


