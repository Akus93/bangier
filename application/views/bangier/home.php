<div class="container">
<?php foreach ($objects as $object): ?>
    <h3><?=$object['title'].'</br>'?></h3>
    <p><?=$object['text'].'</br>'?></p>
    <i><?=$object['author'].'</br>'?></i>

<?php endforeach; ?>

</div>