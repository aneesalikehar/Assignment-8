@charset "utf-8";

/* ----------------------------------

Name: style.css
Version: 1.0

-------------------------------------
Table of contents

01. Google font
02. Reset
03. Typography
04. Hover
05. Height
06. Width
07. Float
08. Bottom
09. Margin
10. Color
11. Padding
12. Border
13. Font Size
14. Line Height
15. Banner
16. Button
17. Position
18. Top Social Link
19. Navigation Bar
20. Counter Section
21. Transition
22. OverFlow
23. Shape Box
24. Z Index
25. Display Block
26. Volunteer
27. Footer Section

*/

/* ===================================
Google font
====================================== */


@import url('https://fonts.googleapis.com/css?family=butler|apercu|futurabook&display=swap');

/* ===================================
Reset
====================================== */
body{
    color:#FFFFFF;
    background-color:#000000;
    color:#FFFFFF;
    background-color:#000000;
font-size: 14px;
font-weight: 300;
font-family: apercu;
line-height: 24px
}
.carousel-inner {overflow: hidden}
.navbar {margin-bottom: 0; padding: 5px 0;}
ul{margin: 0; padding: 0; list-style-type:none}
a:hover{text-decoration: none}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6{margin: 0; }
  p{margin-bottom: 0;}
a{text-decoration: none; }
figure{margin: 0}
h2 {
    font-size: 45px;
  line-height: 54px;
  font-weight: 700;
  font-family: butler;
  margin-bottom: 40px;
          font-weight: normal !important;
    }
/* ===================================
Typography
====================================== */
/*font family*/
.primary_font{font-family: butler;}
.products_tab > li > a{font-family: apercu;}
.products_tab > li > a:hover{text-decoration: underline;}
.nav-tabs .dropdown-menu > a,
.product_category_tab > li > a
{font-family: apercu;}
.secondary_font {font-family: apercu;}
h1 {font-family: butler}
/* ===================================
Border
====================================== */

/* ===================================
Letter Spacing
====================================== */
.letter_spacing_1{letter-spacing: 1px}
.letter_spacing_1.5{letter-spacing: 1.5px}
.letter_spacing_2{letter-spacing: 2px}
.letter_spacing_5{letter-spacing: 5px}
/* ===================================
Margin
====================================== */
.margin_0_auto{margin: 0 auto}
/*margin*/
.margin_lr_30       {margin: 0 30px}
/*Margin Bottom*/
.margin_bottom_5    {margin-bottom: 5px}
.margin_bottom_10   {margin-bottom: 10px}
.margin_bottom_15   {margin-bottom: 15px}
.margin_bottom_20   {margin-bottom: 20px}
.margin_bottom_25   {margin-bottom: 25px}
.margin_bottom_26   {margin-bottom: 26px}
.margin_bottom_30   {margin-bottom: 30px}
.margin_bottom_35   {margin-bottom: 35px}
.margin_bottom_40   {margin-bottom: 40px}
.margin_bottom_50   {margin-bottom: 50px}
.margin_bottom_53   {margin-bottom: 53px}
.margin_bottom_60   {margin-bottom: 60px}
.margin_bottom_65   {margin-bottom: 65px}
.margin_bottom_70   {margin-bottom: 70px}
.margin_bottom_75   {margin-bottom: 75px}
.margin_bottom_80   {margin-bottom: 80px}
.margin_bottom_85   {margin-bottom: 85px}
.margin_bottom_90   {margin-bottom: 90px}
.margin_bottom_95   {margin-bottom: 95px}
.margin_bottom_100  {margin-bottom: 100px}

/*Margin Right*/
.margin_right_14    {margin-right: 14px}
.margin_right_10    {margin-right: 10px}
.margin_right_15    {margin-right: 15px}
.margin_right_20    {margin-right: 20px}
.margin_right_30    {margin-right: 30px}
.margin_right_60    {margin-right: 60px}

/*Margin Left*/
.margin_left_auto { margin-left: auto; }
.margin_left_14     {margin-left: 14px}
.margin_left_10     {margin-left: 10px}
.margin_left_15     {margin-left: 15px}
.margin_left_20     {margin-left: 20px}
.margin_left_30     {
  margin-left: 30px !important;
  }
.margin_left_50     {margin-left: 50px}
.margin_left_60     {margin-left: 60px}
.margin_left_100    {margin-left: 100px}

/*Margin Top*/
.margin_top-25      {margin-top: -25px}
.margin_top_10      {margin-top: 10px}
.margin_top_15      {margin-top: 15px}
.margin_top_20      {margin-top: 20px}
.margin_top_25      {margin-top: 25px}
.margin_top_30      {margin-top: 30px}
.margin_top_37      {margin-top: 37px}
.margin_top_40      {margin-top: 40px}
.margin_top_45      {margin-top: 45px}
.margin_top_35      {margin-top: 35px}
.margin_top_50      {  margin-top: 50px; }
.margin_top_60      {margin-top: 60px}
.margin_top_80      {margin-top: 80px}
.margin_top_90      {margin-top: 90px}
.margin_top_95      {margin-top: 95px}
.margin_top_100     {margin-top: 100px}

