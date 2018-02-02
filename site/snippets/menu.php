<?php
$items = $pages->visible();

if($items->count()): ?>
<nav class="navigation" role="navigation">
  <ul class="menu">
    <?php foreach($items as $item): ?>
      <?php if($item->children()->visible()->count() > 0): ?>
        <li class="menu-item has-children<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
          <ul class="submenu">
            <?php foreach($item->children()->visible() as $child): ?>
              <li class="submenu-item<?= r($item->isOpen(), ' is-active') ?>"><a href="<?php echo $child->url() ?>"><?php echo $child->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
      <?php else: ?>
        <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
  <div class="burger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav>
<?php endif ?>