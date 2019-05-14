@extends('layouts.home')

@section('content')
<div class="politicans_all">
  <div class="container">
    <div class="heding_sec d-flex justify-content-between align-items-center">
      <h3> Top Rated Politicians </h3> 
      <a href="#" class="view-all"> View All </a>
    </div>
    <div class="row">
       <div class="col-md-4 col-6 pol_col">
          <div class="card mb-4">
            <img src="images/pol-1.jpg" class="d-block w-100">
            <div class="card-body">
              <div class="pol_head d-flex justify-content-between align-items-center">
                <h5> Adhalrao Shivaji Dattatrey </h5>
                <span> <img src="images/party_logo_1.png" alt="party logo"> </span>
              </div>
              <p class="blue_color">Member of Parliament</p>
              <p> Shirur <br> Uttar Pradesh  </p>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn" id="btn1"> Compare <i class="fas fa-plus"></i> </a> </div>           
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> Public Rating </h6>
                 <span> 100% </span>
              </div>              
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="rating_sec">
                <div class="rat_hed"> Raw Rating </div>
                <div class="rat_score text-right"> 9/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 pol_col">
          <div class="card mb-4">
            <img src="images/pol-2.jpg" class="d-block w-100">
            <div class="card-body">
              <div class="pol_head d-flex justify-content-between align-items-center">
                <h5> Arun Narang </h5>
                <span> <img src="images/party_logo_2.png" alt="party logo"> </span>
              </div>
              <p class="blue_color">Member of Legislative Assembly</p>
              <p> Abohar <br> Punjab </p>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> Public Rating </h6>
                 <span> 97.9% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: 97.9%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="rating_sec">
                <div class="rat_hed"> Raw Rating </div>
                <div class="rat_score text-right"> 6/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 pol_col">
          <div class="card mb-4">
            <img src="images/pol-3.jpg" class="d-block w-100">
            <div class="card-body">
              <div class="pol_head d-flex justify-content-between align-items-center">
                <h5> V. Kashiho Sangtam </h5>
                <span> <img src="images/party_logo_2.png" alt="party logo"> </span>
              </div>
              <p class="blue_color">Member of Legislative Assembly</p>            
              <p> Seyochung Sitimi <br> Nagaland </p>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> Public Rating </h6>
                 <span> 97% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:97%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="rating_sec">
                <div class="rat_hed"> Raw Rating </div>
                <div class="rat_score text-right"> 6/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 pol_col">
          <div class="card mb-4">
            <img src="images/pol-4.jpg" class="d-block w-100">
            <div class="card-body">
              <div class="pol_head d-flex justify-content-between align-items-center">
                <h5> Y. S. Avinash Reddy </h5>
                <span> <img src="images/party_logo_3.png" alt="party logo"> </span>
              </div>
              <p class="blue_color">Member of Parliament</p>
              <p> Kadapa <br> Andhra Pradesh </p>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> Public Rating </h6>
                 <span> 88.6% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: 88.6%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="rating_sec">
                <div class="rat_hed"> Raw Rating </div>
                <div class="rat_score text-right"> 6/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 pol_col">
          <div class="card mb-4">
            <img src="images/pol-5.jpg" class="d-block w-100">
            <div class="card-body">
              <div class="pol_head d-flex justify-content-between align-items-center">
                <h5> Yogi Adityanath </h5>
                <span> <img src="images/party_logo_2.png" alt="party logo"> </span>
              </div>
              <p class="blue_color">Member of Legislative Council</p>
              <p> Uttar Pradesh <br> Raw Rating </p>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> Public Rating </h6>
                 <span> 87.8% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:87.8%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="rating_sec">
                <div class="rat_hed"> Raw Rating </div>
                <div class="rat_score text-right"> 8/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>              
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="news_feeds">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-6 col-sm-12 col-12">
        <div class="heding_sec d-flex justify-content-between align-items-center">
          <h3> Top Rated MPs in Public Ratings </h3> 
          <a href="#" class="view-all"> View All </a>
        </div>
        <div class="outer_nws">
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-1.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17"> Adhalrao Shivaji Dattatrey </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Shirur <br> Maharashtra </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-1.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> </h6>
                 <span> 100% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-2.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17"> Y. S. Avinash Reddy </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Kadapa <br> Andhra Pradesh </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-1.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> </h6>
                 <span> 86.6% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:86.6%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-3.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Dr. Mamtaz Sanghamita  </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Bardhaman-Durgapur <br> West Bengal</div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-2.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> </h6>
                 <span> 86.6% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:86.6%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-4.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Asaduddin Owaisi </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Hyderabad <br> Telangana </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-3.png">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> </h6>
                 <span> 60.87% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:60.87%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-5.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Narendra Modi  </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Varanasi <br> Uttar Pradesh</div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-4.png">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> </h6>
                 <span> 100% </span>
              </div>
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
           </div>
          </div>
        </div>
    </div>
    </div>
      <div class="col-lg-6 col-sm-12 col-12">
        <div class="heding_sec d-flex justify-content-between align-items-center">
          <h3> Top Rated MPs in Raw ratings </h3> 
          <a href="#" class="view-all"> View All </a>
        </div>
        <div class="outer_nws">
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-5.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Narendra Modi  </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Varanasi <br> Uttar Pradesh</div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-4.png">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="rating_sec text-center">
                <div class="rat_score"> 9/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-6.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Konda Vishweshwar Reddy  </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Chelvella <br> Telangana</div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-5.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="rating_sec text-center">
                <div class="rat_score"> 8/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-7.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Jayadev Galla </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Guntur <br> Andhra Pradesh </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-6.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="rating_sec text-center">
                <div class="rat_score"> 8/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-8.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Malyadri Sriram </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Bapatla <br> Andhra Pradesh </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-6.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="rating_sec text-center">
                <div class="rat_score"> 7/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
           </div>
          </div>
        </div>
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="images/news-9.jpg" class="d-block w-100" alt="news">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  Maganti aVenkateswara Rao </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> Member of Parliament </p>
                    <div class="txt"> Eluru <br> Andhra Pradesh </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="images/party_flag-6.jpg">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="rating_sec text-center">
                <div class="rat_score"> 7/10 </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
           </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="top_ten">
  <div class="container">
    <div class="heding_sec d-flex justify-content-between align-items-center">
        <h3> Political Top 10 </h3> 
    </div>
    <div class="row">
      <div class="col-md-3 col-6 text-center">
        <div class="top_ten_imgcol"> <img src="images/news-5.jpg" class="d-block w-100"> </div>
        <div class="top_ten_cont"> <p> <a href="#"> Top Rated Politicians in 2018 </a> </p> </div>
      </div>
      <div class="col-md-3 col-6 text-center">
        <div class="top_ten_imgcol"> <img src="images/news-4.jpg" class="d-block w-100"> </div>
        <div class="top_ten_cont"> <p> <a href="#"> Top corrupt politicians in 2018 </a> </p> </div>
      </div>
      <div class="col-md-3 col-6 text-center">
        <div class="top_ten_imgcol"> <img src="images/news-3.jpg" class="d-block w-100"> </div>
        <div class="top_ten_cont"> <p> <a href="#"> Top fraud politicians in 2018 </a> </p> </div>
      </div>
      <div class="col-md-3 col-6 text-center">
        <div class="top_ten_imgcol"> <img src="images/news-2.jpg" class="d-block w-100"> </div>
        <div class="top_ten_cont"> <p> <a href="#"> Top fraud politicians in 2018 </a> </p> </div>
      </div>
    </div>
    <!-- <ul>
      <li> <a href="#"> Top Rated Politicians in 2018 </a> </li>
      <li> <a href="#"> Top corrupt politicians in 2018 </a> </li>
      <li> <a href="#"> Top fraud politicians in 2018 </a> </li>      
    </ul> -->
  </div>
