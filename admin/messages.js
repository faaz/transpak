// form validation function //
function validate(thisform)
{
with (thisform)
  {
  if (validate_required(hawb)==false 
  || validate_required(destn_code)==false 
  || validate_required(service)==false 
  || validate_required(date_received)==false 
  || validate_required(users)==false 
  || validate_required(company)==false 
  || validate_required(address_line_1)==false 
  || validate_required(city)==false 
  || validate_required(country)==false 
  || validate_required(postcode)==false  
  || validate_required(number_pieces)==false  
  || validate_required(bag_no)==false  
  || validate_required(weight)==false  
  || validate_required(value)==false  
  || validate_required(currency)==false  
  || validate_required(hv_lv)==false  
  || validate_required(amount)==false  
  || validate_required(special_charges)==false  
  || validate_required(gst)==false  )
  {return false;field.focus();}
  }
}
function validate_required(field) {
	with (field)
	{

//  document.write(field.name);
  var alphabets = /[a-z]/i;
//  var gender = form.gender.value;
//  var message = form.message.value;
//  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
//  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
//  var messageRegex = new RegExp(/<\/?\w+((\s+\w+(\s*=\s*(?:".*?"|'.*?'|[^'">\s]+))?)+\s*|\s*)\/?>/gim);
  if(value==null||value=="") {
	
    inlineMsg(field.name,'This field is required.',2);
    return false;
  }
  if(field.name=='hawb' && value<=10000000) {
	
    inlineMsg(field.name,'HAWB no. is out of range.',2);
    return false;
  }
  if(/[a-z]/i.test(value) && field.name=='hawb' 
  || /[a-z]/i.test(value) && field.name=='telephone'
  || /[a-z]/i.test(value) && field.name=='bag_no'
  || /[a-z]/i.test(value) && field.name=='weight'
  || /[a-z]/i.test(value) && field.name=='dim_weight'
  || /[a-z]/i.test(value) && field.name=='act_weight'
  || /[a-z]/i.test(value) && field.name=='amount'
  || /[a-z]/i.test(value) && field.name=='special_charges'
  || /[a-z]/i.test(value) && field.name=='gst') {
	
    inlineMsg(field.name,'Enter numerical value only.',2);
    return false;
  }
  if(/[,]/i.test(value)) {
	
    inlineMsg(field.name,'No commas allowed.',2);
    return false;
  }
	}
/*  if(!name.match(nameRegex)) {
    inlineMsg('name','You have entered an invalid name.',2);
    return false;
  }
  if(email == "") {
    inlineMsg('email','<strong>Error</strong><br />You must enter your email.',2);
    return false;
  }
  if(!email.match(emailRegex)) {
    inlineMsg('email','<strong>Error</strong><br />You have entered an invalid email.',2);
    return false;
  }
  if(gender == "") {
    inlineMsg('gender','<strong>Error</strong><br />You must select your gender.',2);
    return false;
  }
  if(message == "") {
    inlineMsg('message','You must enter a message.');
    return false;
  }
  if(message.match(messageRegex)) {
    inlineMsg('message','You have entered an invalid message.');
    return false;
  }
  return true;*/
}

// START OF MESSAGE SCRIPT //

var MSGTIMER = 20;
var MSGSPEED = 5;
var MSGOFFSET = 3;
var MSGHIDE = 3;

// build out the divs, set attributes and call the fade function //
function inlineMsg(target,string,autohide) {
  var msg;
  var msgcontent;
  if(!document.getElementById('msg')) {
    msg = document.createElement('div');
    msg.id = 'msg';
    msgcontent = document.createElement('div');
    msgcontent.id = 'msgcontent';
    document.body.appendChild(msg);
    msg.appendChild(msgcontent);
    msg.style.filter = 'alpha(opacity=0)';
    msg.style.opacity = 0;
    msg.alpha = 0;
  } else {
    msg = document.getElementById('msg');
    msgcontent = document.getElementById('msgcontent');
  }
  msgcontent.innerHTML = string;
  msg.style.display = 'block';
  var msgheight = msg.offsetHeight;
  var targetdiv = document.getElementById(target);
  targetdiv.focus();
  var targetheight = targetdiv.offsetHeight;
  var targetwidth = targetdiv.offsetWidth;
  var topposition = topPosition(targetdiv) - ((msgheight - targetheight) / 2);
  var leftposition = leftPosition(targetdiv) + targetwidth + MSGOFFSET;
  msg.style.top = topposition + 'px';
  msg.style.left = leftposition + 'px';
  clearInterval(msg.timer);
  msg.timer = setInterval("fadeMsg(1)", MSGTIMER);
  if(!autohide) {
    autohide = MSGHIDE;  
  }
  window.setTimeout("hideMsg()", (autohide * 1000));
}

// hide the form alert //
function hideMsg(msg) {
  var msg = document.getElementById('msg');
  if(!msg.timer) {
    msg.timer = setInterval("fadeMsg(0)", MSGTIMER);
  }
}

// face the message box //
function fadeMsg(flag) {
  if(flag == null) {
    flag = 1;
  }
  var msg = document.getElementById('msg');
  var value;
  if(flag == 1) {
    value = msg.alpha + MSGSPEED;
  } else {
    value = msg.alpha - MSGSPEED;
  }
  msg.alpha = value;
  msg.style.opacity = (value / 100);
  msg.style.filter = 'alpha(opacity=' + value + ')';
  if(value >= 99) {
    clearInterval(msg.timer);
    msg.timer = null;
  } else if(value <= 1) {
    msg.style.display = "none";
    clearInterval(msg.timer);
  }
}

// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
  var left = 0;
  if(target.offsetParent) {
    while(1) {
      left += target.offsetLeft;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.x) {
    left += target.x;
  }
  return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
  var top = 0;
  if(target.offsetParent) {
    while(1) {
      top += target.offsetTop;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.y) {
    top += target.y;
  }
  return top;
}

// preload the arrow //
if(document.images) {
  arrow = new Image(7,80); 
  arrow.src = "images/msg_arrow.gif"; 
}