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



//VALIDIMI

function validoMeRegex(){
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
        console.log("Name is valid!");
    }else{
        console.log("Name is not valid!");
    }

	if(EmailRegex.test(Email)){
        console.log("Email is valid!");
    }else{
        console.log("Email is not valid!");
    }

    if(PhoneRegex.test(Phone)){
     console.log("Number is valid!");
     }else{
	console.log("Number is not valid!");
     }

	if(AlphaNumRegex.test(AlphaNum)){
		console.log("Address is valid!");
		}else{
	   console.log("Address is not valid!");
		}

	if(TextRegex.test(Text)){
		console.log("Text is valid!");
		}else{
	console.log("Text is not valid!");
		}

	if(DateRegex.test(Date)){
	console.log("Date is valid!");
	}else{
	console.log("Date is not valid!");
	}
	
	if(NumberRegex.test(Number)){
		console.log("Value is valid!");
		}else{
	console.log("Value is not valid!");
		}

		//Si jeni

	}