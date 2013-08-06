<?php if (!defined('THINK_PATH')) exit();?><div class="my-medal clearfix">
<div class="my-medal-list">
<ul>
	<?php $medals= $medals;
if(count($medals)>5){ ?><a href="<?php echo U('public/Medal/index','uid='.$uid);?>"><i class="arrow-next-page right"></i></a><?php } ?>
<?php if(is_array($medals)): ?><?php $i = 0;?><?php $__LIST__ = $medals?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$medal): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if($key>4){ ?>status="hide" style="display:none"<?php } ?>>
		<a href="javascript:void(0)" rel="widget_medal" medal_id="<?php echo ($key); ?>"><img src="<?php echo ($medal["small_src"]); ?>" width="30" height="30"></a>
		<div class="wrap-layer" rel="widget_medal" medal_id="<?php echo ($key); ?>" style="display:none;margin:3px 0 0 -135px;z-index:99;">
	        <div class="content-layer">
	        	<div class="arrow arrow-t"></div>
		        <div class="medal-info-s clearfix">
			       <dt><a href="<?php echo U('public/Medal/index','type=2');?>"><img src="<?php echo ($medal["src"]); ?>" width="100" height="100"/></a></dt>
			       <dd><h4><?php echo ($medal["name"]); ?></h4><p><?php echo ($medal["desc"]); ?></p><p>领取时间：<?php echo ($medal["ctime"]); ?></p><p><a href="<?php echo U('public/Medal/index','uid='.$uid);?>">查看<?php if($isme){ ?>我<?php }else{ ?>TA<?php } ?>的勋章>></a></p></dd>
		        </div>
	        </div>
        </div>
	</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</ul>

</div>
</div>
<script>
var medal_delay = 0;
$(function (){
	$('a[rel="widget_medal"]').hover(function (){
		clearTimeout(medal_delay);
		var _this = $(this);
		medal_delay = setTimeout(function (){
			$('div[rel="widget_medal"]:visible').fadeOut();
			var medalid = _this.attr("medal_id");
			$('div[medal_id="'+medalid+'"]').fadeIn();
		},200);
	},function (){
		clearTimeout(medal_delay);
		var _this = $(this);
		medal_delay = setTimeout(function (){
			var medalid = _this.attr('medal_id');
			$('div[medal_id="'+medalid+'"]').fadeOut();
		},200);
	});
	$('div[rel="widget_medal"]').hover(function (){
		clearTimeout(medal_delay);
	},function (){
		var _this = $(this);
		medal_delay = setTimeout(function (){
			_this.fadeOut();
		},200);
	});
});
function show_medal(obj){
	var status = $(obj).children().attr('class');
	if ( status == 'arrow-next-page'){
		$(obj).children().attr('class','arrow-previous-page');
		$("li[status='hide']").show();
	} else {
		$(obj).children().attr('class','arrow-next-page');
		$("li[status='hide']").hide();
	}
}
</script>