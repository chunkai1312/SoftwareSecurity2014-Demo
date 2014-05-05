<div class="container">

    <h1 class="text-center"><strong><?php echo lang('edit_user_heading');?></strong></h1>
    <p class="text-center"><?php echo lang('edit_user_subheading');?></p>
    
    <div id="infoMessage" class="text-center"><?php echo $message;?></div>
    
    <?php echo form_open(uri_string());?>
    
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="name"><?php echo $this->lang->line('edit_user_name_label'); ?></label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $name['value'] ?>" required="required" />                      
        </div>  
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="phone"><?php echo lang('edit_user_phone_label', 'phone'); ?></label>
            <input type="text" class="form-control" name="phone" id="phone" value="<?= $phone['value'] ?>" />                      
        </div>      
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="address"><?php echo lang('edit_user_address_label', 'address'); ?></label>
            <input type="text" class="form-control" name="address" id="address" value="<?= $address['value'] ?>" />                      
        </div>  
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="address"><?php echo lang('edit_user_password_label', 'password'); ?></label>
            <input type="password" class="form-control" name="password" id="password" />                      
        </div> 
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="password_confirm"><?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?></label>
            <input type="password_confirm" class="form-control" name="password_confirm" id="password_confirm" />                      
        </div>         
        
        <div class="form-group col-md-offset-4 col-md-4">
            <strong><?php echo $this->lang->line('edit_user_groups_heading'); ?>:</strong>
            <?php foreach ($groups as $group):?>
            <label class="checkbox">
            <?php
                $gID=$group['id'];
                $checked = null;
                $item = null;
                foreach($currentGroups as $grp) {
                    if ($gID == $grp->id) {
                        $checked= ' checked="checked"';
                    break;
                    }
                }
            ?>  
            <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
            <?php echo $group['name'];?>
            </label>
            <?php endforeach?>
        </div>        
        
        <?php echo form_hidden('id', $user->id);?>
        <?php echo form_hidden($csrf); ?>
    
        <div class="form-group col-md-offset-4 col-md-4">
                <input class="btn btn-primary form-control" type="submit" value="<?php echo $this->lang->line('edit_user_submit_btn'); ?>"/>                    
        </div>      
        
    <?php echo form_close();?>

</div>
