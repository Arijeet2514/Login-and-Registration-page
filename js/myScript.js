$(function(){
    $('#logIn').on('click',function(e){
        $('.login-form').hide(1000);
    	$('.register-form').show(1000);
        $('#btn1').css({left : 114});
        e.preventDefault()
    });
});
$(function(){
	$('#signUp').on('click',function(e){
		$('.register-form').hide(1000);
		$('.login-form').show(1000);
        $('#btn1').css({left : 0});
        e.preventDefault()
	});
});

function formValidation(oEvent){
    oEvent=oEvent || window.event;
    var textField = oEvent.target || oEvent.srcElement;

    var tick1=true;
    var msg="";
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = document.getElementById("remail");
    var pass1=document.getElementById("rpass").value;
    var pass2=document.getElementById("rcpass").value;
    var e_ele=document.getElementById("remail-error");
    var name=document.getElementById("rname").value.length;
    var n_ele=document.getElementById("rname-error");
    var p_ele=document.getElementById("rpass-error");
    var c_ele=document.getElementById("rcpass-error");
    var t_ele=document.getElementById("cbox-error");

    var pcheck= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/;
    if(!filter.test(email.value) && email.value.length>0){
        tick1=false;
        e_ele.innerHTML="Email is invalid";
    }
    else{
        e_ele.innerHTML="";
    }
    if(email.value.length==0){
        tick1=false;
    }
    if(name<3 && name>0){
        tick1=false;
        n_ele.innerHTML="Name should be minimum of 3 characters";
    }
    else{
        n_ele.innerHTML="";
    }
    if(name==0){
        tick1=false;
    }
    if(document.getElementById("rroll").value.length<1){
        tick1=false;
    }
    if(document.getElementById("rdob").value.length==0){
        tick1=false;
    }
    if(!pcheck.test(pass1) && pass1.length>0){
        tick1=false;
        p_ele.innerHTML="The password must contain atleast one lowercase, one uppercase, one numeric digit and one special character and should be of length between 8 to 20";
    }
    else{
        p_ele.innerHTML="";
    }
    if(pass1.length==0){
        tick1=false;
    }
    if(pass1!=pass2 && pass2.length>0){
        tick1=false;
        c_ele.innerHTML="Both passwords must match";
    }
    else{
        c_ele.innerHTML="";
    }
    if(pass2.length==0){
        tick1=false;
    }
    if(!document.getElementById("cbox").checked){
        tick1=false;
    }
    if(tick1){
        document.getElementById("rsubmit").disabled=false;
    }
    else{
        document.getElementById("rsubmit").disabled=true;
    }
}

function formValidation1(oEvent){
    oEvent=oEvent || window.event;
    var textField = oEvent.target || oEvent.srcElement;

    var tick1=true;
    var msg="";
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = document.getElementById("lemail");
    var e_ele=document.getElementById("lemail-error");
    if(!filter.test(email.value) && email.value.length>0){
        tick1=false;
        e_ele.innerHTML="Email is invalid";
    }
    else{
        e_ele.innerHTML="";
    }
    if(email.value.length==0){
        tick1=false;
    }
    if(document.getElementById("lpass").value.length<8){
        tick1=false;
    }
    if(tick1){
        document.getElementById("llogin").disabled=false;
    }
    else{
        document.getElementById("llogin").disabled=true;
    }
}

function resetForm(){
    document.getElementById("rsubmit").disabled=true;
    var frmMain=document.forms[0];
    frmMain.reset();
}

function resetForm1(){
    document.getElementById("llogin").disabled=true;
    var frmMain=document.forms[1];
    frmMain.reset();
}

window.onload=function(){
    var rsubmit=document.getElementById("rsubmit");
    var rcancel=document.getElementById("rcancel");
    var llogin=document.getElementById("llogin");
    var lcancel=document.getElementById("lcancel");

    var rname=document.getElementById("rname");
    var remail=document.getElementById("remail");
    var rdob=document.getElementById("rdob");
    var rroll=document.getElementById("rroll");
    var rpass=document.getElementById("rpass");
    var rcpass=document.getElementById("rcpass");
    var cbox=document.getElementById("cbox");
    var lemail=document.getElementById("lemail");
    var lpass=document.getElementById("lpass");
    var rpbox=document.getElementById("rpbox");

    var tick1=false;
    document.getElementById("rsubmit").disabled=true;
    document.getElementById("llogin").disabled=true;
    rname.onkeyup=formValidation;
    remail.onkeyup=formValidation;
    rdob.onkeyup=formValidation;
    rroll.onkeyup=formValidation;
    rpass.onkeyup=formValidation;
    rcpass.onkeyup=formValidation;
    cbox.onclick=formValidation;
    lemail.onkeyup=formValidation1;
    lpass.onkeyup=formValidation1;
    rpbox.onclick=formValidation1;
    rcancel.onclick=resetForm;
    lcancel.onclick=resetForm1;
}