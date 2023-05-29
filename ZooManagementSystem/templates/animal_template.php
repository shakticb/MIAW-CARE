<?php
$images2 = $images->fetchAll();
?>
<section class="bg-gray p-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 mt-4">
                <h2 class="lined"><?= $animal['an_given_name'] ?></h2>

                <div class="animal-carousel mt-5" style="max-width: 50vw">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php foreach ($images2 as $key => $row) { ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" <?= $key == 0 ? 'class="active"' : "" ?>></li>
                            <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php foreach ($images2 as $key => $image) { ?>
                                <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                                    <img src="../img/animals/<?= $image['image_name'] ?>" class="d-block w-50 m-auto" alt="...">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev carousel-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next carousel-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="mt-5">
                    <h4 class="text-secondary">Detail</h4>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Nama Kucing:</span>&ensp;<?= $animal['an_given_name'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Nama Spesies:</span>&ensp;<?= $animal['an_species_name'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Tanggal Lahir:</span>&ensp;<?= $animal['an_dob'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Jenis Kelamin:</span>&ensp;<?= $animal['an_gender'] == "m" ? "Male" : "Female" ?></h6>
                            <h6 class="my-2"><span class="text-muted">Tanggal Masuk MIAU CARE:</span>&ensp;<?= $animal['an_joindate'] ?></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Berat Badan:</span>&ensp;<?= $animal['an_weight'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Klasifikasi:</span>&ensp;<?= $getClassName($animal['class_id']) ?></h6>
                            <?php if ($class['class_table_name'] == "mammals") { ?>
                                <h6 class="my-2"><span class="text-muted">Vaksin:</span>&ensp;<?= $childDetails['m_gest_period'] ?></h6>
                            
                                <?php } ?>
                            <?php if ($class['class_table_name'] == "birds") { ?>
                                <h6 class="my-2"><span class="text-muted">Vaksin:</span>&ensp;<?= $childDetails['b_nest_const'] ?></h6>
                            
                                <?php } ?>
                            <?php if ($class['class_table_name'] == "fish") { ?>
                                <h6 class="my-2"><span class="text-muted">Average Body Temperature:</span>&ensp;<?= $childDetails['f_body_temp'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Water Type:</span>&ensp;<?= $childDetails['f_water_type'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Color Variants:</span>&ensp;<?= $childDetails['f_color_variant'] ?></h6>
                            <?php } ?>

                            <?php if ($class['class_table_name'] == "reptiles" || $class['class_table_name'] == "amphibians") { ?>
                                <h6 class="my-2"><span class="text-muted">Reproduction Type:</span>&ensp;<?= isset($childDetails['r_rep_type']) ? $childDetails['r_rep_type'] :  $childDetails['am_rep_type'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Average Clutch Size:</span>&ensp;<?= isset($childDetails['r_clutch_size']) ? $childDetails['r_clutch_size'] :  $childDetails['am_clutch_size']  ?></h6>
                                <h6 class="my-2"><span class="text-muted">Average Number of Offsprings:</span>&ensp;<?= isset($childDetails['r_num_offspring']) ? $childDetails['r_num_offspring'] :  $childDetails['am_num_offspring'] ?></h6>
                            <?php } ?>

                            <?php if ($animal['an_description'] != "") { ?>
                                <h6 class="my-2"><span class="text-muted">Description:</span>&ensp;<?= $animal['an_description'] ?></h6>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>