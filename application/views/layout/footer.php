
       
       <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
            </footer>
            </div>
        </div>
        <script>
            function hitungJumlah() {
                var x = document.getElementById("inputHarga").value;
                var y = document.getElementById("inputJumlah").value;
                var yy = document.getElementById("inputbayar").value;
                if (isNaN(y)) {
                    document.getElementById("inputJumlah").innerHTML = "Masukkan bilangan yang valid!";
                    return;
                }
                // Penanganan input yang kosong
                if (y === "") {
                    y = y || 10000;
                }
                var z = (parseInt(x) + parseInt(y));
                document.getElementById("Total").innerHTML = z;
                var zz = (parseInt(yy) - parseInt(z)).toLocaleString();
                document.getElementById("kembalian").innerHTML = zz;
            }
            document.getElementById("inputHarga").addEventListener("input", hitungJumlah);
            document.getElementById("inputJumlah").addEventListener("input", hitungJumlah);
            document.getElementById("inputbayar").addEventListener("input", hitungJumlah);
        </script>
        <script src="<?= base_url('template_admin/css/sweetalert2/sweetalert.min.js')?>"></script>
        <script src="<?= base_url('template_admin/js/sweetalert.js')?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('template_admin/js/scripts.js')?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('template_admin/assets/demo/chart-area-demo.js')?>"></script>
        <script src="<?= base_url('template_admin/assets/demo/chart-bar-demo.js')?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url('template_admin/js/datatables-simple-demo.js')?>"></script>
    </body>
</html>