<?php
        Yii::app()->clientScript->registerScriptFile('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');       
        Yii::app()->clientScript->registerScriptFile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js');       
   
   
   
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/highchart/highcharts.js');       

         Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.js');
         Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.orderBars.js');
         Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.pie.js');  
         Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/excanvas.min.js');
        // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.resize.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/tables/jquery.dataTables.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/tables/colResizable.min.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/forms.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.autosize.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/autotab.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.validationEngine-en.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.validationEngine.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.dualListBox.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.select2.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.maskedinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.inputlimiter.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.tagsinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.wysiwyg.js');  

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/other/calendar.min.js');        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/other/elfinder.min.js');        

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/plupload.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/plupload.html5.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/plupload.html4.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/jquery.plupload.queue.js');
        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.progress.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.jgrowl.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.tipsy.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.alerts.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.colorpicker.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.mousewheel.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/wizards/jquery.form.wizard.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/wizards/jquery.validate.js');       

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.breadcrumbs.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.collapsible.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.ToTop.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.listnav.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.sourcerer.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.timeentry.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.prettyPhoto.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/custom.js');

        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/chart.js');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/auto.js');
       //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/bar.js');
       // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/hBar.js');
       //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/pie.js');
       //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/bar2.js');
        ?>

        
         
      
<div class="wrapper">
	<!-- Left navigation -->
    <div class="leftNav">
        <ul id="menu">
            <?php echo "<script> var arra1 = ".json_encode(array()).";var d1 = ".json_encode(array()).";var d2 = ".json_encode(array()).";var d3 = ".json_encode(array()).";</script>";
            if (Yii::app()->user->name == 'admin'){?>
                <li class="dash"><?php echo CHtml::link('<span>Главная</span>', Yii::app()->createUrl('client/main'));?></li>
                <li class="typo"><?php echo CHtml::link('<span>Создать предложение</span>', Yii::app()->createUrl('certificate/create'));?></li>
                <li class="login"><?php echo CHtml::link('<span>Создать клиента</span>', Yii::app()->createUrl('client/create'));?></li>
                <li class="graphs"><?php echo CHtml::link('<span>Статистика</span>', Yii::app()->createUrl('client/statistics'), array('class'=>'active'));?></li>
                <li class="contacts"><?php echo CHtml::link('<span>Каталог клиентов</span>', Yii::app()->createUrl('client/admin')); }?></li>   
            <?php if (Yii::app()->user->name != 'admin'){?>
                <li class="dash"><?php echo CHtml::link('<span>Главная</span>', Yii::app()->createUrl('client/view', array('id'=>$model->cid)));?></li>
                <li class="typo"><?php echo CHtml::link('<span>Создать предложение</span>', Yii::app()->createUrl('certificate/create', array('id'=>$model->cid)));?></li>
                <li class="typo"><?php echo CHtml::link('<span>Создать уведомление</span>', Yii::app()->createUrl('notification/create', array('id'=>$model->cid)));?></li>
                <li class="graphs"><?php echo CHtml::link('<span>Статистика</span>', Yii::app()->createUrl('client/statistics'), array('class'=>'active')); }?></li>   
        </ul>
        
    </div>

	<!-- Content -->
    <div class="content" id="container">
        <div class="title"><h5>Последние данные</h5></div>
        
        <!-- Statistics -->
        <div class="stats">
            <ul>
                <li><a href="#" class="count grey" title=""><?php echo Client::model()->count();?></a><span>клиента</span></li>                
                <li><a href="#" class="count grey" title=""><?php echo Certificate::model()->count();?></a><span>предложений</span></li>
                <li><a href="#" class="count grey" title=""><?php echo User::model()->count();?></a><span>пользователей</span></li>
                <li class="last"><a href="#" class="count grey" title=""><?php echo Order::model()->count('status=1');?></a><span>закрытых сертификатов</span></li>
            </ul>
        </div>

        <br>
        <br>
        <div class="title"><h5>За сегодня</h5></div>
        
        <!-- Statistics -->
        <div class="stats">
            <ul>
            <?php $today = time();
                      $aaa = Yii::app()->dateFormatter->format('dd.MM.yyyy', $today);
                      $todInt = strtotime($aaa);
                      $tomInt = $todInt+86400;
                ?>
                <li><a href="#" class="count grey" title=""><?php echo Certificate::model()->countBySql('select count(*) from certificate WHERE time_begin<='.$today.' AND time_end>='.$today);?></a><span>действующих предложения</span></li>                
                <li><a href="#" class="count grey" title=""><?php echo Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt.' AND time>='.$todInt);?></a><span>отметок</span></li>
                <li><a href="#" class="count grey" title=""><?php echo User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt.' AND time>='.$todInt);?></a><span>новых пользователей</span></li>
                <li class="last"><a href="#" class="count grey" title=""><?php echo Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt.' AND time_close>='.$todInt.') AND status=1');?></a><span>закрытых сертификатов</span></li>
            </ul>
        </div>

        <div class="widget">
            <div class="head"><h5 class="iStats">Новые пользователи | Отметки | Закрытые сертификаты</h5></div>
            <div class="body">
            <?php $today = time();
              $aaa = Yii::app()->dateFormatter->format('dd.MM.yyyy', $today);
              $todInt = strtotime($aaa);
              $tomInt = $todInt+86400;
              $tomInt2 = $todInt-86400;
              $tomInt3 = $tomInt2-86400;
              $tomInt4 = $tomInt3-86400;
              $tomInt5 = $tomInt4-86400;
              $tomInt6 = $tomInt5-86400;
              $tomInt7 = $tomInt6-86400;
            ?>

            <?php             
                $var1 = array(                  
                  array(1, User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt.' AND time>='.$todInt)), 
                  array(2, User::model()->countBySql('select count(*) from user WHERE time<='.$todInt.' AND time>='.$tomInt2)), 
                  array(3, User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt2.' AND time>='.$tomInt3)), 
                  array(4, User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt3.' AND time>='.$tomInt4)), 
                  array(5, User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt4.' AND time>='.$tomInt5)),
                  array(6, User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt5.' AND time>='.$tomInt6)),
                  array(7, User::model()->countBySql('select count(*) from user WHERE time<='.$tomInt6.' AND time>='.$tomInt7)), 
                );
            $var2 = array(                          
                  array(1, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt.' AND time>='.$todInt)), 
                  array(2, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$todInt.' AND time>='.$tomInt2)), 
                  array(3, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt2.' AND time>='.$tomInt3)), 
                  array(4, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt3.' AND time>='.$tomInt4)), 
                  array(5, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt4.' AND time>='.$tomInt5)),
                  array(6, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt5.' AND time>='.$tomInt6)), 
                  array(7, Mark::model()->countBySql('select count(*) from mark WHERE time<='.$tomInt6.' AND time>='.$tomInt7)), 
                );
            $var3 = array(                  
                  array(1, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt.' AND time_close>='.$todInt.') AND status=1')), 
                  array(2, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$todInt.' AND time_close>='.$tomInt2.') AND status=1')), 
                  array(3, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt2.' AND time_close>='.$tomInt3.') AND status=1')), 
                  array(4, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt3.' AND time_close>='.$tomInt4.') AND status=1')), 
                  array(5, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt4.' AND time_close>='.$tomInt5.') AND status=1')),
                  array(6, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt5.' AND time_close>='.$tomInt6.') AND status=1')), 
                  array(7, Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$tomInt6.' AND time_close>='.$tomInt7.') AND status=1')), 
                );
      echo "<script> var arra1 = ".json_encode(array())."; var erer = null; var d1 = ".json_encode($var1)."; var d2 = ".json_encode($var2)."; var d3 = ".json_encode($var3).";</script>";?>
                <div id="rauanbar"></div>
            </div>
        </div>
        <br>
       
        <div class="fluid">
            <div class="span6">
                <div class="widget"><!-- Pie chart 1 -->
                    <div class="head"><h5 class="iChart8">Возрастные группы</h5></div>
                    <div class="body">
                    <?php 
                    $today = time();
                    $aaa = Yii::app()->dateFormatter->format('yyyy-MM-dd HH:mm:ss', $today);                                            

                      $zero15 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 15');
                      $z1518 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 15 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 18');
                      $z1821 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 18 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 21');
                      $z2124 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 21 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 24');
                      $z2427 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 24 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 27');
                      $z2730 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 27 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 30');
                      $z3033 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 30 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 33');
                      $z3336 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 33 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 36');
                      $z36 = User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 > 36');                      
                
                $var11 = array(                  
                  array($zero15, 15), 
                  array($z1518, 18), 
                  array($z1821, 21), 
                  array($z2124, 24), 
                  array($z2427, 27),
                  array($z2730, 30),
                  array($z3033, 33), 
                  array($z3336, 36), 
                  array($z36, 39), 
                );
                //1375228800 1375301580 278700
            
      echo "<script> var yne = ['меньше 15', '15-18', '18-21', '21-24', '24-27', '27-30', '30-33', '33-36', '36 и выше']; var arra1 = ".json_encode(array())."; var d1_h = ".json_encode($var11).";</script>";?>
                        <!-- <div id="hBar" class="pieWidget"></div> -->
                        <div id="rauanchart" style="min-width: 300px; max-width: 300px; height: 300px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
            
            <div class="span6">
                <div class="widget"><!-- Pie chart 2 -->
                    <div class="head"><h5 class="iChart8">Пол</h5></div>
                    <div class="body">
                    <?php 
                      $rows = array();                           
                      $varM = array('label'=>'Муж', 'data'=>User::model()->count("gender='мужской'"));
                      $rows[] = $varM;
                      $varJ = array('label'=>'Жен', 'data'=>User::model()->count("gender='женский'"));
                      $rows[] = $varJ;
                    
                    echo "<script>var data1 = ".json_encode($rows).";</script>";
                    
                    ?>
                        <div id="rauanpie" style="min-width: 300px; max-width: 300px; height: 300px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="widget">
            <div class="head"><h5 class="iStats">Отметки | Закрытые сертификаты  (по клиентам)</h5></div>
            <div class="body">
            <?php             
              $clients = Client::model()->findAll();
              $rows = array();
              $rows2 = array();
              $rows3 = array();
              $cnt = 0;
              foreach ($clients as $client) 
              {                  
                $marks = 0;
                $marks += Mark::model()->countByAttributes(array('cid'=>$client->cid));                
                $certs = Certificate::model()->findAllByAttributes(array('cid'=>$client->cid));
                $orders = 0;
                foreach ($certs as $cert) 
                {
                  $orders += Order::model()->countByAttributes(array('cert_id'=>$cert->cert_id, 'status'=>'1'));
                }
                $rows[] = array($cnt, $marks);
                $rows2[] = array($cnt, $orders);
                $rows3[] = array($cnt, $client->title);              
                $cnt++;
              }

      echo "<script> var er1 = ".json_encode($rows)."; var er2 = ".json_encode($rows2).";var erer = ".json_encode($rows3).";var erkewka=80*".$cnt.";</script>";?>
                <div id="rauanbar2" width="200px" style="overflow:auto;" ></div>
            </div>
        </div>
        
    </div>
