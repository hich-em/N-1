<?php 
function pu_theme_page()
{
?>
    <div class="section panel">
      <h1>Custom Theme Options</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
        
          settings_fields("pu_theme_options"); 
        
          do_settings_sections("pu_theme_options.php");
       
            <p class="submit">  
                <input type="submit" class="button-primary" value="<?php _e("Save Changes") ?>" />  
            </p>  
            
      </form>
      
      <p>Created by <a href="http://www.paulund.co.uk">Paulund</a>.</p>
    </div>
<?php 
}




?>