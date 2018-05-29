<?php /* SVN: $Id: $ */ ?>
<ul class="breadcrumb top-mspace ver-space">
  <li><?php echo $this->Html->link( __l('Relationships '), array('controller'=>'user_relationships','action'=>'index', 'admin' => 'true'), array('escape' => false));?><span class="divider">/</span></li>
  <li class="active"><?php echo __l('Edit Relationships '); ?></li>
</ul>
<div class="userRelationships form sep-top">
<?php echo $this->Form->create('UserRelationship', array('class' => 'form-horizontal space'));?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('relationship',array('label'=> __l('Relationship')));
		echo $this->Form->input('relationship_es',array('label'=> __l('Relationship (Spanish)')));
		echo $this->Form->input('is_active', array('label'=> __l('Enable')));
	?>
	</fieldset>
 <div class="form-actions">
    <?php echo $this->Form->submit(__l('Update'), array('class' => 'btn btn-large btn-primary textb text-16'));?>
    </div>
    <?php echo $this->Form->end();?>
</div>
