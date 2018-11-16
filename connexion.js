$(function(){ 
                            
    // Verification du champs Pseudo en cas de changement de la valeur
                $("#name").change( function(){

        var x = $(this).val().length;
        $("#error").empty().removeClass("error");
    
        if(x<4){
            
            if(x==0){
                $(this).empty();
            }else{
                $("#error").append("Cet identifiant est trop court!").addClass("error");
            }
            
        }
        
    });


                // Verification du champs Pseudo a l'envoi du formulaire
    $("form").submit(function(){
        
        var nb_caractere = $("#name").val().length;
        
        if(nb_caractere<4){
            
            if(nb_caractere==0){
                var txt="Le champs 'identifiant' est vide!";
            }else{
                var txt="L'identifiant donné est trop court!";
            }
            
            $("#error").empty().append(txt).addClass("error");
            return false;

        }else{
            return true;
        }
    });
    
});


$(function(){ 
                            
    // Verification du champs Pseudo en cas de changement de la valeur
                $("#mdp").change( function(){

        var x = $(this).val().length;
        $("#errordeux").empty().removeClass("error");
    
        if(x<4){
            
            if(x==0){
                $(this).empty();
            }else{
                $("#errordeux").append("Ce mot de passe est trop court").addClass("error");
            }
            
        }
        
    });


                // Verification du champs Pseudo a l'envoi du formulaire
    $("form").submit(function(){
        
        var nb_caractere = $("#mdp").val().length;
        
        if(nb_caractere<4){
            
            if(nb_caractere==0){
                var txt="Le champs 'Mot de passe' est vide!";
            }else{
                var txt="Le mot de passe donné est trop court, minimum 8 caractères";
            }
            
            $("#errordeux").empty().append(txt).addClass("error");
            return false;

        }else{
            return true;
        }
    });
    
});
