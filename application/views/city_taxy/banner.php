<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="slider">
		<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                    <?php foreach ($images as $i): ?>
			<div data-src="<?php print base_url('assets/city_taxy/images/').$i ?>"> </div>
              <?php endforeach;?>
		</div>
		<div class="clear"> </div>
	</div>

