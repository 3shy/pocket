<?php


?>
                                        <div class="kt-portlet kt-portlet--tabs">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">  <h3 class="kt-portlet__head-title"><a href="https://tekno-pro.site/dashboard/index.php?page=1">Best Offers offers</a></h3></h3>
                                        			</div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="kt-widget4">
                                                    
                                                    <?php foreach($OgAds_offers as $offer){ if(!in_array($offer['offerid'], $not_working_offers)){ ?>
                                                    
                                					<a href="<?php echo esc_attr($offer['link']); ?>" target="_blank" class="kt-widget4__item">
                                						<div class="kt-widget4__pic kt-widget4__pic--pic">
                                							<img src="<?php echo $offer['picture']; ?>" alt="" class="offer-image">
                                						</div>
                                						<div class="kt-widget4__info offer-content">
                                						    <p class="offer-title"> <?php echo esc_attr($offer['name_short']); ?> </p>
                                						    <p class="offer-description"> <?php echo esc_attr($offer['adcopy']); ?></p>
                                						</div>
                                						<p class="btn btn-sm btn-success btn-bold"> <span class="offer-points"><?php echo intval($offer['payout'] * $pointsRatio); ?></span><br><span class="offer-points-title">Points</span></p>
                                					</a>
                                					
												<?php }}?>
                                					
                                				</div>
                                            </div>
                                        </div>