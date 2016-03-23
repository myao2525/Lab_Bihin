<h2>Add post</h2>

<?php e($form->create(null, array('type'=>'file', 'action'=>'upload')));?>
<?php e($session->flash());?>
<?php e($form->file('image'));?>
<?php e($form->submit('画像を追加'));?>
<?php e($form->end());?>

<h2>追加した画像</h2>
<ul>
<?php foreach ($images as $image) { ?>
    <li><?php e($html->link("/images/contents/{$image['Image']['filename']}"));?></li>
<?php } ?>
</ul>


<?=$form->create('User', aa('url',aa('controller','users', 'action','upload'), 'type','file'))?>
<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
画像：<?=$form->file('User.image_name')?>
<?=$form->error('User.image_name', null, array('escape' => false))?>
<?=$form->submit('アップロード')?>
<?=$form->end()?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

