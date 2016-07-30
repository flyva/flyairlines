<?php
    session_start();
    if ($_SESSION["access_rank_manager"] ==1)
    {
?>
<div class="ranks form">
<?php echo $this->Form->create('Rank'); ?>
	<fieldset>
		<legend><?php echo __('Add Rank'); ?></legend>
	<?php
		echo $this->Form->input('rank');
		echo $this->Form->input('salary_hour');
		echo $this->Form->input('minimum_hours');
		echo $this->Form->input('maximum_hours');
		echo $this->Form->input('image_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class="list-inline">

		<li><?php echo $this->Html->link(__('List Ranks'), array('action' => 'index'),array('class' => 'btn btn-md btn-primary')); ?></li>
		<li><?php echo $this->Html->link(__('List Pilots'), array('controller' => 'gvausers', 'action' => 'index'),array('class' => 'btn btn-md btn-primary')); ?> </li>
		
	</ul>
</div>
<?php
    }
    else
    {
        echo '<div class="alert alert-danger"> You do not have access to Rank manager module</div>';
    }
?>
