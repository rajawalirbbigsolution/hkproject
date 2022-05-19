<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'spadmin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['error_404'] = "guest/error_404";

//$route['welcome'] = "welcome";
//$route['welcome/login'] = "welcome/login";

$route['sitemap.xml'] = "sitemap";
$route['sitemap_id.xml'] = "sitemap/bahasa/id";
$route['sitemap_en.xml'] = "sitemap/bahasa/en";
$route['sitemap_kategori.xml'] = "sitemap/jenis_sitemap/kategori";
$route['sitemap_halaman.xml'] = "sitemap/jenis_sitemap/halaman";
$route['sitemap_attachments.xml'] = "sitemap/jenis_sitemap/attachments";
$route['sitemap_artikel.xml'] = "sitemap/jenis_sitemap/artikel";

$route['sitemap_katalog.xml'] = "sitemap/jenis_sitemap/katalog";

$route['sitemap_categories.xml'] = "sitemap/jenis_sitemap/categories";
$route['sitemap_pages.xml'] = "sitemap/jenis_sitemap/pages";
$route['sitemap_articles.xml'] = "sitemap/jenis_sitemap/articles";


$route['lawang'] = "lawang";
$route['lawang/logout'] = "lawang/logout";

$route['login'] = "guest/login_member";
$route['logout'] = "guest/logout";

$route['ganti_password'] = "guest/ganti_password";

$route['lupa_password'] = "guest/lupa_password";

$route['spadmin'] = "spadmin";
$route['spadmin/(:any)'] = "spadmin/$1";

$route['en/search'] = "guest_en/search";

$route['search'] = "guest/search";

$route['en'] = "guest_en";
$route['en/services/(:any)/(:any)'] = "guest_en/layanan/$1/$2";
$route['en/services/(:any)'] = "guest_en/layanan/$1";
$route['en/services'] = "guest_en/layanan/";
$route['en/project/(:num)'] = "guest_en/proyek/project/$1";
$route['en/project'] = "guest_en/proyek/project";
$route['en/project_detail/(:any)/(:any)'] = "guest_en/proyek_detail/project/$1/$2";
$route['en/project_detail/(:any)'] = "guest_en/proyek_detail/project/$1";
$route['en/project_categories/(:num)/(:num)'] = "guest_en/proyek_kategori/$1/$2";
$route['en/project_categories/(:num)'] = "guest_en/proyek_kategori/$1";
$route['en/auction/(:num)'] = "guest_en/artikel/lelang/$1";
$route['en/auction'] = "guest_en/artikel/lelang";
$route['en/rental/(:num)'] = "guest_en/artikel/penyewaan/$1";
$route['en/rental'] = "guest_en/artikel/penyewaan";
$route['en/news/(:num)'] = "guest_en/artikel/berita/$1";
$route['en/news'] = "guest_en/artikel/berita";
$route['en/read/(:any)/(:any)'] = "guest_en/artikel_baca/berita/$1/$2";
//$route['profil/read (:any)/(:any)'] = "guest/artikel_baca/profil/$1/$2";
$route['en/read/(:any)'] = "guest_en/artikel_baca/berita/$1";
$route['en/jobvacancy/(:num)'] = "guest_en/artikel/lowongan/$1";
$route['en/jobvacancy'] = "guest_en/artikel/lowongan";
$route['en/csr/(:num)'] = "guest_en/artikel/csr/$1";
$route['en/csr'] = "guest_en/artikel/csr";
$route['en/contact/send/(:any)'] = "guest_en/kontak/send/$1";
$route['en/contact'] = "guest_en/kontak";
$route['en/subscribe'] = "guest_en/subscribe";

$route['en/programs/(:any)/(:any)/curriculum'] = "guest_en/prodi_kurikulum/$1_$2";
$route['en/programs/(:any)/(:any)/profile/(:num)/(:any)'] = "guest_en/prodi_profil_detail/$1_$2/$3";
$route['en/programs/(:any)/(:any)/profile'] = "guest_en/prodi_profil/$1_$2";
$route['en/programs/(:any)/(:any)/(:any)'] = "guest/error_404";
$route['en/programs/(:any)/(:any)'] = "guest_en/prodi/$1_$2";
$route['en/programs/(:any)'] = "guest_en/prodi/$1_0";

