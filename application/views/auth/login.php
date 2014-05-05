
<div class="container">
        
    <h1 class="text-center"><strong><?php echo lang('login_heading');?></strong></h1>
    <p class="text-center"><?php echo lang('login_subheading');?></p>
    
    <div id="infoMessage" class="text-center"><?php echo $message;?></div>
    
    <?php echo form_open("auth/login");?>
    
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="identity"><?php echo $this->lang->line('login_identity_label'); ?></label>
            <input type="text" class="form-control" name="identity" id="identity" required="required" />                        
        </div>  
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="password"><?php echo $this->lang->line('login_password_label'); ?></label>
            <input type="password" class="form-control" name="password" id="password" required="required" />                    
        </div>      
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label class="checkbox" for="remember"><?php echo $this->lang->line('login_remember_label'); ?>
                <input type="checkbox" name="remember" id="remember" value="1" />
            </label>                                
        </div>      
        
        <div class="form-group col-md-offset-4 col-md-4">
            <input class="btn btn-primary form-control" type="submit" value="<?php echo $this->lang->line('login_submit_btn'); ?>"/>                    
        </div>      

    <?php echo form_close();?>
    
</div>
