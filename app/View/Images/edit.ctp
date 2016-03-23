<h2>Edit Post</h2>

<?php
echo $this->Form->create('Image', array('url' => ['action' => 'edit']));
echo $this->Form->input('filename');
echo $this->Form->input('place');
?>
<?php
    echo $this->Form->input('Image.contents', array('label' => false, 'type' => 'file', 'multiple'));
    echo $this->Form->Submit('画像を登録する', array('controller'=>'images','url' => ['action' => 'add']));
?>