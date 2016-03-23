<h2>Search Page</h2>

<span class="m_red"><p>
検索ワードを入力してください</p></span>

<?php
 echo $this->Form->create('Image',array('controller'=>'images','url' => ['action' => 'search_list']));
 echo $this->Form->input('filename',array('label'=>'備品名'));
 echo $this->Form->input('place',array('label'=>'場所'));
 echo $this->Form->end('検索');
 ?>