<script>
    document.getElementById("submit").addEventListener('click',getusers);



    function getusers (){


           var req = new XMLHttpRequest();//engine being called here
           req .open('GET', '  https://api.github.com/users%27);
           req.onload =function(){
            if(req.status==200){
              var conversion = JSON.data(req.responseText);


           

            var output = '';
            {
                document.getElementById('home').innerHTML = output;
                } 
               
             

            req.send();
}

  </script>