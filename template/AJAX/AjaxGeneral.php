<?php foreach($Sms_output as $sms1): ?>
    <div>Отправил<?php echo " ".$sms1['login'];?>
    <?php echo $sms1['sms'];?></div>
<?php endforeach;?>