<?php


?>
<label>Processor :</label><!--
<select name="processor_id" class="field">
                    <?php //foreach($processors as $processor) { ?>
                        <option value = "<?=$processor->processor->id; ?>"><?=$processor->processor->name; ?></option>
                    <?php// } ?>
                    </select>-->
                    
<select name="processor_id" class="field">
                        <option value = "EMP">EMP</option>
<option value = "EVO">EVO</option>
                    </select>
<label>File :</label>
<p>Fraud page database is <a href="https://staging-safedrive-bigkbear.c9users.io/phpmyadmin" > here </a></p>