</div>
<script type="text/javascript">
   var sex = new Highcharts.Chart({
        chart: {
                type: 'bar',
                renderTo: 'rauanchart'
            },
            title: {
                text: null
            },
            subtitle: {
                text: null
            },
            xAxis: {
                categories: [' < 15', '15-18', '18-21', '21-24', '24-27', '27-30', '30-33', '33-36', '36 <'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: null,
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: 'пользователей'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Количество пользователей ',
                data: [<?php echo $zero15?>, <?php echo $z1518?>, <?php echo $z1821?>, <?php echo $z2124?>, <?php echo $z2427?>,<?php echo $z2730?>,<?php echo $z3033?>,<?php echo $z3336?>,<?php echo $z36?>]
            }]
    });
    sex.redraw();
</script>
<script type="text/javascript">
  var sexpie = new Highcharts.Chart({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            renderTo:'rauanpie'
        },
        title: {
            text: null
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                size: 222,
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },

                },
                showInLegend: true
            }
        },
        credits: {
                enabled: false
            },
        series: [{
            type: 'pie',
            name: 'All users',
            data: [
                ['Men', <?php echo $varM['data'] ?>],
                ['Women', <?php echo $varJ['data'] ?>]
            ]
        }]
    });
</script>
<script type="text/javascript">
  var sexbar = new Highcharts.Chart({
        chart: {
                type: 'column',
                renderTo:'rauanbar'
            },
            title: {
                text: null
            },
            subtitle: {
                text: null
            },
            xAxis: {
                categories: [
                    '<?php echo date("m.d.y",strtotime("-6 days")); ?>',
                    '<?php echo date("m.d.y",strtotime("-5 days")); ?>',
                    '<?php echo date("m.d.y",strtotime("-4 days")); ?>',
                    '<?php echo date("m.d.y",strtotime("-3 days")); ?>',
                    '<?php echo date("m.d.y",strtotime("-2 days")); ?>',
                    '<?php echo date("m.d.y",strtotime("-1 days")); ?>',
                    '<?php echo date("m.d.y"); ?>'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Количество (ед.)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} ед.</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Пользователи',
                data: [<?php echo $var1[0][1] ?>, <?php echo $var1[1][1] ?>,<?php echo $var1[2][1] ?>, <?php echo $var1[3][1] ?>, <?php echo $var1[4][1] ?>, <?php echo $var1[5][1] ?>, <?php echo $var1[6][1] ?>]
    
            }, {
                name: 'Отметки',
                data: [<?php echo $var2[0][1] ?>, <?php echo $var2[1][1] ?>,<?php echo $var2[2][1] ?>, <?php echo $var2[3][1] ?>, <?php echo $var2[4][1] ?>, <?php echo $var2[5][1] ?>, <?php echo $var2[6][1] ?>]
    
            }, {
                name: 'Сертификаты',
                data: [<?php echo $var3[0][1] ?>, <?php echo $var3[1][1] ?>,<?php echo $var3[2][1] ?>, <?php echo $var3[3][1] ?>, <?php echo $var3[4][1] ?>, <?php echo $var3[5][1] ?>, <?php echo $var3[6][1] ?>]
    
            }]
    });
</script>
<script type="text/javascript">
  var sexbar2 = new Highcharts.Chart({
        chart: {
                type: 'column',
                renderTo:'rauanbar2'
            },
            title: {
                text: null
            },
            subtitle: {
                text: null
            },
            xAxis: {
                categories: [
                    <?php for( $i = 0 ; $i < $cnt ; $i++)
                      {
                        if ($i+1 < $cnt) echo "'".str_replace("'", "\'", $rows3[$i][1])."',";
                        else echo "'".str_replace("'", "\'", $rows3[$i][1])."'";
                      }   
                      ?>               



                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: null
                }
            },
            
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} ед</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0,
                    
                }
            },
            series: [{
                name: 'Отметки',
                data: [<?php for( $i = 0 ; $i < $cnt ; $i++)
                      {
                        if ($i+1 < $cnt) echo $rows[$i][1].",";
                        else echo $rows[$i][1];
                      } ?>]
    
            }, {
                name: 'Сертификаты',
                data: [<?php for( $i = 0 ; $i < $cnt ; $i++)
                      {
                        if ($i+1 < $cnt) echo $rows2[$i][1].",";
                        else echo $rows2[$i][1];
                      } ?>]
    
            }]

    });
</script>
