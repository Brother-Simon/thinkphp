<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
    $this->assign("home_img_list",M("HomeImg","ea_")->field("img_url")->select());
    $this->display();
  }
}