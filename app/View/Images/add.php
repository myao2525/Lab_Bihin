
public $validate = array(
   'image'=>array(
      'rule1' => array(
         //拡張子の指定
         'rule' => array('extension',array('jpg','jpeg','gif','png')),
         'message' => '画像ではありません。',
         'allowEmpty' => true,
      ),
      'rule2' => array(
         //画像サイズの制限
         'rule' => array('fileSize', '<=', '500000'),
         'message' => '画像サイズは500KB以下でお願いします',
      )
   ),
);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

