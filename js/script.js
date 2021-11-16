function hidden1(){
    document.getElementById('div14').style.display ='none';
    document.getElementById('div15').style.display = 'none';
    document.getElementById('div16').style.display = 'none';
    document.getElementById('div17').style.display = 'none';
    document.getElementById('div18').style.display = 'none';
    document.getElementById('div19').style.display = 'none';
    document.getElementById('div20').style.display = 'none';
    document.getElementById('div21').style.display = 'none';
    document.getElementById('div22').style.display = 'none';
    document.getElementById('div23').style.display = 'none';
    document.getElementById('div24').style.display = 'none';
    document.getElementById('div25').style.display = 'none';
    document.getElementById('div26').style.display = 'none';
    document.getElementById('div27').style.display = 'none';
    document.getElementById('div28').style.display = 'none';
    document.getElementById('div29').style.display = 'none';
    document.getElementById('div30').style.display = 'none';
    document.getElementById('div31').style.display = 'none';
    document.getElementById('div32').style.display = 'none';
    document.getElementById('div33').style.display = 'none';
    document.getElementById('div34').style.display = 'none';
    document.getElementById('div35').style.display = 'none';
    document.getElementById('div36').style.display = 'none';
    document.getElementById('div37').style.display = 'none';
    

  }
  function show2(){
    document.getElementById('div14').style.display = 'block';
    document.getElementById('div15').style.display = 'block';
  }

  function show3(){
      document.getElementById('div16').style.display = 'block';
  }

  function hidden2(){
      document.getElementById('div16').style.display = 'none';
  }

  function show4(){
      document.getElementById('div17').style.display = 'block';
  }

  function hidden3(){
      document.getElementById('div17').style.display = 'none';
  }
  
  
function condicionOnChange(sel) {
     if(sel.value == ""){
         divC = document.getElementById("div18");
         divC.style.display = "none";

         divT = document.getElementById("div19");
         divT.style.display = "none";
     }else if(sel.value == "propia"){
            divC = document.getElementById("div18");
            divC.style.display = "";

            divT  = document.getElementById("div19");
            divT.style.display = "none";
     }else if(sel.value == "alquilada"){
         divC = document.getElementById("div18");
         divC.style.display = "none";

         divT = document.getElementById("div19");
         divT.style.display = "none";
     }else if(sel.value == "familiar"){
         divC = document.getElementById("div18");
         divC.style.display = "none";

         divT = document.getElementById("div19");
         divC.style.display = "none";
     }
}

function materialOnChange(sel){
    if(sel.value ==""){
        divC = document.getElementById("div19");
        divC.style.display = "none";

        divT = document.getElementById("div20");
        divT.style.display = "none";
    }else if(sel.value == "zinc"){
        divC = document.getElementById("div19");
        divC.style.display = "";

        divT = document.getElementById("div20");
        divT.style.display = "none";
    }else if(sel.value == "madera"){
        divC =  document.getElementById("div19");
        divC.style.display = "";

        divT= document.getElementById("div20");
        divT.style.display = "none";
    }else if(sel.value == "bloque"){
        divC = document.getElementById("div19");
        divC.style.display = "";

        divT = document.getElementById("div20");
        divT.style.display = "none";

    }else if(sel.value == "adobe"){
        divC = document.getElementById("div19");
        divC.style.display = "";

        divT = document.getElementById("div20");
        divT.style.display = "none";

    }
        
}

function show5(){
    document.getElementById('div20').style.display = 'block';
    document.getElementById('div20').style.display = 'block';
    document.getElementById('div20').style.display = 'block';
}

function  show6(){
    document.getElementById('div21').style.display = 'block';
    document.getElementById('div21').style.display = 'block';
    document.getElementById('div21').style.display = 'block';
    document.getElementById('div21').style.display = 'block';
}

function show7(){
    document.getElementById('div22').style.display = 'block';
    document.getElementById('div23').style.display = 'block';
    document.getElementById('div24').style.display = 'block';
    document.getElementById('div25').style.display = 'block';
    document.getElementById('div26').style.display = 'block';
}

function habitacionesOnChange(sel){
    if(sel.value == ""){
        divC = document.getElementById("div27");
        divC.style.display = "none";

        divT = document.getElementById("div28");
        divT.style.display = "none";

    }else if(sel.value == "1"){
        divC = document.getElementById("div27");
        divC.style.display = "";

        divT = document.getElementById("div28");
        divT.style.display = "";
    }else if(sel.value == "2"){
        divC = document.getElementById("div27");
        divC.style.display = "";

        divT = document.getElementById("div28");
        divT.style.display = "";
    }else if(sel.value == "3"){
        divC = document.getElementById("div27");
        divC.style.display = "";

        divT = document.getElementById("div28");
        divT.style.display = "";
    }else if(sel.value == "4"){
        divC = document.getElementById("div27");
        divC.style.display = "";

        divT = document.getElementById("div28");
        divT.style.display = "";
    }
}

function show8(){
    document.getElementById('div29').style.display = 'block';
    document.getElementById('div30').style.display = 'block';
    document.getElementById('div31').style.display = 'block';
    document.getElementById('div32').style.display = 'block';
    
}

function show9(){
    document.getElementById('div30').style.display = 'block';
    document.getElementById('div31').style.display = 'block';
    document.getElementById('div32').style.display = 'block';
    document.getElementById('div29').style.display = 'none';
}

function show10(radio){
    if(radio.value == "posee"){
        divC = document.getElementById("div33");
        divC.style.display = "";

        divT = document.getElementById("div34");
        divT.style.display = "";

        divR = document.getElementById("div35");
        divR.style.display = "";
    }
}

function hidden4(radio){
    if(radio.value == "no posee"){
        divC = document.getElementById("div33");
        divC.style.display = "none";

        divT = document.getElementById("div34");
        divT.style.display = "none";

        divR = document.getElementById("div35");
        divR.style.display = "";
    }
}


function show11(radio){
    if(radio.value == "posee"){
        divC = document.getElementById("div36");
        divC.style.display = "";

        divT = document.getElementById("div37");
        divT.style.display = "";

      
    }

}


function hidden5(radio){
    if(radio.value == "no posee"){
        divC = document.getElementById("div36");
        divC.style.display = "none";

        divT = document.getElementById("div37");
        divT.style.display = "none";

       
    }

}


function validar_num(e) {

    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key);
    letras = "0123456789";
    especiales = "8-37-39-46";

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i] || key == 13) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

//FUNCION PARA VALIDAR INGRESO SOLO DE LETRAS
function validar_let1(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i] || key == 13) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}