$route['prodi/(:any)/(:any)/kurikulum'] = "guest/prodi_kurikulum/$1_$2";
$route['prodi/(:any)/(:any)/profil/(:any)/(:any)'] = "guest/prodi_profil_detail/$1_$2/$3";
$route['prodi/(:any)/(:any)/profil'] = "guest/prodi_profil/$1_$2";
$route['prodi/(:any)/(:any)/(:any)'] = "guest/error_404";
$route['prodi/(:any)/(:any)'] = "guest/prodi/$1_$2";

$route['en/yearly-reports/(:num)'] = "guest_en/articles/yearly-reports/$1";
$route['en/yearly-reports'] = "guest_en/articles/yearly-reports";
//$route['en/read/(:any)/(:any)'] = "guest_en/read/news/$1/$2";
//$route['en/read/(:any)'] = "guest_en/read/news/$1";
//$route['en/news/(:num)'] = "guest_en/articles/news/$1";
//$route['en/news'] = "guest_en/articles/news";
$route['en/achievements/(:num)'] = "guest_en/articles/achievements/$1";
$route['en/achievements'] = "guest_en/articles/achievements";
$route['en/announcements/(:num)'] = "guest_en/articles/announcements/$1";
$route['en/announcements'] = "guest_en/articles/announcements";
$route['en/agendas/(:num)'] = "guest_en/articles/agendas/$1";
$route['en/agendas'] = "guest_en/articles/agendas";
$route['en/infographics/(:num)'] = "guest_en/articles/infographics/$1";
$route['en/infographics'] = "guest_en/articles/infographics";

$route['en/facilities/(:any)/(:any)'] = "guest_en/facilities/$1/$2";
$route['en/facilities/(:any)'] = "guest_en/facilities/$1";
$route['en/facilities'] = "guest_en/facilities/";
$route['en/hima'] = "guest_en/organization/hima";
$route['en/ukm'] = "guest_en/organization/ukm";
$route['en/hima/(:any)/(:any)'] = "guest_en/organization/hima/$1/$2";
$route['en/ukm/(:any)/(:any)'] = "guest_en/organization/ukm/$1/$2";
$route['en/contacts/send/(:any)'] = "guest_en/contacts/send/$1";
$route['en/contacts'] = "guest_en/contacts";
$route['en/(:any)'] = "guest_en/page/$1";

$route['prestasi'] = "guest/prestasi";
$route['read/(:any)/(:any)'] = "guest/artikel_baca/berita/$1/$2";
$route['read/(:any)'] = "guest/artikel_baca/berita/$1";
$route['infografis/(:num)'] = "guest/artikel/infografis/$1";
$route['infografis'] = "guest/artikel/infografis";
$route['berita/(:num)'] = "guest/artikel/berita/$1";
$route['katalog/(:num)'] = "guest/katalog/katalog/$1";
$route['berita'] = "guest/artikel/berita";

