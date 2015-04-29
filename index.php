<?php 
//views/news/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>

<?php
    print '<h1>' . $xml->channel->title . '</h1>';
  foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br /><br />';
  }
?>


<?php 
$this->load->view($this->config->item('theme') . 'footer');
?>