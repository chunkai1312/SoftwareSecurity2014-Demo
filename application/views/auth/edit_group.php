<div class="container">

    <h1 class="text-center"><strong><?php echo lang('edit_group_heading');?></strong></h1>
    <p class="text-center"><?php echo lang('edit_group_subheading');?></p>
    
    <div id="infoMessage" class="text-center"><?php echo $message;?></div>
    
    <?php echo form_open(current_url());?>
    
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="group_name"><?php echo $this->lang->line('edit_group_name_label'); ?></label>
            <input type="text" class="form-control" name="group_name" id="group_name" value="<?= $group_name['value'] ?>" required="required" />                        
        </div>  
        
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="group_description"><?php echo $this->lang->line('edit_group_desc_label'); ?></label>
            <input type="text" class="form-control" name="group_description" id="group_description" value="<?= $group_description['value'] ?>" required="required" />                   
        </div>          
        
        <div class="form-group col-md-offset-4 col-md-4">
                <input class="btn btn-primary form-control" type="submit" value="<?php echo $this->lang->line('edit_group_submit_btn'); ?>"/>                 
        </div>  
    
    <?php echo form_close();?>

</div>
