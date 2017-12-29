<?php
/**
 *
 */
class Pages extends CI_Controller
{

  public function view($page = 'home') // ここで初期値を設定している。
  //初期値はhomeになり、この場合devault_url/index.php/controller/homeになる。
  {
    // if (!file_exists(APPPATH. 'views/pages/'.$page.'.php'))
    // { //
    //   show_404();
    // }

  $data['title'] = ucfirst($page); //いわゆるrubyでいうcapitalize
  // 上から順番に読み込まれるようになる。どうにかして真ん中以外コンストラクタできないか…
  $this->load->view('templates/header' , $data);
  $this->load->view('pages/' .$page, $data);
  $this->load->view('templates/footer', $data);
  }
}
