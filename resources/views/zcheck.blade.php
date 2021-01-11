<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/app.css" rel="stylesheet">
    <link href="./css/my.css" rel="stylesheet">
</head>
<body>

<div class="row">
  <h5 class="my-0 me-md-auto fw-normal col-6">Ans</h5>
  <nav class="my-2 my-md-0 me-md-3 col-6 text-right">
    <a class="p-2 text-dark" href="{{ route('homeD') }}">Home</a>
    <a class="p-2 text-dark" href="{{ route('aboutD') }}">About</a>
    <a class="p-2 text-dark" href="{{ route('contactD') }}">Contacts</a>
    <a class="p-2 text-dark" href="{{ route('contactD-data') }}">Сообщения</a>
 
  <!--
So we will have an animated background with 5 clouds moving across the screen.
Steps: 
1. create the clouds
2. Animate them to move across the screen
3. Stylize the clouds(can be done as step #2 also)
-->
    
    <div id="clouds">
    <div class="cloud x1"></div>
    <!-- Time for multiple clouds to dance around -->
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
</div>
<!-- Thats the markup! -->
<!-- That looks cool. We are done!! -->

 </nav>


<!--    Disregard --><a style="position: fixed; bottom: 10px; right: 10px;color:#CCC" href="https://plus.google.com/111052275277622928148?rel=me">Google+</a>
</div>



<br><br>

    <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="card-actions float-right">
                                        <a href="#" class="mr-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw align-middle"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                        </a>
                                        <div class="d-inline-block dropdown show">
                                            <a href="#" data-toggle="dropdown" data-display="static">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title mb-0">Calendar</h5>
                                </div>
                                <div class="card-body d-flex">
                                    <div class="align-self-center w-100">
                                        <div class="chart">
                                            <div id="datetimepicker-dashboard"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fas fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">December 2020</th><th class="next" data-action="next"><span class="fas fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="11/29/2020" class="day old weekend">29</td><td data-action="selectDay" data-day="11/30/2020" class="day old">30</td><td data-action="selectDay" data-day="12/01/2020" class="day">1</td><td data-action="selectDay" data-day="12/02/2020" class="day">2</td><td data-action="selectDay" data-day="12/03/2020" class="day">3</td><td data-action="selectDay" data-day="12/04/2020" class="day">4</td><td data-action="selectDay" data-day="12/05/2020" class="day weekend">5</td></tr><tr><td data-action="selectDay" data-day="12/06/2020" class="day weekend">6</td><td data-action="selectDay" data-day="12/07/2020" class="day">7</td><td data-action="selectDay" data-day="12/08/2020" class="day">8</td><td data-action="selectDay" data-day="12/09/2020" class="day">9</td><td data-action="selectDay" data-day="12/10/2020" class="day active">10</td><td data-action="selectDay" data-day="12/11/2020" class="day">11</td><td data-action="selectDay" data-day="12/12/2020" class="day weekend">12</td></tr><tr><td data-action="selectDay" data-day="12/13/2020" class="day weekend">13</td><td data-action="selectDay" data-day="12/14/2020" class="day">14</td><td data-action="selectDay" data-day="12/15/2020" class="day">15</td><td data-action="selectDay" data-day="12/16/2020" class="day">16</td><td data-action="selectDay" data-day="12/17/2020" class="day">17</td><td data-action="selectDay" data-day="12/18/2020" class="day">18</td><td data-action="selectDay" data-day="12/19/2020" class="day weekend">19</td></tr><tr><td data-action="selectDay" data-day="12/20/2020" class="day weekend">20</td><td data-action="selectDay" data-day="12/21/2020" class="day">21</td><td data-action="selectDay" data-day="12/22/2020" class="day">22</td><td data-action="selectDay" data-day="12/23/2020" class="day">23</td><td data-action="selectDay" data-day="12/24/2020" class="day">24</td><td data-action="selectDay" data-day="12/25/2020" class="day">25</td><td data-action="selectDay" data-day="12/26/2020" class="day weekend">26</td></tr><tr><td data-action="selectDay" data-day="12/27/2020" class="day weekend">27</td><td data-action="selectDay" data-day="12/28/2020" class="day">28</td><td data-action="selectDay" data-day="12/29/2020" class="day today">29</td><td data-action="selectDay" data-day="12/30/2020" class="day">30</td><td data-action="selectDay" data-day="12/31/2020" class="day">31</td><td data-action="selectDay" data-day="01/01/2021" class="day new">1</td><td data-action="selectDay" data-day="01/02/2021" class="day new weekend">2</td></tr><tr><td data-action="selectDay" data-day="01/03/2021" class="day new weekend">3</td><td data-action="selectDay" data-day="01/04/2021" class="day new">4</td><td data-action="selectDay" data-day="01/05/2021" class="day new">5</td><td data-action="selectDay" data-day="01/06/2021" class="day new">6</td><td data-action="selectDay" data-day="01/07/2021" class="day new">7</td><td data-action="selectDay" data-day="01/08/2021" class="day new">8</td><td data-action="selectDay" data-day="01/09/2021" class="day new weekend">9</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fas fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2020</th><th class="next" data-action="next"><span class="fas fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month active">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fas fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fas fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year active">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fas fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fas fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</body>
</html>