</div>

<div class="pol_sec">
  <div class="container">
    <div class="heding_sec d-flex justify-content-between align-items-center">
        <h3> Polls </h3> 
        <a href="#" class="view-all"> View All </a>
    </div>
    <div class="polls_view_two mb-3">
      <h4 class="pols_heding"> Who Will be the next Pm ? </h4>  
       <form>     
          <div class="row">
          <div class="col-md-6 col-lg-5 mb-4">
          <div class="form-row mb-4 align-items-center">
            <div class="col-md-12 col-12">            
              <label class="polls_container">
              <span class="pols_name"> <div class="pols_count"> 1 </div> Modi </span>
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>
            </div>
          </div>
          <div class="form-row mb-4 align-items-center">
            <div class="col-md-12 col-12">
              <label class="polls_container">
              <span class="pols_name"> <div class="pols_count"> 2 </div> Rahul </span>
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            </div>
          </div>
          <div class="public_rating d-flex justify-content-between align-items-center">
               <h6> Public Rating </h6>
               <span> 86.6% </span>
            </div>  
            <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width:86.6%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          <div class="pols_btn"> <button type="submit" class="btn btn-primary">Submit</button> </div>
          
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment Box</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Comment here.."></textarea>
            </div>          
          </div>
          </div>          
       </form>  
       
    </div>
  </div>
</div>

