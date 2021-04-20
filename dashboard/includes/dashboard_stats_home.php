<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

?>
                                        <div class="row row-full-height">
                                            <div class="col-sm-12 col-md-12 col-lg-3">
                                                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-success">
                                                    <div class="kt-portlet__body kt-portlet__body--fluid">
                                                        <div class="kt-widget26">
                                                            <div class="kt-widget26__content">
                                                                <span class="kt-widget26__number"><?php echo esc_attr($userCurrentPoints); ?></span>
                                                                <span class="kt-widget26__desc">Current Points</span>
                                                            </div>
                                                            <div class="home-chart kt-widget26__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                <canvas id="kt_chart_quick_stats_1" width="460" height="230" class="home-chartjs chartjs-render-monitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12 col-md-12 col-lg-3">
                                                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-brand">
                                                    <div class="kt-portlet__body kt-portlet__body--fluid">
                                                        <div class="kt-widget26">
                                                            <div class="kt-widget26__content">
                                                                <span class="kt-widget26__number"><?php echo esc_attr($userTotalPoints); ?></span>
                                                                <span class="kt-widget26__desc">Total Earned</span>
                                                            </div>
                                                            <div class="home-chart kt-widget26__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                <canvas id="kt_chart_quick_stats_2" width="460" height="230" class="home-chartjs chartjs-render-monitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12 col-md-12 col-lg-3">
                                                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-danger">
                                                    <div class="kt-portlet__body kt-portlet__body--fluid">
                                                        <div class="kt-widget26">
                                                            <div class="kt-widget26__content">
                                                                <span class="kt-widget26__number"><?php echo esc_attr($userRedeemedPoints); ?></span>
                                                                <span class="kt-widget26__desc">Redeemed Points</span>
                                                            </div>
                                                            <div class="home-chart kt-widget26__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                <canvas id="kt_chart_quick_stats_3" width="460" height="230" class="home-chartjs chartjs-render-monitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12 col-md-12 col-lg-3">
                                                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-warning">
                                                    <div class="kt-portlet__body kt-portlet__body--fluid">
                                                        <div class="kt-widget26">
                                                            <div class="kt-widget26__content">
                                                                <span class="kt-widget26__number"><?php echo esc_attr($userreferredMembers); ?></span>
                                                                <span class="kt-widget26__desc">Members Referred</span>
                                                            </div>
                                                            <div class="home-chart kt-widget26__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                <canvas id="kt_chart_quick_stats_4" width="460" height="230" class="home-chartjs chartjs-render-monitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>