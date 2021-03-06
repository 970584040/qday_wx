<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="ktv预订"/>
    <meta name="keywords" content="ktv预订,ktv查询,宾馆住宿预订,网上订ktv,手机订ktv"/>
    <title>ktv查询</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="ktv预订"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta content="telephone=no" name="format-detection"/>
    <link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
      <script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>
    <!--<script type="application/x-javascript">addEventListener('DOMContentLoaded', function () {-->
        <!--setTimeout(function () {-->
            <!--scrollTo(0, 1);-->
        <!--}, 0);-->
    <!--}, false);</script>-->
    <style type="text/css">.conlist {
        height: 100%;
    }

    .wapapp_calender_lable {
        font-size: 14px !important;
    }

    .choose {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 99999;
        overflow: none;
    }

    #menu {
        display: inline-block;
        width: 30%;
        float: left;
        text-align: center;
        color: #afafaf;
    }

    #menu0 li {
        height: 45px;
        line-height: 45px;
        border-bottom: 1px solid #f2f2f2;
        background: #fff;
        color: #666666;
    }

    #menu li.hover {
        background: #f2f2f2;
        color: #000;
    }

    #contentmenu {
        display: inline-block;
        width: 70%;
        float: right;
        background: #fff;
    }

    #content ul {
        padding: 0px;
    }

    #content li {
        padding-left: 0px;
        letter-spacing: 1px;
    }

    .choo {
        text-align: center;
        height: 46px;
        line-height: 46px;
        background: #f2f2f2;
    }

    .wapapp_calender_lable {
        top: 0px;
    }

    .choo_act {
        background: #15a4d5 !important;
        color: #fff;
    }

    div.divhover {
        width: 100%;
        background: #f2f2f2;
        position: relative;
        top: 15px;
    }

    #keywords {
        margin-right: 20px;
    }

    #ktvSearchPage {
        position: relative;
    }

    #mapping {
        background: #15a4d5;
        color: #fff;
        height: 48px;
        line-height: 48px;
        overflow: hidden;
        text-align: center;
        width: 100px;
    }

    body .righthead {
        overflow: visible !important;
    }

    #mapping {
        border-left-color: #999;
    }

    #mapping:after {
        border-right-color: #ddd;
    }

    .wapapp_calender_date {
        font-weight: bold;
    }

    .callbox {
        text-align: center;
        padding: 20px 0px 10px;
    }
    </style>
    <!--[if IE]>
    <style type="text/css">
        .tab_search {
            overflow: hidden;
            bottom: -1px;
        }

        .tab_search li {
            float: left;
            box-sizing: border-box;
        }

        .tab_search li:first-child, .tab_search li:last-child {
            margin: 0;
            top: -1px;
        }

        .tab_search li:last-child:after {
            right: 0;
            border-bottom: 13px solid #30AAE8;
            border-right: 13px solid #ededed;
            border-left: none;
        }

        .tab_search li:first-child:after {
            left: 0;
            border-bottom: 13px solid #30AAE8;
            border-left: 13px solid #ededed;
            border-right: none;
        }

        .tab_search li.tabcrt:after {
            border: none;
        }
    </style>
    <![endif]-->
