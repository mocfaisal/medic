 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class=" container-fluid   container-fixed-lg">
  <!-- BEGIN PlACE PAGE CONTENT HERE -->
  
  <div class="card-header  ">
    <div class="card-title">Rickshaw Charts
    </div>
  </div>
  <div class="card-block d-flex flex-wrap">
    <div class="col-lg-4 no-padding">
      <div class="p-r-30">
        <h3>Talk less, show more</h3>
        <br>
        <p>Rickshaw is a JavaScript toolkit for creating interactive time series graphs.Rickshaw provides the elements you need to create interactive graphs: renderers, legends, hovers, range selectors, etc. You put the pieces together.</p>
        <br>
        <div class="inline">
          <p class="small hint-text">Rickshaw: JavaScript toolkit for creating interactive time series graphs.
            <br> <a href="http://code.shutterstock.com/rickshaw/">View the official
            documentation</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-8 sm-no-padding">
      <div class="card card-transparent">
        <div class="card-header  ">
          <div class="card-controls">
            <ul>
              <li><a href="#" class="card-collapse" data-toggle="collapse"><i
                class="pg-arrow_maximize"></i></a>
              </li>
              <li><a href="#" class="card-refresh" data-toggle="refresh"><i
                class="pg-refresh_new"></i></a>
              </li>
              <li><a href="#" class="card-close" data-toggle="close"><i
                class="pg-close"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-block">
          <div class="card card-borderless card-transparent">
            <!-- Nav tabs -->
            <ul id="tabs-rickshaw" class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
              <li class="nav-item">
                <a href="#" class="active" data-toggle="tab" data-target="#tab-rickshaw-realtime" role="tab">
                  <span>Realtime Charts</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" data-target="#tab-rickshaw-bars" role="tab">
                  <span>Stacked Bar Charts</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" data-target="#tab-rickshaw-slider" role="tab">
                  <span>Area Chart with Slider</span>
                </a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content no-padding bg-transparent">
              <div class="tab-pane active relative" id="tab-rickshaw-realtime">
                <div id="rickshaw-realtime_y_axis" class=""></div>
                <div id="rickshaw-realtime" class="rickshaw-chart"></div>
              </div>
              <div class="tab-pane " id="tab-rickshaw-bars">
                <div id="rickshaw-stacked-bars" class="rickshaw-chart"></div>
              </div>
              <div class="tab-pane" id="tab-rickshaw-slider">
                <div id="rickshaw-slider" class="relative">
                  <div class="slider full-width m-t-20"></div>
                  <div class="y_axis"></div>
                  <div class="chart full-width rickshaw-chart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END card -->
  
  
  <!-- START card -->
  <div class="card card-transparent">
    <div class="card-header  ">
      <div class="card-title">NVD3 Charts
      </div>
      <div class="card-controls">
        <ul>
          <li><a href="#" class="card-collapse" data-toggle="collapse"><i
            class="pg-arrow_maximize"></i></a>
          </li>
          <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="pg-refresh_new"></i></a>
          </li>
          <li><a href="#" class="card-close" data-toggle="close"><i class="pg-close"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="card-block d-flex flex-wrap">
      <div class="col-lg-4 no-padding">
        <div class="p-r-30">
          <h3>Talk less, show more</h3>
          <br>
          <p>This project is an attempt to build re-usable charts and chart components for d3.js without taking away the power that d3.js gives you. This is a very young collection of components, with the goal of keeping these components very customizeable, staying away from your standard cookie cutter solutions.</p>
          <br>
          <div class="inline">
            <p class="small hint-text">NVD3: Re-usable charts for d3.js
              <br> <a href="http://nvd3.org/examples/index.html">View the official
              documentation</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 sm-no-padding">
        <!-- Nav tabs -->
        <ul id="tabs-nvd3" class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
          <li class="nav-item">
            <a href="#" class="active" data-toggle="tab" data-target="#tab-nvd3-line" role="tab">
              <span>Line Chart</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" data-toggle="tab" data-target="#tab-nvd3-area" role="tab">
              <span>Stacked Area Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" data-toggle="tab" data-target="#tab-nvd3-line2" role="tab">
              <span>Line Charts with area</span>
            </a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content no-padding">
          <div class="tab-pane active" id="tab-nvd3-line">
            <div id="nvd3-line" class="line-chart m-t-30 text-center" data-x-grid="false">
              <svg></svg>
            </div>
          </div>
          <div class="tab-pane " id="tab-nvd3-area">
            <div id="nvd3-area" class="line-chart m-t-30 text-center" data-x-grid="false">
              <svg></svg>
            </div>
          </div>
          <div class="tab-pane " id="tab-nvd3-line2">
            <div id="nvd3-line2" class="line-chart" data-line-color="master" data-area-color="master" data-point-color="white" data-x-grid="false" data-points="true" data-stroke-width="1">
              <svg></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END card -->
  
  <!-- END PLACE PAGE CONTENT HERE -->
</div>
<!-- END CONTAINER FLUID -->

<?php 

$this->load->view('parts/footer');

?>