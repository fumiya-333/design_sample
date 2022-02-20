<div class="breadclumb">
  <div class="breadclumb-contents">
    <?php
      $output_breadclumb = "";
      foreach($args["breadclumb"] as $breadclumb){
        if($output_breadclumb){
          $output_breadclumb .= "&nbsp;&nbsp;>&nbsp;&nbsp;";
        }

        if($breadclumb["url"]){
          $output_breadclumb .= "<a href='{$breadclumb["url"]}'>{$breadclumb["name"]}</a>";
        }else{
          $output_breadclumb .= $breadclumb["name"];
        }
      }
      print $output_breadclumb;
    ?>
  </div>
</div>