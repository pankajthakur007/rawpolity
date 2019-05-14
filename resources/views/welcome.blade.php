@extends('layouts.home')

@section('content')
<div class="politicans_all">
  <div class="container">
    <div class="heding_sec d-flex justify-content-between align-items-center">
      <h3> Top Rated Politicians </h3> 
      <a href="#" class="view-all"> View All </a>
    </div>
    <div class="row">
      @foreach($topRated as $key => $value)
       <div class="col-md-4 col-6 pol_col">
          <div class="card mb-4">
            <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" style="min-height: 230px;">
            <div class="card-body">
              <div class="pol_head d-flex justify-content-between align-items-center" style="height: 30px;">
                <h5> {{str_limit($value->name, 17, '..')}}  </h5>
                <span> <img src="public/images/party_logo_1.png" alt="party logo"> </span>
              </div>
              <p class="blue_color">{{$value->member_type}}</p>
              <p> {{$value->constituency}} <!-- <br> Uttar Pradesh -->  </p>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn" id="btn1"> Compare <i class="fas fa-plus"></i> </a> </div>           
              <div class="public_rating d-flex justify-content-between align-items-center">
                 <h6> Public Rating </h6>
                 <span> {{$value->total_rating}}% </span>
              </div>              
              <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="{{$value->total_rating}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="rating_sec">
                <div class="rat_hed"> Raw Rating </div>
                <div class="rat_score text-right"> {{$value->total_raw_rating}}/10 </div>
                <?php $unstar = 10-$value->total_raw_rating; ?>
                @for ($i=0; $i < $value->total_raw_rating; $i++) 
                  <span class="fa fa-star checked"></span>
                @endfor

                @for ($i=0; $i < $unstar; $i++) 
                   <span class="fa fa-star"></span>
                @endfor
              </div>              
            </div>
          </div>
        </div>
        @endforeach
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

        @foreach($topPublicRated as $key => $value)
          <div class="col_news mb-3">
            <div class="row">
             <div class="col-md-3">
               <div class="col_news_img">
                 <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" alt="news" style="min-height: 130px">
               </div>
             </div>
             <div class="col-md-5">
               <div class="col_news_cont">
                 <h6 class="font_17"> {{$value->name}} </h6>
                 <div class="d-flex justify-content-between">
                    <div class="cont_news_lft">
                      <p class="blue_color"> {{$value->member_type}} </p>
                      <div class="txt"> {{$value->constituency}}</div>
                    </div>    
                    <div class="cont_news_img">
                      <img src="public/images/party_flag-1.jpg">
                    </div>                  
                 </div>
               </div>
             </div>
             <div class="col-md-4">
                <div class="public_rating d-flex justify-content-between align-items-center">
                   <h6> </h6>
                   <span> {{$value->total_rating}}% </span>
                </div>
                <div class="progress">
                   <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="{{$value->total_rating}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
             </div>
            </div>
          </div>
        @endforeach 
    </div>
    </div>
      <div class="col-lg-6 col-sm-12 col-12">
        <div class="heding_sec d-flex justify-content-between align-items-center">
          <h3> Top Rated MPs in Raw ratings </h3> 
          <a href="#" class="view-all"> View All </a>
        </div>
        <div class="outer_nws">

          @foreach($topRawRated as $key => $value)
        <div class="col_news mb-3">
          <div class="row">
           <div class="col-md-3">
             <div class="col_news_img">
               <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" alt="news" style="min-height: 130px">
             </div>
           </div>
           <div class="col-md-5">
             <div class="col_news_cont">
               <h6 class="font_17">  {{$value->name}}  </h6>
               <div class="d-flex justify-content-between">
                  <div class="cont_news_lft">
                    <p class="blue_color"> {{$value->member_type}} </p>
                    <div class="txt"> {{$value->constituency}} </div>
                  </div>    
                  <div class="cont_news_img">
                    <img src="public/images/party_flag-4.png">
                  </div>                  
               </div>
             </div>
           </div>
           <div class="col-md-4">
              <div class="rating_sec text-center">
                <div class="rat_score"> {{$value->total_raw_rating}}/10 </div>
                <?php $unstar = 10-$value->total_raw_rating; ?>
                @for ($i=0; $i < $value->total_raw_rating; $i++) 
                  <span class="fa fa-star checked"></span>
                @endfor

                @for ($i=0; $i < $unstar; $i++) 
                   <span class="fa fa-star"></span>
                @endfor
              </div>
              <div class="compare_now"> <a href="#" data-toggle="modal" data-target="#compare_outer" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
           </div>
          </div>
        </div>
        @endforeach
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
      @foreach($topRated as $key => $value)
        <div class="col-md-3 col-6 text-center">
          <div class="top_ten_imgcol"> <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" style="min-height: 300px;"> </div>
          <div class="top_ten_cont"> <p> <a href="#"> Top Rated Politicians in 2018 </a> </p> </div>
        </div>
        <?php break; ?>
      @endforeach

      @foreach($corrupt_rated as $key => $value)
        <div class="col-md-3 col-6 text-center">
          <div class="top_ten_imgcol"> <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" style="min-height: 300px;"> </div>
          <div class="top_ten_cont"> <p> <a href="#"> Top corrupt politicians in 2018 </a> </p> </div>
        </div>
      @endforeach


      @foreach($fraud_rated as $key => $value)
        <div class="col-md-3 col-6 text-center">
          <div class="top_ten_imgcol"> <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" style="min-height: 300px;"> </div>
          <div class="top_ten_cont"> <p> <a href="#"> Top fraud politicians in 2018 </a> </p> </div>
        </div>
      @endforeach

      @foreach($topPublicRated as $key => $value)
        <div class="col-md-3 col-6 text-center">
          <div class="top_ten_imgcol"> <img src="{{url('storage/img')}}/{{$value->image}}" class="d-block w-100" style="min-height: 300px;"> </div>
          <div class="top_ten_cont"> <p> <a href="#"> Top Public Rated politicians in 2018 </a> </p> </div>
        </div>
        <?php break; ?>
      @endforeach

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
              <h4 class="text-center"> Assembly </h4>
            </div>
            <div class="col-sm-12 col-md-9">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <select id="state" name="state" class="form-control"><option value="0">Select State</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="jammu and kashmir">jammu and kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Odisha">Odisha</option><option value="Puducherry">Puducherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option></select>
                    </div>
                    <div class="form-group col-md-4">
                      
                     <select id="constituency" name="constituency" class="form-control"><option value="0">Select Constituency</option><option value="amalapuram">amalapuram</option><option value="anakapalli">anakapalli</option><option value="anantapur">anantapur</option><option value="araku">araku</option><option value="bapatla">bapatla</option><option value="chittoor">chittoor</option><option value="eluru">eluru</option><option value="guntur">guntur</option><option value="hindupur">hindupur</option><option value="kadapa">kadapa</option><option value="kakinada">kakinada</option><option value="kurnool">kurnool</option><option value="machilipatnam">machilipatnam</option><option value="nandyal">nandyal</option><option value="narasaraopet">narasaraopet</option><option value="narsapuram">narsapuram</option><option value="nellore">nellore</option><option value="ongole">ongole</option><option value="rajahmundry">rajahmundry</option><option value="rajampet">rajampet</option><option value="srikakulam">srikakulam</option><option value="tirupati">tirupati</option><option value="vijayawada">vijayawada</option><option value="visakhapatnam">visakhapatnam</option><option value="vizianagaram">vizianagaram</option></select>

                    </div>
                    <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Name (Optional)">
                     
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
              <h4 class="text-center"> Parliamentary </h4>
            </div>
            <div class="col-sm-12 col-md-9">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <select id="state" name="state" class="form-control"><option value="0">Select State</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Chandigarh">Chandigarh</option><option value="Dadra And Nagar Haveli">Dadra And Nagar Haveli </option><option value="Daman And Diu">Daman And Diu </option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu And Kashmir">Jammu And Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Punjab">Punjab</option><option value="Puducherry">Puducherry</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand </option><option value="West Bengal">West Bengal</option><option value="Telangana">Telangana</option></select>
                    </div>
                    <div class="form-group col-md-4">
                      
                      <select id="constituency" name="constituency" class="form-control"><option value="0">Select Constituency</option><option value="amalapuram">amalapuram</option><option value="anakapalli">anakapalli</option><option value="anantapur">anantapur</option><option value="araku">araku</option><option value="bapatla">bapatla</option><option value="chittoor">chittoor</option><option value="eluru">eluru</option><option value="guntur">guntur</option><option value="hindupur">hindupur</option><option value="kadapa">kadapa</option><option value="kakinada">kakinada</option><option value="kurnool">kurnool</option><option value="machilipatnam">machilipatnam</option><option value="nandyal">nandyal</option><option value="narasaraopet">narasaraopet</option><option value="narsapuram">narsapuram</option><option value="nellore">nellore</option><option value="ongole">ongole</option><option value="rajahmundry">rajahmundry</option><option value="rajampet">rajampet</option><option value="srikakulam">srikakulam</option><option value="tirupati">tirupati</option><option value="vijayawada">vijayawada</option><option value="visakhapatnam">visakhapatnam</option><option value="vizianagaram">vizianagaram</option></select>

                    </div>
                    <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Name (Optional)">
                      
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
        @foreach($topArtical as $key => $value)
        <div class="tranding_art mb-4">
           <div class="artcl_img"> 
              <img src="{{url('storage')}}/{{$value->image_url}}" class="d-block w-100">
           </div>
           <div class="artcl_cont"> 
             <div class="date_month"> {{ $value->created_at }} </div>
             <h5> {{$value->title}} </h5>
             <div class="text-right read_more"> <a href="{{url('artical')}}/{{$value->slug}}"> Read More </a> </div>
           </div>
        </div>
        <?php break; ?>
        @endforeach

      </div>
      <div class="col-lg-7 col-sm-12 col-12">
        <div class="article_rgt">
          @foreach($topArtical as $key => $value)
            @if(($key > 0)&&($key < 4))
            <div class="col_artcl">
              <div class="artcl_img"> 
                <img src="{{url('storage')}}/{{$value->image_url}}" class="d-block w-100" style="height: 120px">
              </div>
              <div class="artcl_cont"> 
               <div class="date_month"> {{ $value->created_at }} </div>
               <h5> {{$value->title}} </h5>
               <div class="text-right read_more"> <a href="{{url('artical')}}/{{$value->slug}}"> Read More </a> </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>
        <div class="article_rgt">

          @foreach($topArtical as $key => $value)
            @if(($key > 4)&&($key < 6))
              <div class="col_artcl">
                <div class="artcl_img"> 
                  <img src="{{url('storage')}}/{{$value->image_url}}" class="d-block w-100" style="height: 120px">
                </div>
                <div class="artcl_cont"> 
                 <div class="date_month"> {{ $value->created_at }} </div>
                 <h5> {{$value->title}}  </h5>
                 <div class="text-right read_more"> <a href="{{url('artical')}}/{{$value->slug}}"> Read More </a> </div>
                </div>
              </div>
            @endif
          @endforeach
         
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
        <a href="#"> <img src="public/images/meet-1.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="public/images/meet-2.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="public/images/meet-3.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="public/images/meet-4.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="public/images/meet-5.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
      <div class="col-md-2 col-6 mb-4">
        <a href="#"> <img src="public/images/meet-6.jpg" class="d-block w-100" alt="meet"> </a>
      </div>
    </div>
  </div>
</div> -->




@endsection
