<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台管理</title>
    <link rel="stylesheet" href="/admin/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/admin/plugins/font-awesome/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="/admin/src/css/app.css" media="all" />
    <link rel="stylesheet" href="/admin/src/css/themes/default.css" media="all" id="skin" kit-skin />
</head>

<body class="kit-theme">
<div class="layui-layout layui-layout-admin kit-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">后台管理</div>
        <div class="layui-logo kit-logo-mobile">K</div>
        {{--<ul class="layui-nav layui-layout-left kit-nav">--}}
            {{--<li class="layui-nav-item"><a href="javascript:;">控制台</a></li>--}}
            {{--<li class="layui-nav-item"><a href="javascript:;">商品管理</a></li>--}}
            {{--<li class="layui-nav-item"><a href="javascript:;" id="pay"><i class="fa fa-gratipay" aria-hidden="true"></i> 捐赠我</a></li>--}}
            {{--<li class="layui-nav-item">--}}
                {{--<a href="javascript:;">其它系统</a>--}}
                {{--<dl class="layui-nav-child">--}}
                    {{--<dd><a href="javascript:;">邮件管理</a></dd>--}}
                    {{--<dd><a href="javascript:;">消息管理</a></dd>--}}
                    {{--<dd><a href="javascript:;">授权管理</a></dd>--}}
                {{--</dl>--}}
            {{--</li>--}}
        {{--</ul>--}}
        <ul class="layui-nav layui-layout-right kit-nav">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon">&#xe63f;</i> 皮肤
                </a>
                <dl class="layui-nav-child skin">
                    <dd><a href="javascript:;" data-skin="default" style="color:#393D49;"><i class="layui-icon">&#xe658;</i> 默认</a></dd>
                    <dd><a href="javascript:;" data-skin="orange" style="color:#ff6700;"><i class="layui-icon">&#xe658;</i> 橘子橙</a></dd>
                    <dd><a href="javascript:;" data-skin="green" style="color:#00a65a;"><i class="layui-icon">&#xe658;</i> 原谅绿</a></dd>
                    <dd><a href="javascript:;" data-skin="pink" style="color:#FA6086;"><i class="layui-icon">&#xe658;</i> 少女粉</a></dd>
                    <dd><a href="javascript:;" data-skin="blue.1" style="color:#00c0ef;"><i class="layui-icon">&#xe658;</i> 天空蓝</a></dd>
                    <dd><a href="javascript:;" data-skin="red" style="color:#dd4b39;"><i class="layui-icon">&#xe658;</i> 枫叶红</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://m.zhengjinfan.cn/images/0.jpg" class="layui-nav-img"> Van
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;" kit-target data-options="{url:'basic.html',icon:'&#xe658;',title:'基本资料',id:'966'}"><span>基本资料</span></a></dd>
                    <dd><a href="javascript:;">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black kit-side">
        <div class="layui-side-scroll">
            <div class="kit-side-fold"><i class="fa fa-navicon" aria-hidden="true"></i></div>
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="kitNavbar" kit-navbar>
                @if(in_array("user_index",$admin_role_data))
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 用户管理</span></a>
                    <dl class="layui-nav-child">
                        @if(in_array("user_index",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/user/user_index',icon:'&#xe6c6;',title:'用户管理',id:'1'}"><i class="layui-icon">&#xe6c6;</i><span> 用户管理</span></a></dd>
                        @endif
                    </dl>
                </li>
                @endif
                @if(in_array("tran_index",$admin_role_data))
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 交易记录</span></a>
                    <dl class="layui-nav-child">
                        @if(in_array("tran_index",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/transaction/tran_index',icon:'&#xe658;',title:'交易记录',id:'2'}"><i class="layui-icon">&#xe658;</i><span> 交易记录</span></a></dd>
                        @endif
                    </dl>
                </li>
                @endif
                @if(in_array("set_bonus",$admin_role_data) || in_array("set_base",$admin_role_data))
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 奖金设置</span></a>
                    <dl class="layui-nav-child">
                        @if(in_array("set_bonus",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/settings/set_bonus',icon:'&#xe658;',title:'奖金设置',id:'3'}"><i class="layui-icon">&#xe658;</i><span> 奖金设置</span></a></dd>
                        @endif
                        @if(in_array("set_base",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/settings/set_base',icon:'&#xe658;',title:'基础设置',id:'4'}"><i class="layui-icon">&#xe658;</i><span> 基础设置</span></a></dd>
                        @endif
                    </dl>
                </li>
                @endif
                @if(in_array("account_index",$admin_role_data))
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 日志信息</span></a>
                    <dl class="layui-nav-child">
                        @if(in_array("account_index",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/account/account_index',icon:'&#xe658;',title:'日志信息',id:'5'}"><i class="layui-icon">&#xe658;</i><span> 日志信息</span></a></dd>
                        @endif
                    </dl>
                </li>
                @endif
                @if(in_array("news_index",$admin_role_data))
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 新闻管理</span></a>
                    <dl class="layui-nav-child">
                        @if(in_array("news_index",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/news_index',icon:'&#xe658;',title:'新闻管理',id:'6'}"><i class="layui-icon">&#xe658;</i><span> 内容管理</span></a></dd>
                        @endif
                    </dl>
                </li>
                @endif
                @if(in_array("manager_index",$admin_role_data))
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 管理员权限</span></a>
                    <dl class="layui-nav-child">
                        @if(in_array("manager_index",$admin_role_data) || in_array("manager_roles",$admin_role_data))
                        <dd><a href="javascript:;" kit-target data-options="{url:'/admin/manager/manager_index',icon:'&#xe658;',title:'后台管理员',id:'7'}"><i class="layui-icon">&#xe658;</i><span> 后台管理员</span></a></dd>
                        @endif
                        @if(in_array("manager_roles",$admin_role_data))
                            <dd><a href="javascript:;" kit-target data-options="{url:'/admin/manager/manager_roles',icon:'&#xe658;',title:'角色管理',id:'8'}"><i class="layui-icon">&#xe658;</i><span> 角色管理</span></a></dd>
                        @endif
                    </dl>
                </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="layui-body" id="container">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;"><i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop">&#xe63e;</i> 请稍等...</div>
    </div>


</div>
<!-- <script type="text/javascript">
      var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
      document.write(unescape("%3Cspan id='cnzz_stat_icon_1264021086'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1264021086%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
  </script> -->
<script src="/admin/plugins/layui/layui.js"></script>
<script>
    var message;
    layui.config({
        base: 'src/js/',
        version: '1.0.1'
    }).use(['app', 'message'], function() {
        var app = layui.app,
            $ = layui.jquery,
            layer = layui.layer;
        //将message设置为全局以便子页面调用
        message = layui.message;
        //主入口
        app.set({
            type: 'iframe'
        }).init();
        $('#pay').on('click', function() {
            layer.open({
                title: false,
                type: 1,
                content: '<img src="/src/images/pay.png" />',
                area: ['500px', '250px'],
                shadeClose: true
            });
        });
        $('dl.skin > dd').on('click', function() {
            var $that = $(this);
            var skin = $that.children('a').data('skin');
            switchSkin(skin);
        });
        var setSkin = function(value) {
                layui.data('kit_skin', {
                    key: 'skin',
                    value: value
                });
            },
            getSkinName = function() {
                return layui.data('kit_skin').skin;
            },
            switchSkin = function(value) {
                var _target = $('link[kit-skin]')[0];
                _target.href = _target.href.substring(0, _target.href.lastIndexOf('/') + 1) + value + _target.href.substring(_target.href.lastIndexOf('.'));
                setSkin(value);

            },
            initSkin = function() {
                var skin = getSkinName();
                switchSkin(skin === undefined ? 'default' : skin);
            }();
    });
</script>
</body>

</html>