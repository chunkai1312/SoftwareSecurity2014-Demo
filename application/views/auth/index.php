
<div class="container">

    <h1 class="text-center"><strong><?php echo lang('index_heading');?></strong></h1>
    <p class="text-center"><?php echo lang('index_subheading');?></p>
    
    <div id="infoMessage" class="text-center"><?php echo $message;?></div>
    
    <table class="table table-bordered table-responsive" cellpadding=0 cellspacing=10>
        <thead>
            <tr>
                <th><?php echo lang('index_username_th');?></th>
                <th><?php echo lang('index_name_th');?></th>
                <th><?php echo lang('index_email_th');?></th>
                <th><?php echo lang('index_groups_th');?></th>
                <th><?php echo lang('index_status_th');?></th>
                <th><?php echo lang('index_action_th');?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user):?>
            <tr>
                <td><?php echo $user->username;?></td>
                <td><?php echo $user->name;?></td>
                <td><?php echo $user->email;?></td>
                <td>
                    <?php foreach ($user->groups as $group):?>
                        <?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                    <?php endforeach?>
                </td>
                <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    
    <p class="text-right">
        <?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-primary btn-sm"')?> 
        <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-default btn-sm"')?>
    </p>
</div>





