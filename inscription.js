$(function(){ 
                            
    // Verification du champs Pseudo en cas de changement de la valeur
                $("#nom").change( function(){

        var x = $(this).val().length;
        $("#error_nom").empty().removeClass("error");
    
        if(x<2){
            
            if(x==0){
                $(this).empty();
            }else{
                $("#error_nom").append("Les prénoms à une lettre ça n'existe pas").addClass("error");
            }
            
        }
        
    });


                // Verification du champs Pseudo a l'envoi du formulaire
    $("form").submit(function(){
        
        var nb_caractere = $("#nom").val().length;
        
        if(nb_caractere<2){
            
            if(nb_caractere==0){
                var txt="Le champ 'nom' est vide!";
            }else{
                var txt="Les prénoms à une lettre ça n'existe pas";
            }
            
            $("#error_nom").empty().append(txt).addClass("error");
            return false;

        }else{
            return true;
        }
    });
    
});


$(function(){ 
                            
    // Verification du champs Pseudo en cas de changement de la valeur
                $("#prenom").change( function(){

        var x = $(this).val().length;
        $("#error_prenom").empty().removeClass("error");
    
        if(x<2){
            
            if(x==0){
                $(this).empty();
            }else{
                $("#error_prenom").append("Les prénoms à une lettre ça n'existe pas").addClass("error");
            }
            
        }
        
    });


                // Verification du champs Pseudo a l'envoi du formulaire
    $("form").submit(function(){
        
        var nb_caractere = $("#prenom").val().length;
        
        if(nb_caractere<2){
            
            if(nb_caractere==0){
                var txt="Le champ 'nom' est vide!";
            }else{
                var txt="Les prénoms à une lettre ça n'existe pas";
            }
            
            $("#error_prenom").empty().append(txt).addClass("error");
            return false;

        }else{
            return true;
        }
    });
    
});
