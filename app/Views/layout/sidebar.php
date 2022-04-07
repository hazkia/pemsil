<?php $uri = current_url(true);
 
$segment = $uri->getSegment(2); 
 
?>
 
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
 
 
   <ul class="sidebar-nav" id="sidebar-nav">
 
       <li class="nav-item">
           <a class="nav-link <?php  if($segment == 'dashboard') {echo " ";} else {echo "collapsed";}   ?>  "
               href="/">
      
               <span>Input Data </span>
           </a>
       </li><!-- End Dashboard Nav -->
 
   
       <li class="nav-item">
           <a class="nav-link  <?php  if($segment == 'informasititikpantau') {echo " ";} else {echo "collapsed";}   ?>"
              href="/hasil">
               <span>Hasil</span>
           </a>
       </li><!-- End Informasi Titik Pantau Nav -->
 
       <li class="nav-item">
           <a class="nav-link  <?php  if($segment == 'titikpantau') {echo " ";} else {echo "collapsed";}   ?>"
                href="/grafik">
               <span>Grafik</span>
           </a>
       </li><!-- End Titik Pantau Nav -->
 
 
 
 
 
 
       </li><!-- End Logout Page Nav -->
</aside>
 
<!-- End Sidebar-->
 
