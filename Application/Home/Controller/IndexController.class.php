<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        //TODO create user info to seesion 
        $this->display();
    }
    
    public function chooseSex($sex){
       
        $coinCount = 5;
        $this->assign('cointCount',$coinCount);
        
        if($sex==1){
           
        // 测试数据库连接
        $Data = M('game_pic_info'); // 实例化Data数据模型
        $this->data = $Data->select();
        
        $new_data = null;
        // 重新封装
        foreach ($this->data as $pic) {
            foreach ($pic as $key => $val) {
                if($key == 'choices'){
                    $choices_arr = explode(",",$pic['choices']);
                    
                    $new_data['choices'] = $choices_arr;
                }else {
                    $new_data[$key] = $val;
                }
            }
        }
//         var_dump($new_data);
        $this->assign('picdata',$new_data);
            
        $girlImg = "/WishListTest2/Public/image/girl/8.png";
        $this->assign('Img',$girlImg);
        
        $this->display('Index/gameTest');
        }
        elseif ($sex==2){
            $game1 = 67;
          $this->assign('game1',$game1); 
          
          $value = "0";
          $color = "红色";
          $value1 = "1";
          $color1 = "绿色";
          $value2 = "2";
          $color2 = "蓝色";
           
          $colorListItem = array (
              'value' => $value,
              'color' => $color
          );
           
          $colorListItem1 = array (
              'value' => $value1,
              'color' => $color1
          );
           
          $colorListItem2 = array (
              'value' => $value2,
              'color' => $color2
          );
          
          $colorListItem3 = array (
              'value' => $value2,
              'color' => $color2
          );
          
          $colorListItem4 = array (
              'value' => $value2,
              'color' => $color2
          );
           
          $colorList = array($colorListItem,$colorListItem1,$colorListItem2,$colorListItem3,$colorListItem4);
           
          $this->assign ( 'colorList', $colorList );
          
          $boyImg = "/WishListTest2/Public/image/boy/1.png";
          $this->assign('Img',$boyImg);
          
          $this->display('Index/gameBoyTest');
          //$this->display('Index/getPresentInfoPage');
        
        }
    }
    
    public function showPresentInfo(){        
        $this->display('Index/getPresentInfoPage');
    }
    
    
//     private function getData(){
//         $Data = M('Data'); // 实例化Data数据模型
//         $this->data = $Data->select();
//         $this->display();
//     }
}