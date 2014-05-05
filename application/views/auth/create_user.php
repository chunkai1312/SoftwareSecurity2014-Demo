<div class="container">

    <h1 class="text-center"><strong><?php echo lang('create_user_heading');?></strong></h1>
    <p class="text-center"><?php echo lang('create_user_subheading');?></p>
    
    <div id="infoMessage" class="text-center"><?php echo $message;?></div>
    
    <?php echo form_open("auth/create_user");?>
    
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="username"><?php echo $this->lang->line('create_user_username_label'); ?></label>
            <input type="text" class="form-control" name="username" id="username" required="required" />                    
        </div>        
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="name"><?php echo $this->lang->line('create_user_name_label'); ?></label>
            <input type="text" class="form-control" name="name" id="name" required="required" />                    
        </div>  
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="email"><?php echo $this->lang->line('create_user_email_label'); ?></label>
            <input type="text" class="form-control" name="email" id="email" required="required" />                    
        </div>      
    
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="phone"><?php echo $this->lang->line('create_user_phone_label'); ?></label>
            <input type="text" class="form-control" name="phone" id="phone" />                    
        </div>  
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="address"><?php echo $this->lang->line('create_user_address_label'); ?></label>
            <input type="text" class="form-control" name="address" id="address" />                    
        </div>      
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="password"><?php echo $this->lang->line('create_user_password_label'); ?></label>
            <input type="password" class="form-control" name="password" id="password" required="required" />                    
        </div>       
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="password_confirm"><?php echo $this->lang->line('create_user_password_confirm_label'); ?></label>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm" required="required" />                    
        </div>       
    
        <div class="form-group col-md-offset-4 col-md-4">
            <input class="btn btn-primary form-control" type="submit" value="<?php echo $this->lang->line('create_user_submit_btn'); ?>"/>                  
        </div>  
    
    <?php echo form_close();?>

</div> 