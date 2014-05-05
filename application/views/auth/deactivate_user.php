<div class="container">

    <h1 class="text-center"><strong><?php echo lang('deactivate_heading');?></strong></h1>
    <p class="text-center"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
    
    <?php echo form_open("auth/deactivate/".$user->id);?>
    
    <div class="form-group col-md-offset-5 col-md-1">
        <div class="radio">
            <label><?php echo $this->lang->line('deactivate_confirm_y_label'); ?>   
                <input type="radio" name="confirm" value="yes" checked="checked" /> 
            </label>    
        </div>                  
    </div>  

    <div class="col-md-1">
        <div class="radio">
            <label><?php echo $this->lang->line('deactivate_confirm_n_label'); ?>
                <input type="radio" name="confirm" value="no" />
            </label>    
        </div>                  
    </div>      
    
    <?php echo form_hidden($csrf); ?>
    <?php echo form_hidden(array('id'=>$user->id)); ?>
    
    <div class="form-group col-md-offset-4 col-md-4">
        <input class="btn btn-primary form-control" type="submit" value="<?php echo $this->lang->line('deactivate_submit_btn'); ?>"/>                   
    </div>  
 
    <?php echo form_close();?>
</div>