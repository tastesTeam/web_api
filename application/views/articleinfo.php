<!-- 发布资讯页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>生意猫</title>
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/publishInfo.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/reset.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/bootstrap.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/header.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/tabmenu.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/brandlist.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/cropper.css">
    <link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/wangEditor.min.css">
</head>
<body>
    <!-- 品牌列表页面 -->
    <div class="sy_wrapper container-fluid">
        <!-- 公共头部 -->
        <div class="sy_header bg-primary">
            <div class="row">
                <div class="header_left row">
                    <img src="<?php echo $url;?>/public/img/brandlist/logo.png"/>
                    <h4>运营后台</h4>
                </div>
                <div class="header_right row">
                    <h6>于海鑫</h6>
                    <h6>[退出登录]</h6>
                </div>
            </div>
        </div>
        <div class="sy_content row">
            <!-- 左边tab菜单 -->
            <div class="sy_tab_menu">
                <div class="sy_tab_item">
                    <div class="sy_tab_title row">
                        <span class="l_icon"></span>
                            运营管理
                        <span class="r_mark">+</span>
                    </div>
                    <ul>
                        <li>品牌列表</li>
                        <li>入驻审核</li>
                        <li>1831审核</li>
                    </ul>
                </div>
                <div class="sy_tab_item">
                    <div class="sy_tab_title row">
                        <span class="l_icon"></span>
                            品牌管理
                        <span class="r_mark">+</span>
                    </div>
                    <ul>
                        <li class="check">品牌列表</li>
                        <li class="check">入驻审核</li>
                        <li>1831审核</li>
                    </ul>
                </div>
                <div class="sy_tab_item">
                    <div class="sy_tab_title row">
                        <span class="l_icon"></span>
                            内容管理
                        <span class="r_mark">+</span>
                    </div>
                    <ul>
                        <li>品牌列表</li>
                        <li>入驻审核</li>
                        <li>1831审核</li>
                    </ul>
                </div>
                <div class="sy_tab_item">
                    <div class="sy_tab_title row">
                        <span class="l_icon"></span>
                            用户管理
                        <span class="r_mark">+</span>
                    </div>
                    <ul>
                        <li>品牌列表</li>
                        <li>入驻审核</li>
                        <li>1831审核</li>
                    </ul>
                </div>
            </div>
            <div class="sy_main_count">
                <!-- 内容区 -->
                <div class="sy_main_inner">
                    <div class="sy_inner_center">
                        <div class="top_inner">
                            发布资讯
                        </div>
                        <div class="bottom_inner">
                            <!-- 文本编辑器 -->
                            <div id="editor">
												
							 <!-- 配置文件 -->
							<script type="text/javascript" src="<?php echo $url;?>/ueditor/ueditor.config.js"></script>
							<!-- 编辑器源码文件 -->
							<script type="text/javascript" src="<?php echo $url;?>/ueditor/ueditor.all.js"></script>
							
							<form action="http://api.wangyunchuan.top/m/ArticleAdd/insert" method="post">  
							<!-- 加载编辑器的容器 -->
								<script id="container" name="content" type="text/plain" style="height:500px;">
									这里写你的初始化内容
								</script>
							
                            <!-- 资讯底部内容区 -->
                            <div class="pub_bottom">
                                <div class="pub_inner_item">
                                    <div class="inner_item_tit">封<span style="visibility: hidden;">的的</span>面：</div>
                                    <div class="inner_item_uplod">
                                        <div class="del"><img src="<?php echo $public_url;?>/img/brandlist/close.png"/></div>
                                        <img src="<?php echo $public_url;?>/img/brandlist/add.png" class="addImg"/>
                                        <input type="file" class="file_upload"/>
                                    </div>
                                </div>
                                <div class="pub_inner_item">
                                    <div class="inner_item_tit">原<span style="visibility: hidden;">的的</span>创：</div>
                                    <div class="inner_item_radio">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                是
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                否
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pub_inner_item">
                                    <div class="inner_item_tit">作<span style="visibility: hidden;">的的</span>者：</div>
                                    <div class="inner_item_select">
                                        <div class="part_inp part_drop_down">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                请选择作者名
                                                <span class="caret"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="pub_inner_item">
                                    <div class="inner_item_tit">发表时间：</div>
                                    <div class="inner_item_select">
                                        <div class="part_inp part_drop_down">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                请选择发表时间
                                                <span class="caret"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="pub_inner_item btn_item">
                                    <button class="btn btn-primary b_style" onclick="return check_button();">发表</button>
                                </div>
                            </div>
							</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- 实例化编辑器 -->
<script type="text/javascript">
var editor = UE.getEditor('container');//container为表单的id
/* serve.php为你点击提交表单的的链接 */
</script>
<script src="<?php echo $url;?>/public/js/jquery.min.js"></script>
<script src="<?php echo $url;?>/public/js/bootstrap.min.js"></script>
</html>