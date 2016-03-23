<?php
class BootstrapController extends AppController {
  public function index() {
      $this->Session->setFlash(__('Alert notice message testing...'), 'alert', array(
  'plugin' => 'TwitterBootstrap',
), 'notice');
$this->Session->setFlash(__('Alert success message testing...'), 'alert', array(
  'plugin' => 'TwitterBootstrap',
  'class' => 'alert-success'
), 'success');
$this->Session->setFlash(__('Alert error message testing...'), 'alert', array(
  'plugin' => 'TwitterBootstrap',
  'class' => 'alert-error'
), 'error');
  }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

