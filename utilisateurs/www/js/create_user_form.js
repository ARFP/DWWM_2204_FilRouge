const user_group =document.getElementById('user_role')
user_group.addEventListener('change', () => {

    let option = document.getElementById('user_role');
    let resdiv= document.getElementById("if_resident");
   if(user_group.value=="resident")
   {
      
       resdiv.style.display="block";
   }
   else{
    
    resdiv.style.display="none";
   }
    
})