<div class="your_track">
  <div class="container">
    <div class="box_track">
      <h3 class="text-center"> Track your <span> CONSTITUENCY </span> </h3>
      <p class="text-center"> Pellentesque ut lectus ac nibh tempor vehicula eget a purus. Nullam placerat nibh ac imperdiet malesuada. Vestibulum ultricies .... </p>
      <div class="box_track_col">
        <div class="row  align-items-center">
            <div class="col-sm-12 col-md-3">
              <h4 class="text-center"> Upper House </h4>
            </div>
            <div class="col-sm-12 col-md-9">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Rajya Sabha">
                      <input class="form-control" type="text" placeholder="MLC">
                    </div>
                    <div class="form-group col-md-4">
                      <div class="arrow_input"> 
                         <input class="form-control" type="text" placeholder="Select Types">
                      </div>
                      <div class="arrow_input"> 
                         <input class="form-control" type="text" placeholder="Select Types">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Name List">
                      <input class="form-control" type="text" placeholder="Name List">
                    </div>
                    <div class="form-group col-md-12 text-right">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>                                  
              </form>
            </div>
        </div>
      </div>
      <div class="box_track_col">
        <div class="row  align-items-center">
            <div class="col-sm-12 col-md-3">
              <h4 class="text-center"> Lower House </h4>
            </div>
            <div class="col-sm-12 col-md-9">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Rajya Sabha">
                      <input class="form-control" type="text" placeholder="MLC">
                    </div>
                    <div class="form-group col-md-4">
                      <div class="arrow_input"> 
                         <input class="form-control" type="text" placeholder="Select Types">
                      </div>
                      <div class="arrow_input"> 
                         <input class="form-control" type="text" placeholder="Select Types">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Name List">
                      <input class="form-control" type="text" placeholder="Name List">
                    </div>
                    <div class="form-group col-md-12 text-right">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>          
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article_sec">
  <div class="container">
    <div class="heding_sec d-flex justify-content-between align-items-center">
        <h3> Trending Articles </h3> 
        <a href="#" class="view-all"> View All </a>
    </div>  
    <div class="row">
      <div class="col-lg-5 col-sm-12 col-12">
        <div class="tranding_art mb-4">
           <div class="artcl_img"> 
              <img src="images/article-1.jpg" class="d-block w-100">
           </div>
           <div class="artcl_cont"> 
             <div class="date_month"> 06/02/2018 </div>
             <h5> Prime Minister to launch Khelo India School Games in the Capital tomorrow </h5>
             <div class="text-right read_more"> <a href="#"> Read More </a> </div>
           </div>
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-12">
        <div class="article_rgt">
          <div class="col_artcl">
            <div class="artcl_img"> 
              <img src="images/article-2.jpg" class="d-block w-100">
            </div>
            <div class="artcl_cont"> 
             <div class="date_month"> 06/02/2018 </div>
             <h5> North East is at the heart of our Act East policy, says PM Modi at Advantage Assam Summit </h5>
             <div class="text-right read_more"> <a href="#"> Read More </a> </div>
            </div>
          </div>
          <div class="col_artcl">
            <div class="artcl_img"> 
              <img src="images/article-3.jpg" class="d-block w-100">
            </div>
            <div class="artcl_cont"> 
             <div class="date_month"> &nbsp; </div>
             <h5> PM congratulates team India on winning the Under-19 World Cup </h5>
             <div class="text-right read_more"> <a href="#"> Read More </a> </div>
            </div>
          </div>
        </div>
        <div class="article_rgt">
          <div class="col_artcl">
            <div class="artcl_img"> 
              <img src="images/article-2.jpg" class="d-block w-100">
            </div>
            <div class="artcl_cont"> 
             <div class="date_month"> 06/02/2018 </div>
             <h5> North East is at the heart of our Act East policy, says PM Modi at Advantage Assam Summit </h5>
             <div class="text-right read_more"> <a href="#"> Read More </a> </div>
            </div>
          </div>
          <div class="col_artcl">
            <div class="artcl_img"> 
              <img src="images/article-3.jpg" class="d-block w-100">
            </div>
            <div class="artcl_cont"> 
             <div class="date_month"> &nbsp; </div>
             <h5> PM congratulates team India on winning the Under-19 World Cup </h5>
             <div class="text-right read_more"> <a href="#"> Read More </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="meet_team">
  <div class="container">
    <div class="heding_sec d-flex justify-content-between align-items-center">
        <h3> Meet our team </h3>
    </div>
    <div class="row">
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="images/meet-1.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="images/meet-2.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="images/meet-3.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="images/meet-4.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="images/meet-5.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="images/meet-6.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
    </div>
  </div>
</div> -->




@endsection
