<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="description" content="ktv预订"/>
<meta name="keywords" content="ktv预订,ktv查询,宾馆住宿预订,网上订ktv,手机订ktv"/>
<title>选择日期</title>
<meta name="viewport"content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-title" content="ktv预订"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta content="telephone=no" name="format-detection"/>
<link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
<link type="text/css" rel="stylesheet" href="<?php  echo $this->_css_url?>jquery-ui-1.10.3.css">
<script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
<script language='javascript' src='<?php  echo $this->_script_url?>jquery-ui-1.10.3.min.js'></script>
<script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>
<!--<script type="application/x-javascript">addEventListener('DOMContentLoaded', function () {-->
<!--setTimeout(function () {-->
<!--scrollTo(0, 1);-->
<!--}, 0);-->
<!--}, false);</script>-->
<style type="text/css">
	.wapapp_calender_lable {font-size: 14px !important;}
	.choose {display: none;position: absolute;top: 0;left: 0;width: 100%;height: 560px;background-color: #fff;z-index: 1002;overflow: none;}
	#menu {display: inline-block;width: 30%;float: left;text-align: center;color: #afafaf;}
	#menu0 li {height: 45px;line-height: 45px;border-bottom: 1px solid #f2f2f2;background: #fff;color: #666666;}
	#menu li.hover {background: #f2f2f2;color: #000;}
	#contentmenu {display: inline-block;width: 70%;float: right;background: #fff;}
	#content ul {padding: 0px;}
	#content li {padding-left: 0px;letter-spacing: 1px;}
	.choo {text-align: center;height: 46px;line-height: 46px;background: #f2f2f2;}
	.wapapp_calender_lable {top: 0px;}
	.choo_act {background: #15a4d5 !important;color: #fff;}
	div.divhover {width: 100%;background: #f2f2f2;position: relative;top: 15px;}
	#keywords {margin-right: 20px;}
	#ktvSearchPage {position: relative;}
	#mapping {background: none repeat scroll 0 0 #FFE100;color: #0073C3;height: 44px;line-height: 44px;overflow: hidden;text-align: center;width: 70px;}
	body .righthead {overflow: visible !important;}
	.righthead:after {content: '';position: absolute;height: 0px;width: 0px;overflow: hidden;border-width: 44px 12px 0px 0px;border-style: solid;border-color: #FFE100;border-top-color: transparent;left: -12px;top: 0px;}
	#mapping {background: #ddd;border-left-color: #999;}
	#mapping:after {border-right-color: #ddd;}
	.wapapp_calender_date {font-weight: bold;}
	/*comm*//*modify by pp 0926>>*/
	header {background-color: #1491c5;width: 100%;height: 48px;line-height: 48px;text-align: center;position: relative;}
	header h1 {color: #fff;font: 600 1.286em/2.8 "STXihei";}
	header h1 em {font-style: normal;margin-left: 10px;}
	header i {position: absolute;left: 0;top: 0;width: 68px;height: 48px;background: #15a4d5;}
	header i:hover, header i:active {opacity: 0.7;}
	header i:before {background: url(../addons/ewei_ktv/template/style/css/comm_bg.png) no-repeat -100px -105px;background-size: 242px 260px;left: 25px;top: 16px;width: 12px;height: 20px;position: absolute;content: "";}
	/*box*/
	.cont_pd_wrap {margin: 48px 0;padding: 10px;}
	.cont_box_white {padding: 10px;margin-bottom: 10px;background: #fff;}
	/*order_write*/
	.write_list li {position: relative;padding: 0 15px;margin-bottom: 10px;line-height: 45px;background: #f2f2f2;color: #343434;}
	.write_list li:last-child {margin-bottom: 0;}
	.write_list .orderWrite_hint {height: 35px;line-height: 30px;padding: 0;margin-top: -10px;text-align: right;color: #fc5302;background: #fff;}
	.write_list .orderWrite_tit, .write_list .order_time {padding: 0 5px;margin: 0;line-height: 24px;background: #fff;}
	.write_list .orderWrite_tit {white-space: nowrap;overflow: hidden;text-overflow: ellipsis;}
	.orderWrite_proname {display: inline-block;width: 60%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;}
	.orderWrite_txt {position: absolute;right: 15px;top: 0;width: 70%;padding: 0 10px;text-align: right;font-size: 1em;color: #238ff4;}
	.bdate {position: absolute;right: -5px;top: 0;width: 70%;text-align: right;font-size: 1em;color: #238ff4;border:none;background:#f2f2f2;margin-top:15px;width:105px;}
	/*btn*/
	.btn_blue {display: block;width: 50%;height: 45px;margin: 0 auto;letter-spacing: 2px;font: bold 1.286em/45px "STXihei";color: #fff;background-color: #FF9913;border: none;}
	/*modify by pp 0926*/
</style>

</head>
<body>

<div id="ctripPage">
	<header>
		<h1>选择日期</h1><i id="js_return" onClick="location.href='javascript:history.back();'"></i>
	</header>
	<section class="cont_pd_wrap" style="margin:0">
		<ul class="cont_box_white write_list">
			<li class="orderWrite_li arr_r" id="handlerCheckInDate">
				<span class="orderWrite_info">预订日期</span>
				<em class="orderWrite_txt " id="Check_In_Date">
					<input name="bdate" id="bdate" class=" bdate datepicker" value="<?php  echo date('Y年m月d日',strtotime($bdate))?>" type="text" readonly="readonly" />
				</em>
			</li>
		</ul>
		<input type="button" class="btn_blue" id="submitDate" value="确定" />
	</section>
</div>

<?php  include $this->template('ktv_msg')?>

<script type="text/javascript">
	$(function(){
		var Days = <?php  echo $day;?>;
		resetDays();

		$(document).ready(function() {
			$(".datepicker").datepicker({
				minDate:0,
				showMonthAfterYear: true,
				closeText:'关闭',   // 只有showButtonPanel: true才会显示出来
				duration: 'fast',
				showAnim:'fadeIn',
				//showOn:'button',   // 在输入框旁边显示按钮触发，默认为：focus。还可以设置为both
				//buttonImageOnly: true,        // 不把图标显示在按钮上，即去掉按钮
				//buttonText:'选择日期',
				showButtonPanel: true,
				//showOtherMonths: true,
				dateFormat:'yy年mm月dd日'
			});
		});

		jQuery(function ($) {
			$.datepicker.regional['zh-CN'] = {
				closeText: '关闭',
				prevText: '<上月',
				nextText: '下月>',
				currentText: '今天',
				monthNames: ['一月', '二月', '三月', '四月', '五月', '六月',
					'七月', '八月', '九月', '十月', '十一月', '十二月'],
				monthNamesShort: ['一', '二', '三', '四', '五', '六',
					'七', '八', '九', '十', '十一', '十二'],
				dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
				dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
				dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
				weekHeader: '周',
				dateFormat: 'yy年mm月dd日',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: true,
				yearSuffix: '年'
			};
			$.datepicker.setDefaults($.datepicker.regional['zh-CN']);
		});

		$.datepicker._gotoToday = function (id) {
			var target = $(id);
			var inst = this._getInst(target[0]);
			if (this._get(inst, 'gotoCurrent') && inst.currentDay) {
				inst.selectedDay = inst.currentDay;
				inst.drawMonth = inst.selectedMonth = inst.currentMonth;
				inst.drawYear = inst.selectedYear = inst.currentYear;
			}
			else {
				var date = new Date();
				inst.selectedDay = date.getDate();
				inst.drawMonth = inst.selectedMonth = date.getMonth();
				inst.drawYear = inst.selectedYear = date.getFullYear();
				this._setDateDatepicker(target, date);
				this._selectDate(id, this._getDateDatepicker(target));
			}
			this._notifyChange(inst);
			this._adjustDate(target);
		}

		$("#Room_Add").click(function () {
			if (Days < 28) {
				Days++;
				resetDays();
			}
		});
		$("#Room_Reduce").click(function () {
			if (Days > 1) {
				Days--;
				resetDays();
			}
		});

		function resetDays() {
			var c = "#Room_Reduce", a = "num_invalid", b = "#Room_Add";
			$(b).removeClass(a);
			$(c).addClass(a);
			$("#Room_Num").text(Days);
			if (Days == 1) {
				$(c).addClass(a);
				$(b).removeClass(a)
			} else if (Days == 28) {
				$(c).removeClass(a);
				$(b).addClass(a)
			} else {
				$(c).removeClass(a);
				$(b).removeClass(a)
			}
		}

		$("#submitDate").click(function () {
			show_loading();
			var bdate = $(".datepicker").val().replace("年","-").replace("月","-").replace("日","");
			$.post("<?php  echo $this->createMobileUrl('ajaxData')?>",{ac:'time', bdate:bdate, day:Days, hid:'<?php  echo $hid;?>'},function(data){
				data = eval("(" + data +")");
				if(data.result==1){
					location.href = data.url;
				} else {
					return false;
				}
			});
		});
	});

</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>