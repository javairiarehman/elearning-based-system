function addStu(){
   
var stuname=$("#stuname").val();
var stuemail=$("#stuemail").val();
var stupass=$("#stupass").val();



$.ajax({
    url:'Student/addstudent.php',
    method:'POST',
    dataType:"json",
    data:{
        stusignup : "stusignup",
        stuname  : stuname,
        stuemail : stuemail,
        stupass :stupass,


    },
    success:function(data){
        
        console.log(data);
       
    }
})

}




//Ajex call for student login verification
function checkStuLogin(){
    console.log("login clicked");
    var stuLogEmail=$("#stuLogemail").val();
    var stuLogPass=$("#stuLogpass").val();
    console.log(stuLogEmail);
    console.log(stuLogPass);
    $.ajax({
        url:'Student/addstudent.php',
        method:'POST',
    
        data:{
          checkLogemail:"checklogmail",
          stuLogEmail:stuLogEmail,
          stuLogPass:stuLogPass,
    
    
        },
        success:function(data1){
            
           
            if(data1="connected")
            {
            console.log("data from me");
            console.log(data1);
            console.log("data from me");
            window.location="index.php";

            }
           
        
           
        },
    });



}

