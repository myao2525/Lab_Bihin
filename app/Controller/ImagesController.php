<?php

class ImagesController extends AppController {
    public $helpers = array('Html', 'Form');
    

    public function index() {
        $this->set('images', $this->Image->find('all'));
        $this->set('title_for_layout', '備品管理');
    }
    
    
    
    public function upload() {
        echo 1;
    }
    public function search() {
  
    }
        public function search_list() {
//            
//        $this->set('images', $this->Image->find('all'));
    //リクエストがPOSTの場合
        if($this->request->is('post')){
        //Formの値を取得
        //$title=$this->data['Search']['title'];
        //備品名が入れられたとき
        if($this->request->data['Image']['filename']!=NULL){   
            $filename=$this->request->data['Image']['filename'];
                //POSTされたデータを曖昧検索
                $data=$this->Image->find('all',array(
                'conditions'=>array( 'filename'=>$filename)));
                $this->set('results',$data);
        }
         //場所が入れられたとき
        if($this->request->data['Image']['place']!=NULL){   
            $place=$this->request->data['Image']['place'];
                //POSTされたデータを曖昧検索
                $data=$this->Image->find('all',array(
                'conditions'=>array( 'place'=>$place)));
                $this->set('results',$data);
        }
        //両方検索されたとき
         if(($this->request->data['Image']['filename']!=NULL) && ($this->request->data['Image']['place']!=NULL)){
            $filename=$this->request->data['Image']['filename'];
            $place=$this->request->data['Image']['place'];
                //POSTされたデータを曖昧検索
                $data=$this->Image->find('all',array(
                'conditions'=>array('filename'=>$filename,'place'=>$place)));
                $this->set('results',$data);
        }
        }else{ //POST以外の場合
        //Imageモデルから全てのデータを検索
        $data=$this->Image->find('all');
        //データの連想配列をセット
        $this->set('results',$data);
        }
        
    if(empty($data)){
        echo "検索データが存在しません。";
        }else{
         echo "検索データが存在します。";
       }
 }
 
    
    public function add($id = null) {
        if ($this->request->is('post')) {
            $saveData['filename'] = $this->request->data['Image']['filename'];
            $saveData['place'] = $this->request->data['Image']['place'];
            $saveData['contents'] = $this->request->data['Image']['contents']['name'];
            
            $this->Image->save($saveData);
            if (!empty($this->request->data)){

 //               if($this->Image->save($this->request->data)){
                 //画像保存先のパス
      $path = IMAGES;
      $image = $this->request->data['Image']['contents'];
       var_dump($image['tmp_name']);
      $this->Flash->set('画像を登録しました');
      move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);// 画像の保存先 この場合は"webroot/img/table"に保存される
      $this->Flash->set('success!');
      $this->redirect(array('action'=>'index'));
            }else{
      $this->Flash->set('画像が登録できませんでした');
    }
    } //if
    }
    
 
    

    public function view($id) {
         //POST(選択)されたidデータを検索
        $data=$this->Image->find('all',array(
        'conditions'=>array( 'id'=>$id )));
        $this->set('pics',$data);  

    }

    
        public function edit($id = null) {
            $this->Image->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Image->read();
        } else {
            if ($this->Image->save($this->request->data)) {
                $this->Flash->set('success!');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Flash->set('failed!');
            }
        }
    }
    
     public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Image->delete($id)) {
             $this->Flash->set('Deleted!');
            $this->redirect(array('action'=>'index'));
        }
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

