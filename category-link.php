<?php $category = get_the_category()[0]; ?>
<?php if ($category->slug == "eating") { ?>
<ul class="category-child-links clear">
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=日本">日本</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=タイ">タイ</a></li>
</ul>
<?php } else if ($category->slug == "travel") { ?>
<ul class="category-child-links clear">
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=日本">日本</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=台湾">台湾</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=タイ">タイ</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=カンボジア">カンボジア</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=ラオス">ラオス</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=マレーシア">マレーシア</a></li>
  <li><a href="/archives/category/<?php echo $category->slug ?>?tag=シンガポール">シンガポール</a></li>
</ul>
<?php } ?>
