<div class="row">
  <?php foreach($courses as $course):
   $instructor_details = $this->user_model->get_all_user($course['user_id'])->row_array();?>
   <div class="col-md-4 col-lg-4">
     <div class="course-box-wrap">
         <a href="<?php echo site_url('home/'.$page_title.'_/'.slugify($course['title']).'/'.$course['id']); ?>">
             <div class="course-box">
                 <div class="course-image">
                     <img src="<?php echo $this->crud_model->get_course_thumbnail_url($course['id']); ?>" alt="" class="img-fluid" style="min-height: 238px;">
                 </div>
                 <div class="course-details">
                     <h5 class="title"><?php echo $course['title']; ?></h5>
                     <p class="instructors">
                         <?php echo $instructor_details['first_name'].' '.$instructor_details['last_name']; ?>
                     </p>
                     <div class="rating">
                         <?php
                         $total_rating =  $this->crud_model->get_ratings('course', $course['id'], true)->row()->rating;
                         $number_of_ratings = $this->crud_model->get_ratings('course', $course['id'])->num_rows();
                         if ($number_of_ratings > 0) {
                             $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                         }else {
                             $average_ceil_rating = 0;
                         }

                         for($i = 1; $i < 6; $i++):?>
                         <?php if ($i <= $average_ceil_rating): ?>
                             <i class="fas fa-star filled"></i>
                         <?php else: ?>
                             <i class="fas fa-star"></i>
                         <?php endif; ?>
                     <?php endfor; ?>
                     <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                 </div>
                 <?php if ($course['tipe'] != "online"): ?>
                 <?php
                    $dateNow = date('Y-m-d', strtotime(date('Y-m-d')));
                    $dateMulai = date('Y-m-d', strtotime($course['tanggal']));
                    if($dateNow <= $dateMulai):
                 ?>
                 <i class="fa fa-calendar text-dark mr-1" style="font-size: 12px;"></i>
                 <small><span class="text-dark"><?= date_format(date_create($course['tanggal']),"j F Y");?></span></small>
                 <?php endif;?>
                 <?php endif;?>
                 <?php if ($course['tipe'] == "online"): ?>
                    <i class="fa fa-compass text-dark mr-1" style="font-size: 12px;"></i>
                    <small><span class="text-dark">Akses setiap saat</span></small>
                <?php endif ?>
                 <?php if ($course['is_free_course'] == 1): ?>
                     <p class="price text-right"><?php echo get_phrase('free'); ?></p>
                 <?php else: ?>
                     <?php if ($course['discount_flag'] == 1): ?>
                     <br>
                         <small class ="text-secondary text-left" style="font-size: 10px;"><s><?php echo currency($course['price']); ?></s></small>
                         <p class="price text-right"><?php echo currency($course['discounted_price']); ?></p>
                     <?php else: ?>
                     <br>
                         <small class ="text-secondary text-left" style="font-size: 10px;"><s></s></small>
                         <p class="price text-right"><?php echo currency($course['price']); ?></p>
                     <?php endif; ?>
                 <?php endif; ?>
             </div>
         </div>
     </a>
     </div>
   </div>
 <?php endforeach; ?>
</div>
