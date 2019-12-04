<?php
use GuzzleHttp\Client;

$client = new Client([
      'http_errors' => false,
      'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
    ]);
?>

      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">

            <?php foreach ($menu['data'] as $m): ?>
              <li class="sub-menu active">
                  <a class="" href="#">
                      <i class="icon-github"></i>
                      <span><?= $m['id_menu'] ?></span>
                  </a>
              </li>

              <?php
                  $response = $client->request('GET', 'menu', [
                    'query' => [
                      'menuId' => $m['id']
                    ]
                  ]);

                  $result = json_decode($response->getBody()->getContents(), true);
              ?>

              <?php foreach ($result['data'] as $sm): ?>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span><?= $sm['title'] ?></span>
                    </a>
                </li>
              <?php endforeach ?>

            <?php endforeach ?>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->