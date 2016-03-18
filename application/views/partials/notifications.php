<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="top-label label label-warning" id="notifications_count"><?php echo $notifications_count; ?></span>  <i class="fa fa-bell fa-3x"></i>
    </a>
    <!-- dropdown alerts-->
    <?php if(count($notifications) > 0) { ?>
    <ul class="dropdown-menu dropdown-messages" id="notifications-list">
        <?php $count = 1;
        foreach($notifications as $notification) { ?>
            <?php if($count != 1) { ?>
                <li class="divider" id="divider-<?php echo $notification->id; ?>"></li>
            <?php } ?>
            <li id="<?php echo $notification->id; ?>">
                <a href="#" id="a-<?php echo $notification->id; ?>">
                    <div>
                        <strong><span class=" label label-info"><?php echo $notification->from; ?></span></strong>
                            <span class="pull-right text-muted">
                                <em><?php echo get_day_name($notification->generated_on); ?></em>
                            </span>
                    </div>
                    <div><?php echo $notification->content; ?></div>
                </a>
            </li>
            <?php $count ++;
        } ?>
        <?php if ($notifications_count > count($notifications)) { ?>
            <li class="divider"></li>
            <li id="all">
                <a class="text-center" href="#">
                    <strong>Mark as read all notifications</strong>
                    <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>
                </a>
            </li>
        <?php } ?>
    </ul>
    <?php } ?>
    <!-- end dropdown-alerts -->
</li>

<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-3x"></i>
    </a>
    <!-- dropdown user-->
    <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
        </li>
    </ul>
    <!-- end dropdown-user -->
</li>
<!-- end main dropdown -->
<script type="text/javascript">
$('#notifications-list li').click(function() {
    $(this).next().hide();
    $(this).hide();
    var notificationId      = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: 'notifications/read/'+notificationId,
        success: function(data, textStatus) {
            $('#notifications-liting').html(data);
        },
        error: function() {
            alert('Not OKay');
        }
    });
});
</script>