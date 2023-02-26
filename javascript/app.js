const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

//validimi i register

	function validateRegister() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var city = document.getElementById("city").value;
    var country = document.getElementById("country").value;
    var phone = document.getElementById("phone").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    // Check if first name contains only letters and spaces
    var fnameRegex = /^[a-zA-Z\s]*$ /;
    if (!fnameRegex.test(fname)) {
       alert("Please enter a valid name.");
       return false;
    }

	 // Check if last name contains only letters and spaces
	var lnameRegex = /^[a-zA-Z\s]*$ /;
    if (!lnameRegex.test(lname)) {
       alert("Please enter a valid name.");
       return false;
    }

	// Check if city name contains only letters and spaces
	var cityRegex = /^[a-zA-Z\s]*$ /;
    if (!cityRegex.test(city)) {
       alert("Please enter a valid city name.");
       return false;
    }

	// Check if country name contains only letters and spaces
	var countryRegex = /^[a-zA-Z\s]*$ /;
    if (!countryRegex.test(country)) {
       alert("Please enter a valid city name.");
       return false;
    }

	//Check if phone number contains only numbers, no space
	var phoneRegex = /^0\d{8}$ /;
     if (!phoneRegex.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
     }

	// Check if username contains only letters
	var usernameRegex =/^[A-Za-z][A-Za-z0-9_]{7,29}$ /;
    if (!usernameRegex.test(username)) {
       alert("Please enter a valid username name.");
       return false;
    }
	
    
    // Check if email is valid
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$ /;
    if (!emailRegex.test(email)) {
       alert("Please enter a valid email address.");
       return false;
    }
    
    // Check if password contains at least 8 characters and at least one uppercase letter, one lowercase letter, and one number
    var passwordRegex = /^(?=.[a-z])(?=.[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$ /;
    if (!passwordRegex.test(password)) {
       alert("Please enter a valid password (at least 8 characters, one uppercase letter, one lowercase letter, and one number).");
       return false;
    }
    
 }
 //validateRegister()



//VALIDIMI i BOOK

function validateBook(){
    var Emri=document.getElementById('name').value;
    var EmriRegex=/^[A-Z]{1}[a-z]{5,15} $/
    
    var EmailRegex=/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/
    var Email=document.getElementById('email').value;

    var PhoneRegex=/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/
    var Phone=document.getElementById('phone').value;

	var DateRegex=/^(0?[1-9]|1[0-2])[\/](0?[1-9]|[12]\d|3[01])[\/](19|20)\d{2}$/
	var Date=document.getElementByClassName('date').value;

	//for address 
	var AlphaNumRegex=/^[\w\d\s ]{1,20}$/
    var AlphaNum=document.getElementById('alphanum').value;

	//for place to visit
	var TextRegex=/^[a-zA-Z ]*$/
    var Text=document.getElementById('text').value;

	var NumberRegex=/[0-9]*$/
    var Number=document.getElementById('num').value;
	

    if(EmriRegex.test(Emri)){
        alert("Name is valid!");
    }else{
        alert("Name is not valid!");
    }

	if(EmailRegex.test(Email)){
        alert("Email is valid!");
    }else{
        alert("Email is not valid!");
    }

    if(PhoneRegex.test(Phone)){
		alert("Number is valid!");
     }else{
		alert("Number is not valid!");
     }

	if(AlphaNumRegex.test(AlphaNum)){
		alert("Address is valid!");
		}else{
		alert("Address is not valid!");
		}
	//where to:
	if(TextRegex.test(Text)){
		alert("Text is valid!");
		}else{
		alert("Text is not valid!");
		}

	if(NumberRegex.test(Number)){
		alert("Value is valid!");
		}else{
		console.log("Value is not valid!");
		}

	if(DateRegex.
		test(Date)){
		alert("Date is valid!");
		}else{
		alert("Date is not valid!");
		}
	
	//VALIDIMI I LOGIN FORMES

	function validateLogin(){
		var email = document.getElementById('email').value;
		var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

		var password = document.getElementById('password').value;
		var passRegex = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/
	
		if (emailRegex.test(email)) {
			alert("Email is valid!");
		} 
			else {
			alert("Email is not valid!");
		}
	
		if (passRegex.test(password)) {
			alert("Password is valid!");
		} 
			else {
			alert("Password is not valid!");
		}
		
		}
	

}



//slider 

var vargu=[
    /*'img/img-2.jpg',*/
    '../img/s1.jpg',
    /*'img/s2.jpg',
    'img/img-3.jpg',*/
    /*'img/img-4.jpg',*/
    /*'img/s4.jpg',*/
    '../img/s5.jpg',
    '../img/s6.jpg'
    
    ]
    
    var index=0;
    var koha=2000;
    
    function krijoSlider(){
        document.getElementById('imazhet').src=vargu[index];
        index++;
    
        if(index==vargu.length){
            index=0;
        }
        setTimeout("krijoSlider()", koha);
    
    }
    
    krijoSlider();
