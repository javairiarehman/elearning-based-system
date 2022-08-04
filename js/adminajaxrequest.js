
//Ajex call for student login verification
function checkAdmin(){
    console.log("login clicked");
   var adminLogEmail=$("#adminLogemail").val();
    var adminLogPass=$("#adminLogpass").val();
    console.log(adminLogEmail);
    console.log(adminLogPass);
    $.ajax({
        url:'admin/add_admin.php',
        method:'POST',
    
        data:{
      
          adminLogEmail:adminLogEmail,
          adminLogPass:adminLogPass,
    
    
        },
        success:function(data1){
            
           
            if(data1="connected")
            {
            console.log("data from me");
            console.log(data1);
            console.log("data from me");
           //window.location="admin/dashboard.php";

            }
            
           
        
           
    },
    });



}