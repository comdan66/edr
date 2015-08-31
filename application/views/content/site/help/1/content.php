<form id='content' method='post' data-prev='<?php echo base_url ('help', $step - 1);?>' data-next='<?php echo base_url ('help', $step + 1);?>'>
  <input type='hidden' name='nickname' value='<?php echo $nickname;?>' />
  <input type='hidden' name='title' value='<?php echo $title;?>' />
  <input type='hidden' name='address' value='<?php echo $address;?>' />
  <input type='hidden' name='desc' value='<?php echo $desc;?>' />

  <input type='hidden' name='year' value='<?php echo $year;?>' />
  <input type='hidden' name='month' value='<?php echo $month;?>' />
  <input type='hidden' name='day' value='<?php echo $day;?>' />

  <input type='hidden' id='hour' name='hour' value='<?php echo $hour;?>' />
  <input type='hidden' id='min' name='min' value='<?php echo $min;?>' />

  <input type='hidden' id='lat' name='lat' value='<?php echo $lat;?>' />
  <input type='hidden' id='lng' name='lng' value='<?php echo $lng;?>' />

  <h1>先選擇分類吧！</h1>
  <h2>分類可多選，如果沒有符合需求的分類，您可自己新增！</h2>
  <h2 class='mobile'>如果沒有符合的需求分類，那就自己新增吧！</h2>

  <div class='tags'>
    <div class='add'><div></div><div></div><div></div><div></div><div>新增分類</div></div>

<?php foreach ($tag_divs as $tag) { ?>
        <label>
          <input type='checkbox' value='<?php echo $tag;?>' name='tags[]'<?php echo in_array ($tag, $tags) ? ' checked' : ''?>/><div><?php echo $tag;?></div>
        </label>
<?php } ?>

  </div>
  <div class='steps'>
    <button type='submit' class=''>上一步</button>
    <button type='submit' class=''>下一步</button>
  </div>
</form>
