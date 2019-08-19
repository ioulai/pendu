function insertTheme(theme_nom,action){
       console.log('ajout theme');
    $.ajax({
        type :'POST',
        url:'../controller/ThemeController.php',
        data:{theme_nom:theme_nom,action:action},
        async:true,
        success : function(data){
            
        }
    });
}
