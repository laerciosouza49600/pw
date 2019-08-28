
	function sorteio(){



            n = document.formulario.n.value;
            
            n = parseInt(n);

            var

            x = Boolean;

            vetor =[];

            for(i = 0; i < 6; i++){

                vetor[i] = Math.floor(Math.random() * 10);

            }

            for(i = 0; i < 6; i++){

              document.write(vetor[i] + " ");

                if(n == vetor[i]){

                	x = true;

                }
                
            }

            document.write("</br>" + "numero digitado = " + n);


            

            if(x == true){

            	document.write( "</br>" + "venceu");

            }else{

            	document.write("</br>" + "perdeu");
            }
        }


