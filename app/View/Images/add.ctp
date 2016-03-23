<h2>Add post</h2>

<?php
    echo $this->Form->create('Image',array('controller'=>'images','url' => ['action' => 'add'],'type' => 'file'));
    echo $this->Form->input('filename');
    echo $this->Form->input('place');?>
<input type="hidden" name="MAX_FILE_SIZE" value="500000"/>
<?php
    echo $this->Form->input('Image.contents', array('label' => false, 'type' => 'file', 'multiple'));
    echo $this->Form->Submit('登録する', array('controller'=>'images','url' => ['action' => 'add']));
echo $this->Form->end();?>



