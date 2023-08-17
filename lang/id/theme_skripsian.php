<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
                                                                                                                                    
// A description shown in the admin theme selector.                                                                                 
$string['choosereadme'] = 'Tema Skripsian adalah anak tema dari Boost.';
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'Skripsian';

// Name of the settings pages.
$string['configtitle'] = 'Pengaturan Skripsian';

$string['currentinparentheses'] = '(saat ini)';
$string['region-side-pre'] = 'Kanan';
$string['prev_section'] = 'Bagian sebelumnya';
$string['next_section'] = 'Bagian setelahnya';
$string['themedevelopedby'] = 'Copyright &#169; Ahmad Fathi Ibrahimov 2023';
$string['access'] = 'Akses';
$string['prev_activity'] = 'Aktivitas sebelumnya';
$string['next_activity'] = 'Aktivitas selanjutnya';
$string['donthaveanaccount'] = 'Belum punya akun?';
$string['signinwith'] = 'Masuk dengan';
$string['welcomemessage'] = 'Selamat Datang';

// General settings tab.
$string['generalsettings'] = 'Umum';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Logo ini akan ditampilkan di header.';
$string['favicon'] = 'Favicon khusus';
$string['favicondesc'] = 'Unggah favicon milikmu sendiri. File harus berekstensi .ico.';
$string['preset'] = 'Preset Tema';
$string['preset_desc'] = 'Pilih preset untuk mengubah tampilan tema secara luas.';
$string['presetfiles'] = 'File preset tambahan tema.';
$string['presetfiles_desc'] = 'File preset dapat digunakan untuk mengubah penampilan tema secara dramatis. Lihat <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> untuk informasi mengenai pembuatan dan penyebaran file preset milikmu sendiri, dan lihat <a href=http://moodle.net/boost>Presets repository</a> untuk preset yang orang lain sudah sebarkan.';
$string['loginbgimg'] = 'Latar belakang halaman masuk';
$string['loginbgimg_desc'] = 'Unggah gambar latar belakang khusus untuk halaman masuk.';
$string['brandcolor'] = 'Warna Merk';
$string['brandcolor_desc'] = 'Warna Aksen.';
$string['secondarymenucolor'] = 'Warna menu sekunder';
$string['secondarymenucolor_desc'] = 'Warna latar belakang menu sekunder';
$string['navbarbg'] = 'Warna navbar';
$string['navbarbg_desc'] = 'Warna navbar kiri';
$string['navbarbghover'] = 'Warna navbar melayang';
$string['navbarbghover_desc'] = 'Warna navbar melayang bagian kiri';
$string['fontsite'] = 'Font situs';
$string['fontsite_desc'] = 'Font situs bawaan. Anda dapat mencoba tema di <a href="https://fonts.google.com">Google Fonts site</a>.';
$string['enablecourseindex'] = 'Aktifkan indeks kelas';
$string['enablecourseindex_desc'] = 'Anda dapat menampilkan/menyembunyikan navigasi indeks kelas';

// Advanced settings tab.
$string['advancedsettings'] = 'Lanjutan';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'Dalam kolom ini anda dapat menyediakan kode SCSS untuk diinisialisasi, kode tersebut akan dimasukkan dibagian awal. Pengaturan ini seringnya digunakan untuk mendefinisikan variabel..';
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Gunakan kolom ini untuk menyediakan kode SCSS atau CSS yang akan dimasukkan ke bagian akhir dari lembar gaya.';
$string['googleanalytics'] = 'Kode Google Analytics V4';
$string['googleanalyticsdesc'] = 'Mohon masukkan kode Google Analytics V4 milikmu untuk mengaktifkan analitik ke situs webmu. Format kodenya seharusnya seperti ini [G-XXXXXXXXXX]';

// Frontpage settings tab.
$string['frontpagesettings'] = 'Halaman Depan';

$string['disableteacherspic'] = 'Nonaktifkan gambar guru';
$string['disableteacherspicdesc'] = 'Pengaturan ini menyembunyikan gambar guru dari kartu kelas.';

$string['sliderfrontpageloggedin'] = 'Tampilkan slideshow di halaman depan setelah masuk?';
$string['sliderfrontpageloggedindesc'] = 'Jika diaktifkan, slideshow akan ditampilkan di halaman depan menggantikan gambar header.';
$string['slidercount'] = 'Jumlah slider';
$string['slidercountdesc'] = 'Pilih berapa banyak slide yang ingin ditambahkan <strong>kemudian klik SIMPAN</strong> untuk memuat kolom input.';
$string['sliderimage'] = 'Gambar slider';
$string['sliderimagedesc'] = 'Tambahkan gambar ke slide. Ukuran yang direkomendasikan adalah 1500px x 500px atau lebih tinggi.';

