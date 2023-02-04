@extends('frontend.master')
@section('content')
    <!------ DashBoard -------->
    <div id="dashboard">
        <div class="container" id="dash_back">
          <div class="row">
            <div class="col-12">
              <div class="dash_title">
                <h1>Enrolled Courses</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form_btn_top">
                <ul>
                  <li class="member_active" id="all1">All Courses</li>
                  <li id="active1">Active Courses</li>
                  <li id="complete1">Completed Courses</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row" id="all">
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row" id="active" style="display: none">
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row" id="complete" style="display: none">
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mb-4">
              <div class="courses">
                <div class="course_img">
                  <a href="course_details.html">
                    <img src="./images/courses/course-1.jpg" alt="course-1" />
                  </a>
                  <div class="offer percent">
                    <p>FEATURED</p>
                  </div>
                </div>
                <div class="course_title">
                  <a href="course_details.html">
                    <h4>
                      Combo Offer!! (Emotional Selfcare & Positive Parenting)
                    </h4>
                  </a>
                </div>
                <div class="course_sub pb-4">
                  <h5>
                    🌟🌟🌟 লাইফস্প্রিংয়ের বিশেষ এই Combo Offer সম্পর্কে যেকোনো
                    তথ্য জানতে অথবা রেজিস্ট্রেশন করতে এখনই যোগাযোগ করুন!
                  </h5>
                </div>
                <!-- <div class="course_lvl">
                  <p><i class="fa-solid fa-sliders"></i> All Levels</p>
                </div>
                <div class="course_tk">
                  <h5><span>৳ 5,000.00</span>.00</h5>
                </div>
                <div class="course_btn">
                  <button>Add to cart</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!------End DashBoard -------->
@endsection
