    input = document.getElementById('pesquisaC');
    var element = document.getElementById('pai');
    var children = element.children;
    const texto = [];

    for(var i=0; i<children.length; i++){
        
            var teste = document.getElementById(`var_${i}`).innerHTML;
            texto[i] = teste;
            console.log(texto[i]);
    }

    var element = document.getElementById('pai');
    var children = element.children;
    const divs = [];

    for (var i = 0; i < children.length; i++) {
        var teste = document.getElementById(`var_${i}`);
        divs.push(teste);
    }

    let filterUsers = function (event) {


        keyword = input.value.toLowerCase();
        for (var i = 0; i < divs.length; i++) {
          
            var divText = divs[i].textContent.toLowerCase();
            if (divText.includes(keyword)) {
                divs[i].style.display = 'flex';
               
                divs[i].parentNode.style.display = 'flex'; // Show the div
              
             
            } else {
                divs[i].style.display = 'none';
                divs[i].parentNode.style.display = 'none';  // Hide the div
         
            }
            let width = screen.width;
            console.log(width);
            if(width < 600){
                element.style.paddingTop = "240%"
            } else{
                element.style.paddingTop = "35%"
            }
            
        }

        
    }


    input.addEventListener('keyup', filterUsers);
   
   

        
    