/* ===================================
Color
====================================== */
/*Colors*/
.banner_btn,
.welcome_btn,
.menu_btn,
.our_chefs_btn,
.banner_btn.active_btn,
.btn_blog_post,
.cart_btn i,
.badge-light,
.welcome_btn:hover, .menu_btn:hover, .our_chefs_btn:hover,
.coa_section h2,
.coa_section p,
.welcome_btn.active,
.btn_promotion,
.btn_combo_deal,
.btn_submit,
.combo_deal_box:hover .btn_combo_deal,
.combo_deal_box:hover .heading_combo_deal,
.combo_deal_box:hover .price_combo_deal,
.combo_deal_box:hover p,
.btn_promotion:hover,
.btn_blog_post:hover,
.dropdown_btn_view_cart,
.dropdown_btn_checkout.active,
.dropdown_btn_view_cart:hover,
.dropdown_btn_checkout.active:hover,
.login_btn.active:hover,
.model_btn_submit,
.feature_hover_box>.hover_links>.hover_links_list li:hover a i,
.btn_add_cart:hover
{color: #FFFFFF}
.copy_right_text a{
color: #e51451;
}
.model_btn_submit:hover{background-color: #FEFEFE !important; color: #FFFFFF;}
.login_btn.active{color: #FFFFFF;}
.submit_btn{background: #FFFFFF; color: #FEFEFE;}
.login_btn{background: #FFFFFF;}
.top_bar li a{color: #FFFFFF;}
.color_fff{color: #FFFFFF;}
.copy_right_text {/*background-color: #FEFEFE;*/color: #FFFFFF}
.contact_field::-webkit-input-placeholder{color: #fff}
.product_category_tab .nav-link.active{color: #ffffff !important;}
.login_btn:hover{color: #FFFFFF !important;}
.primary_color,
.inner_featured_product_box ul li i,
.menu_product_name,
.daily_timings li:last-child,
.contact_us_label,
.promotion_box:hover .heading_promotion_box,
.product_total_price>span,
.featured_product_box:hover .feature_product_name,
.featured_product_box:hover .discounted_price,
.blog_post_box:hover .blog_post_title,
.contact_us_links a:hover ,
.btn_read_more a ,
.dropdown_cart_btn>ul>li:hover .dropdown_product_name
{color: #FFFFFF}
.contact_info_box .contact_info_listing li a:hover{color: #FFFFFF;}
.footer_heading{color: #FFFFFF}
h2{color: #FFFFFF;}
h2{font-family: butler;}
.copy_right_text span{color: #FFFFFF}
.navbar-nav li.active a{color: #FFFFFF}
.secondary_color,
.blog_post_date,
.product_price,
.featured_product_box:hover .inner_featured_product_box ul li i,
.dropdown_product_price ,
.dropdown_cart_btn>ul>li .fa-trash-o
{color: #FFFFFF}
.price_tag{background: #ED1C24;color: #FFFFFF}
.menu_product_price{color: #FFFFFF;}

.products_tab .nav-link.active{background-color: #000000 !important;text-decoration: underline;font-weight: bold;}


.gift_box,
.cutted_price,
.btn_add_cart
{color: #777777}
.color_777{color: #FFFFFF}

.color_333,
.product_name,
.heading_promotion_box,
.heading_combo_deal,
.price_combo_deal,
.contact_us_links a,
.feature_hover_box>.hover_links>.hover_links_list li a i,
.dropdown_product_name,
.product_total_price,
.blog_post_title,
.banner_btn:hover,
.top_bar a:hover,
.product_category_tab > li > a,
.nav-tabs .dropdown-menu > a
{color: #FFFFFF}

.products_tab > li > a{color: #FFFFFF}
.border_color_ff8c00,
.testimonial_slider_indicators .active,
{border: 2px solid }
.banner_slider_indicators .active{color: #FFFFFF !important}
.newproductstab li:last-child{text-align: center;}
.newproductstab li:last-child{text-align: center;float: none !important;clear: both;}
.carousel-indicators .active{background-color: #FFFFFF !important}
.carousel-indicators{color: #FFFFFF !important}
.border_color_a60d13,
.testimonial_slider_indicators li,
.outer_our_chef:before
{border: 2px solid }

/*Background Colors*/
.bg_primary_color,
.banner_btn.active_btn,
.blog_post_date:before,
.testimonial_slider_indicators .active,
.badge-light,
.welcome_btn:hover, .menu_btn:hover, .our_chefs_btn:hover,
.welcome_btn.active,
.contact_us_img:hover,
.btn_submit:hover,
.combo_deal_box:hover .btn_combo_deal,
.btn_blog_post:hover,
.dropdown_btn_checkout.active,
.dropdown_btn_view_cart:hover,
.model_btn_submit:hover,
.feature_hover_box>.hover_links>.hover_links_list li:hover a,
{background-color: #ED1C24}
.btn_promotion:hover{background-color: #ED1C24;color: #FFFFFF}
.login_btn:hover{background-color: #FFFFFF !important;background-color: #FEFEFE !important;}
.submit_btn:hover{background-color: #FEFEFE; color: #FFFFFF}
.login_btn.active{background-color: #FEFEFE !important;color: #FFFFFF !important;}

.bg_secondary_color,
.banner_btn,
.welcome_btn,
.menu_btn,
.our_chefs_btn,
.btn_blog_post,
.cart_btn,
.menu_two_section,
.btn_promotion,
.btn_combo_deal,
.btn_submit,
.contact_us_img,
.combo_deal_box:hover,
/*.promotion_box:hover figure:before,*/
.featured_product_box figure:before,
.dropdown_btn_view_cart,
.dropdown_btn_checkout.active:hover,
.btn_add_cart:hover,
.checkout
{background: #ED1C24;color: #FFFFFF}
.number-input button
{background: #ED1C24; color: #FFFFFF}
.login_btn.active:hover{background: #FFFFFF !important;color: #FEFEFE !important;}
.submit_btn{background: ;}
.model_btn_submit{background: #FFFFFF; color: #FEFEFE;}
    .top_bar{background: #FEFEFE;color: #FFFFFF;}
.login_btn{background: #FFFFFF;}

    .bg_fff{background-color: #FEFEFE}
.bg_fff{font-family: butler}
.inner_welcome_box,
.product_details,
.combo_deal_box,
.price_tag,
.feature_hover_box>.hover_links>.hover_links_list li a,
.dropdown_cart_btn,
.banner_btn:hover,
.banner_btn.active_btn:hover,
.product_category_tab .nav-link.active:after,
{background-color: #FFFFFF}

.number-input button:before, .number-input button:after
{background-color: #FFFFFF}

.bg_777777
{background-color: #777}

.bg_f1f1f1
{background-color: #f1f1f1}

    .copy_right_manin
    {background-color: #FEFEFE;}
.bg_333,
.cont
{background-color: #FEFEFE;}
.copy_right_td{background-color: #6FB55E;}
.copy_right_td .copy_right_text1{color: #FFFFFF;}
.copy_right_td a{color: #FFFFFF;}
.copy_right_text1 span{padding: 5px;}
.copy_right_text1 span a{color: #FFFFFF}
.copy_right_td a:hover{text-decoration: underline;}
.bg_efe7e5,
.blog_section,
.footer_section,
.combo_deal_section,
.map_location,
.contact_form_three
{background-color: #efe7e5}


.bg_bfb9b7,
.contact_field
{background-color: #bfb9b7}

.background_ccc,
.btn_add_cart
{background-color: #cccccc}

.background_e9e8e8
{background-color: #e9e8e8}

.background_f4f4f4,
.product_details
{background-color: #f4f4f4}


.border_ccc,
.featured_product_box figure,
.number-input
{border: 1px solid #ED1C24; transition: all ease-in-out 0.5s}
.number-input{border: 1px solid #ED1C24; transition: all ease-in-out 0.5s}
.inner_promotion_box{border: 1px solid #FFFFFF; transition: all ease-in-out 0.5s}
.menu_one_box_img{border: 1px solid #FEFEFE; transition: all ease-in-out 0.5s}
.featured_product_box figure {border: none}
.border_22b24c,
.promotion_box:hover .inner_promotion_box
{border: 1px solid }

.price_tag
{border: 1px solid }


.border_dbdbdb,
.contact_fields
{border: 1px solid #dbdbdb}

.border_top,
.partner_section
{border-top: 1px solid }

.border_top_c3a8a2,
{border-top: 1px solid #c3a8a2}
/*.contact_info_listing li:first-child {border-top: none !important;}
.daily_timings li:first-child {border-top: none !important;}
.contact_info_listing li{border-top: 1px solid #FFFFFF}*/
/*.daily_timings li
{border-top: 1px solid #FFFFFF}*/
.copy_right_text1 span{color: #FFFFFF}
.bg_welcome_section .table-bordered td, .table-bordered th{border: none !important;}
.bg_welcome_section .table-bordered td, .table-bordered th{border: none !important;}
.bg_welcome_section .table td, .table th{border: none !important;}
.bg_welcome_section .table-bordered{border: none !important;}
.bg_custom_section .table-bordered td, .table-bordered th{border: none !important;}
.bg_custom_section .table-bordered td, .table-bordered th{border: none !important;}
.bg_custom_section .table td, .table th{border: none !important;}
.bg_custom_section .table-bordered{border: none !important;}
.bg_custom_section_1 table td, table th{border: none !important;}
.bg_custom_section_1 table td, table th{border: none !important;}
.bg_custom_section_1 table td, table th{border: none !important;}
.bg_custom_section_1 table{border: none !important;}
.bg_custom_section_1 h2 {text-align: center;}
.border_top_d0bab4,
.copy_right
{border-top: 1px solid #d0bab4}


.border_bottom_dbdbdb,
.product_box
{border-bottom: 1px solid #dbdbdb}

.border_bottom_eee
{border-bottom: 1px solid #eee}
/* ===================================
padding
====================================== */

/*padding*/
.no_padding     {padding: 0}


/*padding top*/
.padding_top_5      {padding-top: 5px}
.padding_top_8      {padding-top: 8px}
.padding_top_10     {padding-top: 10px}
.padding_top_13     {padding-top: 13px}
.padding_top_15        {padding-top: 15px}
.padding_top_20     {padding-top: 20px}
.padding_top_21     {padding-top: 21px}
.padding_top_25     {padding-top: 25px}
.padding_top_30     {padding-top: 30px}
.padding_top_35     {padding-top: 35px}
.padding_top_40     {padding-top: 40px}
.padding_top_45        {padding-top: 45px}
.padding_top_50     {padding-top: 50px}
.padding_top_60     {padding-top: 60px}
.padding_top_70     {padding-top: 70px}
.padding_top_80     {padding-top: 80px}
.padding_top_90     {padding-top: 90px}
.padding_top_95     {padding-top: 95px}
.padding_top_100    {padding-top: 100px}
.padding_top_105    {padding-top: 105px}
.padding_top_120    {padding-top: 120px}
.padding_top_150    {padding-top: 150px}
.padding_top_130    {padding-top: 130px}
.padding_top_235    {padding-top: 235px}
.padding_top_200    {padding-top: 200px}
.padding_top_300    {padding-top: 300px}

/*padding bottom*/
.padding_bottom_5   {padding-bottom: 5px}
.padding_bottom_8   {padding-bottom: 8px}
.padding_bottom_10    {padding-bottom: 10px}
.padding_bottom_13  {padding-bottom: 13px}
.padding_bottom_15    {padding-bottom: 15px}
.padding_bottom_17  {padding-bottom: 17px}
.padding_bottom_20  {padding-bottom: 20px}
.padding_bottom_21  {padding-bottom: 21px}
.padding_bottom_25  {padding-bottom: 25px}
.padding_bottom_30  {padding-bottom: 30px}
.padding_bottom_35  {padding-bottom: 35px}
.padding_bottom_40  {padding-bottom: 40px}
.padding_bottom_50  {padding-bottom: 50px}
.padding_bottom_45    {padding-bottom: 45px}
.padding_bottom_55  {padding-bottom: 55px}
.padding_bottom_60  {padding-bottom: 60px}
.padding_bottom_65  {padding-bottom: 65px}
.padding_bottom_70  {padding-bottom: 70px}
.padding_bottom_75  {padding-bottom: 75px}
.padding_bottom_80  {padding-bottom: 80px}
.padding_bottom_85  {padding-bottom: 85px}
.padding_bottom_85  {padding-bottom: 85px}
.padding_bottom_90  {padding-bottom: 90px}
.padding_bottom_100 {padding-bottom: 100px}
.padding_bottom_150 {padding-bottom: 150px}
.padding_bottom_235 {padding-bottom: 235px}
.padding_bottom_400 {padding-bottom: 400px}
.padding_bottom_120 {padding-bottom: 120px}

/*padding left*/
.padding_left_0     {padding-left: 0}
.padding_left_5    {padding-left: 5px}
.padding_left_10    {padding-left: 10px}
.padding_left_15    {padding-left: 15px}
.padding_left_20    {padding-left: 20px}
.padding_left_25    {padding-left: 25px}
.padding_left_30    {padding-left: 30px}
.padding_left_40    {padding-left: 40px}
.padding_left_50    {padding-left: 50px}
.padding_left_55    {padding-left: 55px}
.padding_left_58    {padding-left: 58px}
.padding_left_60    {padding-left: 60px}
.padding_left_70    {padding-left: 70px}
.padding_left_75    {padding-left: 75px}
.padding_left_80    {padding-left: 80px}
.padding_left_85    {padding-left: 85px}
.padding_left_95    {padding-left: 95px}
.padding_left_100   {padding-left: 100px}

/*padding right*/
.padding_right_0    {padding-right: 0}
.padding_right_2    {padding-right: 2px}
.padding_right_5    {padding-right: 5px}
.padding_right_10   {padding-right: 10px}
.padding_right_15   {padding-right: 15px}
.padding_right_20   {padding-right: 20px}
.padding_right_30    {padding-right: 30px}
.padding_right_40   {padding-right: 40px}
.padding_right_50   {padding-right: 50px}
.padding_right_55   {padding-right: 55px}
.padding_right_58   {padding-right: 58px}
.padding_right_60   {padding-right: 60px}
.padding_right_70   {padding-right: 70px}
.padding_right_75   {padding-right: 75px}
.padding_right_80   {padding-right: 80px}

/* ===================================
Font Size
====================================== */
/*Font Size*/
.font_size_8   {font-size: 8px}
.font_size_10   {font-size: 10px}
.font_size_12   {
    font-size: 12px;
}
.font_size_13   {font-size: 13px;}
.font_size_14   {font-size: 14px;}
.font_size_16   {font-size: 16px}
.font_size_18   {font-size: 18px}
.font_size_20   {font-size: 20px}
.font_size_22   {font-size: 22px}
.font_size_24   {font-size: 24px}
.font_size_25   {font-size: 25px}
.font_size_26   {font-size: 26px !important;}
.font_size_28   {font-size: 28px}
.font_size_30   {font-size: 30px}
.font_size_32   {font-size: 32px}
.font_size_34   {font-size: 34px}
.font_size_36   {font-size: 36px}
.font_size_40   { font-size: 40px !important;
  }
.font_size_42   {font-size: 42px}
.font_size_44   {font-size: 44px}
.font_size_48   {font-size: 48px}
.font_size_50   {font-size: 50px}
.font_size_60   {font-size: 60px}
.font_size_64   {font-size: 64px}
.font_size_70   {font-size: 70px}
.font_size_80   {font-size: 80px}
.font_size_90   {font-size: 90px}
.font_size_100   {font-size: 100px}

/*Font weight*/
.font_weight_100{font-weight: 100}
.font_weight_300{font-weight: 300}
.font_weight_400{font-weight: 400}
.font_weight_500{font-weight: 500}
.font_weight_600{font-weight: 600}
.font_weight_700{font-weight: 700}
.font_weight_900{font-weight: 900}
.font_weight_bold{font-weight: bold}
/* ===================================
Line Height
====================================== */
/*Line Height*/
.line_height_18    {line-height: 18px}
.line_height_22    {line-height: 22px}
.line_height_24    {line-height: 24px}
.line_height_25    {line-height: 25px}
.line_height_28    {line-height: 28px}
.line_height_30    {line-height: 30px}
.line_height_34    {line-height: 34px}
.line_height_36    {line-height: 36px}
.line_height_40    {line-height: 40px}
.line_height_42    {line-height: 42px}
.line_height_48    {line-height: 48px}
.line_height_54    {line-height: 54px}
.line_height_65    {line-height: 65px}
.line_height_80    {line-height: 80px}
.line_height_82    {line-height: 82px}
.line_height_110    {line-height: 110px}
/* ===================================
Fixed height
====================================== */
.width_450 { width: 450px; }
.width_115 { width: 115px; }

/*Height*/
.height_24{height: 24px}
.flex_1{flex: 1}
/* ===================================
Button
====================================== */
.banner_btn, .welcome_btn, .menu_btn, .our_chefs_btn{display: inline-block; font-size: 16px; font-weight: 500; line-height: 18px; border-radius: 32px; padding: 17px 46px; transition: all ease-in-out 0.5s}
.banner_btn.active_btn{display: inline-block; font-size: 16px; font-weight: 500; line-height: 18px; border-radius: 32px; padding: 17px 46px; margin-right: 10px; transition:  all ease-in-out 0.5s}
.btn_blog_post{display: inline-block; font-size: 14px; line-height: 24px; font-weight: 500; border-radius: 32px; padding: 7px 40px; transition: all ease-in-out 0.5s}
.submit_btn{font-size: 18px;font-weight: 700;border: none;text-transform: uppercase;padding: 15px 30px;border-radius: 10px;transition: all ease-in-out 0.5s;}
.btn_add_cart{display: inline-block; font-size: 14px; font-weight: 500; border-radius: 32px; padding: 7px 30px; transition: all ease-in-out 0.5s}
.btn_promotion{display: inline-block; font-size: 14px; font-weight: 500; border-radius: 32px; padding: 7px 40px; transition: all ease-in-out 0.5s}
.btn_submit{font-size: 14px; font-weight: 700; border: none; text-transform: uppercase; padding: 20px 30px; border-radius: 10px; transition: all ease-in-out 0.5s}
.model_btn_submit{font-size: 18px; font-weight: 700; border: none; text-transform: uppercase; padding: 15px 30px; border-radius: 10px; transition: all ease-in-out 0.5s}
.dropdown_btn_view_cart{font-size: 12px; line-height: 18px; border-radius: 32px; padding: 10px 25px; letter-spacing: 1px; display: inline-block; text-transform: uppercase; font-weight: 500; transition: all ease-in-out 0.5s; margin-right: 10px}
.dropdown_btn_checkout.active{font-size: 12px; line-height: 18px; border-radius: 32px; padding: 10px 25px; letter-spacing: 1px; display: inline-block; text-transform: uppercase; font-weight: 500; transition: all ease-in-out 0.5s ; float: right;}
/* ===================================
Navigation Bar
====================================== */

.top_bar .right_contact_links li{position: relative}
.top_bar .right_contact_links li:after{position: absolute; content: ""; width: 1px; height: 35%; top: 15px}
.top_bar .right_contact_links li:last-child:after{display: none}
.top_bar .right_contact_links li > a:hover { color: #FFFFFF !important; }
.top_bar .right_contact_links li a{padding: 0 10px}
.top_bar ul li{display: inline-block; padding: 10px 0}
.top_bar a{font-weight: 400; padding: 0 5px; transition:  all ease-in-out 0.5s}
.top_bar/* li:first-child a{padding-left: 0}
*/
.top_bar i{font-size: 20px}
.modal-body{padding: 30px}
.modal-body{border-radius: 10px;}

.cart_btn{border-radius: 32px; padding: 7px 10px; font-size: 12px; font-weight: 700; position: relative; margin-left: 10px}
.cart_btn i{font-size: 16px; margin-right: 5px}
.badge-light{font-size: 12px; font-weight: 400}
.badge{position: absolute;  border-radius: 100%;
padding: 0;
right: -1px;
top: -13px;
width: 25px;
height: 25px;
text-align: center;
color: #FFFFFF !important;
background: #FEFEFE !important;
line-height: 26px;}

.login_btn{border: none; font-size: 16px; /*font-weight: 700 !important; */padding: 15px 0 !important; display: inline-block; min-width: 195px; text-transform: uppercase;     border-radius: 0 10px 10px 0;}

.login_btn.btn_sign_up { border-radius: 10px 0 0 10px}
.modal-dialog{max-width: 480px}
.outer_cart_btn{position: relative}
.dropdown_cart_btn{position: absolute; width: 300px;box-shadow: 0 0 20px rgba(0,0,0,.20); transition: all ease-in-out 0.5s; border-radius: 10px; z-index: 999; padding:0 15px 15px;  background: #f9f9f9}


.dropdown_cart_btn>ul>li{float: left; width: 100%}
.dropdown_product_box{padding: 0}
.dropdown_product_name{line-height: 24px; font-weight: 500}
.dropdown_product_price{font-size: 12px; line-height: 24px; font-weight: 500;text-align: right;    letter-spacing: 1px;}
.dropdown_product_detail{    padding: 15px 0 10px;
width: 100%;}
.product_total_price{line-height: 24px; font-weight: 500; padding: 15px 0 5px ; float: left; width: 100%; }
.responsivetabs-more .dropdown-menu .dropdown-item{padding: 2px 15px;}
/*.responsivetabs-more{position: absolute;left: 1250px;}*/

.outer_cart_btn:hover{cursor: pointer}

.dropdown_product_img figure{min-height: 70px; max-height: 70px; width: 70px; overflow: hidden;}
#reservationModal .nav.nav-tabs{display: inherit; border-bottom: none}
/* ===================================
Banner
====================================== */

.banner_inner_content, .sub_banner_inner_content{display: table-cell; vertical-align: middle; text-align: center}
/*.banner_slider_indicators{bottom: 50px}*/
/*.banner_slider_indicators li{width: 10px; height: 10px; border-radius: 100px; background-color: transparent}*/
.sub_page_banner01{
    background-color: #FFFFFF;
    color: #292929;
    height: 130px;
display: table;
width: 100%
}
.title_font_color{color: #292929;text-transform: capitalize;}


/* All other css of this account page is Here */
:root{

    --checkout_process_forms_bg_color:#f5f6f8;
    --checkout_process_forms_heading_color:#212121;
    --checkout_process_forms_text_color:rgba(0,0,0,0.7);
    --checkout_process_forms_text_color_two:#ffffff;
    --checkout_process_forms_active_color:#ED1C24;
    --checkout_process_forms_divider_lines_color:rgba(0, 0, 0, 0.4);

    --checkout_process_forms_input_border_color:rgba(0, 0, 0, 0.16);
    --checkout_process_forms_input_text_color:rgba(0, 0, 0, 0.7);
    --checkout_process_forms_input_bg_color:#f6f6f6;


    --checkout_process_forms_google_signin_btn_bg_color:#ffffff;
    --checkout_process_forms_google_signin_btn_text_color:#212121;
    --checkout_process_forms_google_signin_btn_shadow_color:rgb(0 0 0 / 12%);


    --checkout_process_forms_guest_checkout_btn_bg_color:#212121;
    --checkout_process_forms_guest_checkout_btn_text_color:#ffffff;

    /* --account_forget_password_popup variables */
    --account_forget_password_popup_bg_color:#FFFFFF;
    --account_forget_password_popup_heading_color:#212121;
    --account_forget_password_popup_btn_bg_color:#ED1C24;
    --account_forget_password_popup_btn_text_color:#ffffff;
    --account_forget_password_popup_input_text_color:rgba(0, 0, 0, 0.7);
    --account_forget_password_popup_input_border_color:rgba(0, 0, 0, 0.16);
    --account_forget_password_popup_input_bg_color:#f6f6f6;

    /* font family variables  */

    --checkout_process_forms_heading_font_family:"Playfair Display", serif;
    --checkout_process_forms_text_font_family:"Inter", sans-serif;;

}

/* ===================================
Featured Products Box
====================================== */
.featured_product_box figure{position: relative}
.featured_product_box figure:before{position: absolute; content: ""; width: 100%; height: 100%; left: 0; top: 0; opacity: 0; transition: all ease-in-out 0.5s;
z-index: 1;
}
.featured_product_box:hover figure:before{opacity: .5 background-color:000;}
.inner_featured_product_box ul li{display: inline-block}
.inner_featured_product_box ul li i{font-size: 16px}
.feature_product_name{font-size: 22px; line-height: 30px; font-weight: 700; color: #FFFFFF; text-align: center;margin-top: 10px;}
.gift_box{font-size: 14px; line-height: 30px; font-weight: 400}
.cutted_price{font-size: 18px; line-height: 30px; font-weight: 700}
.discounted_price{font-size: 22px; line-height: 30px; font-weight: 700; color: #333}
.discounted_price span{font-size: 16px}
.inner_featured_product_box{padding: 20px 0}
.feature_hover_box>.hover_links>.hover_links_list li{display: inline-block !important;}
.feature_hover_box>.hover_links>.hover_links_list li a{display: table; width: 50px; height: 50px; border-radius: 100%}
.feature_hover_box>.hover_links>.hover_links_list li a i{display: table-cell; vertical-align: middle; text-align: center; font-size: 18px; z-index: 2}
.featured_product_box{position: relative; float: left}
.hover_links{position: absolute; top: 43%; left: 0; right: 0; margin: 0 auto; text-align: center; opacity: 0; transition: all ease-in-out 0.5s; z-index: 2}
.featured_product_box:hover .hover_links{opacity: 1}
.feature_hover_box{position: relative; height: 294px; display: table; overflow: hidden; border-radius: 10px}
.featured_product_box figure img {
transition: .2s ease-in-out;
}
.featured_product_box:hover figure img { filter: blur(4px);
-webkit-filter: blur(4px);
transform: scale(1.1);}
/* ===================================
Home  Section
====================================== */
.bg_welcome_section{
    background-size: cover;
    padding: 60px 0;
    padding-top: 0px;
}
.bg_custom_section{
    padding-top: 0px !important;
    background-size: cover;
padding: 60px 0;
}
.bg_custom_2_section{
    padding-top: 0px !important;
    background-size: cover;
padding: 60px 0;
}
.bg_custom_3_section{
    padding-top: 0px !important;
    background-size: cover;
padding: 60px 0;
}
.bg_custom_4_section{
    padding-top: 0px !important;
    background-size: cover;
padding: 60px 0;
}
.bg_custom_5_section{
    padding-top: 0px !important;
    background-size: cover;
padding: 60px 0;
}
.bg_reserve_section{
    background: #FFFFFF;
background-size: cover;
padding: 60px 0;
}
.inner_welcome_box{padding: 60px 110px ; border-radius: 10px}
.bg_welcome_section .inner_welcome_box{background: #000000; opacity: .95;}
.bg_welcome_section .inner_welcome_box h2 {margin-bottom: 20px}
    .bg_reserve_section .inner_welcome_box{padding: 0px 110px !important;}
.bg_reserve_section .inner_welcome_box h2 {color: #FFFFFF !important; margin-bottom: 20px}
.bg_reserve_section .inner_welcome_box {color: #FFFFFF !important;}
.bg_custom_section .inner_welcome_box{background: #000000; opacity: .95;}
.bg_custom_section .inner_welcome_box h2 {margin-bottom: 20px}
/* ===================================
Menu Section
====================================== */
.menu_one_box figure img{-webkit-transform: scale(1); transform: scale(1); -webkit-transition: .3s ease-in-out; transition: .5s ease-in-out}
.menu_one_box:hover figure img{    -webkit-transform: scale(1.3); transform: scale(1.2)}
.menu_one_box_img{overflow: hidden ; }
.menu_one_box_img figure { position: relative ; width: 100%; height: 150px}
.menu_one_box_img figure img {position: absolute;  left:0;  right: 0;  margin:  auto; vertical-align: middle; top: 0; bottom: 0}
.menu_one_box_img figure img{object-fit: cover;height: 100%;width: 100%;}
.menu_product_name{font-size: 18px; font-weight: 700; line-height: 18px; font-family: apercu;}
.menu_product_price{font-size: 18px; line-height: 36px; font-weight: 700}
.menu_product_price span{font-size: 16px}
/* ===================================
Menu Two Section
====================================== */
.product_details{padding: 35px 15px}
.menu_two_product_img{overflow: hidden; height: 275px; width: 100%; display: table}
.menu_two_product_img figure img{    -webkit-transform: scale(1);
transform: scale(1);
-webkit-transition: .3s ease-in-out;
transition: .5s ease-in-out;}
.outer_menu_two_box:hover figure img{    -webkit-transform: scale(1.3); transform: scale(1.2)}
.menu_two_product_img figure{min-height: 275px; max-height: 275px; display: table-cell; vertical-align: middle}
.product_details p{min-height: 75px; max-height: 75px; overflow-x: auto}
/* ===================================
Menu Three Section
====================================== */
.product_box{margin-top: 30px; float: left}
.product_detail{width: 100%; float: left; margin-bottom: 10px;}
.product_name{font-size: 20px; font-weight: 700; float: left}
.product_price{font-size: 20px; font-weight: 700; float: right}
/* ===================================
Call of Action Section
====================================== */
.bg_call_of_action{/*background: url("../images/bg_call_of_action.jpg") repeat center ;*/ background-color: ;  padding: 100px 0}
.bg_call_of_action ul li{display: inline-block; padding: 0 10px}
.bg_call_of_action h2 {margin-bottom: 20px}
/* ===================================
Our Chefs Section
==================================== */
.our_chefs{position: relative}
.our_chefs:before{position: absolute; content: ""; background: url("../images/our_chefs_bg.png") no-repeat; width: 393px; height: 617px; left: 0; top: 50px}
.outer_our_chef{position: relative; width: 100%; height: 445px}
.outer_our_chef:before{position: absolute; content: "";width: 100%; height: 100%; left: -20px; top: -20px; z-index: -1}
.our_chefs_content{padding: 60px 80px 60px 0}
/* ===================================
Blog Post Section
====================================== */
.blog_post_date{font-size: 14px; line-height: 24px; font-weight: 300; margin-bottom: 40px; position: relative}
.blog_post_date:before{position: absolute; content: ""; height: 1px; width: 20%; left: 0; bottom: -15px}
.blog_post_title{font-size: 18px; line-height: 24px; font-weight: 700; margin-bottom: 20px}
.inner_blog_post_box{padding: 30px}
.blog_post_box figure img{-webkit-transition: all 10s cubic-bezier(0.39, 0.575, 0.565, 1) 0s;
-khtml-transition: all 10s cubic-bezier(0.39, 0.575, 0.565, 1) 0s;
-moz-transition: all 10s cubic-bezier(0.39, 0.575, 0.565, 1) 0s;
-ms-transition: all 10s cubic-bezier(0.39, 0.575, 0.565, 1) 0s;
-o-transition: all 10s cubic-bezier(0.39, 0.575, 0.565, 1) 0s;
transition: all 10s cubic-bezier(0.39, 0.575, 0.565, 1) 0s;}
.blog_post_box:hover figure img{transform: scale(1.5)}
.blog_post_box_img{overflow: hidden}
/* ===================================
Testimonial Section
====================================== */
.testimonial_slider_indicators{bottom: -50px}
.testimonial_slider_indicators li{width: 14px; height: 14px; border-radius: 100%}
.carousel_slide{padding-top: 50px}
.carousel_slide:before{position: absolute; content: ""; background: url("../images/queto.png"); width: 63px; height: 51px; left: 8px; top: 20px}
/* ===================================
Footer Section
====================================== */
.footer_heading{font-size: 22px; line-height: 24px; font-weight: 500; margin-bottom: 5px;}
.contact_field{padding: 15px 20px; border: none; margin-bottom: 10px; border-radius: 10px; font-size: 14px; line-height: 18px; font-weight: 400}
.contact_field:focus{outline: none}
.contact_info_listing li, .daily_timings li{font-size: 14px; font-weight: 400; color: #FFFFFF; padding: 10px 0; position: relative;}
.contact_info_listing li a{font-size: 14px; font-weight: 400; color: #FFFFFF}
.contact_info_listing li:before,
.daily_timings li:before{
width: 10px;
height: 10px;
position: absolute;
left: 0;
top: 23px;
font: normal normal normal 14px/1 FontAwesome;

text-rendering: auto;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-size: 16px;
color: ;

}
.contact_info_listing li:hover:before,
.daily_timings li:hover:before {
color: ;
}

/*.contact_info_listing li:first-child:before {
content: "\f015";
}
.contact_info_listing li:nth-child(2):before {
content: "\f095";
}
.contact_info_listing li:nth-child(3):before {
content: "\f0e0";
}

.daily_timings li:first-child:before {
content: "\f017";
}*/

/* ===================================
Promotion Section
====================================== */
.heading_promotion_box{font-size: 18px; line-height: 24px; font-weight: 700}
.heading_promotion_box1{font-size: 18px; line-height: 24px; font-weight: 700;text-align: left;}
.inner_promotion_box{padding: 30px 10px; position: relative; height: 180px;}
.price_tag{position: absolute; font-size: 15px; line-height: 30px; font-weight: 500; border-radius: 32px; padding: 2px 15px; top: -20px; left: 0; right: 0; margin: 0 auto; width: 40%; transition: all ease-in-out 0.5s}
.promotion_box{border: 1px solid #FFFFFF;transition: all ease-in-out 0.5s;}
.promotion_box figure{position: relative}
.promotion_box figure:before{position: absolute; content: ""; width: 100%; height: 100%; left: 0; opacity: 0; transition: all ease-in-out 0.5s}
.promotion_box:hover figure:before{opacity: 0.80}
/*.promotion_box:hover .price_tag{top: -190px}*/
/* ===================================
Combo Deal Section
====================================== */
.combo_deal_box{padding: 30px; transition: all ease-in-out 0.5s}
.heading_combo_deal{font-size: 18px; line-height: 24px; font-weight: 700}
.price_combo_deal{font-size: 18px; line-height: 24px; font-weight: 700}
.btn_combo_deal{display: inline-block; font-size: 14px; line-height: 18px; border-radius: 32px; padding: 7px 30px}
/* ===================================
Contact Form One
====================================== */
.contact_fields{padding:.375rem .75rem; font-size: 14px; box-shadow: 0 0 20px rgba(0,0,0,.10) ; border-radius: .25rem;background: #fff;height: 50px !important;}
.contact_fields:focus{outline-width: 0 ; border-color: #ccc}
.contact_us_img{width: 80px; height: 80px; display: table; border-radius: 10px; transition: all ease-in-out 0.5s}
.contact_us_img figure{display: table-cell; vertical-align: middle; text-align: center}
.contact_us_label{font-size: 18px; line-height: 26px; font-weight: 700; text-transform: uppercase}
.contact_us_links a{font-size: 16px; position: relative}
.contact_us_links a:after{position: absolute; content: ""; width: 100%; height: 2px; background-color: ; bottom: 0; left: 0; opacity: 0; transition: all ease-in-out 0.5s}
.contact_us_links a:hover:after{opacity: 1}

/* ===================================
Location on Map
====================================== */
.location_on_map{box-shadow: 0 0 20px rgba(0,0,0,.20)}
/* ===================================
Copy Right Section
====================================== */
.copy_right_text{font-weight: 500}


@media only screen and (min-width: 992px){
.menubar li:hover .dropdown_menu {display: block}
.menubar li:hover .dropdown_submenu {display: block}
.menubar li:hover .dropdown_company {display: block}

}

/*Category Tabs */
.products_tab, .product_category_tab{margin-bottom: 80px}
.products_tab, .product_category_tab > li > a{font-size: 24px; font-weight: 400}
.products_tab, .product_category_tab > li:first-child > a{padding-left: 0}
.products_tab, .product_category_tab > li > a.active{border: none; background-color: transparent !important; position: relative}
.nav-tabs .nav-link.active{position: relative; border-color: transparent}
.products_tab .nav-link.active:after{position: absolute; content: ""; width: 100%; height: 5px; left: 0; bottom: -17px}
.product_category_tab .nav-link.active:after{position: absolute; content: ""; width: 100%; height: 5px; left: 0; bottom: -17px}
.nav-tabs .nav-link:hover{border-color: transparent}
.product_category_tab{border-bottom: 1px solid rgba(222, 226, 230, .30)}
/*Product Counter */
input[type="number"] {
}
.nav-tabs .nav-link.active{color: #FFFFFF;text-decoration: underline;}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
}

.number-input {
display: inline-flex;
width: 120px;
border-radius: 32px;
height: 38px;
overflow: hidden;
}

.number-input,
.number-input * {
box-sizing: border-box;
}

.number-input button {
outline:none;
-webkit-appearance: none;
border: none;
align-items: center;
justify-content: center;
width: 3rem;
height: auto;
cursor: pointer;
margin: 0;
position: relative
}

.number-input button:before,
.number-input button:after {
display: inline-block;
position: absolute;
content: '';
width: 10px;
height: 2px;
transform: translate(-50%, -50%);
}
.number-input button.plus:after {
transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
max-width: 36px;
padding: 8px;
border: solid #ddd;
border-width: 0 2px;
font-size: 14px;
height: auto;
font-weight: bold;
text-align: center;
-webkit-appearance: none;
}


.number-input input[type=number] {
-moz-appearance:textfield;
}

.button {
position: relative;
height: 45px;
width: 100%;
margin: 0 auto;
overflow: hidden;
top: 1.5em;
display: inline-block;
cursor: pointer;
border: 1px solid transparent;
border-radius: 10px;
-webkit-border-radius: 10px;
transition: all 500ms ease;
-webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
}

.add {
background: #f1f1f1;
color: #777;
height: 100%;
width: 100%;
border: 1px solid #ccc;
border-radius: 32px;
padding: 12px 0;
display: block;
transition: all 500ms ease;
-webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
}
h4 {color: #FFFFFF}
.location-holder .text-holder p{color: #000;}
.text-holder h4 {color: #000; }
.add h4 {
text-align: center;
font-size: 14px;
font-size: 14px;
height: 24px;
}

.checkout {
position: relative;
height: 41px;
width: 50%;
text-align: center;
padding: 7px 0;
margin-top: -42px;
margin-left: -8.1em;
border: 1px solid transparent;
border-top-left-radius: 32px;
border-bottom-left-radius: 32px;
transition: all 500ms ease;
-webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
}

.cont {
position: relative;
height: 41px;
width: 50%;
text-align: center;
background: #2C3E50;
margin-top: -30px;
margin-left: 16.2em;
padding: 7px 0;
border: 1px solid transparent;
border-top-right-radius: 32px;
border-bottom-right-radius: 32px;
transition: all 500ms ease;
-webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
}
.outer_add_cart{width: 100%; overflow: hidden; padding-bottom: 2px}
a span {
color: #FFFFFF;
font-weight: 400;
}

a .my-cart-new{
color: #FFFFFF;
font-size: 20px;
font-weight: 400;
}
.my-cart-new span{
color: #FFFFFF;
font-size: 20px;
font-weight: 400;
}
.anchor-header-1 span{
color: #FFFFFF;
font-size: 20px;
text-transform: uppercase;
font-weight: 400;
}


/*============= Header cart start here=================*/
.dropdown_cart_btn.dropdown-menu.show
{
overflow-y: scroll;
max-height: 300px;
max-width:270px;
background: #000000;
color: #FFFFFF}

/*============= Header cart end here=================*/


.add_cart{display: inline-block}

.cart {
outline: none;
border: 0;
background: ;
padding: 8px 0;
color: #fff;
width: 100%;
position: relative;
z-index: 2;
cursor: pointer;
transition: 0.5s width;
float: left;
border-radius:32px;
font-size: 14px;
font-weight: 500;
}
.cart_clk {
width: calc(100% - 75px);
}
.crtdiv {
border: 1px solid ;
width: 200px;
border-radius: 32px;
position: relative;
background: #fff;
float: left;
}
button:focus{outline: none}
.fa {
font-size: 16px;
}
.cart .fa {
font-size: 26px;
position: relative;
padding: 0 5px 0 0;
}
.cart .fa:after {
position: absolute;
content: attr(data-before);
color: #000;
left: 11px;
font-weight: bold;
top: 5px;
font-size: 12px;
}
/*.qty {
position: absolute;
right: 10px;
top: 50%;
transform: translateY(-50%);
-webkit-transform: translateY(-50%);
color: #ccc
}*/
.dec,
.inc {
cursor: pointer;
}
.num {
width: 22px;
display: inline-block;
text-align: Center;
font-size: 12px;
font-weight: 700;
color: #777;
}
.empty-desc{
margin-bottom: 40px;
}
/*#basic #tabs_toogle{width: 10000px !important;}*/
.nav-tabs .dropdown-menu{width: 250px; border-radius: 10px}
.nav-tabs .dropdown-menu > a{font-size: 24px; line-height: 36px; font-weight: 400; padding: 5px 30px}
.dropdown-item.active, .dropdown-item:active{background-color: transparent}
.owl-carousel .owl-dots.disabled{display: none}
.owl-theme .owl-nav [class*=owl-]{font-size: 44px !important; color:  !important;}
.owl-theme .owl-nav [class*=owl-]:hover{background-color: transparent !important; color:  !important;}
#tabs_toogle .dropdown-toggle{background: url("../images/tabs_toogle.png") no-repeat center; border-radius: 100%; padding: 7px 18px; font-size: 0}
.dropdown-toggle::after{display: none}
.nav.nav-tabs.products_tab > li.dropdown.responsivetabs-more{position: absolute; right: 0; display: inherit}
#category_tabs .dropdown-toggle{background: url("../images/tabs_toogle.png") no-repeat center; border-radius: 100%; padding: 4px 10px}
.nav.nav-tabs.product_category_tab > li.dropdown.responsivetabs-more{margin-left: auto; display: inherit}
.fixed-top{background: #FEFEFE;}
/*.sticky_header.fixed-top{webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;}*/
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{background-color: #ED1C24}

.owl-theme .owl-dots .owl-dot span {margin: 3px;}

.modal-content {border-radius: 10px;}
.modal-content{background: #000000; color: #FFFFFF}
.order-detail-custom{background: #000000 !important};
.modal-body a:empty{display: none}
.scroller.scroller-left{
float: left;
background-color: transparent;
color: #FFFFFF;
}
.scroller.scroller-right{
float: right;
background-color: transparent;
color: #FFFFFF;
}
.newproductwrap{display: flex;justify-content: center;flex-wrap: wrap;}
.newproductwrap > li > a:hover{text-decoration: underline;}
/*.carousel {

height:360px;

}

.carousel-inner > .carousel-item > figure > img {

height: 370px;

}*/
  
/*.figure-img{height: 500px;}*/

.fill {object-fit: fill;}
.contain {object-fit: contain;}
.cover {object-fit: cover;}
.scale-down {object-fit: scale-down;}
.none {object-fit: none;}
/*.carousel-inner > .carousel-item {
height: 100vh;
}

.carousel-inner > .carousel-item > figure > img {
position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
max-height: 800px;
width: auto;
}

.carousel-control.left,
.carousel-control.right {
background-image: none;
}*/
.carousel-inner > .carousel-item > figure > img {
width: 100%;
}
.readmore{color: #FFFFFF;}
.readmore:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readless{color: #FFFFFF;}
.readless:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readmore1{color: #FFFFFF;}
.readmore1:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readless1{color: #FFFFFF;}
.readless1:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readmore2{color: #FFFFFF;}
.readmore2:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readless2{color: #FFFFFF;}
.readless2:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readmore3{color: #FFFFFF;}
.readmore3:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.readless3{color: #FFFFFF;}
.readless3:hover{color: #FFFFFF;opacity: .5;text-decoration: underline;}
.signup_main_section .optional-heading {padding: 0px 15px;color: #FFFFFF;margin-bottom: 10px;}
.btn-color {border-color: #ED1C24 !important;}
.btn.btn-color {color: #FFFFFF !important;text-transform: uppercase;}
.btn-color {background: #ED1C24 !important;}
.w-45{width: 40%!important;}
.error{color: #CC0000;}
ul.pull-right.right_contact_links li.order-now a {padding: 0 8px !important;border-right: 1px solid #FFFFFF !important;color: #FFFFFF !important;}
.signin-section-page h2{
font-size: 35px;
margin-bottom: 15px;
  font-family: apercu !important;
float: left;
color: #FFFFFF !important;}
.forget a{color: #FFFFFF;}
.forget a:hover{opacity: .4;}
.profile-detail-text h3 {color: #FFFFFF !important;}
.profile-detail-text h2 {
  font-family: apercu !important;    color: #FFFFFF !important;
      }
.delfromplace{color: #FFFFFF !important;}
.delfromplace:hover{opacity: .4;}
.detail_link_show{color: #FFFFFF !important;text-decoration: underline;}
.detail_link_show:hover{opacity: .4  !important;}
.fa-minus-new{position: static;float: right;margin-right: 11px;margin-top: 4px;color: #FFFFFF}
.fa-plus-new{position: static;float: right;margin-right: -25px;margin-top: 4px;color: #FFFFFF}
.modal-body .table-wrapper .table-responsive .table{background: #000000}
.modal-body {background: #000000;color: #FFFFFF}
.soc-fed-1 img {
width: 100%;
border: 3px solid #FFFFFF;
min-height: 265px;
max-height: 265px;
object-fit: fill;
}
.owl-box-carousel.owl-theme.owl-loaded.owl-drag {display: none;}
.second-categroy-responsive-hide {display: block;}
@media (max-width: 767px) {
.read-more-btn-mobile { text-algin: center; }
.myGridClassMain{margin-top: 20px;}
.mobile-responsive-class{padding-bottom: 0px;}
.second-categroy-responsive-hide {display: none;}
.owl-box-carousel.owl-theme.owl-loaded.owl-drag {display: block !important;}
/*.banner_slider_indicators { bottom: 10px; }*/
}
@media (min-width: 320px) and (max-width: 479px) {
.app_detail_box {padding: 30px 0 0 0 !important;}
.width_450 { width: auto !important; }
.my-custom-car-sec .price1 h3 { height: 63px !important;left: -10px !important;font-size: 13px !important;padding-left: 10px !important;line-height: 68px !important; }
.my-custom-car-sec .price1 h3 small { font-size: 12px !important;padding-left: 5px !important;margin-right: 5px !important;margin-top: 1px !important; }
.obw-box-height-width { max-width: 90% !important;height: 330px !important;max-height: 330px !important; }
.my-custom-car-sec { padding: 20px !important;}
    .my-payment-center { justify-content: center !important;padding-left: unset !important; }
.mobile-margin-bottom-mobile { margin-bottom: 20px;margin-left: 7px !important;margin-right: 5px !important;width: 45%; }
.mobile-padding-cate{ padding-bottom: 25px; text-align: center !important; padding-left: unset !important; }
    .col-md-3.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
    .col-md-4.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
.mobile-padding-top-cate{ padding-top: 30px;}
.read-more-btn-mobile { text-align: center !important; }
.pagination { margin: 0 !important; }
.pagination>li>a, .pagination>li>span { padding: 4px 7px !important; }
.category-filter-input { margin-top: 4px !important; }
.visa-img { width: 50px;padding: 5px; }
.master-card-img { width: 55px;padding: 5px; }
.paypal-img { width: 60px;padding: 5px; }
.discover-img { width: 55px;padding: 5px; }
.american-express-img { width: 60px;padding: 5px; }
.outline-bottom-top-nav { display: none;}
.outline-bottom-top-nav-background { display: none;}
.myGridClassMain{margin-top: 20px;}
.mobile-responsive-class{padding-bottom: 0px;}
.second-categroy-responsive-hide {display: none;}
.owl-box-carousel.owl-theme.owl-loaded.owl-drag {display: block !important;}
.loginBtn {width: 100% !important;}
}
.dropdown-item:focus, .dropdown-item:hover {color: #FFFFFF;text-decoration: none;background-color: #000000;}
.promotion_box img{width: 100%;border: 1px solid #FFFFFF;min-height: 255px;object-fit: cover;}
.timing_persons{float: right;font-size: 13px;}
.timing_persons b:before{content: "\2022" !important;}

.myFontMenuNew{font-size: 14pt;}
/*.selected{text-decoration: underline;}*/
.menu_categories{border-bottom: none; }
  ul.menu_categories{ min-width: 1000px; }
.main-title-cat{padding: 0 20px;}
a.img_slct{
color:#FFFFFF;
}
/*.menu_scroller {
position:relative;
overflow:hidden;
height:40px;
margin-top: 5px;
}
.scroller {
text-align:center;
cursor:pointer;
display:none;
padding:7px;
padding-top:11px;
white-space:no-wrap;
vertical-align:middle;
background-color:#fff;
}
.scroller-right{
float:right;
}
.scroller-left {
float:left;
}*/
ul.menu_categories li
{
display: inline-block;
}

ul.menu_categories li a
{

color: #FFFFFF;
font-weight:200;
margin: 10px 5px;
border: none;
padding: 0;
border-radius: 0;
font-size: 18px;
  /*padding-bottom: 7px;
padding-left: 10px;*/
}
.newScroller{padding-top: 4px;}
.newScroller1{padding-top: 8px;}
.btnNewMy.disabled, .btnNew:disabled{opacity: 0.1;}
ul.menu_categories li a:hover
{
text-decoration: none;
background: transparent;
border: none;
}
ul.menu-list
{
overflow: hidden;
margin-bottom: -55px !important;
text-align: left;
}
.margin-bottom{
margin-bottom:60px;
}
ul.menu-list li
{
overflow: hidden;
}
ul.menu-list li .menu-itm
{
padding:0 20px;
clear: both;
overflow: hidden;
padding: 10px 0px;
}

.myliRow{
padding: 0 20px;
}
.menu-list li:last-child
{
margin-bottom: 70px;
}
.quantity{
float: right;
}
.menu-list li .quantity span
{
width: 25px;
display: inline-block;
text-align: center;
font-size: 20px;
}
.menu-list li .quantity span.qty{
color:#FFFFFF;
background:#ED1C24;
border: none;
width: 22px;
height: 22px;
}
.lb-data .lb-caption{font-size: 25px;}
.menu-list li .quantity span.grey{
color:#FFFFFF;
background:#000000;
border: none;
width: 20px;
height: 20px;
}
a.menu-sub, a.menu-add{
color:#FFFFFF;
}
.hide{
display: none !important;
}
.ad_cart_buton{
padding-top: 10px;
}
.expand
{
width: 100%;

/*position: absolute;
top: 9%;
left: 41%;
z-index: 1;*/
}
.menu-list li .menu-price
{
font-weight: bold;
text-align: right;
padding-bottom: 10px;
font-size: 14pt;
}
.menu-list li .menu-price span
{
color: #FFFFFF;
font-weight: normal;
opacity: .4;
font-size: 8pt;
}
.cam-icon {
margin-left: 5px;
color: #FFFFFF;
font-size: 12px;
}
ul.menu-list li .menu-itm .menu_details p a b {
text-transform: capitalize;
}
@media (min-width:480px) and (max-width:768px)
{
.header_1_bg_color ul.menu-bar.pull-right li a {margin-left: 12px !important;font-size: 13px}
.myGridClassMain{margin-top: 20px;}
.mobile-responsive-class{padding-bottom: 0px;}
.fb_dialog.fb_dialog_advanced {
right: -12pt !important;
bottom: 40pt !important;
}
ul.menu-list li .menu-itm .menu_details
{
width: 77%;

}
.col_480,ul.menu-list li .menu-itm,.brand_featurs h3
{
padding: 0 ;
}
/*.menu_scroller
{
width: 100%;
overflow-x: scroll;
overflow-y: hidden;
}*/
.scroller-right, .scroller-left
{
display: none !important;
}
}
@media (min-width:320px) and (max-width:479px)
{
  .app_detail_box {padding: 30px 0 0 0 !important;}
.width_450 { width: auto !important; }
.my-custom-car-sec .price1 h3 { height: 63px !important;left: -10px !important;font-size: 13px !important;padding-left: 10px !important;line-height: 68px !important; }
.my-custom-car-sec .price1 h3 small { font-size: 12px !important;padding-left: 5px !important;margin-right: 5px !important;margin-top: 1px !important; }
.obw-box-height-width { max-width: 90% !important;height: 330px !important;max-height: 330px !important; }
.my-custom-car-sec { padding: 20px !important;}
    .my-payment-center { justify-content: center !important;padding-left: unset !important; }
.mobile-margin-bottom-mobile { margin-bottom: 20px;margin-left: 7px !important;margin-right: 5px !important;width: 45%; }
.mobile-padding-cate{ padding-bottom: 25px; text-align: center; padding-left: unset !important; }
    .col-md-3.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
    .col-md-4.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
.mobile-padding-top-cate{ padding-top: 30px;}
.read-more-btn-mobile { text-align: center !important; }
.pagination { margin: 0 !important; }
.pagination>li>a, .pagination>li>span { padding: 4px 7px !important; }
.category-filter-input { margin-top: 4px !important; }
.visa-img { width: 50px;padding: 5px; }
.master-card-img { width: 55px;padding: 5px; }
.paypal-img { width: 60px;padding: 5px; }
.discover-img { width: 55px;padding: 5px; }
.american-express-img { width: 60px;padding: 5px; }
.brand_featuers ul.family_deals li .basket_detail
{
width: 100% !important;
overflow-x: scroll;
}
ul.menu-list li .menu-itm .menu_details
{
width: 65%;
}
.scroller-right
{
margin-right: 0 !important;
}
.menu-img img {
/*width: 100% !important;
height: auto !important;*/
}
.padding_mobile
{
padding-left: 0;
}
.padding_mobile_none
{
padding: 0 !important;
}
/*.menu_scroller
{
width: 100%;
margin: 0px auto 0;
float: left;
overflow-x: scroll;
overflow-y: hidden;
}*/
/*.scroller-right,.scroller-left
{
display: none !important;
}*/
}
@media (min-width:411px) and (max-width:414px)
{
.has-search .form-control-feedback { left:54px !important; }
}
@media (min-width:256px) and (max-width:320px)
{
.main-homepage-search-auto-mobile-1-main .easy-autocomplete { width: 250px !important; }
.easy-autocomplete{ width: 250px !important; }
.app_detail_box {padding: 30px 0 0 0 !important;}
.has-search .form-control-feedback { left:10px !important; }
.width_450 { width: auto !important; }
.my-custom-car-sec .price1 h3 { height: 63px !important;left: -10px !important;font-size: 13px !important;padding-left: 10px !important;line-height: 68px !important; }
.my-custom-car-sec .price1 h3 small { font-size: 12px !important;padding-left: 5px !important;margin-right: 5px !important;margin-top: 1px !important; }
.obw-box-height-width { max-width: 90% !important;height: 330px !important;max-height: 330px !important; }
.my-custom-car-sec { padding: 20px !important;}
    .my-payment-center { justify-content: center !important;padding-left: unset !important; }
    .mobile-margin-bottom-mobile { margin-bottom: 20px;margin-left: 7px !important;margin-right: 5px !important;width: 45%; }
    .mobile-padding-cate{ padding-bottom: 25px; text-align: center; padding-left: unset !important; }
    .col-md-3.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
    .col-md-4.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
.mobile-padding-top-cate{ padding-top: 30px;}
.read-more-btn-mobile { text-align: center !important; }
.pagination { margin: 0 !important; }
.pagination>li>a, .pagination>li>span { padding: 4px 7px !important; }
.category-filter-input { margin-top: 4px !important; }
.my_cart_btn_left_float {
width: 100% !important;
text-align: center !important;
margin-bottom: 20px;
}
.my_cart_btn_right_float {
width: 100% !important;
text-align: center !important;
}
.myGridClassMain{margin-top: 20px;}
.mobile-responsive-class{padding-bottom: 0px;}
ul.menu-list li .menu-itm{
padding:0 10px;
}
.pr15{
padding-right: 0;
}
.pl15 {
padding-left: 0;
}
.overflow_mobile{
overflow: inherit;
}
ul.menu_categories
{
min-width: 1000px;
}
.scroller-right
{
margin-right: 0 !important;
}
ul.menu-list li .menu-itm{
padding:0 10px;
}
.menu-img
{
width: 100%;
padding: 0;
margin-top: 7px;
}

.menu-img img {
/*width: 100% !important;
height: auto !important;*/
}
.padding_mobile
{
padding-left: 0;
}
.padding_mobile_none
{
padding: 0 !important;
}
/*.menu_scroller
{
width: 100%;
margin: 0px auto 0;
float: left;
overflow-x: scroll;
overflow-y: hidden;
}
.scroller-right,.scroller-left
{
display: none !important;
}*/
.gmap
{
width: 100%;
overflow: hidden;
}
ul.menu-list li .menu-itm .menu_details
{
width: 65%;
}
}

.navbar-brand{
display: inline-block;
padding-top: 0;
padding-bottom: 0;
margin-right: 1rem;
font-size: 1.25rem;
line-height: inherit;
white-space: nowrap;
}

/* Shared */
.loginBtn {
box-sizing: border-box;
position: relative;
/* width: 13em;  - apply for fixed size */
margin: 0.2em;
padding: 0 15px 0 46px;
border: none;
text-align: left;
line-height: 34px;
white-space: nowrap;
border-radius: 0.2em;
font-size: 16px;
color: #FFF;
}
.loginBtn a{color: #fff;width: 100%;display: block;}
.loginBtn:before {
content: "";
box-sizing: border-box;
position: absolute;
top: 0;
left: 0;
width: 34px;
height: 100%;
}
.loginBtn:focus {
outline: none;
}
.loginBtn:active {
box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
background-color: #4C69BA;
background-image: linear-gradient(#4C69BA, #3B55A0);
/*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
border-right: #364e92 1px solid;
background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
background-color: #5B7BD5;
background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
/*font-family: "Roboto", Roboto, arial, sans-serif;*/
background: #DD4B39;
}
.loginBtn--google:before {
border-right: #BB3F30 1px solid;
background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
background: #E74B37;
}
.billing {
background: #000;
padding: 10px 20px;
bottom: 0;
width: 100%;
/*z-index: 99999999;*/
}
.fixed {
position: fixed !important;
}
.cart_detail {
padding-left: 0px;
margin-bottom: 10px;
}
.check {
margin-right: 7%;
}
.total {
margin-left: 7%;
}
.billing p{
color: #fff;
}
.fb_dialog.fb_dialog_advanced {
right: -12pt !important;
margin-right: 50px;
margin-bottom: 40px;
}
iframe.fb_customer_chat_bounce_in_v2 {
right: 9pt;
margin-right: 50px;
}
iframe.fb_customer_chat_bounce_out_v2 {
right: 9pt;
margin-right: 50px;
}
img{ max-width:100%;}

.gallery_box li{ width:33.333333%; max-width: 100% ; display:inline-block; float: left; text-align: center; overflow: hidden;position: relative;padding: 5px;}
.gallery_box{ padding:0;display: flow-root;display: flex;justify-content: center;flex-wrap: wrap;}
.gallery_box li:hover img {-moz-transform: scale(1.1);-webkit-transform: scale(1.1);-ms-transform: scale(1.1);-o-transform: scale(1.1);transform: scale(1.1);}
.gallery_box li img{-webkit-transition: transform 0.5s ease;-o-transition: transform 0.5s ease;transition: transform 0.5s ease;}
.gallery_box li:nth-child(odd) .box_data{  }
.gallery_box li:nth-child(even) .box_data{  }
.gallery_box .box_data{ position:absolute; top: 0; left: 0; right:0; bottom:0; color:#fff;}
.gallery_box .box_data span{ position:absolute; top: 50%; transform: translateY(-50%); left:0 ; right:0; font-size:24px;}
.gallery_box li:hover .box_data{ background:rgba(107, 107, 107, 0.55);}

.box_data{position:absolute; top: 0; left: 0; right:0; bottom:0;}
.box_data span{ position:absolute; top: 50%; transform: translateY(-50%); left:0 ; right:0; font-size:24px;font-weight: bold;color: #FFFFFF}


.newCategoryImgWithHeight{width: 100%;object-fit: cover;height: 255px !important;}
.newCategoryImg{width: 100%;object-fit: cover;}
.myGridClassMain div:hover img {-moz-transform: scale(1.1);-webkit-transform: scale(1.1);-ms-transform: scale(1.1);-o-transform: scale(1.1);transform: scale(1.1);}
.myGridClassMain div:hover h2 {-moz-transform: scale(1.1);-webkit-transform: scale(1.1);-ms-transform: scale(1.1);-o-transform: scale(1.1);transform: scale(1.1);}


.hovereffect {
width: 100%;
height: 100%;
float: left;
overflow: hidden;
position: relative;
cursor: default;
background-color: rgba(0, 0, 0, 0.6);
}

.hovereffect .overlay-grid {
width: 100%;
height: 100%;
position: absolute;
overflow: hidden;
top: 0;
left: 0;
background-color: rgba(0, 0, 0, 0.2);
}

.hovereffect:hover .overlay-grid {
background-color: rgba(0, 0, 0, 0.2);
}

.hovereffect img {
display: block;
position: relative;
}

.hovereffect h2 {
text-transform: uppercase;
color: #fff;
position: relative;
font-size: 35px;
padding: 10px;
}
.product_image_box{}
.product_text_box{padding-left: 0;}
.mobile_hide_view{display: none;}


.pro_list1_sidenav ul li:first-child a.active, .pro_list1_sidenav ul li:first-child a:hover {color: #292929;}
  .pro_list1_sidenav ul li a.active{color: #292929;}
.pro_list1_sidenav ul li a.active:hover{color: #292929;}
.pro_list1_sidenav ul {border-radius: 4px;}
.pro_list1_sidenav ul li a {
position: relative;
display: block;
padding: 10px 15px;
border-top: 1px solid;
border-bottom: 1px solid #292929;
font-weight: 500;
font-size: 18px;
transition: all ease-in-out 0.5s;
}
.pro_list1_sidenav ul li:first-child a {border-top: 0px;}
.pro_list1_sidenav ul li:last-child a {border-bottom: 0px;}
.pro_list1_sidenav ul li a .badge {top: unset;right: 5px;background: #ccc;border-radius: 4px;padding: 5px;}
.pro_list1_sidenav ul li:first-child a.active, .pro_list1_sidenav ul li:first-child a:hover {border-top-left-radius: 4px;border-top-right-radius: 4px;}
.pro_list1_sidenav ul li:last-child a.active, .pro_list1_sidenav ul li:last-child a:hover {border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;}
.pro_list1_sidenav ul li a{color: #292929}
.pro_list1_sidenav ul li a:hover .badge,
.pro_list1_sidenav ul li a.active .badge,
.pro_list1_sr .btn-outline-secondary:hover,
{background-color: #000000}
.pro_list1_sidenav ul {
transition: all ease-in-out 0.5s;
    background: #FFFFFF;
color: #292929;
}
.pro_list1_sidenav ul li:first-child a.active, .pro_list1_sidenav ul li:first-child a:hover {color: #292929;}
.pro_list1_sidenav ul li a.active{color: #292929;}
.pro_list1_sidenav ul li a.active:hover{color: #292929;}
.pro-list-sm .frprolist_box_2 .frprolist_2_img {min-height: 250px;max-height: unset;justify-content: center;text-align: center;}
.pro-list-sm .frprolist_box_2 .frprolist_2_img img {max-width: 100%;height: 258px;object-fit: cover;}
.frprolist_box_2 {
margin-bottom: 4rem;
background: #FFFFFF;
border: 1px solid #FFFFFF;
}
.frprolist_box_2 a:hover .frprolist_2_img,
{border-color: #e7331c}
.frprolist_2_img {
object-fit: cover;
justify-content: center;
align-items: center;
transition: all ease-in-out 0.5s;
margin-bottom: 10px;
}
.frprolist_2_img img {
width: 100%;
}
@media (max-width:1199px) {
.frprolist_2_img {
min-height: 220px;
}
}
@media (max-width:991px) {
.mynewmobileresponsive{
width: 100%;
margin: 0 auto;
margin-top: 0px;
margin-bottom: 0px;
overflow-x: auto;
overflow-y: hidden;
-ms-overflow-style: -ms-autohiding-scrollbar;
-webkit-overflow-scrolling: touch;
white-space: nowrap;
}
.frprolist_2_img {
min-height: 270px;
max-height: 270px;
overflow: hidden;
}
.sideBarActive{
font-weight: bold !important;
width: 100%;
height: 100%;
border-top: 0 !important;
border-bottom: 0 !important;
border-right: 0 !important;
}
.sidenav-mob {
overflow-y: hidden;
overflow-x: auto;
    background: #FFFFFF;
color: #292929;
margin-bottom: 20px;
}
.sidenav-mob ul {
/*width: 1526px;
border: 0px !important;*/
}
.sidenav-mob li {
display: inline-block;
}
.pro_list1_sidenav ul li a{
border-top: 0;
border-bottom: 0;
}
}
@media (max-width:575px) {
.pro-list-sm .frprolist_box_2 .frprolist_2_img {
min-height: 250px;
max-height: unset;
justify-content: center;
text-align: center;
}
}
.frprolist_2_tx a:hover h6{color: #FFFFFF}
.frprolist_2_tx a h6 {color: #FFFFFF}
.frprolist_2_tx {
/*padding: 0px 10px;
padding-bottom: 10px;*/
}
.frprolist_2_tx h6 {
transition: all ease-in-out 0.5s;
overflow: hidden;
font-size: 15px;
text-overflow: ellipsis;
display: -webkit-box;
line-height: 24px;
max-height: 24px;
min-height: 24px;
-webkit-line-clamp: 1;
-webkit-box-orient: vertical;
cursor: pointer;
}
.frprolist_2_tx a:hover h6 {text-decoration: underline;}
.prolist2_details {
/* overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
line-height: 18px;
max-height: 92px;
min-height: 92px;
-webkit-line-clamp: 5;
-webkit-box-orient: vertical;
font-size: 13px; */
overflow-y: auto;
overflow-x: hidden;
padding-right: 9px;
line-height: 18px;
max-height: 57px;
min-height: 57px;
font-size: 13px;
width: 220px;
}
/* start scrollbar style here */
.prolist2_details::-webkit-scrollbar {
width: 8px;
}

.prolist2_details::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
border-radius: 10px;
}

.prolist2_details::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 20px 0px #ED1C24}
/* start counter buttons here */
.counter_btns_main {
display: -webkit-box;
display: -ms-flexbox;
display: inline-block;
flex-direction: row-reverse;
-ms-flex-wrap: wrap;
border-radius: 3px;
width: 100%;
}
.add_btn {
float: right;
/*margin-right: 5px;*/
}
.deal1-pri {
margin-bottom: 10px;
}
.counter_btns_main .add_btn a {
width: 50px;
height: 50px;
padding: 16px;
display: inline-flex;
margin-left: auto;
background: #ED1C24;
color: #FFFFFF;
}
.city_listing{
line-height: normal;font-size: 13px;
color: #e7331c; margin-bottom: 8px;
}
.city_listing a{
color: #e7331c;
}
.add_btn a {
padding: 4px 6px;
display: inline-block;
border-radius: 4px;
color: #fff;
font-size: 13px;
transition: all ease-in-out 0.5s;
}
.counter_btns {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
float: left;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
padding-top: 14px;
padding-bottom: 2px;
}


.counter_plus_btn a {
font-size: 20px;
padding: 0px 7px;
color: #ED1C24;
border-radius: 3px;
display: inline-block;
width: 25px;
height: 25px;
border-radius: 50px;
font-weight: bolder;
}
.counter_minus_btn a {
font-size: 20px;
padding: 0px 6px;
color: #ED1C24;
border-radius: 3px;
display: inline-block;
width: 25px;
height: 25px;
border-radius: 50px;
font-weight: bolder;
}
.counter_qty span {
padding: 1px 7px;
/*  border: 1px solid #ccc;*/
color: #FFFFFF;
border-radius: 3px;
display: inline-block;
}

.counter_btns_main.counter-btw-holder {
max-width: 250px;
}
.pro_list1_head {
font-weight: bold;
margin-bottom: 30px;
text-transform: uppercase;
color: #FFFFFF;
font-size: 20px;
}
.prolist2_price {
font-size: 15px;
font-weight: bold;
}
.prolist2_price,
.add_btn a
{color: #FFFFFF}
.sideBarActive{
  font-weight: bold !important;
  width: 100%;
  height: 100%;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 10px solid #292929;
}
.myCustomFeaturedDeals{display: flex;justify-content: center;flex-wrap: wrap;}
#footer-nav-links{color: #FFFFFF}
/*p a {
display: inline-block;
font-weight: 400;
text-align: center;
white-space: nowrap;
vertical-align: middle;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
border: 1px solid transparent;
padding: .375rem .75rem;
font-size: 1rem;
line-height: 1.5;
border-radius: .25rem;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
background: #ED1C24;
color: #FFFFFF;
}*/
.figure-img{margin-bottom: 0}
.bg_custom_section_1 p a {
margin-top: 10px;
display: inline-block;
padding: 11px 25px !important;
border-radius: 4px;
background: #ED1C24;
color: #FFFFFF;
}
/*.bg_custom_section_1{line-height: 40px;}*/
/*.bg_welcome_section_1{line-height: 40px;}*/
/* ===================================
1 slider-new Start Here
====================================== */

.four-img-holder img {
width: 100%;
padding-bottom: 40px;
padding-top: 40px;
}
.p-left-right-rem {
padding-left: 0px;
padding-right: 0px;
}
.p-left-right-cont{
padding-right: 0px;
}

.loader.hide {
display: none;
}


.main-slider img {
height: 970px;
width:1400px;
min-height: 40vh;
margin-left: auto;
margin-right: auto;
}
.main-slider video {
height: 570px;
min-height: 40vh;
min-width: 100vw;
}
.slider-borders {
margin-top: 45px;
margin-bottom: -7px;
}
.swiper-button-next {
display: none;
}
.swiper-button-prev {
display: none;
}

/* ===================================
1 slider-new End Here
====================================== */

/* ===================================
1 navigation start here
====================================== */

.home-btn-section-holder ul li{
margin-bottom:25px;
display: grid;
}
.home-btn-section-holder {
margin-top: 30px;
}

@import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
* {
margin: 0;
padding: 0;
}

.mg-top-pd {
margin-top: 55px;
}
.why-choose-us-text {
text-align: right;
}
.why-choose-us-text img {
width: 90px;
height: 90px;
margin-left: 10px;
}
.why-choose-us-text {
text-align: right;
display: flex;
}
.why-choose-us-text-second {
display: flex;
text-align: left;
}
.why-choose-us-text .text p {
font-size: 13px;
}
.why-choose-us-text-second .text p {
font-size: 13px;
}
.why-use-icon i.fa.fa-home {
padding: 14px 15px;
background-color: #f9c5b4;
color: #fff;
text-align: center;
font-size: 28px;
border-radius: 62px;
-moz-box-shadow: 3px 3px 5px 6px #ccc;
box-shadow: 0px 0px 0px 1px #e6e6e6;
}
.why-use-icon-second i.fa.fa-home {
padding: 14px 15px;
background-color: #f9c5b4;
color: #fff;
text-align: center;
font-size: 28px;
border-radius: 62px;
-moz-box-shadow: 3px 3px 5px 6px #ccc;
box-shadow: 0px 0px 0px 1px #e6e6e6;
}
.why-use-icon-second{
margin-right:20px;
margin-top: 10px;
}
.why-use-icon {
margin-left: 20px;
margin-top: 10px;
}
.product-salt-box-1 {
display: flex;
background-color: #FFFFFF;
}
.product-salt-box-2 {
display: flex;
background-color: #FFFFFF;
}
.product-cate-w {
display: flex;
margin-bottom: 30px;
}
.product-salt-img img {
max-width: 100%;
}
.product-salt-box-3 {
display: flex;
background-color: #FFFFFF;
}

.product-salt-box-1, .product-salt-box-2, .product-salt-box-3 {
flex: 0 0 33.3333%;
-webkit-box-flex: 0;
-ms-flex: 0 0 25%;
flex: 0 0 33.3333%;
max-width: 33.3333%;
}
.product-salt-text {
margin-top: 35px;
margin-left:15px;
}
.product-salt-text span {
font-size: 20px;
font-style: italic;
}
.product-salt-text h4 {
font-size: 28px;
line-height: 45px;
}
i.fas.fa-arrow-circle-right {
color: #767676;
font-size: 18px;
margin-top: 20px;
}
.home-btn-section-holder {
/*position: absolute;
z-index: 11;
margin-top: 19%;
margin-left: auto;
margin-right: auto;
text-align: center;
width: 100%;*/
max-width: 100% !important;
padding: 0 !important;
line-height: 14px !important;
position: absolute !important;
margin-left: unset !important;
text-align: center !important;
top: 50%;
left: 0 !important;
right: 0 !important;
bottom: auto;
transform: translateY(-50%);
}
.home-btn-section-holder a {
font-weight: 700;
text-align: center;
margin-left: auto;
margin-right: auto;
color:#FEFEFE;
text-decoration: none;
}
.home-btn-section-holder a.slide-head-second {
font-size: 42px;
font-weight: 700;
font-weight: normal;
font-family: butler;
}
.home-btn-section-holder a.slide-head-first {
font-size: 27px;
font-weight: normal;
font-style: italic;
font-family: butler;
}
.home-btn-section-holder a.slide-head-pra {
font-size: 15px;
line-height: 27px;
font-weight: 300;
}
.slide-head-pra{font-family: apercu}
a.shop-now {
width: auto !important;
padding: 11px 25px !important;
color: #FFFFFF !important;
background-color: #ED1C24 !important;
margin-top: 10px;
border-radius: 4px;
}
.top-holderrr img {
float: left;
margin-right: 25px;
}
.salt-header-hold-rel {
position: relative;
display: block;
}
.salt-header-hold-abso {
position: absolute;
z-index: 11;
width: 100%;
}
ul.pull-left.info-head-hold {
display: inline-block;
}
ul.pull-left.info-head-hold li {
list-style: none;
display: inline-block;
margin-right: 35px;
}
ul.pull-left.info-head-hold li a {
text-decoration: none;
font-size: 13px;
font-weight: 500;
}
ul.pull-left.info-head-hold li a:hover {
text-decoration: none;
font-size: 13px;
font-weight: 500;
}
ul.pull-right li a {
color: #FFFFFF;
}
ul.pull-right li {
list-style: none;
}
ul.pull-right {
display: inline-block;
}
ul.pull-right li a span {
  font-size: 13px;
font-weight: 500;margin-left: 10px;
}
.topbar-section {
margin-top: 15px;
display: inline-block;
width: 100%;
}
.header-section {
display: inline-block;
width: 100%;
}
.logo.pull-left img {
margin-bottom: 8px;
width: 65px;}
ul.menu-bar.pull-right {
display: inline-flex;
font-size: 17px;
font-weight: 500;
margin-top: 21px;
}
.logo.pull-left a {
font-size: 26px;
color: #fff;
font-weight: 600;
}
ul.menu-bar.pull-right li a {
margin-left: 60px;
font-size: 13px;
font-weight: 400;
}


/*main-slider style start*/
.main-slider {
padding: 0px;
}
.main-slider .swiper-slide img{
width:100%;
height:100vh;
}
.main-slider .swiper-container {
width: 100%;
height: 100%;
margin-left: auto;
margin-right: auto;
}
.swiper-button-prev, .swiper-button-next {
background-color: #f26222;
border-radius: 50%;
height: 50px;
width: 50px;
right: 10%;
line-height: 50px;
background-image: none;
text-align: center;
-webkit-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-ms-transition: all .3s ease-in-out;
-o-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}
.swiper-button-prev:hover, .swiper-button-next:hover {
background-color: #e31e26;
color: #fff;
}
.swiper-button-prev {
left: 10%;
}
.swiper-pagination-bullet-active {
border: 2px solid #f26222 !important;
opacity: 1;
}
.swiper-pagination-fraction, .swiper-pagination-custom, .swiper-container-horizontal > .swiper-pagination-bullets {
bottom: 8px;
}
.swiper-pagination-bullet {
width: 19px;
height: 19px;
display: inline-block;
border-radius: 100%;
background: 0;
border: 2px solid;
}
.swiper-button-prev i {
color: #fff;
font-size: 40px;
position: relative;
right: 4px;
line-height: 48px;
}
.swiper-button-next i {
color: #fff;
font-size: 40px;
position: relative;
right: -3px;
line-height: 48px;
}
.main-slider .swiper-slide {
text-align: center;
widows: 100%;
}
/*main-slider style end*/
/* ===================================
home banner or logo
====================================== */


/* ===================================
burger-menu-style-start-here
====================================== */


.menu-wrap {
background-color: #000000;
position: fixed;
top: 0;
height: 100%;
width: 280px;
margin-left: -280px;
font-size: 1em;
font-weight: 700;
overflow: auto;
transition: .25s;
z-index: 11;
}
.menu-show {
margin-left: 0;
box-shadow: 4px 2px 15px 1px #FEFEFE;
}
.menu-sidebar {
margin: 75px 0 80px 35px;
position: relative;
top: 30px;
}
.menu-sidebar li {
padding: 10px 10px 0;
list-style: none;

}
.menu-sidebar li > a {
color: #FFFFFF;
font-size: 1.18em;
text-transform: capitalize;
position: relative;
text-decoration: none;
}
.menu-sidebar li > a::after {
content: "";
display: block;
height: 0.15em;
position: absolute;
top: 100%;
width: 100%;
left: 50%;
transform: translate(-50%);
background-image: linear-gradient(to right, transparent 50.3%, #ED1C24 50.3%);
transition: background-position .2s .1s ease-out;
background-size: 200% auto;
}
.menu-sidebar li > a:hover::after {
background-position: -100% 0;
}
.menu-sidebar .menu-item-has-children {
position: relative;
}
.menu-sidebar .menu-item-has-children .sub-menu {
display: none;
}
/*.sidebar-menu-arrow::after {
content: "\f107";
font-family: 'FontAwesome';
padding: 10px;
color: #ffffff;
position: relative;
}
.sidebar-menu-arrow:hover::after {
cursor: pointer;
color: #fff;
}
.sidebar-menu-arrow:active::after {
top: 2px;
}*/


/*Hamburger Button*/
.toggle-button {
position: fixed;
width: 44px;
height: 40px;
top: 50px;
left: 40px;
padding: 4px;
transition: .25s;
z-index: 15;
}
.toggle-button:hover {
cursor: pointer;
}
.toggle-button .menu-bar {
position: absolute;
border-radius: 2px;
width: 80%;
transition: .5s;
}
.toggle-button .menu-bar-top {
  border: 4px solid #ED1C24;
border-bottom: none;
top: 0;
}
.toggle-button .menu-bar-middle {
height: 4px;
background-color: #ED1C24;
margin-top: 7px;
margin-bottom: 7px;
top: 4px;
}
.toggle-button .menu-bar-bottom {
  border: 4px solid #ED1C24;
border-top: none;
top: 22px;
}
.button-open {
left: 25px;
}
.button-open .menu-bar-top {
border-color: #ED1C24;
transform: rotate(45deg) translate(8px, 8px);
transition: .5s;
}
.button-open .menu-bar-middle {
background-color: #ED1C24;
transform: translate(230px);
transition: .1s ease-in;
opacity: 0;
}
.button-open .menu-bar-bottom {
border-color: #ED1C24;
transform: rotate(-45deg) translate(7px, -7px);
transition: .5s;
}


/* Text Block */
.wrapper {
width: 40%;
margin: 100px auto 0;
color: #83828D;
}
.wrapper .text {
padding: 30px;
}
.wrapper .text .heading {
margin-bottom: 40px;
font-size: 2em;
}
.wrapper .text p {
line-height: 1.6em;
}
.wrapper .text .buttons {
margin-top: 40px;
}

/* Buttons */
.wrapper .buttons .button {
display: inline-block;
margin-right: 20px;
padding: 20px 25px;
border-radius: 2em;
background-color: #70CE64;
color: #fff;
font-size: .9em;
font-weight: 700;
transition: background-color .3s;
}
.wrapper .buttons .button-secondary {
background-color: #FF6746;
}
.wrapper .buttons .button-primary:hover {
background-color: #84D07A;
}
.wrapper .buttons .button-secondary:hover {
background-color: #FF7D60;
}

/*Active state for the buttons*/
.wrapper .buttons .button-primary:active {
background-color: #70CE64;
}
.wrapper .buttons .button-secondary:active {
background-color: #FF6746;
}

/*Icons*/
.wrapper .buttons .button span {
position: relative;
display: inline-block;
padding-right: 20px;
}
.wrapper .buttons .button span::after {
position: absolute;
font-family: "FontAwesome";
right: -3px;
font-size: 14px;
top: 0;
transition: top .3s, right .3s;
}
.wrapper .buttons .button-primary span::after {
content: "\f019";
}
.wrapper .buttons .button-secondary span::after {
content: "\f178";
}
/*Slight icons animation*/
.wrapper .buttons .button-primary:hover span::after {
top: 4px;
}
.wrapper .buttons .button-secondary:hover span::after {
right: -6px;
}

/* ===================================
cart-style-start-here
====================================== */
.top_bar ul li {
display: inline-block;
padding: 10px 0;
}
li.cart-box a {
color: #fff;
}
.dropdown_cart_btn {
position: absolute;
width: 310px;
box-shadow: 0 0 20px rgba(0,0,0,.20);
transition: all ease-in-out 0.5s;
border-radius: 10px;
z-index: 999;
padding: 15px 0;
}
.product_total_price.text-center {
color: #2e2a2a;
}
.text-center {
text-align: center!important;
}

.w-100 {
width: 100%!important;
}
.float-left {
float: left!important;
}
.outer_cart_btn.dropdown_cart_btn.dropdown-menu.show {
position: absolute !important;
left: 0;
-webkit-transform: translateX(0%) !important;
transform: translateX(0%) !important;
width: 290px !important;
margin-top: 33px;
}
.dropdown-menu.show {
display: block;
}
.dropdown_cart_btn>ul>li {
float: left;
width: 100%;
}
.top_bar ul li {
display: inline-block;
padding: 10px 0;
}
.dropdown_product_box {
padding: 10px 20px;
display: inline-flex !important;
}
.dropdown_product_box {
padding: 10px 20px;
}
.float-left {
float: left!important;
}
.top_bar li:last-child a {
}

li.cart-box a {
color: #fff;
}
.dropdown_product_detail {
padding: 0px 0 10px 20px !important;
width: 100% !important;
}
.dropdown_product_detail {
padding: 10px 0 10px 25px;
}
.float-left {
float: left!important;
}
.dropdown_product_name {
line-height: 17px !important;
font-weight: 500 !important;
white-space: normal !important;
font-size: 14px !important;
letter-spacing: 1px;
color: #FFFFFF !important;
}
a.trash-to-hold i.fas.fa-trash-alt {
position: absolute;
right: 10px;
top: 5px;
font-size: 14px;
color: #f3a087;
}
.dropdown_product_price {
/*color: #f3a087 !important;
font-size: 15px !important;
text-align: right;
margin-top: -15px !important;
font-weight: 700 !important;*/
}
a.dropdown_btn_checkout.active {
color: #FFFFFF !important;
background-color: #ED1C24 !important;
}

.dropdown_btn_checkout.active {
font-size: 12px;
line-height: 18px;
border-radius: 4px;
padding: 10px 25px;
letter-spacing: 1px;
display: inline-block;
text-transform: uppercase;
font-weight: 500;
transition: all ease-in-out 0.5s;
}

.dropdown_cart_btn.dropdown-menu.show ul::-webkit-scrollbar {
width: .45em;
}
.dropdown_cart_btn.dropdown-menu.show ul::-webkit-scrollbar-thumb {
background-color: #FFFFFF;
outline: 1px solid #FFFFFF;
}
.dropdown_cart_btn.dropdown-menu.show ul::-webkit-scrollbar-thumb {
background-color: #FFFFFF;
outline: 1px solid #FFFFFF;
}
.dropdown_cart_btn.dropdown-menu.show ul::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
.dropdown_cart_btn.dropdown-menu.show ul::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
.dropdown-item:focus, .dropdown-item:hover,.dropdown-item:active {
color: #FFFFFF;
text-decoration: none;
background-color: #000000;
}
.pull-right li.cart-box.show {
position: relative;
left: unset;
right: unset;
}
/* ===================================
cart-style-end-here
====================================== */

/* ===================================
burger-menu-style-end-here
====================================== */

span.toggle-button {
display: none;
}
.responsive-logo {
display: none;
}

/* ===================================
responsive start here
====================================== */

/* ===================================*/
@media (min-width:1200px) and (max-width:1350px) {


}
@media (min-width:992px) and (max-width:1199px) {
  .cs_about_second-section p { padding: 0px !important;margin: 0px !important;width: 100% !important; font-size: 15px !important; }
  .cs_icon_section { display: none !important; }
  ul.right_bar_line li {
    padding-right: 0px !important;
}
  ul.topbar-first li {
display: inline;
padding-right: 10px !important;
}
ul.topbar-first li a {
font-size: 12px !important;
}
.right_bar_line li a {
  padding: 0px 6px !important;
  border-right: 1px solid #FFFFFF !important;
  color: #FFFFFF !important;
  font-size: 11px !important;
}
.hide_mobile_responsive_bb.first-res-holde-bg {
height: 55px;
margin-top: -5px;
}
ul.bottom-bar-second {
margin-top: -20px;
margin-right: -22px;
}
.header_1_bg_color ul.menu-bar.pull-right li a {
      margin-left: 25px !important;
  }
ul.menu-bar.pull-right li a {
font-size: 17px;
font-weight: 400;
margin-left: 65px;
}
.main-slider .swiper-slide img {
width: 100%;
height: auto;
}
a.shop-now {
width: auto !important;
padding: 7px 7px !important;
color: #FFFFFF !important;
background-color: #ED1C24 !important;
border-radius: 4px;
margin-top: 5px;
font-size: 10px;
}
.home-btn-section-holder a.slide-head-second {
font-size: 35px;
font-weight: 700;
font-weight: normal;
font-family: butler;
}
.home-btn-section-holder a.slide-head-first {
font-size: 25px;
font-weight: normal;
font-style: italic;
font-family: butler;
}
.why-choose-us-text img {
width: 75px;
height: 75px;
margin-left: 10px;
}
.why-choose-us-text-second img {
width: 75px;
height: 75px;
margin-right: 10px;
}
.img-box-why img {
width: 100%;
}
.product-salt-text h4 {
font-size: 21px;
line-height: 26px;
}
.product-salt-text {
margin-top: 55px;
width: 50%;
}
}
@media only screen and (min-width: 768px) {
.full-window-filter-result-show { display: none; }
.main-homepage-search-auto-mobile-1-main { display: none; }
}
@media (min-width:768px) and (max-width:991px) {
    .soc-fed-1 {
    margin: 10px 0;
}
  h1.color_fff.title_font_color.font_size_40.primary_font.line_height_82.font_weight_700 {
    margin: 20px !important;
    font-size: 30px !important;
}
    .col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl ul li { padding-left: 10px !important; }
  .col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl ul li a { font-size: 14px; }
  .header_1_bg_color ul.menu-bar.pull-right li a { margin-left: 12px !important; font-size: 13px; }
  .cs_about_second-section p {
padding: 0px !important;
margin: 0px !important;
width: 100% !important;
font-size: 15px !important;
}
.cs_icon_section {
display: none !important;
}
  .tab-pane .inner_class_mobile_responsive_grid { -webkit-box-flex: 0 !important; -ms-flex: 0 0 50% !important; flex: 0 0 50% !important; max-width: 50% !important; }
  .brochures-text-holder h4 {
    font-size: 20px;
}
.apply-button a.btn.btn-success {
    border-radius: 30px;
    padding: 4px 13px;
}
}
}
@media (min-width:320px) and (max-width:767px) {
  .inner_flagship_brands_1 img
{
padding-top: 10px !important;
margin: auto !important;
}
.main_flagship_brands
{
display: block !important;
}
.inner_flagship_brands_1
{
margin: auto !important;
width: 100% !important;
display: block !important;
}
    .figure-img{
      height: 100% !important;
      padding: unset !important;
  }
        h1.color_fff.title_font_color.font_size_40.primary_font.line_height_82.font_weight_700 {
    margin: 20px !important;
    font-size: 30px !important;
  }
  .h1_mobile_phone_res { display: none !important; }
      .owl-stage { padding: unset !important; }
  .new-product-box-text .cs1_font_size_12 { overflow-y: hidden;text-overflow: ellipsis;overflow: hidden;white-space: nowrap; }
        .easy-autocomplete-container ul { top: 0 !important; }
  .col-lg-4.col-xs-4.col-md-4.col-sm-4 .cf1-ul1li { padding: unset !important;float: unset !important;padding-top: 10px !important; }
  .col-lg-4.col-xs-4.col-md-4.col-sm-4 .cf1-ul2li { padding: unset !important; float: unset !important; }
    .remove-padding-for-cs { padding: 10px 40px !important; }
  .my-container-for-50 .my-col-for-50 { width: 50%; }
    .new-cart-toggle-round-desktop { display: block !important; }
  li.cart-box.new-cart-toggle-round { display: none; }
  .col-lg-2.col-xs-2.col-md-2.col-sm-2.new-col-cf { width: 50%; }
  .col-lg-12.col-md-12.col-sm-12.col-xs-12.col_ikvg.col-style.new-col-style div {
    text-align: center !important;
  }
        .btn-color {
    background: #ED1C24 !important;
    padding: 8px 10px;
    font-size: 12px;
}
  .cs_text_holder p {  margin-left: 0px !important;
}
.cf_footer_section_heading h4 {
    font-size: 21px !important;
}
ul.text_list_holder li a {   font-size: 12px !important;
}
.cf_footer_section_heading{  margin-bottom: 20px;
}
  .cs_about_second-section p {
padding: 0px !important;
margin: 0px !important;
width: 100% !important;
font-size: 15px !important;
}
.cs_icon_section {
display: none !important;
}
  .responsive-bg-holder-pos {
    display: block !important;
}
  .hide_mobile_responsive_bb { display: none !important; }
  .brochures-text-holder h4 {
      margin-bottom: 40px;
  }
  .media-section-holder iframe {
      height: 165px;
  }
  div#Carrer {
      padding-bottom: 50px !important;
  }
  .apply-button {
      position: absolute;
      bottom: 0px;
      margin-bottom: 8px;
  }
.brochures-text-holder h4 {
    margin-bottom: 40px;
}
.media-section-holder iframe {
    height: 165px;
}
div#Carrer {
    padding-bottom: 50px !important;
}
.apply-button {
    position: absolute;
    bottom: 0px;
    margin-bottom: 8px;
}
  .hide_mobile_responsive { display: none !important; }
  .show_mobile_tab_responsive { display: block !important; }
  .col-lg-13 { -webkit-box-flex: 0; -ms-flex: 0 0 33% !important; flex: 0 0 33% !important; max-width: 33% !important; }
  .hovereffect h2 {     font-size: 20px !important; padding: 0; }
  .h4-tab-container-cl { padding: unset !important; }
  .h4-tab-slider-cl { padding: unset !important; }
  .h4-h-currency { font-size: 16px !important; }
  .col-lg-2.col-md-12.col-sm-12.col-xs-12.h4-tab-responsive-cl { -webkit-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 25%; max-width: 25%; }
  .col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl { -webkit-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 75%; max-width: 75%; }
  .vertical-wrapper { display: none; }
  .slick-slide { margin: 0px 5px !important; }
.full-window-filter-result-show { display: none; }
.header_1_bg_color ul.menu-bar.pull-right li a {margin-left: 10px !important;font-size: 13px}
ul.pull-right li a span {
  font-size: 13px;
  font-weight: 500;
  margin-left: 10px;
}
.home-btn-section-holder ul li {  }
.dropdown_cart_btn.dropdown-menu.show {
position: absolute !important;
left: 20% !important;
-webkit-transform: translateX(-50%) !important;
transform: translateX(-72%) !important;
width: 290px !important;
margin-top: 35px;
}
.pading-los{
padding-right: 0px;
padding-left: 0px;
}
.product-salt-text h4 {
font-size: 21px;
line-height: 26px;
}
.product-salt-text {
margin-top: 15px;
width: 50%;
}
.img-box-why img {
width: 100%;
margin-top: 115px;
}
ul.menu-bar.pull-right li a {
font-size: 15px;
font-weight: 400;
margin-left: 26px;
}
.main-slider .swiper-slide img {
width: 100%;
height: auto;
}
a.shop-now {
width: auto !important;
padding: 14px 14px !important;
color: #FFFFFF !important;
background-color: #ED1C24 !important;
margin-top: 0px;
border-radius: 4px;
}
.third-class-li { margin-top: 0px !important; }
.home-btn-section-holder a.slide-head-second {
font-size: 30px;
font-weight: 700;
font-weight: normal;
font-family: butler;
}
.home-btn-section-holder a.slide-head-pra { font-size: 13px; }
.home-btn-section-holder a.slide-head-first {
font-size: 22px;
font-weight: normal;
font-style: italic;
font-family: butler;
}
.why-choose-us-text img {
width: 75px;
height: 75px;
margin-left: 10px;
}
.why-choose-us-text-second img {
width: 75px;
height: 75px;
margin-right: 10px;
}
.img-box-why img {
width: 100%;
}
}
@media (min-width:320px) and (max-width:767px) {
  .inner_flagship_brands_1 img
{
padding-top: 10px !important;
margin: auto !important;
}
.main_flagship_brands
{
display: block !important;
}
.inner_flagship_brands_1
{
margin: auto !important;
width: 100% !important;
display: block !important;
}
    .figure-img{
      height: 100% !important;
      padding: unset !important;
  }
        h1.color_fff.title_font_color.font_size_40.primary_font.line_height_82.font_weight_700 {
    margin: 20px !important;
    font-size: 30px !important;
  }
  .h1_mobile_phone_res { display: none !important; }
      .owl-stage { padding: unset !important; }
  .new-product-box-text .cs1_font_size_12 { overflow-y: hidden;text-overflow: ellipsis;overflow: hidden;white-space: nowrap; }
        .easy-autocomplete-container ul { top: 0 !important; }
  .col-lg-4.col-xs-4.col-md-4.col-sm-4 .cf1-ul1li { padding: unset !important;float: unset !important;padding-top: 10px !important; }
  .col-lg-4.col-xs-4.col-md-4.col-sm-4 .cf1-ul2li { padding: unset !important; float: unset !important; }
    .remove-padding-for-cs { padding: 10px 40px !important; }
  .my-container-for-50 .my-col-for-50 { width: 50%; }
    .new-cart-toggle-round-desktop { display: block !important; }
  li.cart-box.new-cart-toggle-round { display: none; }
  .col-lg-2.col-xs-2.col-md-2.col-sm-2.new-col-cf { width: 50%; }
  .col-lg-12.col-md-12.col-sm-12.col-xs-12.col_ikvg.col-style.new-col-style div {
    text-align: center !important;
  }
        .btn-color {
    background: #ED1C24 !important;
    padding: 8px 10px;
    font-size: 12px;
}
  .cs_text_holder p {  margin-left: 0px !important;
}
.cf_footer_section_heading h4 {
    font-size: 21px !important;
}
ul.text_list_holder li a {   font-size: 12px !important;
}
.cf_footer_section_heading{  margin-bottom: 20px;
}
  .cs_about_second-section p {
padding: 0px !important;
margin: 0px !important;
width: 100% !important;
font-size: 15px !important;
}
.cs_icon_section {
display: none !important;
}
  .responsive-bg-holder-pos {
    display: block !important;
}
  .hide_mobile_responsive_bb { display: none !important; }
  .brochures-text-holder h4 {
      margin-bottom: 40px;
  }
  .media-section-holder iframe {
      height: 165px;
  }
  div#Carrer {
      padding-bottom: 50px !important;
  }
  .apply-button {
      position: absolute;
      bottom: 0px;
      margin-bottom: 8px;
  }
  a.logo.navbar-brand { position: unset !important; }
  .show_mobile_tab_responsive { display: none !important; }
  td.table-tbody-name{ width: auto !important; }
  td.table-tbody-item-price-actual { text-align: center !important; }
  .cs_sweets_box { margin-bottom: 30px; }
  .slick-slide { margin: 0 5px !important; }
  .customer-logos .slide { padding: unset !important; }
  .remove-margin-slider-section { margin: unset !important; }
  .col-lg-2.col-md-2.col-sm-2.h4-mcart { max-width: 50%; margin-bottom: 5px; }
  .navbar-logo.col-lg-2.col-md-3.col-sm-4.col-xs-12.h4-mlogo { max-width: 50%; }
  .col-lg-2.col-md-4.col-sm-4.col-xs-12.col_ye2q.col-style { max-width: 50%;text-align: left;margin: unset !important; }
  .col-lg-2.col-md-4.col-sm-4.col-xs-12.col_5rbh.col-style { max-width: 50%;text-align: left;margin: unset !important; }
  .col-lg-2.col-md-4.col-sm-4.col-xs-12.col_njm1.col-style { max-width: 50%; text-align: left;margin: unset !important; }
  .cf_footer_h4 { text-align: center; }
  section.cf_footer.cf_footer_h4 .socials-w .socials { float: none !important; display: inline-block; }
  section.cf_footer.cf_footer_h4 .socials-w h2 { margin: unset !important;float: none !important; }
  .cs_sweets_box .img_holder img { width: 100% !important;margin-top: unset !important; }
  .pull-right.check { margin-right: unset !important;}
  .inner_class_mobile_responsive_grid div { text-align: center !important; }
  ul.nav.new_feature_menu_row { margin-bottom: unset !important; }
  ul.nav.new_feature_menu_row li a { font-size: 14px !important;}
  .h4_mobile_responsive_pos_toggle { float: right;margin-top: 10px; }
  .h4_mobile_responsive_pos_toggle i { font-size: 24px !important; }
  .h4_mobile_responsive_pos_logo { float: left;padding: 15px 15px; }
  .navbar-header.my-header img { width: 35% !important; }
  div#eac-container-main-homepage-search-auto-mobile-1 a { color: #000 !important; }
      .new-product-box-image-sub-category.hovereffect div { justify-content: left !important; }
  .hide_mobile_responsive { display: none !important;}
  .show_mobile_responsive { display: block !important;}
  .menu-items-nav { display: none; }
  .vertical-wrapper { display: none; }
  .main-categories-dropdown { position: unset !important; }
  .col-lg-13 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50% !important;
    flex: 0 0 50% !important;
    max-width: 50% !important;
}
    .tab-content-mobile { display: block !important; }
  ul.nav.new_feature_menu_row li { padding-bottom: 20px; }
  .et_pb_section.et_pb_section_0.et_pb_with_background.et_section_regular {
    height: auto !important;
}
.et_pb_column.et_pb_column_1_3.et_pb_column_4.et_pb_css_mix_blend_mode_passthrough.et-last-child {
    width: 100% !important;
    padding: 15px;
}
.et_pb_column.et_pb_column_1_3.et_pb_column_2.et_pb_css_mix_blend_mode_passthrough {
    width: 100% !important;
}
.et_pb_row.et_pb_row_2 {
    display: block !important;
}
.et_pb_text_inner {
    padding: 15px;
}
.et_pb_module.et_pb_image.et_pb_image_0 {
    padding: 15px;
}
.justify-content-end {
    -webkit-box-pack: end!important;
    -ms-flex-pack: end!important;
    justify-content: flex-start !important;
}
.et_pb_column.et_pb_column_1_3.et_pb_column_3.et_pb_css_mix_blend_mode_passthrough {
    width: 100% !important;
    padding: 15px;
}
.et_pb_column.et_pb_column_1_3.et_pb_column_4.et_pb_css_mix_blend_mode_passthrough.et-last-child {
    width: 100% !important;
    padding: 15px
    padding:15px !important;
}
.et_pb_row.et_pb_row_2 {
    margin-top: 0px !important;
}
    .cf_footer_section_1 .contacts_creative {    text-align: center;}
  .cf_footer_section_1 .footer_modern_title {text-align: center !important;margin-top: 32px;}
  .col-sm-6.col-md-7.col-lg-5 { text-align: center !important; }
  .cf_footer_section_1 .footer_modern_list { float: none !important; }
  .cf_footer_section .col-md-12.text-center .font_size_mobile_responsive {font-size: 20px !important;line-height: 25px !important;}
  .cf_footer_section .col-md-12.text-center .font_fize_mobile_responsive_p {font-size: 12px !important;margin-bottom: 40px !important;}
  .new_product_box_main_heading{ text-align: center !important;    float: none !important; }
  .header_ticker {position: unset !important;}
  td.table-tbody-item { text-align: center !important; }
  .check-your-delivery-charges { margin: 10px !important; }
  .col-md-6 .copy_right_text1.text-right {text-align: center !important;}
  .col-md-6 .copy_right_text1.text-left {text-align: center !important;}
   span.font_size_12.float-right.font_size_10.padding_left_5.padding_right_5.special_box_1_bg { right: 5px !important; }
   span.padding_left_5.font_size_12.text_decoration_line_through { position: absolute; top: 0;left: 5px;background: #FFE8E8; opacity: unset !important;padding-right: 5px; }
   p.obw-primary-color.font_weight_900.padding_bottom_10.font_size_13 { font-size: 12px; }
  /*.banner_slider_indicators li { width: 5px;height: 5px; }*/
  .btn-homepage-slider-h a{ padding: 0px 15px !important;font-size: 15px !important;display: inline-block;}
  .btn-homepage-slider-h-text { width: auto !important; }
  .btn-homepage-slider-h { width: auto !important; }
  .btn-homepage-slider-h-text span strong span { font-size: 28pt !important;line-height: 48px !important; }
  .howdy-top-sections .col-lg-8.col-md-8.col-ms-12.col-xs-12 { text-align: center; }
  .howdy-top-sections .col-lg-4.col-md-4.col-ms-12.col-xs-12 { text-align: center; }
  .primary_font.new_product_box_main_heading.padding_bottom_50 { font-size: 25px; padding-bottom: 35px;line-height: 30px; }
  .new-product-box-text .font_size_12 {
    /*display: block;*/
    font-size: 10px;
    /*white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;*/
   }
     .howdy-bg-section-footer { text-align: center; margin-top: 0 !important; }
  .howdy-bg-section-footer { padding: 100px 30px 0px 30px !important; }
  .socila-links .google-play img { margin-bottom: 20px; }
  .socila-links a img { margin: auto; }
  .mocupe-img img { width: 100% !important;top: 100px !important; }
  .pull-right.check .btn.btn-warning.btn-color { font-size: 12px !important; }
  .pull-left.total.head_td_amount { margin-left: unset !important; }
  .billing.fixed { padding: 3px 0px;padding-left: 15px;padding-right: 15px; }
  .pull-left.total.head_td_amount p { font-size: 12px; }
  .easy-autocomplete { width: 100% !important }  .cf-specaility .col-md-3 { margin-bottom: 25px !important; }
  .cf_footer_section .col-sm-3.play-store-cf { margin: 15px;margin-bottom: 5px; }
  .cf_footer_section .col-sm-3.app-store-cf { margin: 15px;margin-top: 0px; }
  .cf_footer_section .col-sm-8 .form-control { width: 100% !important; margin-bottom: 9px; }
  .cf_footer_section .col-sm-4 a { margin: 5px; }
  .acs_main { padding: 8px !important;padding-top: 10px !important;padding-bottom: 10px !important;text-align: center; }
  .acs_main .row { margin-bottom: 10px !important; }
  .acs_main .col-sm-8 { padding: 5px !important; }
  .acs_main .col-sm-8 p { margin: 0px !important;line-height: 25px;text-align: center !important; }
  .acs_main .col-sm-6 { padding: 5px !important; }
  .acs_main .col-sm-6 { padding: 5px !important; }
  .acs_main .col-sm-4 a { text-align: center;margin-bottom: 5px !important;display: flex;justify-content: center;float: none !important; }
  .new_feature_menu_row { text-align: center;flex-flow: wrap;justify-content: center;float: unset !important; }
  .cf_footer_section .col-sm-3.mobile-padding-cate.socialbtn {max-width: initial !important;}
  .col-sm-3.mobile-padding-cate.socialbtn { max-width: 23%;margin-right: 10px;margin: auto; }
  .cf_footer_section { padding: 10px !important; }
  .cf_footer_section .col-sm-4 { margin-bottom: 10px !important;text-align: center; }
  .abouttxt .col-sm-6 h6 {margin-top: 15px;}
  .col-sm-3.mobile-padding-cate.socialbtn{ margin:5px !important;padding-top: 15px !important; }
  .abouttxt{padding: 15px !important;}
  .col-sm-8 .findtxt{ position: relative;width: 100%;min-height: 1px;padding-right: 0 !important;padding-left: 0 !important;}
  .col-sm-3.mobile-padding-cate.socialbtn{margin:5px !important;padding-top: 15px !important;}
  .fa {font-size: 13px;}
  .delfromplace{padding-right: 10px;}
  .pro_list1_head.cat{font-size: 20px;}
  .htxt{ font-size: 18px !important; }
.new_feature_menu_row li {padding-right: 10px !important;}
.bannertxt{ line-height: 1.2; }
.inner_class_mobile_responsive_grid .new-product-box .new-product-box-image-brands a img {max-height: 100px;height: 100px;}
.body_font_color_gl.margin_bottom_10.margin_top_10.info-items-footer {display: grid;margin-top: 10px;}
.body_font_color_gl.margin_bottom_10.margin_top_10.info-items-footer span {padding: unset;padding-top: 5px;}
.new-product-box-image-detail-popup a img { height: auto !important;object-fit: contain !important; }
.new-product-box-detail { padding: 10px !important; }
.new-product-box-image-detail a img { height: auto !important; }
.col-md-4.margin_left_10.country-flag {margin: 0 !important;margin-top: 10px !important;}
.col-lg-12.col-md-12.col-sm-12.col-xs-12.static-contact-page {text-align: center;}
.col-md-6.inner_contact {padding-top: 10px;}
.obw-primary-color.margin_bottom_10.margin_top_10 span {padding-top: 8px;}
ul.static_links {display: grid !important;}
ul.static_links li {margin-right: 0;}
ul.static_links li:last-child {margin-bottom: 10px;}
.back-place-button-mobile { padding: initial; }
.back-menu-button-mobile { width: 100%;padding-left: 15px !important; padding-right: 15px !important; }
.place-order-button-mobile { width: 100%;padding-left: 15px !important; padding-right: 15px !important; }
.my_cart_btn_left_float { width: 100% !important; margin-bottom: 20px; }
.my_cart_btn_left_float a { width: 100% !important; }
.my_cart_btn_right_float a { width: 100% !important; }
.place-order-button-mobile { width: 100% !important; }
.my_cart_btn_right_float { width: 100% !important; }
.cart-item-block.table-tbody-item.cart-item-block.cart-item-figure {
width: 50%;
text-align: center;
margin: auto;
}
.newproductwrap.input-group.width.place-section label {
display: block !important;
}
/*.newproductwrap.input-group.width.place-section {
display: flex;
justify-content: flex-end;
flex-wrap: wrap;
}*/
.cart-item-block.table-tbody-item-remove {text-align: right;}
.cart-total-value {text-align: right;width: 50%;}
.cart-total-label {width: 50%;text-align: left;}
.cart-item {display: grid;width: 100%;}
#eac-container-main-homepage-search-auto-mobile-1 { top: 16px;z-index: 99; }
.main-homepage-search-auto-mobile-1-main { display: flex;justify-content: center;flex-wrap: wrap;}
#eac-container-main-homepage-search-auto-mobile-1 ul li a { color:  }
.filter-results-mobile-responsive { display: none; }
.col-lg-6.col-xs-6.col-md-6.col-sm-6.footer-class-main ul {justify-content: center;flex-wrap: wrap;}
    .col-md-6.col-lg-6.col-xs-6.float-left.p-0.new-product-box-image-thumb {width: 50%;}
    .col-md-6.col-lg-.col-xs-.float-left.p-0 {width: 50%;}
    .obw-primary-color.margin_bottom_10.margin_top_10 {width: 100%;margin-top: 10px !important;margin: auto;margin-bottom: 10px !important;text-align: center;display: grid;}
    .col-lg-6.col-xs-6.col-md-6.col-sm-6.footer-class-main ul li {margin-right: 10px !important;margin-bottom: 10px !important;}
    .col-md-12.col-sm-12.col-xs-12.col-lg-12.footer-class-store-detail {text-align: center !important;}
.main_class_mobile_responsive_grid {
padding: 10px;
padding-top: 30px;
}
.inner_class_mobile_responsive_grid {
width: 50% !important;
height: auto !important;
margin-bottom: 10px !important;
padding-left: 5px;
padding-right: 5px;
margin: auto;
}
.inner_class_mobile_responsive_grid .new-product-box-image {
    float: none !important;
    width: 100% !important;
}
.inner_class_mobile_responsive_grid .new-product-box-text {
    float: none !important;
    width: 100% !important;
    padding: unset !important;
    margin-top: 5px;
}
.new-product-box-image a img {
max-height: 150px !important;
height: 150px !important;
}
.search-main-title-menu-page { width: 100% !important;; }
.imgContent { display: none; }
    .special_menu_top_nav { display: block; }
.mynewtoggleuser { padding: 0 !important;border-right: none !important; }
.header-3-logo-section { display: block !important; }
.mobile-responsive-view-header-3 { background: #FEFEFE !important; }
.app_detail_box {padding: 30px 0 0 0 !important;}
.bg_custom_section_1 p { width: 100% !important; }
.my-custom-section-class-mobile p { width: 100% !important; }
.width_450 { width: auto !important; }
.my-custom-car-sec .price1 h3 { height: 63px !important;left: -10px !important;font-size: 13px !important;padding-left: 10px !important;line-height: 68px !important; }
.my-custom-car-sec .price1 h3 small { font-size: 12px !important;padding-left: 5px !important;margin-right: 5px !important;margin-top: 1px !important; }
.obw-box-height-width { max-width: 90% !important;height: 330px !important;max-height: 330px !important; }
.my-custom-car-sec { padding: 20px !important;}
    .my-payment-center { justify-content: center !important;padding-left: unset !important; }
    .mobile-margin-bottom-mobile { margin-bottom: 20px;margin-left: 7px !important;margin-right: 5px !important;width: 45%; }
    .mobile-padding-cate{ padding-bottom: 25px; text-align: center; padding-left: unset !important; }
    .col-md-3.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
    .col-md-4.mobile-padding-cate p {width: 100% !important;text-align: center !important;}
.mobile-padding-top-cate{ padding-top: 30px;}
.read-more-btn-mobile { text-align: center !important; }
.pagination { margin: 0 !important; }
.pagination>li>a, .pagination>li>span { padding: 4px 7px !important; }
.header_1_height_change{ height: 99px !important;}
.outline-bottom-top-nav { display: none;}
.outline-bottom-top-nav-background { display: none;}
/*td .input-group { width: 100px; }*/
.dropdown_cart_btn_new_toggle { -webkit-transform: translateX(0%) !important;
transform: translateX(0%) !important; }
.bg_custom_section { background-attachment: inherit !important; }
.bg_custom_2_section { background-attachment: inherit !important; }
.bg_custom_3_section { background-attachment: inherit !important; }
.bg_custom_4_section { background-attachment: inherit !important; }
.newProducts { background-attachment: inherit !important; }
#copyrightsSectionHeader2{width: 100% !important;}
.home-btn-section-holder ul li {width: auto !important;}
/*.info-head-hold { display: none !important;}*/
.header_1_bg_color {height: 100px !important;z-index: 0 !important;width: auto !important;position: unset !important;}
#get-user-subscribe-email { width: 100% !important; margin-bottom: 20px; }
.responsive-menu-btn-mobile {background: transparent !important;height: auto !important;z-index: 0 !important;width: auto !important;position: unset !important;}
.responsive-menu-btn-mobile .responsive-logo{top: 10px !important;}
.footer-section-nav-main { padding: 20px 0 90px 20px !important; }
.footer-section-nav-links li { margin-right: 20px; }
.footer-section-nav-social { margin-left: 0 !important;margin-top: 10px; }
.footer-section-nav-social li { padding: 5px; }
.main_menu_filter.form.filter.contact_fields{ margin-left: 0 !important; }
.responsive-menu-btn-mobile .toggle-button{top: 42px !important;left: 9px !important;}
/*.header_1_mobile_responsive .home-btn-section-holder {margin-top: 115px !important;}*/
.homepage-topbar-section { border-bottom: none !important; }
.header_1_bg_color ul.menu-bar.pull-right li a {margin-left: 40px;}
.responsive-menu-btn-mobile .outer_cart_btn {right: 10px;top: 25px; }
.sm_mb_20 { margin-bottom: 25px; }
ul.pull-right li a span { font-size: 12px;margin-left: 10px; }
.counter_plus_btn_popup a { padding: 3px 6px !important; }
.counter_minus_btn_popup a { padding: 3px 6px !important; }
.responsive-btn-header1 { padding: 0px 30px 0px 16px; }
.product_total_price { padding: 15px 25px 5px; }
.bg_custom_section_1 table tbody tr {
display: grid !important;
width: 100% !important;
height: auto !important;
}
.bg_custom_section_1 table tbody tr td{
width: 100% !important;
height: auto !important;
}
.bg_custom_section_1 table tbody tr td h1, .bg_custom_section_1 table tbody tr td p{
padding: 0 !important;
width: 100% !important;
}
.custom_sections_table_mobile_responsive tbody tr {
display: grid !important;
width: 100% !important;
height: auto !important;
}
.custom_sections_table_mobile_responsive tbody tr td {
width: 100% !important;
height: auto !important;
padding-left: 25px !important;
padding-left: 25px !important;
}
.responsive-menu-btn-mobile .dropdown_cart_btn.dropdown-menu.show {
position: absolute !important;
-webkit-transform: translateX(0%) !important;
transform: translateX(0%) !important;
width: 290px !important;
margin-top: 11px;
}
.responsive-logo {
display: block;
}
.mg-top-pd {
padding-left: 0px;
padding-right: 0px;
}

.why-choose-us-text {
text-align: left;
display: flex;
}
.why-choose-us-text .text p {
font-size: 14px;
line-height: 15px;
}
.why-choose-us-text-second .text p {
font-size: 14px;
line-height: 17px;
}
.why-choose-us-text-second img {
width: 90px;
height: 90px;
margin-right: 0px;
}
.why-choose-us-text img {
width: 90px;
height: 90px;
margin-left: 10px;
}
.why-choose-us-text-second {
display: inline-flex;
text-align: left;
flex-direction: row-reverse;
}

.product-salt-text {
margin-top: 10px;
margin-bottom: 30px;
float: right;
}
.product-salt-img {
display: flex;
width: 50%;
}
span.toggle-button {
display: block;
}
ul.pull-right li a span {
font-size: 12px;
font-weight: 500;
margin-left: 4px;
}

.hide-respo {
display: none !important;
}
.toggle-button {
position: absolute;
width: 29px;
height: 40px;
  top: 80px;
left: 13px;
padding: 4px;
transition: .25s;
z-index: 15;
}
.toggle-button .menu-bar-top {
  border: 4px solid #ED1C24;
border-bottom: none;
top: 0;
}
.toggle-button .menu-bar-middle {
height: 4px;
background-color: #ED1C24;
margin-top: 5px;
margin-bottom: 5px;
top: 4px;
}
.toggle-button .menu-bar-bottom {
  border: 4px solid #ED1C24;
border-top: none;
top: 18px;
}
.button-open .menu-bar-top {
transform: rotate(45deg) translate(6px, 6px);
transition: .5s;
}
.home-btn-section-holder {
position: absolute;
z-index: 11;
margin-top: 0;
margin-left: auto;
margin-right: auto;
text-align: center;
width: 100%;
left: 0px;
}
.home-btn-section-holder a.slide-head-first {
font-size: 12px;
font-weight: normal;
font-style: italic;
font-family: butler;
}
.home-btn-section-holder a.slide-head-second {
font-size: 15px;
font-weight: 700;
font-weight: normal;
font-family: butler;
line-height: 20px;
}
.third-class-li {line-height: 12px;margin-top: 0;}
.third-class-li { margin-top: 7px !important; }
.home-btn-section-holder a.slide-head-pra {
font-size: 10px;
line-height: 0px;
font-weight: 300;
display: contents;
}
/*.home-btn-section-holder{ margin-top: 145px }*/
.home-btn-section-holder ul li{ margin-bottom: 5px; }
a.shop-now {
width: auto !important;
padding: 7px 7px !important;
color: #FFFFFF !important;
background-color: #ED1C24 !important;
border-radius: 4px;
margin-top: 10px;
}
ul.pull-left.info-head-hold li {
list-style: none;
display: inline-block;
margin-right: 10px !important;
}
ul.pull-left.info-head-hold li.rem-right-mg {
margin-right: 0px !important;
}
.pull-right {
float: right !important;
text-align: right;
}
.img-box-why img {
width: 100%;
}
.topbar-section {
border-bottom: none;
margin-top: 20px;
display: inline-block;
width: 100%;
}
.main-slider .swiper-slide img {
width: 100%;
height: 370px;
}
ul.pull-left.info-head-hold li a:hover {
color: ;
text-decoration: none;
font-size: 11px;
font-weight: 500;
}
ul.pull-left.info-head-hold li a {
color: ;
text-decoration: none;
font-size: 12px;
font-weight: 500;
}
.col-pd-left-right{
padding-right: 0px;
padding-left: 0px;
}


.product-cate-w {
display: flex;
margin-bottom: 30px;
flex-direction: column;
}
.product-salt-box-1, .product-salt-box-2, .product-salt-box-3 {
flex: 0 0 100%;
-webkit-box-flex: 0;
-ms-flex: 0 0 25%;
flex: 0 0 100%;
max-width: 100%;
}
span.toggle-button.button-open {
position: fixed;
}
ul.sub-menu {
overflow-y: auto!important;
/*height: 140px!important;*/
}
ul.sub-menu li {
margin: 0px;
padding: 0px;
}
ul.sub-menu li a {
font-size: 11px;
}
.login-bt-holds a {
  padding: 5px 8px;
font-size: 14px;
background-color: #ED1C24 !important;
color: #FFFFFF !important;
border-radius: 3px;
font-weight: 400;
display: inline-block;

}

ul.dropdown-menu.show li {
padding: 0px;
margin: 0px;
}
ul.dropdown-menu.show li a {
font-size: 14px;
padding: 2px 11px;
margin: 0px;
}
.login-bt-holds {
margin-left: 11px;
margin-bottom: 15px;
}
.responsive-logo {
position: absolute;z-index: 10;
  top: 60px;
text-align: center;
width: 100%;
}
.responsive-logo a {
font-size: 18px;
color: #fff;
}
.why-use-icon-second {
margin-left: 20px;
margin-top: 10px;
}
}


/* ===================================
responsive end here
====================================== */
.swiper-pagination-bullet-active{
background: #FEFEFE !important;
}
.swiper-pagination-bullet{background: #FEFEFE !important;}
.swiper-pagination-bullet-active{border: 2px solid #FFFFFF !important;;}
.swiper-pagination-bullet{width: 12px !important;height: 12px !important;}
.homepage-slider-show{
width: 100%;
height: 135px;
    background: #FEFEFE;
color: #FFFFFF;
}
section.copy_right_manin{
background: #6FB55E;
color: #FFFFFF;
float: left;
width: 100%;
}
.homepage-slider-show .header-section { border-bottom: none !important; }
.home-deals-anchor {color: #000 !important;}
.homepage-topbar-section ul li a{color: #FEFEFE !important;}
.topbar-section ul li a{color: #FFFFFF}
.homepage-topbar-section ul li a span{color: #FEFEFE !important;}
.homepage-topbar-section ul li a span span{color: #FEFEFE !important;}
/*.homepage-header-section ul li a {color: #FEFEFE !important;}*/
.why-choose-us-bottom{border-top: 1px solid #ccc;margin-bottom: 50px;margin-top: 50px;}
.why-choose-us-bottom-1{border-top: 1.3px solid #ccc;margin-bottom: 50px;margin-top: 50px;}
.silder-mg{font-family: butler}
.arrow-icon a{color: #FEFEFE}

.newProducts .items {
    background: #FFFFFF;
padding: 1.5rem 2.4rem;
margin-bottom: 4rem;
text-align: center;
}
.newBadge {
position: absolute;
padding: 0;
right: 22px;
top: 10px;
text-align: center;
line-height: 26px;
}
.newProducts .productAmount .cartbtn{
width: 50px;
height: 50px;
padding: 16px;
display: inline-flex;
margin-left: auto;
background: #ED1C24;
color: #FFFFFF;
float: right;
}
.newProducts .productAmount {
margin-top: 1rem;
text-align: left;
align-items: center;
}
.newProducts .productAmount .withimage-word-wrap {
display: block;
font-size: 15px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
.newProducts .productAmount span {
display: block;
font-size: 15px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
.deals-name-wrap{
display: block;
font-size: 15px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
width: 100px;
}
/*.newProducts .col-8{
padding-left: 0;
margin-left: 0;
}
.newProducts .col-4{
padding-right: 0;
margin-right: 0;
}*/
.rosePink {
color: #ED1C24;
font-size: 14px !important;
font-weight: bold;
}
.rounded-circle {
border-radius: 50%!important;
}
.bg-secondary {
background-color: #6c757d!important;
color: #fff;
}
.newProducts .items img{
margin-top: 20px !important;
}
.newProducts{
    background: #FFFFFF}
.third-class-li{
margin-top: 37px;
}
.first-slide-text{top: 20px;}
.second-slide-text{top: 40px;}
.third-slide-text{top: 90px;}
.fourth-slide-text{top: 120px;}
.badge-danger{background: #FFE8E8 !important;}
.bg-secondary{background: #292929 !important;}
.ytp-title-text{display: none;}
.ytp-chrome-top .ytp-show-watch-later-title .ytp-share-button-visible .ytp-show-share-title .ytp-show-cards-title{display: none;}
.responsive-logo a img { width: 65px;}
.items_new_class {
            background: #FFFFFF;
        padding: 1.5rem 1.5rem;
    margin-bottom: 0;
}
.new-product-box {
    background: #FFFFFF;
padding: 10px;
}
.new-product-box-detail {
    background: #FFFFFF;
padding: 7px;
}
.new-product-box-detail-popup {
    background: #FFFFFF;
padding: 10px;
}
.item_new_class_height {
height: auto;
min-height: 100%;
max-height: 100%;
}
.frprolist_2_tx {
    margin-top: 1rem;
}
.readmore_desc_new{
line-height: 18px;
max-height: 70px;
min-height: 70px;
font-size: 13px;
}
.readMoreProductDetail{
width: 220px !important;
margin-top: 10px;
}
.header_1_bg_color{
position: fixed;
width: 100%;
z-index: 10;
background-color: #FEFEFE;
height: 100px;}
.bg_reserve_section .inner_welcome_box .form-control{
background: transparent;
border-color: #707070;
color: #FFFFFF;
height: 50px !important;
overflow: hidden;
}
.bg_reserve_section .inner_welcome_box label{
font-size: 15px;
}
.bg_reserve_section .inner_welcome_box button{
width: auto !important;
}
.bg_reserve_section .form-control{
background: transparent;
border-color: #707070;
color: #FFFFFF;
height: 50px !important;
}
.bg_reserve_section label{
font-size: 15px;
}
.bg_reserve_section button{
width: auto !important;
}
.bg_reserve_section input::placeholder { /* Firefox, Chrome, Opera */
color: #FFFFFF;
}

.bg_reserve_section input::-ms-input-placeholder { /* Internet Explorer 10-11 */
color: #FFFFFF;
}

.bg_reserve_section input::-ms-input-placeholder { /* Microsoft Edge */
color: #FFFFFF;
}
input.main_menu_filter.form.filter.contact_fields.top_nav_list_arrows_on_off::placeholder { /* Firefox, Chrome, Opera */
color: #FFFFFF;
font-weight: bold;
font-size: 14px;
}

input.main_menu_filter.form.filter.contact_fields.top_nav_list_arrows_on_off::-ms-input-placeholder { /* Internet Explorer 10-11 */
color: #FFFFFF;
font-weight: bold;
font-size: 14px;
}

input.main_menu_filter.form.filter.contact_fields.top_nav_list_arrows_on_off::-ms-input-placeholder { /* Microsoft Edge */
color: #FFFFFF;
font-weight: bold;
font-size: 14px;
}
input.main_menu_filter.form.filter.contact_fields.top_nav_list_arrows_on_off { background: #FEFEFE;border-color: #FEFEFE;color: #FFFFFF; }
select option {
margin: 40px;
background: rgba(0, 0, 0, 0);
color: #000;
text-shadow: 0 1px 0 rgba(0, 0, 0, 0);
}

.bg_reserve_section1{background-color: #FFFFFF; color: #707070;}
.bg_reserve_section1 .inner_welcome_box .primary_font_family{color: #FFFFFF}
.bg_reserve_section1 .inner_welcome_box h2{color: #707070}
.bg_reserve_section1 .inner_welcome_box{ padding: 60px 60px; }
.bg_reserve_section1 .inner_welcome_box .contact_fields{
background: #FFFFFF;
border-color: #FFFFFF;
color: #000000;
height: 50px !important;
border: 1px solid #000000}
.bg_reserve_section1 .inner_welcome_box label{
font-size: 15px;
}
.bg_reserve_section1 .inner_welcome_box button{
width: auto !important;
}
.bg_reserve_section1 .contact_fields{
background: #FFFFFF;
border-color: #FFFFFF;
color: #000000;
height: 50px !important;
}
.bg_reserve_section1 label{
font-size: 15px;
}
.bg_reserve_section1 button{
width: auto !important;
}
.bg_reserve_section1 input::placeholder { /* Firefox, Chrome, Opera */
color: #000000;
}

.bg_reserve_section1 input:-ms-input-placeholder { /* Internet Explorer 10-11 */
color: #000000;
}

.bg_reserve_section1 input::-ms-input-placeholder { /* Microsoft Edge */
color: #000000;
}
.bg_reserve_section1 select option {
margin: 40px;
background: rgba(0, 0, 0, 0);
color: #000000;
text-shadow: 0 1px 0 rgba(0, 0, 0, 0);
}
/*.header_1_bg_color .header-section ul li a {color: #FFFFFF !important;}*/
.header_1_bg_color .header-section { margin-top: 19px; }

.header_1_height_change{ height: 99px;}
.header_1_bg_color ul.menu-bar.pull-right li a
{ margin-left: 60px;
      text-transform: capitalize;
      }
.header_1_bg_color ul.menu-bar.pull-right li a:hover { color: #ED1C24; }
.counter_popup_main_cart .add_btn_popup a {
padding: 5px !important;
display: inline-flex !important;
margin-left: auto !important;
background: #ED1C24 !important;
color: #FFFFFF !important;
border-radius: 3px;
text-transform: uppercase;
}
.counter_minus_btn_popup a{
font-size: 20px;
padding: 0px 6px;
color: #FFFFFF;
border-radius: 3px;
display: inline-block;
width: 25px;
height: 25px;
font-weight: bolder;
border-radius: 3px;
font-family: fantasy;
}
.counter_plus_btn_popup a {
font-size: 20px;
padding: 0px 7px;
color: #FFFFFF;
border-radius: 3px;
display: inline-block;
width: 25px;
height: 25px;
font-weight: bolder;
font-family: fantasy;
vertical-align: middle !important;
}
.new-close-for-popup{
display: inline-flex !important;
background: #ED1C24 !important;
color: #FFFFFF !important;
border-radius: 3px;
font-family: fantasy;
border-color: transparent;
cursor: pointer;
}
.myNewNavOutline {
border: 1px solid #FFFFFF;
margin: 5px;
display: inline-block;
text-transform: uppercase;
text-align: center;
margin: 3px 3px;
}
.myNewNavOutline a {
padding: 10px 20px;
font-size: 16px;
border-radius: 0px;
border: 1px solid #FFFFFF;
text-decoration: none;
cursor: pointer;
font-weight: bold;
}
.myNewNavOutline a:hover {
color: #000000;
background: #FFFFFF;
}
.cart-box .dropdown_cart_btn a { margin-left: 0 !important;}
.new-login-user-signup .dropdown-menu { left: auto;top: auto; background-color: #ED1C24 !important; color: #FFFFFF !important;}
.new-login-user-signup .dropdown-menu li a { color: #FFFFFF !important;}
.new-login-user-signup .dropdown-menu li a { margin-left: 5px !important; }


.primary_font_family {
font-size: 25px;
font-weight: normal;
font-stretch: normal;
font-style: normal;
line-height: 1.17;
letter-spacing: normal;
text-align: center;
font-family: futurabook;
padding-top: 60px;
margin-bottom: 15px;
}

.menu-page-search-he { text-transform: capitalize;font-weight: bold;font-size: 16px;letter-spacing: 1.5px; }
.shop_page_filters_heading{
                display: flex;
                width: 100%;
                margin: 0px;
                justify-content: space-between;
                padding-bottom: 18px !important;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
                position: relative;
                font-family: 'Cabin', sans-serif !important;
                align-items: center;
        }
.main_menu_filter{padding: 6px;
background: transparent;
border-color: #ED1C24;
color: #FFFFFF;
height: 50px !important;
padding-left: 10px;border-radius: 0 !important;}
.newScroller2-left{
position: relative;
top: -2px;
background-color: #ED1C24 !important;
width: 25px !important;
border-radius: 15px;
height: 25px;
padding-left: 0px;
padding-top: 3px;
font-family: fantasy !important;
color: #FFFFFF !important;
}
.newScroller2-right{
position: relative;
top: -2px;
margin-right: 0px !important;
background-color: #ED1C24 !important;
width: 25px !important;
border-radius: 15px;
height: 25px;
padding-left: 0px;
padding-top: 3px;
font-family: fantasy;
color: #FFFFFF !important;
}
.newScroller2-right .disabled{opacity: 0.8;}
.newScroller2-left .disabled{opacity: 0.8;}
.input-group .input-group-btn .btn-number{
font-family: fantasy;
width: 30px;
height: 30px;
padding: 5px;
}
.input-group .place-section-second .input-number{
width: 30px;
height: 30px;
padding-left: 10px;
padding-top: 4px;
}
.primary-btn
{background-color:#FFFFFF;}
.text-white-color
{color: #ED1C24}
.custom_title_bg_for_page {
background: url() no-repeat center;
background-size: cover;
height: px;
display: table;
width: 100%;
}
.my_cart_btn_left_float{
display: block;
width: 50%;
float: left;
text-align: left;
}
.my_cart_btn_right_float{
display: block;
width: 50%;
float: right;
text-align: right;
}
optgroup { color: #707070;}
.corporate-floor {
text-align: center;
align-self: center;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
}
.menu-item-has-children {
position: relative;
}
.menu-item-has-children .sub-menu {
display: none;
}
/*.sidebar-menu-arrow::after {
content: "\f107";
font-family: 'FontAwesome';
padding: 10px;
color: #FFFFFF;
position: relative;
}
.sidebar-menu-arrow:hover::after {
cursor: pointer;
color: #FFFFFF;
}*/
#copyrightsSectionHeader2 {background: #000;padding: 5px 0;bottom: 0;width: 80%;}
.top-bar-btn-holder { border: 1px solid #FFFFFF !important;border-radius: 4px; }
.top-bar-login-btn a { display: block;padding: 2px;width: 82px;background-color: #ED1C24 !important;text-align: center;color: #FFFFFF !important;margin-right: -3px; }
.top-bar-signup-btn a { display: block;padding: 2px;width: 82px;border: solid 1px #ED1C24 !important;background-color: #ED1C24 !important;text-align: center;color: #FFFFFF !important;border-left: 0;border-radius: 0px; }
.outline-bottom-top-nav {border: 1px solid #ED1C24;position: absolute;top: 55px;width: 100%;}
.btn-warning.focus, .btn-warning:focus {
box-shadow: none;
}
.btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show>.btn-warning.dropdown-toggle:focus {
box-shadow: none;
}

.menu-btn {
display: flex;
margin-top: 0px;
margin-bottom: 60px;
justify-content: center;
}
.menu-btn a {
text-align: center;
padding: 7px 25px;
text-transform: uppercase;
border: 1.5px solid #ED1C24;
color: #FFFFFF;
padding-top: 13px;
}
.category-filter-li { display: block;width: 100%;float: left; }
.category-filter-input { display: inline-block;float: left;margin: auto;vertical-align: middle;margin-top: 6px;margin-right: 3px; }
.brand-filter-input { display: inline-block;float: left;margin: auto;vertical-align: middle;margin-top: 6px;margin-right: 3px; }
.category-filter-item-name { font-size: 13px; }
.filter-count-menu-scroll {overflow-y: auto;overflow-x: hidden;padding-right: 9px;max-height: 264px;min-height: 264px;}
.filter-count-menu-scroll::-webkit-scrollbar {
-webkit-appearance: none !important;
}

.filter-count-menu-scroll::-webkit-scrollbar:vertical {
width: 10px !important;
}

.filter-count-menu-scroll::-webkit-scrollbar:horizontal {
height: 10px !important;
}

.filter-count-menu-scroll::-webkit-scrollbar-thumb {
background-color: rgba(0, 0, 0, .5) !important;
border-radius: 10px !important;
border: 2px solid #FFFFFF !important;
}

.filter-count-menu-scroll::-webkit-scrollbar-track {
border-radius: 10px !important;
background-color: #FFFFFF !important;
}
.filter-count-menu-scroll::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 20px 0px #ED1C24;
}
.filter-count-menu-scroll::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
border-radius: 10px;
}

.dropdown_cart_btn::-webkit-scrollbar {
-webkit-appearance: none !important;
}

.dropdown_cart_btn::-webkit-scrollbar:vertical {
width: 10px !important;
}

.dropdown_cart_btn::-webkit-scrollbar:horizontal {
height: 10px !important;
}

.dropdown_cart_btn::-webkit-scrollbar-thumb {
background-color: rgba(0, 0, 0, .5) !important;
border-radius: 10px !important;
border: 2px solid #FFFFFF !important;
}

.dropdown_cart_btn::-webkit-scrollbar-track {
border-radius: 10px !important;
background-color: #FFFFFF !important;
}
.dropdown_cart_btn::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 20px 0px #ED1C24;
}

.footer-section-nav-links { display: inline-block; float: left; }
.footer-section-nav-main { padding: 20px 50px 40px 50px; }
.footer-section-nav-social { display: inline-block; margin-left: 330px; float: left; }
.obw-secondary-color { color: #FFFFFF }
.obw-secondary-background-color { background:  }
.primary_color:hover { color: #FFFFFF; }
.obw-secondary-color:hover { color: #FFFFFF }
.footer-section2-nav-links { background: #ED1C24; padding: 30px 30px 30px 30px; }
.footer-section2-inner-nav-links { font-size: 25px; font-weight: bold;padding-bottom: 20px;text-transform: uppercase; }
.footer-section-nav-links li a { text-transform: uppercase;font-weight: bold;font-size: 12px;}
.ddcbdm {     position: absolute !important;
-webkit-transform: translateX(0%) !important;
transform: translateX(0%) !important;
width: 290px !important;
margin-top: 11px;
left:  auto !important ;
top: auto !important;border-radius: unset !important; }
.dropdown_cart_btn_new_toggle {      position: absolute !important;
-webkit-transform: translateX(-50%);
transform: translateX(-50%);
width: 290px !important;
margin-top: 11px;
left: auto !important;
top: auto !important;}
.btn-color-outline { background: #FFFFFF; color: #ED1C24 !important; border: 1px solid #ED1C24; }
.my-btn-class-cart { color: #FFFFFF;background: transparent !important;border: transparent !important;cursor: pointer; }
.my-input-class-cart { background: transparent !important;border: transparent !important;color: #FFFFFF !important; }
.my-table-class-cart { color: #FFFFFF}
.table td, .table th { border-top: none; border-bottom: none;vertical-align: middle; text-align: center;}
.product-detail-table td, .product-detail-table td {  border-top: none; border-bottom: none;vertical-align: top; text-align: left;    padding-left: 0;padding-bottom: 0px;padding-top: 5px; }
/*.table thead { border-bottom: 1px solid #ED1C24; }*/

/*#cart-table td .input-group {  width: 100px; }*/
#main-homepage-search-auto { width: 400px !important; }
#main-homepage-search-auto-mobile { width: 300px !important; }
#eac-container-main-homepage-search-auto-mobile { text-align: left; }
.product-name-hcart { letter-spacing: 1.5px;transition: all ease-in-out 0.5s;overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 1;-webkit-box-orient: vertical;cursor: pointer;float: left;width: 112px; }
.searchfields ul li a { color: #000 !important; }
.has-search .form-control {
padding-left: 2.375rem;
}

.has-search .form-control-feedback {
position: absolute;
z-index: 2;
display: block;
width: 2.375rem;
height: 2.375rem;
line-height: 2rem;
text-align: center;
pointer-events: none;
color: #aaa;
}
.liCategoryActive {font-weight: bold;color: #FFFFFF; }
.liBrandActive {font-weight: bold;color: #FFFFFF; }
.liDiscountActive {font-weight: bold;color: #FFFFFF; }
.pagination {
display: inline-block;
padding-left: 0;
margin: 20px 0;
border-radius: 4px;
z-index: 0;
}
.pagination>li {
display: inline;
}
.pagination>li:first-child>a, .pagination>li:first-child>span {
margin-left: 0;
border-top-left-radius: 4px;
border-bottom-left-radius: 4px;
}
.pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
color: #777;
cursor: not-allowed;
background-color: #fff;
border-color: #ddd;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
z-index: 3;
color: #fff;
cursor: default;
background-color: #FFFFFF;
border-color: #FFFFFF;
}
.pagination>li>a, .pagination>li>span {
position: relative;
float: left;
padding: 6px 12px;
margin-left: -1px;
line-height: 1.42857143;
color: #FFFFFF;
text-decoration: none;
background-color: #fff;
border: 1px solid #FFFFFF;
}
.obw-primary-color { color: #ED1C24 }
.obw-primary-color:hover { color: #ED1C24 }
.obw-background-color { background: #ED1C24 }
.obw-background-font-color { color: #FFFFFF }
.obw-cart-btn-new { background: #ED1C24;color: #FFFFFF;border-radius: 4px;display: inline-flex; }
.obw-cart-btn-new:hover { background: #FFFFFF;color: #ED1C24; }

.col-carousel {
margin: 70px 0;
}

/* owl nav */
.owl-prev span, .owl-next span {
color: #FFF;
}

.owl-prev span:hover,
.owl-next span:hover {
color: #8199A3;
}

.owl-prev, .owl-next {
position: absolute;
top: 0;
height: 100%;
}

.owl-prev {
left: -33px;
}

.owl-next {
right: -33px;
}

/* removing blue outline from buttons */
button:focus, button:active {
outline: none;
}
.carousel-main-custom .owl-nav.disabled{ display: block !important;}
.carousel-main-custom .owl-dots {
display: none !important;
}
.my-custom-car-sec .price1 {
position: relative;
width: fit-content;
}
.my-custom-car-sec .price1 h3 {
position: relative;
background: #FFFFFF;
height: 63px;
width: auto;
color: #ED1C24;
right: 0;
left: -18px;
font-size: 16px;
font-weight: bold;
padding-left: 37px;
line-height: 71px;
transition: 0.5s;
}
.my-custom-car-sec .price1 h3:hover {
background: #ED1C24;
color: #FFFFFF;
}
.my-custom-car-sec .price1 h3:after {
content: "";
position: absolute;
top: 0px;
border-top: 32px solid transparent;
border-left: 34px solid #FFFFFF;
border-bottom: 31px solid transparent;
color: #FFFFFF;
right: -34px;
width: 0px;
transition: 0.5s;
}
.my-custom-car-sec .price1 h3:hover:after {
border-left: 34px solid #ED1C24;
color: #ED1C24;
}
.my-custom-car-sec .price1 h3 small {
float: right;
font-size: 15px;
padding-left: 20px;
font-weight: unset;
margin-right: 13px;
margin-top: -1px;
}
.obw-box-height-width { max-width: 77%; margin-left: auto; margin-right: auto; height: 395px; max-height: 395px;margin-bottom: 5px; }
.obw-background-color.obw-background-font-color p { padding: 13px;line-height: 17px;font-size: 14px;font-weight: bold; }
.padding_16 { padding: 16px; }
.mobile-responsive-class-toggle { top: auto;background: #ED1C24;color: #FFFFFF; }
.login-bt-hold-login-signup { background: #ED1C24 !important;color: #FFFFFF !important; }
.my-tr-order-part { border-top: 1px solid #ED1C24; }
.my-tr-order-part td{ padding: 0px;padding-top: 5px; }
.my-tr-order-part-1 td{ padding: 0px;padding-top: 5px; }
.page-wrapper {
width: 100%;
overflow: hidden;
padding: 25px 0 25px 0;
}

.brand_featuers {
padding: 20px 0 0;
text-align: center;
}

.app_image_box {
max-width: 70%;
margin: 0 auto;
}
.img-responsive {
display: block;
max-width: 100%;
height: auto;
}
.app_detail_box {
padding: 130px 0 0 0;
}
.app_detail_box p {
font-size: 19px;
margin-bottom: 20px;
text-align: center!important;
width: 100%;
margin-top: 20px;
}
ul.app_icon-list {
width: 100%;
overflow: hidden;
padding: 0;
margin: 0;
}
ul.app_icon-list li {
display: inline-block;
width: 49%;
float: left;
}
ul.app_icon-list li:after {
display: block;
content: '';
clear: both;
}
ul.app_icon-list li img {
max-width: 80%;
margin: 0 auto;
}
ul.app_icon-list li:last-child {
margin: 0;
float: right;
}
.app_icon-list a.google-play img {
width: 180px;
}
.app_icon-list a.appstore img {
width: 180px;
}
.display_block { display: block; }
.display_flex { display: flex; }
.display_grid { display: grid; }
@media (min-width:768px) {
.menu-show { display: none; }
.header-3-logo-section { display: none; }
}
.border_radius_50 { border-radius: 50%; }
.top_bar .right_contact_links_1 li{position: relative}
.top_bar .right_contact_links_1 li:last-child:after{display: none}
.top_bar .right_contact_links_1 li > a:hover { color: #FFFFFF !important; }
.top_bar .right_contact_links_1 li a{padding: 0 10px}
.top_bar ul li{display: inline-block; padding: 10px 0}
.top_bar a{font-weight: 400; padding: 0 5px; transition:  all ease-in-out 0.5s}
.top_bar i.fa.fa-shopping-cart.fas-shopping-cart {font-size: 15px}
ul.pull-right.right_contact_links_1 li.order-now a {padding: 0 10px !important;color: #FFFFFF !important;font-size: 14px;letter-spacing: normal;font-stretch: normal;}
.text_transform_uppercase { text-transform: uppercase; }
ul.pull-right.right_contact_links_1 li a span { font-size: 14px;}
ul.navbar-nav.text_transform_uppercase.new-navbar-nav li a { font-size: 18px;color: ; }
.fixed-top { -webkit-transition: height 900ms;transition: height 900ms; }
.fixed-top .logo.pull-left img { width: 150px !important;-webkit-transition: width 900ms;transition: width 900ms; }
.fixed-top ul.menu-bar.pull-right { margin-top: 27px !important; transition: all 900ms ease !important;}
ul.pull-right.right_contact_links_1 li.order-now.show a.new-toggle-down-user.show {     padding: 15px !important;
border-right: none !important; }
.mynewtoggleuser{    border-right: 1px solid #FFFFFF;
color: #FFFFFF !important;
font-weight: bold;
font-size: 14px;
letter-spacing: normal;
font-stretch: normal; }
ul.dropdown-menu.mobile-responsive-class-toggle.new-toggle-down-user.show li a {
font-size: 14px;
padding: 5px;
font-weight: bold;
}
ul.dropdown-menu.mobile-responsive-class-toggle.new-toggle-down-user.show li {
padding: 0;
}
.active-cyan-2 input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #292929 !important;
box-shadow: 0 1px 0 0 #292929 !important;
}
.active-cyan .fa, .active-cyan-2 .fa {
color: #292929 !important;
}
.active-cyan .fa::before, .active-cyan-2 .fa::before {
color: #292929 !important;
}
.md-form input:not([type]), .md-form input[type="text"]:not(.browser-default), .md-form input[type="password"]:not(.browser-default), .md-form input[type="email"]:not(.browser-default), .md-form input[type="url"]:not(.browser-default), .md-form input[type="time"]:not(.browser-default), .md-form input[type="date"]:not(.browser-default), .md-form input[type="datetime"]:not(.browser-default), .md-form input[type="datetime-local"]:not(.browser-default), .md-form input[type="tel"]:not(.browser-default), .md-form input[type="number"]:not(.browser-default), .md-form input[type="search"]:not(.browser-default), .md-form input[type="search-md"], .md-form textarea.md-textarea {
-webkit-box-sizing: content-box;
box-sizing: content-box;
color: #292929;
background-color: transparent;
font-weight: 900;
border: none;
border-bottom: 1px solid #292929 !important;
border-radius: 0;
outline: none;
-webkit-box-shadow: none;
box-shadow: none;
-webkit-transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
text-align: center;
}
.md-form .form-control {
height: auto;
padding: .6rem 0 .4rem 0;
background-color: transparent;
border-radius: 0;
}
.form-control-sm {
height: calc(1.5em + 0.5rem + 2px);
padding: 0.25rem 0.5rem;
font-size: 0.875rem;
line-height: 1.5;
border-radius: 0.2rem;
}
input.form-control.form-control-sm.filter::placeholder { /* Firefox, Chrome, Opera */
color: #292929;
font-weight: bold;
}

input.form-control.form-control-sm.filter::-ms-input-placeholder { /* Internet Explorer 10-11 */
color: #292929;
font-weight: bold;
}

input.form-control.form-control-sm.filter::-ms-input-placeholder { /* Microsoft Edge */
color: #292929;
font-weight: bold;
}
.fixed-topbar {
position: fixed;
left: 0;
top: 0;
width: 100%;
box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
z-index: 900;
transition: all .33s cubic-bezier(.694,.0482,.335,1);
-webkit-transition: all .33s cubic-bezier(.694,.0482,.335,1);
-moz-transition: all .33s cubic-bezier(.694,.0482,.335,1);
-o-transition: all .33s cubic-bezier(.694,.0482,.335,1);
-ms-transition: all .33s cubic-bezier(.694,.0482,.335,1);
}
.figgy-image-mos {
-webkit-transition: border-top-color 0.5s linear, border-right-color 0.5s linear 0.1s, border-bottom-color 0.10s linear 0.2s;
transition: border-top-color 0.5s linear, border-right-color 0.5s linear 0.1s, border-bottom-color 0.10s linear 0.2s;
-webkit-animation:spin 5s linear infinite;
-moz-animation:spin 5s linear infinite;
animation:spin 5s linear infinite;
}
@-moz-keyframes spin {
0% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
25% {
-webkit-transform: rotate(15deg);
transform:rotate(15deg);
}
50% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
75% {
-webkit-transform: rotate(-15deg);
transform:rotate(-15deg);
}
100% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
}
@-webkit-keyframes spin {
0% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
25% {
-webkit-transform: rotate(15deg);
transform:rotate(15deg);
}
50% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
75% {
-webkit-transform: rotate(-15deg);
transform:rotate(-15deg);
}
100% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
}
@keyframes spin {
0% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
25% {
-webkit-transform: rotate(15deg);
transform:rotate(15deg);
}
50% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
75% {
-webkit-transform: rotate(-15deg);
transform:rotate(-15deg);
}
100% {
-webkit-transform: rotate(0deg);
transform:rotate(0deg);
}
}
.obw_stylish_font_family { font-family: futurabook !important; }
.search-main-title-menu-page { width: 25%;text-align: center;margin-left: auto;margin-right: auto; }
.contact_fields:disabled, .contact_fields[readonly] {
background-color: #e9ecef;
opacity: 1;
}
.vc_column_container {
padding-left: 0;
padding-right: 0;
}
.vc_column_container > .vc_column-inner {
box-sizing: border-box;
padding-left: 15px;
padding-right: 15px;
width: 100%;
}
.body_font_color{ color: #FFFFFF}
.body_font_color:hover{ color: #FFFFFF}
.cq-flipbox-avatar.cq-shadow, .cq-flipbox-cardavatar.cq-shadow {
-webkit-box-shadow: 0 0 0 3px #fff, 0 0 0 2px #efefef, 0 2px 2px 2px rgba(0,0,0,.2);
-moz-box-shadow: 0 0 0 3px #fff, 0 0 0 2px #efefef, 0 2px 2px 2px rgba(0,0,0,.2);
box-shadow: 0 0 0 3px #fff, 0 0 0 2px #efefef, 0 2px 2px 2px rgba(0,0,0,.2);
}
.cq-flipbox-avatar {
color: #333;
background-color: #fff;
width: 80px;
height: 80px;
font-size: 40px;
line-height: 80px;
text-align: center;
display: inline-block;
position: absolute;
border-radius: 50%;
left: 50%;
-webkit-transform: translateX(-50%) translateY(-50%);
-moz-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
/* top: -40px; */
z-index: 2;
}
.cq-flipbox-flipper {
-webkit-transition: 0.6s;
-webkit-transform-style: preserve-3d;
-moz-transition: 0.6s;
-ms-transition: 0.6s;
transition: 0.6s;
-moz-transform-style: preserve-3d;
transform-style: preserve-3d;
style: preserve-3d;
/* -webkit-backface-visibility: hidden; */
-moz-backface-visibility: hidden;
/* -ms-backface-visibility: hidden; */
/* backface-visibility: hidden; */
position: relative;
width: 100%;
height: 100%;
}
.cq-flipbox-front {
z-index: 1;
}
.cq-flipbox-item {
width: 100%;
height: 100%;
}
.cq-flipbox-front, .cq-flipbox-back, .cq-flipbox-left, .cq-flipbox-right {
/* border: 1px dashed #666; */
-webkit-backface-visibility: hidden;
-moz-backface-visibility: hidden;
/* -ms-backface-visibility: hidden; */
backface-visibility: hidden;
display: block;
position: absolute;
top: 0;
left: 0;
border-radius: 8px;
}
.cq-flipbox-content {
color: #fff;
font-size: 1.1em;
line-height: 150%;
display: block;
width: 90%;
margin: 0 auto;
text-align: center;
text-align: center;
position: relative;
top: 50%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
transform: translateY(-50%);
}
.cq-flipbox-container {
display: block;
position: relative;
margin: 0 auto;
-webkit-perspective: 1000;
-moz-perspective: 1000;
-ms-perspective: 1000;
perspective: 1000;
width: 100%;
height: 200px;
}
.cq-flipbox-container:hover .cq-flipbox-flipper {
transform: rotateY(180deg);
}
.cq-flipbox-front, .cq-flipbox-back {
position: absolute;
width: 100%;
height: 100%;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}
.cq-flipbox-back {
transform: rotateY(180deg);
}
.obw-body-border-solid { border: 4px solid #FFFFFF; }
.cart-button-anchor-disabled {
pointer-events: none;
cursor: default;
opacity: .65;
}
#eac-container-main-homepage-search-auto { margin: auto;justify-content: left;text-align: left;top: 15px; }
.text_decoration_line_through { text-decoration: line-through; }
.special_box_1_bg { background: #FFE8E8 }
.new_product_box_main_heading { color: #292929 }
.new-product-box-image a img { max-height: 235px;height: 235px;object-fit: contain;text-align: center;margin: auto;width: 100%;}
.new-product-box-image-detail a img { max-height: 500px;height: 500px;object-fit: contain;text-align: center;margin: auto;width: 100%; }
.new-product-box-image-detail-popup a img { max-height: 400px;height: 400px;object-fit: contain;text-align: center;margin: auto;width: 100%; }
.new-product-box-image-category a img { max-height: 150px;height: 150px;object-fit: contain;text-align: center;margin: auto;width: 100%; }
.new-product-box-image-sub-category a img { text-align: center;margin: auto;width: 100%; }
.new-product-box-image-brands a img { max-height: 148px;height: 148px;object-fit: contain;text-align: center;margin: auto;width: 100%; }
  .easy-autocomplete input { border-color: #FFFFFF !important;box-shadow: none !important; }
.easy-autocomplete input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
color: #d4d4d4;
opacity: 1; /* Firefox */
}

.easy-autocomplete input:-ms-input-placeholder { /* Internet Explorer 10-11 */
color: #d4d4d4;
}

.easy-autocomplete input::-ms-input-placeholder { /* Microsoft Edge */
color: #d4d4d4;
}
.new-product-box-image-thumb { background: #FFFFFF }
.new-product-box-image-thumb a img {
max-height: 128px;
height: 128px;
object-fit: contain;
text-align: center;
margin: auto;
width: 100%;
}
.iti.iti--allow-dropdown {
display: block !important;
}
/*.new-product-box-text a {
font-size: 14px;
}*/
a.btn.btn-color-outline.font-weight-bold.menu-addition {
font-size: 16px;
border-radius: inherit;
font-weight: unset !important;
}
a.btn.btn-color-outline.font-weight-bold.new-pop-up-timing-off-rest {
font-size: 16px;
font-weight: unset !important;
border-radius: unset;
}
#mainProductDetailPopCart .modal-dialog.modal-lg {
max-width: 1000px;
}
#flashProductDetailPopCart .modal-dialog.modal-lg {
max-width: 1000px;
}
#productGridProductDetailPopCart .modal-dialog.modal-lg {
max-width: 1000px;
}
.modal-content.main-product-detail-popup-cart {
border-radius: unset;
}
.modal-content.flash-product-detail-popup-cart {
border-radius: unset;
}
.modal-content.product-grid-product-detail-popup-cart {
border-radius: unset;
}
a.btn.btn-color-outline.font-weight-bold.main-popup-cart-menu-addition {
font-size: 16px;
border-radius: inherit;
font-weight: unset !important;
}
a.btn.btn-color-outline.font-weight-bold.flash-popup-cart-menu-addition {
font-size: 16px;
border-radius: inherit;
font-weight: unset !important;
}
a.btn.btn-color-outline.font-weight-bold.product-grid-popup-cart-menu-addition {
font-size: 16px;
border-radius: inherit;
font-weight: unset !important;
}
.new-product-box-text a.body_font_color {
display: block;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}

li.nav-item.special_menu_top_nav.obw-primary-color a {
/*color: #ED1C24;*/
border-bottom: 1px solid ;
padding-bottom: 5px;
padding-left: 0;
padding-right: 0
}
b, strong {font-weight: bolder;}
.col-lg-6.col-xs-6.col-md-6.col-sm-6.footer-class-main ul {
display: flex;
}
/*.full-window-filter-result-show { display: none; }*/
.centeredDisplay {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.new-product-box-image-sub-category.hovereffect div {display: flex;align-items: center;justify-content: center;}
.cart-remove {
position: absolute;
top: 1.5rem;
left: 0;
margin: 0;
background-color: transparent;
width: auto;
height: auto;
}
.cart-remove {
border-radius: 50%;
cursor: pointer;
float: right;
margin-top: .14286rem;
padding: .21429rem;
transition: background-color .15s ease;
}
.cart-item-figure {
position: relative !important;
padding-top: 1rem !important;
padding-bottom: 1rem !important;
}
th.table-thead-item {
/*text-align: left;*/
padding-left: unset;
}
td.table-tbody-item {
text-align: left;
}
td.table-tbody-name{
  width: 200px;
}
td.table-tbody-item-price {
text-align: right;
}
td.table-tbody-item-price-actual{
  /*text-align: left;*/
}
td.table-tbody-item-qty {
text-align: center;
}
th.table-thead-item-amount {
text-align: right;
}
th.table-thead-item-qty {
text-align: center;
}
a.cart-remove.icon i {
color: #ED1C24;
}
tbody.table-tbody {
border-top: 1px solid #ED1C24;
/*border-bottom: 1px solid #ED1C24;*/
}
.cart-totals {
list-style: none;
margin-left: 0;
margin-bottom: 1.5rem;
text-align: right;
width: 100%;
}
@media (min-width: 551px){
.cart-item {
padding-left: 25%;
}
.cart-totals {
float: right;
width: 75%;
}
.cart-total-value {
text-align: right;
}
.cart-total-label {
width: 50%;
}
}
@media (min-width: 801px){
.cart-item-block {
display: table-cell;
}
.cart-item {
display: table-row;
padding-left: 0;
}
.cart-totals {
margin-bottom: 1rem;
width: 58.33333%;
}
.table-thead {
display: table-header-group !important;
text-align: left;
}
.cart-item-figure {
float: none !important;
text-align: left !important;
width: 8.33333% !important;
}
.cart-total-value {
width: 50%;
}
.cart-total-label {
display: block;
padding-left: 0;
text-align: left;
}
.cart-total-label, .cart-total-value {
padding: 1rem 0;
}
}
@media (min-width: 1261px){
.cart-totals {
width: 41.66667%;
}
}
.cart-total:after, .cart-total:before {
content: " ";
display: table;
}
.cart-total-label, .cart-total-value {
float: left;
padding: 1rem 0;
}
.cart-total {
border-bottom: 0;
}
.main-class-cart-total {
display: inline-block;
width: 100%;
}
tbody.table-tbody tr {
border-bottom: 1px solid #ED1C24;
}
.cart-total:after {
clear: both;
}
th.table-thead-item-remove { text-align: center; }
td.table-tbody-item-remove { text-align: center; }
.table-thead { display: none; }
/*.cart-item-figure {
text-align: right;
width: 33.33333%;
}*/
table#cart-page-table td, th {
padding: unset;
}
.cart-header-item {
padding-bottom: 1rem !important;
}
.cart-item{ clear: both; }
.cart-total+.cart-total {
border-top: 1px solid #ED1C24;
}
.newproductwrap.input-group.width.place-section label {
display: none;
}
table.table.my-table-class-cart td, th {
padding: unset;
}
.modal-content.flash-product-detail-popup-cart .modal-header {
justify-content: flex-end;
padding-top: 5px;
padding-bottom: 5px;
}
.modal-content.flash-product-detail-popup-cart .modal-header a i{
font-size: 25px;
color: #ED1C24}
.modal-content.main-product-detail-popup-cart .modal-header {
justify-content: flex-end;
padding-top: 5px;
padding-bottom: 5px;
}
.modal-content.main-product-detail-popup-cart .modal-header a i {
font-size: 25px;
color: #ED1C24}
.modal-content.product-grid-product-detail-popup-cart .modal-header {
justify-content: flex-end;
padding-top: 5px;
padding-bottom: 5px;
}
.modal-content.product-grid-product-detail-popup-cart .modal-header a i {
font-size: 25px;
color: #ED1C24}
.body_font_color_gl { color: #FFFFFF }
.price-dash-class { float: left;width: 15px;text-align: center;line-height: 40px; }
.price-range-class { float: left !important;display: block !important;width: 90px !important;text-align: left !important;border-radius: 3px !important;outline: 0 !important;-webkit-box-shadow: 0 1px 1px 0 #ececec;box-shadow: 0 1px 1px 0 #ececec !important;-webkit-transition: all .3s linear;-o-transition: all .3s linear;transition: all .3s linear;min-width: auto !important;-moz-appearance: textfield; }
.body_font_color_gl a:hover{ color: #FFFFFF }
.body_font_color_gl:hover{ color: #FFFFFF }
.field-icon {
float: right;
margin-left: -33px;
margin-top: 16px;
position: relative;
z-index: 2;
right: 10px;
}
div.has-danger .field-icon {
  margin-top: -48px;
}
div.has-danger.input-group .field-icon {
margin-top: 16px;
}
select.contact_fields.w-100.margin_bottom_15.signup-class {
color: #707070;
}
@media (min-width:375px) and (max-width:400px)
{
.main-homepage-search-auto-mobile-1-main .easy-autocomplete {
 width: 310px !important;
}
}
@media (min-width:401px) and (max-width:414px)
{
.main-homepage-search-auto-mobile-1-main .easy-autocomplete {
width: auto !important;
}
}
@media (min-width:360px) and (max-width:369px)
{
.main-homepage-search-auto-mobile-1-main .easy-autocomplete {
width: 300px !important;
}
}
@media (min-width:768px) and (max-width:991px) {
    .soc-fed-1 {
    margin: 10px 0;
}
  h1.color_fff.title_font_color.font_size_40.primary_font.line_height_82.font_weight_700 {
    margin: 20px !important;
    font-size: 30px !important;
}
  .col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl ul li { padding-left: 10px !important; }
  .col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl ul li a { font-size: 14px; }
    .header_1_bg_color ul.menu-bar.pull-right li a { margin-left: 12px !important; font-size: 13px; }
  .cs_about_second-section p {
padding: 0px !important;
margin: 0px !important;
width: 100% !important;
font-size: 15px !important;
}
.cs_icon_section {
display: none !important;
}
  .tab-pane .inner_class_mobile_responsive_grid { -webkit-box-flex: 0 !important; -ms-flex: 0 0 50% !important; flex: 0 0 50% !important; max-width: 50% !important; }
  .h4-search-bb-tab { display: none; }
  .col-lg-2.col-md-12.col-sm-12.col-xs-12.h4-tab-responsive-cl {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 25%;
    max-width: 25%;
}
.col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 75%;
    max-width: 75%;
}
.h4-tab-container-cl {
    padding: unset !important;
}
.col-lg-10.col-md-12.col-sm-12.col-xs-12.h4-tab-responsive-cl {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 100%;
    max-width: 100%;
}
.h4-tab-slider-cl {
    padding: unset !important;
}
.vertical-wrapper {
    display: none;
}
.hide_mobile_responsive {
    display: none !important;
}
.show_mobile_tab_responsive {
    display: block !important;
}
.hovereffect h2 {
    font-size: 20px !important;
    padding: 0;
}
.col-lg-13 {
    -webkit-box-flex: 0 !important;
    -ms-flex: 0 0 33% !important;
    flex: 0 0 33% !important;
    max-width: 33% !important;
}
.slick-slide {
    margin: 0px 5px !important;
}
.h4-h-currency {
    font-size: 16px !important;
    }
  .et_pb_section.et_pb_section_0.et_pb_with_background.et_section_regular {
    height: auto !important;
}
.justify-content-end {
    -webkit-box-pack: end!important;
    -ms-flex-pack: end!important;
    justify-content: flex-start !important;
}
.et_pb_text_inner {
    padding: 15px;
}
.et_pb_module.et_pb_image.et_pb_image_0 {
    padding: 15px;
}
.et_pb_row.et_pb_row_2 {
    padding: 15px !important;
}
.mobile-responsive-class-toggle {     left: -130px; }
.mobile-responsive-input-group { width: 70% !important; margin-left: 0px !important; }
.mobile-responsive-input-group .easy-autocomplete { width: 460px !important; }
.mobile-responsive-input-group .easy-autocomplete #main-homepage-search-auto { width: 460px !important; }
.main_class_mobile_responsive_grid {padding: 10px;padding-top: 30px;}
.col-sm-12.col-lg-3.col-xs-12.margin_bottom_15.inner_class_mobile_responsive_grid { max-width: 50%; }
.col-sm-12.col-lg-2.col-xs-12.margin_bottom_25.inner_class_mobile_responsive_grid {max-width: 33%;}
.col-lg-6.col-xs-6.col-md-6.col-sm-6.footer-class-main li.margin_right_60 {margin-right: 15px;}
.row.body_font_color_gl.margin_bottom_10.margin_top_10 div {max-width: 100%;flex: 100%;text-align: center;margin: auto;margin-bottom: 10px;}
.obw-primary-color.margin_bottom_10.margin_top_10 .col-md-4 span img {width: 50px !important;height: 30px !important;}
.visa-img {width: 50px;padding: 5px;}
.master-card-img {width: 55px;padding: 5px;}
.paypal-img {width: 60px;padding: 5px;}
.discover-img {width: 55px;padding: 5px;}
.american-express-img{width: 60px;padding: 5px;}
.col-lg-12.col-xs-12.col-md-12.col-sm-12.footer-class-main ul.static_links li.margin_right_30 {margin-right: 15px;}
.col-md-3.mobile-padding-cate p {width: 100% !important;}
.col-md-3.mobile-padding-cate {padding-left: 0px !important;padding-right: 0 !important;}
.full-window-filter-result-show { display: block; }
.filter-results-mobile-responsive { display: none; }
.col-sm-12.col-lg-12.col-xs-12 .row.mb-2.new-product-box {width: 49%;max-width: 49%;float: left;margin-right: 20px;}
.inner_class_mobile_responsive_grid .new-product-box .new-product-box-image-brands a img {max-height: 100px;height: 100px;}
}
@media (min-width:992px) and (max-width:1024px) {
  .h4-search-bb-tab { display: none; }
  .hide_mobile_responsive { display: none !important; }
  .show_mobile_tab_responsive { display: block !important; }
  .hovereffect h2 {     font-size: 20px !important; padding: 0; }
  .h4-tab-container-cl { padding: unset !important; }
  .h4-tab-slider-cl { padding: unset !important; }
  .col-lg-10.col-md-12.col-sm-12.col-xs-12.h4-tab-responsive-cl { -webkit-box-flex: 0; -ms-flex: 0 0 83.333333%; flex: 0 0 100%; max-width: 100%; }
  .h4-h-currency { font-size: 16px !important; }
  .col-lg-2.col-md-12.col-sm-12.col-xs-12.h4-tab-responsive-cl { -webkit-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 25%; max-width: 25%; }
  .col-lg-10.col-md-12.col-sm-12.col-xs-12.menu-items-nav.h4-tab-responsive-cl { -webkit-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 75%; max-width: 75%; }
  .vertical-wrapper { display: none; }
  .slick-slide { margin: 0px 5px !important; }
.mobile-responsive-class-toggle {     left: -130px; }
.mobile-responsive-input-group { width: 77% !important; margin-left: 0px !important; }
.mobile-responsive-input-group .easy-autocomplete { width: 676px !important; }
.mobile-responsive-input-group .easy-autocomplete #main-homepage-search-auto { width: 676px !important; }
.main_class_mobile_responsive_grid {padding: 10px;padding-top: 30px;}
.col-sm-12.col-lg-3.col-xs-12.margin_bottom_15.inner_class_mobile_responsive_grid .new-product-box-image a img { height: 200px !important;max-width: 200px !important; }
.col-sm-12.col-lg-3.col-xs-12.margin_bottom_15.inner_class_mobile_responsive_grid {padding: 5px;}
.col-sm-12.col-lg-2.col-xs-12.margin_bottom_25.inner_class_mobile_responsive_grid img { max-height: 100px;height: 100px;}
.col-lg-6.col-xs-6.col-md-6.col-sm-6.footer-class-main li.margin_right_60 {margin-right: 15px;}
.row.body_font_color_gl.margin_bottom_10.margin_top_10 div {max-width: 100%;flex: 100%;text-align: center;margin: auto;margin-bottom: 10px;}
.obw-primary-color.margin_bottom_10.margin_top_10 .col-md-4 span img {width: 50px !important;height: 30px !important;}
.visa-img {width: 50px;padding: 5px;}
.master-card-img {width: 55px;padding: 5px;}
.paypal-img {width: 60px;padding: 5px;}
.discover-img {width: 55px;padding: 5px;}
.american-express-img{width: 60px;padding: 5px;}
.col-lg-12.col-xs-12.col-md-12.col-sm-12.footer-class-main ul.static_links li.margin_right_30 {margin-right: 15px;}
.col-md-3.mobile-padding-cate p {width: 100% !important;}
.col-md-3.mobile-padding-cate {padding-left: 0px !important;padding-right: 0 !important;}
}
.new_feature_menu_row {
    float: right;
  font-size: 14px;
 }
.new_feature_menu_row li {
    padding-right: 22px
}
.new_feature_menu_row li:last-child { padding-right: unset !important; }
.new_feature_menu_row li a{ color: #292929;padding: unset !important;
  }
.new_feature_menu_row li a.active{
  color: #ED1C24 !important;
    border-bottom: 2px solid #ED1C24;
  padding-bottom: 10px !important;
 }
ol.order-list {
counter-reset: item
}
ol.order-list li {
display: block;
padding-top: 15px;
}
ol.order-list li p {
padding-top: 10px;
}
ol.order-list li:before {
content: counters(item, ".") ". ";
counter-increment: item;
color: #292929;
font-weight: bold;
}
ul.unorder-list li:before {
color: #292929;
font-weight: bold;
content: "" !important;
counter-increment: none;
list-style-type: disc !important;
}
/**** New Query ****/
.pd-hold-b {     padding-left: 15px;     padding-right: 15px; }
.footer-width-resp {     width: auto; }
/*====Responsive web-designing styling start=========*/
@media (min-width:1200px) and (max-width:1300px) {
  .footer-cards span {     font-size: 12px;     position: absolute;     margin-left: 0px;     border-radius: 0;     font-weight: bold;     padding: 16px !important; }
  .footer-cards input {     font-size: 12px;     width: 200px !important; }
}
@media (min-width: 992px) and (max-width: 1199px){
  .ft3_social ul li {     font-size: 13px; }
  .footer-head-hold {     font-size: 16px !important; }
  .foote3-nav ul li {     font-size: 13px; }
  .footer-cards input {     font-size: 12px;     width: 170px !important;     height: 41px !important; }
  .footer-cards span {     font-size: 12px;     position: absolute;     margin-left: 0px;     border-radius: 0;     font-weight: bold;     padding: 10px !important; }
}
@media (min-width: 768px) and (max-width: 991px){
  .pd-hold-b {     padding: 0px !important; }
  .ft3_social ul li {     font-size: 13px; }
  .footer-head-hold {     font-size: 16px !important; }
  .foote3-nav ul li {     font-size: 13px; }
}
@media (min-width: 480px) and (max-width: 767px){
  .ft3_social ul li {     font-size: 13px; }
  .footer-head-hold {     font-size: 16px !important; }
  .foote3-nav ul li {     font-size: 13px; }
  .ft3_social.footer3-soc ul li {     margin-left: 0px !important;     margin-right: 10px; }
  .social-copy.justify-content-end {     padding-left: 15px;     margin-bottom: 20px; }
  .footer-width-resp {     width: 100% !important; }
  .footer-cards span {     font-size: 12px;     position: absolute;     margin-left: 0px;     border-radius: 0;     font-weight: bold;     padding: 10px !important; }
}
@media (min-width: 320px) and (max-width: 479px){
  #get-user-subscribe-email { width: 80% !important;margin-bottom: 20px;height: 46px !important; }
  .footer-width-resp {     width: 100% !important; }
  .ft3_social ul li {     font-size: 13px; }
  .footer-head-hold {     font-size: 16px !important; }
  .foote3-nav ul li {     font-size: 13px; }
  .ft3_social.footer3-soc ul li {     margin-left: 0px !important;     margin-right: 10px; }
  .social-copy.justify-content-end {     padding-left: 15px;     margin-bottom: 20px; }
  .footer-cards input {     font-size: 12px;     width: 240px !important;     height: 41px !important; }
  .footer-cards span {     font-size: 12px;     position: absolute;     margin-left: 0px;     border-radius: 0;     font-weight: bold;     padding: 10px !important; }
}
/*====Responsive web-designing styling end=========*/
.cf_footer_section .col-sm-3.mobile-padding-cate.socialbtn {max-width: 23%;margin: auto;}

.dropdown-content a {
    margin-left: auto !important;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  padding: 10px 0px;
  text-decoration: none;
  display: block !important;
  text-align: left;
  padding-bottom: 0px;
  font-size: 12px !important;
}

/*.dropdown-content a:hover {background-color: #f1f1f1;}*/

.dropdown:hover .dropdown-content {
  display: block;
}

ul.dropdown-content li.column a {
    display: block !important;
}

.dropdown:hover .dropdown-content {
  display: block !important;
}
ul.dropdown-content:hover {
  display: block !important;
}
ul.dropdown-content:active {
  display: block !important;
}
ul.dropdown-content:focus {
  display: block !important;
}
ul.dropdown-content li.column a {
    display: block !important;
}

li.column h3 {
  font-size: 12px;
  font-weight: 700;
  color: #333;
  letter-spacing: 1px;
  line-height: 20px;
}


.img-box-holder img {
    width: 100%;
    border: 1px solid #efefef;
    max-width: 176px;
    margin-top: -246px;
}
/*.img-box-holder {
    margin-top: 155px;
    position: absolute;
    left: 13px;
}*/
ul.dropdown-content li {
  /*display: inline-table !important;
  width: 175px !important;
  padding-left: 10px;
  padding-right: 10px;*/
  display: inline-table !important;
  width: 175px !important;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 35px !important;
}

/*ul.dropdown-content {
  border-radius: 5px;
  margin-top: 7px;
  background-color: #ffffff;
  width: 1000px;
  right: 0;
  top: 15px;
  border: 1px solid #efefef;
  z-index: 1 !important;
  padding: 30px !important;
  left: -650px;
  position: absolute;
}*/

.carousel-indicators { z-index: 1; }


.search { position:relative; }
.search-1 { position:relative; }

  .search .search-input-elm { position:absolute; top:-4px; right: 20px;  display: none; width: 260px;}
.search-1 .search-input-elm-1 { position:absolute; top:-4px; right: 37px;  display: none; width: 260px;}

.search .search-input{
  width: 100%;
  background: #fff !important;
  color: #222 !important;
  border: 1px solid #ddd !important;
  padding: 6px 10px;
  /*border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;*/
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}
.search-1 .search-input-1 {
  width: 100%;
  background: #fff !important;
  color: #222 !important;
  border: 1px solid #ddd !important;
  padding: 6px 10px;
  /*border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;*/
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}
.search-submit {
    position: absolute;
    top: 3px;
    right: 10px;
}
.search-submit-1 {
    position: absolute;
    top: 3px;
    right: 10px;
}
.search .search-btn:focus, header .search .search-input:focus { outline:none; }
.search-1 .search-btn-1:focus, header .search-1 .search-input-1:focus { outline:none; }
.search-input-elm .easy-autocomplete { width: 100% !important;  }
.search-input-elm-1 .easy-autocomplete { width: 100% !important;  }
div#eac-container-new-main-homepage-search-auto ul li a {
    margin-left: auto;
    }
div#eac-container-new-main-homepage-search-auto {
    top: 14px;
}
input#new-main-homepage-search-auto {
    font-size: 14px;
}
.fixed-top { height: 80px; -webkit-transition: height 900ms;transition: height 900ms; }
.fixed-top .logo.pull-left img { width: 150px !important;-webkit-transition: width 900ms;transition: width 900ms; }
.fixed-top ul.menu-bar.pull-right { margin-top: 27px !important; transition: all 900ms ease !important;}
span.font_size_12.float-right.font_size_10.padding_left_5.padding_right_5.special_box_1_bg {position: absolute;top: 0;right: 15px; }
ul.dropdown-content {border-radius: 5px;margin-top: 7px;background-color: #ffffff;width: 1000px;right: 0;top: 19px;border: 0px solid #efefef;z-index: 1 !important;padding: 30px !important;left: -616px;position: absolute;}
.img-box-holder {margin-top: 187px;position: absolute;left: 13px; }
.my_cart_btn_left_right_padding { padding: unset; }
.back-menu-button-mobile { padding: unset; }
.place-order-button-mobile { padding: unset; }


.sketchy {
  display: inline-block;
  border: 3px solid #FFFFFF;
  border-radius: 2% 6% 5% 4% / 1% 1% 2% 4%;
  text-transform: uppercase;
  letter-spacing: 0.3ch;
  position: relative;
}

/*.sketchy::before {
  content: '';
  border: 2px solid #FFFFFF;
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%, -50%, 0) scale(1.015) rotate(0.5deg);
  border-radius: 1% 1% 2% 4% / 2% 6% 5% 4%;
}*/
.order-detail-custom .modal-header .minimum-order-limit-image {
  margin: auto;
}
label[for=fomattedaddress]
{
display: none !important;
}
.new_description_style {
  overflow-y: hidden;
  text-overflow: ellipsis;
    max-height: 2em;
  height: 2em;
  overflow: hidden;
}
.dropdown-menu-content:before {
    position: absolute;
    content: "";
    width: 0;
    top: -10px;
    left: 30px;
    height: 0;
  border-left: 10px solid transparent;    border-right: 10px solid transparent;  border-bottom: 10px solid #fff;
}
.dropbtntogglenew::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}
.col-lg-13 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 20%;
  flex: 0 0 20%;
  max-width: 20%;
}
.hidden-visibility { visibility: hidden; }
.main-categories-dropdown { position: absolute;padding: 0; }
.z_index_header_4 { z-index: 1; }
.show_mobile_responsive { display: none;}
.hide_mobile_responsive { display: block;}
.show_mobile_tab_responsive { display: none; }
.modal-ad-lg {
  max-width: 600px;
}
.input-group-append.main-homepage-search-auto-click {
    cursor: pointer;
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
}
/* Style the list */
ul.breadcrumbs {
  padding: 0 10px 10px 0;
  list-style: none;
  background-color: transparent;
  text-align: center;
}

/* Display list items side by side */
ul.breadcrumbs li {
  display: inline;
  font-size: 16px;
}

/* Add a slash symbol (/) before/behind each list item */
ul.breadcrumbs li+li:before {
  padding: 8px;
  color: #FFFFFF;
  content: "/\00a0";
}

/* Add a color to all links inside the list */
ul.breadcrumbs li a {
  color: #FFFFFF;
  text-decoration: none;
}

/* Add a color on mouse-over */
ul.breadcrumbs li a:hover {
  color: #ED1C24;
  text-decoration: underline;
}
td.cart-item-block.table-tbody-item.cart-item-block.cart-item-figure img {
    max-height: 75px;
    height: 75px;
    object-fit: contain;
    text-align: center;
    margin: auto;
    width: 100%;
}
.fb_dialog_content iframe {
    bottom: 65px !important;
}
div#cityWiseMenuSettingsOnOffNew img {
    width: 125px;
}
div#cityWiseMenuSettingsOnOff img {
    width: 125px;
}
.new-cart-toggle-round-desktop { display: none; }
.video-insta .video-insta-a {
    position: absolute;
    display: block;
    background: url("../images/play-btn.png");
    height: 100%;
    width: 100%;
    top: 40%;
    left: 40%;
    background-size: 50px 50px;
    background-repeat: no-repeat;
}
.carousel-inner > .carousel-item {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.table{
  color: unset;
}
.smartbanner__button{
  background: #ED1C24 !important;
  color: #FFFFFF !important;
}
.smartbanner {
  background: unset !important;
}

@media (min-width:320px) and (max-width:767px) {
  .inner_flagship_brands_1 img
{
padding-top: 10px !important;
margin: auto !important;
}
.main_flagship_brands
{
display: block !important;
}
.inner_flagship_brands_1
{
margin: auto !important;
width: 100% !important;
display: block !important;
}
    .figure-img{
      height: 100% !important;
      padding: unset !important;
  }
        }
ul.address li.first:before {
    content: " ";
    width: 1px;
    height: 14px;
    display: inline-block;
    vertical-align: middle;
    margin: 0 25px 0 22px;
    background-color: #fff;
}
.tab-pane.active .row { justify-content: center; }
 
     

     .modal-header img {
  width: 150px;
  margin: auto;
}
p.delivery-charges-show-static .delivery-type-service {
    display: none;
}
p.delivery-charges-show-static label {
    display: none;
}
p.delivery-charges-show-static p {
    display: none;
}




  


 



 








 input[type=search]::-ms-clear {  display: none; }
 input::-ms-clear { display: none; }
  .plus-minus-checkbox-hide-rm { display: none; }
     .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 999999;
    background: url("../images/loading1.gif") 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}

/* Slider */

.slick-slide {
margin: 0px 20px;
}

.slick-slide img {
width: 100%;
}

.slick-slider
{
position: relative;
display: block;
box-sizing: border-box;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
-webkit-touch-callout: none;
-khtml-user-select: none;
-ms-touch-action: pan-y;
touch-action: pan-y;
-webkit-tap-highlight-color: transparent;
}

.slick-list
{
position: relative;
display: block;
overflow: hidden;
margin: 0;
padding: 0;
}
.slick-list:focus
{
outline: none;
}
.slick-list.dragging
{
cursor: pointer;
cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0);
}

.slick-track
{
position: relative;
top: 0;
left: 0;
display: block;
}
.slick-track:before,
.slick-track:after
{
display: table;
content: '';
}
.slick-track:after
{
clear: both;
}
.slick-loading .slick-track
{
visibility: hidden;
}

.slick-slide
{
display: none;
float: left;
height: 100%;
min-height: 1px;
}
[dir='rtl'] .slick-slide
{
float: right;
}
.slick-slide img
{
display: block;
}
.slick-slide.slick-loading img
{
display: none;
}
.slick-slide.dragging img
{
pointer-events: none;
}
.slick-initialized .slick-slide
{
display: block;
}
.slick-loading .slick-slide
{
visibility: hidden;
}
.slick-vertical .slick-slide
{
display: block;
height: auto;
border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
display: none;
}



li.li-filter {
    padding: 10px 5px;
    color: #000;
    text-decoration: unset;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
li.li-filter input {
    vertical-align: middle;
    margin: auto;
    margin-top: -3px;
}

.cate-filter-display-ul {
  list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
}
.cate-filter-display-li {
  float: left;
    margin-right: 6px;
}
h6.my-0 {
    font-size: 14px;
    font-weight: bold;
}
li.list-group-item.d-flex.justify-content-between.lh-condensed strong {
    font-size: 12px;
    font-weight: bold;
}
li.list-group-item.d-flex.justify-content-between.bg-light strong {
    font-size: 12px;
    font-weight: bold;
}
.sh-me-scroll-my {
  overflow-y: auto;
  overflow-x: hidden;
  max-height: 300px;
  min-height: 300px;
}
.new-product-box-image-detail {
    text-align: center;
}
.new-product-box-image-detail img {
    height: 500px;
    max-height: 500px;
}
.owl-carousel .owl-dots {
    display: block;
    text-align: center;
}
.owl-carousel .owl-dots span {
    background: none repeat scroll 0 0 #ccc;
    border-radius: 20px;
    display: block;
    height: 12px;
    margin: 5px 3px;
    width: 12px;
}
.owl-carousel .owl-dots .active span {
    background: none repeat scroll 0 0 #ED1C24;
}
label.inner-option-set-style {
    display: block;
    font-size: 10px;
    color: #722ed1;
    background: #f9f0ff;
    border-color: #d3adf7;
}
span.main-option-set-style {
    display: block;
    color: #722ed1;
    background: #f9f0ff;
    border-color: #d3adf7;
    font-size: 11px;
}
@media (min-width:320px) and (max-width:767px) {
  .new-product-box-image-detail img {
      height: unset;
      max-height: unset;
  }
}
p.category-mi-mx-text {
    font-size: 14px;
    color: #e51313;
    line-height: 18px;
    margin-top: 5px;
}

.profile_page_section {
width: 100%;
margin-bottom: 40px;
padding: 0px 10px;
display: block !important;
}
.custom_container {
max-width: 1140px;
margin: 0 auto;
}
.pofile_list_section_main {
display: flex;
width: 100%;
float: left;
flex-direction: column;
}
.pofile_list_section_header{
display: flex;
flex-direction: column;
padding-bottom: 30px;
}
.pofile_list_section_header span{
font-style: normal;
font-weight: 400;
font-size: 28px;
line-height: 34px;
text-transform: capitalize;
color: #FFFFFF;
}
.pofile_list_section_header h5{
font-style: normal;
font-weight: 700;
font-size: 28px;
line-height: 36px;
text-transform: capitalize;
color: #FFFFFF;
margin: 0px;
}
.pofile_page_main_box {
display: grid;
grid-template-columns: 212px 1fr;
gap: 15px 35px;
width: 100%;
grid-template-rows: auto;
grid-template-areas: "..";
padding: 60px 0px 60px 0px;
}
.pofile_list_section {
mix-blend-mode: normal;
box-sizing: border-box;
width: 100%;
height: 100%;
display: block;
}
.pofile_list_details {
display: flex;
flex-direction: column;
width: 100%;
}
.single_pofile_tab {
background: #ffffff;
border-bottom: 1px solid rgba(0, 0, 0, 0.08);
border-radius: 4px 4px 0px 0px;
padding: 21px 0px 21px 11px;
display: flex;
align-items: center;
position: relative;
}
.single_pofile_tab:last-child {
border-bottom: 0px;
}
.single_pofile_tab i {
color: #000000;
font-size: 12px;
padding-right: 9px;
}
.single_pofile_tab small {
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 18px;
text-transform: capitalize;
color: #000000;
}
.single_pofile_tab small a{
color: #000000 !important;
}
.single_pofile_tab.active {
background: #FFFFFF;
border: 1px solid rgba(0, 0, 0, 0.08);
box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.08);
border-radius: 4px;
position: relative;
z-index: 99;
}



.profile_tabs_data_section {
display: flex;
width: 100%;
flex-direction: column;
overflow: hidden;
}
.profile_tabs_data_header {
display: flex;
justify-content: space-between;
width: 100%;
align-items: center;
padding-bottom: 29px;
border-bottom: 1px solid rgba(0, 0, 0, 0.08);
margin-bottom: 30px;
}
.profile_tabs_data_heading h2 {
font-style: normal;
font-weight: 500;
font-size: 32px;
line-height: 36px;
text-transform: capitalize;
color: #FFFFFF;
margin: 0px;
}
.profile_page_voucher_points_box {
display: flex;
background-image:url('https://static.tossdown.com/images/1c8028e7-5e82-41a8-b794-a1fd478ae941.png');
background-repeat: no-repeat;
align-items: center;
justify-content: center;
width: 159px;
height: 60px;
}
.profile_page_voucher_points_box_data {
display: flex;
align-items: center;
width: 100%;
height: 100%;
justify-content: center;
}
.voucher_points_progress_bar {
width: 36.29px;
height: 42.25px;
display: flex;
align-items: center;
justify-content: center;
box-sizing: border-box;
margin-right: 11px;
}
.voucher_points_progress_bar img{
width: 100%;
height: 100%;
}
.voucher_points_qty {
display: flex;
flex-direction: column;
}
.voucher_points_qty span{
font-style: normal;
font-weight: 500;
font-size: 8.07568px;
line-height: 10px;
text-transform: capitalize;
color: #FFFFFF;
}
.voucher_points_qty strong {
font-style: normal;
font-weight: 800;
font-size: 19.3816px;
line-height: 23px;
text-transform: capitalize;
color: #FFFFFF;
}
.voucher_points_qty small {
font-style: normal;
font-weight: 700;
font-size: 9.69082px;
line-height: 12px;
text-transform: capitalize;
color: #FFFFFF;
}

/*   personal info tab data css */
#personal_info_tab_content {
display: block;
}

.personal_info_tab_content_box {
box-sizing: border-box;
border-radius: 4px;
width: 100%;
}

.personal_info_tab_content {
padding: 0px 0px 0px 0px;
width: 100%;
}
.personal_info_tab_content_list {
display: grid;
width: 100%;
gap: 32px;
}
.personal_info_tab_fields_list {
display: grid;
width: 100%;
gap: 16px;
}
.single_personal_info_tab_field {
display: grid;
width: 100%;
gap: 8px;
}
.single_personal_info_tab_field label {
font-style: normal;
font-weight: 400;
font-size: 12px;
line-height: 18px;
text-transform: capitalize;
color: #FFFFFF;
margin: 0px;
}
.single_personal_info_tab_input_field {
height: 48px;
max-width: 470px;
position: relative;
}
.single_personal_info_tab_input_field input {
background: transparent;
border: 1px solid #FFFFFF;
box-sizing: border-box;
border-radius: 4px;
width: 100%;
height: 100%;
display: flex;
align-items: center;
padding: 0px 35px 0px 16px;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 18px;
text-transform: capitalize;
color: #FFFFFF;
}
.single_personal_info_tab_input_field i {
position: absolute;
right: 18px;
top: 0px;
height: 100%;
display: flex;
align-items: center;
font-size: 12px;
color: #a8a8a8;
}
.personal_info_tab_content_edit_btn {
width: 156px;
height: 48px;
}
.personal_info_tab_content_edit_btn button {
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 17px;
text-transform: capitalize;
color: #ffffff;
background: #0f994b;
border-radius: 4px;
display: flex;
align-items: center;
justify-content: center;
width: 100%;
height: 100%;
border: unset;
}

/*   loyalty points tab data css */

.loyalty_points_tab_content_box {
box-sizing: border-box;
border-radius: 4px;
width: 100%;
}

.loyalty_points_tab_content {
background: linear-gradient(77.72deg, #0F994B 42.2%, #E32528 96.31%);
border-radius: 8px;
padding: 20px;
float: left;
display: block;
background-size: cover;
max-width: 350px;
width: 100%;
}
.loyalty_points_tab_content_data {
display: flex;
align-items: flex-start;
width: 100%;
padding-bottom:30px ;
}
.loyalty_points_tab_content_data figure{
margin-right: 12px;
margin-bottom: 0px;
}

.loyalty_points_tab_content_des {
display: flex;
flex-direction: column;
}
.loyalty_points_tab_content_des span{
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 16px;
text-transform: capitalize;
color: #FFFFFF;
}
.loyalty_points_tab_content_des strong{
font-style: normal;
font-weight: 800;
font-size: 34px;
line-height: 41px;
text-transform: capitalize;
color: #FFFFFF;
padding-bottom: 4px;
}
.loyalty_points_tab_content_des small{
font-style: normal;
font-weight: 800;
font-size: 14px;
line-height: 17px;
text-transform: capitalize;
color: #FFFFFF;
}
.loyalty_points_tab_content_btn{
background: #FFFFFF;
box-shadow: 0px 4px 0px rgba(0, 0, 0, 0.25);
border-radius: 4px;
height: 40px;
max-width: 318px;
display: flex;
align-items: center;
justify-content: center;
}
.loyalty_points_tab_content_btn a{
font-style: normal;
font-weight: 700;
font-size: 13px;
line-height: 16px;
text-transform: capitalize;
color: #109A4C !important;
}

/* Activity logs tab data  */


.activity_logs_tab_content_box {

box-sizing: border-box;
border-radius: 4px;
width: 100%;
overflow: hidden;
}

.activity_logs_tab_content .table-responsive {
scrollbar-width: thin;
}
.activity_logs_tab_content .table-responsive::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
border-radius: 3px;
background-color: #f5f5f5;
height: 4px;
}

.activity_logs_tab_content .table-responsive::-webkit-scrollbar {
width: 5px;
background-color: #f5f5f5;
height: 4px;
}

.activity_logs_tab_content .table-responsive::-webkit-scrollbar-thumb {
border-radius: 3px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
background-color: rgba(15, 153, 75, 0.1);
}


.activity_logs_tab_content {
padding: 0px 0px 20px 0px;
width: 100%;
}
.activity_logs_tab_content table {
margin: 0px !important;
}
.activity_logs_tab_content thead {
background: #F6F6F6;
box-sizing: border-box;
border-radius: 4px;
}

.activity_logs_tab_content thead tr th {
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 18px;
text-transform: capitalize;
color: #000000;
border: unset !important;
padding: 15px 24px !important;
vertical-align: middle;
}
.activity_logs_tab_content tbody tr td {
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 18px;
text-transform: capitalize;
color: #000000;
border: unset !important;
padding: 15px 24px !important;
vertical-align: middle;
}
.activity_logs_tab_content tbody tr {
border-radius: 4px;
}
.activity_logs_tab_content table tbody tr {
background-color: #fff !important;
}
.activity_logs_tab_content table tbody tr:nth-child(even) {
border: 1px solid rgba(0, 0, 0, 0.08);
}
/* change password tab data css */


/* view order tab css */


.view_order_tab_content_box {
box-sizing: border-box;
border-radius: 4px;
width: 100%;
overflow: hidden;
}

.view_order_tab_content {
padding: 0px 0px 0px 0px;
width: 100%;
display: block;
float: left;
}
.view_order_tab_content table {
margin: 0px !important;
}
.view_order_tab_content .table-responsive {
scrollbar-width: thin;
}
.view_order_tab_content .table-responsive::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
border-radius: 3px;
background-color: #f5f5f5;
height: 4px;
}

.view_order_tab_content .table-responsive::-webkit-scrollbar {
width: 5px;
background-color: #f5f5f5;
height: 4px;
}

.view_order_tab_content .table-responsive::-webkit-scrollbar-thumb {
border-radius: 3px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
background-color: rgba(15, 153, 75, 0.1);
}

.view_order_tab_content thead {
background: #F6F6F6;
border-radius: 4px;
border: 1px solid rgba(15, 153, 75, 0.16);
box-sizing: border-box;
}

.view_order_tab_content thead tr th {
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 18px;
text-transform: capitalize;
color: #000000;
border: unset !important;
padding: 15px 10px !important;
vertical-align: middle;
}
.view_order_tab_content tbody tr td {
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 18px;
text-transform: capitalize;
color: #000000;
border: unset !important;
padding: 15px 10px !important;
vertical-align: middle;
}
.view_order_tab_content tbody tr {
border-radius: 4px;
}
.view_order_tab_content table tbody tr {
background-color: #fff !important;
}
.view_order_tab_content table tbody tr:nth-child(even) {
border: 1px solid rgba(0, 0, 0, 0.08);
}
.view_order_Order_status_td a {
color: #e32528 !important;
}
.view_order_action_td p {
margin: 0px;
display: grid;
gap: 4px;
}
.view_order_action_td p a {
color: #e32528 !important;
}
/*  */
.responsive_selector_text {
display: none;
}
.responsive_selector_icon {
display: none;
}
@media (max-width: 450px) {


}
.res_pofile_list_section{
display: none;
}
@media (max-width: 768px) {
.pofile_page_main_box {
grid-template-columns: 1fr;
gap: 25px 35px;
grid-template-areas: ".";
}
.pofile_list_section {
position: relative;
display: flex;
width: 100%;
justify-content: space-between;
align-items: center;

}
.pofile_list_section {
justify-content: center;
flex-direction: column;
}
.responsive_selector_text {
display: block;
width: 100%;
}
.pofile_list_details {
position: absolute;
top: 0px;
z-index: 999;
background: #FFFFFF;
box-shadow: 0px 4px 14px rgb(0 0 0 / 8%);
border-radius: 6px;
visibility: hidden;
}

.responsive_selector_text a {
display: flex;
justify-content: space-between;
width: 100%;
align-items: center;
border: 1px solid rgba(0, 0, 0, 0.08);
border-radius: 4px;
padding: 15px;
height: 48px;
}
.responsive_selector_text a i{
font-size: 14px;
}
.single_pofile_tab.active{

background: #F6F6F6;
box-shadow: unset;
border: unset;
}
.res_pofile_list_section{
width: 100%;
}
.pofile_list_details{
display: none;
}
.responsive_selector_text {
display: flex;
width: 100%;
align-items: center;

justify-content: space-between;
border: 1px solid rgba(0, 0, 0, 0.08);
border-radius: 4px;
padding: 15px;
}
.res_pofile_list_section{
display: flex;
}
.res_pofile_list.dropdown-menu.show {
display: flex;
flex-direction: column;
width: 100%;
background: #FFFFFF;
box-shadow: 0px 4px 14px rgb(0 0 0 / 8%);
border-radius: 6px;
border: unset;
padding: 0px;
}
.single_pofile_tab {
border: unset;
padding: 15px 15px;
}
}
@media(max-width:540px){
.pofile_list_section_header {
display: flex;
padding-bottom: 30px;
flex-direction: row;
align-items: center;
justify-content: center;
}
.profile_tabs_data_heading h2 {
font-size: 24px;
line-height: 29px;
}
.profile_tabs_data_header {
flex-direction: column-reverse;
}
.profile_page_voucher_points_box {
margin-bottom: 24px;
}
.profile_tabs_data_header {
border-bottom: 0px;
margin-bottom: 0px;
padding-bottom: 16px;
}
.single_personal_info_tab_input_field {
width: 100% !important;
max-width: 100%;
}

.personal_info_tab_content_edit_btn {
width: 100%;
}
.loyalty_points_tab_content {
max-width: 100%;
width: 100%;
}
.loyalty_points_tab_content_btn {
max-width: 100%;
}
}


/* account_forget_password_popup stye start */

.account_forget_password_container{
    max-width: 560px !important;
    margin: 20px auto !important;
    padding: 0px 20px !important;
}
.account_forget_password_popup{
    background: var(--account_forget_password_popup_bg_color);
    border-radius: 4px;
    padding: 32px 15px 72px 15px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    pointer-events: auto;
}
#account_forget_password_popup{
    padding: 0px !important;
}

.account_forget_password_popup_des{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    padding-bottom: 25px;
    flex-direction: column;
    text-align: center;
}
.account_forget_password_popup_des h5{
    font-style: normal;
    font-weight: 700;
    font-size: 21px;
    line-height: 25px;
    color: var(--account_forget_password_popup_heading_color);
    margin: 0px;
    padding-bottom: 9px;
}
.account_forget_password_popup form{
    width: 100%;
}

.account_forget_password_popup_input{
    display: flex;
    width: 100%;
    justify-content: center;
    flex-direction: column;
    max-width: 370px;
    margin: 0 auto;
}
.account_forget_password_popup_input_field{
    display: flex;
    flex-direction: column;
    width: 100%;
    padding-bottom: 15px;
}
.account_forget_password_popup_input_field input{
    background: var(--account_forget_password_popup_input_bg_color);
    border: 1px solid var(--account_forget_password_popup_input_border_color);
    border-radius: 2px;
    height: 44px;
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 16px;
    display: flex;
    align-items: center;
    color: var(--account_forget_password_popup_input_text_color);
    padding-left: 15px;
    width: 100%;
}
.account_forget_password_popup_input_field label.response .forget-pass-alert-danger{
    font-size: 12px;
    color: red;
    margin: 0px;
    padding-top: 5px;

}
.account_forget_password_popup_input_field label.response .forget-pass-alert-success{
font-size: 12px;
color: green;
margin: 0px;
padding-top: 5px;

}
.account_forget_password_popup_btn{
    display: grid;
    align-items: center;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    width: 100%;
}
.account_forget_password_popup_btn a{
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 17px;
    text-transform: capitalize;
    color: var(--account_forget_password_popup_btn_text_color) !important;
    background: var(--account_forget_password_popup_btn_bg_color);
    border-radius: 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 44px;
}
.account_forget_password_popup_btn button{
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 17px;
text-transform: capitalize;
color: var(--account_forget_password_popup_btn_text_color) !important;
background: var(--account_forget_password_popup_btn_bg_color);
border-radius: 2px;
display: flex;
align-items: center;
justify-content: center;
width: 100%;
height: 44px;
border: unset;
}
@media (max-width: 540px) {
    .account_forget_password_popup_input {
        flex-direction: column;
        align-items: center;
    }
    .account_forget_password_popup_input_field label.error {
        text-align: center;
    }
    .account_forget_password_popup_btn {
        padding-left: 0px;
        padding-top: 15px;
    }

}
@media (max-width: 767px) {
    .account_forget_password_container  {
        margin: 20px auto !important;
    }
}
.feature_section_btn {
    display: flex;
    width: 100%;
    justify-content: center;
    text-align: center;
    padding-bottom: 70px;    
}
.feature_section_btn a {
display: flex;
 align-items: center;
border: 1px solid #2A2A2A;
border-radius: 2px;
width: 131px;
height: 48px;
justify-content: center;
font-family: 'Poppins';
font-style: normal;
font-weight: 750;
font-size: 13px;
line-height: 16px;
text-transform: uppercase;
color: #2A2A2A;
}
/* account_forget_password_popup stye end  */
