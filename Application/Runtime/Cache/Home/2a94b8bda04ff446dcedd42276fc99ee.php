<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang=zh-cn>
  <head>
    <meta charset=utf-8>
    <title>下午好，奶茶！</title>
    <meta name="description" content="下午好，奶茶！">
    <link rel="shortcut icon" icon href="favicon.ico">
    <meta name=viewport content=width=device-width, user-scalable=no >
    <link rel=stylesheet href=main.css>
    <script src="/thinkphp/Public/js/jquery.js"></script>
    <script src="/thinkphp/Public/js/jquery.nivo.slider.js"></script>
  </head>
  <body>
    <div id="js_home_slider">
      <?php if(is_array($home_img_list)): $i = 0; $__LIST__ = $home_img_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src=<?php echo ($vo["img_url"]); ?>/><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <nav>fdsafdasf</nav>
  </body>
</HTML>