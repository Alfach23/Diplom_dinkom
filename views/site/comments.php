<h1>Отзывы</h1>
<table border='1'>
    <th>ID</th><th>ФИО клиента</th><th>ID преподавателя</th><th>ID Курса</th><th>Удовлетворенность</br>обучением (1-3)</th>
    <th>Удовлетворённость</br>сервисом (1-3)</th>
    <th>Компетенция</br>преподавателя (1-4)</th>
    <th>Доступность</br>материала (1-4)</th>
    <th>Ответы</br>преподавателя (1-4)</th>
    <th>Практичность (1-4)</th>
    <th>Объём</br>актуальной</br>информации</br>(1-4)</th>
    <th>Раскрытие</br>темы (1-4)</th>
    <th>Дата</th>
<?php foreach ($comments as $comment) { ?>
    <tr><td><?=$comment->id ?> </td><td> <?=$comment->user?></td><td> <?=$comment->id_teachers?> </td>
        <td><?=$comment->id_kurs?></td><td><?=$comment->udovlet_obuch?></td><td> <?=$comment->udovlet_service?></td>
        <td><?=$comment->competence_teac?></td><td> <?=$comment->availability_material?> </td>
        <td><?=$comment->teacher_responses?></td><td> <?=$comment->practical_focus?> </td>
        <td><?=$comment->current_nformation?></td><td> <?=$comment->disclosure_training?> </td>
        <td><?=$comment->date?></td></tr>
<?php } 
/*
<?=$comment->id ?>; </b> <?=$comment->user?> <?=$comment->id_teachers?> 
        <?=$comment->id_kurs?><?=$comment->udovlet_obuch?> <?=$comment->udovlet_service?>
        <?=$comment->competence_teac?> <?=$comment->availability_material?> 
        <?=$comment->teacher_responses?> <?=$comment->practical_focus?> 
        <?=$comment->current_nformation?> <?=$comment->disclosure_training?> 
        <?=$comment->date?></li>*/




?>
</table>
<form>
   <p>Выберите дату: 
   <input type="date" name="calendar" value="2017-06-04"          
    max="2018-06-04" min="1997-05-29">
   <input type="submit" value="Запросить"></p>
  </form>
<p><a class="btn btn-lg btn-success" style="margin-top: 20px;" href="">Выгрузить в Excel</a></p>
<!--<? = LinkPager::widget(['pagination' => $pagination])  ?>-->


<!--'"<?php echo $today = date("m-d-y");?>"'-->