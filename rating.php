<html>
<style>
  .star_rating{
    user-select:none;
  }
  .star{
    font-size:3rem;
    color:#ff9800;
    background-color:unset;
    border:none;
}
.star:hover{
cursor:pointer;
}

.star_rating{
  user-select:none;
  background-color:lightblue;
  padding:1.4rem 2.3rem;
  margin:2rem;
  border-radius: .4rem;
}
</style>


  <div class="text-center mb-4">
  <div class="star_rating">
  <h1>5 Star Rating</h1>
  
    <h5>How was your experience?</h5>
<button class="star"> &#9734;</button>
<button class="star"> &#9734;</button>
<button class="star"> &#9734;</button>
<button class="star"> &#9734;</button>
<button class="star"> &#9734;</button>
<h5 class="current_rating">out of 5</h5>
</div>
</div>

<script>
  const allStars=document.querySelectorAll(".star");
  console.log(allStars);
  allStars.forEach((star,i)=>{
star.onclick=function(){
  let current_star_level=i+1;
allStars.forEach((star,j)=>{
  if(current_star_level>=j+1){
    star.innerHTML='&#9733';
  }
  else{
    star.innerHTML='&#9734';
  }
})
}


  })
</script>
</html>