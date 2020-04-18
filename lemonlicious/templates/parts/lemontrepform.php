<?php 
    $form_heading = get_field('form_heading');
    $individuals_description = get_field('individuals_description');
    $schools_description = get_field('schools_description');
    $sports_academies_descriptions = get_field('sports_academies_descriptions');
    $form_image = get_field('form_image');
?>
<section id="lemonform">
    <div class="wrapper">
        <div class="sectionflex">

        <div class="left">
            <div class="square">
                <span></span>
                <div class="content">
                    <div class="Sone"></div>
                    <img src="<?= $form_image;?>">
                    <div class="Stwo"></div>
                </div>
            </div>
        </div>

        <div class="right">
            <h2><?= $form_heading; ?></h2>
            <div class="form">

<!-- tabs -->

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Individuals')" id="defaultOpen">Individuals</button>
    <button class="tablinks" onclick="openCity(event, 'School')">Schools</button>
    <button class="tablinks" onclick="openCity(event, 'Sports')">Sports academies and clubs</button>
</div>

<div id="Individuals" class="tabcontent">
    <div class="descform">
        <?= $individuals_description;?>
    </div>
    <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]')?>
</div>

<div id="School" class="tabcontent">
    <div class="descform">
    <?= $schools_description;?>
        <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]')?>
    </div>
</div>

<div id="Sports" class="tabcontent">
    <div class="descform">
    <?= $sports_academies_descriptions;?>
        <?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]')?>
    </div>
</div>
            
<!-- end tabs -->
            </div>
        </div>

        </div>
    </div>
</section>
<script>
/* ===========  Form Tab  ================== */

function openCity (evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/* =========== END Form Tab  ================== */
</script>