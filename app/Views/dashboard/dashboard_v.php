<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Sales <span>| Today</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Reports <span>/Today</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart" style="min-height: 365px;">
                <div id="apexchartsbw7jluik" class="apexcharts-canvas apexchartsbw7jluik apexcharts-theme-light" style="width: 613px; height: 350px;"><svg id="SvgjsSvg1001" width="613" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                    <foreignObject x="0" y="0" width="613" height="350">
                      <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                        <div class="apexcharts-legend-series" rel="1" seriesname="Sales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span></div>
                        <div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div>
                        <div class="apexcharts-legend-series" rel="3" seriesname="Customers" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Customers" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span></div>
                      </div>
                      <style type="text/css">
                        .apexcharts-legend {
                          display: flex;
                          overflow: auto;
                          padding: 0 10px;
                        }

                        .apexcharts-legend.apx-legend-position-bottom,
                        .apexcharts-legend.apx-legend-position-top {
                          flex-wrap: wrap
                        }

                        .apexcharts-legend.apx-legend-position-right,
                        .apexcharts-legend.apx-legend-position-left {
                          flex-direction: column;
                          bottom: 0;
                        }

                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                        .apexcharts-legend.apx-legend-position-right,
                        .apexcharts-legend.apx-legend-position-left {
                          justify-content: flex-start;
                        }

                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                          justify-content: center;
                        }

                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                          justify-content: flex-end;
                        }

                        .apexcharts-legend-series {
                          cursor: pointer;
                          line-height: normal;
                        }

                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                          display: flex;
                          align-items: center;
                        }

                        .apexcharts-legend-text {
                          position: relative;
                          font-size: 14px;
                        }

                        .apexcharts-legend-text *,
                        .apexcharts-legend-marker * {
                          pointer-events: none;
                        }

                        .apexcharts-legend-marker {
                          position: relative;
                          display: inline-block;
                          cursor: pointer;
                          margin-right: 3px;
                          border-style: solid;
                        }

                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                          display: inline-block;
                        }

                        .apexcharts-legend-series.apexcharts-no-click {
                          cursor: auto;
                        }

                        .apexcharts-legend .apexcharts-hidden-zero-series,
                        .apexcharts-legend .apexcharts-hidden-null-series {
                          display: none !important;
                        }

                        .apexcharts-inactive-legend {
                          opacity: 0.45;
                        }
                      </style>
                    </foreignObject>
                    <rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                    <g id="SvgjsG1132" class="apexcharts-yaxis" rel="0" transform="translate(9.25, 0)">
                      <g id="SvgjsG1133" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1135" font-family="Helvetica, Arial, sans-serif" x="20" y="33.666666666666664" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1136">90</tspan>
                          <title>90</title>
                        </text><text id="SvgjsText1138" font-family="Helvetica, Arial, sans-serif" x="20" y="63.68888888888888" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1139">80</tspan>
                          <title>80</title>
                        </text><text id="SvgjsText1141" font-family="Helvetica, Arial, sans-serif" x="20" y="93.71111111111111" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1142">70</tspan>
                          <title>70</title>
                        </text><text id="SvgjsText1144" font-family="Helvetica, Arial, sans-serif" x="20" y="123.73333333333333" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1145">60</tspan>
                          <title>60</title>
                        </text><text id="SvgjsText1147" font-family="Helvetica, Arial, sans-serif" x="20" y="153.75555555555556" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1148">50</tspan>
                          <title>50</title>
                        </text><text id="SvgjsText1150" font-family="Helvetica, Arial, sans-serif" x="20" y="183.77777777777777" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1151">40</tspan>
                          <title>40</title>
                        </text><text id="SvgjsText1153" font-family="Helvetica, Arial, sans-serif" x="20" y="213.79999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1154">30</tspan>
                          <title>30</title>
                        </text><text id="SvgjsText1156" font-family="Helvetica, Arial, sans-serif" x="20" y="243.8222222222222" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1157">20</tspan>
                          <title>20</title>
                        </text><text id="SvgjsText1159" font-family="Helvetica, Arial, sans-serif" x="20" y="273.84444444444443" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1160">10</tspan>
                          <title>10</title>
                        </text><text id="SvgjsText1162" font-family="Helvetica, Arial, sans-serif" x="20" y="303.8666666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1163">0</tspan>
                          <title>0</title>
                        </text></g>
                    </g>
                    <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(39.25, 30)">
                      <defs id="SvgjsDefs1002">
                        <clipPath id="gridRectMaskbw7jluik">
                          <rect id="SvgjsRect1014" width="569.75" height="276.2" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                        </clipPath>
                        <clipPath id="forecastMaskbw7jluik"></clipPath>
                        <clipPath id="nonForecastMaskbw7jluik"></clipPath>
                        <clipPath id="gridRectMarkerMaskbw7jluik">
                          <rect id="SvgjsRect1015" width="611.75" height="318.2" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                        </clipPath>
                        <linearGradient id="SvgjsLinearGradient1033" x1="0" y1="0" x2="0" y2="1">
                          <stop id="SvgjsStop1034" stop-opacity="0.3" stop-color="rgba(65,84,241,0.3)" offset="0"></stop>
                          <stop id="SvgjsStop1035" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                          <stop id="SvgjsStop1036" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                        </linearGradient>
                        <linearGradient id="SvgjsLinearGradient1055" x1="0" y1="0" x2="0" y2="1">
                          <stop id="SvgjsStop1056" stop-opacity="0.3" stop-color="rgba(46,202,106,0.3)" offset="0"></stop>
                          <stop id="SvgjsStop1057" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                          <stop id="SvgjsStop1058" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                        </linearGradient>
                        <linearGradient id="SvgjsLinearGradient1077" x1="0" y1="0" x2="0" y2="1">
                          <stop id="SvgjsStop1078" stop-opacity="0.3" stop-color="rgba(255,119,29,0.3)" offset="0"></stop>
                          <stop id="SvgjsStop1079" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                          <stop id="SvgjsStop1080" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                        </linearGradient>
                      </defs>
                      <line id="SvgjsLine1010" x1="0" y1="0" x2="0" y2="216.599072265625" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="216.599072265625" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                      <line id="SvgjsLine1087" x1="0" y1="270.2" x2="0" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1088" x1="86.73076923076924" y1="270.2" x2="86.73076923076924" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1089" x1="173.46153846153848" y1="270.2" x2="173.46153846153848" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1090" x1="260.19230769230774" y1="270.2" x2="260.19230769230774" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1091" x1="346.92307692307696" y1="270.2" x2="346.92307692307696" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1092" x1="433.6538461538462" y1="270.2" x2="433.6538461538462" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1093" x1="520.3846153846155" y1="270.2" x2="520.3846153846155" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                      <g id="SvgjsG1083" class="apexcharts-grid">
                        <g id="SvgjsG1084" class="apexcharts-gridlines-horizontal">
                          <line id="SvgjsLine1095" x1="0" y1="30.022222222222222" x2="563.75" y2="30.022222222222222" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1096" x1="0" y1="60.044444444444444" x2="563.75" y2="60.044444444444444" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1097" x1="0" y1="90.06666666666666" x2="563.75" y2="90.06666666666666" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1098" x1="0" y1="120.08888888888889" x2="563.75" y2="120.08888888888889" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1099" x1="0" y1="150.11111111111111" x2="563.75" y2="150.11111111111111" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1100" x1="0" y1="180.13333333333333" x2="563.75" y2="180.13333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1101" x1="0" y1="210.15555555555554" x2="563.75" y2="210.15555555555554" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine1102" x1="0" y1="240.17777777777775" x2="563.75" y2="240.17777777777775" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                        </g>
                        <g id="SvgjsG1085" class="apexcharts-gridlines-vertical"></g>
                        <line id="SvgjsLine1105" x1="0" y1="270.2" x2="563.75" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                        <line id="SvgjsLine1104" x1="0" y1="1" x2="0" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                      </g>
                      <g id="SvgjsG1086" class="apexcharts-grid-borders">
                        <line id="SvgjsLine1094" x1="0" y1="0" x2="563.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                        <line id="SvgjsLine1103" x1="0" y1="270.2" x2="563.75" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                        <line id="SvgjsLine1131" x1="0" y1="270.2" x2="563.75" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                      </g>
                      <g id="SvgjsG1016" class="apexcharts-area-series apexcharts-plot-series">
                        <g id="SvgjsG1017" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0">
                          <path id="SvgjsPath1037" d="M0 177.1311111111111C45.533653846153854 177.1311111111111 84.56250000000001 150.1111111111111 130.09615384615387 150.1111111111111C160.4519230769231 150.1111111111111 186.47115384615387 186.13777777777779 216.8269230769231 186.13777777777779C247.18269230769232 186.13777777777779 273.2019230769231 117.08666666666667 303.5576923076923 117.08666666666667C333.91346153846155 117.08666666666667 359.9326923076923 144.10666666666665 390.28846153846155 144.10666666666665C420.6442307692308 144.10666666666665 446.6634615384616 24.01777777777778 477.01923076923083 24.01777777777778C507.37500000000006 24.01777777777778 533.3942307692308 102.07555555555555 563.75 102.07555555555555C563.75 102.07555555555555 563.75 102.07555555555555 563.75 270.2L0 270.2C0 270.2 0 177.1311111111111 0 177.1311111111111 " fill="url(#SvgjsLinearGradient1033)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbw7jluik)" pathTo="M 0 177.1311111111111C 45.533653846153854 177.1311111111111 84.56250000000001 150.1111111111111 130.09615384615387 150.1111111111111C 160.4519230769231 150.1111111111111 186.47115384615387 186.13777777777779 216.8269230769231 186.13777777777779C 247.18269230769232 186.13777777777779 273.2019230769231 117.08666666666667 303.5576923076923 117.08666666666667C 333.91346153846155 117.08666666666667 359.9326923076923 144.10666666666665 390.28846153846155 144.10666666666665C 420.6442307692308 144.10666666666665 446.6634615384616 24.01777777777778 477.01923076923083 24.01777777777778C 507.37500000000006 24.01777777777778 533.3942307692308 102.07555555555555 563.75 102.07555555555555C 563.75 102.07555555555555 563.75 102.07555555555555 563.75 270.2 L 0 270.2z" pathFrom="M 0 270.2 L 0 270.2 L 130.09615384615387 270.2 L 216.8269230769231 270.2 L 303.5576923076923 270.2 L 390.28846153846155 270.2 L 477.01923076923083 270.2 L 563.75 270.2 L 0 270.2"></path>
                          <path id="SvgjsPath1038" d="M0 177.1311111111111C45.533653846153854 177.1311111111111 84.56250000000001 150.1111111111111 130.09615384615387 150.1111111111111C160.4519230769231 150.1111111111111 186.47115384615387 186.13777777777779 216.8269230769231 186.13777777777779C247.18269230769232 186.13777777777779 273.2019230769231 117.08666666666667 303.5576923076923 117.08666666666667C333.91346153846155 117.08666666666667 359.9326923076923 144.10666666666665 390.28846153846155 144.10666666666665C420.6442307692308 144.10666666666665 446.6634615384616 24.01777777777778 477.01923076923083 24.01777777777778C507.37500000000006 24.01777777777778 533.3942307692308 102.07555555555555 563.75 102.07555555555555C563.75 102.07555555555555 563.75 102.07555555555555 563.75 102.07555555555555 " fill="none" fill-opacity="1" stroke="#4154f1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbw7jluik)" pathTo="M 0 177.1311111111111C 45.533653846153854 177.1311111111111 84.56250000000001 150.1111111111111 130.09615384615387 150.1111111111111C 160.4519230769231 150.1111111111111 186.47115384615387 186.13777777777779 216.8269230769231 186.13777777777779C 247.18269230769232 186.13777777777779 273.2019230769231 117.08666666666667 303.5576923076923 117.08666666666667C 333.91346153846155 117.08666666666667 359.9326923076923 144.10666666666665 390.28846153846155 144.10666666666665C 420.6442307692308 144.10666666666665 446.6634615384616 24.01777777777778 477.01923076923083 24.01777777777778C 507.37500000000006 24.01777777777778 533.3942307692308 102.07555555555555 563.75 102.07555555555555" pathFrom="M 0 270.2 L 0 270.2 L 130.09615384615387 270.2 L 216.8269230769231 270.2 L 303.5576923076923 270.2 L 390.28846153846155 270.2 L 477.01923076923083 270.2 L 563.75 270.2" fill-rule="evenodd"></path>
                          <g id="SvgjsG1018" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                            <g id="SvgjsG1020" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1021" r="4" cx="0" cy="177.1311111111111" class="apexcharts-marker no-pointer-events wec1mb2n7" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle>
                              <circle id="SvgjsCircle1022" r="4" cx="130.09615384615387" cy="150.1111111111111" class="apexcharts-marker no-pointer-events wul88nprq" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1023" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1024" r="4" cx="216.8269230769231" cy="186.13777777777779" class="apexcharts-marker no-pointer-events wgj8j2a5x" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1025" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1026" r="4" cx="303.5576923076923" cy="117.08666666666667" class="apexcharts-marker no-pointer-events w6y8gh6kj" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1027" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1028" r="4" cx="390.28846153846155" cy="144.10666666666665" class="apexcharts-marker no-pointer-events wuokakaxl" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1029" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1030" r="4" cx="477.01923076923083" cy="24.01777777777778" class="apexcharts-marker no-pointer-events woi2uzwiu" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1031" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1032" r="4" cx="563.75" cy="102.07555555555555" class="apexcharts-marker no-pointer-events wg05rbo8j" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle>
                            </g>
                          </g>
                        </g>
                        <g id="SvgjsG1039" class="apexcharts-series" zIndex="1" seriesName="Revenue" data:longestSeries="true" rel="2" data:realIndex="1">
                          <path id="SvgjsPath1059" d="M0 237.17555555555555C45.533653846153854 237.17555555555555 84.56250000000001 174.12888888888887 130.09615384615387 174.12888888888887C160.4519230769231 174.12888888888887 186.47115384615387 135.1 216.8269230769231 135.1C247.18269230769232 135.1 273.2019230769231 174.12888888888887 303.5576923076923 174.12888888888887C333.91346153846155 174.12888888888887 359.9326923076923 168.12444444444444 390.28846153846155 168.12444444444444C420.6442307692308 168.12444444444444 446.6634615384616 114.08444444444444 477.01923076923083 114.08444444444444C507.37500000000006 114.08444444444444 533.3942307692308 147.10888888888888 563.75 147.10888888888888C563.75 147.10888888888888 563.75 147.10888888888888 563.75 270.2L0 270.2C0 270.2 0 237.17555555555555 0 237.17555555555555 " fill="url(#SvgjsLinearGradient1055)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskbw7jluik)" pathTo="M 0 237.17555555555555C 45.533653846153854 237.17555555555555 84.56250000000001 174.12888888888887 130.09615384615387 174.12888888888887C 160.4519230769231 174.12888888888887 186.47115384615387 135.1 216.8269230769231 135.1C 247.18269230769232 135.1 273.2019230769231 174.12888888888887 303.5576923076923 174.12888888888887C 333.91346153846155 174.12888888888887 359.9326923076923 168.12444444444444 390.28846153846155 168.12444444444444C 420.6442307692308 168.12444444444444 446.6634615384616 114.08444444444444 477.01923076923083 114.08444444444444C 507.37500000000006 114.08444444444444 533.3942307692308 147.10888888888888 563.75 147.10888888888888C 563.75 147.10888888888888 563.75 147.10888888888888 563.75 270.2 L 0 270.2z" pathFrom="M 0 270.2 L 0 270.2 L 130.09615384615387 270.2 L 216.8269230769231 270.2 L 303.5576923076923 270.2 L 390.28846153846155 270.2 L 477.01923076923083 270.2 L 563.75 270.2 L 0 270.2"></path>
                          <path id="SvgjsPath1060" d="M0 237.17555555555555C45.533653846153854 237.17555555555555 84.56250000000001 174.12888888888887 130.09615384615387 174.12888888888887C160.4519230769231 174.12888888888887 186.47115384615387 135.1 216.8269230769231 135.1C247.18269230769232 135.1 273.2019230769231 174.12888888888887 303.5576923076923 174.12888888888887C333.91346153846155 174.12888888888887 359.9326923076923 168.12444444444444 390.28846153846155 168.12444444444444C420.6442307692308 168.12444444444444 446.6634615384616 114.08444444444444 477.01923076923083 114.08444444444444C507.37500000000006 114.08444444444444 533.3942307692308 147.10888888888888 563.75 147.10888888888888C563.75 147.10888888888888 563.75 147.10888888888888 563.75 147.10888888888888 " fill="none" fill-opacity="1" stroke="#2eca6a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskbw7jluik)" pathTo="M 0 237.17555555555555C 45.533653846153854 237.17555555555555 84.56250000000001 174.12888888888887 130.09615384615387 174.12888888888887C 160.4519230769231 174.12888888888887 186.47115384615387 135.1 216.8269230769231 135.1C 247.18269230769232 135.1 273.2019230769231 174.12888888888887 303.5576923076923 174.12888888888887C 333.91346153846155 174.12888888888887 359.9326923076923 168.12444444444444 390.28846153846155 168.12444444444444C 420.6442307692308 168.12444444444444 446.6634615384616 114.08444444444444 477.01923076923083 114.08444444444444C 507.37500000000006 114.08444444444444 533.3942307692308 147.10888888888888 563.75 147.10888888888888" pathFrom="M 0 270.2 L 0 270.2 L 130.09615384615387 270.2 L 216.8269230769231 270.2 L 303.5576923076923 270.2 L 390.28846153846155 270.2 L 477.01923076923083 270.2 L 563.75 270.2" fill-rule="evenodd"></path>
                          <g id="SvgjsG1040" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1">
                            <g id="SvgjsG1042" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1043" r="4" cx="0" cy="237.17555555555555" class="apexcharts-marker no-pointer-events wxvlm9y8j" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle>
                              <circle id="SvgjsCircle1044" r="4" cx="130.09615384615387" cy="174.12888888888887" class="apexcharts-marker no-pointer-events wp40wesxul" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1045" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1046" r="4" cx="216.8269230769231" cy="135.1" class="apexcharts-marker no-pointer-events wfngw0wok" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1047" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1048" r="4" cx="303.5576923076923" cy="174.12888888888887" class="apexcharts-marker no-pointer-events wlgrqreh0h" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1049" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1050" r="4" cx="390.28846153846155" cy="168.12444444444444" class="apexcharts-marker no-pointer-events welkjmmw3" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1051" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1052" r="4" cx="477.01923076923083" cy="114.08444444444444" class="apexcharts-marker no-pointer-events wdfyff30c" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1053" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1054" r="4" cx="563.75" cy="147.10888888888888" class="apexcharts-marker no-pointer-events wt3jhtanli" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle>
                            </g>
                          </g>
                        </g>
                        <g id="SvgjsG1061" class="apexcharts-series" zIndex="2" seriesName="Customers" data:longestSeries="true" rel="3" data:realIndex="2">
                          <path id="SvgjsPath1081" d="M0 225.16666666666666C45.533653846153854 225.16666666666666 84.56250000000001 237.17555555555555 130.09615384615387 237.17555555555555C160.4519230769231 237.17555555555555 186.47115384615387 174.12888888888887 216.8269230769231 174.12888888888887C247.18269230769232 174.12888888888887 273.2019230769231 216.16 303.5576923076923 216.16C333.91346153846155 216.16 359.9326923076923 243.17999999999998 390.28846153846155 243.17999999999998C420.6442307692308 243.17999999999998 446.6634615384616 198.14666666666665 477.01923076923083 198.14666666666665C507.37500000000006 198.14666666666665 533.3942307692308 237.17555555555555 563.75 237.17555555555555C563.75 237.17555555555555 563.75 237.17555555555555 563.75 270.2L0 270.2C0 270.2 0 225.16666666666666 0 225.16666666666666 " fill="url(#SvgjsLinearGradient1077)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskbw7jluik)" pathTo="M 0 225.16666666666666C 45.533653846153854 225.16666666666666 84.56250000000001 237.17555555555555 130.09615384615387 237.17555555555555C 160.4519230769231 237.17555555555555 186.47115384615387 174.12888888888887 216.8269230769231 174.12888888888887C 247.18269230769232 174.12888888888887 273.2019230769231 216.16 303.5576923076923 216.16C 333.91346153846155 216.16 359.9326923076923 243.17999999999998 390.28846153846155 243.17999999999998C 420.6442307692308 243.17999999999998 446.6634615384616 198.14666666666665 477.01923076923083 198.14666666666665C 507.37500000000006 198.14666666666665 533.3942307692308 237.17555555555555 563.75 237.17555555555555C 563.75 237.17555555555555 563.75 237.17555555555555 563.75 270.2 L 0 270.2z" pathFrom="M 0 270.2 L 0 270.2 L 130.09615384615387 270.2 L 216.8269230769231 270.2 L 303.5576923076923 270.2 L 390.28846153846155 270.2 L 477.01923076923083 270.2 L 563.75 270.2 L 0 270.2"></path>
                          <path id="SvgjsPath1082" d="M0 225.16666666666666C45.533653846153854 225.16666666666666 84.56250000000001 237.17555555555555 130.09615384615387 237.17555555555555C160.4519230769231 237.17555555555555 186.47115384615387 174.12888888888887 216.8269230769231 174.12888888888887C247.18269230769232 174.12888888888887 273.2019230769231 216.16 303.5576923076923 216.16C333.91346153846155 216.16 359.9326923076923 243.17999999999998 390.28846153846155 243.17999999999998C420.6442307692308 243.17999999999998 446.6634615384616 198.14666666666665 477.01923076923083 198.14666666666665C507.37500000000006 198.14666666666665 533.3942307692308 237.17555555555555 563.75 237.17555555555555C563.75 237.17555555555555 563.75 237.17555555555555 563.75 237.17555555555555 " fill="none" fill-opacity="1" stroke="#ff771d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskbw7jluik)" pathTo="M 0 225.16666666666666C 45.533653846153854 225.16666666666666 84.56250000000001 237.17555555555555 130.09615384615387 237.17555555555555C 160.4519230769231 237.17555555555555 186.47115384615387 174.12888888888887 216.8269230769231 174.12888888888887C 247.18269230769232 174.12888888888887 273.2019230769231 216.16 303.5576923076923 216.16C 333.91346153846155 216.16 359.9326923076923 243.17999999999998 390.28846153846155 243.17999999999998C 420.6442307692308 243.17999999999998 446.6634615384616 198.14666666666665 477.01923076923083 198.14666666666665C 507.37500000000006 198.14666666666665 533.3942307692308 237.17555555555555 563.75 237.17555555555555" pathFrom="M 0 270.2 L 0 270.2 L 130.09615384615387 270.2 L 216.8269230769231 270.2 L 303.5576923076923 270.2 L 390.28846153846155 270.2 L 477.01923076923083 270.2 L 563.75 270.2" fill-rule="evenodd"></path>
                          <g id="SvgjsG1062" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="2">
                            <g id="SvgjsG1064" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1065" r="4" cx="0" cy="225.16666666666666" class="apexcharts-marker no-pointer-events w7g5hj4zv" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="4"></circle>
                              <circle id="SvgjsCircle1066" r="4" cx="130.09615384615387" cy="237.17555555555555" class="apexcharts-marker no-pointer-events wd23lky13" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1067" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1068" r="4" cx="216.8269230769231" cy="174.12888888888887" class="apexcharts-marker no-pointer-events wwmuy1nlg" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1069" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1070" r="4" cx="303.5576923076923" cy="216.16" class="apexcharts-marker no-pointer-events w9p0ovic7" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1071" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1072" r="4" cx="390.28846153846155" cy="243.17999999999998" class="apexcharts-marker no-pointer-events w4sg9jzz6" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1073" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1074" r="4" cx="477.01923076923083" cy="198.14666666666665" class="apexcharts-marker no-pointer-events w6dpr7621" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="4"></circle>
                            </g>
                            <g id="SvgjsG1075" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskbw7jluik)">
                              <circle id="SvgjsCircle1076" r="4" cx="563.75" cy="237.17555555555555" class="apexcharts-marker no-pointer-events wkii6qez5" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="2" default-marker-size="4"></circle>
                            </g>
                          </g>
                        </g>
                        <g id="SvgjsG1019" class="apexcharts-datalabels" data:realIndex="0"></g>
                        <g id="SvgjsG1041" class="apexcharts-datalabels" data:realIndex="1"></g>
                        <g id="SvgjsG1063" class="apexcharts-datalabels" data:realIndex="2"></g>
                      </g>
                      <line id="SvgjsLine1106" x1="0" y1="0" x2="563.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                      <line id="SvgjsLine1107" x1="0" y1="0" x2="563.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                      <g id="SvgjsG1108" class="apexcharts-xaxis" transform="translate(0, 0)">
                        <g id="SvgjsG1109" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1111" font-family="Helvetica, Arial, sans-serif" x="0" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1112">00:00</tspan>
                            <title>00:00</title>
                          </text><text id="SvgjsText1114" font-family="Helvetica, Arial, sans-serif" x="86.73076923076924" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1115">01:00</tspan>
                            <title>01:00</title>
                          </text><text id="SvgjsText1117" font-family="Helvetica, Arial, sans-serif" x="173.46153846153848" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1118">02:00</tspan>
                            <title>02:00</title>
                          </text><text id="SvgjsText1120" font-family="Helvetica, Arial, sans-serif" x="260.19230769230774" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1121">03:00</tspan>
                            <title>03:00</title>
                          </text><text id="SvgjsText1123" font-family="Helvetica, Arial, sans-serif" x="346.92307692307696" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1124">04:00</tspan>
                            <title>04:00</title>
                          </text><text id="SvgjsText1126" font-family="Helvetica, Arial, sans-serif" x="433.6538461538462" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1127">05:00</tspan>
                            <title>05:00</title>
                          </text><text id="SvgjsText1129" font-family="Helvetica, Arial, sans-serif" x="520.3846153846155" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1130">06:00</tspan>
                            <title>06:00</title>
                          </text></g>
                      </g>
                      <g id="SvgjsG1164" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                      <g id="SvgjsG1165" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                      <g id="SvgjsG1166" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                      <rect id="SvgjsRect1167" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                      <rect id="SvgjsRect1168" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                    </g>
                  </svg>
                  <div class="apexcharts-tooltip apexcharts-theme-light">
                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 84, 241);"></span>
                      <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>
                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 202, 106);"></span>
                      <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>
                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 119, 29);"></span>
                      <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                  </div>
                  <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                    <div class="apexcharts-yaxistooltip-text"></div>
                  </div>
                </div>
              </div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Revenue',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Customers',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Sales <span>| Today</span></h5>

              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top">
                  <div class="datatable-dropdown">
                    <label>
                      <select class="datatable-selector" name="per-page">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="-1">All</option>
                      </select> entries per page
                    </label>
                  </div>
                  <div class="datatable-search">
                    <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table">
                  </div>
                </div>
                <div class="datatable-container">
                  <table class="table table-borderless datatable datatable-table">
                    <thead>
                      <tr>
                        <th scope="col" data-sortable="true" style="width: 10.749185667752444%;"><button class="datatable-sorter">#</button></th>
                        <th scope="col" data-sortable="true" style="width: 23.452768729641694%;"><button class="datatable-sorter">Customer</button></th>
                        <th scope="col" data-sortable="true" style="width: 39.25081433224756%;"><button class="datatable-sorter">Product</button></th>
                        <th scope="col" data-sortable="true" style="width: 11.726384364820847%;"><button class="datatable-sorter">Price</button></th>
                        <th scope="col" data-sortable="true" class="red" style="width: 14.82084690553746%;"><button class="datatable-sorter">Status</button></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr data-index="0">
                        <td scope="row"><a href="#">#2457</a></td>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td class="green"><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr data-index="1">
                        <td scope="row"><a href="#">#2147</a></td>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td class="green"><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr data-index="2">
                        <td scope="row"><a href="#">#2049</a></td>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td class="green"><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr data-index="3">
                        <td scope="row"><a href="#">#2644</a></td>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td class="green"><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr data-index="4">
                        <td scope="row"><a href="#">#2644</a></td>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td class="green"><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="datatable-bottom">
                  <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                  <nav class="datatable-pagination">
                    <ul class="datatable-pagination-list"></ul>
                  </nav>
                </div>
              </div>

            </div>

          </div>
        </div><!-- End Recent Sales -->

        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Top Selling <span>| Today</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Preview</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sold</th>
                    <th scope="col">Revenue</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                    <td>$64</td>
                    <td class="fw-bold">124</td>
                    <td>$5,828</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                    <td>$46</td>
                    <td class="fw-bold">98</td>
                    <td>$4,508</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                    <td>$59</td>
                    <td class="fw-bold">74</td>
                    <td>$4,366</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                    <td>$32</td>
                    <td class="fw-bold">63</td>
                    <td>$2,016</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                    <td>$79</td>
                    <td class="fw-bold">41</td>
                    <td>$3,239</td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Top Selling -->

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Recent Activity <span>| Today</span></h5>

          <div class="activity">

            <div class="activity-item d-flex">
              <div class="activite-label">32 min</div>
              <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
              <div class="activity-content">
                Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">56 min</div>
              <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
              <div class="activity-content">
                Voluptatem blanditiis blanditiis eveniet
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">2 hrs</div>
              <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
              <div class="activity-content">
                Voluptates corrupti molestias voluptatem
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">1 day</div>
              <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
              <div class="activity-content">
                Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">2 days</div>
              <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
              <div class="activity-content">
                Est sit eum reiciendis exercitationem
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">4 weeks</div>
              <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
              <div class="activity-content">
                Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
              </div>
            </div><!-- End activity item-->

          </div>

        </div>
      </div><!-- End Recent Activity -->

      <!-- Budget Report -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Budget Report <span>| This Month</span></h5>

          <div id="budgetChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" class="echart" _echarts_instance_="ec_1718777245879">
            <div style="position: relative; width: 274px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="274" height="400" style="position: absolute; left: 0px; top: 0px; width: 274px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
          </div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                legend: {
                  data: ['Allocated Budget', 'Actual Spending']
                },
                radar: {
                  // shape: 'circle',
                  indicator: [{
                      name: 'Sales',
                      max: 6500
                    },
                    {
                      name: 'Administration',
                      max: 16000
                    },
                    {
                      name: 'Information Technology',
                      max: 30000
                    },
                    {
                      name: 'Customer Support',
                      max: 38000
                    },
                    {
                      name: 'Development',
                      max: 52000
                    },
                    {
                      name: 'Marketing',
                      max: 25000
                    }
                  ]
                },
                series: [{
                  name: 'Budget vs spending',
                  type: 'radar',
                  data: [{
                      value: [4200, 3000, 20000, 35000, 50000, 18000],
                      name: 'Allocated Budget'
                    },
                    {
                      value: [5000, 14000, 28000, 26000, 42000, 21000],
                      name: 'Actual Spending'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Budget Report -->

      <!-- Website Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Website Traffic <span>| Today</span></h5>

          <div id="trafficChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" class="echart" _echarts_instance_="ec_1718777245880">
            <div style="position: relative; width: 274px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="274" height="400" style="position: absolute; left: 0px; top: 0px; width: 274px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
            <div class=""></div>
          </div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [{
                  name: 'Access From',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: 1048,
                      name: 'Search Engine'
                    },
                    {
                      value: 735,
                      name: 'Direct'
                    },
                    {
                      value: 580,
                      name: 'Email'
                    },
                    {
                      value: 484,
                      name: 'Union Ads'
                    },
                    {
                      value: 300,
                      name: 'Video Ads'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Website Traffic -->

      <!-- News & Updates Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

          <div class="news">
            <div class="post-item clearfix">
              <img src="assets/img/news-1.jpg" alt="">
              <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-2.jpg" alt="">
              <h4><a href="#">Quidem autem et impedit</a></h4>
              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-3.jpg" alt="">
              <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
              <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-4.jpg" alt="">
              <h4><a href="#">Laborum corporis quo dara net para</a></h4>
              <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-5.jpg" alt="">
              <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
              <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
            </div>

          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End News & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>
<?= $this->endSection() ?>