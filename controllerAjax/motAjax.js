function insertTheme(mot_nom,theme_id,action){
       console.log('ajout theme');
    $.ajax({
        type :'POST',
        url:'../controller/MotController.php',
        data:{mot_nom:mot_nom,theme_id:theme_id,action:action},
        async:true,
        success : function(data){
            
        }
    });
}
