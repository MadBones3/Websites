<?php 
    /* Template Name: counseling */
    get_header();
?>
<?php get_template_part('templates/parts/banner');?>

<main id="counceling">
<?php get_template_part('templates/parts/quote');?>

<!-- accordion -->
<?php $data = get_field('con_accordion');?>
<div class="consel-acc magic-zoom">
    <div class="wrapper">
        <div class="tabs">
            <div class="tab-header">
                <div class="th active">
                    <i class="fas fa-signal"></i> Online
                </div>
                <div class="th">
                    <i class="fas fa-user"></i> In-person
                </div>
                <div class="th">
                    <i class="fas fa-users"></i> Group therapy
                </div>
            </div>
            <div class="tab-indicator"></div>
            <div class="tab-content">
                <!-- re -->
                <div class="tc active">
                    <i class="fas fa-signal"></i>
                    <h2><?php echo $data['online_title']; ?></h2>
                    <div><?php echo $data['online_content'];?></div>
                </div>  
                <!-- end -->
                <!-- re -->
                <div class="tc">
                    <i class="fas fa-user"></i>
                    <h2><?php echo $data['person_title'];?></h2>
                    <div><?php echo $data['person_content'];?></div>
                </div>  
                <!-- end -->
                <!-- re -->
                <div class="tc">
                    <i class="fas fa-users"></i>
                    <h2><?php echo $data['group_title'];?></h2>
                    <div><?php echo $data['group_content'];?></div>
                </div>  
                <!-- end -->
            </div>
        </div>
    </div>
</div>

<!-- form -->
<div class="beige">
    <div class="wrapper">
        <div class="cont-form magic-down">
            <div><?php echo get_field('counsel_form_title');?></div>
            <div class="short-form"><?php echo get_field('counsel_form_shortcode');?></div>
        </div>
    </div>
</div>
</main>
    
    
<?php get_template_part('templates/parts/reviews');?>

<script>
/* =========== Counsel Accordion ================== */

function _class(name) {
    return document.getElementsByClassName(name);
}

let tabPanes = _class("tab-header")[0].getElementsByClassName("th");

for (let i = 0; i < tabPanes.length; i++) {
    tabPanes[i].addEventListener("click", function () {
        _class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
        tabPanes[i].classList.add("active");

        _class("tab-indicator")[0].style.top = `calc(30px + ${i * 100}px)`;

        _class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
        _class("tab-content")[0].getElementsByClassName("tc")[i].classList.add("active");

    });

}
</script>
<?php get_footer();?>