$string['faq'] = 'FAQ';
$string['faqcount'] = 'Pertanyaan FAQ';
$string['faqcountdesc'] = 'Pilih berapa banyak pertanyaan yang ingin ditambahkan <strong>kemudian klik SIMPAN</strong> untuk memuat kolom input.<br>jika tidak menginginkan FAQ, pilih saja 0.';
$string['faqquestion'] = 'Pertanyaan FAQ {$a}';
$string['faqanswer'] = 'Jawaban FAQ {$a}';

// Footer settings tab.
$string['footersettings'] = 'Footer';
$string['sitesummary'] = 'Ringkasan situs';
$string['sitesummarydesc'] = 'Masukkan ringkasan untuk situs ini';
$string['website'] = 'URL Website';
$string['websitedesc'] = 'Website Perusahaan';
$string['mobile'] = 'No. telepon';
$string['mobiledesc'] = 'Masukkan No. telepon contoh: +6212345678901';
$string['mail'] = 'E-Mail';
$string['maildesc'] = 'E-mail support perusahaan';
$string['facebook'] = 'URL Facebook';
$string['facebookdesc'] = 'Masukkan URL Facebook. (contoh http://www.facebook.com/myinstitution)';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Masukkan URL twitter. (contoh http://www.twitter.com/myinstitution)';
$string['linkedin'] = 'URL Linkedin';
$string['linkedindesc'] = 'Masukkan URL Linkedin. (contoh http://www.linkedin.com/myinstitution)';
$string['youtube'] = 'Youtube URL';
$string['youtubedesc'] = 'Masukkan URL Youtube. (contoh https://www.youtube.com/user/myinstitution)';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Masukkan URL Instagram. (contoh https://www.instagram.com/myinstitution)';
$string['whatsapp'] = 'Whatsapp number';
$string['whatsappdesc'] = 'Masukkan nomor whatsapp untuk dihubungi.';
$string['telegram'] = 'Telegram';
$string['telegramdesc'] = 'Masukkan kontak Telegram atau tautan grup.';
$string['contactus'] = 'Hubungi kami';
$string['followus'] = 'Ikuti kami';

$string['mobiletooltip'] = 'Mobile';
$string['mailtooltip'] = 'E-Mail';
$string['facebooktooltip'] = 'Facebook';
$string['twittertooltip'] = 'Twitter';
$string['linkedintooltip'] = 'Linkedin';
$string['youtubetooltip'] = 'Youtube';
$string['instagramtooltip'] = 'Instagram';
$string['whatsapptooltip'] = 'Whatsapp';
$string['telegramtooltip'] = 'Telegram';

// Mypublic page.
$string['aboutme'] = 'Tentang saya';
$string['personalinformation'] = 'Informasi pribadi';
$string['addcontact'] = 'Tambahkan kontak';
$string['removecontact'] = 'Hapus kontak';

// Theme settings.
$string['themesettings:accessibility'] = 'Aksesibilitas';
$string['themesettings:fonttype'] = 'Tipe font';
$string['themesettings:defaultfont'] = 'Font bawaan';
$string['themesettings:dyslexicfont'] = 'Font Dyslexic';
$string['themesettings:enableaccessibilitytoolbar'] = 'Aktifkan toolbar aksesibilitas';
$string['themesettingg:successfullysaved'] = 'Pengaturan aksesibilitas sukses disimpan';

// Accessibility features.
$string['accessibility:fontsize'] = 'Ukuran font';
$string['accessibility:decreasefont'] = 'Kurangi ukuran font';
$string['accessibility:resetfont'] = 'Atur ulang ukuran font';
$string['accessibility:increasefont'] = 'Tingkatkan ukuran font';

// Data privacy.
$string['privacy:metadata:preference:accessibilitystyles_fontsizeclass'] = 'Preferensi pengguna untuk ukuran font.';
$string['privacy:metadata:preference:themeskripsiansettings_fonttype'] = 'Preferensi pengguna untuk tipe font.';
$string['privacy:metadata:preference:themeskripsiansettings_enableaccessibilitytoolbar'] = 'Preferensi pengguna untuk mengaktifkan toolbar aksesibilitas.';

$string['privacy:accessibilitystyles_fontsizeclass'] = 'Preferensi saat ini untuk ukuran font adalah: {$a}.';
$string['privacy:themeskripsiansettings_fonttype'] = 'Preferensi saat ini untuk tipe font adalah: {$a}.';
$string['privacy:themeskripsiansettings_enableaccessibilitytoolbar'] = 'Preferensi saat ini untuk pengaktifan toolbar aksesibiltas adalah untuk menampilkannya.';