</head>
<body style="padding-bottom:40px;">
<div id="ctripPage">
    <section id="ydwxcsH"></section>
    <header id="header">
        <h1>ktv查询</h1>
        <div class="lefthead returnurl">
            <div class="header_return" onClick="javascript:history.back();"></div>
        </div>
      
        <!--<div id="mapping" style="display:none;" class="righthead" >定位中...</div>-->
    </header>
    <div id="content">
        <div class="conlist">
            <div style="height: 80px;" class="wapapp_panel">
                <div style="position: absolute; width: 100%; top: 14px;" class="wapapp_calendar">
                    <span class="wapapp_calender_lable"><span class="ico_city"></span>城市 </span>

                    <div class="divhover" onClick="location.href='<?php  echo $this->createMobileUrl('city')?>'" style="height: 45px;" id="selCity">
                        <span id="city" class="left size18" style="padding-left: 10px;"><?php  echo $search_array['city_name'];?></span>

                        <div class="icon icon_arrow" style="position: absolute; right: 5px; top: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 90px;" class="wapapp_panel">
                <div style="position: absolute; width: 48%; top: 14px; left: 0px;" class="wapapp_calendar">
                    <div class="wapapp_calender_lable">
                        <span class="ico_time"></span>入住日期
                    </div>
                    <div class="divhover" onClick="location.href='<?php  echo $this->createMobileUrl('date')?>'" style="height: 60px;"
                         id="handlerCheckInDate">
                        <div class="wapapp_div_date">
                            <span id="CheckInMonth" class="wapapp_calender_month"></span><span id="CheckInDay"
                                                                                               class="wapapp_calender_date"><?php  echo date('m月d日',strtotime($search_array['bdate']))?></span>
                        </div>
                        <div class="wapapp_div_week">
                            <span id="CheckInDes" class="wapapp_calender_today"><?php  echo $search_array['bweek'];?> </span><span id="CheckInWeek"
                                                                                                class="wapapp_calender_week"></span>
                            <span class="gray size12" id="jsHoliday"></span>
                        </div>
                        <div style="position: absolute; right: 5px; top: 20px;" class="icon icon_arrow">
                        </div>
                    </div>
                </div>
                <div style="position: absolute; width: 48%; top: 14px; right: 0px;">
                    <div class="wapapp_calender_lable">
                        <span class="ico_time"></span>住几晚
                    </div>
                    <div class="divhover" onClick="location.href='<?php  echo $this->createMobileUrl('date')?>'" style="height: 60px;"
                         id="handlerCheckOutDate">
                        <div class="wapapp_div_date">
                            <span id="CheckOutDays" class="wapapp_calender_day"><?php  if($search_array['day'] != '') { ?><?php  echo $search_array['day'];?>晚<?php  } ?></span>
                        </div>
                        <div class="wapapp_div_week">
                            <span id="CheckOutMonth" class="wapapp_div_dayleave"></span><span id="CheckOutDate"
                                                                                              class="wapapp_div_dayleave"></span><span
                                class="gray size12"><?php  echo $search_array['edate'];?>离店</span>
                        </div>
                        <div style="position: absolute; right: 5px; top: 20px;" class="icon icon_arrow">
                        </div>
                    </div>
                    <select id="CheckOutDatedom" style="display: none">
                    </select>
                </div>
            </div>
            <!--<div style="height: 80px;display:none" class="wapapp_panel" id="Time_Switcher_Panel">-->
                <!--<div class="divhover" style="height: 45px; overflow: hidden;"><span style="margin-left: 10px;">今天00：00-06：00入住</span>-->
                    <!--<i class="ocbg  switch_off" id="Time_Switcher">开&nbsp;&nbsp;关</i>-->
                <!--</div>-->
            <!--</div>-->
            <div style="height: 80px;" class="wapapp_panel">
                <div style="position: absolute; width: 100%; top: 19px;" class="wapapp_calendar">
                    <span class="wapapp_calender_lable"><span class="ico_star"></span>价格星级 </span>

                    <div class="divhover" id="priceStar" style="height: 45px; overflow: hidden;"
                         onclick="ShowDiv('MyDiv')">
                        <span class="left size18" style="padding-left: 10px;" id="range">不限</span>

                        <div class="icon icon_arrow" style="position: absolute; right: 5px; top: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 80px;" class="wapapp_panel">
                <div style="position: absolute; width: 100%; top: 19px;" class="wapapp_calendar">
                    <span class="wapapp_calender_lable"><span class="ico_choo"></span>关键字 </span>

                    <div class="divhover" onClick="location.href='<?php  echo $this->createMobileUrl('keyword')?>'"
                         style="height: 45px; overflow: hidden; text-overflow: ellipsis; -o-text-overflow: ellipsis;"
                         id="chooseKeyWords">
                        <span class="left size18" style="padding-left: 10px;" id="keywords"><?php  echo $key_word;?></span>

                        <div class="icon icon_arrow" style="position: absolute; right: 5px; top: 15px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="search">
        <input onClick="location.href='<?php  echo $this->createMobileUrl('list')?>'" type="button" class="ui-btn-up-g" value="查找ktv"/>
    </div>
    <!--<div data-role="footer" data-theme="none" class="callbox pb85">-->
        <!--<span class="gray">预订电话：</span> <a href="tel:4000086666" class="__hreftel__"><span-->
            <!--class="bold size16 __conttel__" style="color: #29A2F7;">400 008 6666</span></a>-->
    <!--</div>-->
    <div id="MyDiv" class="choose">
        <div class="top">
            <div class="lefthead" onclick="CloseDiv('MyDiv')">
                <div class="header_return">
                </div>
            </div>
            <h1>价格星级</h1>
        </div>
        <div class="conlist" style="padding: 0px">
            <div id="menu">
                <ul class="menu0" id="menu0">
                    <li onclick="setTab(0,0)" class="hover">价格</li>
                    <li onclick="setTab(0,1)">星级</li>
                </ul>
            </div>
            <div id="contentmenu">
                <div class="main" id="main0">
                    <ul class="block">
                        <li id="price">
                            <div class="choo" price=''>
                                不限
                            </div>
                            <div class="choo" price='150'>
                                ￥150以下
                            </div>
                            <div class="choo" price='150-300'>
                                ￥150-￥300
                            </div>
                            <div class="choo" price='301-450'>
                                ￥301-￥450
                            </div>
                            <div class="choo" price='451-600'>
                                ￥451-￥600
                            </div>
                            <div class="choo" price='601-1000'>
                                ￥601-￥1000
                            </div>
                            <div class="choo" price='1000'>
                                ￥1000以上
                            </div>
                        </li>
                    </ul>
                    <ul style="display: none;">
                        <li id="star">
                            <div class="choo" star=''>
                                不限
                            </div>
                            <div class="choo" star='5'>
                                五星级/豪华
                            </div>
                            <div class="choo" star='4'>
                                四星级/高档
                            </div>
                            <div class="choo" star='3'>
                                三星级/舒适
                            </div>
                            <div class="choo" star='2'>
                                二星级及以下/经济
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div id="footer" class="fix_bottom js_in_Footer">-->
    <!--<ul class="tab_search">-->
        <!--<li class="tabcrt">ktv查询</li>-->
        <!--<li id="jsTuan"><a title="团购ktv" href="http://m.ctrip.com/html5/tuan/"-->
                           <!--style=" text-decoration:none;color:#7e7e7e;" id='jsTuanLink'>团购ktv</a></li>-->
    <!--</ul>-->
