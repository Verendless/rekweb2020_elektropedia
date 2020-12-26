$(document).ready(function() {
    $.getJSON('https://dev.farizdotid.com/api/daerahindonesia/provinsi', function(data) {
        var provinsi = "<option value=''>Pilih Provinsi</option>";
        for (var i = 0; i < 34; i++) {
            provinsi += "<option value='" + data['provinsi'][i]['nama'] + "'id_provinsi='" + data['provinsi'][i]['id'] + "'>";
            provinsi += data['provinsi'][i]['nama'];
            provinsi += "</option>";
        }
        $("select[name = provinsi]").html(provinsi);
    });

    $("#provinsi").change(function() {
        var provinsi = $('option:selected', this).attr("id_provinsi");
        console.log(provinsi);
        $.getJSON('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + provinsi, function(data) {
            var kota = "<option value=''>Pilih Kota</option>";
            Object.entries(data).map(item => {
                item[1].forEach(function(dataKota) {
                    kota += "<option value='" + dataKota['nama'] + "'id_kota='" + dataKota['id'] + "'>";
                    kota += dataKota['nama'];
                    kota += "</option>";
                });
                $("select[name = kota]").html(kota);
            });
        });
    });

    $("#kota").change(function() {
        var kota = $('option:selected', this).attr("id_kota");
        $.getJSON('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + kota, function(data) {
            var kecamatan = "<option value=''>Pilih Kecamatan</option>";
            Object.entries(data).map(item => {
                item[1].forEach(function(dataKecamatan) {
                    kecamatan += "<option value='" + dataKecamatan['nama'] + "'id_kecamatan='" + dataKecamatan['id'] + "'>";
                    kecamatan += dataKecamatan['nama'];
                    kecamatan += "</option>";
                });
                $("select[name = kecamatan]").html(kecamatan);
            });
        });
    });

    $("#kecamatan").change(function() {
        var kecamatan = $('option:selected', this).attr("id_kecamatan");
        $.getJSON('https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + kecamatan, function(data) {
            var kelurahan = "<option value=''>Pilih Kelurahan</option>";
            Object.entries(data).map(item => {
                item[1].forEach(function(dataKelurahan) {
                    kelurahan += "<option value='" + dataKelurahan['nama'] + "'>";
                    kelurahan += dataKelurahan['nama'];
                    kelurahan += "</option>";
                });
                $("select[name = kelurahan]").html(kelurahan);
            });
        });
    });
});