$route['laporan-tahunan/(:num)'] = "guest/artikel/laporan-tahunan/$1";
$route['laporan-tahunan'] = "guest/artikel/laporan-tahunan";
$route['prestasi/(:num)'] = "guest/artikel/prestasi/$1";
$route['prestasi'] = "guest/artikel/prestasi";
$route['lowongan/(:num)'] = "guest/artikel/lowongan/$1";
$route['lowongan'] = "guest/artikel/lowongan";
//$route['pengumuman/detail/(:any)/(:any)'] = "guest/artikel_baca/pengumuman/$1/$2";
$route['csr/(:num)'] = "guest/artikel/csr/$1";
$route['csr'] = "guest/artikel/csr";
$route['lelang/(:num)'] = "guest/artikel/lelang/$1";
$route['lelang'] = "guest/artikel/lelang";
$route['penyewaan/(:num)'] = "guest/artikel/penyewaan/$1";
$route['penyewaan'] = "guest/artikel/penyewaan";
//$route['layanan/(:any)/(:any)'] = "guest/layanan/$1/$2";
//$route['layanan/(:any)'] = "guest/layanan/$1";
//$route['layanan'] = "guest/layanan/";
//$route['proyek/(:num)'] = "guest/proyek/proyek/$1";
//$route['proyek'] = "guest/proyek/proyek";
//$route['proyek_detail/(:any)/(:any)'] = "guest/proyek_detail/proyek/$1/$2";
//$route['proyek_detail/(:any)'] = "guest/proyek_detail/proyek/$1";

$route['katalog_detail/(:any)/(:any)'] = "guest/item_detail/item/$1";
$route['item_detail/(:any)'] = "guest/item_detail/item/$1";
$route['proyek_kategori/(:num)/(:num)'] = "guest/proyek_kategori/$1/$2";
$route['proyek_kategori/(:num)'] = "guest/proyek_kategori/$1";

$route['katalog_kategori/(:num)/(:num)'] = "guest/katalog_kategori/$1/$2";
$route['katalog_kategori/(:num)'] = "guest/katalog_kategori/$1";

$route['hima'] = "guest/organisasi/hima";
$route['ukm'] = "guest/organisasi/ukm";
$route['hima/(:any)/(:any)'] = "guest/organisasi/hima/$1/$2";
$route['ukm/(:any)/(:any)'] = "guest/organisasi/ukm/$1/$2";
$route['galeri'] = "guest/galeri";
$route['kontak/pesan'] = "guest/kontak/pesan/$1";
$route['kontak'] = "guest/kontak";

$route['item_detail'] = "guest/item_detail";

$route['katalog'] = "guest/katalog/";
$route['katalog'] = "guest/katalog/katalog";

$route['register_member'] = "guest/register_member";
$route['verifikasi_akun'] = "guest/verifikasi_akun";

$route['manage_member'] = "guest/manage_member";
$route['manage_member/pesan'] = "guest/manage_member/pesan/$1";

$route['edit_member'] = "guest/edit_member";
$route['manage_member'] = "guest/manage_member";

$route['subscribe'] = "guest/subscribe";
$route['page/(:any)'] = "guest/extra_pages/$1";
$route['prodi/(:any)/(:any)/kurikulum'] = "guest/prodi_kurikulum/$1_$2";
$route['prodi/(:any)/(:any)/profil/(:any)/(:any)'] = "guest/prodi_profil_detail/$1_$2/$3/$4";
$route['prodi/(:any)/(:any)/profil/(:any)'] = "guest/prodi_profil_detail/$1_$2/$3";
$route['prodi/(:any)/(:any)/profil'] = "guest/prodi_profil/$1_$2";
$route['prodi/(:any)/(:any)/(:any)'] = "guest/error_404";
$route['prodi/(:any)/(:any)'] = "guest/prodi/$1_$2";
$route['prodi/(:any)'] = "guest/prodi/$1_0";
$route['rss/(:any)'] = "guest/rss/$1";
$route['rss'] = "guest/rss";


//$route['(:any)/(:any)'] = "guest/error_404";
$route['katalog/search'] = "guest/katalog/search";
$route['katalog/search/(:num)'] = "guest/katalog/search/$1";

$route['katalog_kategori/search'] = "guest/katalog/search";
$route['katalog_kategori/search/(:num)'] = "guest/katalog/search/$1";

$route['katalog_kategori/(:num)/cari'] = "guest/katalog_kategori/$1/cari";

$route['(:any)'] = "guest/page/$1";
$route['404_override'] = 'guest/error_404';



//$route['katalog_search/(:any)/(:any)'] = "guest/katalog_search/$1/$2";
//$route['katalog_search/'] = "guest/katalog_search/";



//route guest en


