
<?php include'header.php';

use GuzzleHttp\Client;
//Simple Proxy to authenticate user and return Projects data.
require 'vendor/autoload.php';

if($_GET['cat']){
   $cat = $_GET['cat'];
   switch ($cat) {
      case "shopping":
         $path = 'ShoppingMall';
         break;
      case "germanfood":
         $path = 'germanfood';
         break;
      case "bars":
         $path = 'bars';
         break;
      case "department":
         $path = 'stores';
         break;
      case "hotel":
         $path = 'hotel';
         break;
      case "hostel":
         $path = 'hostel';
         break;
      case "places":
         $path = 'places';
         break;
      default:
        $path = '';
   }
}


// I user Guzzle Client but we can do it with Curl aswell.
$client = new Client();
$prodUrl = 'http://192.168.1.34/Testing/index.php/api/product/'.$path.'';

//Returns HTTP 301 (Max redirects followed) when using BASIC_AUTH, I used COOKIE Header from POSTMAN.
$response = $client->get($prodUrl, [
   'allow_redirects' => [
      'max' => 5,
   ]
]);

$json = $response->getBody()->getContents();
$result = json_decode($json, true);

?>
<!-- Page sub-header with redish color -->
<div id="page_header" class="page-subheader uh_flat_redish ">
   <div class="bgback"></div>

   <!-- Animated Sparkles -->
   <div class="th-sparkles"></div>
   <!--/ Animated Sparkles -->

   <!-- Sub-Header content wrapper with custom min height .min-300  -->
   <div class="ph-content-wrap min-300">
      <div class="ph-content-v-center">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <!-- Breadcrumbs -->
                  <ul class="breadcrumbs fixclear">
                     <li><a href="index.php">Home</a></li>
                     <li>List</li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <!--/ col-sm-6 -->

               <div class="col-sm-6">
                  <!-- Sub-header titles -->
                  <div class="subheader-titles">
                     <h2 class="subheader-maintitle">Menu</h2>
                     <h4 class="subheader-subtitle"></h4>
                  </div>
                  <!--/ Sub-header titles -->
               </div>
               <!--/ col-sm-6 -->
            </div>
            <!--/ row -->
         </div>
         <!--/ container -->
      </div>
      <!--/ .ph-content-v-center -->
   </div>
   <!--/ Sub-Header content wrapper -->
</div>
<!--/ Page sub-header -->

<!-- Products category section with custom top padding -->
<section class="hg_section ptop-60">
   <div class="container">
      <div class="row">
         <!-- Content with left sidebar -->
         <div class="left_sidebar col-md-9">
            <!-- Title with bold style -->
            <!-- Products list -->
            <ul class="products clearfix">
               <?php

               foreach ($result as $key => $value)
               {
                  $image = base64_decode($value['image']);
                  ?>
                  <!-- Product #2 -->
                  <li class="product">
                     <div class="product-list-item prod-layout-classic">
                        <!-- Badge container -->

                        <!--/ Badge container -->

                        <!-- Product container link -->
                        <a href="post.php?id=<?php echo $value['id']?>">
                           <!-- Image wrapper -->
                           <span class="image kw-prodimage">
											<!-- Primary image -->
											<img class="kw-prodimage-img" src="<?php echo $value['image']; ?>" />
										</span>
                           <!--/ Image wrapper -->

                           <!-- Details -->
                           <div class="details kw-details fixclear">
                              <!-- Title -->
                              <h3 class="kw-details-title"> <?php echo $value['name']; ?></h3>

                              <!-- Description -->
                              <p class="desc kw-details-desc">
                                 <?php echo $value['address']; ?>
                              </p>

                              <!--/ Price -->
                           </div>
                           <!--/ details fixclear -->
                        </a>
                        <!-- Product container link -->

                        <!-- Actions -->
                        <div class="actions kw-actions">
                           <a href="post.php?id=<?php echo $value['_id']?>" rel="nofollow" class="actions-addtocart add_to_cart_button product_type_simple">View Details</a>
                        </div>
                        <!--/ Actions -->
                     </div>
                     <!--/ product-list-item -->
                  </li>

                  <?php

               }
               ?>
            </ul>

            <!--/ Products list -->
         </div>
         <!-- Sidebar left -->
         <?php include'sidebar.php';?>
         <!--/ Sidebar left col-md-3 -->
      </div>
      <!--/ row -->
   </div>
   <!--/ container -->
</section>
<!--/ Products category section with custom top padding -->


<?php include'footer.php';?>