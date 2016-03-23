<h2>備品詳細</h2>
<ul>
<?php foreach ($pics as $pic) : ?>
    <li><p>備品の名前 : <?php echo  $pic['Image']['filename'];?></p></li>
    <li><p>場所 : <?php echo  $pic['Image']['place'];?></p></li>
    <li style="list-style:none;"><?php echo $this -> Html->image('/app/webroot/img/'."{$pic['Image']['contents']}", array('alt' => 'Image','controller' => 'Images', 'action' => 'view','class' => 'img_frame')); ?>
</li>
<?php endforeach; ?>
</ul>