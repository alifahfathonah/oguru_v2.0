
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3><?php echo get_settings('system_name')?></h3>
              <div class="pb-3">
                <?php echo get_settings('website_description') ?>
              </div>
              <div class="social-links mt-3">
                <a href="<?php echo get_settings('whatsapp_link') ?>"><i class="fab fa-whatsapp"></i></a>
                <a href="<?php echo get_settings('instagram_link') ?>"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo get_settings('youtube_link') ?>"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tentang</h4>
            <ul>
              <li><i class="fas fa-chevron-right"></i> <a href="<?php echo site_url('home/tentang_kami') ?>"> Tentang Kami</a></li>
              <li><i class="fas fa-chevron-right"></i> <a href="<?php echo site_url('home/bantuan') ?>">Bantuan</a></li>
              <li><i class="fas fa-chevron-right"></i> <a href="<?php echo site_url('home/syarat_ketentuan') ?>">Syarat & Ketentuan</a></li>
              <li><i class="fas fa-chevron-right"></i> <a href="<?php echo site_url('home/kebijakan_privasi') ?>">Kebijakan Privasi</a></li>
              <li><i class="fas fa-chevron-right"></i> <a href="<?php echo site_url('home/informasi_edukator') ?>">Informasi Edukator</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Alamat</h4>
            <p>
              <strong><?php echo strtoupper(get_settings('system_name')) ?></strong>
              <br><em><?php echo nl2br(get_settings('address')) ?></em><br>
              <br><b>Email :</b> <?php echo get_settings('system_email') ?>
              <br><b>Telepon :</b> <?php echo get_settings('phone') ?>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo get_settings('system_name')?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="https://oguruindonesia.com/"><?php echo get_settings('system_name')?></a>
      </div>
    </div>
  </footer>

  <!-- Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true" reset-on-close="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content edit-rating-modal">
            <div class="modal-header">
                <h5 class="modal-title step-1" data-step="1"><?php echo get_phrase('step').' 1'; ?></h5>
                <h5 class="modal-title step-2" data-step="2"><?php echo get_phrase('step').' 2'; ?></h5>
                <h5 class="m-progress-stats modal-title">
                    &nbsp;of&nbsp;<span class="m-progress-total"></span>
                </h5>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="m-progress-bar-wrapper">
                <div class="m-progress-bar">
                </div>
            </div>
            <div class="modal-body step step-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-box">
                                <h4 class="rating-title"><?php echo get_phrase('how_would_you_rate_this_course_overall'); ?></h4>
                                <fieldset class="your-rating">

                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class = "full" for="star5"></label>

                                  <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                    <label class="half" for="star4half"></label> -->

                                  <input type="radio" id="star4" name="rating" value="4" />
                                    <label class = "full" for="star4"></label>

                                  <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                    <label class="half" for="star3half"></label> -->

                                  <input type="radio" id="star3" name="rating" value="3" />
                                    <label class = "full" for="star3"></label>

                                  <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                    <label class="half" for="star2half"></label> -->

                                  <input type="radio" id="star2" name="rating" value="2" />
                                    <label class = "full" for="star2"></label>

                                  <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                    <label class="half" for="star1half"></label> -->

                                  <input type="radio" id="star1" name="rating" value="1" />
                                    <label class = "full" for="star1"></label>

                                  <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                                    <label class="half" for="starhalf"></label> -->

                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id = "course_thumbnail_1" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" class = "course_title_for_rating" id = "course_title_1"></h5>
                                        <p class="card-text" id = "instructor_details">

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-body step step-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-comment-box">
                                <h4 class="rating-title"><?php echo get_phrase('write_a_public_review'); ?></h4>
                                <textarea id = "review_of_a_course" name = "review_of_a_course" placeholder="Bagaimana ulasan anda terkait kelas ini ?" maxlength="65000" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id = "course_thumbnail_2" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" class = "course_title_for_rating" id = "course_title_2"></h5>
                                        <p class="card-text">
                                            -
                                            <?php
                                                $admin_details = $this->user_model->get_admin_details()->row_array();
                                                echo $admin_details['first_name'].' '.$admin_details['last_name'];
                                             ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="course_id" id = "course_id_for_rating" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary next step step-1" data-step="1" onclick="sendEvent(2)"><?php echo get_phrase('next'); ?></button>
                <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2" onclick="sendEvent(1)"><?php echo get_phrase('previous'); ?></button>
                <button type="button" class="btn btn-primary publish step step-2" onclick="publishRating($('#course_id_for_rating').val())" id = ""><?php echo get_phrase('publish'); ?></button>
            </div>
        </div>
    </div>
</div><!-- Modal -->


<script type="text/javascript">
    function publishRating(course_id) {
        var review = $('#review_of_a_course').val();
        var starRating = 0;
        $('input:radio[name="rating"]:checked').each(function() {
            starRating = $('input:radio[name="rating"]:checked').val();
        });

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('home/rate_course'); ?>',
            data : {course_id : course_id, review : review, starRating : starRating},
            success : function(response) {
                // console.log(response);
                $('#EditRatingModal').modal('hide');
                location.reload();
            }
        });
    }
</script>
