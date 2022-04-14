<?php $uri = current_url(true);
 
$segment = $uri->getSegment(2); 
 
?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link <?php  if($segment == 'dashboard') {echo " ";} else {echo "collapsed";}   ?>  " href="/">

                <span>Input Data </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link  <?php  if($segment == 'informasititikpantau') {echo " ";} else {echo "collapsed";}   ?>"
                href="/hasil">
                <span>Hasil</span>
            </a>
        </li>
        </li>
</aside>

<!-- End Sidebar-->