<?php
global $insights_stats, $houzez_local;

$views = $insights_stats['views'];

$lastday = $views['lastday'];
$lasttwo = $views['lasttwo'];
$lasttwo = $lasttwo - $lastday;

$lastweek = $views['lastweek'];
$last2week = $views['last2week'];
$last2week = $last2week - $lastweek;

$lastmonth = $views['lastmonth'];
$last2month = $views['last2month'];
$last2month = $last2month - $lastweek;

?>
<div class="dashboard-content-block dashboard-statistic-block">
	<h3><i class="houzez-icon icon-sign-badge-circle mr-2 primary-text"></i> <?php esc_html_e('Views', 'houzez'); ?></h3>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-4">
			<div class="views-data-wrap">
				<div class="views-data">
					<?php echo number_format_i18n($lastday); ?>
				</div><!-- views-data -->
				
				<?php houzez_views_percentage($lasttwo, $lastday); ?>

				<div class="views-text">
					<?php esc_html_e('Last 24 Hours', 'houzez'); ?>
				</div><!-- views-text -->
			</div><!-- views-data-wrap -->
		</div><!-- col-md-4 col-sm-4 col-4 -->
		<div class="col-md-4 col-sm-4 col-4">
			<div class="views-data-wrap">
				<div class="views-data">
					<?php echo number_format_i18n($views['lastweek']); ?>
				</div><!-- views-data -->
				
				<?php houzez_views_percentage($last2week, $lastweek); ?>

				<div class="views-text">
					<?php esc_html_e('Last 7 Days', 'houzez'); ?>
				</div><!-- views-text -->
			</div><!-- views-data-wrap -->
		</div><!-- col-md-4 col-sm-4 col-4 -->
		<div class="col-md-4 col-sm-4 col-4">
			<div class="views-data-wrap">
				<div class="views-data">
					<?php echo number_format_i18n($views['lastmonth']); ?>
				</div><!-- views-data -->
				
				<?php houzez_views_percentage($last2month, $lastmonth); ?>

				<div class="views-text">
					<?php esc_html_e('Last 30 Days', 'houzez'); ?>
				</div><!-- views-text -->
			</div><!-- views-data-wrap -->
		</div><!-- col-md-4 col-sm-4 col-4 -->
	</div>
</div><!-- dashboard-statistic-block -->
