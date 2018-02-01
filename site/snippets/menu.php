<?php

// nested menu
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
<nav class="navigation" role="navigation">
  <ul class="menu">
    <?php foreach($items as $item): ?>
      <?php

      // get all children for the current menu item
      $children = $item->children()->visible();

      // display the submenu if children are available
      if($children->count() > 0):

      ?>
      <li class="menu-item has-children<?= r($item->isOpen(), ' is-active') ?>">
        <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
        <ul class="submenu">
          <?php foreach($children as $child): ?>
          <li class="submenu-item<?= r($item->isOpen(), ' is-active') ?>"><a href="<?php echo $child->url() ?>"><?php echo $child->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      <?php else: ?>
      <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
      <?php endif ?>

      </li>
    <?php endforeach ?>
  </ul>

  <div class="burger">
    <span></span>
    <span></span>
    <span></span>
  </div>

</nav>
<?php endif ?>