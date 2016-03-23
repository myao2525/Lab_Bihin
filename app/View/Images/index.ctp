
<h2>データアップロード</h2>
<?php echo $this->Html->link('Upload', '/images/add');?>

<h2>検索ページ</h2>
<?php echo $this->Html->link('Search', '/images/Search');?>

<h2>データベース一覧</h2>
<ul>
<?php foreach ($images as $image) : ?>
<?php echo $image['Image']['filename']; ?>
<li>
<?php
        echo $this->Form->postLink($image['Image']['filename'],'/images/view/'.$image['Image']['id'],array('action'=>'view', 'action'=>'contents', $image['Image']['id']));
        ?>
<?php
        echo $this->Html->link('編集', array('action' => 'edit', $image['Image']['id']));
        ?>
<?php
    echo $this->Form->postLink('削除', array('action'=>'delete', $image['Image']['id']), array('confirm'=>'sure?'));
?>

</li>
<?php endforeach; ?>
</ul>
