<?php if (!defined('THINK_PATH')) exit();?><a event-node="share" href="javascript:void(0)" event-args='sid=<?php echo ($sid); ?>&stable=<?php echo ($stable); ?>&curtable=<?php echo ($current_table); ?>&curid=<?php echo ($current_id); ?>&initHTML=<?php echo ($initHTML); ?>&appname=<?php echo ($appname); ?>&cancomment=<?php echo ($cancomment); ?>&feedtype=<?php echo ($feed_type); ?>&is_repost=<?php echo ($is_repost); ?>'><?php echo L('PUBLIC_SHARE_STREAM');?><?php if($nums>0){ ?>&nbsp;(<?php echo ($nums); ?>) <?php } ?></a>