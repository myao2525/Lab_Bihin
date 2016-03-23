<h2>検索結果一覧</h2>
<ul>
<?php foreach ($results as $result) : ?>

<li>
<p>備品名：<?php echo $result['Image']['filename']; ?></p>
<p>場所：<?php echo $result['Image']['place']; ?></p> 
<p><?php echo $this -> Html->image('/app/webroot/img/'."{$result['Image']['contents']}", array('alt' => 'Image','controller' => 'Images', 'action' => 'view','class' => 'img_frame')); ?>
</p>
</li>
<?php endforeach; ?>
</ul>