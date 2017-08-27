<?php $price_form_selected = isset($price_form) ? intval($price_form):0 ?>;
<?php $price_to_selected   = isset($price_to) ? intval($price_to):0 ?>;
<div class="container">
    <div class="row">
      <div class="col-sm-2">
        <div class="left">
          <div class="box-left">
            <div class="title-box-left">
              <h2>Tìm theo giá</h2>
            </div>
            <div style="clear: both;"></div>
            <div class="content-box">
              <form action="<?php echo site_url('product/search_price') ?>" method="get" role="form">
                <div class="form-group">
                  <label for="">Giá từ : <span>*</span></label>
                  <select class="form-control" name="price_form" id="price_form">
                    <?php for($i=0; $i<=1000000;$i=$i+5000):?>
                      <option <?php echo ($price_form_selected==$i)?'selected':'' ?> 
                      value="<?php echo $i ?>"><?php echo number_format($i); ?> đ</option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Giá tới : <span>*</span></label>
                  <select class="form-control" name="price_to" id="price_to">
                    <?php for($i=0;$i<=1000000;$i=$i+5000):?>
                      <option <?php echo ($price_to_selected==$i)?'selected':'' ?> 
                      value="<?php echo $i ?>"><?php echo number_format($i); ?> đ</option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="submit">
                  <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-8">
       <div id="jssor_1" style="position: relative; margin: auto; top: 0px; left: 0px; width: 750px; height: 222px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px; background-color: rgba(0, 0, 0, .7);"></div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 750px; height: 222px; overflow: hidden;">
         <?php foreach($slide_list as $row):?>
          <div data-p="112.50" style="display: none;">        
            <a href=""><img data-u="image" src="<?php echo base_url('upload/slide/'.$row->image_link)?>"  /></a>
          </div>
          <?php endforeach; ?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
          <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="right">
        <div class="box-right">
          <div class="title-box-right">
            <h2>Bản Đồ</h2>
          </div>
        </div>
        <div style="clear: both;"></div>
        <div class="content-box-right">
          <div id="map" style="height:185px; width:100%;text-align: center;"></div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  jQuery(document).ready(function ($) {

  var jssor_1_SlideshowTransitions = [
  { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5 } },
  { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5 } },
  { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5 } },
  { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5 } },
  { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $Jease$.$InOutSine, $Top: $Jease$.$OutWave, $Clip: $Jease$.$InOutQuad }, $Outside: true, $Round: { $Top: 1.3 } },
  { $Duration: 1000, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $Jease$.$OutQuad },
  { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $Jease$.$OutQuad },
  { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12 } },
  { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $Jease$.$InOutExpo, $Opacity: $Jease$.$InOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 } },
  { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $Jease$.$OutJump, $Round: { $Top: 1.5 } }
  ];

  var jssor_1_options = {
    $AutoPlay: 1,
    $SlideshowOptions: {
      $Class: $JssorSlideshowRunner$,
      $Transitions: jssor_1_SlideshowTransitions,
      $TransitionsOrder: 1
    },
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$
    },
    $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$
    }
  };

  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
              var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
              if (refSize) {
                refSize = Math.min(refSize, 750 );
                jssor_1_slider.$ScaleWidth(refSize);
              }
              else {
                window.setTimeout(ScaleSlider, 30);
              }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
          });
</script>