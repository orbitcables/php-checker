// index hamberger function
// $(document).ready(function(){
//     $('.Header__menu').click(function(){
//         $('.header__navbarli').toggle();
//     });
// });

  $(document).ready(function(){
    $('#menuToggle').click(function(){
        $('#header_navbarli').toggle();
    });
});


// //form validation
// Submit = () =>{ 
//     var success= document.getElementById("success");
//     success.style.display = 'none';
//     var emailStandard = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
//     var txtname =  document.getElementById("name");
//     var txtEmail = document.getElementById("email");
//      var txtNumber = document.getElementById("phoneno"); 
//       var txtMsg = document.getElementById("message");  
     
   
//     var errEmail= document.getElementById("erremail"); 
//      var errNum = document.getElementById("errphoneno");  
//     var errMsg= document.getElementById("errmsg"); 
//     var errname= document.getElementById("errname"); 
    
   
    
//     if(txtEmail.value ==="" ){
//         errEmail.style.display="block";
//     }   
//     if(txtEmail.value !== ""){  
//         if(emailStandard.test(txtEmail.value)== true){ 
//             errEmail.style.display="none"; 
//         }
//         if(emailStandard.test(txtEmail.value)== false){ 
//              errEmail.innerHTML="Please enter valid email id";
//             errEmail.style.display="block"; 
//         }
//     } 

//    if(txtname.value===""){
//         errname.innerHTML="Please enter the name";
//         errname.style.display="block";   
//     }
//         if(txtname.value !== ""){ 
//         errname.style.display="none";    
//     }


//   if(txtMsg.value===""){
//         errMsg.innerHTML="Please enter the message";
//         errMsg.style.display="block";   
//     }
    
//     if(txtMsg.value !== ""){ 
//         errMsg.style.display="none";    
//     }


//      if(txtNumber.value ===""){
//       errNum.innerHTML = "Please enter the phone number";
//       errphoneno.style.display="block";
//   }
//   if(txtNumber.value !== "") { 
//       if(isNaN(txtNumber.value))
//       {
//           errNum.innerHTML = "Please enter phone number only";
//           errphoneno.style.display="block";
//       return false;
//       }
//      else if((txtNumber.value.length != 10))
//       {
//           errNum.innerHTML = " mobile number should be in 10 digit";
//           errphoneno.style.display="block";
//       return false;
//       }
//       else{ errphoneno.style.display="none";}
//   }
 

    
//     // if(selectOptions.value ==0){
//     //     errdrop.style.display="block";
//     // }
//     // if(selectOptions.value !=0){ 
//     //     // this.setState({select:"none"});
//     // }
// if((emailStandard.test(txtEmail.value)== true) && txtname.value.length >=1 && txtMsg.value.length >= 1 && txtEmail.value !== "" && txtname.value !=="" &&  txtMsg.value !=="" && txtNumber.value !== "" ){
//         success.style.display="block";
//         txtEmail.value=""; 
//         txtname.value="";
//          txtMsg.value="";
//         txtNumber.value="";
       
       
//     }
//     else {
//       success.style.display="none";
//     }
// }



        //ResCarouselCustom();
        var pageRefresh = true;

        function ResCarouselCustom() {
            var items = $("#dItems").val(),
                slide = $("#dSlide").val(),
                speed = $("#dSpeed").val(),
                interval = $("#dInterval").val()

            var itemsD = "data-items=\"" + items + "\"",
                slideD = "data-slide=\"" + slide + "\"",
                speedD = "data-speed=\"" + speed + "\"",
                intervalD = "data-interval=\"" + interval + "\"";


            var atts = "";
            atts += items != "" ? itemsD + " " : "";
            atts += slide != "" ? slideD + " " : "";
            atts += speed != "" ? speedD + " " : "";
            atts += interval != "" ? intervalD + " " : ""

            //console.log(atts);

            var dat = "";
            dat += '<h4 >' + atts + '</h4>'
            dat += '<div class=\"resCarousel\" ' + atts + '>'
            dat += '<div class="resCarousel-inner">'
            for (var i = 1; i <= 14; i++) {
                dat += '<div class=\"item\"><div><h1>' + i + '</h1></div></div>'
            }
            dat += '</div>'
            dat += '<button class=\'btn btn-default leftRs\'></button>'
            dat += '<button class=\'btn btn-default rightRs\'></button>    </div>'
            console.log(dat);
            $("#customRes").html(null).append(dat);

            if (!pageRefresh) {
                ResCarouselSize();
            } else {
                pageRefresh = false;
            }
            //ResCarouselSlide();
        }

        $("#eventLoad").on('ResCarouselLoad', function() {
            //console.log("triggered");
            var dat = "";
            var lenghtI = $(this).find(".item").length;
            if (lenghtI <= 30) {
                for (var i = lenghtI; i <= lenghtI + 10; i++) {
                    dat += '<div class="item"><div class="tile"><div><h1>' + (i + 1) + '</h1></div><h3>Title</h3><p>content</p></div></div>'
                }
                $(this).append(dat);
            }
        });
 