<!--</div>-->
<section id="ydwxcsF"></section>
<script type="text/javascript">
    $(function(){

        <?php  if(($search_array['price_type'] > 0)) { ?>
            $(".choo").each(function(){
                <?php  if(($search_array['price_type'] == 1)) { ?>
                    if ($(this).attr("price") == "<?php  echo $search_array['price_value'];?>") {
                <?php  } else { ?>
                    if ($(this).attr("star") == "<?php  echo $search_array['price_value'];?>") {
                <?php  } ?>
                    $(this).addClass("choo_act chooact");
                    var code = $(this).html();
                }

                $("#range").html(code);
            });
        <?php  } ?>


        $(".choo").click(function () {
            $(".choo").removeClass("choo_act chooact");
            $(this).addClass("choo_act chooact");

            var name = $(this).parent().attr('id');
            if (name == 'price') {
                var price_type = 1;
                var price_value = $(this).attr('price');
            } else if (name == 'star') {
                var price_type = 2;
                var price_value = $(this).attr('star');
            }

            var code = $(this).html();
            $.post("<?php  echo $this->createMobileUrl('ajaxData')?>",{ac:'price', price_type:price_type, price_value:price_value},function(data){
                data  =eval("(" + data +")");
                if(data.result==1){
                    //$("#range").html(code);
                    //CloseDiv('MyDiv');
                    location.reload();
                }
            });
            //CloseDiv('MyDiv');
        });
    });

    function ShowDiv(show_div) {
        document.getElementById(show_div).style.display = 'block';
    }
    ;
    function CloseDiv(show_div) {
        document.getElementById(show_div).style.display = 'none';
    }
    ;
    function setTab(m, n) {
        var tli = document.getElementById("menu" + m).getElementsByTagName("li");
        var mli = document.getElementById("main" + m).getElementsByTagName("ul");
        for (i = 0; i < tli.length; i++) {
            tli[i].className = i == n ? "hover" : "";
            mli[i].style.display = i == n ? "block" : "none";
        }
    }
</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('ktv_msg', TEMPLATE_INCLUDEPATH)) : (include template('ktv_msg', TEMPLATE_INCLUDEPATH));?>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('ktvfooter', TEMPLATE_INCLUDEPATH)) : (include template('ktvfooter', TEMPLATE_INCLUDEPATH));?>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>