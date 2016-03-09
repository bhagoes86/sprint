angular.module('goprint',[])
.controller('mainCtrl',[
  "$scope",
  function($scope){
    $scope.setting = {
      facebook: "http://facebook.com",
      twitter: "http://twitter.com",
      google: "http://plus.google.com",
      title: "GoPrint, Ngeprint Online !",
      description: "Sekarang kamu bisa Ngeprint Dimanapun, Kapanpun, Tanpa Antri, dan Tentunya dengan harga yang tetap murah :)",
      wishmessage: "Masukan email kamu dan kami akan memberikan notifikasi ketika system kami telah siap.",
      mudah: "Kamu tidak perlu lagi repot bawa flashdisk karena hanya butuh upload dokumen :)",
      cepat: "Semua dokumen akan di proses oleh sistem yang tentunya lebih efisien dan cepat :)",
      noantri: "Tidak perlu datang ke tempat, setelah selesai segera kami kirimi sms :)",
    };
  }]);