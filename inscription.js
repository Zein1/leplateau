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
                var txt="Les noms à une lettre ça n'existe pas";
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
                var txt="Le champ 'prenom' est vide!";
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

$(function(){ 
                            
    // Verification du champs Pseudo en cas de changement de la valeur
                $("#identifiant").change( function(){

        var x = $(this).val().length;
        $("#error_identifiant").empty().removeClass("error");
    
        if(x<8){
            
            if(x==0){
                $(this).empty();
            }else{
                $("#error_identifiant").append("L'identifiant doit être de minimum 8 caractères").addClass("error");
            }
            
        }
        
    });


                // Verification du champs Pseudo a l'envoi du formulaire
    $("form").submit(function(){
        
        var nb_caractere = $("#identifiant").val().length;
        
        if(nb_caractere<8){
            
            if(nb_caractere==0){
                var txt="Le champ 'identifiant' est vide!";
            }else{
                var txt="L'identifiant est trop court";
            }
            
            $("#error_identifiant").empty().append(txt).addClass("error");
            return false;

        }else{
            return true;
        }
    });
    
});





$(function(){ 
                            
    // Verification du champs Pseudo en cas de changement de la valeur
                $("#mail").change( function(){

        var x = $(this).val().length;
        $("#error_mail").empty().removeClass("error");
    
        if(x<2){
            
            if(x==0){
                $(this).empty();
            }else{
                $("#error_mail").append("Les prénoms à une lettre ça n'existe pas").addClass("error");
            }
            
        }
        
    });


                // Verification du champs Pseudo a l'envoi du formulaire
    $("form").submit(function(){
        
        var nb_caractere = $("#mail").val().length;
        
        if(nb_caractere<2){
            
            if(nb_caractere==0){
                var txt="Le champ 'mail' est vide!";
            }
            else{
                var txt="Les prénoms à une lettre ça n'existe pas";
            }
            
            $("#error_mail").empty().append(txt).addClass("error");
            return false;

        }
        else{
            if (bonmail($("#mail").val())){
                return true;
            }
            else{
                return false;
            }
        }
    });
    
});


$(document).ready(function(){
    
    var $mdp = $('#mdp'),
        $mdpdeux = $('#mdpdeux')

        $(function(){ 
                            
            // Verification du champs Pseudo en cas de changement de la valeur
                        $("#mdp").change( function(){
        
                var x = $(this).val().length;
                $("#error_mdp").empty().removeClass("error");
            
                if(x<8){
                    
                    if(x==0){
                        $(this).empty();
                    }else{
                        $("#error_mdp").append("Le mot de passe doit être de 8 caractères minimum").addClass("error");
                    }
                    
                }
                
            });
        
        
                        // Verification du champs Pseudo a l'envoi du formulaire
            $("form").submit(function(){
                
                var nb_caractere = $("#mdp").val().length;
                
                if(nb_caractere<8 && nb_caractère>20){
                    
                    if(nb_caractere==0){
                        var txt="Le champ 'mot de passe' est vide!";
                    }else{
                        var txt="Le mot de passe est trop court";
                    }
                    
                    $("#error_mdp").empty().append(txt).addClass("error");
                    return false;
                }
                else{
                    return true;
                }
               
            });
            
        });
        
        
        $(function(){ 
                                    
            // Verification du champs Pseudo en cas de changement de la valeur
                        $("#mdpdeux").change( function(){
        
                var x = $(this).val().length;
                $("#error_mdpdeux").empty().removeClass("error");
            
                if(x<8){
                    
                    if(x==0){
                        $(this).empty();
                    }else{
                        $("#error_mdpdeux").append("Les prénoms à une lettre ça n'existe pas").addClass("error");
                    }
                    
                }
                
            });
        
        
                        // Verification du champs Pseudo a l'envoi du formulaire
            $("form").submit(function(){
                
                var nb_caractere = $("#mdpdeux").val().length;
                
                if(nb_caractere<2){
                    
                    if(nb_caractere==0){
                        var txt="Le champ 'nom' est vide!";
                    }else{
                        var txt="Les prénoms à une lettre ça n'existe pas";
                    }
                    
                    $("#error_mdpdeux").empty().append(txt).addClass("error");
                    return false;
        
                }else{
                    return true;
                }
            });

            
        });
       


$mdpdeux.keyup(function(){
    if($(this).val() != $mdp.val()){ 
        $(this).css({ // on rend le champ rouge
	    borderColor : 'red',
        color : 'red'
        });
    }
    else{
	$(this).css({ // si tout est bon, on le rend vert
	    borderColor : 'green',
	    color : 'green'
	});
    }
});

});

function bonmail(mailteste) { //teste si l'email ressemble à une adresse mail
   var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

   if(reg.test(mailteste)) {
       return true;
   }
   else {
       return false;
   }
}